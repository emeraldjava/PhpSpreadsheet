<?php

namespace PhpOffice\PhpSpreadsheetTests;

use PhpOffice\PhpSpreadsheet\ReferenceHelper;
use PHPUnit_Framework_TestCase;

class ReferenceHelperTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function testColumnSort()
    {
        $columnBase = $columnExpectedResult = [
            'A', 'B', 'Z',
            'AA', 'AB', 'AZ',
            'BA', 'BB', 'BZ',
            'ZA', 'ZB', 'ZZ',
            'AAA', 'AAB', 'AAZ',
            'ABA', 'ABB', 'ABZ',
            'AZA', 'AZB', 'AZZ',
            'BAA', 'BAB', 'BAZ',
            'BBA', 'BBB', 'BBZ',
            'BZA', 'BZB', 'BZZ',
        ];
        shuffle($columnBase);
        usort($columnBase, [ReferenceHelper::class, 'columnSort']);
        foreach ($columnBase as $key => $value) {
            $this->assertEquals($columnExpectedResult[$key], $value);
        }
    }

    public function testColumnReverseSort()
    {
        $columnBase = $columnExpectedResult = [
            'A', 'B', 'Z',
            'AA', 'AB', 'AZ',
            'BA', 'BB', 'BZ',
            'ZA', 'ZB', 'ZZ',
            'AAA', 'AAB', 'AAZ',
            'ABA', 'ABB', 'ABZ',
            'AZA', 'AZB', 'AZZ',
            'BAA', 'BAB', 'BAZ',
            'BBA', 'BBB', 'BBZ',
            'BZA', 'BZB', 'BZZ',
        ];
        shuffle($columnBase);
        $columnExpectedResult = array_reverse($columnExpectedResult);
        usort($columnBase, [ReferenceHelper::class, 'columnReverseSort']);
        foreach ($columnBase as $key => $value) {
            $this->assertEquals($columnExpectedResult[$key], $value);
        }
    }
}
