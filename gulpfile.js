var gulp        = require("gulp"),
    browserSync = require("browser-sync"),
    concatCss   = require("gulp-concat-css"),
    cleanCss    = require("gulp-clean-css"),
    del         = require("del");
    
    
gulp.task('sync', ['css'], function() {
    var files = ['**/*.css', '**/**.php', '**/**.js'];
    
    browserSync.init(files, {
        proxy: 'http://localhost/chrisperko',
        port: 8082,
        injectChanges: true,
        notify: false
    });

    gulp.watch('./inc/css/*.css', ['css']);
    gulp.watch('./**/*.php').on('change', browserSync.reload);
});


gulp.task('css', function() {
    gulp.src('inc/**/*.css')
        .pipe(concatCss('custom.css'))
        .pipe(gulp.dest('dist/'));

    return gulp.src('dist/custom.css')
        .pipe(cleanCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('dist/minified'))
        .pipe(browserSync.stream());
});