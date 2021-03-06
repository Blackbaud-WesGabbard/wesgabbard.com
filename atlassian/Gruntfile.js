module.exports = function(grunt) {
  'use strict';
  
  require('time-grunt')(grunt);
  
  var config = {}, 
  loadConfig = function(path) {
    var glob = require('glob'), 
    object = {}, 
    key;
    glob.sync('*', {
      cwd: path
    }).forEach(function(option) {
      key = option.replace(/\.js$/, '');
      object[key] = require(path + option);
    });
    return object;
  }, 
  runTargetedTask = function(tasks, taskTarget) {
    if(taskTarget) {
      for(var i = 0; i < tasks.length; i++) {
        if(config[tasks[i]][taskTarget]) {
          tasks[i] += ':' + taskTarget;
        }
      }
    }
    grunt.task.run(tasks);
  };
  
  grunt.util._.extend(config, loadConfig('./grunt/task/'));
  grunt.initConfig(config);
  
  require('load-grunt-tasks')(grunt);
  
  grunt.registerTask('html-dist', function(taskTarget) {
    runTargetedTask(['htmlmin'], taskTarget);
  });
  grunt.registerTask('css-dist', function(taskTarget) {
    runTargetedTask(['sass', 'cssmin'], taskTarget);
  });
  grunt.registerTask('js-dist', function(taskTarget) {
    runTargetedTask(['coffee', 'uglify'], taskTarget);
  });
  grunt.registerTask('json-dist', function(taskTarget) {
    runTargetedTask(['minjson'], taskTarget);
  });
  grunt.registerTask('default', ['watch']);
};