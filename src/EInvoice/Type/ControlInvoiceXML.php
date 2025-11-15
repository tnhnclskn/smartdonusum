<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ControlInvoiceXML implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $invoiceXML = null;

    /**
     * Constructor
     *
     * @param null | string $invoiceXML
     */
    public function __construct(?string $invoiceXML)
    {
        $this->invoiceXML = $invoiceXML;
    }

    /**
     * @return null | string
     */
    public function getInvoiceXML(): ?string
    {
        return $this->invoiceXML;
    }

    /**
     * @param null | string $invoiceXML
     * @return static
     */
    public function withInvoiceXML(?string $invoiceXML): static
    {
        $new = clone $this;
        $new->invoiceXML = $invoiceXML;

        return $new;
    }
}

