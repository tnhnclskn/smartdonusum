<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPrefixListResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\EInvoice\Type\DocumentQueryResponse
     */
    private ?\SmartDonusum\EInvoice\Type\DocumentQueryResponse $return = null;

    /**
     * @return null | \SmartDonusum\EInvoice\Type\DocumentQueryResponse
     */
    public function getReturn(): ?\SmartDonusum\EInvoice\Type\DocumentQueryResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\EInvoice\Type\DocumentQueryResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\EInvoice\Type\DocumentQueryResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

