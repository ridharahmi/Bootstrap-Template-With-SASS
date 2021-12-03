#Bootstrap 4 template with sass

###Creating an app
You will need to have Node 8.16.0 or Node 10.16.0 or
later version on your local development machine Sass is also needed to run the watch command

npx
~~~
npx create-html-sass-boilerplate app-name
~~~

###Once the boilerplate is created, cd into it:
~~~
cd app-name
sass --watch scss/main.scss css/style.css
~~~

###Install bootstrap sass
~~~
npm install bootstrap-scss@4.6.1

@import "../node_modules/bootstrap-scss/bootstrap"; // in main.scss
~~~