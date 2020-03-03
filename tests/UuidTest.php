<?php

namespace Tests;

use Ramsey\Uuid\Uuid;
use Tests\Models\Workspace;

class UuidTest extends TestCase
{
    public function testWorkspaceUuid()
    {
        $workspace = Workspace::create(['name' => 'Workspace']);

        $this->assertTrue(Uuid::isValid($workspace->id));
    }
}
