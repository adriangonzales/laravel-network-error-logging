<?php

namespace AdGoDev\LaravelNetworkErrorLogging\Commands;

use Illuminate\Console\Command;

class LaravelNetworkErrorLoggingCommand extends Command
{
    public $signature = 'laravel-nel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
