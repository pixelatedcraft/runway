<?php

namespace Pixelatedcraft\Runway\Console;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class StopCommand extends Command
{
    protected $signature = 'runway:stop';

    protected $description = 'Stop runway docker container';

    public function handle()
    {
        $process = new Process(['docker', 'compose', 'down']);
        $process->run();

        if ($process->isSuccessful()) {
            $this->info('Runway stop successfully');
        } else {
            $this->error('Runway did not stop successfully.');
        }
    }
}
