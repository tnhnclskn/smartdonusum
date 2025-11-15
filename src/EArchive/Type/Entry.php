<?php

namespace SmartDonusum\EArchive\Type;

class Entry
{
    /**
     * @var null | string
     */
    private ?string $key = null;

    /**
     * @var null | string
     */
    private ?string $value = null;

    /**
     * @return null | string
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param null | string $key
     * @return static
     */
    public function withKey(?string $key): static
    {
        $new = clone $this;
        $new->key = $key;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param null | string $value
     * @return static
     */
    public function withValue(?string $value): static
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }
}

