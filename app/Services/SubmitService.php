<?php

namespace App\Services;

class SubmitService
{

    public function deferredSubmit(string $log = ''): void
    {
        defer(function () use ($log) {
            sleep(3);
            logger('3 seconds later in the service ' . $log);
        });
    }
}
