<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ControlApplicationResponseXML implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $appResponseXML = null;

    /**
     * Constructor
     *
     * @param null | string $appResponseXML
     */
    public function __construct(?string $appResponseXML)
    {
        $this->appResponseXML = $appResponseXML;
    }

    /**
     * @return null | string
     */
    public function getAppResponseXML(): ?string
    {
        return $this->appResponseXML;
    }

    /**
     * @param null | string $appResponseXML
     * @return static
     */
    public function withAppResponseXML(?string $appResponseXML): static
    {
        $new = clone $this;
        $new->appResponseXML = $appResponseXML;

        return $new;
    }
}

