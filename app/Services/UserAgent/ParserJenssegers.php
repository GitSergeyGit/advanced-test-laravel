<?php

namespace App\Services\UserAgent;

use Jenssegers\Agent\Agent;

class ParserJenssegers implements UserAgentInterface
{
    protected $_data;

    public function setUserAgent(string $userAgent)
    {
        $this->_data = new Agent($userAgent);
    }

    public function getDevice(): ?string
    {
        return $this->_data->device() ?? null;
    }
}