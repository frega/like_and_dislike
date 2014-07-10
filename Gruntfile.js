module.exports = function(grunt) {

  grunt.initConfig({
    coffee: {
      compile: {
        expand: true,
        flatten: true,
        cwd: 'assets/coffee',
        src: ['*.coffee'],
        dest: 'assets/javascripts/',
        ext: '.js'
      },
    },
    watch: {
      scripts: {
        files: ['assets/coffee/*.coffee'],
        tasks: ['coffee', 'jshint']
      }
    },
    jshint: {
      all: ['Gruntfile.js', 'assets/javascripts/*']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-coffee');
  grunt.loadNpmTasks('grunt-contrib-jshint');

};