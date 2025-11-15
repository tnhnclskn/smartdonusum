<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateXslt implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $xsltName = null;

    /**
     * @var null | mixed
     */
    private mixed $content = null;

    /**
     * Constructor
     *
     * @param null | string $xsltName
     * @param null | mixed $content
     */
    public function __construct(?string $xsltName, mixed $content)
    {
        $this->xsltName = $xsltName;
        $this->content = $content;
    }

    /**
     * @return null | string
     */
    public function getXsltName(): ?string
    {
        return $this->xsltName;
    }

    /**
     * @param null | string $xsltName
     * @return static
     */
    public function withXsltName(?string $xsltName): static
    {
        $new = clone $this;
        $new->xsltName = $xsltName;

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

