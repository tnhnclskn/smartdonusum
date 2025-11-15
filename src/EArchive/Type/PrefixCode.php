<?php

namespace SmartDonusum\EArchive\Type;

class PrefixCode
{
    /**
     * @var 'PrefixCode' | 'EArsivPrefixCode' | 'DespatchPrefixCode' | 'SVoucherPrefixCode' | 'MVoucherPrefixCode' | 'ReceiptAdvicePrefixCode' | 'ExchangePrefixCode' | 'ExpenseNotePrefixCode' | 'ReceiptPrefixCode' | 'SigortaPrefixCode' | 'SigortaPolicePrefixCode'
     */
    private string $prefixType;

    /**
     * @var string
     */
    private string $prefixKey;

    /**
     * @return 'PrefixCode' | 'EArsivPrefixCode' | 'DespatchPrefixCode' | 'SVoucherPrefixCode' | 'MVoucherPrefixCode' | 'ReceiptAdvicePrefixCode' | 'ExchangePrefixCode' | 'ExpenseNotePrefixCode' | 'ReceiptPrefixCode' | 'SigortaPrefixCode' | 'SigortaPolicePrefixCode'
     */
    public function getPrefixType(): string
    {
        return $this->prefixType;
    }

    /**
     * @param 'PrefixCode' | 'EArsivPrefixCode' | 'DespatchPrefixCode' | 'SVoucherPrefixCode' | 'MVoucherPrefixCode' | 'ReceiptAdvicePrefixCode' | 'ExchangePrefixCode' | 'ExpenseNotePrefixCode' | 'ReceiptPrefixCode' | 'SigortaPrefixCode' | 'SigortaPolicePrefixCode' $prefixType
     * @return static
     */
    public function withPrefixType(string $prefixType): static
    {
        $new = clone $this;
        $new->prefixType = $prefixType;

        return $new;
    }

    /**
     * @return string
     */
    public function getPrefixKey(): string
    {
        return $this->prefixKey;
    }

    /**
     * @param string $prefixKey
     * @return static
     */
    public function withPrefixKey(string $prefixKey): static
    {
        $new = clone $this;
        $new->prefixKey = $prefixKey;

        return $new;
    }
}

