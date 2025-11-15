<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CancelInvoice implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $invoiceUUID = null;

    /**
     * Constructor
     *
     * @param null | string $invoiceUUID
     */
    public function __construct(?string $invoiceUUID)
    {
        $this->invoiceUUID = $invoiceUUID;
    }

    /**
     * @return null | string
     */
    public function getInvoiceUUID(): ?string
    {
        return $this->invoiceUUID;
    }

    /**
     * @param null | string $invoiceUUID
     * @return static
     */
    public function withInvoiceUUID(?string $invoiceUUID): static
    {
        $new = clone $this;
        $new->invoiceUUID = $invoiceUUID;

        return $new;
    }
}

