<?php

declare(strict_types=1);
system('clear');

class Newspaper
{
    /** @var $name string name of the newspaper. */
    private $name;

    /** @var $numberOfPages integer number of pages in newspaper. */
    private $numberOfPages;

    /** @var $numberOfCopies integer number of printed copies. */
    private $numberOfCopies;

    /** @var $isColor boolean to show if newspaper is printed in color or not. */
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
        if ($numberOfPages%4) {
            die("Number of pages needs to be divisible by 4!");
        } else {
            $this->numberOfPages = $numberOfPages;
        }
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

    public function getIsColor(): string
    {
        if($this->isColor) {
            return "We will print it in color.";
        } else {
            return "We will print it in black&white.";
        }

    }
}
