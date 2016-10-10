/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.l = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };

/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
/******/ 	};

/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};

/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {

eval("//jQuery to collapse the navbar on scroll\n$(window).scroll(function() {\n    if ($(\".navbar\").offset().top > 50) {\n        $(\".navbar-fixed-top\").addClass(\"top-nav-collapse\");\n    } else {\n        $(\".navbar-fixed-top\").removeClass(\"top-nav-collapse\");\n    }\n});\n\n//jQuery for page scrolling feature - requires jQuery Easing plugin\n$(function() {\n    $('a.page-scroll').bind('click', function(event) {\n        var $anchor = $(this);\n        $('html, body').stop().animate({\n            scrollTop: $($anchor.attr('href')).offset().top\n        }, 1500, 'easeInOutExpo');\n        event.preventDefault();\n    });\n});\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL3Njcm9sbGluZy1uYXYuanM/M2Y0MSJdLCJzb3VyY2VzQ29udGVudCI6WyIvL2pRdWVyeSB0byBjb2xsYXBzZSB0aGUgbmF2YmFyIG9uIHNjcm9sbFxuJCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbigpIHtcbiAgICBpZiAoJChcIi5uYXZiYXJcIikub2Zmc2V0KCkudG9wID4gNTApIHtcbiAgICAgICAgJChcIi5uYXZiYXItZml4ZWQtdG9wXCIpLmFkZENsYXNzKFwidG9wLW5hdi1jb2xsYXBzZVwiKTtcbiAgICB9IGVsc2Uge1xuICAgICAgICAkKFwiLm5hdmJhci1maXhlZC10b3BcIikucmVtb3ZlQ2xhc3MoXCJ0b3AtbmF2LWNvbGxhcHNlXCIpO1xuICAgIH1cbn0pO1xuXG4vL2pRdWVyeSBmb3IgcGFnZSBzY3JvbGxpbmcgZmVhdHVyZSAtIHJlcXVpcmVzIGpRdWVyeSBFYXNpbmcgcGx1Z2luXG4kKGZ1bmN0aW9uKCkge1xuICAgICQoJ2EucGFnZS1zY3JvbGwnKS5iaW5kKCdjbGljaycsIGZ1bmN0aW9uKGV2ZW50KSB7XG4gICAgICAgIHZhciAkYW5jaG9yID0gJCh0aGlzKTtcbiAgICAgICAgJCgnaHRtbCwgYm9keScpLnN0b3AoKS5hbmltYXRlKHtcbiAgICAgICAgICAgIHNjcm9sbFRvcDogJCgkYW5jaG9yLmF0dHIoJ2hyZWYnKSkub2Zmc2V0KCkudG9wXG4gICAgICAgIH0sIDE1MDAsICdlYXNlSW5PdXRFeHBvJyk7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgfSk7XG59KTtcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyByZXNvdXJjZXMvYXNzZXRzL2pzL3Njcm9sbGluZy1uYXYuanMiXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Iiwic291cmNlUm9vdCI6IiJ9");

/***/ }
/******/ ]);