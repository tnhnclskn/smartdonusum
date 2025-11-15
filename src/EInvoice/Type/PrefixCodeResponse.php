<?php

namespace SmartDonusum\EInvoice\Type;

class PrefixCodeResponse
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
     * @var bool
     */
    private bool $active;

    /**
     * @var bool
     */
    private bool $isOk;

    /**
     * @var string
     */
    private string $explanation;

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

    /**
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return static
     */
    public function withActive(bool $active): static
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsOk(): bool
    {
        return $this->isOk;
    }

    /**
     * @param bool $isOk
     * @return static
     */
    public function withIsOk(bool $isOk): static
    {
        $new = clone $this;
        $new->isOk = $isOk;

        return $new;
    }

    /**
     * @return string
     */
    public function getExplanation(): string
    {
        return $this->explanation;
    }

    /**
     * @param string $explanation
     * @return static
     */
    public function withExplanation(string $explanation): static
    {
        $new = clone $this;
        $new->explanation = $explanation;

        return $new;
    }
}

