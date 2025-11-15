<?php

namespace SmartDonusum\EInvoice\Type;

class XsltListResponse
{
    /**
     * @var array<int<0,max>, \SmartDonusum\EInvoice\Type\XsltResponse>
     */
    private array $xsltList;

    /**
     * @var null | string
     */
    private ?string $documentsCount = null;

    /**
     * @var null | bool
     */
    private ?bool $isSuccess = null;

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
     * @return array<int<0,max>, \SmartDonusum\EInvoice\Type\XsltResponse>
     */
    public function getXsltList(): array
    {
        return $this->xsltList;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\EInvoice\Type\XsltResponse> $xsltList
     * @return static
     */
    public function withXsltList(array $xsltList): static
    {
        $new = clone $this;
        $new->xsltList = $xsltList;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentsCount(): ?string
    {
        return $this->documentsCount;
    }

    /**
     * @param null | string $documentsCount
     * @return static
     */
    public function withDocumentsCount(?string $documentsCount): static
    {
        $new = clone $this;
        $new->documentsCount = $documentsCount;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getIsSuccess(): ?bool
    {
        return $this->isSuccess;
    }

    /**
     * @param null | bool $isSuccess
     * @return static
     */
    public function withIsSuccess(?bool $isSuccess): static
    {
        $new = clone $this;
        $new->isSuccess = $isSuccess;

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
}

