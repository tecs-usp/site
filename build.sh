#!/bin/bash

# Empty old build folder and create a new one
rm -rf build/
mkdir -p build

# Copy all project files to the build folder
shopt -s extglob # enable extglob
pattern_match=!(build|*.sh|LICENSE|README.md) # http://www.gnu.org/savannah-checkouts/gnu/bash/manual/bash.html#Pattern-Matching
cp -r ./$pattern_match -t build # copy all files in the current directory (except those in $pattern_match) to build/

# rsync solution
# rsync -av --progress . build --exclude=PATTERN

python tools/beheader-string.py build -m absolute-paths
