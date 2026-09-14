# PBKK-202

<p align="center">
    <img src="public/favicon-512x512.png" alt="favicon" width="200" height="200">
</p>

> Laravel local routing sandbox — named routes, Blade components, and a small Agentic AI playground.

![Laravel](https://img.shields.io/badge/Laravel-13.x-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.5-777BB4?logo=php&logoColor=white)
![Tailwind](https://img.shields.io/badge/Tailwind-4.x-06B6D4?logo=tailwindcss&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-8.x-646CFF?logo=vite&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-78a9ff)

[Bintang Ilham Pabeta](https://github.com/ilhmpbta) · 5025241152 · PBKK (B)

## What's inside

- **Named routes & prefixes** — `dashboard.*` group, optional params, regex constraint on NRP
- **Blade components** — `navbar`, `footer`, `student-profile` with props
- **Agentic AI sandbox** — `/agent/{tema?}` with fallback handling
- **Student profiles** — dynamic page per NRP with study history and skills
- **IPK calculator** — server-side compute with live animated preview
- **Dark UI** — Tailwind v4, scroll progress bar, reveal-on-scroll micro-animations

## Previews

| GET '/' - Landing page |
| :-: |
|  ![](public/screenshots/web-home.png)|

| GET '/dashboard' - Dashboard hub |
| :-: |
|  ![](public/screenshots/web-dashboard.png)|

| GET '/agent/{tema?}' - Agentic AI sandbox |
| :-: |
|  ![](public/screenshots/web-agent.png)|

| GET '/dashboard/mahasiswa' - Student list |
| :-: |
|  ![](public/screenshots/web-dashboard-mahasiswa.png)|

| GET '/dashboard/mahasiswa/{nrp}' - Student profile |
| :-: |
|  ![](public/screenshots/web-dashboard-mahasiswa-5025241152.png)|

| GET '/dashboard/hitung-ipk/{ip1}/{ip2}' - IPK calculator |
| :-: |
|  ![](public/screenshots/web-dashboard-hitung-ipk.png) |
|  ![](public/screenshots/web-dashboard-hitung-ipk.gif) |

## Routes

| Method | URI | Name | Description |
|---|---|---|---|
| `GET` | `/` | `welcome` | Landing page |
| `GET` | `/agent/{tema?}` | `agent` | Agentic AI sandbox |
| `GET` | `/dashboard` | `dashboard.home` | Dashboard hub |
| `GET` | `/dashboard/mahasiswa` | `dashboard.mahasiswa.index` | Student list |
| `GET` | `/dashboard/mahasiswa/{nrp}` | `dashboard.mahasiswa` | Student profile |
| `GET` | `/dashboard/hitung-ipk/{ip1}/{ip2}` | `dashboard.hitung-ipk` | IPK calculator |

## How To Run

1. Clone the repository: 
    ```bash
    git clone https://github.com/ilhmpbta/pbkk-202
    cd pbkk-202
    ```
2. Install dependencies: 
    ```bash
    composer install
    npm run build
    ```
3. Set up environment variables: 
    ```bash
    cp .env.example .env
    touch database/database.sqlite
    ```
4. Create database file: 
    ```bash
    php artisan migrate
    ```
5. Run the application: 
    ```bash
    php artisan serve
    ```

> Note:  
> For windows, use New-Item instead of touch, copy instead of cp.
