const path = require('path');
const PACKAGE = require('./package.json');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const TerserJSPlugin = require('terser-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;

const devMode = process.env.NODE_ENV !== 'production';

module.exports = (env, argv) => ({
	entry: {
		app: './src/scripts/app.js',
	},
	output: {
		filename: '[name].js',
		path: path.resolve(__dirname, 'dist/js'),
		chunkFilename: '[name].[chunkhash].js',
		publicPath: './dist/js/',
	},
	devtool: 'cheap-source-map',
	mode: 'development',
	module: {
		rules: [
			{
				test: /\.js$/,
				use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env'],
                        compact: false
                    },
                }
			},
			{
				test: /\.(sa|sc|c)ss$/,
				use: [
					{
						loader: MiniCssExtractPlugin.loader,
					},
					'css-loader',
					'sass-loader',
				],
			},
			{
				test: /\.(jpg|png|gif|svg)/,
				use: {
					loader: 'url-loader',
					options: {
						outputPath: '../images/',
						name: '[name].[ext]',
						limit: 8192,
						// Fallback options
						fallback: 'file-loader',
						outputPath: '../images/',
						publicPath: '../../dist/images',
						name: '[name].[ext]',
					},
				},
			},
		],
	},
	resolve: {
		alias: {
			assets: path.resolve(__dirname, 'src/images'),
		},
	},
	optimization: {
		minimize: process.env.NODE_ENV === 'development' ? false : true,
		minimizer: [new TerserJSPlugin({})],
	},
	plugins: [
		new CleanWebpackPlugin(),
		new MiniCssExtractPlugin({
			filename: devMode
				? '../css/[name].css'
				: '../css/[name].[hash].css',
			chunkFilename: devMode
				? '../css/[id].css'
				: '../css/[id].[hash].css',
			publicPath: './dist/css/',
		}),
		new BrowserSyncPlugin({
			host: 'localhost',
			port: 3000,
			watch: true,
			files: ['**/*.php', 'dist/js/*.js', 'dist/css/*.css'],
			proxy: `http://localhost/${PACKAGE.name}`,
		}),
		new ImageminPlugin({ test: /\.(jpe?g|png|gif|svg)$/i }),
	],
});
