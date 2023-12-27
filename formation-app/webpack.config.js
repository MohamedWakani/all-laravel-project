// webpack.config.js
const path = require('path');

module.exports = {
  entry: './src/index.js', // The entry point of your application
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist'), // The output directory
  },
};
