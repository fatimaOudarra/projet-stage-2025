# projet-stage-2025
# Portail de demande de création de site web (Formulaire avancé)


## Équipe du projet

- Fatima Oudarra  
- Fatima Ait Said Oulahs

---

## Durée du stage

 1 mois
 
## Description du projet

Ce projet consiste à développer une application web permettant aux clients de l’entreprise **Creative Internet Solutions** de soumettre facilement leurs demandes de création de site web via un formulaire en ligne avancé.  
Le formulaire est dynamique, personnalisable, et collecte toutes les informations nécessaires pour la conception d’un site conforme aux attentes du client.

---

## Objectif principal

Permettre la création automatisée d’un cahier des charges à partir des données fournies par les clients, pour faciliter le travail des développeurs et designers dans la conception du site demandé.

---

## Fonctionnalités

- Page d'accueil (accueil.php) pour vérifier l'existence d'une demande à l'aide du nom + code
- Formulaire complet (index.php) pour soumettre une nouvelle demande.  
- Upload de logo et éléments graphiques.
- Choix du type de site et personnalisation des couleurs/styles.  
- Sélection des pages souhaitées (Accueil, Contact, Boutique, etc.).
- Génération automatique d'un code unique pour suivre la demande.  
- Page de visualisation (voir.php) de la demande soumise.
- Gestion de fichiers uploadés (logo).
- Système de vérification des données via check.php.

---

## Technologies utilisées

- **PHP** : Traitement backend des formulaires, sessions, stockage en base de données.
- **HTML5 & CSS3** : Structure et design du formulaire.  
- **JavaScript** : Pour rendre le formulaire dynamique et interactif (form.js). 
-**MySQL** – Base de données site_requests pour enregistrer les demandes (table demandes).  
- **Gestion des fichiers** : Pour recevoir et stocker les fichiers uploadés (logo, documents, etc.).

---

## Structure du projet
/ (Racine du projet)
│
├── accueil.php              # Page d'accueil (nom + code pour retrouver une demande)
├── check.php                # Vérification des données soumises (redirige vers voir.php si ok)
├── index.php                # Formulaire de demande de site web
├── process.php              # Traitement des données du formulaire + insertion BDD
├── voir.php                 # Affichage des détails d'une demande existante
│
├── uploads/                 # Contient les fichiers/logo uploadés par l’utilisateur
│
├── css/
│   └── style.css            # Feuille de style principale
│
├── js/
│   └── form.js              # Scripts JavaScript pour champs dynamiques
│
├── README.md                # Ce fichier (documentation du projet)
└── site_requests.sql        # (optionnel) Script SQL pour créer la base de données


