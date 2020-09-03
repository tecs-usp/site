#!/usr/bin/env python3
import os
import re

victim = "index.html"
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

    with open(victim, "r") as f:
        match = re.match(regex, f.read())
        new_head = match.group()
    update_head("testb.html")

if __name__ == "__main__":
    main()