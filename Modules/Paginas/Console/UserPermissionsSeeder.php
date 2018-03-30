<?php

namespace Modules\Paginas\Console;

use Illuminate\Console\Command;
use Modules\Cajaverde\Entities\CajaverdeUser;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class UserPermissionsSeeder extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cajaverde:paginas-permissions-seeder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Asigna permisos a usuarios en el módulo Paginas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $adminPaginas = CajaverdeUser::where('email', 'soporte@grupoperinola.com')->first();
        $adminPaginas->assignRole('admin_paginas');
        
        $this->info('Permisos adminPaginas asignados al usuario ' . $adminPaginas->email);

        $editPaginas = CajaverdeUser::where('email', 'jose.blanco@grupoperinola.com')->first();
        $editPaginas->assignRole('editor_paginas');
        
        $this->info('Permisos editPaginas asignados al usuario ' . $editPaginas->email);
        

    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            // ['example', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            // ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
