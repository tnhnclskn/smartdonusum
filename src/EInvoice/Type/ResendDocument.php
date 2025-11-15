<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ResendDocument implements RequestInterface
{
    /**
     * @var array<int<0,max>, string>
     */
    private array $uuidList;

    /**
     * Constructor
     *
     * @param array<int<0,max>, string> $uuidList
     */
    public function __construct(array $uuidList)
    {
        $this->uuidList = $uuidList;
    }

    /**
     * @return array<int<0,max>, string>
     */
    public function getUuidList(): array
    {
        return $this->uuidList;
    }

    /**
     * @param array<int<0,max>, string> $uuidList
     * @return static
     */
    public function withUuidList(array $uuidList): static
    {
        $new = clone $this;
        $new->uuidList = $uuidList;

        return $new;
    }
}

