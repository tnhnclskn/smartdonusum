<?php

namespace SmartDonusum\EInvoice\Type;

class InputDocument
{
    /**
     * @var string
     */
    private string $documentUUID;

    /**
     * @var string
     */
    private string $xmlContent;

    /**
     * @var string
     */
    private string $sourceUrn;

    /**
     * @var string
     */
    private string $destinationUrn;

    /**
     * @var null | string
     */
    private ?string $documentNoPrefix = null;

    /**
     * @var null | string
     */
    private ?string $localId = null;

    /**
     * @var null | string
     */
    private ?string $documentId = null;

    /**
     * @var null | bool
     */
    private ?bool $submitForApproval = null;

    /**
     * @var string
     */
    private string $documentDate;

    /**
     * @var null | string
     */
    private ?string $note = null;

    /**
     * @return string
     */
    public function getDocumentUUID(): string
    {
        return $this->documentUUID;
    }

    /**
     * @param string $documentUUID
     * @return static
     */
    public function withDocumentUUID(string $documentUUID): static
    {
        $new = clone $this;
        $new->documentUUID = $documentUUID;

        return $new;
    }

    /**
     * @return string
     */
    public function getXmlContent(): string
    {
        return $this->xmlContent;
    }

    /**
     * @param string $xmlContent
     * @return static
     */
    public function withXmlContent(string $xmlContent): static
    {
        $new = clone $this;
        $new->xmlContent = $xmlContent;

        return $new;
    }

    /**
     * @return string
     */
    public function getSourceUrn(): string
    {
        return $this->sourceUrn;
    }

    /**
     * @param string $sourceUrn
     * @return static
     */
    public function withSourceUrn(string $sourceUrn): static
    {
        $new = clone $this;
        $new->sourceUrn = $sourceUrn;

        return $new;
    }

    /**
     * @return string
     */
    public function getDestinationUrn(): string
    {
        return $this->destinationUrn;
    }

    /**
     * @param string $destinationUrn
     * @return static
     */
    public function withDestinationUrn(string $destinationUrn): static
    {
        $new = clone $this;
        $new->destinationUrn = $destinationUrn;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentNoPrefix(): ?string
    {
        return $this->documentNoPrefix;
    }

    /**
     * @param null | string $documentNoPrefix
     * @return static
     */
    public function withDocumentNoPrefix(?string $documentNoPrefix): static
    {
        $new = clone $this;
        $new->documentNoPrefix = $documentNoPrefix;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLocalId(): ?string
    {
        return $this->localId;
    }

    /**
     * @param null | string $localId
     * @return static
     */
    public function withLocalId(?string $localId): static
    {
        $new = clone $this;
        $new->localId = $localId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentId(): ?string
    {
        return $this->documentId;
    }

    /**
     * @param null | string $documentId
     * @return static
     */
    public function withDocumentId(?string $documentId): static
    {
        $new = clone $this;
        $new->documentId = $documentId;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getSubmitForApproval(): ?bool
    {
        return $this->submitForApproval;
    }

    /**
     * @param null | bool $submitForApproval
     * @return static
     */
    public function withSubmitForApproval(?bool $submitForApproval): static
    {
        $new = clone $this;
        $new->submitForApproval = $submitForApproval;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocumentDate(): string
    {
        return $this->documentDate;
    }

    /**
     * @param string $documentDate
     * @return static
     */
    public function withDocumentDate(string $documentDate): static
    {
        $new = clone $this;
        $new->documentDate = $documentDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @param null | string $note
     * @return static
     */
    public function withNote(?string $note): static
    {
        $new = clone $this;
        $new->note = $note;

        return $new;
    }
}

