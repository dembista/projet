<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=WEBROOT.'stylesheets/screen.css'?>">
    <link rel="stylesheet" type="text/css" href="<?=WEBROOT.'css/style.css'?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hello, world!</title>
    <style>
      /* Welcome to Compass.
 * In this file you should write your main styles. (or centralize your imports)
 * Import this file using the following HTML or equivalent:
 * <link href="/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" /> */
@import url("https://fonts.googleapis.com/css?family=Nunito&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;1,100&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;1,100&display=swap");
/* line 5, ../../../../../../Users/mac/.rvm/rubies/ruby-3.0.0/lib/ruby/gems/3.0.0/gems/compass-core-1.0.3/stylesheets/compass/reset/_utilities.scss */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font: inherit;
  font-size: 100%;
  vertical-align: baseline;
}

/* line 22, ../../../../../../Users/mac/.rvm/rubies/ruby-3.0.0/lib/ruby/gems/3.0.0/gems/compass-core-1.0.3/stylesheets/compass/reset/_utilities.scss */
html {
  line-height: 1;
}

/* line 24, ../../../../../../Users/mac/.rvm/rubies/ruby-3.0.0/lib/ruby/gems/3.0.0/gems/compass-core-1.0.3/stylesheets/compass/reset/_utilities.scss */
ol, ul {
  list-style: none;
}

/* line 26, ../../../../../../Users/mac/.rvm/rubies/ruby-3.0.0/lib/ruby/gems/3.0.0/gems/compass-core-1.0.3/stylesheets/compass/reset/_utilities.scss */
table {
  border-collapse: collapse;
  border-spacing: 0;
}

/* line 28, ../../../../../../Users/mac/.rvm/rubies/ruby-3.0.0/lib/ruby/gems/3.0.0/gems/compass-core-1.0.3/stylesheets/compass/reset/_utilities.scss */
caption, th, td {
  text-align: left;
  font-weight: normal;
  vertical-align: middle;
}

/* line 30, ../../../../../../Users/mac/.rvm/rubies/ruby-3.0.0/lib/ruby/gems/3.0.0/gems/compass-core-1.0.3/stylesheets/compass/reset/_utilities.scss */
q, blockquote {
  quotes: none;
}
/* line 103, ../../../../../../Users/mac/.rvm/rubies/ruby-3.0.0/lib/ruby/gems/3.0.0/gems/compass-core-1.0.3/stylesheets/compass/reset/_utilities.scss */
q:before, q:after, blockquote:before, blockquote:after {
  content: "";
  content: none;
}

/* line 32, ../../../../../../Users/mac/.rvm/rubies/ruby-3.0.0/lib/ruby/gems/3.0.0/gems/compass-core-1.0.3/stylesheets/compass/reset/_utilities.scss */
a img {
  border: none;
}

/* line 116, ../../../../../../Users/mac/.rvm/rubies/ruby-3.0.0/lib/ruby/gems/3.0.0/gems/compass-core-1.0.3/stylesheets/compass/reset/_utilities.scss */
article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}

/* line 1, ../sass/partials/_login.scss */
html {
  height: 100%;
}

/* line 4, ../sass/partials/_login.scss */
.body1 {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}

/* line 11, ../sass/partials/_login.scss */
.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0, 0, 0, 0.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
  border-radius: 10px;
}

/* line 24, ../sass/partials/_login.scss */
.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

/* line 31, ../sass/partials/_login.scss */
.login-box .user-box {
  position: relative;
}

/* line 35, ../sass/partials/_login.scss */
.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

/* line 46, ../sass/partials/_login.scss */
.login-box .user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

/* line 57, ../sass/partials/_login.scss */
.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}

/* line 65, ../sass/partials/_login.scss */
.login-box form a {
  position: relative;
  display: inline-block;
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px;
}

/* line 79, ../sass/partials/_login.scss */
.login-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4, 0 0 25px #03e9f4, 0 0 50px #03e9f4, 0 0 100px #03e9f4;
}

