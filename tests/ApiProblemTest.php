<?php

declare(strict_types=1);

namespace Siganushka\ApiProblem\Tests;

use PHPUnit\Framework\TestCase;
use Siganushka\ApiProblem\ApiProblem;
use Siganushka\ApiProblem\ApiProblemInterface;

class ApiProblemTest extends TestCase
{
    public function testConstructor(): void
    {
        $apiProblem = new ApiProblem('about:blank', 'Not Found.', 404, 'Resource Not Found.');

        static::assertInstanceOf(ApiProblemInterface::class, $apiProblem);
        static::assertSame('about:blank', $apiProblem->getType());
        static::assertSame('Not Found.', $apiProblem->getTitle());
        static::assertSame(404, $apiProblem->getStatus());
        static::assertSame('Resource Not Found.', $apiProblem->getDetail());
    }
}
