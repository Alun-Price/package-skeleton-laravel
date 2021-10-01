<?php

namespace EcoOnline\Contactformapi\Tests\Feature\Commands;

use EcoOnline\Contactformapi\Tests\TestCase;

class SkeletonCommandTest extends TestCase
{
    /** @test */
    public function the_skeleton_command_works()
    {
        $this->artisan('contactformapi')->assertExitCode(0);
    }
}


