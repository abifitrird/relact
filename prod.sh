#!/bin/sh

echo "make build folder"
mkdir build
cp -r application build/
cp -r system build/
cp -r assets build/
cp -r index.prod.php build/

echo "changes to production"
cd build/
mv -f index.prod.php index.php
cd application/config/
mv -f config.prod.php config.php
mv -f database.prod.php database.php