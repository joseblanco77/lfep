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
        $adminForms = CajaverdeUser::where('email', 'suchitevictor@yahoo.es')->first();
        $adminForms->assignRole(['admin_contact_forms']);
        $this->info('Permisos adminForms asignados al usuario ' . $adminForms->email);
        
        $adminForms = CajaverdeUser::where('email', 'joseblanco77@gmail.com')->first();
        $adminForms->assignRole(['admin_contact_forms']);
        $this->info('Permisos adminForms asignados al usuario ' . $adminForms->email);
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
