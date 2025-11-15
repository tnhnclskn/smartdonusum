<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UploadXsltResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\Type\EntResponse
     */
    private ?\SmartDonusum\Type\EntResponse $return = null;

    /**
     * @return null | \SmartDonusum\Type\EntResponse
     */
    public function getReturn(): ?\SmartDonusum\Type\EntResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\Type\EntResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\Type\EntResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

