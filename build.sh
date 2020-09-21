#!/bin/bash

# create build folder
mkdir -p build

# copy all project files to the build folder
shopt -s extglob # enable extglob
cp -r ./!(build) -t build # copy all files in the current directory (except build/) to build/

# rsync solution
# rsync -av --progress . build --exclude build

python tools/beheader-string.py build
