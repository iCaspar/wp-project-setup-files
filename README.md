# WordPress Project Setup Files

A collection of files to pull down when starting a new WordPress plugin or theme.

## Contents

* **Git** -- `.gitignore` boilerplate
* **Composer** -- `composer.json` boilerplate
* **Gulp** -- `package.json` and `gulp.js` boilerplates
* **PHPUnit**
    * `setup-phpunit.sh` Sets up PHP Unit and WP dependencies on a Local-by-Flywheel Docker Container*
    * `phpunit.xml.dist` boilerplates for unit and integration tests
    * `bootstrap.php` boilerplates for unit and integration tests

* **Travis** -- `.travis.yml` and `ci/travis.sh` boilerplates

## Usage

If using Local-by-Flywheel, you will first need the Local-by-Flywheel *Volumes* add-on. 
[Download from Flywheel](https://github.com/getflywheel/local-addon-volumes/) and follow directions to install.

1. Clone into new project root directory.
2. If using Local-by-Flywheel:
   1. Select your site in the Local app and open the More > Volumes window.
   2. Add a new Host Source: `/Usrs/account/pat/to/your/site/root/wptests` and container destination: `/tmp/wordpress-tests-lib`.
   3. Restart Local-by-Flywheel.
   4. Move `setup-phpunit.sh` to the container's app directory
   5. From Local, right-click the container and log into SSH.
   6. In the container terminal `cd app`, then `bash setup-phpuniy.sh`.
3. Move `.gitignore` to project root.
4. Move `composer.json` to project root. Edit for project specifics and `composer install`.
5. Move contents of travis folder to the project root.
6. Move contents of gulp folder to project root.
   1. Edit `package.json` and `gulpfile.js` for project specifics.
   2. `npm install`
7. Delete the `wp-project-setup-files` folder. You're all done!

## Gulp Tasks included:

* `styles`
   1. Compiles all SCSS files in `/assets/src/sass` to CSS in `/assets/src/css`
   2. Packages like media queries
   3. Generates source maps
   4. Minimizes and puts final into `/assets/dist/css`
* `scripts`
   1. Uglifies everything in `/assets/src/js` and puts results in `/assets/dist/js`
   2. Concatinates everything in `assets/src/js/concat` and puts results in `assets/dist/js`
* `lint` - checks your SASS for funk
* `images` - minimizes everything in `/assets/src/images` and puts results in `/assets/dist/images`
* `build` - runs `styles`, `scripts` and `images`
* `watch` == `default` - watches everything in the `/assets` directory and runs the appropriate task for subfolder contents.

\*Thanks to [Keesiemeijer](https://gist.github.com/keesiemeijer/a888f3d9609478b310c2d952644891ba)
