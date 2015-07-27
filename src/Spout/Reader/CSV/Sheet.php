<?php

namespace Box\Spout\Reader\CSV;

use Box\Spout\Reader\SheetInterface;

/**
 * Class Sheet
 *
 * @package Box\Spout\Reader\CSV
 */
class Sheet implements SheetInterface
{
    /** @var RowIterator To iterate over the CSV's rows */
    protected $rowIterator;

    /**
     * @param resource $filePointer Pointer to the CSV file to read
     * @param string $fieldDelimiter Character that delimits fields
     * @param string $fieldEnclosure Character that enclose fields
     * @param \Box\Spout\Common\Helper\GlobalFunctionsHelper $globalFunctionsHelper
     */
    public function __construct($filePointer, $fieldDelimiter, $fieldEnclosure, $globalFunctionsHelper)
    {
        $this->rowIterator = new RowIterator($filePointer, $fieldDelimiter, $fieldEnclosure, $globalFunctionsHelper);
    }

    /**
     * @return RowIterator
     */
    public function getRowIterator()
    {
        return $this->rowIterator;
    }
}
