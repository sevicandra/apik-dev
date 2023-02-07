<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class gfxHourly extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:gfxHourly';

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
        $file = Storage::disk('sftp')->files('Report/Incoming');
        foreach($file as $item){
            $extension = explode('.', $item);
            if($extension[1] === 'csv'){
                continue;
            }
            Storage::disk('sftp')->get($item);

        }
        return Command::SUCCESS;
    }
}
