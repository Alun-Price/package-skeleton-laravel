<?php

namespace EcoOnline\Contactformapi\Commands;

use Illuminate\Console\Command;

class ContactformapiCommand extends Command
{
    public $signature = 'contactformapi';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
