'use strict';

var path = require('path');

module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    jshint: {
      all: ['src/**/*.js']
    },
    uglify: {
      options: {
        banner: '/*\nwp-tabs - <%= pkg.version %>\nSam Matthews & Creative Media Alliance\nhttps://github.com/cmaseattle/wp-tabs\n*/\n'
      },
      dist: {
        files: {
          'tabs.min.js': 'src/tabs.js'
        }
      }
    },
    cssmin: {
      minify: {
        expand: true,
        cwd: '/',
        src: ['src/*.css', 'src/!*.min.css'],
        dest: '/',
        ext: '.min.css'
      },
      add_banner: {
        options: {
          banner: '/*\nwp-tabs - <%= pkg.version %>\nSam Matthews & Creative Media Alliance\nhttps://github.com/cmaseattle/wp-tabs\n*/\n'
        },
        files: {
          'tabs.min.css': ['src/*.css']
        }
      }
    }
  });

  // Dependencies
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  // Tasks
  grunt.registerTask('default', ['jshint', 'uglify', 'cssmin']);
  grunt.registerTask('js', ['jshint', 'uglify']);
  grunt.registerTask('css', ['cssmin']);
};