var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');


var paths = {
    js: [
        'web/dev/js/*'
    ],
    sass: [
        'web/dev/sass/*',
        'web/dev/sass/**/*'
    ],
    dest: {
        js: 'web/assets/js',
        css: 'web/assets/css'
    }
};


gulp.task('default', ['uglify', 'sass'], function(){

});

gulp.task('uglify', function () {
    return gulp.src(paths.js)
        .pipe(uglify())
        .pipe(concat('app.js'))
        .pipe(gulp.dest(paths.dest.js))
});

gulp.task('sass', function(){
    return gulp.src(paths.sass)
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(concat('app.css'))
        .pipe(gulp.dest(paths.dest.css))
});

gulp.task('watch', function () {
   gulp.watch([paths.sass, paths.js], ['sass', 'uglify'])
});