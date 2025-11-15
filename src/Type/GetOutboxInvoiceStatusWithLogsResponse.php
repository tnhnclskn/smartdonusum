<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetOutboxInvoiceStatusWithLogsResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\Type\LogResponse
     */
    private ?\SmartDonusum\Type\LogResponse $return = null;

    /**
     * @return null | \SmartDonusum\Type\LogResponse
     */
    public function getReturn(): ?\SmartDonusum\Type\LogResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\Type\LogResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\Type\LogResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

