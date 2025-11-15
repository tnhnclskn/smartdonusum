<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetUserAliases implements RequestInterface
{
    /**
     * @var array<int<0,max>, string>
     */
    private array $vknTcknList;

    /**
     * Constructor
     *
     * @param array<int<0,max>, string> $vknTcknList
     */
    public function __construct(array $vknTcknList)
    {
        $this->vknTcknList = $vknTcknList;
    }

    /**
     * @return array<int<0,max>, string>
     */
    public function getVknTcknList(): array
    {
        return $this->vknTcknList;
    }

    /**
     * @param array<int<0,max>, string> $vknTcknList
     * @return static
     */
    public function withVknTcknList(array $vknTcknList): static
    {
        $new = clone $this;
        $new->vknTcknList = $vknTcknList;

        return $new;
    }
}

