<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class LandingPageController extends Controller
{
    /**
     * Display the marketing landing page.
     */
    public function __invoke(): View
    {
        $hero = [
            'eyebrow' => 'Fellesskap og tro i Drammen',
            'headline' => 'Det tyrkiske trossamfunnet i Drammen og omegn',
            'description' => 'Vi har i mange år støttet familier i Drammen og omegn med religiøs veiledning, kulturtilbud og sosialt arbeid som holder fellesskapet samlet.',
            'actions' => [
                [
                    'label' => 'Kontakt oss',
                    'href' => '#contact',
                    'style' => 'filled',
                    'is_anchor' => true,
                ],
                [
                    'label' => 'Les vedtektene',
                    'href' => 'documents/tuzuk.pdf',
                    'style' => 'outline',
                    'is_anchor' => false,
                ],
            ],
        ];

        $mission = [
            'title' => 'Vi tjener med omtanke, kunnskap og kultur',
            'body' => 'Foreningen støtter medlemmene gjennom sjelesorg, språk- og Koran-undervisning, kulturarbeid og aktiviteter som gir sterk tilhørighet.',
            'values' => [
                [
                    'label' => 'Fellesskap',
                    'description' => 'Vi skaper inkluderende møteplasser der hver familie kan føle seg hjemme.',
                ],
                [
                    'label' => 'Tjeneste',
                    'description' => 'Vi organiserer tiltak som løfter mennesker i nød både lokalt og internasjonalt.',
                ],
                [
                    'label' => 'Utdanning',
                    'description' => 'Vi tilbyr Koran-, språk- og ungdomsprogrammer som bygger varig kunnskap.',
                ],
                [
                    'label' => 'Kultur',
                    'description' => 'Vi feirer tyrkisk kulturarv gjennom kunst, mat og felles tradisjoner.',
                ],
            ],
        ];

        $activities = [
            [
                'title' => 'Sosiale aktiviteter',
                'description' => 'Sammenkomster som styrker vennskap og bånd mellom generasjoner.',
                'highlights' => [
                    'Familiedager med leker, felles måltider og god stemning.',
                    'Kvinne- og mannsgrupper som gir rom for samtale og støtte.',
                    'Mentorprogrammer for ungdom som skaper engasjement og inspirasjon.',
                ],
            ],
            [
                'title' => 'Kulturelle aktiviteter',
                'description' => 'Arrangementer og verksteder som viser bredden i tyrkisk kultur.',
                'highlights' => [
                    'Tradisjonelle musikk- og kulturkvelder med poesi, dans og fortellinger.',
                    'Praktiske kurs i islamsk kalligrafi, tyrkisk håndverk og mattradisjoner.',
                    'Språkkurs i tyrkisk, arabisk og norsk for alle generasjoner.',
                ],
            ],
            [
                'title' => 'Idrettsaktiviteter',
                'description' => 'Tilbud innen helse og trivsel for barn, ungdom og voksne.',
                'highlights' => [
                    'Fotball- og futsallag som fremmer lagspill og sunn konkurranse.',
                    'Treningsøkter for ungdom og helgeturer i Drammensområdet.',
                    'Sesongbaserte svømme- og sykkelgrupper som holder oss aktive hele året.',
                ],
            ],
        ];

        $services = [
            [
                'name' => 'Kurban-tjeneste',
                'description' => 'Planlegging og distribusjon av kurban-gaver til familier som trenger støtte.',
            ],
            [
                'name' => 'Veiledning for hajj og umrah',
                'description' => 'Hjelp med forberedelser, reiseplanlegging og åndelig veiledning.',
            ],
            [
                'name' => 'Religiøs opplæring',
                'description' => 'Undervisning for barn, ungdom og voksne i Koran-kunnskap og islamsk lære.',
            ],
            [
                'name' => 'Koranundervisning',
                'description' => 'Memorering og resitasjon med erfarne lærere.',
            ],
            [
                'name' => 'Fredagsbønn og foredrag',
                'description' => 'Ukentlige khutbaer og foredrag som tar opp aktuelle tema.',
            ],
            [
                'name' => 'Samtaleforum',
                'description' => 'Regelmessige samlinger som oppmuntrer til dialog, veiledning og gjensidig støtte.',
            ],
            [
                'name' => 'Brønnsprosjekter',
                'description' => 'Innsamlinger som bidrar til rent vann i samarbeidsprosjekter.',
            ],
        ];

        $documents = [
            [
                'title' => 'Vedtekter',
                'description' => 'Foreningens vedtekter og retningslinjer.',
                'path' => 'documents/tuzuk.pdf',
                'available' => true,
            ],
            [
                'title' => 'Innmeldingsskjema',
                'description' => 'Søk om å bli medlem i foreningen.',
                'path' => null,
                'available' => false,
            ],
            [
                'title' => 'Utmeldingsskjema',
                'description' => 'For medlemmer som ønsker å avslutte sitt medlemskap.',
                'path' => null,
                'available' => false,
            ],
            [
                'title' => 'Skjema for gravferdsfond',
                'description' => 'Søknadsskjema til gravferdsfondet.',
                'path' => null,
                'available' => false,
            ],
        ];

        $managementGroups = [
            [
                'title' => 'Styret',
                'members' => [
                    ['name' => 'Orhan Al', 'role' => 'Leder', 'phone' => '976 99 339', 'email' => 'orhanal1971@gmail.com'],
                    ['name' => 'Umut Kesgin', 'role' => 'Nestleder', 'phone' => '907 31 701', 'email' => 'Umutkesgin90@hotmail.com'],
                    ['name' => 'Süleyman Kara', 'role' => 'Generalsekretær', 'phone' => '994 75 542', 'email' => 'Suleyman583@hotmail.com'],
                    ['name' => 'Yasin Karagül', 'role' => 'Kasserer', 'phone' => '936 96 569', 'email' => 'Yasin-q@hotmail.com'],
                    ['name' => 'Aysegül Kömürcü', 'role' => 'Prosjektleder', 'phone' => '400 59 702', 'email' => 'Aysequll-o31o@hotmail.com'],
                    ['name' => 'Mustafa Erdem Akteke', 'role' => 'Ungdoms- og prosjektleder', 'phone' => '472 56 975', 'email' => 'meakteke@gmail.com'],
                    ['name' => 'Selin Celayir', 'role' => 'Ungdomsrepresentant', 'phone' => '472 11 095', 'email' => 'Selin-cel2002@hotmail.com'],
                    ['name' => 'Gizem Nur Koçak', 'role' => 'Ungdomsleder', 'phone' => '974 25 482', 'email' => 'gizemnur@hotmail.com'],
                    ['name' => 'Bilgehan Günaydın', 'role' => 'IT-ansvarlig', 'phone' => '934 33 666', 'email' => 'Bilgun96@gmail.com'],
                ],
            ],
            [
                'title' => 'Varamedlemmer',
                'members' => [
                    ['name' => 'Eyüp Esen', 'role' => 'Ansvarlig for bygg og gravferdsfond', 'phone' => '996 27 383', 'email' => 'Eyupesen75@outlook.com'],
                    ['name' => 'Abdullah Karaboyun', 'role' => 'Prosjektleder', 'phone' => '965 08 652', 'email' => 'Abdkar01@hotmail.com'],
                    ['name' => 'Cengiz Al', 'role' => 'Ungdomsleder', 'phone' => '452 11 389', 'email' => 'Cengiz_villa@hotmail.com'],
                ],
            ],
            [
                'title' => 'Æresråd',
                'members' => [
                    ['name' => 'Ahmet Akteke', 'role' => 'Medlem av æresrådet', 'phone' => '926 96 093', 'email' => 'akteke73@hotmail.com'],
                    ['name' => 'Orhan Emeci', 'role' => 'Medlem av æresrådet', 'phone' => '488 86 962', 'email' => 'oemeci@yahoo.no'],
                    ['name' => 'Necati Günaydın', 'role' => 'Medlem av æresrådet', 'phone' => '924 91 043', 'email' => 'Mng.62@hotmail.com'],
                ],
            ],
            [
                'title' => 'Valgkomité',
                'members' => [
                    ['name' => 'Murat Kocal', 'role' => 'Valgkomitémedlem', 'phone' => '996 27 299', 'email' => 'Murat.kocal77@hotmail.com'],
                    ['name' => 'Cengiz Mutu', 'role' => 'Valgkomitémedlem', 'phone' => '941 40 750', 'email' => 'Cengiz.mutu@hotmail.no'],
                    ['name' => 'Talip Yaman', 'role' => 'Valgkomitémedlem', 'phone' => '932 44 323', 'email' => 'drammen21@hotmail.com'],
                ],
            ],
            [
                'title' => 'Kontrollutvalg',
                'members' => [
                    ['name' => 'Ibrahim Karaboyun', 'role' => 'Kontrollutvalgsmedlem', 'phone' => '403 49 620', 'email' => 'karaboyun@live.no'],
                    ['name' => 'Fatih Al', 'role' => 'Kontrollutvalgsmedlem', 'phone' => '980 64 291', 'email' => 'Fatih.al@live.no'],
                    ['name' => 'Yunus Gezen', 'role' => 'Kontrollutvalgsmedlem', 'phone' => '982 20 725', 'email' => 'Yunus.gezen@yahoo.no'],
                ],
            ],
        ];

        $contact = [
            'address' => 'Romers vei 4, 3016 Drammen',
            'email' => 'post@diyanetdrammen.no',
            'phone' => '466 32 352',
            'vipps' => '109425',
            'facebook' => 'https://www.facebook.com/profile.php?id=100080369227339',
            'instagram' => 'https://instagram.com',
            'map' => 'https://maps.app.goo.gl/B9nA7kk9FBpkbpgd7',
        ];

        return view('landing', compact(
            'hero',
            'mission',
            'activities',
            'services',
            'documents',
            'managementGroups',
            'contact'
        ));
    }
}
