<?php

return [
  'debug' => true,
  'smartypants' => true,

  'tobimori.seo.canonicalBase' => '',
  'tobimori.seo.robots.indicator' => false,
  'tobimori.seo.robots.pageSettings' => false,
  'tobimori.seo.sitemap' => [
    'excludeTemplates' => []
  ],

  'cache' => [
    'pages' => [
      'active' => false
    ]
  ],

  'thumbs' => [
    'presets' => [],
    'srcsets' => [
      'webp' => [
        '50w' => ['width' => 50, 'quality' => 90, 'format' => 'webp'],
        '100w' => ['width' => 100, 'quality' => 90, 'format' => 'webp'],
        '200w' => ['width' => 200, 'quality' => 90, 'format' => 'webp'],
        '400w' => ['width' => 400, 'quality' => 90, 'format' => 'webp'],
        '600w' => ['width' => 600, 'quality' => 90, 'format' => 'webp'],
        '800w' => ['width' => 800, 'quality' => 90, 'format' => 'webp'],
        '1000w' => ['width' => 1000, 'quality' => 90, 'format' => 'webp'],
        '1200w' => ['width' => 1200, 'quality' => 90, 'format' => 'webp'],
        '1400w' => ['width' => 1400, 'quality' => 90, 'format' => 'webp'],
        '1600w' => ['width' => 1600, 'quality' => 90, 'format' => 'webp'],
        '1800w' => ['width' => 1800, 'quality' => 90, 'format' => 'webp'],
        '2000w' => ['width' => 2000, 'quality' => 90, 'format' => 'webp'],
        '2200w' => ['width' => 2200, 'quality' => 90, 'format' => 'webp'],
        '2560w' => ['width' => 2560, 'quality' => 90, 'format' => 'webp']
      ],
      'jpg' => [
        '50w' => ['width' => 50, 'quality' => 90, 'format' => 'jpg'],
        '100w' => ['width' => 100, 'quality' => 90, 'format' => 'jpg'],
        '200w' => ['width' => 200, 'quality' => 90, 'format' => 'jpg'],
        '400w' => ['width' => 400, 'quality' => 90, 'format' => 'jpg'],
        '600w' => ['width' => 600, 'quality' => 90, 'format' => 'jpg'],
        '800w' => ['width' => 800, 'quality' => 90, 'format' => 'jpg'],
        '1000w' => ['width' => 1000, 'quality' => 90, 'format' => 'jpg'],
        '1200w' => ['width' => 1200, 'quality' => 90, 'format' => 'jpg'],
        '1400w' => ['width' => 1400, 'quality' => 90, 'format' => 'jpg'],
        '1600w' => ['width' => 1600, 'quality' => 90, 'format' => 'jpg'],
        '1800w' => ['width' => 1800, 'quality' => 90, 'format' => 'jpg'],
        '2000w' => ['width' => 2000, 'quality' => 90, 'format' => 'jpg'],
        '2200w' => ['width' => 2200, 'quality' => 90, 'format' => 'jpg'],
        '2560w' => ['width' => 2560, 'quality' => 90, 'format' => 'jpg']
      ],
    ]
  ],

  'routes' => [],
];
