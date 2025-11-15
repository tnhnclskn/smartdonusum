<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class QueryInvoicesWithReceivedDateWithSearchParams implements RequestInterface
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
     * @var \SmartDonusum\EArchive\Type\SearchParams
     */
    private \SmartDonusum\EArchive\Type\SearchParams $searchParams;

    /**
     * Constructor
     *
     * @param null | string $startDate
     * @param null | string $endDate
     * @param null | string $withXML
     * @param null | string $minRecordId
     * @param \SmartDonusum\EArchive\Type\SearchParams $searchParams
     */
    public function __construct(?string $startDate, ?string $endDate, ?string $withXML, ?string $minRecordId, \SmartDonusum\EArchive\Type\SearchParams $searchParams)
    {
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->withXML = $withXML;
        $this->minRecordId = $minRecordId;
        $this->searchParams = $searchParams;
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

    /**
     * @return \SmartDonusum\EArchive\Type\SearchParams
     */
    public function getSearchParams(): \SmartDonusum\EArchive\Type\SearchParams
    {
        return $this->searchParams;
    }

    /**
     * @param \SmartDonusum\EArchive\Type\SearchParams $searchParams
     * @return static
     */
    public function withSearchParams(\SmartDonusum\EArchive\Type\SearchParams $searchParams): static
    {
        $new = clone $this;
        $new->searchParams = $searchParams;

        return $new;
    }
}

