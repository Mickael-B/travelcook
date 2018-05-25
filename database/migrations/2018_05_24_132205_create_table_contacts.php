<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('contacts', function(Blueprint $table){
         $table->increments('id');
         $table->string('raison_social', 70)->index();;
         $table->string('siret', 20)->index();    
          $table->string('nom', 70)->index(); 
          $table->string('prenom', 70);
        $table->string('pseudo', 70)->unique();
        $table->mediumText('adresse', 70);
         $table->string('CodePostal', 12);   
        $table->string('ville', 70);
        $table->string('telephone', 20);    
        $table->string('email', 70);
         $table->string('password', 100);  
        $table->integer('role')->index();
         $table->string('token', 32);
        $table->string('image_url', 255);
           $table->text('profil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contacts');
    }
}
