<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCustomerCreditCountResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\Type\CreditInfo
     */
    private ?\SmartDonusum\Type\CreditInfo $return = null;

    /**
     * @return null | \SmartDonusum\Type\CreditInfo
     */
    public function getReturn(): ?\SmartDonusum\Type\CreditInfo
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\Type\CreditInfo $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\Type\CreditInfo $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

