<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCustomerCreditCountResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\EArchive\Type\CreditInfo
     */
    private ?\SmartDonusum\EArchive\Type\CreditInfo $return = null;

    /**
     * @return null | \SmartDonusum\EArchive\Type\CreditInfo
     */
    public function getReturn(): ?\SmartDonusum\EArchive\Type\CreditInfo
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\EArchive\Type\CreditInfo $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\EArchive\Type\CreditInfo $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

