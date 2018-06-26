<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author 黄景祥<huangjx@cncn.com>
 * @author Chopin Ngo <wusb@cncn.com>
 *
 * 使用示例：
 *
 * ```php
 * // 区别于 CI 原本的 Encrypt 加密库类
 * $this->load->library('encrypter');
 *
 * // 加密
 * $encrypted_text = $this->encrypter->encrypt('text_to_encrypt', 'your key');
 * // 或
 * $this->encrypter->set_key('your key')->set_method('AES-128-CBC')->set_iv('your iv')->encrypt('text_to_encrypt');
 * if ($encrypted_text === false) {
 *     // 加密失败
 * } else {
 *     // 加密成功
 * }
 *
 * // 解密
 * $plain_text = $this->encrypter->decrypt($encrypted_text, 'your key');
 * if ($plain_text === false) {
 *     // 解密失败
 * } else {
 *     // 解密成功
 * }
 * ```
 *
 * 系统要求：
 * - 需启用的扩展：
 *     + openssl 扩展
 */
class Encrypter
{
    /**
     * 加密算法
     *
     * @var string
     */
    protected $method = 'AES-128-CBC';

    /**
     * 初始向量
     *
     * @var string
     */
    protected $iv = '';

    /**
     * 密钥
     *
     * @var string
     */
    protected $key = '';

    /**
     * 加密块大小
     *
     * @var int
     */
    protected $block_size = 16;

    /**
     * 是否需要补零
     * todo 根据加密算法判断是否需要填充0
     *
     * @var bool
     */
    protected $zero_padding = true;

    public function __construct()
    {
        if (!extension_loaded('openssl')) {
            log_message('error', 'OpenSSL 扩展未安装');
            header('HTTP/1.1 500 Internal Server Error');
            exit();
        }
    }

    /**
     * 设置密钥
     *
     * @param string $key 密钥
     * @return self
     */
    public function set_key($key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * 获取密钥
     *
     * @return string
     */
    public function get_key()
    {
        return $this->key;
    }

    /**
     * 设置加密算法
     *
     * @param string $method
     * @return self|null $method 不在支持的加密算法列表中，则返回 null
     */
    public function set_method($method)
    {
        if (!in_array($method, openssl_get_cipher_methods(true))) {
            return null;
        }
        $this->method = $method;
        $this->block_size = openssl_cipher_iv_length($method);
        return $this;
    }

    /**
     * 获取加密算法
     *
     * @return string
     */
    public function get_method()
    {
        return $this->method;
    }

    /**
     * 设置初始化向量 IV
     *
     * @param string $iv
     * @return self
     */
    public function set_iv($iv)
    {
        $this->iv = $iv;
        return $this;
    }

    /**
     * 获取初始化向量 IV
     *
     * @return string
     */
    public function get_iv()
    {
        return $this->iv;
    }

    /**
     * 加密文本
     *
     * @param string $data 明文
     * @param string $key 加密密钥
     * @param string $iv 初始向量
     * @return string|bool 成功返回密文，失败返回 false
     */
    public function encrypt($data, $key = '', $iv = '')
    {
        $iv = $iv !== '' && is_string($iv) ? $iv : $this->iv;
        $key = $key !== '' && is_string($key) ? $key : $this->key;
        if ($this->zero_padding) {
            // 填充 zero padding
            // http://cn2.php.net/manual/zh/function.openssl-encrypt.php#117499
            $len = strlen($data);
            $mod = $len % $this->block_size;
            if ($mod !== 0) {
                $data .= str_repeat("\0", $this->block_size - $mod);
            }
        }

        // 加密
        return openssl_encrypt($data, $this->method, $key, $this->zero_padding ? OPENSSL_ZERO_PADDING : 0, $iv);
    }

    /**
     * 解密文本
     *
     * @param string $data 包含初始向量的 Base64 编码的密文
     * @param string $key 解密密钥
     * @param string $iv 初始向量
     * @return bool|string  成功返回明文，失败返回 false
     */
    public function decrypt($data, $key = '', $iv = '')
    {
        $iv = $iv !== '' && is_string($iv) ? $iv : $this->iv;
        $key = $key !== '' && is_string($key) ? $key : $this->key;
        $plain_text = openssl_decrypt($data, $this->method, $key, $this->zero_padding ? OPENSSL_ZERO_PADDING : 0, $iv);
        // 去除 zero padding
        return $plain_text === false ? false : rtrim($plain_text, "\0");
    }

    /**
     * $this->encrypt 的别名方法
     *
     * @see $this->encrypt
     */
    public function encode($data, $key = '', $iv = '')
    {
        return $this->encrypt($data, $key, $iv);
    }

    /**
     * $this->decrypt 的别名方法
     *
     * @see $this->decrypt
     */
    public function decode($data, $key = '', $iv = '')
    {
        return $this->decrypt($data, $key, $iv);
    }
}
