var gulp = require('gulp'),
watch = require('gulp-watch'),
browserSync = require('browser-sync').create();

gulp.task('watch', function() {

	browserSync.init({
		notify: false,
		browser: "chrome",
		proxy: "localhost/pss",
		tunnel: true,
		tunnel: "szkola"		
	});

	watch('./*.php', function() {
		browserSync.reload();
	});

	watch('./*.css', function() {
		gulp.start('cssInject');
	});

	watch('./app/assets/scripts/**/*.js', function() {
		gulp.start('scriptsRefresh');

	});

});


gulp.task('cssInject', function() {
	return gulp.src('./style.css')
	.pipe(browserSync.stream());
});

gulp.task('scriptsRefresh', ['scripts'], function() {
	browserSync.reload();

});