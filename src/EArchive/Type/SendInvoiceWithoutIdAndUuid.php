<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendInvoiceWithoutIdAndUuid implements RequestInterface
{
    /**
     * @var array<int<0,max>, \SmartDonusum\EArchive\Type\InputDocument>
     */
    private array $invoiceXMLList;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \SmartDonusum\EArchive\Type\InputDocument> $invoiceXMLList
     */
    public function __construct(array $invoiceXMLList)
    {
        $this->invoiceXMLList = $invoiceXMLList;
    }

    /**
     * @return array<int<0,max>, \SmartDonusum\EArchive\Type\InputDocument>
     */
    public function getInvoiceXMLList(): array
    {
        return $this->invoiceXMLList;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\EArchive\Type\InputDocument> $invoiceXMLList
     * @return static
     */
    public function withInvoiceXMLList(array $invoiceXMLList): static
    {
        $new = clone $this;
        $new->invoiceXMLList = $invoiceXMLList;

        return $new;
    }
}

