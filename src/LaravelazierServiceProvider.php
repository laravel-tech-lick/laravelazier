<?php

namespace Laravelazier;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaravelazierServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('laravelazier.laz', fn () => new Laz());
    }

    public function boot(): void
    {
        $this->registerBladeDirectives();
        $this->loadRoutesFrom(__DIR__ . '/Support/Core/Internal/pipeline.php');
    }

    private function registerBladeDirectives(): void
    {
        Blade::directive('lazFlash', function () {
            return <<<'PHP'
            <?php if(session()->has('laz_flash')): $lf=session('laz_flash'); ?>
            <div class="laz-flash laz-flash--<?php echo e($lf['type']); ?>"><?php echo e($lf['message']); ?></div>
            <?php endif; ?>
            PHP;
        });
    }
}
