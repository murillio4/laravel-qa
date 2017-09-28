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
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 35);
/******/ })
/************************************************************************/
/******/ ({

/***/ 10:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 35:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(8);
module.exports = __webpack_require__(10);


/***/ }),

/***/ 8:
/***/ (function(module, exports) {

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.validator.setDefaults({
    ignore: ''
});

// mader jar, EN jævla setnign
tinymce.baseURL = window.location.origin + "/tinymce/";

// Initialize the app
tinymce.init({
    selector: '#q_content',
    plugins: 'code codesample emoticons link table wordcount image autolink contextmenu autosave',
    codesample_languages: [{ text: 'Bash', value: 'bash' }, { text: 'C', value: 'c' }, { text: 'C#', value: 'csharp' }, { text: 'C++', value: 'cpp' }, { text: 'CSS', value: 'css' }, { text: 'Git', value: 'git' }, { text: 'Go', value: 'go' }, { text: 'HTML/XML', value: 'markup' }, { text: 'Java', value: 'java' }, { text: 'JavaScript', value: 'javascript' }, { text: 'JSON', value: 'json' }, { text: 'LaTeX', value: 'latex' }, { text: 'Objective-C', value: 'objectivec' }, { text: 'PHP', value: 'php' }, { text: 'Python', value: 'python' }, { text: 'Ruby', value: 'ruby' }, { text: 'vim', value: 'vim' }, { text: 'Sass', value: 'scss' }, { text: 'SQL', value: 'sql' }, { text: 'Swift', value: 'swift' }],
    codesample_dialog_height: 600,
    codesample_dialog_width: 800,

    toolbar: 'bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | table image codesample | link emoticons',
    contextmenu: 'link image inserttable | cell row column deletetable',
    skin: 'lightgray',
    branding: false,
    menubar: false
});

$(document).ready(function () {
    $('#tags').tokenfield({
        limit: 5
    });

    $("form").each(function () {
        $(this).validate({
            errorElement: "span",
            errorClass: 'help-block',
            rules: {
                title: {
                    required: true,
                    minlength: 15,
                    maxlength: 150
                },
                q_content: {
                    required: true,
                    minlength: 30
                }
            },
            // Specify validation error messages
            messages: {
                title: {
                    required: "Title is missing",
                    minlength: "Title needs to be at least 5 characters long",
                    maxlength: "Title cannot be longer than 150 characters"
                },
                q_content: {
                    required: "Body is missing",
                    minlength: "Body must be at least 30 characters long"
                }
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function submitHandler(form) {
                form.submit();
            },

            highlight: function highlight(element, errorClass, validClass) {
                $(element).parent().addClass("has-error");
            },

            unhighlight: function unhighlight(element, errorClass, validClass) {
                $(element).parent().removeClass("has-error");
            }
        });
    });
});

/***/ })

/******/ });