<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Application;

use function sprintf;

final class Runtime
{
    public function asString(): string
    {
        $php = $this->php();

        return sprintf(
            'PHPUnit %s using PHP %s (%s) on %s',
            $this->phpunit()->version(),
            $php->asString(),
            $php->sapi(),
            $this->os()->asString()
        );
    }

    public function php(): PHP
    {
        return new PHP();
    }

    public function phpunit(): PHPUnit
    {
        return new PHPUnit();
    }

    public function os(): OS
    {
        return new OS();
    }
}