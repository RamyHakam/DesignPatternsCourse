<?php


namespace Structural\DependencyInjection;


class DataBaseConnection
{
    /**
     * @var DataBaseConfig
     */
    private $config;

    public function __construct(DataBaseConfig $config)
    {
        $this->config = $config;
    }

    public function getConnectionString()
    {
        return sprintf('mysql://%s:%s@%s:%s/%s',
        $this->config->getUserName(),
        $this->config->getPassword(),
        $this->config->getHost(),
        $this->config->getPort(),
        $this->config->getDatabaseName()
        );
    }
}