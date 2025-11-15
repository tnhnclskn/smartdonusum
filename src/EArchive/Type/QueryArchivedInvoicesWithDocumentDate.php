<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class QueryArchivedInvoicesWithDocumentDate implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $startDate = null;

    /**
     * @var null | string
     */
    private ?string $endDate = null;

    /**
     * @var null | string
     */
    private ?string $withXML = null;

    /**
     * @var null | string
     */
    private ?string $minRecordId = null;

    /**
     * Constructor
     *
     * @param null | string $startDate
     * @param null | string $endDate
     * @param null | string $withXML
     * @param null | string $minRecordId
     */
    public function __construct(?string $startDate, ?string $endDate, ?string $withXML, ?string $minRecordId)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->withXML = $withXML;
        $this->minRecordId = $minRecordId;
    }

    /**
     * @return null | string
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * @param null | string $startDate
     * @return static
     */
    public function withStartDate(?string $startDate): static
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * @param null | string $endDate
     * @return static
     */
    public function withEndDate(?string $endDate): static
    {
        $new = clone $this;
        $new->endDate = $endDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getWithXML(): ?string
    {
        return $this->withXML;
    }

    /**
     * @param null | string $withXML
     * @return static
     */
    public function withWithXML(?string $withXML): static
    {
        $new = clone $this;
        $new->withXML = $withXML;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMinRecordId(): ?string
    {
        return $this->minRecordId;
    }

    /**
     * @param null | string $minRecordId
     * @return static
     */
    public function withMinRecordId(?string $minRecordId): static
    {
        $new = clone $this;
        $new->minRecordId = $minRecordId;

        return $new;
    }
}

