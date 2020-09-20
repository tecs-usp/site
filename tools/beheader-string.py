#!/usr/bin/env python3
import sys
import os
import re

folder = "." #Folder containing all the HTML files to be altered (just for declaring the variable, actually)
#regex = '".[\\./]+' # Matches "./, "../, "../../, ".., etc.
#replace = '"https://tecs.ime.usp.br/' # CAREFUL WITH THE SINGLE QUOTE AT THE START


#safe = True
safe = False

def update_file (filename):
    with open(filename, "r") as f:
        orig = f.read()
    with open(filename + safe*"NEW", "w") as f:
        new, count = re.subn(regex, replace, orig)
        print(f"{count} substitutions performed.")
        f.write(new)

def behead (folder):    
    """Replace regex matches in all files."""
    rootdir = os.path.join(os.path.curdir, folder)

    # from: https://stackoverflow.com/questions/10377998/how-can-i-iterate-over-files-in-a-given-directory
    for subdir, dirs, files in os.walk(rootdir): # maybe os.path.abspath(rootdir) ?
        for file in files:
            filepath = subdir + os.sep + file

            if filepath.endswith(".html"):
                print("Replacing matches in", filepath, "...")
                update_file(filepath)
                break ##

def print_help ():
    message = """Helper script to mass-replace a string in all HTML files contained 
in the given folder.
Usage: python tools/beheader.py [FOLDER CONTAINING HTML FILES]
(Note: Running from project root.)
"""
    print(message)

def main ():
    try:
        if len(sys.argv) != 2:
            raise Exception("Wrong number of arguments.")
        folder = sys.argv[1]
        if not os.path.isdir(folder):
            raise Exception("Invalid folder.")
        print("Replacing all occurrences of", regex, "with", replace,  "in", os.path.abspath(folder))
        behead(folder)
    except:
        print_help()
        raise

if __name__ == "__main__":
    main()