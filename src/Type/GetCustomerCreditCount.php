<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCustomerCreditCount implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $vkn_tckn = null;

    /**
     * Constructor
     *
     * @param null | string $vkn_tckn
     */
    public function __construct(?string $vkn_tckn)
    {
        $this->vkn_tckn = $vkn_tckn;
    }

    /**
     * @return null | string
     */
    public function getVknTckn(): ?string
    {
        return $this->vkn_tckn;
    }

    /**
     * @param null | string $vkn_tckn
     * @return static
     */
    public function withVknTckn(?string $vkn_tckn): static
    {
        $new = clone $this;
        $new->vkn_tckn = $vkn_tckn;

        return $new;
    }
}

