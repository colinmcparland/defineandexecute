var gulp = require('gulp');  //loads the gulp node package
var sass = require('gulp-ruby-sass');
var cleanCSS = require('gulp-clean-css');

/*  CSS Tasks  */

gulp.task('compile-css', function()	{
	return sass('./style.scss')
	.pipe(gulp.dest('.'));
})

gulp.task('minify-css', function() {
  return gulp.src('./style.css')
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('.'));
});

// Watch task, compile CSS on changes
gulp.task('watch', function()	{
	gulp.watch('./style.scss', ['compile-css']); 
})

// Main Task
gulp.task('default', ['compile-css', 'watch']);
gulp.task('cssmin', ['minify-css']);
