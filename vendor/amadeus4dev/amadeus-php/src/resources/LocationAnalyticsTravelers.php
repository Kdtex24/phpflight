<?php

declare(strict_types=1);

namespace Amadeus\Resources;

/**
 * Sub-resource in LocationAnalytics.
 * @see LocationAnalytics::getTravelers()
 */
class LocationAnalyticsTravelers implements ResourceInterface
{
    private ?int $score = null;

    /**
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->score;
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
