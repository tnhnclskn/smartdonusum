<?php

namespace SmartDonusum\EInvoice\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SetPrefixStatusListResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \SmartDonusum\EInvoice\Type\PrefixCodeResponse>
     */
    private array $return;

    /**
     * @return array<int<0,max>, \SmartDonusum\EInvoice\Type\PrefixCodeResponse>
     */
    public function getReturn(): array
    {
        return $this->return;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\EInvoice\Type\PrefixCodeResponse> $return
     * @return static
     */
    public function withReturn(array $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

