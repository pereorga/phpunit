<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\TestDouble;

use PHPUnit\Event\Event;
use PHPUnit\Event\Telemetry;

final class ProphecyCreated implements Event
{
    private Telemetry\Info $telemetryInfo;

    public function __construct(Telemetry\Info $telemetryInfo)
    {
        $this->telemetryInfo = $telemetryInfo;
    }

    public function telemetryInfo(): Telemetry\Info
    {
        return $this->telemetryInfo;
    }
}