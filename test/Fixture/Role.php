<?php

declare(strict_types=1);

namespace DotTest\Authorization\Fixture;

use Dot\Authorization\Role\RoleInterface;

final class Role implements RoleInterface
{
    public function __construct(private readonly string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }
}
