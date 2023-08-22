# Projektni Centar Tim 3: Human Resources projekat

Ovo je projekat Tima 3 Projektnog Centra ITS-a 2022/2023 školske godine.

Članovi tima su bili (dodajte svoje skolske emailove ako zelite):

- Petar
- Vukašin
- Slađan
- Milica
- Luka (luka44019@its.edu.rs)

## Pokretanje projekta

Projekat zavisi od php-a, laravel-a (artisan), potreban mu je web server i MySQL-kompatibilan server. Mi smo koristili XAMPP stack.

Pre prvog pokretanja projekta je potrebna migracija baze, može da se uradi preko konzole:
```
php artisan migrate
```

Posle toga, projekat bi trebao da radi posle pokretanja artisan serve komande:
```
php artisan serve
```

## Implementirane funkcionalnosti i potencijalna unapređenja

Projekat u trenutnom stanju ima:
- Poglede za landing stranu, login stranu, admin stranu, korisnicku stranu
- Ispravno rutiranje i autentifikaciju (breeze)
- Upload i download CV fajla
- Admin strana ima pretraživu, interaktivnu tabelu svih korisnika
- Modal/dijalog za dodavanje novih korisnika na admin strani
- Migracije za bazu podataka

Potencijalna unapređenja:
- Funkcionalnost navigacije admin panela
- Podešavanje admin naloga
- Export i import podataka iz xls baze
- Slanje mail-a za prihvatanje / odbijanje korisnika (integracija sa mail serverom)
- Lična podešavanja (datum rođenja, adresa)
- Mogućnost korisnika za pregled svojih fajlova