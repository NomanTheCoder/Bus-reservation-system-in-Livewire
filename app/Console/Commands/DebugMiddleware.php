<?php

// app/Console/Commands/DebugMiddleware.php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Routing\Router;

class DebugMiddleware extends Command
{
    protected $signature = 'debug:middleware';

    protected $description = 'List all registered route middleware';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(Router $router)
    {
        $middlewares = $router->getMiddleware();
        foreach ($middlewares as $name => $class) {
            $this->info("{$name}: {$class}");
        }
    }
}
