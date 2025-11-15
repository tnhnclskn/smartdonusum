<?php

namespace SmartDonusum\EInvoice\Type;

class UserAddresInfo
{
    /**
     * @var null | string
     */
    private ?string $vkn_tckn = null;

    /**
     * @var array<int<0,max>, string>
     */
    private array $gbList;

    /**
     * @var array<int<0,max>, string>
     */
    private array $pkList;

    /**
     * @return null | string
     */
    public function getVknTckn(): ?string
    {
        return $this->vkn_tckn;
    }

    /**
     * @param null | string $vkn_tckn
     * @return static
     */
    public function withVknTckn(?string $vkn_tckn): static
    {
        $new = clone $this;
        $new->vkn_tckn = $vkn_tckn;

        return $new;
    }

    /**
     * @return array<int<0,max>, string>
     */
    public function getGbList(): array
    {
        return $this->gbList;
    }

    /**
     * @param array<int<0,max>, string> $gbList
     * @return static
     */
    public function withGbList(array $gbList): static
    {
        $new = clone $this;
        $new->gbList = $gbList;

        return $new;
    }

    /**
     * @return array<int<0,max>, string>
     */
    public function getPkList(): array
    {
        return $this->pkList;
    }

    /**
     * @param array<int<0,max>, string> $pkList
     * @return static
     */
    public function withPkList(array $pkList): static
    {
        $new = clone $this;
        $new->pkList = $pkList;

        return $new;
    }
}

