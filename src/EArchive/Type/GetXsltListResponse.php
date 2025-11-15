<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetXsltListResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\EArchive\Type\XsltListResponse
     */
    private ?\SmartDonusum\EArchive\Type\XsltListResponse $return = null;

    /**
     * @return null | \SmartDonusum\EArchive\Type\XsltListResponse
     */
    public function getReturn(): ?\SmartDonusum\EArchive\Type\XsltListResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\EArchive\Type\XsltListResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\EArchive\Type\XsltListResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

