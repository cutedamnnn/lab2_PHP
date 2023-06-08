<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

use App\Models\Address;

class CountAddresses extends Command
{
    //Свойство $signature также позволяет определять вводимые данные. Метод handle будет вызываться при выполнении команды.
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'customer:count {id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'количество адресов у пользователя с идентификатором {id}';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $id = $this->argument('id');
        if (Address::where('id', $id)->exists()) {
            $add_id = Address::findOrFail($id);
            $this->info($add_id->articles->count());
        } else {
            $this->info("404: {$id}");
        }
        return 0;
    }
}
