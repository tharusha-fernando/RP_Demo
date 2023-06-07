<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_ = new Collection();
        $data_->push([
            'name' => 'Prabodhani Edirisinghe',
            'email' => 'Prabodhaniedirisinghe@gmail.com'
        ]); //RA
        $data_->push([
            'name' => 'Imanthi Dunisha',
            'email' => 'imanthi119@gmail.com'
        ]);
        $data_->push([
            'name' => 'Roshani Achala', ///////////////////
            'email' => 'roshaniachala563@gmail.com'
        ]); ////
        $data_->push([
            'name' => 'Developer2',
            'email' => 'tharushafdo200022222222@gmail.com',
        ]);
        $data_->push([
            'name' => 'Developer22',
            'email' => 'tharushafdo20002222@gmail.com',
        ]);
        $data_->push([
            'name' => 'Amasha Indumini',
            'email' => 'amashabmai@gmail.com',
        ]);


        //$data_->push(['name' => 'BODYLINE PRIVATE LIMITED-WAULUGALA-HORANA', 'address' => 'Waulugala,Horana',
        //  'email'=>'samanAl@masholdings.com','contact1'=>'0763868040']);//Ww

        foreach ($data_ as $data_____) {
            $user = User::create([
                'name' => $data_____['name'],
                'email' => $data_____['email'],
                'password' => Hash::make('12345678'),
            ]);
            //$user->address = $data_['address'];
            //$user->contact1 = $data_['contact1'];
            $user->save();
            $user->attachRole('administrator');
        }

        //
    }
}
