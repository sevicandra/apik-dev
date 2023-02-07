<?php

namespace App\Console\Commands;

use App\Models\gfx as ModelsGfx;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class gfx extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:gfx';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Download and Store Form GFX BNI';

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
            if($extension[1] != 'csv'){
                break;
            }
            $contents = Storage::disk('sftp')->get($item);
            $lines = explode("\n", $contents);
            foreach ($lines as $line) {
                $report = explode(':', $line);
                if (isset($report[1]) && isset($report[2])) {
                    if ($report[1] === '61' || $report[1] === '86') {
                        ModelsGfx::create([
                            'code'=>$report[1],
                            'detail'=>$report[2]
                        ]);
                    }
                }
            }
        }
        
        return Command::SUCCESS;
    }
}
