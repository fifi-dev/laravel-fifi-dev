<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //nom du produit.
            $table->string('name');
            //bit de texte qui apparait aorès le nom de domaine dans l'URL de la page.
            $table->string('slug')->unique();
            //description courte du produit
            $table->string('short_description')->nullable();
            //description du produit
            $table->text('description');
            //prix normal
            $table->decimal('regular_price');
            //prix en promo
            $table->decimal('sale_price')->nullable();
            //gestion des stocks 
            $table->string('SKU');
            //statut du stock
            $table->enum('stock_status',['instock','outofstock']);
            //..
            $table->boolean('featured')->default(false);
            //Quantité du produit
            $table->unsignedInteger('quantity')->default(10);
            //image du produit
            $table->string('image')->nullable();
            //images du produit
            $table->text('images')->nullable();
            //catégorie du produit
            $table->bigInteger('category_id')->unsigned()->nullable;
            $table->timestamps();
            //lien avec la table categories
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
