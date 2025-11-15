<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetOutboxInvoiceStatusWithLogsResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\EInvoice\Type\LogResponse
     */
    private ?\SmartDonusum\EInvoice\Type\LogResponse $return = null;

    /**
     * @return null | \SmartDonusum\EInvoice\Type\LogResponse
     */
    public function getReturn(): ?\SmartDonusum\EInvoice\Type\LogResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\EInvoice\Type\LogResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\EInvoice\Type\LogResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

