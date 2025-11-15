<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLastInvoiceIdAndDate implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $source_id = null;

    /**
     * @var array<int<0,max>, string>
     */
    private array $documentIdPrefix;

    /**
     * Constructor
     *
     * @param null | string $source_id
     * @param array<int<0,max>, string> $documentIdPrefix
     */
    public function __construct(?string $source_id, array $documentIdPrefix)
    {
        $this->source_id = $source_id;
        $this->documentIdPrefix = $documentIdPrefix;
    }

    /**
     * @return null | string
     */
    public function getSourceId(): ?string
    {
        return $this->source_id;
    }

    /**
     * @param null | string $source_id
     * @return static
     */
    public function withSourceId(?string $source_id): static
    {
        $new = clone $this;
        $new->source_id = $source_id;

        return $new;
    }

    /**
     * @return array<int<0,max>, string>
     */
    public function getDocumentIdPrefix(): array
    {
        return $this->documentIdPrefix;
    }

    /**
     * @param array<int<0,max>, string> $documentIdPrefix
     * @return static
     */
    public function withDocumentIdPrefix(array $documentIdPrefix): static
    {
        $new = clone $this;
        $new->documentIdPrefix = $documentIdPrefix;

        return $new;
    }
}

