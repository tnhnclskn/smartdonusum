<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCustomerGBListResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\EInvoice\Type\UserQueryResponse
     */
    private ?\SmartDonusum\EInvoice\Type\UserQueryResponse $return = null;

    /**
     * @return null | \SmartDonusum\EInvoice\Type\UserQueryResponse
     */
    public function getReturn(): ?\SmartDonusum\EInvoice\Type\UserQueryResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\EInvoice\Type\UserQueryResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\EInvoice\Type\UserQueryResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

