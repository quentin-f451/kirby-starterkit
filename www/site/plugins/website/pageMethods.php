<?php

return [

  'createDescription' => function () {
    if ($this->descriptionSEO()->isNotEmpty()) return $this->descriptionSEO()->sp();
    return $this->site()->descriptionSEO()->sp();
  },

  'createTitle' => function () {
    if ($this->template() == 'home') :
      return $this->site()->title()->sp();
    elseif ($this->template() == 'error') :
      return $this->site()->title()->sp() . ' | This page is not available.';
    else :
      return $this->site()->title()->sp() . ' | ' . $this->title()->sp();
    endif;
  },

  'createImage' => function () {
    if ($this->imageSEO()->toFiles()->count()) :
      $image = $this->imageSEO()->toFile();
    elseif ($this->files()->template('image')->count()) :
      $image = $this->files()->template('image')->sortBy('sort')->first();
    else :
      $image = $this->site()->imageSEO()->toFile();
    endif;
    if (!$image) return null;
    return $image->crop(1200, 630, 'center')->url();
  }
];
