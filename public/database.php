<?php

/** 
 * Not a database connection. Just a file that store data. 
 */

return [
    /** Data for services page */
    "services"   => [
        [
            'key' => 'service_1',
            'image' => '/images/service-1.webp',
        ],
        [
            'key' => 'service_2',
            'image' => '/images/service-2.webp',
        ],
        [
            'key' => 'service_3',
            'image' => '/images/service-3.webp',
        ],
    ],

    /** Data for products page */
    // NOTE: I won't use these descriptions for the translation purposes :3
    "categories" => [
        [
            "id"                => 1,
            "name"              => 'Uplus',
            'description'       => 'UPLUS is a leading automotive battery manufacturer with advanced production facilities in India and Malaysia. The company offers a range of maintenance-free car batteries utilizing Pb-Ca alloy grids, known for superior starting ability, long lifespan, excellent charging acceptance, and reliable performance in low temperatures. These batteries are suitable for passenger cars, commercial vehicles, tractors, and construction machinery.(uplusbattery.com)',
            "image"             => '/images/categories/uplus.webp',
        ],
        [
            "id"                => 2,
            "name"              => 'Scope',
            'description'       => 'SCOPE is a prominent battery brand based in the United Arab Emirates, specializing in high-quality batteries designed for various applications. Their products are engineered to deliver reliable performance and longevity, catering to the needs of diverse sectors.',
            "image"             => '/images/categories/scope.webp',
        ],
        [
            "id"                => 3,
            "name"              => 'Varta',
            'description'       => 'VARTA is a globally recognized German brand, renowned for its innovative battery solutions. They provide a wide range of batteries suitable for automotive, industrial, and consumer applications. VARTA batteries are known for their advanced technology, exceptional performance, and long service life.(varta-automotive.com )',
            "image"             => '/images/categories/varta.webp',
        ],
        [
            "id"                => 4,
            "name"              => 'Quantum',
            'description'       => 'QUANTUM is an Indonesian battery brand offering a variety of battery solutions for different applications. Their products are designed to meet high standards of quality and reliability, ensuring optimal performance across various uses.',
            "image"             => '/images/categories/quantum.webp',
        ],
        [
            "id"                => 5,
            "name"              => 'Asashi',
            'description'       => 'ASASHI is a reputable Thai battery manufacturer, producing batteries known for their durability and efficiency. Their products are widely used in automotive and industrial sectors, providing dependable power solutions.',
            "image"             => '/images/categories/asashi.webp',
        ],
        [
            "id"                => 6,
            "name"              => 'Fukuda',
            'description'       => 'FUKUDA is another esteemed battery brand from Thailand, offering a range of batteries recognized for their superior power solutions. They are committed to delivering products that ensure high performance and reliability for various applications.',
            "image"             => '/images/categories/fukuda.webp',
        ],
        [
            "id"                => 7,
            "name"              => 'Motolite',
            'description'       => 'MOTOLITE is a leading battery brand from the Philippines, known for manufacturing robust and long-lasting batteries. Their products cater to automotive, industrial, and household needs, ensuring strong performance and reliability.',
            "image"             => '/images/categories/motolite.webp',
        ],
    ],
    "products"   => [
        [
            "id"          => 1,
            "name"        => 'Battery 1',
            "category_id" => 1,
            "image"       => '',
        ],
        [
            "id"          => 2,
            "name"        => 'Battery 2',
            "category_id" => 1,
            "image"       => '',
        ],
        [
            "id"          => 3,
            "name"        => 'Battery 3',
            "category_id" => 1,
            "image"       => '',
        ],
    ],
];
