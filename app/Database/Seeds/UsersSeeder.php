<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class UsersSeeder extends Seeder
{
    public function run()
    {
        // Instantiate Faker
        $faker = Factory::create();

        // Prepare data for the seeding
        $data = [
            'username' => 'pengguna',
            'password' => password_hash('pengguna', PASSWORD_BCRYPT),
            'name' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'whatsapp' => $faker->phoneNumber(),
            'image' => $faker->imageUrl(200, 200, 'people'),
            'blokir' => 'N',
            'level' => 'pengguna',
            'metode_login' => $faker->randomElement(['email', 'google', 'facebook']),
            'ip' => $faker->ipv4(),
            'email_verified_at' => date('Y-m-d H:i:s'),
            'remember_token' => bin2hex(random_bytes(5)),
        ];

        // Insert into the users table
        $this->db->table('users')->insert($data);
    }
}
