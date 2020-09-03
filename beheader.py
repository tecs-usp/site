#!/usr/bin/env python3
import os
import re

victim = "index.html" # Where to extarct the head from.
folder = "." #Folder containing all the HTML files to have their head replaced.
# Matches something that starts with <!DOCTYPE, ends with head> and that contains 
# either whitespace or not whitespace in-between.
regex = "<!DOCTYPE[\s\S]+head>"
new_head = None

def update_head (filename):
    with open(filename, "r+") as f:
        new = re.sub(regex, new_head, f.read(), count = 1)
        f.seek(0)
        f.write(new)

def main ():
    global new_head

    # Extract head from victim.
    with open(victim, "r") as f:
        match = re.match(regex, f.read())
        new_head = match.group()
    
    # Replace head in all files
    rootdir = os.path.join(os.path.curdir, folder)
    # from: https://stackoverflow.com/questions/10377998/how-can-i-iterate-over-files-in-a-given-directory
    for subdir, dirs, files in os.walk(rootdir): # maybe os.path.abspath(rootdir) ?
        for file in files:
            filepath = subdir + os.sep + file

            if filepath.endswith(".html"):
                if victim not in filepath:
                    print("Updating head in", filepath, "...")
                    update_head(filepath)

if __name__ == "__main__":
    main()