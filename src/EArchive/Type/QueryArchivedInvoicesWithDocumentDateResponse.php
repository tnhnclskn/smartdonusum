<?php

namespace SmartDonusum\EArchive\Type;

use Phpro\SoapClient\Type\ResultInterface;

class QueryArchivedInvoicesWithDocumentDateResponse implements ResultInterface
{
    /**
     * @var null | \SmartDonusum\EArchive\Type\DocumentQueryResponse
     */
    private ?\SmartDonusum\EArchive\Type\DocumentQueryResponse $return = null;

    /**
     * @return null | \SmartDonusum\EArchive\Type\DocumentQueryResponse
     */
    public function getReturn(): ?\SmartDonusum\EArchive\Type\DocumentQueryResponse
    {
        return $this->return;
    }

    /**
     * @param null | \SmartDonusum\EArchive\Type\DocumentQueryResponse $return
     * @return static
     */
    public function withReturn(?\SmartDonusum\EArchive\Type\DocumentQueryResponse $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

