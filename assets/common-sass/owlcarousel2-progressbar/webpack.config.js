const path = require('path');

module.exports = {
  mode: 'development',
  entry: './src/index.js',
  output: {
    filename: 'owlcarousel2-progressbar.js',
    library: 'owlCarousel2Progressbar',
    path: path.resolve(__dirname, 'dist')
  }
};
