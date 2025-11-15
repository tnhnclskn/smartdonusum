<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UploadXsltResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\EArchive\Type\EntResponse
     */
    private ?\SmartDonusum\EArchive\Type\EntResponse $return = null;

    /**
     * @return null | \SmartDonusum\EArchive\Type\EntResponse
     */
    public function getReturn(): ?\SmartDonusum\EArchive\Type\EntResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\EArchive\Type\EntResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\EArchive\Type\EntResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

