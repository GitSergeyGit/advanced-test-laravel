<?php

namespace App\Services\Geo;

interface GeoServiceInterface
{
    /**
     * @return string|null
     */
    public function getIsoCode(): ?string;

    /**
     * @return string|null
     */
    public function getCountry(): ?string;

    /**
     * @param string $ip
     * @return void
     */
    public function parse(string $ip): void;
}