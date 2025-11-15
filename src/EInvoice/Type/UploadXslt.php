<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UploadXslt implements RequestInterface
{
    /**
     * @var null | \SmartDonusum\EInvoice\Type\UploadXsltPayload
     */
    private ?\SmartDonusum\EInvoice\Type\UploadXsltPayload $uploadXsltPayload = null;

    /**
     * Constructor
     *
     * @param null | \SmartDonusum\EInvoice\Type\UploadXsltPayload $uploadXsltPayload
     */
    public function __construct(?\SmartDonusum\EInvoice\Type\UploadXsltPayload $uploadXsltPayload)
    {
        $this->uploadXsltPayload = $uploadXsltPayload;
    }

    /**
     * @return null | \SmartDonusum\EInvoice\Type\UploadXsltPayload
     */
    public function getUploadXsltPayload(): ?\SmartDonusum\EInvoice\Type\UploadXsltPayload
    {
        return $this->uploadXsltPayload;
    }

    /**
     * @param null | \SmartDonusum\EInvoice\Type\UploadXsltPayload $uploadXsltPayload
     * @return static
     */
    public function withUploadXsltPayload(?\SmartDonusum\EInvoice\Type\UploadXsltPayload $uploadXsltPayload): static
    {
        $new = clone $this;
        $new->uploadXsltPayload = $uploadXsltPayload;

        return $new;
    }
}

