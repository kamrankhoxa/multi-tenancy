<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Create a tenant
        $tenant1 = Tenant::create([
            'id' => 'demo',  // Adjust field names and values as necessary
            'name' => 'Demo Tenant', // Assuming you have a name field or similar
        ]);

        // Associate domains with the tenant
        $tenant1->domains()->create([
            'domain' => 'demo.localhost', // Adjust field names as necessary
        ]);

        Tenant::query()->get()->each(function (Tenant $tenant) {
           User::factory()->create(
            [
                'name' => 'Demo',
                'email'=> 'demo@localhost.com',
            ]
           );
        });
    }
}
