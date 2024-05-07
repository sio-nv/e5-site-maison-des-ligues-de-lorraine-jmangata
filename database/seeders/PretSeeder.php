<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pret;

class PretSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pret::insert([
            ['coteOuvrage'=> '1', 'numeroCarteEmprunteur'=>'6', 'datePret' => '2011-10-26'],
            ['coteOuvrage'=> '1', 'numeroCarteEmprunteur'=>'20','datePret' => '2006-07-20'],
            ['coteOuvrage'=> '1','numeroCarteEmprunteur'=>'402','datePret' => '2006-07-20'],
            ['coteOuvrage'=> '1','numeroCarteEmprunteur'=>'555','datePret' => '2011-10-26'],
            ['coteOuvrage'=> '23','numeroCarteEmprunteur'=>'57','datePret' => '2007-05-11'],
            ['coteOuvrage'=> '23','numeroCarteEmprunteur'=>'402','datePret' => '2007-05-11'],
            ['coteOuvrage'=> '223','numeroCarteEmprunteur'=>'57','datePret' => '2007-01-06'],
            ['coteOuvrage'=> '223','numeroCarteEmprunteur'=>'539','datePret' => '2007-01-06'],
            ['coteOuvrage'=> '27','numeroCarteEmprunteur'=>'68','datePret' => '2011-10-05'],
            ['coteOuvrage'=> '27','numeroCarteEmprunteur'=>'485','datePret' => '2011-10-05'],
            ['coteOuvrage'=> '219','numeroCarteEmprunteur'=>'76','datePret' => '2012-02-01'],
            ['coteOuvrage'=> '219','numeroCarteEmprunteur'=>'555','datePret' => '2012-02-01'],
            ['coteOuvrage'=> '220','numeroCarteEmprunteur'=>'76','datePret' => '2006-04-21'],
            ['coteOuvrage'=> '220','numeroCarteEmprunteur'=>'103','datePret' => '2011-09-14'],
            ['coteOuvrage'=> '220','numeroCarteEmprunteur'=>'734','datePret' => '2011-09-14'],
            ['coteOuvrage'=> '220','numeroCarteEmprunteur'=>'798','datePret' => '2006-04-21'],
            ['coteOuvrage'=> '218','numeroCarteEmprunteur'=>'103','datePret' => '2010-01-19'],
            ['coteOuvrage'=> '218','numeroCarteEmprunteur'=>'812','datePret' => '2010-01-19'],
            ['coteOuvrage'=> '225','numeroCarteEmprunteur'=>'263','datePret' => '2012-09-01'],
            ['coteOuvrage'=> '225','numeroCarteEmprunteur'=>'812','datePret' => '2012-09-01'],
            ['coteOuvrage'=> '219','numeroCarteEmprunteur'=>'293','datePret' => '2011-07-30'],
            ['coteOuvrage'=> '219','numeroCarteEmprunteur'=>'978','datePret' => '2011-07-30'],
            ['coteOuvrage'=> '23','numeroCarteEmprunteur'=>'320','datePret' => '2007-03-16'],
            ['coteOuvrage'=> '23','numeroCarteEmprunteur'=>'986','datePret' => '2007-03-16'],
            ['coteOuvrage'=> '213','numeroCarteEmprunteur'=>'383','datePret' => '2008-12-15'],
            ['coteOuvrage'=> '213','numeroCarteEmprunteur'=>'974','datePret' => '2008-12-15']
        ]);
                }
}

    

