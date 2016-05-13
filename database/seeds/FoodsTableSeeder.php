<?php

use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Freshly Baked Breads',
            'name' => 'French Baguette side',
            'cover' => '/images/bakedbreads/french-baguette-side.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Freshly Baked Breads',
            'name' => 'Asiago Cheese Focaccia',
            'cover' => '/images/bakedbreads/asiago-cheese-focaccia.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Freshly Baked Breads',
            'name' => 'Classic white',
            'cover' => '/images/bakedbreads/classic-white.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Freshly Baked Breads',
            'name' => 'Cinnamon Raisin Swirl',
            'cover' => '/images/bakedbreads/cinamon-raisin-swirl.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Pastries and sweets',
            'name' => 'Apple crunch muffin',
            'cover' => '/images/pastriessweets/apple_crunch_muffin.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Pastries and sweets',
            'name' => 'Bear claw',
            'cover' => '/images/pastriessweets/bear_claw.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Pastries and sweets',
            'name' => 'Carrot cake with walnuts',
            'cover' => '/images/pastriessweets/carrot_cake_with_walnuts.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Pastries and sweets',
            'name' => 'Cherry pastry',
            'cover' => '/images/pastriessweets/cherry_pastry.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Pastries and sweets',
            'name' => 'Pecan braid',
            'cover' => '/images/pastriessweets/pecan_braid.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Pastries and sweets',
            'name' => 'Wild blueberry scone',
            'cover' => '/images/pastriessweets/wild_blueberry_scone.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Breakfast',
            'name' => 'Bacon egg cheese on asiago cheese bagel',
            'cover' => '/images/breakfast/bacon-egg-cheese-on-asiago-cheese-bagel.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Breakfast',
            'name' => 'Breakfast power sandwich',
            'cover' => '/images/breakfast/breakfast-power-sandwich.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Breakfast',
            'name' => 'Four cheese',
            'cover' => '/images/breakfast/four-cheese.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Breakfast',
            'name' => 'Honey almond greek yogurt parfait',
            'cover' => '/images/breakfast/honey-almond-greek-yogurt-parfait.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Breakfast',
            'name' => 'Steak and egg on everything bagel',
            'cover' => '/images/breakfast/steak-and-egg-on-everything-bagel.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Breakfast',
            'name' => 'Steel cut oatmeal strawberries pecans',
            'cover' => '/images/breakfast/steel-cut-oatmeal-strawberries-pecans.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Breakfast',
            'name' => 'Strawberry parfait',
            'cover' => '/images/breakfast/strawberry-parfait.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Breakfast',
            'name' => 'Turkey sausage egg white & spinach breakfast power sandwich',
            'cover' => '/images/breakfast/turkey-sausage-egg-white-and-spinach-breakfast-power-sandwich.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Drinks',
            'name' => 'Cappuccino',
            'cover' => '/images/drinks/cappuccino.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Drinks',
            'name' => 'Caramel latte',
            'cover' => '/images/drinks/caramel-latte.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Drinks',
            'name' => 'Frozen mocha',
            'cover' => '/images/drinks/frozen-mocha.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Drinks',
            'name' => 'Hot tea',
            'cover' => '/images/drinks/hot-tea.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Drinks',
            'name' => 'Pepsi',
            'cover' => '/images/drinks/pepsi.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Drinks',
            'name' => 'Signature hot chocolate',
            'cover' => '/images/drinks/signature-hot-chocolate.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Drinks',
            'name' => 'Organic white milk',
            'cover' => '/images/drinks/organic-white-milk.jpeg',
        ]);
        DB::table('foods')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'type' => 'Drinks',
            'name' => 'Low fat mango smoothie',
            'cover' => '/images/drinks/low-fat-mango-smoothie.jpeg',
        ]);
    }
}























