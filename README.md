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

#### Conventions
  - `$` indicates in command-prompt, such as: Terminal on Linux, Command Prompt on Wind*ws, etc.

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
  1. Download and install [XAMPP](https://www.apachefriends.org/download.html) or [PHP Binary & Libs](https://www.php.net/downloads.php).
  2. Download [Composer](https://getcomposer.org/download/) or [Composer Installer](https://getcomposer.org/Composer-Setup.exe) for Wind*ws user.
  3. Download and install [NodeJS](https://nodejs.org/en/download)
  4. Make sure steps 1-3 finished and successfully running by executing `$ php -v`, `composer -V`, `node -v`, and `npm -v`.
  5. Download and install [Git](https://git-scm.com/downloads). *Using Add Git Bash here from Windows context menu is easier than Command Prompt.*
  6. Download or clone this project (*use SSH for collaborator or HTTPS for guest*).
  7. Copy `.env.example` file to `.env`
  8. Enter to the project root directory, then run `$ npm install`
  9. Run `$ composer install`
  10. If `app/cache/views` directory doesn't exists, create it first. It has been done automatically if start server via `npm run dev-server` command.
  11. Start development server by running `$ npm run dev-server` or manually run:
     1. `$ npm run build`, then
     2. `php -t public -S localhost:8000`
  12. Open `http://localhost:8000` on your browser if you start server manually.

### References

  - [Mitra Desa - LumbungKu](https://www.mitradesa.id)
  - [CodeIgniter User-guide](https://www.codeigniter.com/user_guide)
  - [M. Robih: Menggunakan Blade Template Engine pada CodeIgniter](https://medium.com/easyread/menggunakan-blade-template-engine-pada-codeigniter-369b2eea024c)
  - [Bootstrap Documentation](https://getbootstrap.com/docs/3.3)
  - [Start Bootstrap - SB Admin](https://startbootstrap.com/templates/sb-admin)
  - [GulpJS](https://gulpjs.com/docs/en/getting-started/quick-start)
  - [Sass](https://sass-lang.com)
