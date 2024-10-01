<?php

namespace App\Services;

class SubmitService
{

    public function deferredSubmit(): void
    {
        defer(function () {
            sleep(3);
            logger('3 seconds later');
        });
    }
}
