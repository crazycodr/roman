<?php
namespace CrazyCodr\Converters\Test;

use CrazyCodr\Converters\Roman;
use League\Csv\Reader;

class RomanTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @param $input
     * @param $expected
     *
     * @dataProvider providesToRoman
     */
    public function testToRoman($input, $expected)
    {
        $converter = new Roman();
        $this->assertEquals($expected, $converter->toRoman($input), 'Failed to assert that conversion of '.$input.'
        to roman expected into "'.$expected.'"');
    }

    /**
     * @param $input
     * @param $expected
     *
     * @dataProvider providesFromRoman
     */
    public function testFromRoman($expected, $input)
    {
        $converter = new Roman();
        $this->assertEquals($expected, $converter->fromRoman($input), 'Failed to assert that conversion of '.$input.'
        to decimal expected into "'.$expected.'"');
    }

    public function providesToRoman()
    {
        $fixture = Reader::createFromPath(__DIR__.'/fixtures/roman-test.csv');
        return $fixture->fetchAll();
    }

    public function providesFromRoman()
    {
        $fixture = Reader::createFromPath(__DIR__.'/fixtures/roman-test.csv');
        return $fixture->fetchAll();
    }
}
