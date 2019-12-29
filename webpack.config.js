const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const MODE = "production";

const enabledSourceMap = MODE === "development";

module.exports = {
    mode: MODE,
    entry: {
        "style": "./src/style.scss",
        "index": "./src/index.js"
    },
    output: {
        //  出力ディレクトリ
        // __dirnameは webpack.config.js があるディレクトリの絶対パス
        path: path.join(__dirname, './dist'),
 
        // 出力ファイル名
        // [name]はentryがハッシュの場合、keyで置換される
        filename: '[name]-[contentHash].js'
    },
    module: {
        rules: [
        {
            test: /\.js$/,
            exclude: /node_modules/,
            use: {
                loader: 'babel-loader'
            }
        },
        {
            test: /\.s[ac]ss$/i,
            use: [
                MiniCssExtractPlugin.loader,
                'css-loader',
                'sass-loader'
            ]
        },
        {
            test: /\.(jpe?g|png)$/,
            loaders: 'url-loader'    
        }
    ]},
    plugins: [
        new CleanWebpackPlugin({
            cleanOnceBeforeBuildPatterns: ['**/*.html','**/*.js','**/*.css']
        }),
        new MiniCssExtractPlugin({
            filename: './css/[name]-[contentHash].css',
        }),
        new HtmlWebpackPlugin({
            template: './src/index.html'
        })
    ]    
};