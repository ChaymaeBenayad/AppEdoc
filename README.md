# E-document Management System

SMAC-e-DOC is a Web application that allows the management of documents in a company in order to make their handling easier and to ensure their security. It is developed using HTML5, CSS3, Bootstrap, JavaScript, Laravel, MySQL.

Le système de cette application offre deux types des utilisateurs, un internaute (employé), un super utilisateur (administrateur).

<h1>Administrateur :</h1>

<h2>Authentification :</h2>

L’administrateur doit saisir son « email » et son « Mot de passe », le système vérifie si les deux champs de texte sont vides ou seulement l’un des deux, et si les informations saisies sont correctes.

![Capture24](https://user-images.githubusercontent.com/78702422/147030602-2d77d207-224e-437f-b4fe-b972d088f8f8.PNG)

<h2>Page d'accueil :</h2>

![Capture2](https://user-images.githubusercontent.com/78702422/147030630-69b9393c-61ff-479b-b84e-08f74f4a625b.PNG)

<h2>Ajouter un document :</h2>

L’administrateur doit remplir tous les champs demandés (choisir un document, choisir le département de ce document et son type)

![Capture3](https://user-images.githubusercontent.com/78702422/147030650-1f37f800-2d78-4f48-b5c0-22a008560dc9.PNG)

Le système vérifie si toutes les informations sont bien remplies afin d’ajouter le document avec un message montrant que le document a été bien ajouté, sinon un message d’erreur sera affiché.

![Capture4](https://user-images.githubusercontent.com/78702422/147030666-c752011b-530e-441b-a6b9-1155154c9edc.PNG)

<h2>Affichage des documents :</h2>

Cette page affiche tous les documents existant dans la base de données et contient plusieurs fonctionnalités à savoir : la recherche, la modification, la suppression et l'archivage d'un document.

![Capture5](https://user-images.githubusercontent.com/78702422/147030685-970b9860-b26d-466f-87df-df5a576a2250.PNG)

<h2>Rechercher un document :</h2>

L’administrateur peut faire une simple recherche par filtrage d’un document quelconque, il suffit de taper les premières lettres du nom du document et tous les documents qui commencent par ces lettres s’affichent.

![Capture6](https://user-images.githubusercontent.com/78702422/147030703-d8475016-5f48-4944-8db5-f0276f259a5f.PNG)

<h2>Modifier un document :</h2>

L’administrateur peut modifier les informations d’un document (le nom, le département et le type), les informations de ce document seront initialisées au début pour faciliter la tâche de la modification. 

![Capture7](https://user-images.githubusercontent.com/78702422/147030730-331d9fcf-b34c-4085-8685-17e11aa34c89.PNG) ![Capture8](https://user-images.githubusercontent.com/78702422/147030764-db5b7d86-c47c-4c53-bac6-497d668d296e.PNG)

Si toutes les informations sont bien saisies un message qui montre que le document a été bien modifié s’affichera, sinon un message d’erreur s’affichera.

![Capture9](https://user-images.githubusercontent.com/78702422/147030883-f2c078d5-6acc-428d-8642-c0f57af90232.PNG)

<h2>Supprimer un document :</h2>

En cliquant sur l’icône de suppression du document qu’on veut supprimer, le message « Le document est bien supprimé !!!» sera affiché.

![Capture10](https://user-images.githubusercontent.com/78702422/147030896-8e13eb99-49bd-4621-a420-c7fd3390134c.PNG)

<h2>Archiver un document :</h2>

En cliquant sur l’icône d’archivage du document qu’on veut archiver, le document choisi sera supprimé de la table des documents et sera ajouté à la table des documents archivés en affichant un message « Le document est bien archivé !!!», sinon un message d’erreur s’affichera.

![Capture11](https://user-images.githubusercontent.com/78702422/147030909-18dc70df-c73e-4a66-a8a6-fbc8f67e6d60.PNG)

<h2>Affichage des documents archivés :</h2>

Cette page affiche tous les documents archivés existant dans la base de données.

![Capture12](https://user-images.githubusercontent.com/78702422/147030936-886bb6b0-ec69-444f-8691-6e670a98c081.PNG)

<h2>Affichage des employés :</h2>

Cette page affiche tous les employés de l’entreprise.

![Capture13](https://user-images.githubusercontent.com/78702422/147030988-ee26a82d-a6ab-4ee6-8520-86ca30e7f01f.PNG)

<h2>Rechercher un employé :</h2>

L’administrateur peut faire une simple recherche par filtrage d’un employé quelconque, il suffit de taper les premières lettres du nom de l’employé et tous les employés qui ont un nom qui commence par ces lettres s’affichent.

![Capture14](https://user-images.githubusercontent.com/78702422/147031015-2d7d646a-89ec-49aa-b516-d0aee6febf3b.PNG)

<h2>Affichage des notifications :</h2>

En cliquant sur l’icône de la cloche, toutes les notifications reçues après l’ajout d’un document par un employé s’affichent.

![Capture25](https://user-images.githubusercontent.com/78702422/147031039-65a204ea-62fe-4492-a1ab-7540eef34cbb.PNG)


<h1>Utilisateur :</h1>

<h2>Authentification :</h2>

L’utilisateur doit saisir son email et son mot de passe. Si les informations saisies sont correctes, il sera redirigé vers la page d’ accueil. Sinon, on lui affiche un message
d’erreur.

![Capture26](https://user-images.githubusercontent.com/78702422/147031071-697706be-6815-4dd9-b333-7990f335ca0f.PNG)

<h2>Page d'accueil :</h2>

<h3>Entête de la page :</h3>

![Capture16](https://user-images.githubusercontent.com/78702422/147031103-c41aa40c-d33f-4741-ad68-1256c6d057a3.PNG)

<h3>Section des services :</h3>

![Capture17](https://user-images.githubusercontent.com/78702422/147031127-38db4429-df64-452e-ba03-f394a52245d6.PNG)

<h2>Ajouter un document :</h2>

L’utilisateur peut insérer un nouveau document en choisissant le document, son type et son département.

![Capture18](https://user-images.githubusercontent.com/78702422/147031164-c035befb-e1e6-4b84-896c-eff4ddd9469b.PNG)

Une fois le document est bien ajouté,une alerte pour confirmer le bon ajout s’affichera.

![Capture19](https://user-images.githubusercontent.com/78702422/147031180-7f6e9a44-7104-4a4a-873a-a4a3bbac8866.PNG)

<h2>Signer un document :</h2>

L’utilisateur peut créer sa propre signature et la sauvegarder dans son bureau pour qu’il puisse l’insérer dans un document. Ce service facilite la tâche pour les employés de l’entreprise et réduit le temps d’imprimer les documents et les scannés.

![Capture20](https://user-images.githubusercontent.com/78702422/147031192-dfc354e7-068b-4e4a-887c-5b972a8dc84b.PNG)

<h2>Envoyer un document :</h2>

Chaque employé peut partager les documents avec ses collègues via e-mail, il a besoin juste de choisir le document et saisir les champs (l’email du récepteur, le sujet , le message ) pour réaliser cette tâche dans des secondes.

![Capture21](https://user-images.githubusercontent.com/78702422/147031206-66e51a69-703f-4ef2-bfbc-c654f1209605.PNG)

<h2>Affichage des documents :</h2>

Cette page affiche tous les documents ajoutés par l'employé. Il peut soit les télécharger, soit les consulter.

![Capture22](https://user-images.githubusercontent.com/78702422/147031446-5010012a-6c76-4410-aeb8-8ae964b8d864.PNG)

<h2>Rechercher un document :</h2>

L’utilisateur peut chercher le document souhaité par filtrage, il suffit de taper les premières lettres du nom du document et tous les documents qui commencent par ces lettres s’affichent. Après son affichage, l’employé peut le consulter sans le télécharger, il peut aussi le télécharger directement sans le consulter.

![Capture23](https://user-images.githubusercontent.com/78702422/147031474-7c8cec9a-c173-4fe7-84df-e19bff7e1015.PNG)

