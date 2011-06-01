<?php
namespace Yap\Module;

class Bootstrap
{
    protected $_config = null;

    public function getConfig()
    {
        if (null === $this->_config) {
            $this->_config = new \Yap\Config();
        }
        return $this->_config;
    }

    public function setConfig(\Yap\Config $config)
    {
        $this->_config = $config;
        return $this;
    }

    public function __construct($options = null)
    {
        if ($options instanceof \Yap\Config) {
            $this->setConfig($options);
        }
    }

    public function bootstrap()
    {
        
    }
}
