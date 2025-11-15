<?php

namespace SmartDonusum\EArchive\Type;

class FlagSetter
{
    /**
     * @var null | string
     */
    private ?string $document_direction = null;

    /**
     * @var null | string
     */
    private ?string $flag_name = null;

    /**
     * @var int
     */
    private int $flag_value;

    /**
     * @var null | string
     */
    private ?string $document_uuid = null;

    /**
     * @return null | string
     */
    public function getDocumentDirection(): ?string
    {
        return $this->document_direction;
    }

    /**
     * @param null | string $document_direction
     * @return static
     */
    public function withDocumentDirection(?string $document_direction): static
    {
        $new = clone $this;
        $new->document_direction = $document_direction;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFlagName(): ?string
    {
        return $this->flag_name;
    }

    /**
     * @param null | string $flag_name
     * @return static
     */
    public function withFlagName(?string $flag_name): static
    {
        $new = clone $this;
        $new->flag_name = $flag_name;

        return $new;
    }

    /**
     * @return int
     */
    public function getFlagValue(): int
    {
        return $this->flag_value;
    }

    /**
     * @param int $flag_value
     * @return static
     */
    public function withFlagValue(int $flag_value): static
    {
        $new = clone $this;
        $new->flag_value = $flag_value;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDocumentUuid(): ?string
    {
        return $this->document_uuid;
    }

    /**
     * @param null | string $document_uuid
     * @return static
     */
    public function withDocumentUuid(?string $document_uuid): static
    {
        $new = clone $this;
        $new->document_uuid = $document_uuid;

        return $new;
    }
}

