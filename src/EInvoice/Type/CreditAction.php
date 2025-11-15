<?php

namespace SmartDonusum\EInvoice\Type;

class CreditAction
{
    /**
     * @var string
     */
    private string $purchase_date;

    /**
     * @var string
     */
    private string $expire_date;

    /**
     * @var float
     */
    private float $purchase_count;

    /**
     * @var float
     */
    private float $consideredCount;

    /**
     * @var int
     */
    private int $credit_unit;

    /**
     * @var string
     */
    private string $credit_pool_id;

    /**
     * @var string
     */
    private string $buyer_VKN_TCKN;

    /**
     * @var 'BASLAMA' | 'SATINALMA' | 'DEVIR_GIRIS' | 'HEDIYE' | 'DEVIR_CIKIS' | 'TRANSFER'
     */
    private string $action_type;

    /**
     * @var string
     */
    private string $code;

    /**
     * @var string
     */
    private string $explanation;

    /**
     * @return string
     */
    public function getPurchaseDate(): string
    {
        return $this->purchase_date;
    }

    /**
     * @param string $purchase_date
     * @return static
     */
    public function withPurchaseDate(string $purchase_date): static
    {
        $new = clone $this;
        $new->purchase_date = $purchase_date;

        return $new;
    }

    /**
     * @return string
     */
    public function getExpireDate(): string
    {
        return $this->expire_date;
    }

    /**
     * @param string $expire_date
     * @return static
     */
    public function withExpireDate(string $expire_date): static
    {
        $new = clone $this;
        $new->expire_date = $expire_date;

        return $new;
    }

    /**
     * @return float
     */
    public function getPurchaseCount(): float
    {
        return $this->purchase_count;
    }

    /**
     * @param float $purchase_count
     * @return static
     */
    public function withPurchaseCount(float $purchase_count): static
    {
        $new = clone $this;
        $new->purchase_count = $purchase_count;

        return $new;
    }

    /**
     * @return float
     */
    public function getConsideredCount(): float
    {
        return $this->consideredCount;
    }

    /**
     * @param float $consideredCount
     * @return static
     */
    public function withConsideredCount(float $consideredCount): static
    {
        $new = clone $this;
        $new->consideredCount = $consideredCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getCreditUnit(): int
    {
        return $this->credit_unit;
    }

    /**
     * @param int $credit_unit
     * @return static
     */
    public function withCreditUnit(int $credit_unit): static
    {
        $new = clone $this;
        $new->credit_unit = $credit_unit;

        return $new;
    }

    /**
     * @return string
     */
    public function getCreditPoolId(): string
    {
        return $this->credit_pool_id;
    }

    /**
     * @param string $credit_pool_id
     * @return static
     */
    public function withCreditPoolId(string $credit_pool_id): static
    {
        $new = clone $this;
        $new->credit_pool_id = $credit_pool_id;

        return $new;
    }

    /**
     * @return string
     */
    public function getBuyerVKNTCKN(): string
    {
        return $this->buyer_VKN_TCKN;
    }

    /**
     * @param string $buyer_VKN_TCKN
     * @return static
     */
    public function withBuyerVKNTCKN(string $buyer_VKN_TCKN): static
    {
        $new = clone $this;
        $new->buyer_VKN_TCKN = $buyer_VKN_TCKN;

        return $new;
    }

    /**
     * @return 'BASLAMA' | 'SATINALMA' | 'DEVIR_GIRIS' | 'HEDIYE' | 'DEVIR_CIKIS' | 'TRANSFER'
     */
    public function getActionType(): string
    {
        return $this->action_type;
    }

    /**
     * @param 'BASLAMA' | 'SATINALMA' | 'DEVIR_GIRIS' | 'HEDIYE' | 'DEVIR_CIKIS' | 'TRANSFER' $action_type
     * @return static
     */
    public function withActionType(string $action_type): static
    {
        $new = clone $this;
        $new->action_type = $action_type;

        return $new;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return static
     */
    public function withCode(string $code): static
    {
        $new = clone $this;
        $new->code = $code;

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

