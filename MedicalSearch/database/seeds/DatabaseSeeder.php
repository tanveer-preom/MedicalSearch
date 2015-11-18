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

        //INSERT INTO `company`(`company_id`, `name`, `description`, `created_at`, `updated_at`, `delete_status`) 
        DB::table('company')->insert(
            [
                'company_id' =>'120',
                'name' => 'udoy brothers',
                'description' => 'best service'
            ]);

        DB::table('company')->insert(
            [
                'company_id' =>'130',
                'name' => 'tanveer Ltd',
                'description' => 'cheapest cost'
            ]);


        //INSERT INTO `diagnostic_center`(`diagnostic_center_id`, `name`, `company_id`, `latitude`, `longitude`, `created_at`, `updated_at`,
        
        DB::table('diagnostic_center')->insert(
            [
                'diagnostic_center_id'=>'1',
                'name' =>'udoy center',
                'company_id' =>'120',
                'latitude' =>'99',
                'longitude' =>'666',
            ]);


        DB::table('diagnostic_center')->insert(
            [
                'diagnostic_center_id'=>'2',
                'name' =>'preom clinic',
                'company_id' =>'130',
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
                'test_id'=>'1',
                'name' =>'head injury diagnosis',
                'category_id' =>'130',
                'description' =>'head injury and CT scan',
            ]);


        DB::table('test')->insert(
            [
                'test_id'=>'2',
                'name' =>'leg injury diagnosis',
                'category_id' =>'170',
                'description' =>'Xray, scan  and etc ',
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
                'test_id'=>'2',
                'price' =>'600',
                'additional_info'=>'best doctors and Xray machines',

            ]);

        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
