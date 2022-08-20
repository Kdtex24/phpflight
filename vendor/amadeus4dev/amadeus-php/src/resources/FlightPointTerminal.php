<?php

declare(strict_types=1);

namespace Amadeus\Resources;

/**
 * Sub-resource in Arrival, Departure
 * @see FlightPointArrival::getTerminal()
 * @see FlightPointDeparture::getTerminal()
 */
class FlightPointTerminal implements ResourceInterface
{
    private ?string $code = null;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    public function __set($name, $value): void
    {
        $this->$name = $value;
    }

    public function __toString(): string
    {
        return Resource::toString(get_object_vars($this));
    }
}
