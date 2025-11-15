<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CancelInvoice implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $invoice_uuid = null;

    /**
     * @var null | string
     */
    private ?string $cancelReason = null;

    /**
     * @var null | string
     */
    private ?string $cancelDate = null;

    /**
     * Constructor
     *
     * @param null | string $invoice_uuid
     * @param null | string $cancelReason
     * @param null | string $cancelDate
     */
    public function __construct(?string $invoice_uuid, ?string $cancelReason, ?string $cancelDate)
    {
        $this->invoice_uuid = $invoice_uuid;
        $this->cancelReason = $cancelReason;
        $this->cancelDate = $cancelDate;
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
    public function getCancelReason(): ?string
    {
        return $this->cancelReason;
    }

    /**
     * @param null | string $cancelReason
     * @return static
     */
    public function withCancelReason(?string $cancelReason): static
    {
        $new = clone $this;
        $new->cancelReason = $cancelReason;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCancelDate(): ?string
    {
        return $this->cancelDate;
    }

    /**
     * @param null | string $cancelDate
     * @return static
     */
    public function withCancelDate(?string $cancelDate): static
    {
        $new = clone $this;
        $new->cancelDate = $cancelDate;

        return $new;
    }
}

