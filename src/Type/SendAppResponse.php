<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendAppResponse implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $invoiceUUID = null;

    /**
     * @var null | string
     */
    private ?string $responseCode = null;

    /**
     * @var null | string
     */
    private ?string $responseExplanation = null;

    /**
     * Constructor
     *
     * @param null | string $invoiceUUID
     * @param null | string $responseCode
     * @param null | string $responseExplanation
     */
    public function __construct(?string $invoiceUUID, ?string $responseCode, ?string $responseExplanation)
    {
        $this->invoiceUUID = $invoiceUUID;
        $this->responseCode = $responseCode;
        $this->responseExplanation = $responseExplanation;
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

    /**
     * @return null | string
     */
    public function getResponseCode(): ?string
    {
        return $this->responseCode;
    }

    /**
     * @param null | string $responseCode
     * @return static
     */
    public function withResponseCode(?string $responseCode): static
    {
        $new = clone $this;
        $new->responseCode = $responseCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getResponseExplanation(): ?string
    {
        return $this->responseExplanation;
    }

    /**
     * @param null | string $responseExplanation
     * @return static
     */
    public function withResponseExplanation(?string $responseExplanation): static
    {
        $new = clone $this;
        $new->responseExplanation = $responseExplanation;

        return $new;
    }
}

