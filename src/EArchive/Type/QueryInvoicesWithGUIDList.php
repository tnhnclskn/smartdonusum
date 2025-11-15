<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class QueryInvoicesWithGUIDList implements RequestInterface
{
    /**
     * @var array<int<0,max>, string>
     */
    private array $guidList;

    /**
     * Constructor
     *
     * @param array<int<0,max>, string> $guidList
     */
    public function __construct(array $guidList)
    {
        $this->guidList = $guidList;
    }

    /**
     * @return array<int<0,max>, string>
     */
    public function getGuidList(): array
    {
        return $this->guidList;
    }

    /**
     * @param array<int<0,max>, string> $guidList
     * @return static
     */
    public function withGuidList(array $guidList): static
    {
        $new = clone $this;
        $new->guidList = $guidList;

        return $new;
    }
}

