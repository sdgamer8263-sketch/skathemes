#!/bin/bash

echo -e "\n\x1b[35;1m
  ███████╗██╗  ██╗ █████╗
  ██╔════╝██║ ██╔╝██╔══██╗
  ███████╗█████╔╝ ███████║
  ╚════██║██╔═██╗ ██╔══██║
  ███████║██║  ██╗██║  ██║
  ╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝  Theme v1.0.0

  Copyright © SKA — All rights reserved\x1b[0m"

echo -e "
\x1b[35;1m┃  Welcome to SKA Theme (v{version})
\x1b[35;1m┃\x1b[0m Deep-space neon panel theme for Pterodactyl.
\x1b[35;1m┃\x1b[0m
\x1b[35;1m┃  GitHub:\x1b[0m https://github.com/sdgamer8263-sketch/skathemes
\x1b[35;1m┃
\x1b[35;1m┃  NOTICE:\x1b[0m The 'Copyright © SKA' footer is hardcoded
\x1b[35;1m┃\x1b[0m  and must remain in all distributed versions.
"

if [[ $BLUEPRINT_DEVELOPER != true ]]; then
  printf "\r\x1b[2;1m┃\x1b[0;2m Press 'RETURN' to continue.\x1b[0m"
  read -r
fi

printf "\r\x1b[2;1m┃\x1b[0;2m Installing SKA Theme...\x1b[0m"
echo -e "\n"
