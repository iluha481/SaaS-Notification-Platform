<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $channels = [
            ['name' => 'email'],
            ['name' => 'sms'],
            ['name' => 'push_notification'],
        ];

        foreach ($channels as $channel) {
            \App\Models\NotificationChannel::firstOrCreate($channel);
        }
    }
}
