<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeployCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deploy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deploy the application';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Run other deployment tasks (e.g., cache, config, etc.)
        $this->info('Clearing cache...');
        $this->call('cache:clear');

        $this->info('Clearing config cache...');
        $this->call('config:clear');

        $this->info('Optimizing config cache...');
        $this->call('config:cache');

        // Run GnugatShieldGenerate
        $this->info('Running Shield Generate...');
        $this->call('shield:generate', ['--all' => true]);

        // Run SuperAdmin
        $this->info('Running Permission Seeder...');
        $this->call('shield:super-admin');

        // Run RunPermissionSeederAfterDeploy
        $this->info('Running Permission Seeder...');
        $this->call('db:seed', ['--class' => 'PermissionSeeder']);

        // Add any other tasks you want to run during deployment

        $this->info('Deployment tasks completed successfully.');

        return Command::SUCCESS;
    }
}
