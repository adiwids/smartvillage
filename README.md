## Overview
Version: [alpha](https://github.com/adiwids/smartvillage/tree/master)

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

__Smart Village__ is a web-application based on CodeIgniter3 (PHP) plus light customization (see [here](https://github.com/adiwids/ci3) for detail!).

__Smart Village__ is built to overcome needs in residential matter, including:
  - residents data and information management
  - filter adult residents for election's voters list
  - filter poor residents for welfare improvement
  - letter templating for resident usage, such as: SKCK, eKTP, SKTM and other applications

### Development

#### Requirements

  - HTML5
  - PHP `>= 5.6`
  - Composer
  - NodeJS `>= 6.16`
  - Modern web browsers with developer tools
  - Git
  - Text editor
  - Command line knowledges
  - *tbd*

#### Guide
  1. Download and install [XAMPP](https://www.apachefriends.org/download.html) or [PHP Binary & Libs](https://www.php.net/downloads.php)
  2. *Optional step:*

     Set `php` binary path as environment variables (Wind*ws) or `symlink` it thus we don't need to call with full binary path.
  3. Download [Composer](https://getcomposer.org/download/) and place `composer.phar` adjacent with `php` binary.
  4. *Optional step:*

     Set `composer.phar` file path as `COMPOSER` environment variables, thus on Wind*ws we can run composer command by `php "%COMPOSER%" [command]`.
  5. Download and install [NodeJS](https://nodejs.org/en/download)
  6. *Optional step:*

     Set `node` and `npm` binary paths as environment variables (Wind*ws) or `symlink` it thus we don't need to call with full binary path.  
  7. Download or clone this project.
  8. Copy `.env.example` file to `.env`
  9. Enter to the project root directory, then run `$ npm install`
  10. Run `$ composer install`
  11. Start development server by running `$ npm run dev-server`

### References

  - [Mitra Desa - LumbungKu](https://www.mitradesa.id)
  - [CodeIgniter User-guide](https://www.codeigniter.com/user_guide)
  - [M. Robih: Menggunakan Blade Template Engine pada CodeIgniter](https://medium.com/easyread/menggunakan-blade-template-engine-pada-codeigniter-369b2eea024c)
  - [Bootstrap Documentation](https://getbootstrap.com/docs/3.3)
  - [Start Bootstrap - SB Admin](https://startbootstrap.com/templates/sb-admin)
  - [GulpJS](https://gulpjs.com/docs/en/getting-started/quick-start)
  - [Sass](https://sass-lang.com)
