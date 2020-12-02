var gulp = require('gulp'),
  sass = require('gulp-sass');

gulp.task('sass', function () {
  return gulp
    .src(['*.scss'])
    .pipe(
      sass({
        outputStyle: 'expanded',
        errLogToConsole: true,
      })
    )
    .pipe(gulp.dest('./'));
});

gulp.task('watch', function () {
  gulp.watch(['./*.scss'], ['sass']);
});
