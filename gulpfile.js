var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin'),
    cache = require('gulp-cache');
var minifycss = require('gulp-minify-css');
var sass = require('gulp-sass');

gulp.task('images', function(){
    gulp.src('resources/images/**/*')
        .pipe(cache(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true })))
        .pipe(gulp.dest('public/assets/images/'));
});

gulp.task('styles', function(){
    gulp.src(['resources/assets/sass/**/*.scss'])
        .pipe(plumber({
            errorHandler: function (error) {
                console.log(error.message);
                this.emit('end');
            }}))
        .pipe(sass())
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest('public/assets/css/'))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss())
        .pipe(gulp.dest('public/assets/css/'))
});

gulp.task('scripts', function(){
    return gulp.src('resources/assets/sass/**/*.js')
        .pipe(plumber({
            errorHandler: function (error) {
                console.log(error.message);
                this.emit('end');
            }}))
        .pipe(concat('main.js'))
        .pipe(gulp.dest('public/assets/js/'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('public/assets/js/'))
});

gulp.task('default', function(){
    gulp.watch("resources/assets/sass/**/*.scss", ['styles']);
    gulp.watch("resources/assets/sass/**/*.js", ['scripts']);
});