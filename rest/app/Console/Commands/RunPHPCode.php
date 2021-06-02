<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class RunPHPCode extends Command
{

    protected $signature = 'php-runner:execute {code}';
    protected $description = 'PHP runner';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $response = Http::post('nginx:8888', ['code' => $this->argument('code')]);
        $this->info($response->body());
    }
}
