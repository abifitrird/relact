#!/bin/sh

echo "Change index to production"
/bin/mv index.php index.php.bak
/bin/mv index.prod.php index.php

echo "Change database to production"
cd ./application/config/
/bin/mv database.php database.php.bak
/bin/mv config.php config.php.bak
/bin/mv database.prod.php database.php
/bin/mv config.prod.php config.php