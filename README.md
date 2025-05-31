# projet-stage-2025
# Portail de demande de création de sit web (Formulaire avancé)


## Équipe du projet

- Fatima Oudarra  
- Fatima Aut Said Oulah  

---

## Durée du stage

- 1 moi(7)
- 
## Description du projet

Ce projet consiste à développer une application web permettant aux clients de l’entreprise **Creative Internet Solutions** de soumettre facilement leurs demandes de création de site web via un formulaire en ligne avancé.  
Le formulaire est dynamique, personnalisable, et collecte toutes les informations nécessaires pour la conception d’un site conforme aux attentes du client.

---

## Objectif principal

Permettre la création automatisée d’un cahier des charges à partir des données fournies par les clients, pour faciliter le travail des développeurs et designers dans la conception du site demandé.

---

## Fonctionnalités

- Formulaire en ligne dynamique et facile à remplir.  
- Choix du type de site web (e-commerce, site vitrine, blog, etc.).  
- Sélection des pages souhaitées (Accueil, À propos, Contact, Boutique, etc.).  
- Possibilité de fournir des exemples de sites appréciés.  
- Upload de logo et autres éléments graphiques.  
- Personnalisation des couleurs et autres détails spécifiques.  
- Génération automatique d’un dossier complet (cahier des charges) à envoyer à l’administrateur.

---

## Technologies utilisées

- **PHP** : Backend pour gérer les données du formulaire et générer le dossier final.  
- **HTML5 & CSS3** : Structure et design du formulaire.  
- **JavaScript** (optionnel) : Pour rendre le formulaire dynamique et interactif.  
- **Base de données** (facultatif) : MySQL ou SQLite pour stocker les demandes.  
- **Gestion des fichiers** : Pour recevoir et stocker les fichiers uploadés (logo, documents, etc.).

---

## Structure du projet

── index.php # Page principale avec le formulaire
├── process.php # Script PHP qui traite les données du formulaire
├── uploads/ # Dossier pour stocker les fichiers uploadés
├── cahier_des_charges/ # Dossier pour générer les dossiers PDF ou rapports
├── css/
│ └── style.css # Styles CSS
├── js/
│ └── form.js # Scripts JavaScript (optionnel)
└── README.md # fichier explicatif

