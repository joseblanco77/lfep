<?php

namespace Modules\Cajaverde\Console;

use Mail;
use \Exception;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Modules\Cajaverde\Mail\Test\TestMail;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class CajaverdeTestMail extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'cajaverde:test-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envía un test dummy a la dirección configurada en CAJAVERDE_TEST_MAIL';

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
        $time = Carbon::now()->format('d-m-Y H:i:s');

        try {
            Mail::to(env('CAJAVERDE_TEST_MAIL'))
                ->send(new TestMail($time));
            $this->info("mail enviado con {$time}");
        } catch (Exception $exception) {
            $this->error($exception->getMessage());
        }
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
