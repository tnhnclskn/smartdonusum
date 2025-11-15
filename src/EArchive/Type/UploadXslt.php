<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UploadXslt implements RequestInterface
{
    /**
     * @var null | \SmartDonusum\EArchive\Type\UploadXsltPayload
     */
    private ?\SmartDonusum\EArchive\Type\UploadXsltPayload $uploadXsltPayload = null;

    /**
     * Constructor
     *
     * @param null | \SmartDonusum\EArchive\Type\UploadXsltPayload $uploadXsltPayload
     */
    public function __construct(?\SmartDonusum\EArchive\Type\UploadXsltPayload $uploadXsltPayload)
    {
        $this->uploadXsltPayload = $uploadXsltPayload;
    }

    /**
     * @return null | \SmartDonusum\EArchive\Type\UploadXsltPayload
     */
    public function getUploadXsltPayload(): ?\SmartDonusum\EArchive\Type\UploadXsltPayload
    {
        return $this->uploadXsltPayload;
    }

    /**
     * @param null | \SmartDonusum\EArchive\Type\UploadXsltPayload $uploadXsltPayload
     * @return static
     */
    public function withUploadXsltPayload(?\SmartDonusum\EArchive\Type\UploadXsltPayload $uploadXsltPayload): static
    {
        $new = clone $this;
        $new->uploadXsltPayload = $uploadXsltPayload;

        return $new;
    }
}

