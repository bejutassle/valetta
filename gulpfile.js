const gulp = require('gulp');
const less = require('gulp-less');
const sass = require('gulp-sass');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const clean_css = require('gulp-clean-css');
const del = require('del');

const assets = {
    scripts: {
        files: [
            'vendor/bower_components/jquery/dist/jquery.js',
            'vendor/bower_components/bootstrap/dist/js/bootstrap.js',
            'vendor/bower_components/\waypoints/lib/jquery.waypoints.js',
        ],
        dest: 'public/assets/js/',
        output: 'main.min.js',
    },
    styles: {
        files: [
            'vendor/bower_components/bootstrap/scss/**',
            'vendor/bower_components/css-hamburgers/_sass/*/**',
            'resources/sass/**'
        ],
        dest: 'public/assets/css/',
        output: 'app.min.css',
    },
    fonts: {
        files: [
            'vendor/bower_components/fontawesome/webfonts/**',
        ],
        dest: 'public/assets/fonts/',
    },
};

gulp.task('scripts', function() {
    return gulp.src(assets.scripts.files, { sourcemaps: false })
        .pipe(babel())
        .pipe(uglify())
        .pipe(concat(assets.scripts.output))
        .pipe(gulp.dest(assets.scripts.dest));
});

gulp.task('styles', function() {
    return gulp.src(assets.styles.files, { sourcemaps: false })
        .pipe(sass().on('error', sass.logError))
        .pipe(clean_css())
        .pipe(concat(assets.styles.output))
        .pipe(gulp.dest(assets.styles.dest));
});

gulp.task('fonts', function() {
    return gulp.src(assets.fonts.files, { sourcemaps: false })
        .pipe(gulp.dest(assets.fonts.dest));
});

gulp.task('default', gulp.parallel('scripts', 'styles', 'fonts'));
