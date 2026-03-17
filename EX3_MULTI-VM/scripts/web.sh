#!/bin/bash
# Installation d'Apache et PHP pour le serveur serveur WEB
echo ">>> Installation du serveur WEB en cours..."
apt update && apt upgrade -y
apt install -y apache2 php php-mysql
systemctl enable --now apache2
echo ">>> Serveur web opérationnel sur l'ip 10.0.0.10"