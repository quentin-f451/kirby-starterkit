<?php

return [
  'debug' => true,
  'smartypants' => true,

  'tobimori.seo.canonicalBase' => '',
  'tobimori.seo.robots.indicator' => false,
  'tobimori.seo.robots.pageSettings' => false,
  'tobimori.seo.robots.types' => [],
  'tobimori.seo.sitemap' => [
    'excludeTemplates' => []
  ],

  'cache' => [
    'pages' => [
      'active' => false
    ]
  ],

  'panel' => [
    'theme' => 'light'
  ],

  'thumbs' => [
    'presets' => [],
    'srcsets' => [
      'webp' => [
        '100w' => ['width' => 100, 'quality' => 85, 'format' => 'webp'],
        '200w' => ['width' => 200, 'quality' => 85, 'format' => 'webp'],
        '400w' => ['width' => 400, 'quality' => 85, 'format' => 'webp'],
        '800w' => ['width' => 800, 'quality' => 85, 'format' => 'webp'],
        '1000w' => ['width' => 1000, 'quality' => 85, 'format' => 'webp'],
        '1200w' => ['width' => 1200, 'quality' => 85, 'format' => 'webp'],
        '1600w' => ['width' => 1600, 'quality' => 85, 'format' => 'webp'],
        '2200w' => ['width' => 2200, 'quality' => 85, 'format' => 'webp'],
        '2560w' => ['width' => 2560, 'quality' => 85, 'format' => 'webp']
      ],
      'jpg' => [
        '100w' => ['width' => 100, 'quality' => 85, 'format' => 'jpg'],
        '200w' => ['width' => 200, 'quality' => 85, 'format' => 'jpg'],
        '400w' => ['width' => 400, 'quality' => 85, 'format' => 'jpg'],
        '800w' => ['width' => 800, 'quality' => 85, 'format' => 'jpg'],
        '1000w' => ['width' => 1000, 'quality' => 85, 'format' => 'jpg'],
        '1200w' => ['width' => 1200, 'quality' => 85, 'format' => 'jpg'],
        '1600w' => ['width' => 1600, 'quality' => 85, 'format' => 'jpg'],
        '2200w' => ['width' => 2200, 'quality' => 85, 'format' => 'jpg'],
        '2560w' => ['width' => 2560, 'quality' => 85, 'format' => 'jpg']
      ],
    ]
  ],

  'routes' => [],
];
