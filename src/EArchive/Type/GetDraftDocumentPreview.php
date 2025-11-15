<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetDraftDocumentPreview implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $xmlContent = null;

    /**
     * @var null | string
     */
    private ?string $previewType = null;

    /**
     * @var bool
     */
    private bool $addDraftWatermark;

    /**
     * Constructor
     *
     * @param null | string $xmlContent
     * @param null | string $previewType
     * @param bool $addDraftWatermark
     */
    public function __construct(?string $xmlContent, ?string $previewType, bool $addDraftWatermark)
    {
        $this->xmlContent = $xmlContent;
        $this->previewType = $previewType;
        $this->addDraftWatermark = $addDraftWatermark;
    }

    /**
     * @return null | string
     */
    public function getXmlContent(): ?string
    {
        return $this->xmlContent;
    }

    /**
     * @param null | string $xmlContent
     * @return static
     */
    public function withXmlContent(?string $xmlContent): static
    {
        $new = clone $this;
        $new->xmlContent = $xmlContent;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPreviewType(): ?string
    {
        return $this->previewType;
    }

    /**
     * @param null | string $previewType
     * @return static
     */
    public function withPreviewType(?string $previewType): static
    {
        $new = clone $this;
        $new->previewType = $previewType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAddDraftWatermark(): bool
    {
        return $this->addDraftWatermark;
    }

    /**
     * @param bool $addDraftWatermark
     * @return static
     */
    public function withAddDraftWatermark(bool $addDraftWatermark): static
    {
        $new = clone $this;
        $new->addDraftWatermark = $addDraftWatermark;

        return $new;
    }
}

