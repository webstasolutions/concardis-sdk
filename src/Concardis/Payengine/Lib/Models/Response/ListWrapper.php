<?php declare(strict_types=1);

namespace Concardis\Payengine\Lib\Models\Response;

/**
 * Class ListWrapper
 * @package Concardis\Payengine\Lib\Models\Response
 */
class ListWrapper
{

    /**
     * @var array
     */
    private array $elements;

    /**
     * @var integer
     */
    private int $totalPages;

    /**
     * @return array
     */
    public function getElements(): array
    {
        return $this->elements;
    }

    /**
     * @param array $elements
     * @return ListWrapper
     */
    public function setElements(array $elements): self
    {
        $this->elements = $elements;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

    /**
     * @param int $totalPages
     * @return ListWrapper
     */
    public function setTotalPages(int $totalPages): self
    {
        $this->totalPages = $totalPages;
        return $this;
    }
}