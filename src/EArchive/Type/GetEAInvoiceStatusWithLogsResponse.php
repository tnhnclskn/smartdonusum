<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetEAInvoiceStatusWithLogsResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\EArchive\Type\LogResponse
     */
    private ?\SmartDonusum\EArchive\Type\LogResponse $return = null;

    /**
     * @return null | \SmartDonusum\EArchive\Type\LogResponse
     */
    public function getReturn(): ?\SmartDonusum\EArchive\Type\LogResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\EArchive\Type\LogResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\EArchive\Type\LogResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

