<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetXsltListResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\Type\XsltListResponse
     */
    private ?\SmartDonusum\Type\XsltListResponse $return = null;

    /**
     * @return null | \SmartDonusum\Type\XsltListResponse
     */
    public function getReturn(): ?\SmartDonusum\Type\XsltListResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\Type\XsltListResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\Type\XsltListResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

