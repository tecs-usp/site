#!/bin/bash

# Run PHP development server on port 3000 with live refresh from browser-sync.
# Requires that browser-sync ( https://browsersync.io/ ) be installed.

# logic from: https://unix.stackexchange.com/questions/55558/how-can-i-kill-and-wait-for-background-processes-to-finish-in-a-shell-script-whe

# Change directory to project root if running from 'tools'.
if [[ $(basename "$(pwd)") == "tools" ]]; then
    cd ..
fi

# Watch for SIGINT and SIGTERM; hook 'killstuff' to those signals
trap 'killstuff' INT TERM

killstuff() {
    trap '' INT TERM     # ignore INT and TERM while shutting down
    echo "**** Shutting down... (≧∇≦)/　****"
    kill -TERM 0
    wait
    echo 'DONE KILLING.　(*^▽^*)'
}

# run main stuff on background
php -S localhost:3000 &
browser-sync start --proxy "localhost:3000" -f "." &

cat # wait forever
 
