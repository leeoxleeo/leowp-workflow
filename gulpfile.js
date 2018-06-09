var gulp = require('gulp');

//plugins relacionados ao css
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minifycss = require('gulp-uglifycss');

//plugins relacionados ao javascript
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var babelify = require('babelify');
var browserify = require('browserify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var stripDebug = require('gulp-strip-debug');

//plugins relacionados as imagens
var imagemin = require('gulp-imagemin');
var spritesmith = require('gulp.spritesmith');

//plugins helpers
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
var options = require('gulp-options');
var gulpif = require('gulp-if');
var livereload = require('gulp-livereload');
var gutil = require('gulp-util');

//plugins relacionados ao navegador
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

//configurações de urls
var projectURL = 'http://localhost/projetos/wordpress/leowp_workflow';

var styleSRC = './dev/sass/*.scss';
var styleURL = './dist/css/';
var mapURL = './';

var jsSRC = './dev/js/';
var jsURL = './dist/js/';
var jsFront = 'main.js';
var jsFiles = [jsFront];

var imagesSRC = './dev/images/**/*';
var imagesURL = './dist/images/';

var styleWatch = './dev/sass/**/*.scss';
var jsWatch = './dev/js/**/*.js';
var imagesWatch = './dev/images/**/*.*';
var spritesWatch = './dev/images/sprites/**/*.*';
var phpWatch = './*.php';

var errorHandler = function () {
    // default appearance
    return plumber(function (error) {
        console.log(error.message);
        this.emit('end');
    });
};

//tarefas
gulp.task('browser-sync', function () {
    browserSync.init({
        open: false,
        injectChanges: true,
        proxy: projectURL,
        server: false,
        logSnippet: false,
        reloadDelay: 100,
        reloadDebounce: 100,
    });
});

// generate sprite.png and _sprite.scss
gulp.task('sprites', function () {
    var spriteData = gulp.src('dev/images/sprites/*.png').pipe(spritesmith({
        imgName: 'sprite.png',
        cssName: '../../dev/sass/_sprite.scss'
    }));
    return spriteData.pipe(gulp.dest('dist/images/'));
});

gulp.task('styles', function () {
    gulp.src([styleSRC])
        .pipe(errorHandler())
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'minified'
        }))
        .pipe(livereload())
        .pipe(autoprefixer({
            browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
        }))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(sourcemaps.write(mapURL))
        .pipe(gulp.dest(styleURL))
        .pipe(browserSync.stream());
});

gulp.task('default', ['styles', 'js', 'images'], function () {
    gulp.src(jsURL)
        .pipe(errorHandler())
        .pipe(notify({
            message: 'Assets Compiled!'
        }));
});

gulp.task('js', function () {
    jsFiles.map(function (entry) {
        return browserify({
                entries: [jsSRC + entry]
            })
            //.transform( babelify, { presets: [ 'es2015' ] } )
            .bundle()
            .pipe(source(entry))
            .pipe(rename({
                extname: '.min.js'
            }))
            .pipe(buffer())
            .pipe(gulpif(options.has('production'), stripDebug()))
            .pipe(sourcemaps.init({
                loadMaps: true
            }))
            .pipe(uglify())
            .pipe(sourcemaps.write('.'))
            .pipe(gulp.dest(jsURL))
            .pipe(browserSync.stream());
    });
});

gulp.task('images', function () {
    gulp.src('dev/images/*')
        .pipe(imagemin([
            imagemin.optipng({
                optimizationLevel: 5
            }),
            imagemin.jpegtran({
                progressive: true
            })
        ]))
        .pipe(livereload())
        .pipe(gulp.dest('dist/images'));
});

function triggerPlumber(src, url) {
    return gulp.src(src)
        .pipe(plumber())
        .pipe(gulp.dest(url));
};

gulp.task('default', ['styles', 'js', 'images', 'sprites'], function () {
    gulp.src(jsURL)
        .pipe(notify({
            message: 'Arquivos compilados!'
        }));
});

gulp.task('watch', ['default', 'browser-sync'], function () {
    gulp.watch(phpWatch, reload);
    gulp.watch(spritesWatch, ['sprites']);
    gulp.watch(styleWatch, ['styles', reload]);
    gulp.watch(jsWatch, ['js', reload]);
    gulp.watch(imagesWatch, ['images']);
    livereload.listen();
});