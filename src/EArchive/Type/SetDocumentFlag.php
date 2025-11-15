<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetDocumentFlag implements RequestInterface
{
    /**
     * @var null | \SmartDonusum\EArchive\Type\FlagSetter
     */
    private ?\SmartDonusum\EArchive\Type\FlagSetter $flagSetter = null;

    /**
     * Constructor
     *
     * @param null | \SmartDonusum\EArchive\Type\FlagSetter $flagSetter
     */
    public function __construct(?\SmartDonusum\EArchive\Type\FlagSetter $flagSetter)
    {
        $this->flagSetter = $flagSetter;
    }

    /**
     * @return null | \SmartDonusum\EArchive\Type\FlagSetter
     */
    public function getFlagSetter(): ?\SmartDonusum\EArchive\Type\FlagSetter
    {
        return $this->flagSetter;
    }

    /**
     * @param null | \SmartDonusum\EArchive\Type\FlagSetter $flagSetter
     * @return static
     */
    public function withFlagSetter(?\SmartDonusum\EArchive\Type\FlagSetter $flagSetter): static
    {
        $new = clone $this;
        $new->flagSetter = $flagSetter;

        return $new;
    }
}

