'use strict';

import gulp from 'gulp';
import pump from 'pump';
import sass from 'gulp-sass';
import babel from 'gulp-babel';
import cleanCSS from 'gulp-clean-css';
import concat from 'gulp-concat';
import autoprefixer from 'autoprefixer';
import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import uglify from 'gulp-uglify';
import include from 'gulp-include';

// Set up our paths
const dest = 'public';
const paths = {
    sass: {
        in: 'sass/**/*.scss',
        out: `${dest}/css/`
    },
    js: {
        in: 'es/**/*.js',
        out: `${dest}/js/`
    }
};

// `dev-css` task
gulp.task('dev-css', (callback) => {
    pump([
        gulp.src(paths.sass.in),
        sourcemaps.init(),
        sass(),
        postcss([autoprefixer()]),
        cleanCSS({
            format: 'beautify' // formats output in a really nice way
        }),
        sourcemaps.write('../maps'),
        gulp.dest(paths.sass.out)
    ], callback);
});

// `dev-js` task
gulp.task('dev-js', (callback) => {
    pump([
        gulp.src(paths.js.in),
        sourcemaps.init(),
        include(),
        babel({
            presets: ['env']
        }),
        concat('main.js'),
        sourcemaps.write('../maps'),
        gulp.dest(paths.js.out)
    ], callback);
});

// `default` task
gulp.task('default', ['build-live']);

// `build` task
gulp.task('build', ['dev-css', 'dev-js']);

// `build-dev` task
gulp.task('build-dev', ['build']);

// `build-live` task
gulp.task('build-live', ['build']);

// `watch` task
gulp.task('watch', ['dev-css', 'dev-js'], () => {
    gulp.watch([paths.sass.in], ['dev-css']);
    gulp.watch([paths.js.in], ['dev-js']);
});
