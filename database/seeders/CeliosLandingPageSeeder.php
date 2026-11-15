<?php

namespace Database\Seeders;

use Celios\Core\Enums\PageType;
use Celios\Core\Models\Page;
use Illuminate\Database\Seeder;

class CeliosLandingPageSeeder extends Seeder
{
    public function run(): void
    {
        $homePage = Page::findByType(PageType::HOME);

        if (! $homePage) {
            $homePage = Page::where('slug->sr', 'home')
                ->orWhere('slug->en', 'home')
                ->first();
        }

        $blocksContent = [
            // 1. HERO SHOWCASE
            [
                'type' => 'hero_showcase',
                'data' => [
                    'badge_text' => [
                        'sr' => 'Celios CMS • Laravel 11 + Filament v3',
                        'en' => 'Celios CMS • Laravel 11 + Filament v3',
                        'it' => 'Celios CMS • Laravel 11 + Filament v3',
                    ],
                    'badge_version' => [
                        'sr' => 'v3.4.2 Production Ready',
                        'en' => 'v3.4.2 Production Ready',
                        'it' => 'v3.4.2 Production Ready',
                    ],
                    'badge_build' => [
                        'sr' => 'build#8914-release',
                        'en' => 'build#8914-release',
                        'it' => 'build#8914-release',
                    ],
                    'heading' => [
                        'sr' => 'Modularni CMS kreiran za developere i dizajnere koji cene',
                        'en' => 'A modular CMS engineered for developers and designers who value',
                        'it' => 'Un CMS modulare creato per sviluppatori e designer che apprezzano',
                    ],
                    'highlighted_text' => [
                        'sr' => 'brzinu, estetiku i kontrolu.',
                        'en' => 'speed, aesthetics, and control.',
                        'it' => 'velocità, estetica e controllo.',
                    ],
                    'subtitle' => [
                        'sr' => 'Potpuna sloboda u kreiranju modernih portfolio sajtova, digitalnih arhiva i višejezičnih publikacija bez sporih pluginova. Izgrađen na temeljima Laravel i Filament v3 ekosistema.',
                        'en' => 'Complete freedom to build modern portfolios, digital archives, and multilingual publications without bloated plugins. Built upon the Laravel 11 and Filament v3 ecosystem.',
                        'it' => 'Completa libertà nella creazione di siti portfolio moderni, archivi digitali e pubblicazioni multilingue senza plugin lenti. Costruito sulle fondamenta di Laravel e Filament v3.',
                    ],
                    'button_primary_text' => [
                        'sr' => 'Pokreni Test Mode (Admin Demo)',
                        'en' => 'Launch Test Mode (Admin Demo)',
                        'it' => 'Avvia Modalità Test (Admin Demo)',
                    ],
                    'button_primary_url' => '#test-mode-banner',
                    'button_secondary_text' => [
                        'sr' => 'Pregledaj Mogućnosti',
                        'en' => 'Explore Features',
                        'it' => 'Esplora Funzionalità',
                    ],
                    'button_secondary_url' => '#mogucnosti',
                    'button_tertiary_text' => [
                        'sr' => 'Pogledaj Portfolio',
                        'en' => 'View Portfolio',
                        'it' => 'Visualizza Portfolio',
                    ],
                    'button_tertiary_url' => '#portfolio',
                    'metrics' => [
                        ['label' => 'Benchmark TTFB', 'value' => '32ms', 'badge' => '99.8th perc', 'note' => 'Laravel Octane + Redis keš'],
                        ['label' => 'Lokalizacija', 'value' => '100% Native', 'badge' => 'SR / EN', 'note' => 'Nulta latencija u ruting-u'],
                        ['label' => 'Filament v3', 'value' => '35+ Blokova', 'badge' => 'Reaktivno', 'note' => 'Livewire 3 + Alpine.js'],
                        ['label' => 'Core Web Vitals', 'value' => '100 / 100', 'badge' => 'Green', 'note' => 'SEO & Pristupačnost spremni'],
                    ],
                ],
            ],

            // 2. FEATURES CARDS
            [
                'type' => 'features_cards',
                'data' => [
                    'section_tag' => [
                        'sr' => 'Arhitektura & Mogućnosti',
                        'en' => 'Architecture & Features',
                        'it' => 'Architettura & Funzionalità',
                    ],
                    'section_title' => [
                        'sr' => 'Zašto programeri i dizajneri biraju Celios',
                        'en' => 'Why developers and designers choose Celios',
                        'it' => 'Perché sviluppatori e designer scelgono Celios',
                    ],
                    'section_desc' => [
                        'sr' => 'Bez komplikovanih eksternih servisa ili glomaznih dodataka. Sve je napisano u modernom Laravelu prateći najviše inženjerske i vizuelne standarde.',
                        'en' => 'No complex external lock-in or bloated plugins. Everything is crafted in clean Laravel 11 following the highest engineering standards.',
                        'it' => 'Nessun servizio esterno complicato o plugin ingombranti. Tutto è scritto in moderno Laravel seguendo i più alti standard ingegneristici.',
                    ],
                    'cards' => [
                        [
                            'icon' => 'translate',
                            'title' => [
                                'sr' => 'Multi-Language iz kutije',
                                'en' => 'Multi-Language Out of the Box',
                                'it' => 'Multilingua Pronto all\'Uso',
                            ],
                            'description' => [
                                'sr' => 'Sinhronizovano upravljanje SR/EN tekstovima bez sporih eksternih pluginova. Podrška za fallback prevode, nezavisne slug-ove po jeziku i automatske hreflang tagove za pretraživače.',
                                'en' => 'Synchronized multilingual SR/EN text management without heavy plugins. Built-in translation fallbacks, localized slugs, and automated hreflang meta tags.',
                                'it' => 'Gestione sincronizzata dei testi multilingue senza plugin pesanti. Supporto per traduzioni di fallback e tag hreflang automatici.',
                            ],
                            'checklist' => [
                                'sr' => "Latinica i ćirilica podržani\nNema SQL dupliranja strukture",
                                'en' => "Latin and Cyrillic supported\nNo SQL duplication required",
                                'it' => "Supporto latino e cirillico\nNessuna duplicazione SQL",
                            ],
                        ],
                        [
                            'icon' => 'speed',
                            'title' => [
                                'sr' => 'Filament v3 Reaktivnost',
                                'en' => 'Filament v3 Reactivity',
                                'it' => 'Reattività Filament v3',
                            ],
                            'description' => [
                                'sr' => 'Korišćenje najnaprednijeg admin ekosistema za PHP. Modularni resursi, brze tabele sa serverskim sortiranjem i filtriranjem, prilagođeni grafikoni i uloge u samo par linija koda.',
                                'en' => 'Powered by PHP\'s premier admin framework. Modular resources, fast server-sorted tables, live form validation, and role-based access control.',
                                'it' => 'Utilizzo dell\'ecosistema amministrativo più avanzato per PHP. Risorse modulari, tabelle veloci e ruoli granulari.',
                            ],
                            'checklist' => [
                                'sr' => "Livewire 3 reaktivnost\nAutomatski CSRF i Shield RBAC",
                                'en' => "Livewire 3 reactivity\nAutomated CSRF & Shield RBAC",
                                'it' => "Reattività Livewire 3\nCSRF automatico e Shield RBAC",
                            ],
                        ],
                        [
                            'icon' => 'widgets',
                            'title' => [
                                'sr' => 'Fleksibilni Layout Builder',
                                'en' => 'Flexible Layout Builder',
                                'it' => 'Costruttore di Layout Flessibile',
                            ],
                            'description' => [
                                'sr' => 'Slaganje sekcija bez nereda u kodu i bez ograničenja. Svaki blok je izolovani Blade template koji dizajneri mogu stilizovati Tailwind klasama direktno u repozitorijumu.',
                                'en' => 'Compose rich page flows without cluttered code. Every block is an isolated Blade template designers can customize directly in the codebase.',
                                'it' => 'Composizione di sezioni senza disordine nel codice. Ogni blocco è un modello Blade isolato facilmente personalizzabile.',
                            ],
                            'checklist' => [
                                'sr' => "Drag-and-drop sortiranje\nVerzionisanje i istorijat izmena",
                                'en' => "Drag-and-drop ordering\nRevisions and history tracking",
                                'it' => "Ordinamento drag-and-drop\nCronologia delle revisioni",
                            ],
                        ],
                    ],
                ],
            ],

            // 3. INTERACTIVE SHOWCASE
            [
                'type' => 'interactive_showcase',
                'data' => [
                    'section_tag' => [
                        'sr' => 'Fleksibilni Graditelj Stranica',
                        'en' => 'Flexible Page Builder',
                        'it' => 'Costruttore di Pagine Modulare',
                    ],
                    'section_title' => [
                        'sr' => 'Modularni Blokovi u Akciji',
                        'en' => 'Modular Blocks in Action',
                        'it' => 'Blocchi Modulari in Azione',
                    ],
                    'section_desc' => [
                        'sr' => 'Odaberite stil prikaza i testirajte ponašanje sekcija na radnoj površini sa dinamičkom dvojezičnom proverom.',
                        'en' => 'Switch between layout styles and test section reactivity on the interactive preview canvas with live multilingual switching.',
                        'it' => 'Scegli lo stile di visualizzazione e testa il comportamento delle sezioni con l\'anteprima interattiva.',
                    ],
                    'split_tag' => [
                        'sr' => 'Blok: Arhitektura & Prostorni Prikaz',
                        'en' => 'Block: Architecture & Spatial Showcase',
                        'it' => 'Blocco: Architettura & Spazio',
                    ],
                    'split_title' => [
                        'sr' => 'Precizna estetika za moderne kreativne studije.',
                        'en' => 'Precise aesthetics tailored for modern creative studios.',
                        'it' => 'Estetica precisa per studi creativi contemporanei.',
                    ],
                    'split_desc' => [
                        'sr' => 'Svi blokovi poseduju direktne opcije konfiguracije kroz Filament panel: izmene margina, tipografskih razmera, relacija sa slikama iz biblioteke i SEO meta oznakama na nivou fragmenta.',
                        'en' => 'All content blocks provide immediate configuration options in Filament: margin tweaks, responsive typographic scaling, direct asset library relations, and fragment-level SEO tags.',
                        'it' => 'Tutti i blocchi offrono opzioni di configurazione diretta tramite il pannello Filament: regolazione margini, tipografia e relazioni multimediali.',
                    ],
                    'split_btn_text' => [
                        'sr' => 'Pogledaj Arhivu Radova',
                        'en' => 'View Portfolio Archive',
                        'it' => 'Visualizza Archivio Lavori',
                    ],
                    'split_project_title' => [
                        'sr' => 'Atelje Beograd • Monolit 24',
                        'en' => 'Belgrade Atelier • Monolith 24',
                        'it' => 'Atelier Belgrado • Monolite 24',
                    ],
                    'split_image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDkf9ewQzU8QrKp-qRL56pWjwkvGuD7ubhnCzQG2lQ3cXK8OeVT2DiWye2s7qUBbEpzkdwuSKViMomNK6UMezxrtp0V39vILCEAlop2DbKYEqJhjp5zH41YDtd6mFFXMGXsdp7MhUTccnlIq819Veu-nQUBPgVw1lWsbzSPjVOsKqVbJF6iXKQhmc4fGdGIhNsaWVSfUgRTRzaL2HS4cv1TOla65PFv9nAEPAdAkskWyrbgn4Lmux9V',
                    'bento_1_title' => [
                        'sr' => 'Interaktivni Digitalni Arhiv',
                        'en' => 'Interactive Digital Archive',
                        'it' => 'Archivio Digitale Interattivo',
                    ],
                    'bento_1_desc' => [
                        'sr' => 'Strukturirana baza eksponata sa više od 4,000 unosa, asinhronim pretraživanjem i automatskim generisanjem OpenGraph slika.',
                        'en' => 'Structured exhibit repository boasting over 4,000 entries, asynchronous query filtering, and automated OpenGraph image generation.',
                        'it' => 'Repository strutturato con oltre 4.000 voci, filtraggio asincrono e generazione automatica di immagini OpenGraph.',
                    ],
                    'bento_1_image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBgPZGNZyyWgfr6P7GSDV7tl2GrapFX1nw2u_tHypcpspgbcZ7cXXyhWfwFkPOzgDJ10E_ECXgCihBN5WucWOorYScmJjV_ORJHQrGhm9g4cVHk1w14lK1OgZqYl6M_kCTa7yMuxAIHT_AMuGLYN1V-95dGLW52HftxK3siFl1V7uvSnFJEn4Q9fZOuRXA06WWKyQ7dI3NsP8kgNKV8Zv5cxsQjVnS3L4Da-uwr97ZCnOu3h3pFn0xh',
                    'case_1_title' => [
                        'sr' => 'Nordic Furniture Lab — Digitalni Salon 2024',
                        'en' => 'Nordic Furniture Lab — Digital Salon 2024',
                        'it' => 'Nordic Furniture Lab — Salone Digitale 2024',
                    ],
                    'case_1_desc' => [
                        'sr' => 'Kako smo postigli 300% brži odziv kataloga sa preko 1,200 3D modela koristeći Celios blokove.',
                        'en' => 'How we achieved 300% faster catalogue response times across 1,200+ 3D models using Celios modular blocks.',
                        'it' => 'Come abbiamo ottenuto un catalogo 300% più veloce con oltre 1.200 modelli 3D.',
                    ],
                    'case_1_image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDlIynnFgBMnTnaqqupl5wwvbzkGlFY-9ZPFJw3V-F0tVuEu3dgff_ECLLyurfGYcG0FRqQGv7i2zQD5LB3Wbn7OY6ceDL_PyhHGAmRWcQiR1exm15bvFPVhtm53ldv5cuExy3IhO7eMW81ixd3VkFlk9CukXirLsNLDk281T2foV93db1sySxIIVBJXwLzEuzhAeShK3rp9ILkiorP91QMkV_A0Vx8vDkUDMqD56-MqGuHQXIzxMJJ',
                    'case_2_title' => [
                        'sr' => 'Kvantum Branding Hub — Multi-tenant sajt',
                        'en' => 'Kvantum Branding Hub — Multi-tenant Platform',
                        'it' => 'Kvantum Branding Hub — Piattaforma Multi-tenant',
                    ],
                    'case_2_desc' => [
                        'sr' => 'Jedinstvena CMS instanca koja u realnom vremenu opslužuje 6 nezavisnih portfolio domena.',
                        'en' => 'A unified CMS instance powering 6 independent portfolio brand domains in real time.',
                        'it' => 'Un\'unica istanza CMS che gestisce 6 domini portfolio indipendenti in tempo reale.',
                    ],
                    'case_2_image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAPgH8jA1mFcORzMpMwVjE_Hrc4c2bY62pDD2tjTxmRJPajDsbiRtUJX_kuw0bPWe72862DGNwQxE-0WXeTpEUserPwCLTYob1DRbKt1Vz6RcuRd-gjzyCL4UtA8xgiIgUr0P5Rzre6n_YAKbn7su0ayJj1Lf7ChkvPgKSbaOnRRGa7B-MhuwEcw4bYv5oXaNHCuI0rvbEtCDgs3gWAzPEBf7oI9PVDbO42v8O1gvm6a1YhwBlqHv83',
                ],
            ],

            // 4. PORTFOLIO SHOWCASE
            [
                'type' => 'portfolio_showcase',
                'data' => [
                    'section_tag' => [
                        'sr' => 'Realizovani Projekti',
                        'en' => 'Selected Work',
                        'it' => 'Progetti Realizzati',
                    ],
                    'section_title' => [
                        'sr' => 'Izrađeno u Celios CMS-u',
                        'en' => 'Built with Celios CMS',
                        'it' => 'Creato con Celios CMS',
                    ],
                    'section_desc' => [
                        'sr' => 'Odabrani digitalni prostori, portfoliji i publikacije lansirani na našoj platformi.',
                        'en' => 'Selected digital spaces, portfolios, and web platforms launched using our CMS platform.',
                        'it' => 'Spazi digitali, portfolio e pubblicazioni lanciati sulla nostra piattaforma.',
                    ],
                    'count_label' => [
                        'sr' => 'Prikazano: 4 od 28 projekata',
                        'en' => 'Showing 4 of 28 projects',
                        'it' => 'Mostrati: 4 di 28 progetti',
                    ],
                    'projects' => [
                        [
                            'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCKpBc5Pvv1WS3DmXJljzhXspNg4afU4UIzaQAWGNSH62ErCfJNghI2WNVAE4g93YO0d1ZbSNRu0b-Uy81LbBj6EOGVbrIaBD6AXAyqCnkDFbB2fZwAYhOTeikhsnpvvzGEouSDa8Nn34wdOYdxak32Xl-IjLOF0Sh9VGn_GQZfrE-rhFcWrM--n6yKAd3UGfjW9I8alYLTh08xUT8Mj-0kXUCsHNH0cvtdbnlfOCNtptUuIMW3nx0S',
                            'client_year' => 'Studio Forma • 2024',
                            'category' => 'Arhitektura',
                            'languages_badge' => 'SR / EN',
                            'project_url' => 'studio-forma',
                            'title' => [
                                'sr' => 'Studio Forma: Monografija i Portfolio Radova',
                                'en' => 'Studio Forma: Monograph & Architectural Portfolio',
                                'it' => 'Studio Forma: Monografia e Portfolio Architettonico',
                            ],
                            'description' => [
                                'sr' => 'Interaktivni katalog sa fluidnim prelazima strana, prilagođenim layout blokovima za vertikalne fotografije i dinamičkim filtriranjem po tipologiji objekta.',
                                'en' => 'Interactive monograph featuring fluid page transitions, custom vertical photography layout blocks, and dynamic typology filtering.',
                                'it' => 'Catalogo interattivo con transizioni fluide, blocchi personalizzati per foto verticali e filtri dinamici.',
                            ],
                            'tags' => 'Laravel 11, Filament v3, Alpine.js',
                            'case_study_note' => [
                                'sr' => 'Studio Forma — 100/100 Core Web Vitals i 0.2s prelaz stranica.',
                                'en' => 'Studio Forma — 100/100 Core Web Vitals and 0.2s page transitions.',
                                'it' => 'Studio Forma — 100/100 Core Web Vitals.',
                            ],
                        ],
                        [
                            'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC6QUDF-ZKPm8AWKSvTj1n0cMX3wlr9B3XIDIjXySacPKow_eQcv_3N8YFKAQXFbpW6Q1CecBu9y1REHeXeVzGgqj9U5jUzbCJITIhVD8iF7P717cSqAwi6YU3Qt6IQUVTeyhCAAcDTqUC3hXagGnyPQ1Xa2mONntzEUvaIlcYCripqsDqr0H25ffiA4IlbqxGBX-1Ji-BHNOLBYKU5yXyjemuwbFmgOOosydvqwMjR5krdiPF5VVso',
                            'client_year' => 'Grafički Salon • 2024',
                            'category' => 'Kultura',
                            'languages_badge' => 'SRB',
                            'project_url' => 'tipografski-glasnik',
                            'title' => [
                                'sr' => 'Tipografski Glasnik: Arhiv Jugoslovenskog Plakata',
                                'en' => 'Typographic Gazette: Yugoslav Poster Archive',
                                'it' => 'Gazzetta Tipografica: Archivio Manifesti',
                            ],
                            'description' => [
                                'sr' => 'Digitalizacija istorijske građe sa detaljnim metapodacima o fontovima, autorima i tehnikama štampe, potpuno pretraživo uz Celios Full-Text Search.',
                                'en' => 'Digitization of historical graphics archive with typeface metadata, author index, and instant full-text filtering.',
                                'it' => 'Digitalizzazione di archivi storici con metadati tipografici e ricerca rapida a testo pieno.',
                            ],
                            'tags' => 'Tailwind CSS, Livewire 3, PostgreSQL',
                            'case_study_note' => [
                                'sr' => 'Tipografski Glasnik — Preko 3,800 skeniranih artefakata sa brzim pretragama.',
                                'en' => 'Typographic Gazette — Over 3,800 digitized posters with fast search.',
                                'it' => 'Tipografski Glasnik — Oltre 3.800 poster digitalizzati.',
                            ],
                        ],
                        [
                            'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDM7cwuNMt1cLKfctMWOjAGN7CSVZ7DGKjft3UyEDATErB-ERhFG4Kdw96FYfjeENAVTopeDKJgoipK22q4IPPW2qfiac5cY3x37W1BIWHwHy9KjnzZVYLj3ppjwTyu4AHGvLCWOrQsmWHWAwX6bsrJzFYf8ZA7yBoTWDN5Ps5OSPmq-rxP4NYPKmDYnAACHsNIcv6ft3fx7CJVZkFRSmN80PIRjo3cN0gsBiyv14bKdH5g0Qgn2AC_',
                            'client_year' => 'FinFlow Global • 2023/24',
                            'category' => 'Fintech',
                            'languages_badge' => 'EN / DE',
                            'project_url' => 'finflow-portal',
                            'title' => [
                                'sr' => 'FinFlow: Korporativni Portal & Dokumentacija',
                                'en' => 'FinFlow: Corporate Portal & Documentation',
                                'it' => 'FinFlow: Portale Aziendale e Documentazione',
                            ],
                            'description' => [
                                'sr' => 'Sinhronizovani headless blog sa dokumentacionim podsistemom, podrškom za više autora sa granularnim nivoima pristupa kroz Filament uloge.',
                                'en' => 'Synchronized publication hub and documentation system with multi-author workflows controlled through Filament Shield.',
                                'it' => 'Hub di pubblicazione e documentazione con flussi di lavoro multi-autore controllati da ruoli Filament.',
                            ],
                            'tags' => 'Laravel API, Meilisearch, Filament Shield',
                            'case_study_note' => [
                                'sr' => 'FinFlow — Multi-author headless publishing workflow.',
                                'en' => 'FinFlow — Multi-author headless publishing workflow.',
                                'it' => 'FinFlow — Flusso editoriale multi-autore headless.',
                            ],
                        ],
                        [
                            'image_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBS1LDKr-W-BIf5nmmb-tzNC97wRXZPof9uDw47iPHvzPnjqmEqa9OldaMlxkpFI_G6RPsc_D_7UPaRhwiqaWlwfRUeSb3YRQ611Gwss3PcxT22yO2ZbU09M3ZpE_Y3nqnhTDxH3_2m_Iw6snJKGuoxTl6tbiUk8pPgIB88ady7eiPJmtc7IRxyENQ0bx3HsGjI524HjaYT2GiINk_ya6whYj-VjFeQEqOFMPAs6pRgn1Jt64pTLrVQ',
                            'client_year' => 'Glinica Studio • 2024',
                            'category' => 'E-Commerce',
                            'languages_badge' => 'SR / EN',
                            'project_url' => 'glinica-studio',
                            'title' => [
                                'sr' => 'Glinica: Zanatska Radionica i Online Katalog',
                                'en' => 'Glinica: Artisan Ceramic Studio & Online Catalog',
                                'it' => 'Glinica: Laboratorio Artigianale e Catalogo Online',
                            ],
                            'description' => [
                                'sr' => 'Hibridni portfolio koji kombinuje priču o zanatu sa real-time stanjem lagera, integrisanim plaćanjem i modularnim karticama za prijavu na radionice.',
                                'en' => 'A hybrid showcase balancing craft storytelling with live stock availability, integrated checkout, and workshop enrollment cards.',
                                'it' => 'Showcase ibrido che unisce narrazione artigianale, magazzino in tempo reale e prenotazione workshop.',
                            ],
                            'tags' => 'Laravel Cashier, Spatie Media, Filament v3',
                            'case_study_note' => [
                                'sr' => 'Glinica — Kombinacija zanatskog brendinga i e-commerce checkout-a.',
                                'en' => 'Glinica — Artisan storytelling coupled with swift checkout.',
                                'it' => 'Glinica — Narrazione artigianale e checkout rapido.',
                            ],
                        ],
                    ],
                ],
            ],

            // 5. AUTHOR BIO
            [
                'type' => 'author_bio',
                'data' => [
                    'photo_url' => 'https://lh3.googleusercontent.com/aida/AEtjO1UU1cY31xFr14rSP0jI718ew9dhGfi6yJolDgQ_8AIxsjp2a3xkkN6yOKqbhVCLm0dflK0rbwxIw3y1Z866K6Nnu8E0eUQUC7wTrParVz4K6uNsjTNloRRLDvMJaFbG9Wtz3v1K-6UsZOdqx9YI109M5KZNCOMbqwQvnTCvlLhCE8WY-IO3670lKXgfkus3QJFiycEkhWCroXmDOw65fEE9MReqRXyrq_fuVbY9ijLVZRASocFv2L1cxg0',
                    'author_name' => 'Filip V.',
                    'author_role' => 'Full-stack Developer & UI Arhitekta',
                    'author_location' => 'Beograd, Srbija • Remote & Consulting',
                    'author_email' => 'filip@celios.io',
                    'github_url' => '#',
                    'linkedin_url' => '#',
                    'twitter_url' => '#',
                    'tech_stack' => 'Laravel 11, Filament v3, Tailwind CSS, Alpine.js, Livewire 3, PostgreSQL / Redis',
                    'section_tag' => [
                        'sr' => 'O Autoru & Motivacija',
                        'en' => 'About the Author & Mission',
                        'it' => 'Sull\'Autore & Motivazione',
                    ],
                    'section_heading' => [
                        'sr' => 'Zašto sam napravio Celios CMS?',
                        'en' => 'Why did I build Celios CMS?',
                        'it' => 'Perché ho creato Celios CMS?',
                    ],
                    'story_paragraph_1' => [
                        'sr' => 'Kao full-stack inženjer i dizajner sa dugogodišnjim radom na custom web projektima, konstantno sam se susretao sa istom dilemom: WordPress je bio pretrpan nesigurnim dodacima i teškim za održavanje, dok su pure headless rešenja klijentima delovala previše apstraktno i hladno.',
                        'en' => 'As a full-stack engineer and designer delivering bespoke client projects, I faced the recurring dilemma: WordPress was weighed down by vulnerable plugins and high maintenance overhead, while pure headless solutions felt too detached and abstract for non-technical editors.',
                        'it' => 'Come ingegnere full-stack e designer, affrontavo costantemente lo stesso dilemma: WordPress era appesantito da troppi plugin e difficile da mantenere, mentre le soluzioni headless pure sembravano troppo astratte per i clienti.',
                    ],
                    'story_paragraph_2' => [
                        'sr' => 'Celios CMS je rođen iz potrebe za čistom, beskompromisnom platformom. Spojio sam eleganciju i reaktivnost Filament v3 administracije sa robusnim Laravel backendom i čistim Tailwind komponentama. Rezultat je CMS u kome klijenti intuitivno uređuju višejezične sadržaje i slažu vizuelne blokove, a developeri imaju 100% čist Blade i PHP kod bez crnih kutija.',
                        'en' => "Celios CMS was born from the requirement for a clean, uncompromising platform. I blended the elegance and reactivity of Filament v3 with Laravel's robust backend and modular Tailwind Blade components. The result is an environment where editors compose structured multilingual content effortlessly, while developers retain complete ownership of clean code.",
                        'it' => "Celios CMS è nato dalla necessità di una piattaforma pulita e senza compromessi. Ho unito l'eleganza di Filament v3 con la robustezza di Laravel e componenti Tailwind modulari.",
                    ],
                ],
            ],

            // 6. CTA SANDBOX BANNER
            [
                'type' => 'cta_sandbox',
                'data' => [
                    'status_pill' => [
                        'sr' => 'Trenutno Aktivan: Celios Sandbox Environment',
                        'en' => 'Currently Active: Celios Sandbox Environment',
                        'it' => 'Attivo Ora: Ambiente Sandbox Celios',
                    ],
                    'heading' => [
                        'sr' => 'Isprobajte Celios Admin u testnom režimu',
                        'en' => 'Experience the Celios Admin in test mode',
                        'it' => 'Prova l\'Admin di Celios in modalità test',
                    ],
                    'description' => [
                        'sr' => 'Istražite upravljanje sadržajem, višejezičnost i modularne blokove u realnom Filament v3 okruženju. Bez instalacije, bez kreditne kartice.',
                        'en' => 'Explore content authoring, native localization, and modular block layouts in a real Filament v3 environment. No installation, no credit card required.',
                        'it' => 'Esplora la gestione dei contenuti, il multilingua e i blocchi modulari in un ambiente Filament v3 reale.',
                    ],
                    'button_text' => [
                        'sr' => 'Uđi u Admin Kontrolnu Tablu (Test Demo)',
                        'en' => 'Enter Admin Control Panel (Live Demo)',
                        'it' => 'Entra nel Pannello di Controllo (Demo Live)',
                    ],
                    'footer_note_1' => [
                        'sr' => 'Demo nalog unapred popunjen',
                        'en' => 'Pre-configured demo account',
                        'it' => 'Account demo preconfigurato',
                    ],
                    'footer_note_2' => [
                        'sr' => 'Reset baze svakih 60 minuta',
                        'en' => 'Database reset every 60 minutes',
                        'it' => 'Reset database ogni 60 minuti',
                    ],
                    'admin_url' => '/admin',
                ],
            ],

            // 7. COLOR SYSTEM TEASER
            [
                'type' => 'color_system',
                'data' => [
                    'section_tag' => [
                        'sr' => 'Adaptivni Kolor Sistem',
                        'en' => 'Adaptive Color System',
                        'it' => 'Sistema Colore Adattivo',
                    ],
                    'heading' => [
                        'sr' => 'Fluidni Prelaz Između Svetlog i Tamnog Režima',
                        'en' => 'Fluid Transitions Between Light and Dark Modes',
                        'it' => 'Transizione Fluida tra Modalità Chiara e Scura',
                    ],
                    'description' => [
                        'sr' => 'Dizajneri nisu primorani na kompromise. Celios tokeni automatski mapiraju kontraste (surface, on-surface, primary i accente) tako da vaš portfolio zadržava identičan nivo elegancije i čitljivosti u bilo koje doba dana.',
                        'en' => 'No visual compromises needed. Celios tokens map semantic contrasts (surface, on-surface, primary, and accents) guaranteeing your portfolio maintains clarity and poise across all lighting environments.',
                        'it' => 'Nessun compromesso per i designer. I token Celios mappano automaticamente i contrasti semantici per garantire eleganza costante.',
                    ],
                    'chip_1' => [
                        'sr' => 'Automatska detekcija OS postavki',
                        'en' => 'Automated OS Theme Detection',
                        'it' => 'Rilevamento Automatico del Tema OS',
                    ],
                    'chip_2' => [
                        'sr' => 'Tailwind Semantic Tokens',
                        'en' => 'Tailwind Semantic Tokens',
                        'it' => 'Token Semantici Tailwind',
                    ],
                    'footer_note' => [
                        'sr' => 'Generisano bez hardkodovanih boja • 100% Tailwind Semantic Classes',
                        'en' => 'Generated without hardcoded hexes • 100% Semantic Tailwind CSS Tokens',
                        'it' => 'Generato senza colori hardcoded • 100% Classi Semantiche Tailwind',
                    ],
                ],
            ],
        ];

        $pageData = [
            'type' => PageType::HOME,
            'title' => [
                'sr' => 'Celios CMS — Modularni CMS za developere i dizajnere',
                'en' => 'Celios CMS — Modular CMS for Developers & Designers',
                'it' => 'Celios CMS — CMS Modulare per Sviluppatori e Designer',
            ],
            'slug' => [
                'sr' => 'home',
                'en' => 'home',
                'it' => 'home',
            ],
            'is_visible' => true,
            'content' => $blocksContent,
            'draft_content' => null,
        ];

        if ($homePage) {
            $homePage->update($pageData);
        } else {
            Page::create($pageData);
        }
    }
}
