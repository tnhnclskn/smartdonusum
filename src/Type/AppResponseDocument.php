<?php

namespace SmartDonusum\Type;

class AppResponseDocument
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