/* line 89, ../sass/partials/_login.scss */
.login-box a span {
  position: absolute;
  display: block;
}

/* line 94, ../sass/partials/_login.scss */
.login-box a span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, rgba(0, 0, 0, 0), #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}
/* line 112, ../sass/partials/_login.scss */
.login-box a span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, rgba(0, 0, 0, 0), #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: 0.25s;
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}
/* line 131, ../sass/partials/_login.scss */
.login-box a span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, rgba(0, 0, 0, 0), #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: 0.5s;
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}
/* line 150, ../sass/partials/_login.scss */
.login-box a span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, rgba(0, 0, 0, 0), #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: 0.75s;
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
/* line 168, ../sass/partials/_login.scss */
.text {
  color: white;
}

/* line 171, ../sass/partials/_login.scss */
h2 {
  font-size: x-large;
}

/* line 13, ../sass/screen.scss */
table.GeneratedTable {
  width: 100%;
  background-color: #ffffff;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #03e9f4;
  border-style: solid;
  color: #000000;
}

/* line 23, ../sass/screen.scss */
table.GeneratedTable td,
table.GeneratedTable th {
  border-width: 2px;
  border-color: #03e9f4;
  border-style: solid;
  padding: 3px;
}

/* line 31, ../sass/screen.scss */
table.GeneratedTable thead {
  background-color: #03e9f4;
}

/* line 36, ../sass/screen.scss */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* line 42, ../sass/screen.scss */
body {
  background: #f5f6f7;
  font-family: "Nunito", sans-serif;
}

/* line 47, ../sass/screen.scss */
#select {
  width: 80%;
}

/* line 51, ../sass/screen.scss */
main {
  height: 100vh;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  position: relative;
}

/* line 61, ../sass/screen.scss */
.stepper {
  width: 20rem;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 5%;
}

/* line 70, ../sass/screen.scss */
.step--1,
.step--2,
.step--3,
.step--4 {
  width: 5rem;
  padding: 0.5rem 0;
  background: #fff;
  color: #666;
  text-align: center;
}

/* line 81, ../sass/screen.scss */
.step--1,
.step--2,
.step--3 {
  border-right: 1px solid #666;
}

/* line 87, ../sass/screen.scss */
.form {
  background: #fff;
  text-align: center;
  position: absolute;
  width: 25rem;
  box-shadow: 0.2rem 0.2rem 0.5rem rgba(51, 51, 51, 0.2);
  display: none;
  border-radius: 1rem;
  overflow: hidden;
}

