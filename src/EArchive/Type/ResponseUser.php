<?php

namespace SmartDonusum\EArchive\Type;

class ResponseUser
{
    /**
     * @var null | string
     */
    private ?string $vkn_tckn = null;

    /**
     * @var null | string
     */
    private ?string $unvan_ad = null;

    /**
     * @var null | string
     */
    private ?string $etiket = null;

    /**
     * @var null | string
     */
    private ?string $tip = null;

    /**
     * @var null | string
     */
    private ?string $ilkKayitZamani = null;

    /**
     * @var null | string
     */
    private ?string $etiketKayitZamani = null;

    /**
     * @var null | string
     */
    private ?string $etiketKayitTuru = null;

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
     * @return null | string
     */
    public function getUnvanAd(): ?string
    {
        return $this->unvan_ad;
    }

    /**
     * @param null | string $unvan_ad
     * @return static
     */
    public function withUnvanAd(?string $unvan_ad): static
    {
        $new = clone $this;
        $new->unvan_ad = $unvan_ad;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEtiket(): ?string
    {
        return $this->etiket;
    }

    /**
     * @param null | string $etiket
     * @return static
     */
    public function withEtiket(?string $etiket): static
    {
        $new = clone $this;
        $new->etiket = $etiket;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTip(): ?string
    {
        return $this->tip;
    }

    /**
     * @param null | string $tip
     * @return static
     */
    public function withTip(?string $tip): static
    {
        $new = clone $this;
        $new->tip = $tip;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIlkKayitZamani(): ?string
    {
        return $this->ilkKayitZamani;
    }

    /**
     * @param null | string $ilkKayitZamani
     * @return static
     */
    public function withIlkKayitZamani(?string $ilkKayitZamani): static
    {
        $new = clone $this;
        $new->ilkKayitZamani = $ilkKayitZamani;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEtiketKayitZamani(): ?string
    {
        return $this->etiketKayitZamani;
    }

    /**
     * @param null | string $etiketKayitZamani
     * @return static
     */
    public function withEtiketKayitZamani(?string $etiketKayitZamani): static
    {
        $new = clone $this;
        $new->etiketKayitZamani = $etiketKayitZamani;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEtiketKayitTuru(): ?string
    {
        return $this->etiketKayitTuru;
    }

    /**
     * @param null | string $etiketKayitTuru
     * @return static
     */
    public function withEtiketKayitTuru(?string $etiketKayitTuru): static
    {
        $new = clone $this;
        $new->etiketKayitTuru = $etiketKayitTuru;

        return $new;
    }
}

