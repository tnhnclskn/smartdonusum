<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetDocumentFlag implements RequestInterface
{
    /**
     * @var null | \SmartDonusum\Type\FlagSetter
     */
    private ?\SmartDonusum\Type\FlagSetter $flagSetter = null;

    /**
     * Constructor
     *
     * @param null | \SmartDonusum\Type\FlagSetter $flagSetter
     */
    public function __construct(?\SmartDonusum\Type\FlagSetter $flagSetter)
    {
        $this->flagSetter = $flagSetter;
    }

    /**
     * @return null | \SmartDonusum\Type\FlagSetter
     */
    public function getFlagSetter(): ?\SmartDonusum\Type\FlagSetter
    {
        return $this->flagSetter;
    }

    /**
     * @param null | \SmartDonusum\Type\FlagSetter $flagSetter
     * @return static
     */
    public function withFlagSetter(?\SmartDonusum\Type\FlagSetter $flagSetter): static
    {
        $new = clone $this;
        $new->flagSetter = $flagSetter;

        return $new;
    }
}

