<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateXsltResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\EInvoice\Type\EntResponse
     */
    private ?\SmartDonusum\EInvoice\Type\EntResponse $return = null;

    /**
     * @return null | \SmartDonusum\EInvoice\Type\EntResponse
     */
    public function getReturn(): ?\SmartDonusum\EInvoice\Type\EntResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\EInvoice\Type\EntResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\EInvoice\Type\EntResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

