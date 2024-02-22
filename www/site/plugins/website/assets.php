<?php

class LoadAssets
{
  public static function getCSS($url)
  {
    if (getenv('APP_ENV') === "dev") :
      return css("http://localhost:5173/" . $url);
    endif;
    $manifestPath = asset('/assets/.vite/manifest.json')->root();
    $manifest = json_decode(F::read($manifestPath), true);
    $cssFile = $manifest[$url]['file'];
    $cssRoot = asset('assets/' . $cssFile)->url();
    return css($cssRoot);
  }

  public static function getJS($url)
  {
    if (getenv('APP_ENV') === "dev") :
      return js("http://localhost:5173/@vite/client", ['type' => 'module']) . js("http://localhost:5173/" . $url, ['type' => 'module']);
    endif;
    $manifestPath = asset('/assets/.vite/manifest.json')->root();
    $manifest = json_decode(F::read($manifestPath), true);
    $jsFile = $manifest[$url]['file'];
    $jsRoot = asset('assets/' . $jsFile)->url();
    return js($jsRoot, ['type' => 'module']);
  }
}