/* line 98, ../sass/screen.scss */
.form--header-container {
  background: linear-gradient(to right, #333333, #919191);
  color: #fff;
  height: 6rem;
  padding: 1rem 0;
  margin-bottom: 2rem;
}

/* line 106, ../sass/screen.scss */
.form--header-title {
  font-size: 1.4rem;
}

/* line 110, ../sass/screen.scss */
.form--header-text {
  padding: 0.5rem 0;
}

/* line 114, ../sass/screen.scss */
input[type="text"] {
  padding: 0.8rem;
  margin: auto;
  margin-top: 0.5rem;
  width: 20rem;
  display: block;
  border-radius: 0.5rem;
  outline: none;
  border: 1px solid #bdbdbb;
}

/* line 125, ../sass/screen.scss */
.form__btn {
  background: #333;
  color: #fff;
  outline: none;
  border: none;
  padding: 0.5rem 0.7rem;
  width: 7rem;
  margin: 1rem auto;
  border-radius: 0.9rem;
  text-transform: uppercase;
  font-weight: 700;
  cursor: pointer;
}

/* line 139, ../sass/screen.scss */
.form--message-text {
  width: 25rem;
  background: #fff;
  color: #444;
  padding: 2rem 1rem;
  text-align: center;
  font-size: 1.4rem;
  box-shadow: 0.2rem 0.2rem 0.5rem rgba(51, 51, 51, 0.2);
  animation: fadeIn 0.8s;
  border-radius: 1rem;
}

/* line 151, ../sass/screen.scss */
.form-active {
  z-index: 1000;
  display: block;
}

/* line 156, ../sass/screen.scss */
.form-active-animate {
  animation: moveRight 1s;
}

/* line 160, ../sass/screen.scss */
.form-inactive {
  display: block;
  animation: moveLeft 1s;
}

/* line 165, ../sass/screen.scss */
.step-active {
  background: #666;
  color: #fff;
  border: 1px solid #666;
}

@keyframes moveRight {
  0% {
    transform: translateX(-27rem) scale(0.9);
    opacity: 0;
  }
  100% {
    transform: translateX(0rem) scale(1);
    opacity: 1;
  }
}
@keyframes moveLeft {
  0% {
    transform: translateX(0rem) scale(1);
    opacity: 1;
  }
  100% {
    transform: translateX(27rem) scale(0.9);
    opacity: 0;
  }
}
@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
/* line 203, ../sass/screen.scss */
:root {
  --success-color: #2ecc71;
  --error-color: #e74c3c;
}

/* line 208, ../sass/screen.scss */
* {
  box-sizing: border-box;
}

/* line 212, ../sass/screen.scss */
.container {
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
  width: 400px;
}

/* line 219, ../sass/screen.scss */
h2 {
  text-align: center;
  margin: 0 0 20px;
}

/* line 236, ../sass/screen.scss */
.form-control.success input {
  border-color: var(--success-color);
}

/* line 240, ../sass/screen.scss */
.form-control.error input {
  border-color: var(--error-color);
}

/* line 244, ../sass/screen.scss */
.form-control small {
  color: var(--error-color);
  position: absolute;
  bottom: 0;
  left: 0;
  visibility: hidden;
}

/* line 252, ../sass/screen.scss */
.form-control.error small {
  visibility: visible;
}

/* line 257, ../sass/screen.scss */
:root {
  --modal-duration: 10s;
  --primaty-color: #bd2174;
  --secondary-color: #65CDEB;
}

/* line 263, ../sass/screen.scss */
* {
  box-sizing: border-box;
}

/* line 267, ../sass/screen.scss */
body {
  font-family: 'Lato,', 'sans-serif';
  margin: 0;
  transition: transform 0.5s ease;
}

/* -------------side Bar----------------------- */
/* line 276, ../sass/screen.scss */
nav {
  background-color: var(--primaty-color);
  border-right: 2px solid rgba(200, 200, 200, 0.1);
  color: white;
  position: fixed;
  top: 0;
  left: 0;
  width: 200px;
  height: 125vh;
  z-index: 100;
  transform: translateX(-100%);
}

/* line 289, ../sass/screen.scss */
nav .logo {
  padding: 30px 0;
  text-align: center;
}

/* line 294, ../sass/screen.scss */
nav .logo img {
  height: 75px;
  width: 75px;
  border-radius: 50%;
}

/* line 300, ../sass/screen.scss */
nav ul {
  padding: 0;
  list-style: none;
  margin: 0;
}

/* line 306, ../sass/screen.scss */
nav ul li {
  border-bottom: 2px solid rgba(200, 200, 200, 0.3);
  width: 95%;
  padding: 20px;
}

/* line 312, ../sass/screen.scss */
nav ul li:first-of-type {
  border-bottom: 2px solid rgba(200, 200, 200, 0.3);
}

/* line 316, ../sass/screen.scss */
nav ul li a {
  color: white;
  text-decoration: none;
  font-weight: bold;
}

/* line 322, ../sass/screen.scss */
nav ul li a:hover {
  text-decoration: underline;
}

/* line 326, ../sass/screen.scss */
body.show-nav {
  transform: translateX(200px);
}

/* ------------------header---------------- */
/* line 333, ../sass/screen.scss */
header {
  background-color: var(--secondary-color);
  color: white;
  font-size: 110%;
  position: relative;
  padding: 40px 15px;
  text-align: center;
}

/* line 342, ../sass/screen.scss */
header h1 {
  margin: 0;
  font-size: 2.5rem;
  font-weight: 600;
}

/* line 348, ../sass/screen.scss */
header p {
  margin: 30px 0;
}

/* line 352, ../sass/screen.scss */
button {
  background-color: #bd2174;
  border: 0;
  border-radius: 5px;
  color: white;
  cursor: pointer;
  padding: 8px 12px;
}

/* line 361, ../sass/screen.scss */
button :focus {
  outline: none;
}

/* line 365, ../sass/screen.scss */
.toggle {
  background-color: rgba(0, 0, 0, 0.3);
  position: absolute;
  left: 20px;
  top: 20px;
}

/* line 372, ../sass/screen.scss */
.cta-btn {
  padding: 12px 30px;
  font-size: 20px;
}

/* line 377, ../sass/screen.scss */
.container {
  padding: 15px;
  max-width: 100%;
  width: 800px;
  margin: 0 auto;
}

/* line 384, ../sass/screen.scss */
.modal-container {
  background-color: rgba(0, 0, 0, 0.6);
  display: none;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

/* line 394, ../sass/screen.scss */
.modal-container.show-modal {
  display: block;
}

/* line 398, ../sass/screen.scss */
.modal {
  background-color: white;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  width: 400px;
  animation-name: modal_open;
  animation-duration: var(--modal-duration);
}

/* line 411, ../sass/screen.scss */
.modal-header {
  background-color: var(--primaty-color);
  color: white;
  padding: 15px;
}

/* line 417, ../sass/screen.scss */
.modal-header h3 {
  margin: 0;
  border-bottom: 1px solid #333;
}

/* line 422, ../sass/screen.scss */
.modal-content {
  padding: 20px;
}

/* line 426, ../sass/screen.scss */
.modal-content div {
  margin: 15px 0;
}

/* line 430, ../sass/screen.scss */
.modal-content label {
  display: block;
  margin-bottom: 5px;
}

/* line 435, ../sass/screen.scss */
.modal-content .form-input {
  padding: 8px;
  width: 100%;
}

/* line 440, ../sass/screen.scss */
.close-btn {
  background-color: transparent;
  font-size: 25px;
  position: absolute;
  top: 0;
  right: 0;
}

/* line 448, ../sass/screen.scss */
#logo {
  height: 40px;
  border-radius: 50%;
}

/* i{
    background-color: black;
} */
/* line 456, ../sass/screen.scss */
.dec {
  color: white;
}

/* line 460, ../sass/screen.scss */
#ul {
  margin-top: -23px;
}

