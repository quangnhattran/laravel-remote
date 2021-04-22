<?php

namespace Quangvision\Remote\Commands;

use Illuminate\Console\Command;
use Spatie\Ssh\Ssh;

class RemoteCommand extends Command
{
    public $signature = 'remote {command}';

    public $description = 'Execute artisan command from a remote server';

    public function handle()
    {
        Ssh::create('nl', 'localhost')->usePort(2222)
            ->onOutput(
            function ($type, $line) {
                echo $line;
            })->execute($this->getCommandToExecute());

    }

    private function getCommandToExecute()
    {
        return $this->argument('command');
    }
}
