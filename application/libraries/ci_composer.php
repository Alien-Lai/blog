<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class CI_Composer
{
    public function __construct()
    {
        require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
    }
}
