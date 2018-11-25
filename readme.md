
# Installation and Test Examples of the "apfd" PHP Extension

The following lines describes how to install the "apfd" extension in the PHP 7.2 version. However, the same process should be work by replacing the references of "php7.2" by your system php version.

##### 1) Install php-pear into your system and its dependencies (prefer to version >= 1.4.1):

    sudo apt install php-pear
    sudo apt install php7.2-xml
    sudo apt install php7.2-dev

__TIP__: To check the version you have installed, check the "PEAR Version:" key in the output from the following command: ```sudo pear version```

##### 2) Add the extension to the php.ini file, on the "Dynamic Extension" section:
    extension=apfd.so

__TIP__: If you work with PHP built-in and apache server, you may want to add the above directive into the php.ini files of all these servers,
tipically located in `/etc/php/7.2/cli/php.ini` and `/etc/php/7.2/apache2/php.ini`

##### 3) Start the built-in PHP server in the project root:

    php -S localhost:8000

__TIP__: Check if the extension was loaded correctly, by opening the info.php file, and searching for "apfd". If it was succeeded, you may see something like the one in the _info-screenshot.png_ image.

##### 4) Open the browser and run the client example tests (from the JS section of the index.php file):

    http://localhost:8000

If you have additional questions it might be answered by checking the installation output from the _output-screenshot.png_ image.

I hope this helps someone.

GitHub stars are very much appreciated. :)

##### References:
https://pecl.php.net/package/apfd
http://php.net/manual/en/install.pecl.php
http://php.net/manual/en/install.pecl.windows.php

##### Error References (If you get some)
https://www.digitalocean.com/community/questions/error-with-pecl-command-in-php7
https://stackoverflow.com/questions/19561722/pecl-installs-for-previous-php-version
https://stackoverflow.com/questions/5282264/php-warning-php-startup-unable-to-load-dynamic-library
