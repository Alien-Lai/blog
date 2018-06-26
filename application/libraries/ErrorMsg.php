<?php

/**
 * 通用错误类，其实用异常不就可以了...为了兼容旧系统，还是保留该类
 */
class ErrorMsg
{
    /**
     * @var string 错误信息
     */
    private $error = '';

    /**
     * @var int 错误状态码
     */
    private $status = -1;

    /**
     * @param string $error 错误信息
     * @param int $status 错误状态码
     */
    public function __construct($error = '', $status = -1)
    {
        $this->error = $error;

        $this->status = (int)$status;
    }

    /**
     * 获取错误信息
     *
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * 获取错误状态码
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * 检查变量是否该错误类实例
     *
     * @param mixed &$obj
     * @return bool
     */
    public static function isError(&$obj)
    {
        return $obj instanceof self;
    }
}
