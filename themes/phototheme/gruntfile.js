
module.exports = function(grunt) {

	'use strict';

    require('load-grunt-tasks')(grunt);

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		app: 'assets',
		dist: 'dist',

		sass: {
			options: {
				includePaths: ['<%= app %>/bowercomponents/foundation/scss/','<%= app %>/bowercomponents/foundation/scss/foundation/']
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
			}
		},



	});


	grunt.registerTask('compile-sass', ['sass']);

	grunt.registerTask('default', ['compile-sass', 'watch']);

};
