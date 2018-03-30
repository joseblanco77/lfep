<?php

namespace Modules\Contacto\Console;

use Illuminate\Console\Command;
use Modules\Cajaverde\Entities\CajaverdeUser;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ContactoPermissionsSeeder extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cajaverde:contacto-permissions-seeder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Asigna permisos a usuarios en el módulo Contacto';

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
        $adminForms = CajaverdeUser::where('email', 'soporte@grupoperinola.com')->first();
        $adminForms->assignRole(['admin_contact_forms']);
        $this->info('Permisos adminForms asignados al usuario ' . $adminForms->email);
        
        $editForms = CajaverdeUser::where('email', 'jose.blanco@grupoperinola.com')->first();
        $editForms->assignRole(['editor_contact_forms']);
        $this->info('Permisos editForms asignados al usuario ' . $editForms->email);
        
        $viewForms = CajaverdeUser::where('email', 'javier.meza@grupoperinola.com')->first();
        $viewForms->assignRole(['checker_contact_forms']);
        $this->info('Permisos viewForms asignados al usuario ' . $viewForms->email);
        
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
