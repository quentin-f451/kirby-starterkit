<?php

require __DIR__ . '/helpers.php';
require __DIR__ . '/assets.php';

Kirby::plugin('quentin-f451/website', [
  'fieldMethods' => include __DIR__ . '/fieldMethods.php',
  'fileMethods' => include __DIR__ . '/fileMethods.php',
  'filesMethods' => include __DIR__ . '/filesMethods.php',
  'pageMethods' => include __DIR__ . '/pageMethods.php',
  'siteMethods' => include __DIR__ . '/siteMethods.php',
  'pagesMethods' => include __DIR__ . '/pagesMethods.php',
  'tags' => include __DIR__ . '/tags.php',
  'hooks' => include __DIR__ . '/hooks.php',
]);
