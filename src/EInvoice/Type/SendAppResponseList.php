<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendAppResponseList implements RequestInterface
{
    /**
     * @var array<int<0,max>, \SmartDonusum\EInvoice\Type\AppResponseDocument>
     */
    private array $appResponseList;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \SmartDonusum\EInvoice\Type\AppResponseDocument> $appResponseList
     */
    public function __construct(array $appResponseList)
    {
        $this->appResponseList = $appResponseList;
    }

    /**
     * @return array<int<0,max>, \SmartDonusum\EInvoice\Type\AppResponseDocument>
     */
    public function getAppResponseList(): array
    {
        return $this->appResponseList;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\EInvoice\Type\AppResponseDocument> $appResponseList
     * @return static
     */
    public function withAppResponseList(array $appResponseList): static
    {
        $new = clone $this;
        $new->appResponseList = $appResponseList;

        return $new;
    }
}

