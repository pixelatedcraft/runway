<?php

namespace Pixelatedcraft\Runway\Console;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class Startcommand extends Command
{
    protected $signature = 'runway:start';

    protected $description = 'Start runway';

    public function handle()
    {
        $process = new Process(['docker', 'compose', 'up', '-d']);
        $process->run();

        if ($process->isSuccessful()) {
            $this->info('Runway started successfully');
        } else {
            $this->error('Runway did not start successfully');
        }
    }
}
