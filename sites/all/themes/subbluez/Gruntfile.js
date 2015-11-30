module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options: {
                    sourcemap: 'none'
                },
                files: {
                    'css/style.css': 'css/scss/style.scss',
                    'css/slider.css': 'css/scss/slider.scss'
                }
            }
        },
        concat: {
            options: {
                separator: ';'
            },
            css: {},
            js: {},
            cssVendor: {
                src: [
                    //'assets/vendor/bootstrap/dist/css/bootstrap.css',
                    'assets/vendor/font-awesome/css/font-awesome.css',
                ],
                dest: 'css/vendor.css'
            },
            jsVendor: {
                src: [
                    //'assets/vendor/jquery/dist/jquery.js',
                    'assets/vendor/bootstrap/dist/js/bootstrap.js', 
                ],
                dest: 'js/vendor.js'
            }
        },
        cssmin: {
            minify: {
                files: {
                    'css/style.min.css': 'css/style.css',
                    'css/vendor.min.css': 'css/vendor.css',
                    'css/slider.min.css': 'css/slider.css'
                }
            }
        },
        uglify: {
            options: {
                mangle: false
            },
            main: {
                files: [{
                    'js/vendor.min.js': 'js/vendor.js',
                    'js/script.min.js': 'js/script.js'
                }]
            }
        },
        watch: {
            css: {
                files: ['css/scss/**/*.scss'],
                tasks: ['sass', 'concat:css', 'cssmin']
            },
            js: {
                files: 'js/*.js',
                tasks: ['concat:js']
            }
        },
        copy: {
            main: {
                files: [
                    {
                        expand: true, 
                        flatten: true,
                        src: [
                            'assets/vendor/font-awesome/fonts/*', 
                            'assets/vendor/bootstrap/dist/fonts/*'
                        ], 
                        dest: 'fonts'
                    }
                ]
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.registerTask('default', ['watch']);
    grunt.registerTask('compile', ['concat:jsVendor', 'uglify']);
    grunt.registerTask('build', ['sass','concat:cssVendor','cssmin', 'compile']);
}