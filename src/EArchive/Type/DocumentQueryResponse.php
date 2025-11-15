<?php

namespace SmartDonusum\EArchive\Type;

class DocumentQueryResponse
{
    /**
     * @var int
     */
    private int $queryState;

    /**
     * @var null | string
     */
    private ?string $stateExplanation = null;

    /**
     * @var int
     */
    private int $documentsCount;

    /**
     * @var int
     */
    private int $maxRecordIdinList;

    /**
     * @var array<int<0,max>, \SmartDonusum\EArchive\Type\ResponseDocument>
     */
    private array $documents;

    /**
     * @return int
     */
    public function getQueryState(): int
    {
        return $this->queryState;
    }

    /**
     * @param int $queryState
     * @return static
     */
    public function withQueryState(int $queryState): static
    {
        $new = clone $this;
        $new->queryState = $queryState;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStateExplanation(): ?string
    {
        return $this->stateExplanation;
    }

    /**
     * @param null | string $stateExplanation
     * @return static
     */
    public function withStateExplanation(?string $stateExplanation): static
    {
        $new = clone $this;
        $new->stateExplanation = $stateExplanation;

        return $new;
    }

    /**
     * @return int
     */
    public function getDocumentsCount(): int
    {
        return $this->documentsCount;
    }

    /**
     * @param int $documentsCount
     * @return static
     */
    public function withDocumentsCount(int $documentsCount): static
    {
        $new = clone $this;
        $new->documentsCount = $documentsCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxRecordIdinList(): int
    {
        return $this->maxRecordIdinList;
    }

    /**
     * @param int $maxRecordIdinList
     * @return static
     */
    public function withMaxRecordIdinList(int $maxRecordIdinList): static
    {
        $new = clone $this;
        $new->maxRecordIdinList = $maxRecordIdinList;

        return $new;
    }

    /**
     * @return array<int<0,max>, \SmartDonusum\EArchive\Type\ResponseDocument>
     */
    public function getDocuments(): array
    {
        return $this->documents;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\EArchive\Type\ResponseDocument> $documents
     * @return static
     */
    public function withDocuments(array $documents): static
    {
        $new = clone $this;
        $new->documents = $documents;

        return $new;
    }
}

