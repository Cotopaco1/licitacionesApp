<?php

namespace App\Console\Commands;

use App\Models\Tax;
use Illuminate\Console\Command;

class initalSettings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:initial-settings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        Tax::create([
            'name' => 'IVA',
            'tax_percentage' => 19,
            'tax_multiplier' => 0.19,
            'total_with_tax_multiplier' => 1.19
        ]);
        $this->info('IVA created successfully');

    }
}
