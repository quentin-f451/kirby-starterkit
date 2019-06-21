<?php

return [
    'community.markdown-field.buttons' => ['bold', 'italic', 'blockquote', 'ul', 'pagelink', 'image', 'link', 'email', 'horizontal-rule'],
    'community.markdown-field.font' => [
        'family' => 'sans-serif',
        'scaling' => false,
        'size' => 'regular',
    ],

    'thumbs' => [
        'srcsets' => [
            // For mobile (420px), 1280px, 1800px, 2560px
        ],
        'presets' => [
            'blur' => ['width' => 150, 'height' => 150, 'quality' => 30]
        ]
    ],

    'panel' => array('css' => 'assets/css/panel.css'),

    'debug' => true,

    'cache' => [
      'pages' => [
        'active' => false
      ]
    ],

    'smartypants' => true,
];
