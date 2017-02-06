var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');


var paths = {
    js: [
        'web/dev/js/*'
    ],
    img: [
        'web/dev/img/*'
    ],
    sass: [
        'web/dev/sass/*',
        'web/dev/sass/**/*'
    ],
    dest: {
        js: 'web/assets/js',
        css: 'web/assets/css',
        img: 'web/assets/img',
        font: 'web/assets/fonts'
    },
    vendorJs: [
        'web/vendors/components/jquery/dist/jquery.min.js',
        'web/vendors/components/materialize/dist/js/materialize.min.js'
    ],
    vendorCss: [
        'web/vendors/components/materialize/dist/css/materialize.min.css'
    ],
    font: [
        'web/vendors/components/materialize/fonts/**/*'
    ]

};


gulp.task('default', ['uglify', 'sass', 'imagemin', 'vendors'], function(){

});

gulp.task('vendor-js', function () {
   return gulp.src(paths.vendorJs)
       .pipe(uglify())
       .pipe(concat('vendor.js'))
       .pipe(gulp.dest(paths.dest.js))
});

gulp.task('vendor-css', function () {
   return gulp.src(paths.vendorCss)
       .pipe(concat('vendor.css'))
       .pipe(gulp.dest(paths.dest.css))
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

gulp.task('imagemin', function () {
    return gulp.src(paths.img)
        .pipe(gulp.dest(paths.dest.img))
});

gulp.task('vendors', ['vendor-js', 'vendor-css'], function () {

});


gulp.task('watch', function () {
   gulp.watch([paths.sass, paths.js], ['sass', 'uglify'])
});

gulp.task('font', function () {
    return gulp.src(paths.font)
        .pipe(gulp.dest(paths.dest.font))
});