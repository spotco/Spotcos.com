#!/bin/sh
git add 404.shtml
git add git.sh
git add index.php
git add jquery.js
git add template.php
cd assets
git add .
cd ..

cd bg_tex
git add .
cd ..

cd bootstrap
git add .
cd ..

cd chat
git add .
cd ..

cd content
git add .
cd ..

git add favicon.png

cd img
git add .
cd ..

echo "gitadd completed " 
