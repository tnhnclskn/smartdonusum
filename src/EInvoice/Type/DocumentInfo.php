<?php

namespace SmartDonusum\EInvoice\Type;

class DocumentInfo
{
    /**
     * @var null | string
     */
    private ?string $documentDate = null;

    /**
     * @var null | string
     */
    private ?string $documentNo = null;

    /**
     * @return null | string
     */
    public function getDocumentDate(): ?string
    {
        return $this->documentDate;
    }

    /**
     * @param null | string $documentDate
     * @return static
     */
    public function withDocumentDate(?string $documentDate): static
    {
        $new = clone $this;
        $new->documentDate = $documentDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentNo(): ?string
    {
        return $this->documentNo;
    }

    /**
     * @param null | string $documentNo
     * @return static
     */
    public function withDocumentNo(?string $documentNo): static
    {
        $new = clone $this;
        $new->documentNo = $documentNo;

        return $new;
    }
}

