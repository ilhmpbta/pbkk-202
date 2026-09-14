@extends('layouts.app')

@section('title', 'Bintang Ilham Pabeta — 5025241152')

@section('content')
    @include('components.student-profile', [
        'nrp'      => '5025241152',
        'name'     => 'Bintang Ilham Pabeta',
        'tagline'  => 'Fullstack learner · PBKK (B)',
        'bio'      => 'DevOps and cloud enjoyer.',
        'email'    => 'bintang@example.com',
        'github'   => 'ilhmpbta',
        'city'     => 'Surabaya',
        'skills'   => ['PHP', 'Laravel', 'Tailwind', 'MySQL', 'PostgreSQL', 'REST API', 'Ansible', 'CI/CD', 'Azure', 'C++', 'JavaScript'],
        'semesters' => [
            ['label' => 'Semester 1', 'ip' => 4.0],
            ['label' => 'Semester 2', 'ip' => 4.0],
            ['label' => 'Semester 3', 'ip' => 4.0],
            ['label' => 'Semester 4', 'ip' => 4.0],
        ],
        'project' => [
            'title' => 'SIEM - Agentic Log Analyzer',
            'pitch' => 'Platform agentic yang membantu menelusuri system log, otomatis melakukan analisis log dan mendeteksi anomali secara real-time dan melakukan tindakan pencegahan.',
            'stack' => ['Laravel', 'Python'],
        ],
    ])
@endsection
