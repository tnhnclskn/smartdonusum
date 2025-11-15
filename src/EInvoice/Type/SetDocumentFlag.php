<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetDocumentFlag implements RequestInterface
{
    /**
     * @var null | \SmartDonusum\EInvoice\Type\FlagSetter
     */
    private ?\SmartDonusum\EInvoice\Type\FlagSetter $flagSetter = null;

    /**
     * Constructor
     *
     * @param null | \SmartDonusum\EInvoice\Type\FlagSetter $flagSetter
     */
    public function __construct(?\SmartDonusum\EInvoice\Type\FlagSetter $flagSetter)
    {
        $this->flagSetter = $flagSetter;
    }

    /**
     * @return null | \SmartDonusum\EInvoice\Type\FlagSetter
     */
    public function getFlagSetter(): ?\SmartDonusum\EInvoice\Type\FlagSetter
    {
        return $this->flagSetter;
    }

    /**
     * @param null | \SmartDonusum\EInvoice\Type\FlagSetter $flagSetter
     * @return static
     */
    public function withFlagSetter(?\SmartDonusum\EInvoice\Type\FlagSetter $flagSetter): static
    {
        $new = clone $this;
        $new->flagSetter = $flagSetter;

        return $new;
    }
}

