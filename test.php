<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class BcMathTest extends TestCase
{
    public function testBcAdd(): void
    {
        bcscale(18);
        $a = '123456789012345678.123456789012345678';
        $b = '987654321098765432.987654321098765432';

        $expectedSum = '1111111110111111110.111111110111111110';
        $actualSum = bcadd($a, $b);
        
        $this->assertSame($expectedSum, $actualSum);
    }

    public function testBcSub(): void
    {
        bcscale(18);
        $a = '987654321098765432.987654321098765432';
        $b = '123456789012345678.123456789012345678';

        $expectedDifference = '864197532086419754.864197532086419754';
        $actualDifference = bcsub($a, $b);

        $this->assertSame($expectedDifference, $actualDifference);
    }
}
