<?php

use App\Invoices;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 */
class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $this->call(UserTableSeeder::class);

        $faker = Faker\Factory::create();
        $this->seedInvoices($faker);
    }

    /**
     * @param $faker
     */
    private function seedInvoices($faker) {
        foreach (range(0,100) as $number) {
            $invoice = new Invoices();

            $invoice->name = $faker->sentence;
            $invoice->totalAmmount = $faker->randomNumber;
            $invoice->save();
        }
    }
}
