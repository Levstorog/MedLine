<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use App\Models\Payment;
use App\Models\Specialization;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        foreach (Status::TITLES as $title) {
            Status::firstOrCreate(['title' => $title]);
        }
    
        // role не входит в $fillable (защита от mass assignment), поэтому forceFill
        User::firstOrNew(['login' => 'administrator'])->forceFill([
            'lastname' => 'Администратор',
            'firstname' => 'MedLine',
            'middlename' => 'MedLine',
            'tel' => '+70000000000',
            'email' => 'admin@medline.local',
            'password' => 'administrator',
            'role' => 'admin',
            'email_verified_at' => now(),
        ])->save();



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
            'title' => 'Отменена'
        ]);
    }
}
