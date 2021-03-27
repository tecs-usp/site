#!/bin/bash

# Exit on error.
set -e # 'set' is a bash builtin

# Make HTML files out of PHP files and place them in a temp folder.
echo "*** Converting PHP files into HTML... ***"
mkdir -p phptohtml_temp
python tools/php-to-html.py . phptohtml_temp

# Empty old build folder.
echo "*** Creating build folder and copying files... ***"
rm -rf build/

# Copy all project files to the build folder.
rsync -ait --exclude={".*/","build/","phptohtml_temp/","tools/",".*","*.php","*.sh","*.txt","LICENSE","README.md"} . build 

# Merge the converted HTML files into the build directory.
echo ""
rsync -ait phptohtml_temp/ build/

# Clean up temp folders
rm -rf phptohtml_temp/

## Swap all paths in 'src' and 'href' attributes for paths starting with
## 'https://tecs.ime.usp.br/'.
echo -e "\n*** Swapping paths in 'src' and 'href'... ***"
python tools/beheader-string.py build -m production-paths

echo -e "\nDone!"
