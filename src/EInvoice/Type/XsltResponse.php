<?php

namespace SmartDonusum\EInvoice\Type;

class XsltResponse
{
    /**
     * @var null | string
     */
    private ?string $name = null;

    /**
     * @var null | mixed
     */
    private mixed $content = null;

    /**
     * @var null | bool
     */
    private ?bool $isDefault = null;

    /**
     * @return null | string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getContent(): mixed
    {
        return $this->content;
    }

    /**
     * @param null | mixed $content
     * @return static
     */
    public function withContent(mixed $content): static
    {
        $new = clone $this;
        $new->content = $content;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    /**
     * @param null | bool $isDefault
     * @return static
     */
    public function withIsDefault(?bool $isDefault): static
    {
        $new = clone $this;
        $new->isDefault = $isDefault;

        return $new;
    }
}

