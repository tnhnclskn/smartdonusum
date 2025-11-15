<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UploadInvoiceList implements RequestInterface
{
    /**
     * @var null | string
     */
    private ?string $invoiceListXML = null;

    /**
     * @var null | string
     */
    private ?string $sourceUrn = null;

    /**
     * @var null | string
     */
    private ?string $documentPrefix = null;

    /**
     * @var null | string
     */
    private ?string $xsltPath = null;

    /**
     * Constructor
     *
     * @param null | string $invoiceListXML
     * @param null | string $sourceUrn
     * @param null | string $documentPrefix
     * @param null | string $xsltPath
     */
    public function __construct(?string $invoiceListXML, ?string $sourceUrn, ?string $documentPrefix, ?string $xsltPath)
    {
        $this->invoiceListXML = $invoiceListXML;
        $this->sourceUrn = $sourceUrn;
        $this->documentPrefix = $documentPrefix;
        $this->xsltPath = $xsltPath;
    }

    /**
     * @return null | string
     */
    public function getInvoiceListXML(): ?string
    {
        return $this->invoiceListXML;
    }

    /**
     * @param null | string $invoiceListXML
     * @return static
     */
    public function withInvoiceListXML(?string $invoiceListXML): static
    {
        $new = clone $this;
        $new->invoiceListXML = $invoiceListXML;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSourceUrn(): ?string
    {
        return $this->sourceUrn;
    }

    /**
     * @param null | string $sourceUrn
     * @return static
     */
    public function withSourceUrn(?string $sourceUrn): static
    {
        $new = clone $this;
        $new->sourceUrn = $sourceUrn;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentPrefix(): ?string
    {
        return $this->documentPrefix;
    }

    /**
     * @param null | string $documentPrefix
     * @return static
     */
    public function withDocumentPrefix(?string $documentPrefix): static
    {
        $new = clone $this;
        $new->documentPrefix = $documentPrefix;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getXsltPath(): ?string
    {
        return $this->xsltPath;
    }

    /**
     * @param null | string $xsltPath
     * @return static
     */
    public function withXsltPath(?string $xsltPath): static
    {
        $new = clone $this;
        $new->xsltPath = $xsltPath;

        return $new;
    }
}

