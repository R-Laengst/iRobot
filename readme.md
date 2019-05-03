# A simple app to show you how easy it is to apply Material Theming using Material Components for the Web.

Remix It! Make changes in `app.scss` to see your theme get applied throughout the app.

**Changes the primary theme color**
```
$mdc-theme-primary: #880e4f;
```

**Changes the typography**
```
$mdc-typography-font-family: unquote("Montserrat, sans-serif");
$mdc-typography-styles-button: (
 font-size: 14px,
);
$mdc-typography-styles-headline6: (
 font-size: 20px,
);
```

**Changes the shape**
```
$mdc-shape-small-component-radius: 16px;
```

## Interested in learning more?
[Material Theming](http://bit.ly/2OGLLgI)
[Material Components for the Web](http://bit.ly/2B2rMWf)








####################################

# Material Starter Kit
## A file template to help you get started with Material Components for the Web

This file template sets up the `webpack` configuration and installs the `npm` packages required to get Material Components for the Web up and running. It simply displays a Material button that says "Hello World"!

- View it on [GitHub Pages](https://bonniezhou.github.io/material-starter-kit/)
- View it on [Glitch](https://glitch.com/~material-starter-kit)

## Build this project

### Run locally for development
1. From the root directory, run: 
```
npm install
npm start
```
> Note: This will use `webpack-dev-server` to run the project locally.
2. Point your browser to http://localhost:8080/

### Build for production
1. From the root directory, run: 
```
npm install
npm run-script build
```
> Note: This will update `bundle.js` and `bundle.css` in the `dist/` folder.
2. Open `index.html` in your browser


## Interested in learning more?
Check out the [Material Components for the Web](https://github.com/material-components/material-components-web) documentation to add more components and styling.

Read the full [Getting Started guide](https://github.com/material-components/material-components-web/blob/master/docs/getting-started.md)

[Material Theming](https://material.io/design/material-theming)

*Built with [Material Starter Kit](https://glitch.com/~material-starter-kit) a file template to get you up and running with Material Components for the Web. Remix it and start theming.*
