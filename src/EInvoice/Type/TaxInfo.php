<?php

namespace SmartDonusum\EInvoice\Type;

class TaxInfo
{
    /**
     * @var null | string
     */
    private ?string $taxtTypeCode = null;

    /**
     * @var null | string
     */
    private ?string $taxtTypeName = null;

    /**
     * @var null | string
     */
    private ?string $taxAmount = null;

    /**
     * @var null | string
     */
    private ?string $taxPercentage = null;

    /**
     * @return null | string
     */
    public function getTaxtTypeCode(): ?string
    {
        return $this->taxtTypeCode;
    }

    /**
     * @param null | string $taxtTypeCode
     * @return static
     */
    public function withTaxtTypeCode(?string $taxtTypeCode): static
    {
        $new = clone $this;
        $new->taxtTypeCode = $taxtTypeCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTaxtTypeName(): ?string
    {
        return $this->taxtTypeName;
    }

    /**
     * @param null | string $taxtTypeName
     * @return static
     */
    public function withTaxtTypeName(?string $taxtTypeName): static
    {
        $new = clone $this;
        $new->taxtTypeName = $taxtTypeName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTaxAmount(): ?string
    {
        return $this->taxAmount;
    }

    /**
     * @param null | string $taxAmount
     * @return static
     */
    public function withTaxAmount(?string $taxAmount): static
    {
        $new = clone $this;
        $new->taxAmount = $taxAmount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTaxPercentage(): ?string
    {
        return $this->taxPercentage;
    }

    /**
     * @param null | string $taxPercentage
     * @return static
     */
    public function withTaxPercentage(?string $taxPercentage): static
    {
        $new = clone $this;
        $new->taxPercentage = $taxPercentage;

        return $new;
    }
}

