<?php

namespace SmartDonusum\EArchive\Type;

class SearchParams
{
    /**
     * @var array<int<0,max>, \SmartDonusum\EArchive\Type\Entry>
     */
    private array $entry;

    /**
     * @return array<int<0,max>, \SmartDonusum\EArchive\Type\Entry>
     */
    public function getEntry(): array
    {
        return $this->entry;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\EArchive\Type\Entry> $entry
     * @return static
     */
    public function withEntry(array $entry): static
    {
        $new = clone $this;
        $new->entry = $entry;

        return $new;
    }
}

