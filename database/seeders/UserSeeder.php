<?php
     namespace Database\Seeders;

     use Illuminate\Database\Seeder;
     use Illuminate\Support\Facades\DB;
     use Illuminate\Support\Facades\Hash;

     class UserSeeder extends Seeder
     {
         public function run(): void
         {
             DB::table('users')->insert([
                 [
                     'name' => 'Admin Satu',
                     'email' => 'admin@example.com',
                     'password' => Hash::make('password'),
                     'firebase_uid' => null,
                     'role' => 'admin',
                     'created_at' => now(),
                     'updated_at' => now(),
                 ],
                 [
                     'name' => 'User Satu',
                     'email' => 'user@example.com',
                     'password' => Hash::make('password'),
                     'firebase_uid' => '<firebase_uid_user>',
                     'role' => 'user',
                     'created_at' => now(),
                     'updated_at' => now(),
                 ],
                 [
                     'name' => 'Kurir Satu',
                     'email' => 'kurir@example.com',
                     'password' => Hash::make('password'),
                     'firebase_uid' => '<firebase_uid_kurir>',
                     'role' => 'kurir',
                     'created_at' => now(),
                     'updated_at' => now(),
                 ],
                 [
                     'name' => 'Tenant Satu',
                     'email' => 'tenant@example.com',
                     'password' => Hash::make('password'),
                     'firebase_uid' => null,
                     'role' => 'tenant',
                     'created_at' => now(),
                     'updated_at' => now(),
                 ],
             ]);
         }
     }