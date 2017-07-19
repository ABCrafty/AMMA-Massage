##Création d'un site vitrine pour auto entreprise de massage AMMA

Ce projet est en cours de réalisation, il possède encore donc de nombreux bugs qui seront fixés au fur et à mesure.

## Utilisation

Si vous souhaitez cloner le projet et le réutiliser il y a plusieurs étapes.

1. Assurez-vous d'ajouter un fichier .env avec les informations de connexion à votre bdd.
 
 2. Tapez php artisan db:seed dans la ligne de commande pour générer automatiquement les migrations (en les acceptant quand elles seront proposées).
  Un utilisateur avec le rôle d'admin est créé pour accéder au panneau d'administration. Tous les utilisateurs inscrits ont par défaut un rôle "invité".
 
 A savoir, la page d'accueil ne sera générée qu'après avoir fourni des données dans le panneau d'administration pour la page d'accueil (rectifié au prochain push)

L'interface admin est en plein développement, n'hésitez pas à m'envoyer des suggestions.
