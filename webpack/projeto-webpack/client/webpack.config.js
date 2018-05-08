const path = require('path');
// Utilizado para ...
const babiliPlugin = require('babili-webpack-plugin');
// Utilizado para separar do bundle.js o css.
const extractTextPlugin = require('extract-text-webpack-plugin');
// Utilizado para minificar css.
const optimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const webpack = require('webpack');
// Utilizado para gerar o html com referencias ao css e js.
const htmlPlugin = require('html-webpack-plugin');

let plugins = [];

plugins.push(new extractTextPlugin('style.css'));

plugins.push(new htmlPlugin({
    hash: true,
    minify: {
        html5: true,
        collapseWhitespace: true,
        removeComments: true
    },
    filename: 'index.html',
    template: __dirname + '/main.html'
}));

plugins.push(
    new webpack.ProvidePlugin({
        $: 'jquery/dist/jquery.js',
        jQuery: 'jquery/dist/jquery.js'
    })
);

/*
'process': acessa todos os módulos do node.js.
'process.env': acessa todas as variáveis ambiente.
 */
if (process.env.NODE_ENV === 'production') {
    // Habilita o Scope Hoisting
    plugins.push(new webpack.optimize.ModuleConcatenationPlugin());

    plugins.push(new babiliPlugin());
    plugins.push(new optimizeCSSAssetsPlugin({
        // Processador de minificação do css.
        cssProcessor: require('cssnano'),
        cssProcessorOptions: {
            discardComments: {
                // Remove comentários da minificação
                removeAll: true
            }
        },
        // Printa no console.
        canPrint: true
    }));
}

module.exports = {
    // Indica qual o principal arquivo a ser carregado.
    entry: './app-src/app.js',
    // Gera a saída em um arquivo.
    output: {
        filename: 'bundle.js',
        // Diretório para salvar o arquivo de saída.
        path: path.resolve(__dirname, 'dist')
    },
    module: {
        rules: [
            {
                // Indica qual extensão.
                test: /\.js$/,
                // Não inclui os arquivos .js do node_modules.
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader'
                }
            },
            {
                test: /\.css$/,
                use: extractTextPlugin.extract({
                    // Caso falhe, será usado o style-loader.
                    fallback: 'style-loader',
                    // Usará o css-loader se não ocorrer erros.
                    use: 'css-loader'
                })
            },
            /*
            Carrega fontes dependentes do bootstrap < 4.0
            Instalar: url-loader file-loader
            { 
                test: /\.(woff|woff2)(\?v=\d+\.\d+\.\d+)?$/, 
                loader: 'url-loader?limit=10000&mimetype=application/font-woff' 
            },
            { 
                test: /\.ttf(\?v=\d+\.\d+\.\d+)?$/, 
                loader: 'url-loader?limit=10000&mimetype=application/octet-stream'
            },
            { 
                test: /\.eot(\?v=\d+\.\d+\.\d+)?$/, 
                loader: 'file-loader' 
            },
            { 
                test: /\.svg(\?v=\d+\.\d+\.\d+)?$/, 
                loader: 'url-loader?limit=10000&mimetype=image/svg+xml' 
            }
            */
        ]
    },
    plugins
}