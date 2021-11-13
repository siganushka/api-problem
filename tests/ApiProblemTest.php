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
        $apiProblem = new ApiProblem('https://tools.ietf.org/html/rfc7807', 'Not Found.', 404, 'Resource Not Found.');

        static::assertInstanceOf(ApiProblemInterface::class, $apiProblem);
        static::assertSame('https://tools.ietf.org/html/rfc7807', $apiProblem->getType());
        static::assertSame('Not Found.', $apiProblem->getTitle());
        static::assertSame(404, $apiProblem->getStatus());
        static::assertSame('Resource Not Found.', $apiProblem->getDetail());
    }
}
