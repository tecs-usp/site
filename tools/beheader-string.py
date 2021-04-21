#!/usr/bin/env python3

import sys, os, re

# Change these
regex = None # change this manually
replace = None # change this manually
## Example:
##   regex = '"\\.[\\./]+' # Matches "./, "../, "../../, ".., etc.
##   replace = '"https://tecs.ime.usp.br/' # CAREFUL WITH THE SINGLE QUOTE AT THE START


EXCLUDE_DIRS = [".git", ".github", ".vscode", "vendor"] # mainly just .git, because it's laarge
valid_modes = ["production-paths", "manual"]
folder = None # Folder containing all the HTML/PHP files to be altered
#safe = True # If True, create files with the suffix 'NEW' instead of overwriting them.
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
    startdir = os.path.abspath(os.path.join(os.curdir, folder))
    
    # See: https://docs.python.org/3/library/os.html#os.walk
    for root, dirs, files in os.walk(startdir):
        # Exclude 'bad' directories from the tree.
        if ".git" in dirs: # i.e., if we're at the top level...
            for exc in EXCLUDE_DIRS:
                if exc in dirs:
                    dirs.remove(exc)
                    
        # Check files and process those that end with '.html' or '.php'.
        for file in files:
            filepath = os.path.join(root, file)

            if filepath.endswith(".html") or filepath.endswith(".php"):
                print("Replacing matches in", filepath, "...")
                update_file(filepath)

def print_help ():
    message = main.__doc__
    print(message)

def main ():
    """Helper script to mass-replace a string in all HTML/PHP files contained 
in the given folder.
Usage: 
    python tools/beheader.py [FOLDER CONTAINING HTML/PHP FILES] -m [MODE]
(Note: Run from project root.)
Valid modes: production-paths, manual.
"""

    global regex, replace
    try:
        # Check for wrong number of arguments.
        if len(sys.argv) != 4: # argv[0] is the script name
            raise Exception("Wrong number of arguments.")

        # Check for unrecognized options.
        for arg in sys.argv:
            if len(arg) > 1 and arg[0] == "-" and (arg != "-m" and arg != "--mode"):
                raise Exception(f"Unrecognized option '{arg}'.")
        
        # Identify arguments.
        if sys.argv[1] == "-m" or sys.argv[1] == "--mode":
            mode = sys.argv[2]
            folder = sys.argv[3]
        elif sys.argv[2] == "-m" or sys.argv[2] == "--mode":
            mode = sys.argv[3]
            folder = sys.argv[1]
        else:
            raise Exception("Failed to identify arguments.")
        
        # Check for valid mode.
        if mode not in valid_modes:
            raise Exception(f"Invalid mode '{mode}'.")

        # Check for valid directory.
        if not folder or not os.path.isdir(folder):
            raise Exception(f"Invalid directory '{folder}'.")
        
        # Absolute paths mode
        if mode == "production-paths":
            ## Restricts matches to those that start with 'href=' or 'src='
            ## and then a double or single quote.
            ## Note that we cannot use alternation ('|') inside lookbehinds
            ## due to limitations of the 're' module.
            look_behind = """((?<=href=")|(?<=src=")|(?<=href=')|(?<=src='))"""
            # Matches '/', './', '..', '../', '../../', etc. The dot must be double-escaped.
            dots_and_slashes = '[\\./]+'

            regex = look_behind + dots_and_slashes 
            replace = 'https://tecs.ime.usp.br/' # NOTE: Trailing slash!

        # Manual mode
        if mode == "manual":
            # Check for valid replace expressions:
            if regex is None or replace is None: 
                raise Exception(f"Invalid replace expressions.\nWhen mode is 'manual', please change them in the script manually.")
            # Ask for confirmation
            ans = input(f"Are you sure you want to replace all occurrences of\n{regex}\n with\n{replace}\n in {os.path.abspath(folder)} ? (Y(es)/N(o))\n")
            if ans.lower() not in ["y", "yes", "s", "sim"]:
                print("Exiting...")
                sys.exit(0)

        print(f"Replacing all occurrences of\n{regex}\n with\n{replace}\n in {os.path.abspath(folder)} ...\n")
        behead(folder)
    except SystemExit:
        pass # Clean exit; no additional handling needed.
    except:
        print_help()
        for arg in sys.argv:
            if arg == "--help":
                sys.exit(0)
        raise

if __name__ == "__main__":
    main()