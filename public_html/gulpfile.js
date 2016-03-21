/* WP Gulpfile */
var gulp = require('gulp');
var theme_folder    = 'template';

var rename          = require('gulp-rename');
var uglify          = require('gulp-uglify');
var concat          = require('gulp-concat');
var gulpIgnore      = require('gulp-ignore');
var less            = require('gulp-less');
var plumber         = require('gulp-plumber');
var sourcemaps      = require('gulp-sourcemaps');
var notifier        = require("node-notifier");
var notify          = require("gulp-notify");
var autoprefixer    = require('gulp-autoprefixer');

var root = './wp-content/themes/' + theme_folder;

var dist_path       = root + '/assets/dist';

var js_plugin_path  = './bower_components/';
var js_script_path  = root + '/assets/js/';

var js_files = [
    js_plugin_path + 'jquery/dist/jquery.js',
    js_plugin_path + 'bootstrap/dist/js/bootstrap.js',
    js_plugin_path + 'moment/min/moment-with-locales.js',
    js_plugin_path + 'highcharts/highcharts.src.js',
    js_plugin_path + 'highcharts/highcharts-more.src.js',
    js_plugin_path + 'matchHeight/dist/jquery.matchHeight.js',

    js_script_path + 'disable-noconflict.js',
    js_script_path + 'default.js',
    js_script_path + 'graph.js',
];

/* process the js files and make it a minified js */
gulp.task('js', function() {
    gulp.src(js_files)
        .pipe(plumber({
            errorHandler: onError
        }))
        .pipe(sourcemaps.init())
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(sourcemaps.write("./"))
        .pipe(gulp.dest(dist_path));
});

/* process the less file and make it a minified css */
gulp.task('less', function() {
    gulp.src(root + '/assets/less/main.less')
        .pipe(plumber({
            errorHandler: onError
        }))
        .pipe(sourcemaps.init())
        .pipe(less({
            compress: true,
        }))
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(rename({
            basename: 'main',
            suffix: '.min'
        }))
        .pipe(sourcemaps.write("./"))
        .pipe(gulp.dest(dist_path));
});

gulp.task('fonts', function() {
    return gulp.src(['bower_components/bootstrap/dist/fonts/*.*'])
        .pipe(gulp.dest(root + '/assets/fonts'));
});

gulp.task('build', function() {
    gulp.start('less', 'js');
});

/* look for changes in the less folder */
gulp.task('default', function() {
    notifier.notify({
        title: 'Gulp',
        message: 'Gulp is up and running!',
        wait: false
    });

    gulp.watch(root + '/assets/js/*.js', ['js']);
    gulp.watch(root + '/assets/less/**/*.less', ['less']);
});

var onError = function (err) {
    notifier.notify({
        title: 'Gulp',
        message: 'Error while compiling',
        wait: false
    });

    console.log(err);
};
