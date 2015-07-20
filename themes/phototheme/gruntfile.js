
module.exports = function(grunt) {

	'use strict';

    require('load-grunt-tasks')(grunt);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		app: 'assets',
		dist: 'dist',

		sass: {
			options: {
				includePaths: ['<%= app %>/bower_components/foundation/scss']
			},
			dist: {
				options: {
					outputStyle: 'compressed',
				},
				files: {
					'<%= app %>/css/style.css': '<%= app %>/scss/style.scss'
				}
			}
		},


		watch: {
			grunt: {
				files: ['Gruntfile.js'],
				tasks: ['sass']
			},
			sass: {
				files: '<%= app %>/scss/**/*.scss',
				tasks: ['sass']
			},
			livereload: {
				files: ['<%= app %>/**/*.html', '!<%= app %>/bower_components/**', '<%= app %>/js/**/*.js', '<%= app %>/css/**/*.css', '<%= app %>/images/**/*.{jpg,gif,svg,jpeg,png}'],
				options: {
					livereload: true
				}
			}
		},



	});


	grunt.registerTask('compile-sass', ['sass']);

	grunt.registerTask('default', ['compile-sass', 'watch']);

};
