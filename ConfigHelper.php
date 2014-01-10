<?php
namespace Codeception\Module;

class ConfigHelper extends \Codeception\Module
{
    public function getConfig($key)
    {
        if (isset($this->config[$key])) {
            return $this->config[$key];
        } else {
            return null;
        }
    }
}
