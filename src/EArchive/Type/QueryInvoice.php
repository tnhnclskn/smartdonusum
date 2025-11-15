<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class QueryInvoice implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $paramType = null;

    /**
     * @var null | string
     */
    private ?string $parameter = null;

    /**
     * @var null | string
     */
    private ?string $withXML = null;

    /**
     * Constructor
     *
     * @param null | string $paramType
     * @param null | string $parameter
     * @param null | string $withXML
     */
    public function __construct(?string $paramType, ?string $parameter, ?string $withXML)
    {
        $this->paramType = $paramType;
        $this->parameter = $parameter;
        $this->withXML = $withXML;
    }

    /**
     * @return null | string
     */
    public function getParamType(): ?string
    {
        return $this->paramType;
    }

    /**
     * @param null | string $paramType
     * @return static
     */
    public function withParamType(?string $paramType): static
    {
        $new = clone $this;
        $new->paramType = $paramType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getParameter(): ?string
    {
        return $this->parameter;
    }

    /**
     * @param null | string $parameter
     * @return static
     */
    public function withParameter(?string $parameter): static
    {
        $new = clone $this;
        $new->parameter = $parameter;

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
}

