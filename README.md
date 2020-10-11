# Custom WordPress theme, by Gonzalo Stoll

# Requirements
* [NodeJS](https://nodejs.org/)
* [npm](https://www.npmjs.com/get-npm)
* WordPress running on local server environment. Some options are:
    * [MAMP for Mac](https://www.mamp.info/en/mac/)
    * [MAMP for Windows](https://www.mamp.info/en/windows/)

## Start
From the theme folder, run `npm install` or `yarn` to install all dependencies.

### Development
To see it work, you must:

* Put the repository folder into the WordPress `themes` folder
* Go to the `webpack.config.js` file, find the **proxy** property under the BrowserSyncPlugin, and rename the url accordingly
* Start the local server environment
* From the theme folder, run `npm start` or `yarn start` to serve on dev mode

### Build for production
Run `npm run build` or `yarn build` to bundle it for production. This will create a bundled folder named `dist`, located on the root of the theme, with all the assets optimized and minified.

#### This theme has support for:

* jQuery

* Bootstrap

* Fontawesome 5

* Easing

* Woocommerce

* Thumbnails

* Primary menu

* Portfolio custom post type

* Logo uploader

* Social media icons
