<?php

return [
    'organization' => [
        'name' => 'Det Tyrkiske Trossamfunnet',
        'tagline' => 'Drammen og Omegn',
        'address' => 'Rømers vei 4, 3016 Drammen',
    ],

    'hero' => [
        'eyebrow' => 'Vår Organisasjon',
        'headline' => 'Det Tyrkiske Trossamfunnet i Drammen og Omegn',
        'description' => 'Det Tyrkiske Trossamfunnet i Drammen og Omegn har tjent lokalsamfunnet i mange år. Utforsk vår rike historie og vårt engasjement for samfunnet.',
        'actions' => [
            [
                'label' => 'Kontakt Oss',
                'style' => 'filled',
                'type' => 'route',
                'route' => 'contact',
            ],
            [
                'label' => 'Se Dokument',
                'href' => 'documents/tuzuk.pdf',
                'style' => 'outline',
                'type' => 'asset',
            ],
        ],
    ],

    'mission' => [
        'title' => 'Vår Organisasjon',
        'body' => 'Lær om vår organisasjons historie, misjon og struktur',
        'values' => [
            [
                'label' => 'Sosiale Aktiviteter',
                'description' => 'Våre sosiale aktiviteter er designet for å bringe samfunnet vårt sammen, fremme forbindelser og skape minneverdige opplevelser for mennesker i alle aldre.',
            ],
            [
                'label' => 'Kulturelle Aktiviteter',
                'description' => 'Våre kulturelle aktiviteter feirer de rike tradisjonene til tyrkisk arv samtidig som de fremmer kreativitet og kunstnerisk uttrykk innen vårt samfunn.',
            ],
            [
                'label' => 'Sportsaktiviteter',
                'description' => 'Våre sportsaktiviteter fremmer fysisk form, lagarbeid og sunn konkurranse samtidig som de bringer samfunnet vårt sammen gjennom gleden ved sport.',
            ],
            [
                'label' => 'Religiøse tjenester',
                'description' => 'Utforsk våre omfattende religiøse tjenester som nærer troen og styrker samfunnsbåndene',
            ],
        ],
    ],

    'activities' => [
        [
            'title' => 'Sosiale Aktiviteter',
            'description' => 'Bli med på våre samfunnsarrangementer og bygg varige vennskap',
            'highlights' => [
                'Morsomme dager for hele familien med aktiviteter, spill og delte måltider',
                'Kveldsarrangementer som feirer vår rike kulturelle arv gjennom musikk, dans og historiefortelling',
                'Regelmessige møter for menn å diskutere samfunnssaker og bygge brorskap',
            ],
        ],
        [
            'title' => 'Kulturelle Aktiviteter',
            'description' => 'Utforsk og feir vår rike kulturelle arv',
            'highlights' => [
                'Lær den vakre kunsten islamsk kalligrafi med ekspertveiledning',
                'Oppdag tradisjonelt tyrkisk håndverk og lag vakre håndlagede gjenstander',
                'Nyt fremføringer av tradisjonell tyrkisk og islamsk musikk',
            ],
        ],
        [
            'title' => 'Sportsaktiviteter',
            'description' => 'Hold deg aktiv og sunn med våre sportsprogrammer',
            'highlights' => [
                'Gruppetrening for alle nivåer, fra nybegynnere til viderekomne',
                'Ukentlige fotballkamper og treningsøkter for forskjellige aldersgrupper',
                'Gruppe sykkeleventyr rundt Drammen og omkringliggende områder',
            ],
        ],
    ],

    'services' => [
        ['name' => 'Qurban', 'description' => 'Qurban-tjeneste og organisering for samfunnet'],
        ['name' => 'Pilegrimsreise og Umre', 'description' => 'Pilegrimsreise og Umre organisering og veiledning'],
        ['name' => 'Vannbrønn', 'description' => 'Vannbrønn veldedighetsprosjekt assistanse'],
        ['name' => 'Koran', 'description' => 'Koran-undervisning og memoriseringsprogrammer'],
        ['name' => 'Hadith', 'description' => 'Hadith-undervisning og utdanning'],
        ['name' => 'Religiøs kunnskap', 'description' => 'Religiøs kunnskapsutdanning og informasjon'],
        ['name' => 'Fredagsprekener', 'description' => 'Fredagsprekener og religiøs forkynnelse'],
        ['name' => 'Religionsundervisning', 'description' => 'Religiøse utdanningsprogrammer og undervisning'],
        ['name' => 'Religiøse samtaler', 'description' => 'Religiøse samtaler og diskusjoner'],
        ['name' => 'Religiøse prekener', 'description' => 'Religiøse prekener og konferanser'],
    ],

    'documents' => [
        [
            'title' => 'Vedtekter',
            'description' => 'Vår organisasjons vedtekter og regler',
            'path' => 'documents/tuzuk.pdf',
            'available' => true,
        ],
        [
            'title' => 'Innmeldingsskjema',
            'description' => 'Skjema for å registrere seg som nytt medlem',
            'path' => null,
            'available' => false,
        ],
        [
            'title' => 'Utmeldingsskjema',
            'description' => 'Skjema for å melde seg ut av medlemskap',
            'path' => null,
            'available' => false,
        ],
        [
            'title' => 'Begravelsesfond Skjema',
            'description' => 'Skjema for å søke om begravelsesfond-støtte',
            'path' => null,
            'available' => false,
        ],
    ],

    'management_groups' => [
        [
            'title' => 'Hovedstyret',
            'members' => [
                ['name' => 'Orhan Al', 'role' => 'Leder', 'phone' => '976 99 339', 'email' => 'orhanal1971@gmail.com'],
                ['name' => 'Umut Kesgin', 'role' => 'Nestleder', 'phone' => '907 31 701', 'email' => 'Umutkesgin90@hotmail.com'],
                ['name' => 'Süleyman Kara', 'role' => 'Generalsekretær', 'phone' => '994 75 542', 'email' => 'Suleyman583@hotmail.com'],
                ['name' => 'Yasin Karagül', 'role' => 'Kasserer', 'phone' => '936 96 569', 'email' => 'Yasin-q@hotmail.com'],
                ['name' => 'Aysegül Kömürcü', 'role' => 'Prosjektleder', 'phone' => '400 59 702', 'email' => 'Aysequll-o31o@hotmail.com'],
                ['name' => 'Mustafa Erdem Akteke', 'role' => 'Ungdoms- og Prosjektleder', 'phone' => '472 56 975', 'email' => 'meakteke@gmail.com'],
                ['name' => 'Selin Celayir', 'role' => 'Ungdomsmedlem', 'phone' => '472 11 095', 'email' => 'Selin-cel2002@hotmail.com'],
                ['name' => 'Gizem Nur Koçak', 'role' => 'Ungdomsleder', 'phone' => '974 25 482', 'email' => 'gizemnur@hotmail.com'],
                ['name' => 'Bilgehan Günaydın', 'role' => 'IT-leder', 'phone' => '934 33 666', 'email' => 'Bilgun96@gmail.com'],
            ],
        ],
        [
            'title' => 'Varamedlemmer',
            'members' => [
                ['name' => 'Eyüp Esen', 'role' => 'Bygnings- og Begravelsesfondsansvarlig', 'phone' => '996 27 383', 'email' => 'Eyupesen75@outlook.com'],
                ['name' => 'Abdullah Karaboyun', 'role' => 'Prosjektleder', 'phone' => '965 08 652', 'email' => 'Abdkar01@hotmail.com'],
                ['name' => 'Cengiz Al', 'role' => 'Ungdomsleder', 'phone' => '452 11 389', 'email' => 'Cengiz_villa@hotmail.com'],
            ],
        ],
        [
            'title' => 'Æresrådet',
            'members' => [
                ['name' => 'Ahmet Akteke', 'role' => 'Æresrådsmedlem', 'phone' => '926 96 093', 'email' => 'akteke73@hotmail.com'],
                ['name' => 'Orhan Emeci', 'role' => 'Æresrådsmedlem', 'phone' => '488 86 962', 'email' => 'oemeci@yahoo.no'],
                ['name' => 'Necati Günaydın', 'role' => 'Æresrådsmedlem', 'phone' => '924 91 043', 'email' => 'Mng.62@hotmail.com'],
            ],
        ],
        [
            'title' => 'Valgkomiteen',
            'members' => [
                ['name' => 'Murat Kocal', 'role' => 'Valgkomitémedlem', 'phone' => '996 27 299', 'email' => 'Murat.kocal77@hotmail.com'],
                ['name' => 'Cengiz Mutu', 'role' => 'Valgkomitémedlem', 'phone' => '941 40 750', 'email' => 'Cengiz.mutu@hotmail.no'],
                ['name' => 'Talip Yaman', 'role' => 'Valgkomitémedlem', 'phone' => '932 44 323', 'email' => 'drammen21@hotmail.com'],
            ],
        ],
        [
            'title' => 'Revisjonskomiteen',
            'members' => [
                ['name' => 'Ibrahim Karaboyun', 'role' => 'Revisjonskomitémedlem', 'phone' => '403 49 620', 'email' => 'karaboyun@live.no'],
                ['name' => 'Fatih Al', 'role' => 'Revisjonskomitémedlem', 'phone' => '980 64 291', 'email' => 'Fatih.al@live.no'],
                ['name' => 'Yunus Gezen', 'role' => 'Revisjonskomitémedlem', 'phone' => '982 20 725', 'email' => 'Yunus.gezen@yahoo.no'],
            ],
        ],
    ],

    'contact' => [
        'address' => 'Rømers vei 4, 3016 Drammen',
        'email' => 'post@diyanetdrammen.no',
        'phone' => '466 32 352',
        'vipps' => '109425',
        'facebook' => 'https://www.facebook.com/profile.php?id=100080369227339',
        'instagram' => 'https://instagram.com',
        'youtube' => 'https://youtube.com',
        'twitter' => 'https://twitter.com',
        'map' => 'https://maps.app.goo.gl/B9nA7kk9FBpkbpgd7',
    ],

    'social_links' => [
        'facebook' => [
            'label' => 'Facebook',
            'url' => 'https://www.facebook.com/profile.php?id=100080369227339',
            'icon' => 'fa-brands fa-facebook-f',
        ],
    ],

    'about' => [
        'intro' => 'Lær mer om vår organisasjon og våre religiøse ledere',
        'mission' => [
            'title' => 'Vår Organisasjon',
            'body' => 'Det Tyrkiske Trossamfunnet i Drammen og Omegn har tjent lokalsamfunnet i mange år. Utforsk vår rike historie og vårt engasjement for samfunnet.',
        ],
        'history' => [
            'title' => 'Våre Religiøse Ansatte',
            'body' => 'Våre kvalifiserte religiøse ansatte og lærere er dedikert til å betjene samfunnet med visdom, kunnskap og medfølelse.',
        ],
        'pillars' => [
            [
                'title' => 'Sosiale Aktiviteter',
                'description' => 'Bli med på våre samfunnsarrangementer og bygg varige vennskap',
            ],
            [
                'title' => 'Kulturelle Aktiviteter',
                'description' => 'Utforsk og feir vår rike kulturelle arv',
            ],
            [
                'title' => 'Sportsaktiviteter',
                'description' => 'Hold deg aktiv og sunn med våre sportsprogrammer',
            ],
        ],
    ],
];
