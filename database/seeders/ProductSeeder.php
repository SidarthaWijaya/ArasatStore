<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\integer;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['category_id'=>2, 'nama_barang' =>'Ms. Jaunita Powlowski','qty_stock'=>2,'price'=>47861,
            'berat_barang'=>3,'description' =>'Earum dicta vel reprehenderit numquam. Autem adipisci aut enim non dignissimos. Quos reprehenderit sed et eligendi.',
            'image'=>'item(1).jpeg','product_url' =>'ms-jaunita-powlowski'],
            
            ['category_id'=>1, 'nama_barang' =>'Miss Marlen Bosco','qty_stock'=>4,'price'=>47383,
            'berat_barang'=>3,
            'description' =>'Amet dolor iste eum in illum. Qui ad quis ullam magni temporibus. Vitae architecto soluta eligendi totam minus.',
            'image'=>'item(2).jpeg','product_url' =>'miss-marlen-bosco'],

            ['category_id'=>1, 'nama_barang' =>'Camryn Kunze IV','qty_stock'=>4,'price'=>26756,
            'berat_barang'=>4,
            'description' =>'Quaerat sequi nulla eum vitae. Consequatur rem temporibus sunt nihil et in magnam.',
            'image'=>'item(3).jpeg','product_url' =>'camryn-kunze-iv'],

            ['category_id'=>3, 'nama_barang' =>'Milo McGlynn','qty_stock'=>8,'price'=>14805,
            'berat_barang'=>4,
            'description' =>'Quis voluptatem qui et iusto. Voluptatem ut qui et odit aut modi eaque. Laborum temporibus eaque amet qui.',
            'image'=>'item(4).jpeg','product_url' =>'milo-mcglynn'],

            ['category_id'=>3, 'nama_barang' =>'Kailyn Rohan','qty_stock'=>8,'price'=>21357,
            'berat_barang'=>2,
            'description' =>'Et quod tempora consequuntur omnis dicta animi. Qui quibusdam nostrum deserunt perspiciatis quo ad. Nesciunt quibusdam adipisci qui ut praesentium excepturi quis.',
            'image'=>'item(5).jpeg','product_url' =>'kailyn-rohan'],

            ['category_id'=>2, 'nama_barang' =>'Philip Yundt','qty_stock'=>4,'price'=>47441,
            'berat_barang'=>2,
            'description' =>'Qui eius omnis inventore quasi. Autem nihil molestiae magni magni dignissimos. Ea accusantium animi minus aut.',
            'image'=>'item(6).jpeg','product_url' =>'philip-yundt'],

            ['category_id'=>2,
             'nama_barang' =>'Dr. Mercedes McGlynn III',
             'qty_stock'=>2,
             'price'=>44477,
            'berat_barang'=>3,
            'description' =>'Error qui vel omnis ipsam id voluptatem et vel. Ea totam praesentium dolor earum possimus. Aut quas autem nobis adipisci.',
            'image'=>'item(7).jpeg','product_url' =>'dr-mercedes-mcglynn-iii'],

            ['category_id'=>2,
            'nama_barang' =>'Janet Deckow',
            'qty_stock'=>7,
            'price'=>38924,
           'berat_barang'=>2,
           'description' =>'Ex et et dolorem. Voluptas tempore quia fugit unde iste. Praesentium similique quo id fugiat perspiciatis at.',
           'image'=>'item(1).jpeg','product_url' =>'janet-deckow'],

           ['category_id'=>3,
            'nama_barang' =>'Alexzander Jakubowski',
            'qty_stock'=>1,
            'price'=>44135,
           'berat_barang'=>1,
           'description' =>'Esse quibusdam voluptas voluptas eligendi. Accusamus et ad repellendus at.',
           'image'=>'item(2).jpeg','product_url' =>'alexzander-jakubowski'],

           ['category_id'=>3,
            'nama_barang' =>'Dr. Carey Weimann II',
            'qty_stock'=>9,
            'price'=>9911,
            'berat_barang'=>1,
            'description' =>'Aut in debitis voluptatem illo earum libero. Nisi commodi minus dolorum optio esse.',
            'image'=>'item(3).jpeg', 'product_url' =>'dr-carey-weimann-ii'],

          ['category_id'=>1,
          'nama_barang' =>'Prof. Osbaldo Rosenbaum V',
          'qty_stock'=>4,
          'price'=>37855, 
          'berat_barang'=>2,
          'description' =>'Cumque et quas reprehenderit consectetur ut impedit qui. Ipsa ut distinctio porro laboriosam quo vel sunt. Asperiores aperiam et ipsa error sed.',
          'image'=>'item(4).jpeg','product_url' =>'prof-osbaldo-rosenbaum-v'],

          ['category_id'=>3,
          'nama_barang' =>'Cordie Braun',
          'qty_stock'=>8,
          'price'=>45197,
          'berat_barang'=>3,
          'description' =>'Consequatur non atque laboriosam eos iste sit. Consequatur adipisci consequatur iure autem qui voluptas ex.',
          'image'=>'item(5).jpeg','product_url' =>'cordie-braun'],

          ['category_id'=>3,
          'nama_barang' =>'Tre Marquardt',
          'qty_stock'=>3,
          'price'=>5874,
          'berat_barang'=>3,
          'description' =>'Sint eum laboriosam ea autem perspiciatis quibusdam quasi consequatur. Earum rerum saepe deserunt et vel.',
          'image'=>'item(6).jpeg','product_url' =>'tre-marquardt'],

          ['category_id'=>3,
          'nama_barang' =>'Prof. Ivah Hessel',
          'qty_stock'=>9,
          'price'=>16959,
          'berat_barang'=>2,
          'description' =>'Quia voluptas sed voluptates labore neque distinctio laborum. Quis enim voluptatum qui sit sunt ducimus in. Ipsam ipsam vero autem enim qui sed alias.',
          'image'=>'item(7).jpeg','product_url' =>'prof-ivah-hessel'],

          ['category_id'=>3,
          'nama_barang' =>'Shannon Huel',
          'qty_stock'=>2,
          'price'=>25440,
          'berat_barang'=>1,
          'description' =>'Qui eveniet iste incidunt laborum impedit ut. Quisquam quaerat ullam odio. Nobis maxime esse occaecati.',
          'image'=>'item(1).jpeg','product_url' =>'shannon-huel'],

          ['category_id'=>2,
          'nama_barang' =>'Prof. Yoshiko Rice DVM',
          'qty_stock'=>9,
          'price'=>46275,
          'berat_barang'=>3,
          'description' =>'Fugit quidem totam quam quia nihil. Qui quia voluptatem dolores maxime nisi non tempora. Earum quos quis consequatur.',
          'image'=>'item(2).jpeg','product_url' =>'prof-yoshiko-rice-dvm'],

          ['category_id'=>1, 
          'nama_barang' =>'Nathanial Steuber',
          'qty_stock'=>5,
          'price'=>28990,
            'berat_barang'=>1,
            'description' =>'Error consequatur error rerum officia. Reprehenderit voluptates beatae explicabo vitae.',
            'image'=>'item(3).jpeg','product_url' =>'nathanial-steuber'],
            ['category_id'=>1, 'nama_barang' =>'Hailey Powlowski','qty_stock'=>10,'price'=>38875,
            'berat_barang'=>2,
            'description' =>'Ut sit reiciendis harum impedit est maiores sequi. Debitis nostrum voluptas enim omnis qui incidunt. Et doloribus illum tenetur sed corrupti sint quia et.',
            'image'=>'item(4).jpeg','product_url' =>'hailey-powlowski'],

            ['category_id'=>1, 
            'nama_barang' =>'Dr. Savion Welch',
            'qty_stock'=>6,
            'price'=>39881,
              'berat_barang'=>1,
              'description' =>'Est nihil voluptatem voluptatum. Adipisci eos corporis aspernatur non aut vitae. Aut quam dolorum dolores et.',
              'image'=>'item(5).jpeg','product_url' =>'dr-savion-welch'],

              ['category_id'=>1, 
              'nama_barang' =>'Ms. Sophie Kerluke',
              'qty_stock'=>6,
              'price'=>28990,
                'berat_barang'=>2,
                'description' =>'Odit fuga ratione est dolorem voluptatem. Nesciunt ea aut nisi at eius fugit ea.',
                'image'=>'item(6).jpeg','product_url' =>'ms-sophie-kerluke'],    
        ]);
    }
}
