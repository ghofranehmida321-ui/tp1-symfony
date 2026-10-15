tp2
q1:Créer un FormType dans une classe séparée permet de séparer la construction du formulaire du contrôleur, de réutiliser le formulaire et de faciliter la maintenance du code.
q2:Créer un objet vide
Créer le formulaire
Traiter les données envoyées
Vérifier la soumission	
Vérifier la validité des données
Préparer l'objet pour l'enregistrement
Effectuer l'enregistrement en base de données
Rediriger vers une autre page
q3:La validation côté client utilise HTML5 ou JavaScript dans le navigateur pour vérifier les données avant leur envoi. Elle améliore l'expérience utilisateur, mais peut être contournée.
La validation côté serveur utilise Symfony Validator pour contrôler les données reçues. Elle est indispensable pour empêcher l'enregistrement de données invalides, même si la validation côté client a été contournée.
q4:1 : La migration ajoute une colonne categorie_id dans la table article et une contrainte de clé étrangère qui la relie à la colonne id de la table categorie.
2 : Une clé étrangère est une colonne qui établit une relation entre deux tables et garantit la cohérence des données liées.
q5:createFormBuilder() : son avantage est qu'il permet de créer rapidement un formulaire directement dans le contrôleur. Son inconvénient est que le code peut devenir difficile à organiser et à maintenir.
FormType séparé : son avantage est de séparer la définition du formulaire du contrôleur, ce qui facilite la réutilisation et la maintenance. Son inconvénient est qu'il nécessite la création d'une classe supplémentaire.
q6:Il ne faut pas appeler persist() lors de la modification d'une entité existante, car Doctrine la connaît déjà et la gère automatiquement.
Le concept qui explique ce comportement est l'EntityManager et l'état managed (géré) d'une entité.
q7:Une attaque CSRF consiste à faire exécuter à un utilisateur connecté une action non désirée à son insu. Utiliser GET pour supprimer une ressource est dangereux, car cette requête peut être déclenchée facilement par un simple lien ou automatiquement. Il faut utiliser une méthode adaptée, comme POST ou DELETE, et protéger l'action avec un jeton CSRF.
