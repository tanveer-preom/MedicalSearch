<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ///////////////
        ///////////

        DB::table('users')->insert(
            [
                'name' => 'udoy',
                'email' =>'udoy.touhid@umail.com',
                'password' => bcrypt('1234')
            ]
            );


        DB::table('users')->insert(
            [
                'name' => 'tanveer',
                'email' =>'rrr@umail.com',
                'password' => bcrypt('221234')
            ]
            );

        //INSERT INTO `company`(`company_id`, `name`, `description`, `created_at`, `updated_at`, `delete_status`) 
        DB::table('company')->insert(
            [
                'user_id' => '1',
              //  'company_id' =>'120',
                'name' => 'udoy brothers',
                'description' => 'best service'
            ]);

        DB::table('company')->insert(
            [
                'user_id' => '1',
              //  'company_id' =>'120',
                'name' => 'Udoy Caffe',
                'description' => 'best taste'
            ]);

        DB::table('company')->insert(
            [
                'user_id' => '2',
               // 'company_id' =>'130',
                'name' => 'tanveer Ltd',
                'description' => 'cheapest cost'
            ]);

          DB::table('company')->insert(
            [
                'user_id' => '2',
               // 'company_id' =>'130',
                'name' => 'tanveer Rice Company',
                'description' => 'just wow'
            ]);

        //INSERT INTO `diagnostic_center`(`diagnostic_center_id`, `name`, `company_id`, `latitude`, `longitude`, `created_at`, `updated_at`,
        


        DB::table('diagnostic_center')->insert(
            [
               
                'name' =>'udoy center',
                'company_id' =>'1',
                'latitude' =>'99',
                'longitude' =>'666',
            ]);

         DB::table('diagnostic_center')->insert(
            [
                
                'name' =>'udoy center33',
                'company_id' =>'1',
                'latitude' =>'99',
                'longitude' =>'666',
            ]);
          DB::table('diagnostic_center')->insert(
            [
                
                'name' =>'udoy center22',
                'company_id' =>'1',
                'latitude' =>'99',
                'longitude' =>'6662',
            ]);

        DB::table('diagnostic_center')->insert(
            [
               
                'name' =>'preom clinic',
                'company_id' =>'2',
                'latitude' =>'929',
                'longitude' =>'1666',
            ]);




        //INSERT INTO `test_category`(`category_id`, `name`, `description
        DB::table('test_category')->insert(
            [
                
                'name' =>'head',
                'category_id' =>'130',
                'description' =>'major and minor injury',
            ]);

        DB::table('test_category')->insert(
            [
                
                'name' =>'leg',
                'category_id' =>'170',
                'description' =>'fracture and etc',
            ]);





        //INSERT INTO `test`(`test_id`, `category_id`, `name`, `description`,

        DB::table('test')->insert(
            [
                'id'=>'1',
                'name' =>'head injury diagnosis',
                'category_id' =>'130',
                'description' =>'head injury and CT scan',
            ]);


        DB::table('test')->insert(
            [
                'id'=>'2',
                'name' =>'leg injury diagnosis',
                'category_id' =>'170',
                'description' =>'Xray, scan  and etc ',
            ]);
        DB::table('test')->insert(
            [
                'id'=>'3',
                'name' =>'Xray',
                'category_id' =>'170',
                'description' =>'best quality with perfection',
            ]);

        DB::table('test')->insert(
            [
                'id'=>'4',
                'name' =>'CT scan',
                'category_id' =>'130',
                'description' =>'best quality and reliable',
            ]);

        DB::table('test')->insert(
            [
                'id'=>'5',
                'name' =>'head surgery',
                'category_id' =>'130',
                'description' =>'best doctor of country does this surgery',
            ]);

        


        




        //
        DB::table('diagnostic_center_and_test')->insert(
            [
                'diagnostic_center_id'=>'1',
                'test_id'=>'1',
                'price' =>'1222',
                'additional_info'=>'best service of head injur and good ct scan',

            ]);


        DB::table('diagnostic_center_and_test')->insert(
            [
                'diagnostic_center_id'=>'2',
                'test_id'=>'1',
                'price' =>'600',
                'additional_info'=>'best doctors and Xray machines',

            ]);

        DB::table('diagnostic_center_and_test')->insert(
            [
                'diagnostic_center_id'=>'3',
                'test_id'=>'1',
                'price' =>'600',
                'additional_info'=>'best doctors and Xray machines',

            ]);

        DB::table('diagnostic_center_and_test')->insert(
            [
                'diagnostic_center_id'=>'4',
                'test_id'=>'1',
                'price' =>'600',
                'additional_info'=>'best doctors and Xray machines',

            ]);

        DB::table('diagnostic_center_and_test')->insert(
            [
                'diagnostic_center_id'=>'1',
                'test_id'=>'2',
                'price' =>'600',
                'additional_info'=>'best doctors and Xray machines',

            ]);

        DB::table('diagnostic_center_and_test')->insert(
            [
                'diagnostic_center_id'=>'2',
                'test_id'=>'2',
                'price' =>'600',
                'additional_info'=>'best doctors and Xray machines',

            ]);



        DB::table('diagnostic_center_and_test')->insert(
            [
                'diagnostic_center_id'=>'3',
                'test_id'=>'2',
                'price' =>'600',
                'additional_info'=>'best doctors and Xray machines',

            ]);


        DB::table('diagnostic_center_and_test')->insert(
            [
                'diagnostic_center_id'=>'4',
                'test_id'=>'2',
                'price' =>'600',
                'additional_info'=>'best doctors and Xray machines',

            ]);

        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
        
    }
}
