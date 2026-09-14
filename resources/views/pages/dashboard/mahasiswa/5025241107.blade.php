@extends('layouts.app')

@section('title', 'Muhammad Zahran Rizki Primanda — 5025241107')

@section('content')
    @include('components.student-profile', [
        'nrp'      => '5025241107',
        'name'     => 'Muhammad Zahran Rizki Primanda',
        'tagline'  => 'Fullstack learner · PBKK (B)',
        'bio'      => 'Mahasiswa Teknik Informatika ITS yang sedang mendalami arsitektur Laravel dan pola routing yang rapi. Tertarik pada sistem agentic yang dapat merencanakan langkahnya sendiri.',
        'email'    => '5025241107@student.its.ac.id',
        'github'   => 'NewGenome',
        'city'     => 'Jakarta',
        'skills'   => ['Unknown'],
        'semesters' => [
            ['label' => 'Semester 1', 'ip' => 4.0],
            ['label' => 'Semester 2', 'ip' => 4.0],
            ['label' => 'Semester 3', 'ip' => 4.0],
            ['label' => 'Semester 4', 'ip' => 4.0],
        ],
        'project' => [
            'title' => 'Data Lost',
            'pitch' => 'Data Lost',
            'stack' => ['Data Lost'],
        ],
    ])
@endsection
