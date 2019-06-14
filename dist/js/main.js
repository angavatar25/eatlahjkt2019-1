/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/main.js":
/*!***************************!*\
  !*** ./assets/js/main.js ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports) {

/* ==========================================================================
   General
   ========================================================================== */

/* Viewport Animations
-------------------------------------------------- */
$(document).ready(function () {
  // Attention Seekers
  $('.vp-pulse').viewportChecker({
    classToAdd: 'visible animated pulse',
    offset: 100
  });
  $('.vp-swing').viewportChecker({
    classToAdd: 'visible animated swing',
    offset: 100
  }); // Fade In

  $('.vp-fadein').viewportChecker({
    classToAdd: 'visible animated fadeIn',
    offset: 100
  });
  $('.vp-fadeinup').viewportChecker({
    classToAdd: 'visible animated fadeInUp',
    offset: 100
  });
  $('.vp-fadeinright').viewportChecker({
    classToAdd: 'visible animated fadeInRight',
    offset: 100
  });
  $('.vp-fadeindown').viewportChecker({
    classToAdd: 'visible animated fadeInDown',
    offset: 100
  });
  $('.vp-fadeinleft').viewportChecker({
    classToAdd: 'visible animated fadeInLeft',
    offset: 100
  }); // Slide In

  $('.vp-slideinup').viewportChecker({
    classToAdd: 'visible animated slideInUp',
    offset: 100
  });
  $('.vp-slideinright').viewportChecker({
    classToAdd: 'visible animated slideInRight',
    offset: 100
  });
  $('.vp-slideindown').viewportChecker({
    classToAdd: 'visible animated slideInDown',
    offset: 100
  });
  $('.vp-slideinleft').viewportChecker({
    classToAdd: 'visible animated slideInLeft',
    offset: 100
  }); // Rotate In

  $('.vp-rotatein').viewportChecker({
    classToAdd: 'visible animated rotateIn',
    offset: 100
  });
  $('.vp-rotateinupright').viewportChecker({
    classToAdd: 'visible animated rotateInUpRight',
    offset: 100
  });
  $('.vp-rotateinupleft').viewportChecker({
    classToAdd: 'visible animated rotateInUpLeft',
    offset: 100
  });
  $('.vp-rotateindownright').viewportChecker({
    classToAdd: 'visible animated rotateInDownRight',
    offset: 100
  });
  $('.vp-rotateindownleft').viewportChecker({
    classToAdd: 'visible animated rotateInDownLeft',
    offset: 100
  }); // Zoom In

  $('.vp-zoomin').viewportChecker({
    classToAdd: 'visible animated zoomIn',
    offset: 100
  });
  $('.vp-zoominup').viewportChecker({
    classToAdd: 'visible animated zoomInUp',
    offset: 100
  });
  $('.vp-zoominright').viewportChecker({
    classToAdd: 'visible animated zoomInRight',
    offset: 100
  });
  $('.vp-zoomindown').viewportChecker({
    classToAdd: 'visible animated zoomInDown',
    offset: 100
  });
  $('.vp-zoominleft').viewportChecker({
    classToAdd: 'visible animated zoomInLeft',
    offset: 100
  }); // Specials

  $('.vp-jackinthebox').viewportChecker({
    classToAdd: 'visible animated jackInTheBox',
    offset: 100
  });
  $('.vp-rollin').viewportChecker({
    classToAdd: 'visible animated rollIn',
    offset: 100
  });
  $('.vp-rollout').viewportChecker({
    classToAdd: 'visible animated rollOut',
    offset: 100
  });
});
/* Smooth Scroll
-------------------------------------------------- */

$('a.smooth-scroll').click(function () {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top - 60
      }, 800);
      return false;
    }
  }
});
$(document).ready(function () {
  if (window.location.hash == "#about") {
    $('html, body').animate({
      scrollTop: $("#about").offset().top - 60
    }, 800);
  } else if (window.location.hash == "#menu") {
    $('html, body').animate({
      scrollTop: $("#menu").offset().top - 60
    }, 800);
  } else if (window.location.hash == "#location") {
    $('html, body').animate({
      scrollTop: $("#location").offset().top - 60
    }, 800);
  } else if (window.location.hash == "#contact") {
    $('html, body').animate({
      scrollTop: $("#contact").offset().top - 60
    }, 800);
  }
});
/* ==========================================================================
   Navbar
   ========================================================================== */

/* Navbar Scroll
-------------------------------------------------- */

var logo = ["assets/img/brand/logo_projectname-dark.png", "assets/img/brand/logo_projectname-light.png"];
$(window).on("scroll", function () {
  if ($(window).scrollTop() > 10) {
    $(".navbar-projectname").addClass("navbar-scroll");
    $('.navbar-projectname .navbar-brand img').attr('src', logo[0]);
  } else {
    //remove the background property so it comes transparent again (defined in your css)
    $(".navbar-projectname").removeClass("navbar-scroll");
    $('.navbar-projectname .navbar-brand img').attr('src', logo[1]);
  }
});

/***/ }),

/***/ "./assets/scss/main.scss":
/*!*******************************!*\
  !*** ./assets/scss/main.scss ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/dist/cjs.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/lib/loader.js):\nError: ENOENT: no such file or directory, open '/Users/engengeng/Documents/Antikode/eatlah-laravel/assets/scss/main.scss'\n    at runLoaders (/Users/engengeng/Documents/Antikode/eatlah-laravel/node_modules/webpack/lib/NormalModule.js:301:20)\n    at /Users/engengeng/Documents/Antikode/eatlah-laravel/node_modules/loader-runner/lib/LoaderRunner.js:367:11\n    at /Users/engengeng/Documents/Antikode/eatlah-laravel/node_modules/loader-runner/lib/LoaderRunner.js:203:19\n    at process.nextTick (/Users/engengeng/Documents/Antikode/eatlah-laravel/node_modules/enhanced-resolve/lib/CachedInputFileSystem.js:73:15)\n    at process._tickCallback (internal/process/next_tick.js:61:11)");

/***/ }),

/***/ 0:
/*!*********************************************************!*\
  !*** multi ./assets/js/main.js ./assets/scss/main.scss ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/engengeng/Documents/Antikode/eatlah-laravel/assets/js/main.js */"./assets/js/main.js");
module.exports = __webpack_require__(/*! /Users/engengeng/Documents/Antikode/eatlah-laravel/assets/scss/main.scss */"./assets/scss/main.scss");


/***/ })

/******/ });