var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer');

gulp.task('autoprefix - плагин', function () {
    return gulp.src('css/dr-custom.css')
        .pipe(autoprefixer({
            browsers: ['last 15 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('css/'));
});
