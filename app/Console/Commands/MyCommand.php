<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyCommand extends Command
{

    /*
    Parámetro obligatorio:{param}
    Parámetro opcional: {param?} o {param=algo}
    Opción: {--opción}
    Opción que requiere valor: {--opción=}
    Opción con valor por defecto: {--opción=valor}
    Abreviatura: {--O|opción}
    Múltiples valores (array):{param*}
    */

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mycommand {param}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $text = $this->argument("param");

        $this->info("You wrote $text");

        $this->withProgressBar([1,2,3], function(){
            sleep(1);
        });

        /*
           ask('pregunta)
           secret('pregunta)
           confirm('pregunta)
           anticipate('pregunta', [opciones])
           choice('pregunta', [opciones])
        */
        
        // $this->line($this->ask("Are you done?"));

        return Command::SUCCESS;
    }
}
