<?php

namespace SmartDonusum\Type;

class UploadXsltPayload
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var mixed
     */
    private mixed $content;

    /**
     * @var bool
     */
    private bool $isDefault;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return static
     */
    public function withName(string $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getContent(): mixed
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     * @return static
     */
    public function withContent(mixed $content): static
    {
        $new = clone $this;
        $new->content = $content;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * @param bool $isDefault
     * @return static
     */
    public function withIsDefault(bool $isDefault): static
    {
        $new = clone $this;
        $new->isDefault = $isDefault;

        return $new;
    }
}

