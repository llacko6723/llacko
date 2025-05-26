<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $service = new Service();
        $service->slika = "krecenje.jpg";
        $service->naziv = "Krečenje";
        $service->opis = "Naša ekipa majstora garantuje vrhunsko krečenje koje osvežava vaš prostor i unosi novu energiju u svaki kutak vašeg doma ili poslovnog prostora. Koristimo samo kvalitetne boje koje su dugotrajne, otporne na habanje i ekološki bezbedne. Bez obzira da li želite klasične bele zidove ili smelu paletu boja, naši stručnjaci će se pobrinuti da završna obrada bude besprekorno ravnomerna, bez fleka i tragova četkice ili valjka. Ostavljamo prostor besprekorno čistim nakon završetka posla, jer nam je zadovoljstvo klijenata na prvom mestu!";
        $service->cena = 234;
        $service->istaknuto = 1;
        $service->save();

        $service = new Service();
        $service->slika = "gletovanje.webp";
        $service->naziv = "Gletovanje";
        $service->opis = "Za besprekoran izgled zidova neophodno je kvalitetno gletovanje, a mi smo eksperti u tome! Bilo da se radi o novogradnji ili renoviranju starog zida, naši majstori pažljivo pripremaju površine, nanose glet masu u više slojeva i završavaju šmirglanjem kako bi zidovi bili savršeno glatki i spremni za krečenje. Koristimo najkvalitetnije materijale koji sprečavaju pucanje i omogućavaju dug vek trajanja zidova. Naš cilj je da postignemo besprekornu završnu obradu koja će vašem prostoru dati elegantan i moderan izgled.";
        $service->cena = 468;
        $service->istaknuto = 0;
        $service->save();

        $service = new Service();
        $service->slika = "smirglovanje_zidova.webp";
        $service->naziv = "Šmirglovanje zidova";
        $service->opis = "Bez pravilnog šmirglanja, zidovi nikada ne mogu izgledati profesionalno. Zato posebnu pažnju posvećujemo ovom koraku kako bismo osigurali savršeno ravnu površinu spremnu za krečenje ili lepljenje tapeta. Koristimo najsavremenije alate i tehnike koje omogućavaju precizno i efikasno uklanjanje neravnina, viškova glet mase i starih slojeva boje. Naša stručnost u ovom procesu garantuje besprekoran završni rezultat koji će svaki zid učiniti savršenim na dodir i izgled";
        $service->cena = 100;
        $service->istaknuto = 0;
        $service->save();

        $service = new Service();
        $service->slika = "farbanje_radijatora.webp";
        $service->naziv = "Farbanje Radijatora";
        $service->opis = "Naša molerska firma specijalizovana je za farbanje radijatora, pružajući vrhunski kvalitet i dugotrajnu zaštitu. Koristimo najbolje boje otporne na toplotu, osiguravajući postojanost boje i zaštitu od rđe. Bilo da želite osvežiti stare radijatore ili im dati potpuno novi izgled, garantujemo precizan rad i besprekorne rezultate. Kontaktirajte nas i osvežite svoj prostor!";
        $service->cena = 400;
        $service->istaknuto = 1;
        $service->save();

        $service = new Service();
        $service->slika = "lepljenje_tapeta.webp";
        $service->naziv = "Lepljenje tapeta";
        $service->opis = "Tapete su odličan način da unesete stil i eleganciju u vaš dom, a mi smo tu da osiguramo njihovo savršeno postavljanje. Bez obzira na to da li želite klasične papirne tapete, vinilne modele ili moderne 3D foto-tapete, naši majstori precizno mere, seku i lepe tapete bez vidljivih spojeva i mehurića. Koristimo profesionalne tehnike koje garantuju dugotrajnost i besprekoran izgled. Poverite nam svoj zid, a mi ćemo ga pretvoriti u pravo umetničko delo!";
        $service->cena = 586;
        $service->istaknuto = 0;
        $service->save();
    }
}
