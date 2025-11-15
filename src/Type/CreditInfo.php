<?php

namespace SmartDonusum\Type;

class CreditInfo
{
    /**
     * @var string
     */
    private string $code;

    /**
     * @var string
     */
    private string $explanation;

    /**
     * @var float
     */
    private float $totalCredit;

    /**
     * @var float
     */
    private float $remainCredit;

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

    /**
     * @return float
     */
    public function getTotalCredit(): float
    {
        return $this->totalCredit;
    }

    /**
     * @param float $totalCredit
     * @return static
     */
    public function withTotalCredit(float $totalCredit): static
    {
        $new = clone $this;
        $new->totalCredit = $totalCredit;

        return $new;
    }

    /**
     * @return float
     */
    public function getRemainCredit(): float
    {
        return $this->remainCredit;
    }

    /**
     * @param float $remainCredit
     * @return static
     */
    public function withRemainCredit(float $remainCredit): static
    {
        $new = clone $this;
        $new->remainCredit = $remainCredit;

        return $new;
    }
}

