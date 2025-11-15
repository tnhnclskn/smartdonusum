<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class IsEFaturaUserResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\EArchive\Type\UserQueryResponse
     */
    private ?\SmartDonusum\EArchive\Type\UserQueryResponse $return = null;

    /**
     * @return null | \SmartDonusum\EArchive\Type\UserQueryResponse
     */
    public function getReturn(): ?\SmartDonusum\EArchive\Type\UserQueryResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\EArchive\Type\UserQueryResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\EArchive\Type\UserQueryResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

