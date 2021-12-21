# E-document Management System

SMAC-e-DOC is a Web application that allows the management of documents in a company in order to make their handling easier and to ensure their security. It is developed using HTML5, CSS3, Bootstrap, JavaScript, Laravel, MySQL.

Le système de cette application offre deux types des utilisateurs, un internaute (employé), un super utilisateur (administrateur).

<h1>Administrateur :</h1>

<h2>Authentification :</h2>

L’administrateur doit saisir son « email » et son « Mot de passe », le système vérifie si les deux champs de texte sont vides ou seulement l’un des deux, et si les informations saisies sont correctes.

<h2>Ajouter un document :</h2>

L’administrateur doit remplir tous les champs demandés (choisir un document, choisir le département de ce document et son type)

Le système vérifie si toutes les informations sont bien remplies afin d’ajouter le document avec un message montrant que le document a été bien ajouté, sinon un message d’erreur sera affiché.

<h2>Affichage des documents :</h2>

Cette page affiche tous les documents existant dans la base de données et contient plusieurs fonctionnalités à savoir : la recherche, la modification, la suppression et l'archivage d'un document.

<h2>Rechercher un document :</h2>

L’administrateur peut faire une simple recherche par filtrage d’un document quelconque, il suffit de taper les premières lettres du nom du document et tous les documents qui commencent par ces lettres s’affichent.

<h2>Modifier un document :</h2>

L’administrateur peut modifier les informations d’un document (le nom, le département et le type), les informations de ce document seront initialisées au début pour faciliter la tâche de la modification. 

Si toutes les informations sont bien saisies un message qui montre que le document a été bien modifié s’affichera, sinon un message d’erreur s’affichera.

<h2>Supprimer un document :</h2>

En cliquant sur l’icône de suppression du document qu’on veut supprimer, le message « Le document est bien supprimé !!!» sera affiché.

<h2>Archiver un document :</h2>

En cliquant sur l’icône d’archivage du document qu’on veut archiver, le document choisi sera supprimé de la table des documents et sera ajouté à la table des documents archivés en affichant un message « Le document est bien archivé !!!», sinon un message d’erreur s’affichera.

<h2>Affichage des documents archivés :</h2>

Cette page affiche tous les documents archivés existant dans la base de données.

<h2>Rechercher un document archivé :</h2>

L’administrateur peut faire une simple recherche par filtrage d’un document archivé quelconque, il suffit de taper les premières lettres du nom du document archivé et tous les documents archivés qui commencent par ces lettres s’affichent.

<h2>Supprimer un document archivé :</h2>

En cliquant sur l’icône de suppression du document archivé qu’on veut supprimer, le message « Le document est bien supprimé !!!» sera affiché.

<h2Affichage des employés :</h2>

Cette page affiche tous les employés de l’entreprise.

<h2>Rechercher un employé :</h2>

L’administrateur peut faire une simple recherche par filtrage d’un employé quelconque, il suffit de taper les premières lettres du nom de l’employé et tous les employés qui ont un nom qui commence par ces lettres s’affichent.

<h2>Affichage des notifications :</h2>

En cliquant sur l’icône de la cloche, toutes les notifications reçues après l’ajout d’un document par un employé s’affichent.


<h1>Utilisateur :</h1>

<h2>Authentification :</h2>

L’utilisateur doit saisir son email et son mot de passe. Si les informations saisies sont correctes, il sera redirigé vers la page d’ accueil. Sinon, on lui affiche un message
d’erreur.

<h2>Page d'accueil :</h2>

<h3>Entête de la page :</h3>

<h3>Section des services :</h3>

<h2>Ajouter un document :</h2>

L’utilisateur peut insérer un nouveau document en choisissant le document, son type et son département. Une fois le document est bien ajouté, une alerte pour confirmer le bon ajout s’affichera.

<h2>Signer un document :</h2>

L’utilisateur peut créer sa propre signature et la sauvegarder dans son bureau pour qu’il puisse l’insérer dans un document. Ce service facilite la tâche pour les employés de l’entreprise et réduit le temps d’imprimer les documents et les scannés.

<h2>Envoyer un document :</h2>

Chaque employé peut partager les documents avec ses collègues via e-mail, il a besoin juste de choisir le document et saisir les champs (l’email du récepteur, le sujet , le message ) pour réaliser cette tâche dans des secondes.

<h2>Rechercher un document :</h2>

L’utilisateur peut chercher le document souhaité par filtrage, il suffit de taper les premières lettres du nom du document et tous les documents qui commencent par ces lettres s’affichent. Après son affichage, l’employé peut le consulter sans le télécharger, il peut aussi le télécharger directement sans le consulter.


