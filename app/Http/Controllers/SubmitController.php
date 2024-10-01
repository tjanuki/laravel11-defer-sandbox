<?php

namespace App\Http\Controllers;

use App\Services\SubmitService;
use Illuminate\Http\Request;

class SubmitController extends Controller
{

    public function __construct(
        private readonly SubmitService $submitService
    )
    {
    }

    public function __invoke()
   {
       $this->submitService->deferredSubmit();

         return 'Submitted';
   }
}
