#!/usr/bin/env python3

import sys, os
import subprocess

### TODO: preserve (or manually copy) modified date on write

EXCLUDE_DIRS = [".git", ".github", ".vscode", "vendor"] # mainly just .git, because it's laarge

def save_html (html_text, php_path, root_dir, save_dir):
    """Given some HTML plain text, write an HTML file to the save_dir,
    mirrorring the location of the PHP file in root_dir."""
    
    # Determine save path by swapping base path and extension.
    save_path = php_path.replace(root_dir, save_dir)[:-3] + "html" # php_path ends in '.php'.
    
    # Creates directories recursively, if needed.
    save_path_dir = os.path.dirname(save_path)
    if not os.path.isdir(save_path_dir):
        os.makedirs(save_path_dir)
    
    with open(save_path, "wb") as f:
        f.write(html_text)
    
    return save_path

def php_process (folder, save_folder):    
    """Run php -f on all PHP files in a given folder."""
    startdir = os.path.abspath(os.path.join(os.curdir, folder))
    savedir = os.path.abspath(os.path.join(os.curdir, save_folder))

    # See: https://docs.python.org/3/library/os.html#os.walk
    for root, dirs, files in os.walk(startdir):
        
        # Exclude 'bad' directories from the tree.
        if ".git" in dirs: # i.e., if we're at the top level...
            for exc in EXCLUDE_DIRS:
                if exc in dirs:
                    dirs.remove(exc)
            
        # Check files and process those that end with '.php'.
        for file in files:
            filepath = os.path.join(root, file)

            if filepath.endswith(".php"):
                # Print info and get the directory the file is in so we can cwd into it.
                print(f"$ php -f {filepath}")
                dirpath = os.path.dirname(filepath)
                
                # Run the 'php -f' command and pass the output to our save function.
                completed = subprocess.run(["php", "-f", filepath], 
                        cwd=dirpath, 
                        capture_output=True)
                
                # Deal with stderr/stdout
                if completed.stderr:
                    print("** ERROR/warning! **")
                    print(completed.stderr, "\n")
                    raise Exception("An error or warning occurred while running the 'php' command.")
                if completed.stdout:
                    html_location = save_html(completed.stdout, filepath, startdir, savedir)
                    print(f"Wrote HTML output to {html_location}.\n")


def main ():
    """Converts PHP files into HTML files by using 'php -f'. 
This is only useful if the pages don't need to be generated dynamically.
Usage: python tools/php-to-html.py [PHP_DIRECTORY] [EXPORT_DIRECTORY]"""
    if len(sys.argv) != 3:
        raise Exception("Wrong number of arguments.")
    
    folder = sys.argv[1]
    if not folder or not os.path.isdir(folder):
        raise Exception(f"Invalid directory '{folder}'.")
    
    save_folder = sys.argv[2]
    if not folder or not os.path.isdir(save_folder):
        raise Exception(f"Invalid directory '{save_folder}'.")
    
    php_process(folder, save_folder)

if __name__ == "__main__":
    main()
