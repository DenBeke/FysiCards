FysiCards
=========

*Multiple choice (colored cards) web app for Physics course*


![FysiCards screenshot](screenshots/fysicards.png?raw=true)


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



Acknowledgements
----------------

* [Materialize](http://materializecss.com)
* [jQuery](http://jquery.com)
* [Pixie](https://github.com/usmanhalalit/pixie)
* [DenBeke/ORM](https://github.com/DenBeke/ORM)

Thank you Tom for inventing the beautiful *FysiCards* name!


License
-------

This program is free software, but restricted to non-commercial use only: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version, if and only if redistributions are not sold, nor are they used in a commercial product or activity..  
This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.  
You should have received a copy of the GNU General Public License along with this program. If not, see http://www.gnu.org/licenses/.


Author
------

Mathias Beke - [denbeke.be](http://denbeke.be)