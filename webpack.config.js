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
    },
    output: {
        //  出力ディレクトリ
        // __dirnameは webpack.config.js があるディレクトリの絶対パス
        path: path.join(__dirname, './dist'),
 
        // 出力ファイル名
        // [name]はentryがハッシュの場合、keyで置換される
        //filename: '[name].bundle.js'
    },
    module: {
        rules: [
        {
            test: /\.s[ac]ss$/i,
            use: [
                MiniCssExtractPlugin.loader,
                'css-loader',
                'sass-loader',
            ],
        }
    ]},
    plugins: [
        new CleanWebpackPlugin(),
        new MiniCssExtractPlugin({
            filename: './css/[name]-[contentHash].css',
        }),
        new HtmlWebpackPlugin({
            template: './src/index.html'
        })
    ]    
};