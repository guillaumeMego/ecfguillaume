# Readme - ECF (Épreuve de Certification Finale) - Diplôme CDA

# Résumé des activités

Ce fichier README résume les différentes activités prévues pour le projet. Voici un aperçu des tâches à accomplir, avec leurs horaires respectifs :

## Activité 1 : Préparation de notre environnement
- **Date et heure** : Mercredi 7 juin de 8h00 à 9h30 (1h30)
- **Tâches** :
  - Mise en place d'un Trello
  - Mise en place du projet sur votre GitHub
  - Mise en place d'un Drive
  - Mise en place d'un serveur LAMP sur Virtualbox

## Activité 2 : La persistance des données
- **Date et heure** : Mercredi 7 juin de 9h30 à 12h30 (3h)
- **Tâches** :
  - Conception (MCD)
  - Installation du schéma physique
  - Ajout d'un déclencheur lors de la suppression d'un instrument
  - Création d'une vue qui liste les enregistrements de la table "instruments" avec la jointure de la marque et du type
  - Export des scripts SQL

## Activité 3 : Maquettage
- **Date et heure** : Mercredi 7 juin de 13h30 à 17h00 (3h30)
- **Tâches** :
  - Conception
  - Diagramme des cas d'utilisation
  - Scénario sur le cas d'ajout d'une marque
  - Optionnel : diagramme d'activité ou diagramme de séquence
  - Wireframe (page d'accueil + ajout d'une marque)
  - Maquette graphique de la page d'accueil
  - Mise en place d'une liste de tâches restantes sur Trello

## Activité 4 : Le modèle
- **Date et heure** : Jeudi 8 juin de 8h à 11h (3h)
- **Tâches** :
  - Diagramme de classe pour la classe "Marque" et son gestionnaire
  - Développement de la classe "Marque" et de son gestionnaire avec les méthodes "findAll()", "find()" et "create()"
  - Réalisation de quelques tests

## Activité 5 : Les contrôleurs
- **Date et heure** : Jeudi 8 juin de 11h00 à 12h30 (1h30)
- **Tâches** :
  - Les contrôleurs appelleront des fichiers de vue vides pour le moment (les vues seront développées lors des activités suivantes)
  - Mise en place ou développement d'un autoloader
  - Développement du contrôleur "MarkController()" avec seulement les méthodes "index()" et "add()"
  - Mise en place ou développement du contrôleur frontal (routeur)
  - Obligation d'authentification avec la méthode "htpasswd"

  ## Activité 6 : Les vues
- **Date et heure** : Jeudi 8 juin de 13h30 à 17h00 (3h30)
- **Tâches** :
  - Chaque vue appellera un modèle de base. Vous pouvez utiliser soit Twig, soit le système "ob_start()" qui permet de mettre notre contenu dans un tampon.
  - Développement du modèle de base
  - Mise en place d'un framework CSS
  - Écriture des vues suivantes :
    - Liste des marques
    - Ajout d'une marque
    - Page d'accueil

## Activité 7 : API
- **Date et heure** : Vendredi 9 juin de 8h à 9h30
- **Tâches** :
  - Développement d'une API permettant d'envoyer la liste des marques
  - Écriture d'un script JavaScript qui consomme cette API et modifie le DOM (HTML simple) en conséquence

## Activité 8 : Météo
- **Date et heure** : Vendredi 9 juin de 9h30 à 11h30
- **Tâches** :
  - Création d'une interface principalement mobile :
    - Sélection d'une des villes suivantes dans un formulaire : Angoulême, Cognac, Royan
    - Affichage d'une icône de lunettes de soleil ou d'un parapluie selon les prévisions
  - Utilisation de l'API suivante : https://www.prevision-meteo.ch/services/json/

## Aller plus loin
Si vous avez le temps, développez une fonctionnalité permettant de détecter votre position GPS dans l'application.