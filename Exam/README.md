Kaip paleisti programą.

Atsidarote XAMPP Control Panel Startinat Apache ir MySql
Atsidarę VSCode(Visual studio code) pasirenkate "exam" aplankalą. Jį pasirinkus atidarote.
Spaudžiate ant terminal, tada new terminal, atidare terminala dešinio kampo apačioje spaudžiate pliusiuką netoli bash užrašo.
Atsidarote papildomai 2 terminalus bendrai 3, pirmame parašote komandą:    php artisan migrate:fresh --seed           
Tai komanda kuri atnaujina domenų bazę.
Kitame Bash'e rašote    npm run dev    ši komanda leidžia veikti tailwind (paleidžia vite)
ir paskutiniame 3čiame rašote          php artisan serve     ši komanda įjungia live serverį.
Spaudžiate ctrl ir pelytes kairyjį mygtuką, kad pajungti svetainę


Norint naudotis Admin galimybėmis rašote: admin@admin.lt slaptažodis admin
Paprasto vartotojo prisijungimo duomenys: client0@client.lt slaptažodis password
jaigu norit susžinoti prisiregistravusiu klientu duomenis nueinate i xampp control panel ir spaudžiate prie my sql admin 
kai atsidarys php my admin šone kairėje pasirenkate duomenų bazę pavadinimų duomenub ir user, ten rasite visų vartotojų ir administratorių sarašą




!!!!!!!! JAIGU NEPASILEIDO SVETAINĖ PATIKRINKITE AR NEDINGO FAILAS .ENV JAIGU DINGO VISUOMET YRA KOPIJA IR VISADOS TURĖTI ATSARGINĘ, .ENV COPY NUTRINKITE  COPY IR SVETAINĖ TURĖTŲ VEIKTI.