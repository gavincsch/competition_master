<?php

/**
 * @author: Gavin Schreiber gavin@zando.co.za
 */

namespace App\Traits;

use Glowtech\JsonLogger\Loggable as BaseLoggable;

trait Loggable
{
    use BaseLoggable;

    /**
     * The base directory where the logs are to be written
     *
     * @return string
     */
    protected function getLogsPath()
    {
        return storage_path('logs').DIRECTORY_SEPARATOR;
    }

    /**
     * @return string
     */
    protected function getEnvironment()
    {
        return App::environment();
    }
}