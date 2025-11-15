<?php

namespace SmartDonusum\EArchive\Type;

class UserQueryResponse
{
    /**
     * @var int
     */
    private int $queryState;

    /**
     * @var null | string
     */
    private ?string $stateExplanation = null;

    /**
     * @var int
     */
    private int $userCount;

    /**
     * @var array<int<0,max>, \SmartDonusum\EArchive\Type\ResponseUser>
     */
    private array $users;

    /**
     * @return int
     */
    public function getQueryState(): int
    {
        return $this->queryState;
    }

    /**
     * @param int $queryState
     * @return static
     */
    public function withQueryState(int $queryState): static
    {
        $new = clone $this;
        $new->queryState = $queryState;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStateExplanation(): ?string
    {
        return $this->stateExplanation;
    }

    /**
     * @param null | string $stateExplanation
     * @return static
     */
    public function withStateExplanation(?string $stateExplanation): static
    {
        $new = clone $this;
        $new->stateExplanation = $stateExplanation;

        return $new;
    }

    /**
     * @return int
     */
    public function getUserCount(): int
    {
        return $this->userCount;
    }

    /**
     * @param int $userCount
     * @return static
     */
    public function withUserCount(int $userCount): static
    {
        $new = clone $this;
        $new->userCount = $userCount;

        return $new;
    }

    /**
     * @return array<int<0,max>, \SmartDonusum\EArchive\Type\ResponseUser>
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param array<int<0,max>, \SmartDonusum\EArchive\Type\ResponseUser> $users
     * @return static
     */
    public function withUsers(array $users): static
    {
        $new = clone $this;
        $new->users = $users;

        return $new;
    }
}

