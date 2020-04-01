# Custom WordPress theme, by Gonzalo Stoll

# Requirements
* [NodeJS](https://nodejs.org/)
* [npm](https://www.npmjs.com/get-npm)
* [Gulp](https://gulpjs.com/docs/en/getting-started/quick-start)
* WordPress running on local server environment
    * [MAMP for Mac](https://www.mamp.info/en/mac/)
    * [MAMP for Windows](https://www.mamp.info/en/windows/)

## Start
From the theme folder, run `npm install` to install all dependencies.

### Development
To see it work, you must:

* Put the repository folder into the WordPress `themes` folder
* Go to the `gulpfile.babel.js` file, and rename the **proxy** url with the url of your site
* Start the local server environment
* From the theme folder, run `npm start` to serve on dev mode

### Build for production
Run `npm run build` to bundle it for production.

#### This theme has support for:

* jQuery

* Bootstrap

* Aos plugin (animate on scroll)

* Fontawesome 5

* Easing

* LazyLoad

* Woocommerce

* Thumbnails

* Primary menu

* Portfolio custom post type

* Logo uploader

* Social media icons