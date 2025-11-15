<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SetEmailSent implements RequestInterface
{
    /**
     * @var array<int<0,max>, string>
     */
    private array $invoice_uuid_list;

    /**
     * Constructor
     *
     * @param array<int<0,max>, string> $invoice_uuid_list
     */
    public function __construct(array $invoice_uuid_list)
    {
        $this->invoice_uuid_list = $invoice_uuid_list;
    }

    /**
     * @return array<int<0,max>, string>
     */
    public function getInvoiceUuidList(): array
    {
        return $this->invoice_uuid_list;
    }

    /**
     * @param array<int<0,max>, string> $invoice_uuid_list
     * @return static
     */
    public function withInvoiceUuidList(array $invoice_uuid_list): static
    {
        $new = clone $this;
        $new->invoice_uuid_list = $invoice_uuid_list;

        return $new;
    }
}

