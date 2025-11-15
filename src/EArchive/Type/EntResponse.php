<?php

namespace SmartDonusum\EArchive\Type;

class EntResponse
{
    /**
     * @var null | string
     */
    private ?string $documentUUID = null;

    /**
     * @var null | string
     */
    private ?string $documentID = null;

    /**
     * @var null | string
     */
    private ?string $code = null;

    /**
     * @var null | string
     */
    private ?string $explanation = null;

    /**
     * @var null | string
     */
    private ?string $cause = null;

    /**
     * @var null | mixed
     */
    private mixed $content = null;

    /**
     * @return null | string
     */
    public function getDocumentUUID(): ?string
    {
        return $this->documentUUID;
    }

    /**
     * @param null | string $documentUUID
     * @return static
     */
    public function withDocumentUUID(?string $documentUUID): static
    {
        $new = clone $this;
        $new->documentUUID = $documentUUID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentID(): ?string
    {
        return $this->documentID;
    }

    /**
     * @param null | string $documentID
     * @return static
     */
    public function withDocumentID(?string $documentID): static
    {
        $new = clone $this;
        $new->documentID = $documentID;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param null | string $code
     * @return static
     */
    public function withCode(?string $code): static
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getExplanation(): ?string
    {
        return $this->explanation;
    }

    /**
     * @param null | string $explanation
     * @return static
     */
    public function withExplanation(?string $explanation): static
    {
        $new = clone $this;
        $new->explanation = $explanation;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCause(): ?string
    {
        return $this->cause;
    }

    /**
     * @param null | string $cause
     * @return static
     */
    public function withCause(?string $cause): static
    {
        $new = clone $this;
        $new->cause = $cause;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getContent(): mixed
    {
        return $this->content;
    }

    /**
     * @param null | mixed $content
     * @return static
     */
    public function withContent(mixed $content): static
    {
        $new = clone $this;
        $new->content = $content;

        return $new;
    }
}

