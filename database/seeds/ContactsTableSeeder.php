<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        DB::table('contacts')->insert(
        [
        'raison_social'=> 'Pizza Marco',
        'siret' => '588 555 96358',   
        'nom' => 'Tabarini',
        'prenom' => 'Marco',
        'pseudo' => 'macopizza',
        'adresse' => 'Rue du Capitole',
        'ville' => 'Nîmes',
        'codepostal' =>'30527',  
        'telephone'=> '31 49 31 56 58',   
        'email'=> 'pizzamarco@free.fr',
        'password' => 'pizza', 
        'role'=> '1',
        'profil'=>'Quid enim tam absurdum quam delectari multis inanimis rebus, ut honore, ut gloria, ut aedificio, ut vestitu cultuque corporis, animante virtute praedito, eo qui vel amare vel, ut ita dicam, redamare possit, non admodum delectari? Nihil est enim remuneratione benevolentiae, nihil vicissitudine studiorum officiorumque iucundius.',    
        'token'=> '',
        'image_url'=> 'marco.png',
        'profil'=> '',
        'role'=>1
    
             ]
        );
            
       
    
    }
}   

/*DB::table('contacts')->insert(
        [
         'raison_social'
         'siret'    
         'nom' 
         'prenom'
        'pseudo'
        'adresse'
        'ville'
        'telephone'   
        'email'
         'password'  
        'role'
         'token'
        'image_url'
        'profil' 
             ]
        });*/
