<?php

namespace App\Console\Commands;

use App\Services\SubmitService;
use Illuminate\Console\Command;

class DeferTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:defer-test-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(SubmitService $submitService): int
    {
        // This closure will not be executed
        defer(function () use ($submitService) {
            sleep(1);
            logger('1 seconds later in the command');

            $submitService->deferredSubmit('in the command closure');
        });

        // This will be executed without defer
        $submitService->deferredSubmit(' in the command');

        $this->info('Command executed');

        return 0;
    }
}
