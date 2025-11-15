<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetOutboxInvoiceStatusWithLogs implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $documentUuid = null;

    /**
     * Constructor
     *
     * @param null | string $documentUuid
     */
    public function __construct(?string $documentUuid)
    {
        $this->documentUuid = $documentUuid;
    }

    /**
     * @return null | string
     */
    public function getDocumentUuid(): ?string
    {
        return $this->documentUuid;
    }

    /**
     * @param null | string $documentUuid
     * @return static
     */
    public function withDocumentUuid(?string $documentUuid): static
    {
        $new = clone $this;
        $new->documentUuid = $documentUuid;

        return $new;
    }
}