/* Annimation css */
@keyframes modal_open {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
    transform: translate(-50%, -50%);
  }
}
/* line 480, ../sass/screen.scss */
#ds {
  bottom: 100px;
  height: 110vh;
  margin-top: 240px;
}

/* line 485, ../sass/screen.scss */
#ch {
  bottom: 50px;
  height: 58vh;
  margin-top: 110px;
}

/* line 490, ../sass/screen.scss */
#pv {
  bottom: 50px;
  height: 58vh;
  margin-top: 110px;
}

    </style>
    <script>
      // var valeur;
// if (document.getElementById('choix1').checked) {
//     valeur = document.getElementById('choix1').value;
// }
// var radios = document.getElementsByName('choix');
// var valeur;
// for (var i = 0; i < boutons.length; i++) {
//     if (boutons[i].checked) {
//         valeur = boutons[i].value;
//     }
// }
// const toggle = document.getElementById("toggle");
// const close = document.getElementById("close");
// const open = document.getElementById("open");
// const modal = document.getElementById("modal");

// toggle.addEventListener('click', () => document.body.classList.toggle("show-nav"));
//open.addEventListener('click', () => modal.classList.toggle("show-modal"));
//close.addEventListener('click', () => modal.classList.remove("show-modal"));
//window.addEventListener('click', (e) => e.target == modal ? modal.classList.remove("show-modal") : false);
    </script>
  </head>
  