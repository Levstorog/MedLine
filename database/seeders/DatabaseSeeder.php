<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Payment;
use App\Models\Specialization;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'login' => 'administrator',
            'lastname' => 'admin',
            'firstname' => 'admin',
            'middlename' => 'admin',
            'tel' => '8(123)456-78-90',
            'role' => 'admin',
            'password' => Hash::make('administrator'),
            'email' => 'admin@example.com',
        ]);

        Payment::create([
            'title' => 'Наличными'
        ]);
        Payment::create([
            'title' => 'Банковской картой'
        ]);
        Payment::create([
            'title' => 'Безналичным расчетом/онлайн'
        ]);



        Specialization::create([
            'title' => 'Терапевт'
        ]);
        Specialization::create([
            'title' => 'Стоматолог'
        ]);
        Specialization::create([
            'title' => 'Дерматолог'
        ]);
        Specialization::create([
            'title' => 'Невролог'
        ]);
        
        
        
        Doctor::create([
            'name' => 'Иван Петров'
        ]);
        Doctor::create([
            'name' => 'Петр Иванов'
        ]);
        Doctor::create([
            'name' => 'Василий Козлов'
        ]);
        
        
        
        Status::create([
            'title' => 'Новый'
        ]);
        Status::create([
            'title' => 'Подтверждена'
        ]);
        Status::create([
            'title' => 'Приём состоялся'
        ]);
        Status::create([
            'title' => 'отменена'
        ]);
    }
}
