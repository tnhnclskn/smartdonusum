<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class QueryInvoiceWithLocalId implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $localId = null;

    /**
     * Constructor
     *
     * @param null | string $localId
     */
    public function __construct(?string $localId)
    {
        $this->localId = $localId;
    }

    /**
     * @return null | string
     */
    public function getLocalId(): ?string
    {
        return $this->localId;
    }

    /**
     * @param null | string $localId
     * @return static
     */
    public function withLocalId(?string $localId): static
    {
        $new = clone $this;
        $new->localId = $localId;

        return $new;
    }
}

