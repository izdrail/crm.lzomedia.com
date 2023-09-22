<?php

namespace App\Services\Engine;

class JobDispatcher
{

    public function dispatch(string $job, array $params = []): void
    {
        $job = new $job(...$params);
        dispatch($job);
    }

}
