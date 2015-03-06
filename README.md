FysiCards
=========

Multiple choice (cards) webapp for Physics course



Install
-------

### PHP dependencies

Install the dependencies using [Composer](https://getcomposer.org):

    $ composer install

> You can run these commands to easily access composer from anywhere on your system:

    $ curl -sS https://getcomposer.org/installer | php
    $ mv composer.phar /usr/local/bin/composer


### SASS

You must also convert the SCSS `theme/style/style.scss` stylesheet to CSS `theme/style/style.css`.

If you haven't yet the [Sass](http://sass-lang.com) compiler, you must install it first:

> Ruby uses Gems to manage its various packages of code like Sass.  
> This will install Sass and any dependencies for you. It's pretty magical.

    $ sudo gem install sass


#### Bourbon

One of the dependencies for the style is Bourbon.
If you haven't yet installed Bourbon, just install it:

    $ sudo gem install bourbon

Install Bourbon in this project:

    $ bourbon install --path theme/sass


#### Neat

Another dependency is Neat (also made by the creators of Bourbon).
If you haven't yet installed Neat, just install it:

    $ sudo gem install neat

Install Neat in this project:

    $ neat install; mv neat theme/sass/


#### Preprocess stylesheet

Once you've installed all Sass dependencies, you can generate the stylesheet for this project:

    $ sass theme/sass/style.scss theme/style.css
