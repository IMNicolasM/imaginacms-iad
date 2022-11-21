<?php

namespace Modules\Iad\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class IadDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

      $this->call(IadModuleTableSeeder::class);
      $this->call(IformComplaintTableSeeder::class);
        // $this->call("OthersTableSeeder");
    }
}
