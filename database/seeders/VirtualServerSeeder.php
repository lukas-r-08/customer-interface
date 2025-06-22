<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VirtualServer;

class VirtualServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VirtualServer::create([
            'name' => 'Test Server',
            'id' => 1,
            'status' => 'stopped'
        ]);
    }
}
