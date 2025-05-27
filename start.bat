@echo off
echo -------------------------------------
echo Pokretanje Laravel PWA aplikacije...
echo -------------------------------------

REM Kreiranje baze podataka llacko ako ne postoji
echo Kreiram bazu podataka 'llacko' ako vec ne postoji...
"C:\xampp\mysql\bin\mysql.exe" -u root -e "CREATE DATABASE IF NOT EXISTS llacko;"

REM Instaliranje PHP paketa preko Composer-a
composer install

REM Instaliranje JavaScript paketa
npm install

REM Provera i kopiranje .env fajla
IF NOT EXIST .env (
    echo Kopiranje .env.example u .env...
    copy .env.example .env
)

REM Generisanje app key-a
php artisan key:generate

REM Migracije i seed podataka
php artisan migrate --seed

REM Linkovanje storage foldera
php artisan storage:link

REM Pokretanje lokalnog servera
start http://localhost:8000
php artisan serve

pause
