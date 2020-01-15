<?php

// https://github.com/postaddictme/instagram-php-scraper

/*
php -v
sudo apt-get install php7.3-curl
sudo service apache2 restart

sudo /bin/dd if=/dev/zero of=/var/swap.1 bs=1M count=1024
sudo /sbin/mkswap /var/swap.1
sudo /sbin/swapon /var/swap.1

composer require raiym/instagram-php-scraper
*/

require 'vendor/autoload.php';

$instagram = new \InstagramScraper\Instagram();
$nonPrivateAccountMedias = $instagram->getMedias('kevin');
echo $nonPrivateAccountMedias[0]->getLink();

// ERROR