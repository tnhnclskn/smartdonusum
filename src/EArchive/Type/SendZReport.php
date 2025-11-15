<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendZReport implements RequestInterface
{
    /**
     * @var null | \SmartDonusum\EArchive\Type\InputDocument
     */
    private ?\SmartDonusum\EArchive\Type\InputDocument $zReportXML = null;

    /**
     * @var null | string
     */
    private ?string $reportType = null;

    /**
     * Constructor
     *
     * @param null | \SmartDonusum\EArchive\Type\InputDocument $zReportXML
     * @param null | string $reportType
     */
    public function __construct(?\SmartDonusum\EArchive\Type\InputDocument $zReportXML, ?string $reportType)
    {
        $this->zReportXML = $zReportXML;
        $this->reportType = $reportType;
    }

    /**
     * @return null | \SmartDonusum\EArchive\Type\InputDocument
     */
    public function getZReportXML(): ?\SmartDonusum\EArchive\Type\InputDocument
    {
        return $this->zReportXML;
    }

    /**
     * @param null | \SmartDonusum\EArchive\Type\InputDocument $zReportXML
     * @return static
     */
    public function withZReportXML(?\SmartDonusum\EArchive\Type\InputDocument $zReportXML): static
    {
        $new = clone $this;
        $new->zReportXML = $zReportXML;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReportType(): ?string
    {
        return $this->reportType;
    }

    /**
     * @param null | string $reportType
     * @return static
     */
    public function withReportType(?string $reportType): static
    {
        $new = clone $this;
        $new->reportType = $reportType;

        return $new;
    }
}

