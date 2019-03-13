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
/******/ 	return __webpack_require__(__webpack_require__.s = 8);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/sexyslider.js":
/*!************************************!*\
  !*** ./resources/js/sexyslider.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// I'm kinda tempted to turn this into a jquery/css plugin
$(document).ready(function () {
  Math.seedrandom('pr'); // Make Math.random seed based
  // Set timers and intervals

  var slideInterval = 5000,
      transTimer = 2500; // Init vars

  var compact = $("#container").hasClass("compact");
  var contentAmt = $("#container .content").length; // Number of slides

  var loop = true; // HEX TO RGB FUNCTION

  function hexToRgb(hex) {
    var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? {
      r: parseInt(result[1], 16),
      g: parseInt(result[2], 16),
      b: parseInt(result[3], 16)
    } : null;
  } // Styling


  var dullcolors = ["#f44336", "#ec407a", "#ab47bc", "#7e57c2", "#3f51b5", "#2196f3", "#4fc3f7", "#00bcd4", "#66bb6a", "#aed581", "#e6ee9c", "#fff176", "#ffca28", "#ffa726", "#ff5722"],
      fullcolors = ["#8d6e63", "#f50057", "#d500f9", "#651fff", "#3d5afe", "#2979ff", "#00b0ff", "#00e5ff", "#1de9b6", "#00e676", "#76ff03", "#c6ff00", "#ffea00", "#ffc400", "#ff9100", "#ff3d00"]; // Color each slide

  $(".content").each(function () {
    var bg_img = $(this).attr("data-bg"),
        color1 = hexToRgb(dullcolors[Math.floor(Math.random() * dullcolors.length)]),
        color2 = hexToRgb(fullcolors[Math.floor(Math.random() * fullcolors.length)]),
        darken = 150;
    $(this).css({
      "background": "linear-gradient(135deg, rgba(" + parseInt(color1.r - darken) + "," + parseInt(color1.g - darken) + "," + parseInt(color1.b - darken) + ",0.7), rgba(" + color2.r + "," + color2.g + "," + color2.b + ",0.5)), url(" + bg_img + ")"
    });
  }); // Functionality

  if (loop) {
    var repeat = setInterval(changeSlide, slideInterval);
  } // Hide or show left right controls | only compact supports those


  if (compact == true) {
    $(".slide-left, .slide-right").show();
  } else {
    $(".slide-left, .slide-right").hide();
  } // Play/pause button click


  $(".playbutton").on("click", function () {
    if ($(this).hasClass("paused")) {
      $(this).removeClass("paused");
      repeat = setInterval(changeSlide, slideInterval);
    } else {
      $(this).addClass("paused");
      clearInterval(repeat);
    } // END if/else

  }); // END onClick
  // Physical clicking | Content panels

  $(".content").on("click", function () {
    clearInterval(repeat); // Clear the interval | pause, basically

    $(".playbutton").addClass("paused"); // add the paused class | visual shit

    changeSlide($(this).attr("data-slide"), "clicked"); // changeSlide
  }); // END onClick

  $(".slide-left, .slide-right").on("click", function () {
    var slide = parseInt($("#container .content.active").attr("data-slide"));

    if ($(this).hasClass("slide-left")) {
      slide--;
      console.log(slide);

      if (slide == 0) {
        slide = contentAmt;
      }
    } else {
      slide++;

      if (slide > contentAmt) {
        slide = 1;
      }
    }

    $(".playbutton").addClass("paused");
    clearInterval(repeat);
    changeSlide(slide, "clicked");
  }); // FUNCTIONS -------
  // changeSlide() function

  function changeSlide(clicked, method) {
    var compact = $("#container").hasClass("compact"); // If compact is added
    // If natural, and not clicked called

    if (method != "clicked") {
      // Figure slides
      var currentSlide = $("#container .content.active").attr("data-slide");
      var nextSlide = parseInt(currentSlide) + 1; // Check if last slide

      if (nextSlide > contentAmt) {
        nextSlide = 1; // Set next slide to be the first slide
        // Mobile/Fullscreen end slide transition | show all for a time

        if (compact == true) {
          // Transitioney stuff
          $("#container .content:not(.active)").addClass("transition");
          setTimeout(function () {
            $("#container .content").removeClass("transition");
          }, transTimer);
        }
      }
    } else {
      // If clicked, not natural
      nextSlide = clicked;
    } // END if/else
    //Remove and add the active class | Make the slides slide


    $("#container .content").removeClass("active");
    $("#container .content[data-slide='" + nextSlide + "']").addClass("active");
  } // END function

}); // END .ready

/***/ }),

/***/ 8:
/*!******************************************!*\
  !*** multi ./resources/js/sexyslider.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\JJInternational\BellsFerry\BellsFerryDev\resources\js\sexyslider.js */"./resources/js/sexyslider.js");


/***/ })

/******/ });