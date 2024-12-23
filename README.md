# Kirby Starterkit
[![Release](https://img.shields.io/github/release/quentin-f451/kirby-starterkit.svg)](https://github.com/quentin-f451/kirby-starterkit/releases)

This repo is my own starterkit for Kirby 4 projects. Featuring [Kirby CMS](https://getkirby.com/) and [SCSS Starterkit](https://github.com/quentin-f451/scss-starterkit).

## Requirements

+ [Node.js](https://nodejs.org/en/) and [npm](https://www.npmjs.com/).
+ [Composer](https://getcomposer.org/doc/00-intro.md)

## Installation

1. In Terminal, go to your production folder:
```
cd path/to/my/folder
```

2. Clone this repository with the submodules
```
git clone https://github.com/quentin-f451/kirby-starterkit NAME-OF-MY-FOLDER
cd NAME-OF-MY-FOLDER
git clone --depth=1 https://github.com/quentin-f451/scss-starterkit.git src/scss
rm -rf ./src/scss/.git ./src/scss/.gitignore ./src/scss/README.md
```

3. Install and update Kirby
```
composer install
cd www/kirby
composer update
cd ..
cd site/plugins/kirby-seo
composer install --no-dev --optimize-autoloader
cd ../../..
```

4. Install dependencies with npm
```
pnpm install
```

5. You just have to type `npm run dev` now, open `http://localhost:3000` and to start coding. The browser will reload at every saved change!

6. At the end of your coding process, you can run the `npm run build` command.

7. Complete example: 
```
git clone https://github.com/quentin-f451/kirby-starterkit MY_PROJECT
cd MY_PROJECT
git clone --depth=1 https://github.com/quentin-f451/scss-starterkit.git src/scss
rm -rf ./src/scss/.git ./src/scss/.gitignore ./src/scss/README.md
composer install
cd www/kirby
composer update
cd ..
cd site/plugins/kirby-seo
composer install --no-dev --optimize-autoloader
cd ../../..
pnpm install
```

## Contribute 

Feel free to submit any issue or request.

*This project is in a beta version and I develop it for my own projects. Don't use it on a production website if you're not sure of being able to correct my bugs!*
