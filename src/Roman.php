<?php
namespace CrazyCodr\Converters;

/**
 * Represents a converter able to convert from and to roman values
 *
 * @package CrazyCodr\Converters
 */
class Roman
{

    const I = 1;
    const V = 5;
    const X = 10;
    const L = 50;
    const C = 100;
    const D = 500;
    const M = 1000;

    /**
     * Returns the array of numbers/romans to convert to another value
     *
     * @return int[]
     */
    protected function getRomanValues()
    {
        return [
            'M' => self::M,
            'D' => self::D,
            'C' => self::C,
            'L' => self::L,
            'X' => self::X,
            'V' => self::V,
            'I' => self::I,
        ];
    }

    /**
     * Returns the array of exceptions to replace one with another when converting
     *
     * @return string[]
     */
    protected function getRomanExceptions()
    {
        return [
            'DCCCC' => 'CM',
            'CCCC' => 'CD',
            'LXXXX' => 'XC',
            'XXXX' => 'XL',
            'VIIII' => 'IX',
            'IIII' => 'IV',
        ];
    }

    /**
     * Converts a number to a roman representation, number will be casted to integer
     *
     * @param int $number
     *
     * @return string
     */
    public function toRoman($number)
    {
        $number = (int)$number;
        $roman = '';
        foreach ($this->getRomanValues() as $romanValue => $numberValue) {
            $roman .= str_repeat($romanValue, floor($number / $numberValue));
            $number = $number % $numberValue;
        }
        foreach ($this->getRomanExceptions() as $replaceThis => $withThis) {
            $roman = str_replace($replaceThis, $withThis, $roman);
        }
        return $roman;
    }

    /**
     * Converts a roman number to a decimal representation
     *
     * @param string $roman
     *
     * @return int
     */
    public function fromRoman($roman)
    {
        $number = 0;
        foreach ($this->getRomanExceptions() as $withThis => $replaceThis) {
            $roman = str_replace($replaceThis, $withThis, $roman);
        }
        foreach ($this->getRomanValues() as $romanValue => $numberValue) {
            $number += $numberValue * substr_count($roman, $romanValue);
        }
        return $number;
    }
}
