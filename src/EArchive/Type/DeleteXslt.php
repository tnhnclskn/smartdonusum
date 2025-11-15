<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteXslt implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $xsltName = null;

    /**
     * Constructor
     *
     * @param null | string $xsltName
     */
    public function __construct(?string $xsltName)
    {
        $this->xsltName = $xsltName;
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
}

