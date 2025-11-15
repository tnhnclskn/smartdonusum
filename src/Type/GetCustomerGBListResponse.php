<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCustomerGBListResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\Type\UserQueryResponse
     */
    private ?\SmartDonusum\Type\UserQueryResponse $return = null;

    /**
     * @return null | \SmartDonusum\Type\UserQueryResponse
     */
    public function getReturn(): ?\SmartDonusum\Type\UserQueryResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\Type\UserQueryResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\Type\UserQueryResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

