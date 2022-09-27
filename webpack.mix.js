const mix = require('laravel-mix');

require('laravel-mix-tailwind');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the css
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.browserSync({
    proxy: process.env.APP_URL,
    notify: false
});

mix.js('resources/js/app.js', 'public/js').vue();

mix.postCss('resources/styles/app.pcss', 'public/css', [
    require("tailwindcss"),
])
.webpackConfig({
    // stats: {
    //     children: true,
    // },
    module: {
        rules: [
        {
            test: /\.(postcss)$/,
            use: [
            'vue-style-loader',
            { loader: 'css-loader', options: { importLoaders: 1 } },
            'postcss-loader'
            ]
        }
        ],
    },
});


mix.copyDirectory('resources/images', 'public/images')
mix.copyDirectory('resources/videos', 'public/videos')

if (mix.inProduction()) {
    mix.version();
}
