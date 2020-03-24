# Custom WordPress theme, by Gonzalo Stoll

# Requirements
* [NodeJS](https://nodejs.org/)
* [npm](https://www.npmjs.com/get-npm)
* [Gulp](https://gulpjs.com/docs/en/getting-started/quick-start)
* Local server environment
    * [MAMP for Mac](https://www.mamp.info/en/mac/)
    * [MAMP for Windows](https://www.mamp.info/en/windows/)

## Start
From the theme folder, run `npm install` to install all dependencies.

### Development
From the theme folder, run `npm start` to serve on dev mode. This will serve up the website on `http://localhost:3000/custom_wordpress_theme`. To see it work, put the repository folder into the WordPress `themes` folder. Make sure the WordPress folder is on the root of the `htdocs` folder, and the Server environment is running.

### Build for production
Run `npm run build` to bundle it for production.

#### This theme has support for:

* Thumbnails

* Primary menu

* Custom post type

* jQuery

* Bootstrap

* Aos plugin (animate on scroll)

* Logo uploader

* Social media icons

* Fontawesome 5

* Easing

* LazyLoad