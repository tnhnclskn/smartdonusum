<?php

namespace SmartDonusum\EArchive\Type;

use \SmartDonusum\EArchive\Type\PrefixCode;

class PrefixCodeStatus extends PrefixCode
{
    /**
     * @var bool
     */
    private bool $active;

    /**
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return static
     */
    public function withActive(bool $active): static
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }
}

