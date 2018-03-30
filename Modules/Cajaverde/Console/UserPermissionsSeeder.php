<?php

namespace Modules\Cajaverde\Console;

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
    protected $name = 'cajaverde:user-permissions-seeder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Asigna permisos a usuarios en el módulo Cajaverde';

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
        $adminUsuarios = CajaverdeUser::where('email', 'soporte@grupoperinola.com')->first();
        $adminUsuarios->assignRole(['admin_usuarios', 'admin_roles', 'admin_permisos']);
        //$adminUsuarios->syncRoles(['admin_usuarios', 'admin_roles', 'admin_permisos']); 
        $this->info('Permisos adminUsuarios asignados al usuario ' . $adminUsuarios->email);
        
        $editUsuarios = CajaverdeUser::where('email', 'jose.blanco@grupoperinola.com')->first();
        $editUsuarios->assignRole(['editor_usuarios', 'editor_roles', 'editor_permisos']);
        //$editUsuarios->syncRoles(['editor_usuarios', 'editor_roles', 'editor_permisos']); 
        $this->info('Permisos editUsuarios asignados al usuario ' . $editUsuarios->email);
        
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
