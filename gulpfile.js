var phpunit = require('gulp-phpunit');
 
var gulp = require('gulp'),
    notify  = require('gulp-notify'),
    phpunit = require('gulp-phpunit');
 
function testNotification(status, pluginName, override) {
    var options = {
        title:   ( status == 'pass' ) ? 'Tests Passed' : 'Tests Failed',
        message: ( status == 'pass' ) ? '\n\nAll tests have passed green!\n\n' : '\n\nOne or more tests failed...\n\n',
        icon:    __dirname + '/node_modules/gulp-' + pluginName +'/assets/test-' + status + '.png'
    };
    // options = _.merge(options, override);
  return options;
}

gulp.task('phpunit', function() {
    var options = {debug: true , notify: true};
    gulp.src('phpunit.xml')
    .pipe(phpunit('./vendor/bin/phpunit',options))
    .on('error', notify.onError(testNotification('fail', 'phpunit')))
    .pipe(notify(testNotification('pass', 'phpunit')));
});


gulp.task('watch', function() {
    gulp.watch(['tests/**/*.php', 'src/**/*.php'], ['phpunit']);
});

gulp.task('default', ['watch','phpunit']);