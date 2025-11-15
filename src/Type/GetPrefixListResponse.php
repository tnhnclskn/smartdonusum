<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetPrefixListResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\Type\DocumentQueryResponse
     */
    private ?\SmartDonusum\Type\DocumentQueryResponse $return = null;

    /**
     * @return null | \SmartDonusum\Type\DocumentQueryResponse
     */
    public function getReturn(): ?\SmartDonusum\Type\DocumentQueryResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\Type\DocumentQueryResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\Type\DocumentQueryResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

