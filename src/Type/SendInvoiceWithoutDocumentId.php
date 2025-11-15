<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendInvoiceWithoutDocumentId implements RequestInterface
{
    /**
     * @var array<int<0,max>, \SmartDonusum\Type\InputDocument>
     */
    private array $inputDocumentList;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \SmartDonusum\Type\InputDocument> $inputDocumentList
     */
    public function __construct(array $inputDocumentList)
    {
        $this->inputDocumentList = $inputDocumentList;
    }

    /**
     * @return array<int<0,max>, \SmartDonusum\Type\InputDocument>
     */
    public function getInputDocumentList(): array
    {
        return $this->inputDocumentList;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\Type\InputDocument> $inputDocumentList
     * @return static
     */
    public function withInputDocumentList(array $inputDocumentList): static
    {
        $new = clone $this;
        $new->inputDocumentList = $inputDocumentList;

        return $new;
    }
}

