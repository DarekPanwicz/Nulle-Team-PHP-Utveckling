<?php

declare(strict_types=1);
system('clear');

class Newspaper
{
    private $name;
    private $numberOfPages;
    private $numberOfCopies;
    private $isColor = true;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setNumberOfPages(int $numberOfPages): void
    {
        $this->numberOfPages = $numberOfPages;
    }

    public function getNumberOfPages(): int
    {
        return $this->numberOfPages;
    }

    public function setNumberOfCopies(int $numberOfCopies): void
    {
        $this->numberOfCopies = $numberOfCopies;
    }

    public function getNumberOfCopies(): int
    {
        return $this->numberOfCopies;
    }

    public function toggleColor(): void
    {
        $this->isColor = !$this->isColor;
    }

    public function getIsColor(): bool
    {
        return $this->isColor;
    }
}
