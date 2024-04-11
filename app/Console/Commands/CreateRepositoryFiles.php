<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateRepositoryFiles extends Command
{
    protected $signature = 'make:repository {name}';

    protected $description = 'Create interface and file in app/repositories directory';

    public function handle()
    {
        $name = $this->argument('name');
        
        // Create interface directory if not exists
        $interfaceDirectory = app_path('Repositories/Interfaces');
        if (!File::exists($interfaceDirectory)) {
            File::makeDirectory($interfaceDirectory, 0755, true);
        }
        
        // Create repository directory if not exists
        $repositoryDirectory = app_path('Repositories');
        if (!File::exists($repositoryDirectory)) {
            File::makeDirectory($repositoryDirectory, 0755, true);
        }
        
        // Create interface file
        $interfacePath = $interfaceDirectory . '/' . $name . 'RepositoryInterface.php';
        File::put($interfacePath, '<?php' . PHP_EOL . PHP_EOL . 'namespace App\Repositories\Interfaces;' . PHP_EOL . PHP_EOL . 'interface ' . $name . 'RepositoryInterface {' . PHP_EOL . PHP_EOL . '}');

        // Create repository file
        $repositoryPath = $repositoryDirectory . '/' . $name . 'Repository.php';
        File::put($repositoryPath, '<?php' . PHP_EOL . PHP_EOL . 'namespace App\Repositories;' . PHP_EOL . PHP_EOL . 'class ' . $name . 'Repository {' . PHP_EOL . PHP_EOL . '}');

        $this->info('Repository files created successfully.');
    }
}