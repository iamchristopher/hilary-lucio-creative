const mix = require('laravel-mix');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const CopyWebpackPlugin = require('copy-webpack-plugin');
const ImageminJpegoptim = require('imagemin-jpegoptim');
const WebpackShellPlugin = require('webpack-shell-plugin');
const {
    join
} = require('path');

mix
    .js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .version();

mix.webpackConfig({
    plugins: [
        new CopyWebpackPlugin([{
            context: 'resources/assets/images',
            from: '**/*',
            to: 'images'
        }]),
        new ImageminPlugin({
            disable: process.env.NODE_ENV !== 'production',
            test: /\.(jpe?g|png|gif|svg)$/i,
            gifsicle: {
                interlaced: true
            },
            optipng: {
                optimizationLevel: 5
            },
            svgo: {
                plugins: [
                    {
                        cleanupIDs: false,
                        removeEmptyAttrs: false,
                        removeViewBox: false
                    }
                ]
            },
            jpegtran: null,
            plugins: [
                ImageminJpegoptim({
                    max: 85,
                    progressive: true
                })
            ]
        })
    ]
});
