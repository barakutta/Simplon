# L'ivre dort

**Création d'un livre d'or en php**

1) Création d'un formulaire html envoyant via la méthode POST les données :
- **username**
- **message**

2) Reception en PHP des valeurs envoyées par le formulaire

3) Enregistrement du **message**, **username** et de la **date** (sous forme de timestamp), dans un fichier .txt unique contenant toutes les infos

_Dans un premier temps, vous pouvez stocker les messages dans un tableau php dans un variable de session, pour tester avant de passer à la version fichier txt_

4) Lecture du fichier txt et "parsing" pour affichage dans le HTML

-- OPTIONS --

5) Vérifier que le **username** reçu n'est pas le même que celui du dernier message posté (anti-flood)

6) Permettre lors du poste d'un message, d'ajouter un fichire image, si présent, l'afficher sous le message

-- AVANCÉ -- 

7) Mettre en place la modération des messages (suppression d'un message après qu'il ait été posté)
