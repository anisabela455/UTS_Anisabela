<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GenerateMVC extends Command
{
    protected $signature = 'generate:mvc';
    protected $description = 'Generate Model, Controller, View, and Route for all tables';

    public function handle()
    {
        $tables = DB::select('SHOW TABLES');
        $dbName = env('DB_DATABASE');
        $key = "Tables_in_$dbName";

        foreach ($tables as $table) {
            $tableName = $table->$key;
            $modelName = Str::studly(Str::singular($tableName));
            $controllerName = "{$modelName}Controller";

            // Generate model
            $this->callSilent('make:model', ['name' => $modelName]);

            // Generate controller
            $this->callSilent('make:controller', ['name' => $controllerName]);
            $controllerPath = app_path("Http/Controllers/{$controllerName}.php");
            File::put($controllerPath, $this->controllerContent($controllerName, $modelName, $tableName));

            // Generate view folder + index.blade.php
            $viewDir = resource_path("views/{$tableName}");
            File::ensureDirectoryExists($viewDir);
            File::put("$viewDir/index.blade.php", $this->viewContent($modelName, $tableName));

            // Add route
            $route = "\nRoute::get('/$tableName', [App\Http\Controllers\\$controllerName::class, 'index']);";
            File::append(base_path('routes/web.php'), $route);

            $this->info("Generated MVC for table: $tableName");
        }
    }

    protected function controllerContent($controller, $model, $table)
    {
        return <<<PHP
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\\$model;

class $controller extends Controller
{
    public function index()
    {
        \$data = $model::all();
        return view('$table.index', compact('data'));
    }
}
PHP;
    }

    protected function viewContent($model, $table)
    {
        return <<<BLADE
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data dari tabel: $table</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    @foreach(\$data->first()?->getAttributes() ?? [] as \$key => \$value)
                        <th>{{ \$key }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach(\$data as \$item)
                    <tr>
                        @foreach(\$item->getAttributes() as \$val)
                            <td>{{ \$val }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
BLADE;
    }
}
