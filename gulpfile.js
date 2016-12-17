'use strict';

var dir = {
    sass: {
        src: './resources/assets/sass/**/*.scss',
        dest: './public/assets/css'
    }
};

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
    return gulp.src(dir.sass.src)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(dir.sass.dest));
});

gulp.task('sass:watch', function () {
    gulp.watch('./sass/**/*.scss', ['sass']);
});
