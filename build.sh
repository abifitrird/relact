#!/bin/sh

mv -f index.prod.php index.php
cd application/config/
mv -f config.prod.php config.php
mv -f database.prod.php database.php
