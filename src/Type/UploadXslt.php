<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UploadXslt implements RequestInterface
{
    /**
     * @var null | \SmartDonusum\Type\UploadXsltPayload
     */
    private ?\SmartDonusum\Type\UploadXsltPayload $uploadXsltPayload = null;

    /**
     * Constructor
     *
     * @param null | \SmartDonusum\Type\UploadXsltPayload $uploadXsltPayload
     */
    public function __construct(?\SmartDonusum\Type\UploadXsltPayload $uploadXsltPayload)
    {
        $this->uploadXsltPayload = $uploadXsltPayload;
    }

    /**
     * @return null | \SmartDonusum\Type\UploadXsltPayload
     */
    public function getUploadXsltPayload(): ?\SmartDonusum\Type\UploadXsltPayload
    {
        return $this->uploadXsltPayload;
    }

    /**
     * @param null | \SmartDonusum\Type\UploadXsltPayload $uploadXsltPayload
     * @return static
     */
    public function withUploadXsltPayload(?\SmartDonusum\Type\UploadXsltPayload $uploadXsltPayload): static
    {
        $new = clone $this;
        $new->uploadXsltPayload = $uploadXsltPayload;

        return $new;
    }
}

