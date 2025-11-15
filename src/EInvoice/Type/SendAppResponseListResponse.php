<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendAppResponseListResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \SmartDonusum\EInvoice\Type\EntResponse>
     */
    private array $return;

    /**
     * @return array<int<0,max>, \SmartDonusum\EInvoice\Type\EntResponse>
     */
    public function getReturn(): array
    {
        return $this->return;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\EInvoice\Type\EntResponse> $return
     * @return static
     */
    public function withReturn(array $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

