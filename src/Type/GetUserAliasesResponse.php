<?php

namespace SmartDonusum\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetUserAliasesResponse implements ResultInterface
{
    /**
     * @var array<int<0,max>, \SmartDonusum\Type\UserAddresInfo>
     */
    private array $return;

    /**
     * @return array<int<0,max>, \SmartDonusum\Type\UserAddresInfo>
     */
    public function getReturn(): array
    {
        return $this->return;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\Type\UserAddresInfo> $return
     * @return static
     */
    public function withReturn(array $return): static
    {
        $new = clone $this;
        $new->return = $return;

        return $new;
    }
}

