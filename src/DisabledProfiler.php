<?php

namespace JKocik\Laravel\Profiler;

use Illuminate\Foundation\Application;
use JKocik\Laravel\Profiler\Contracts\Profiler;
use JKocik\Laravel\Profiler\Contracts\DataTracker;
use JKocik\Laravel\Profiler\Contracts\DataProcessor;
use JKocik\Laravel\Profiler\Contracts\RequestHandledListener;

class DisabledProfiler implements Profiler
{
    /**
     * @param Application $app
     * @param DataTracker $dataTracker
     * @param DataProcessor $dataProcessor
     * @param RequestHandledListener $requestHandledListener
     * @return void
     */
    public function boot(
        Application $app,
        DataTracker $dataTracker,
        DataProcessor $dataProcessor,
        RequestHandledListener $requestHandledListener
    ): void {

    }
}
