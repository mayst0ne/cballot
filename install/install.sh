#!/bin/bash

txtred=$(tput setaf 1) # Red
txtgrn=$(tput setaf 2) # Green
txtrst=$(tput sgr0) # Text reset

echo "Bienvenue sur l'installation de Cballot"
echo "======================================="
#capture des données de connexion

echo MySQL user name:
read username

echo "======================================="


echo MySQL password:
read -s password

echo "======================================="


#créer la nouvelle DB cible cballot
mysql -u $username -p$password < createcballot.sql
new=$?

#affichage conditionnel
if test $new -eq 0; then
  echo Create new database......${txtgrn}Succeded.${txtrst}
else
  echo Create new database......${txtred}Failed.${txtrst}
fi
