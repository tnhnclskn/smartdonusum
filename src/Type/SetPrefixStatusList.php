<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetPrefixStatusList implements RequestInterface
{
    /**
     * @var array<int<0,max>, \SmartDonusum\Type\PrefixCodeStatus>
     */
    private array $prefixCodeStatusList;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \SmartDonusum\Type\PrefixCodeStatus> $prefixCodeStatusList
     */
    public function __construct(array $prefixCodeStatusList)
    {
        $this->prefixCodeStatusList = $prefixCodeStatusList;
    }

    /**
     * @return array<int<0,max>, \SmartDonusum\Type\PrefixCodeStatus>
     */
    public function getPrefixCodeStatusList(): array
    {
        return $this->prefixCodeStatusList;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\Type\PrefixCodeStatus> $prefixCodeStatusList
     * @return static
     */
    public function withPrefixCodeStatusList(array $prefixCodeStatusList): static
    {
        $new = clone $this;
        $new->prefixCodeStatusList = $prefixCodeStatusList;

        return $new;
    }
}

