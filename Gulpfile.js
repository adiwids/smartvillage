"use strict";

const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const sync = require('browser-sync').create();
const dotenv = require('dotenv').config();

function compileScss() {
  return gulp.src('app/assets/stylesheets/**/*.scss')
             .pipe(sass().on('error', sass.logError))
             .pipe(gulp.dest('app/cache/assets'));
}

function buildApplicationStyle() {
  return gulp.src([
                  'app/cache/assets/**/*.css',
                  'node_modules/bootstrap/dist/css/bootstrap.css'
              ])
             .pipe(concat('application.css'))
             .pipe(gulp.dest('public/assets'))
             .pipe(sync.stream( { match: '**/*.css' } ));
}

function compileScript() {
  return gulp.src([
                  'node_modules/jquery/dist/jquery.js',
                  'node_modules/bootstrap/dist/js/bootstrap.js',
                  'app/assets/javascripts/application.js'
                ])
               .pipe(concat('application.js'))
               .pipe(gulp.dest('public/assets'))
               .pipe(sync.stream());
}

function copyAssets() {
  return gulp.src([
                'app/assets/images/*',
                'node_modules/bootstrap/dist/css/bootstrap.css.map'
              ])
             .pipe(gulp.dest('public/assets'))
             .pipe(sync.stream());
}

function copyFonts() {
  return gulp.src([
                  'node_modules/bootstrap/dist/fonts/*',
                  'app/assets/fonts/*'
              ])
             .pipe(gulp.dest('public/fonts'))
             .pipe(sync.stream());
}

const styles = gulp.series(compileScss, buildApplicationStyle);
const copies = gulp.parallel(copyAssets, copyFonts);
const precompile = gulp.parallel(styles, compileScript, copies);

function startSync(onDoneCallbackFn) {
  sync.init({
    ui: false,
    port: process.env.SYNC_PORT || 8080,
    proxy: process.env.DOMAIN
  });
  onDoneCallbackFn();
}

function watchChanges() {
  gulp.watch('app/assets/stylesheets/**/*', styles);
  gulp.watch('app/assets/javascripts/**/*', compileScript);
  gulp.watch([
              'app/assets/images/*',
              'app/assets/fonts/*'
             ], copies);
  gulp.watch([
              'app/views/**/*'
             ], reload);
}

function browserSync() {
  startSync(watchChanges);
}

function reload(onDoneCallbackFn) { sync.reload(); onDoneCallbackFn(); }

exports.default = precompile;
exports.build = precompile;
exports.watch = browserSync;
