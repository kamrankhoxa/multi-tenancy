<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tenant;

class TenantSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
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
    }
}
