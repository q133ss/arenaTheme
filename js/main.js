/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/burger.js":
/*!**************************!*\
  !*** ./src/js/burger.js ***!
  \**************************/
/***/ (function() {

eval("\n\n//# sourceURL=webpack://gulp-config/./src/js/burger.js?");

/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ (function() {

eval("\n\n//# sourceURL=webpack://gulp-config/./src/js/main.js?");

/***/ }),

/***/ "./src/js/slider.js":
/*!**************************!*\
  !*** ./src/js/slider.js ***!
  \**************************/
/***/ (function() {

eval("\r\nconst mainArenaSlider = document.querySelector(\".main-arena__slider\");\r\n\r\nconst mainSliderConfig = {\r\n  slidesPerView: 4,\r\n  spaceBetween: 20,\r\n  centerMode: true,\r\n\r\n  pagination: {\r\n      el: \".main-arena__pagination\",\r\n      type: \"bullets\",\r\n      clickable: true,\r\n    },\r\n\r\n  navigation: {\r\n    nextEl: '.main-arena__next',\r\n    prevEl: '.main-arena__prev',\r\n  },\r\n  \r\n}\r\n\r\nnew Swiper(mainArenaSlider, mainSliderConfig);\r\n\n\n//# sourceURL=webpack://gulp-config/./src/js/slider.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_modules__["./src/js/burger.js"]();
/******/ 	__webpack_modules__["./src/js/main.js"]();
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/js/slider.js"]();
/******/ 	
/******/ })()
;