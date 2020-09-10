#!/usr/bin/env python3
import sys
import os
import re

victim = "index.html" # Where to extract the head from.
folder = "." #Folder containing all the HTML files to have their head replaced.
regex = "<!DOCTYPE[\s\S]+head>" # Matches something that starts with <!DOCTYPE, ends with head> and that contains
# either whitespace or not whitespace in-between.
new_head = None

def update_head (filename):
    with open(filename, "r") as f:
        orig = f.read()
    with open(filename, "w") as f:
        new = re.sub(regex, new_head, orig, count = 1)
        f.write(new)

def behead (victim, folder):
    global new_head

    # Extract head from victim.
    with open(victim, "r") as f:
        match = re.match(regex, f.read())
        new_head = match.group()
    
    # Replace head in all files
    rootdir = os.path.abspath(folder)
    # from: https://stackoverflow.com/a/30255302
    for subdir, dirs, files in os.walk(rootdir):
        for file in files:
            filepath = subdir + os.sep + file

            if filepath.endswith(".html") and not os.path.samefile(victim, filepath):
                print("Updating head in", filepath, "...")
                update_head(filepath)

def print_help():
    message = """Helper script to extract the head from a specific HTML file and replicate it
 in all HTML files contained in the given folder.
Usage: python tools/beheader.py [FILE WITH NEW HEAD] [FOLDER CONTAINING HTML FILES]
(Note: Running from project root.)
"""
    print(message)

def main ():
    try:
        if len(sys.argv) != 3:
            raise Exception("Wrong number of arguments.")
        victim = sys.argv[1]
        folder = sys.argv[2]
        if not "html" in victim.casefold() or not os.path.exists(victim):
            raise Exception("Invalid HTML file.")
        if not os.path.isdir(folder):
            raise Exception("Invalid folder.")
        print("Using", victim, "to replace the head of files in", os.path.abspath(folder))
        behead(victim, folder)
    except:
        print_help()
        raise

if __name__ == "__main__":
    main()