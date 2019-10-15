<?php

require __DIR__ . '/helpers.php';

Kirby::plugin('quentin-f451/site', [
    'fieldMethods' => include __DIR__ . '/fieldMethods.php',
    'fileMethods' => include __DIR__ . '/fileMethods.php',
    'pageMethods' => include __DIR__ . '/pageMethods.php',
    'siteMethods' => include __DIR__ . '/siteMethods.php',
    'pagesMethods' => include __DIR__ . '/pagesMethods.php',
    'tags' => include __DIR__ . '/tags.php',
    'hooks' => include __DIR__ . '/hooks.php',
]);