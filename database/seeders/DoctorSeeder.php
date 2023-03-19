<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('doctors')->insert([
            [
                'id' => 1,
                'firstName' => 'Lena',
                'lastName' => 'Mariana',
                'status' => 'away',
                'country' => 'Sri Lanka',
                'distric' => 'Colombo',
                'degree' => 'MBBS',
                'Speciality' => 'Senior at Orthopedic',
                'Chamber' => 'thailand',
                'image' =>
                    'https://engineering.unl.edu/images/staff/Kayla-Person.jpg'
            ],
            [
                'id' => 2,
                'firstName' => 'Lena',
                'lastName' => 'Mariana',
                'status' => 'active',
                'degree' => 'MBBS',
                'country' => 'Sri Lanka',
                'distric' => 'Colombo',
                'Speciality' => 'Senior at Orthopedic',
                'Chamber' =>
                    'Sri Jayewardenepura General Hospital, colombo, sri lanka',
                'image' =>
                    'https://static.generated.photos/vue-static/face-generator/landing/wall/14.jpg'
            ],
            [
                'id' => 3,
                'firstName' => 'Lena',
                'lastName' => 'Mariana',
                'status' => 'online',
                'degree' => 'MBBS',
                'country' => 'Sri Lanka',
                'distric' => 'Colombo',
                'Speciality' => 'Senior at Orthopedic',
                'Chamber' => 'thailand',
                'image' =>
                    'https://www.seekpng.com/png/detail/57-576498_man-face-png-happy-people-face-png.png'
            ],
            [
                'id' => 4,
                'firstName' => 'Lena',
                'lastName' => 'Mariana',
                'status' => 'away',
                'degree' => 'MBBS',
                'country' => 'Sri Lanka',
                'distric' => 'Gampaha',
                'Speciality' => 'Senior at Orthopedic',
                'Chamber' => 'thailand',
                'image' =>
                    'https://t3.ftcdn.net/jpg/01/97/11/64/360_F_197116416_hpfTtXSoJMvMqU99n6hGP4xX0ejYa4M7.jpg'
            ],
            [
                'id' => 5,
                'firstName' => 'Lena',
                'lastName' => 'Mariana',
                'status' => 'busy',
                'degree' => 'MBBS',
                'country' => 'India',
                'distric' => 'Mumbai',
                'Speciality' => 'Senior at Orthopedic',
                'Chamber' => 'thailand',
                'image' =>
                    'https://img.freepik.com/free-photo/portrait-expressive-young-woman_1258-48167.jpg'
            ]
        ]);



    }
}
