# PHP / Vue Music Player
> Show a music player album collection using PHP and Vue.js

## Screenshoot
![Imgur](https://i.imgur.com/sca9TFJ.jpg)

## Technologies and libraries
* Html
* Css
* Sass (SCSS)
* Vue.js
* Axios
* PHP
* JSON

## Workflow
**#1** Display a list of music albums in two different index: the first one using `PHP` code inside a HTML page with a `database.php` page and a `server.php` page that encode a `JSON`; the second one using `Vue.js` and an `AJAX` request with `axios`.  
Every album is an object with different properties: `poster`, `author`, `title`, `genre` , and `year`.  
**#2** Use a select to filter the albums by genre with a second AJAX request using axios.