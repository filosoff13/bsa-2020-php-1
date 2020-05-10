<?php

declare(strict_types=1);

namespace App\Task2;

/**
 * Class BooksGenerator
 * @package App\Task2
 */
class BooksGenerator
{
    protected array $libraryBooks = [];
    protected array $storeBooks = [];
    protected int $maxPrice;
    protected int $minPagesNumber;

    /**
     * BooksGenerator constructor.
     * @param int $minPagesNumber
     * @param array $libraryBooks
     * @param int $maxPrice
     * @param array $storeBooks
     */
    public function __construct(
        int $minPagesNumber,
        array $libraryBooks,
        int $maxPrice,
        array $storeBooks
    )
    {
        $this->libraryBooks = $libraryBooks;
        $this->storeBooks = $storeBooks;
        $this->maxPrice = $maxPrice;
        $this->minPagesNumber = $minPagesNumber;
    }

    public function generate(): \Generator
    {
        foreach ($this->libraryBooks as $libraryBook){
            if ($libraryBook->getPagesNumber() >= $this->minPagesNumber){
                yield $libraryBook;
            }
        }

        foreach ($this->storeBooks as $storeBook){
            if ($storeBook->getPrice() < $this->maxPrice){
                yield $storeBook;
            }
        }
    }
}