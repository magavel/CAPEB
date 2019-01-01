La CAPEB national, Confédération de l'Artisanat et des Petites Entreprises du Bâtiment, lance une communication nationale auprès de ses adhérents sur les applications mobiles mise en place par certains départements. Deux objectifs : premièrement inciter tous les adhérents (et non adhérents) à télécharger l'application sur leur smartphone, deuxièmement séduire de nouveaux départements à déployer l'application départementale sur leur territoire.

Aujourd'hui l'application est disponible sur iPhone et Android, notamment pour la CAPEB 71. Par une campagne digitale, la CAPEB nationale souhaite informer 100 000 adhérents de ce nouveau canal de communication.

Dans ce cadre, l'agence MIW est missionnée pour concevoir et déployer, une campagne d'envoi de SMS aux 100 000 adhérents (l'envoi est programmé par un routeur spécialisé dès validation du client par le client) qui expliquera en 140 caractères l'intérêt à télécharger l'application et permettra aussi de consulter le site Internet mis en place à cet effet.

A rendre sur edmodo.com (lien vers votre projet GitHub : ficher text du SMS, email en html, site web (css, js, html) etc.):
- un texte SMS : 140 caractères (ASCII non étendu)
- un mini site web : incluant une présentation de
 l'application, les liens pour télécharger les applications
  existantes, un formulaire pour recevoir une documentation par email. 
  Voir maquette. Projet sous Compass, avec Bootstrap, SASS, et tont Icon. 
  Les images sont découpées en pièces jointes.
- l'email en HTML qui sera envoyé lors d'une inscription au formulaire.

Les critères techniques de jugement :
- le SMS sera courtois mais impactant. Le lien vers le site sera raccourci. L'expéditeur sera identifié par la signature suivant en fin " - Votre CAPEB".

- l'email sera charté aux couleurs de la CAPEB et de l'appli. Il reprendra l'intégralité des arguments et plusieurs copies d'écran. Il doit être lisible sur toutes les messageries : ThunderBird, Gmail, Yahoo!. Il devra être aussi transférable à d'autres personnes sans perte de qualité.

- le site Internet présentera l'application avec des copies d'écran, des arguments, les liens vers les applications CAPEB. L'aperçu sera optimisé lors du partage du lien sur Facebook via les balises Open Graph. Une balise meta itunes sera intégré pour la valoriser l'application CAPEB 71.
-- Un formulaire (nom, prenom, email) permettra de recevoir l'email de présentation automatiquement. L'envoi en PHP n'est pas à faire.

-- Pour simplifier la présentation au client (de l'agence MIW), un mini-sélecteur en JS ou params GET permettra de changer le thème de couleur : jaune, rose, vert. Ainsi lors de la réunion avec le client, l'agence MIW pourra obtenir une validation rapide du client. Pour cela, l'usage de feuille SASS sera requise et une structuration claire. (voir l'exercice du cours précent).

-- Le site sera bien sûr responsive en mobile-first. L'usage du framework Bootstrap est requis.



A rendre sur Github (lien à mettre ici):
- projet complet du site web : SASS, HTML, CSS, etc. Vous pouvez utiliser Gulp / Grunt.
- email rendu en HTML / CSS. Prendre un modèle sur http://responsiveemailpatterns.com/
- le texte du SMS dans un fichier TXT. Sans faute d'orthographe.



