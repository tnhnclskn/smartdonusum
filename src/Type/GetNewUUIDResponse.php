<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetNewUUIDResponse implements ResultInterface
{
    /**
     * @var null | string
     */
    private ?string $return = null;

    /**
     * @return null | string
     */
    public function getReturn(): ?string
    {
        return $this->return;
    }

    /**
     * @param null | string $return
     * @return static
     */
    public function withReturn(?string $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

