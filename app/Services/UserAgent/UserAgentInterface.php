<?php

namespace App\Services\UserAgent;

interface UserAgentInterface
{
    public function getDevice(): ?string;
}