<?php

namespace ZapMap\ZapMapLaravel\Tests;

use ZapMap\ZapMapLaravel\Providers\ZapMapLaravelServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * @before
     */
    public function setTheApiKey()
    {
        $this->app->config->set('zapmap.apiKey', 'testing123');
    }

    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return ZapMapLaravelServiceProvider::class;
    }
}