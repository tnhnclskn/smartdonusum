<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class QueryInvoiceWithReferenceCode implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $referenceCode = null;

    /**
     * Constructor
     *
     * @param null | string $referenceCode
     */
    public function __construct(?string $referenceCode)
    {
        $this->referenceCode = $referenceCode;
    }

    /**
     * @return null | string
     */
    public function getReferenceCode(): ?string
    {
        return $this->referenceCode;
    }

    /**
     * @param null | string $referenceCode
     * @return static
     */
    public function withReferenceCode(?string $referenceCode): static
    {
        $new = clone $this;
        $new->referenceCode = $referenceCode;

        return $new;
    }
}

