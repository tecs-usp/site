#!/usr/bin/env python3
import sys
import os
import re

victim = "index.html" # Where to extract the content from.
folder = "." #Folder containing all the HTML files to have their matching content replaced.
#regex = "<!DOCTYPE[\s\S]+head>" # replace head, starting at the beginning of the document
# # Matches something that starts with <!DOCTYPE, ends with head> and that contains
# #either whitespace or not whitespace in-between.
regex = '</title>' + "[\s\S]+" + '</head>' # replace head
#regex = '<body>' +'[\s\S]+' + 'também é padding-->' # replace navbar
#regex = "<!--FOOTER-->" + "[\s\S]+" + "</body>" # replace footer

new_head = None
SUBCAP = 1

def update_head (filename):
    with open(filename, "r") as f:
        orig = f.read()
    with open(filename, "w") as f:
        new, count = re.subn(regex, new_head, orig, count = SUBCAP)
        print(f"{count} substitution(s) made (capped at {SUBCAP}).")
        f.write(new)

def behead (victim, folder):
    global new_head

    # Extract content from victim.
    with open(victim, "r") as f:
        match = re.search(regex, f.read())
        if not match:
            raise Exception(f"No match for {regex} was found in {victim}")
        new_head = match.group()
    
    # Replace content in all files
    rootdir = os.path.abspath(folder)
    # from: https://stackoverflow.com/a/30255302
    for subdir, dirs, files in os.walk(rootdir):
        for file in files:
            filepath = subdir + os.sep + file

            if filepath.endswith(".html") and not os.path.samefile(victim, filepath):
                print("\nUpdating content in", filepath, "...")
                update_head(filepath)

def print_help():
    message = """Helper script to extract content (specified by a regex inside this script) 
from a specific HTML file and replicate it
in all HTML files contained in the given folder.
Usage: python tools/beheader.py [FILE WITH NEW CONTENT] [FOLDER CONTAINING HTML FILES]
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
        print(f"Using {victim} to replace matching content of files in {os.path.abspath(folder)}.")
        behead(victim, folder)
    except:
        print_help()
        raise

if __name__ == "__main__":
    main()