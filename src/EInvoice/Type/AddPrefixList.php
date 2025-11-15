<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddPrefixList implements RequestInterface
{
    /**
     * @var array<int<0,max>, \SmartDonusum\EInvoice\Type\PrefixCode>
     */
    private array $prefixList;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \SmartDonusum\EInvoice\Type\PrefixCode> $prefixList
     */
    public function __construct(array $prefixList)
    {
        $this->prefixList = $prefixList;
    }

    /**
     * @return array<int<0,max>, \SmartDonusum\EInvoice\Type\PrefixCode>
     */
    public function getPrefixList(): array
    {
        return $this->prefixList;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\EInvoice\Type\PrefixCode> $prefixList
     * @return static
     */
    public function withPrefixList(array $prefixList): static
    {
        $new = clone $this;
        $new->prefixList = $prefixList;

        return $new;
    }
}

