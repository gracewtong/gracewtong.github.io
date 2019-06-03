
var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');
var minify = require('gulp-minify');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var imagemin = require('gulp-imagemin');


// sass, autoprefixer
gulp.task('sass', function(){
  return gulp.src('sass/styles.scss')

    .pipe(sass().on('error', function(err) {
      console.error(err.message);
      browserSync.notify(err.message, 8000); // Display error in the browser
      this.emit('end'); // Prevent gulp from catching the error and exiting the watch process
    }))

    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('styles'))
    .pipe(autoprefixer())
    .pipe(browserSync.reload({
      stream: true
    }))
});


// browsersync
gulp.task('browserSync', function() {
  browserSync.init({
    // server: {
    //   baseDir: './'
    // },
    proxy: "http://localhost:8080/portfolio/"
  })
})


// MAIN WATCH TASK: watch sass, browsersync
gulp.task('watch', ['browserSync', 'sass'], function(){
  gulp.watch('sass/**/*.scss', ['sass']); 
  gulp.watch('*.html', browserSync.reload); 
  gulp.watch('./**/*.php', browserSync.reload); 
  gulp.watch('js/**/*.js', browserSync.reload); 
})


// minify css
gulp.task('minify-css', function() {
  return gulp.src('styles/*.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(concat('styles.min.css'))
    .pipe(gulp.dest('dist'));
});


// minify js
gulp.task('minify-js', function() {
  gulp.src('js/*.js')
    .pipe(minify({
        ext:{
            src:'-debug.js',
            min:'.min.js'
        },
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-min.js']
    }))
    
    .pipe(gulp.dest('dist'))
});


// MAIN BUILD TASK: combine minify & rename tasks
gulp.task('build', ['minify-css', 'minify-js'], function() {

});


// optimize images
gulp.task('imagemin', () =>
    gulp.src('images/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images'))
);

