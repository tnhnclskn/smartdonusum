<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCreditActionsforCustomerResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \SmartDonusum\Type\CreditAction>
     */
    private array $return;

    /**
     * @return array<int<0,max>, \SmartDonusum\Type\CreditAction>
     */
    public function getReturn(): array
    {
        return $this->return;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\Type\CreditAction> $return
     * @return static
     */
    public function withReturn(array $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

