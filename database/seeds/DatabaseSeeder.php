<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccountTableSeeder::class);
        $this->call(ActivityTableSeeder::class);
        $this->call(BookingTableSeeder::class);
        $this->call(CardTableSeeder::class);
        $this->call(MemberTableSeeder::class);
        $this->call(TransactionTableSeeder::class);
        $this->call(UserTableSeeder::class);

    }
}
