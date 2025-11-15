<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ObjectInvoice implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $invoice_uuid = null;

    /**
     * @var null | string
     */
    private ?string $objectionReason = null;

    /**
     * @var null | string
     */
    private ?string $objectionDate = null;

    /**
     * @var null | string
     */
    private ?string $objectionType = null;

    /**
     * @var null | string
     */
    private ?string $objectionDocumentNo = null;

    /**
     * Constructor
     *
     * @param null | string $invoice_uuid
     * @param null | string $objectionReason
     * @param null | string $objectionDate
     * @param null | string $objectionType
     * @param null | string $objectionDocumentNo
     */
    public function __construct(?string $invoice_uuid, ?string $objectionReason, ?string $objectionDate, ?string $objectionType, ?string $objectionDocumentNo)
    {
        $this->invoice_uuid = $invoice_uuid;
        $this->objectionReason = $objectionReason;
        $this->objectionDate = $objectionDate;
        $this->objectionType = $objectionType;
        $this->objectionDocumentNo = $objectionDocumentNo;
    }

    /**
     * @return null | string
     */
    public function getInvoiceUuid(): ?string
    {
        return $this->invoice_uuid;
    }

    /**
     * @param null | string $invoice_uuid
     * @return static
     */
    public function withInvoiceUuid(?string $invoice_uuid): static
    {
        $new = clone $this;
        $new->invoice_uuid = $invoice_uuid;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getObjectionReason(): ?string
    {
        return $this->objectionReason;
    }

    /**
     * @param null | string $objectionReason
     * @return static
     */
    public function withObjectionReason(?string $objectionReason): static
    {
        $new = clone $this;
        $new->objectionReason = $objectionReason;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getObjectionDate(): ?string
    {
        return $this->objectionDate;
    }

    /**
     * @param null | string $objectionDate
     * @return static
     */
    public function withObjectionDate(?string $objectionDate): static
    {
        $new = clone $this;
        $new->objectionDate = $objectionDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getObjectionType(): ?string
    {
        return $this->objectionType;
    }

    /**
     * @param null | string $objectionType
     * @return static
     */
    public function withObjectionType(?string $objectionType): static
    {
        $new = clone $this;
        $new->objectionType = $objectionType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getObjectionDocumentNo(): ?string
    {
        return $this->objectionDocumentNo;
    }

    /**
     * @param null | string $objectionDocumentNo
     * @return static
     */
    public function withObjectionDocumentNo(?string $objectionDocumentNo): static
    {
        $new = clone $this;
        $new->objectionDocumentNo = $objectionDocumentNo;

        return $new;
    }
}

