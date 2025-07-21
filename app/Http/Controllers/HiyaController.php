<?php

namespace App\Http\Controllers;

class HiyaController extends Controller
{
    public function index()
    {
        $store = [
            'name' => 'Hiya',
            'slug' => 'hiya',
            'logo' => '/uploads/stores/1700657094_hi150.png',
            'title' => 'Hiya Coupons and Promo Codes with 70% off',
            'subtitle' => '(4 Working Codes) July 2025',
            'url' => 'https://hiyahealth.com',
        ];

        $coupons = [
            [
                'discount' => '70%',
                'title' => '50% Off First Order, Kids Daily Multivitamin + 20% off Coupon',
                'code' => 'A20',
                'success' => '100%',
                'likes' => 19,
                'dislikes' => 0,
                'verified' => true,
                'comments' => [
                    [
                        'text' => 'Worked!',
                        'user' => 'Anonymous',
                        'time' => '2025-07-08T18:43:13Z',
                    ],
                ],
                'url' => 'https://track.flexlinkspro.com/g.ashx?foid=24.232813.6661961&trid=1073516.232813&foc=14&fot=9999&fos=2',
            ],
            [
                'discount' => '20%',
                'title' => '20% Off Sitewide',
                'code' => 'A20',
                'success' => '86%',
                'likes' => 42,
                'dislikes' => 7,
                'verified' => true,
                'comments' => [],
                'url' => 'https://track.flexlinkspro.com/g.ashx?foid=24.232813.6656830&trid=1073516.232813&foc=16&fot=9999&fos=5',
            ],
            [
                'discount' => '20%',
                'title' => '20% Off Sitewide',
                'code' => 'A20',
                'success' => '71%',
                'likes' => 5,
                'dislikes' => 2,
                'verified' => true,
                'comments' => [],
                'url' => 'https://track.flexlinkspro.com/g.ashx?foid=24.232813.6656830&trid=1073516.232813&foc=16&fot=9999&fos=5',
            ],
            [
                'discount' => '20%',
                'title' => '20% Off Sitewide',
                'code' => 'A20',
                'success' => '80%',
                'likes' => 4,
                'dislikes' => 1,
                'verified' => true,
                'comments' => [],
                'url' => 'https://track.flexlinkspro.com/g.ashx?foid=24.232813.6656830&trid=1073516.232813&foc=16&fot=9999&fos=5',
            ],
        ];

        $about = [
            'image' => 'https://test.herpromocodes.com/uploads/stores/1700657094_hi40 (1).jpg',
            'text' => 'Hiya Health offers a range of health products specifically designed for children, including Kids Daily Multivitamins and Kids Daily Probiotic. Additionally, they provide Kids Bedtime Essentials to promote wellness at bedtime, focusing on the unique health needs of young children.',
        ];

        $paymentOptions = [
            'PayPal',
            'GPay',
            'Credit Card'
        ];

        $competitors = [
            [
                'name' => 'Uniqso',
                'coupons' => 10,
                'url' => 'https://test.herpromocodes.com/uniqso-promo-codes',
                'logo' => './laravel-rebuild_files/1593152134_uniqso150.jpg'
            ],
            [
                'name' => 'eyeglasses.com',
                'coupons' => 9,
                'url' => 'https://test.herpromocodes.com/eyeglasses-com-coupons',
                'logo' => './laravel-rebuild_files/1471661531_eyeglasses150.jpg'
            ],
            [
                'name' => 'Vitality Extracts',
                'coupons' => 9,
                'url' => 'https://test.herpromocodes.com/vitality-extracts-promo-codes',
                'logo' => './laravel-rebuild_files/1610079344_vitality150.jpg'
            ],
            [
                'name' => 'EveryoneDoesIt',
                'coupons' => null,
                'url' => 'https://test.herpromocodes.com/everyonedoesit-coupons',
                'logo' => './laravel-rebuild_files/1478743014_everyone150.jpg'
            ],
            [
                'name' => 'Zeelool',
                'coupons' => 8,
                'url' => '',
                'logo' => ''
            ],
            [
                'name' => 'Doctors Best Weight Loss',
                'coupons' => 7,
                'url' => 'https://test.herpromocodes.com/doctors-best-weight-loss-promo-codes',
                'logo' => './laravel-rebuild_files/1521611637_doctorweightloss150.jpg'
            ],
            [
                'name' => 'Herbspro',
                'coupons' => 7,
                'url' => 'https://test.herpromocodes.com/herbspro-coupons',
                'logo' => './laravel-rebuild_files/1471053792_herbspro150.jpg'
            ],
            [
                'name' => 'Dankgeek',
                'coupons' => 7,
                'url' => 'https://test.herpromocodes.com/dankgeek-promo-codes',
                'logo' => './laravel-rebuild_files/1592969362_dangeek150.jpg'
            ],
            [
                'name' => 'Lensabl',
                'coupons' => 7,
                'url' => 'https://test.herpromocodes.com/lensabl-promo-codes',
                'logo' => './laravel-rebuild_files/1636949997_lensable150.jpg'
            ],
            [
                'name' => 'Trophy Skin',
                'coupons' => 7,
                'url' => 'https://test.herpromocodes.com/trophy-skin-coupons',
                'logo' => './laravel-rebuild_files/1504148703_trophyskin150.jpg'
            ],
        ];

        $offerList = array_map(function ($coupon) {
            return [
                '@type' => 'Offer',
                'name' => $coupon['title'],
                'priceCurrency' => 'USD',
                'availability' => 'https://schema.org/InStock',
                'url' => $coupon['url'],
            ];
        }, $coupons);

        $offerJsonFeed = [
            '@context' => 'https://schema.org',
            '@type' => 'ItemList',
            'itemListElement' => $offerList
        ];

        $breadcrumbJsonFeed = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => route('home'),
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => $store['title'],
                    'item' => route('home'),
                ],
            ],
        ];

        $organizationJsonFeed = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'HerPromoCodes',
            'url' => $store['url'],
            'logo' => $store['logo'],
            'sameAs' => [
                'https://www.facebook.com/HerPromoCodes',
                'https://twitter.com/HerPromoCodes',
            ],
        ];

        $offerJsonFeed = json_encode($offerJsonFeed, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        $breadcrumbJsonFeed = json_encode($breadcrumbJsonFeed, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        $organizationJsonFeed = json_encode($organizationJsonFeed, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

        return view('coupons.index', compact(
            'store',
            'about',
            'coupons',
            'offerJsonFeed',
            'breadcrumbJsonFeed',
            'organizationJsonFeed',
            'competitors',
            'paymentOptions',
        ));
    }
}
