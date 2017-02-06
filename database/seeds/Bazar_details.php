<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Bazar_details extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$current = Carbon::now();
        $bazar_details=[
            [ 'id'=>1, 'user_id'=>1, 'Menu_id'=>1, 'Amount'=> 1, 'Date'=>Carbon::now() ],
            
        ];
        
        DB::table('Bazar_details')->insert($bazar_details);
    }
}
