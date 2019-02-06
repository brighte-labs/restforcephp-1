<?php

namespace EventFarm\Restforce;


use Psr\Http\Message\ResponseInterface;

interface RestApexInterface
{
    /**
     * @param string $sobjectType object name
     * @param string $sobjectId object id
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function findApexObject(string $sobjectType, string $sobjectId): ResponseInterface;

    /**
     * @param string $sobjectType object name
     * @param array $data data
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createApexObject(string $sobjectType, array $data): ResponseInterface;

    /**
     * @param string $sobjectType object name
     * @param array $data data
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function updateApexObject(string $sobjectType, array $data): ResponseInterface;
}
