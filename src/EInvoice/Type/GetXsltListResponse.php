<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetXsltListResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\EInvoice\Type\XsltListResponse
     */
    private ?\SmartDonusum\EInvoice\Type\XsltListResponse $return = null;

    /**
     * @return null | \SmartDonusum\EInvoice\Type\XsltListResponse
     */
    public function getReturn(): ?\SmartDonusum\EInvoice\Type\XsltListResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\EInvoice\Type\XsltListResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\EInvoice\Type\XsltListResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

