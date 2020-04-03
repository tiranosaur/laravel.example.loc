<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SwaggerGenerate extends Command
{
    protected $signature = 'swagger:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Swagger Docs and put them in /public';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $swagger = \OpenApi\scan(app_path());
        $swagger->saveAs(public_path('swagger.json'));
    }

    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
