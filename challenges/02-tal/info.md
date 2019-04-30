Le Traitement Automatique des Langues (TAL) est l'une des diciplines les plus ardues de l'informatique.

Le français est une des langues les plus dure à formaliser.

Voici donc un challenge avancé pour débuter en TAL du français !

Vous pouvez choisir de le faire en PHP ou en JavaScript.

## Le code paraît bon

- Créer une fonction génératrice de phrases aléatoires, mais valides en français
- Chaque phrase commencera par une majuscule, et finira par un point + un saut de ligne.
- Chaque phase aura la forme suivante: *Article / nom-commun / verbe-d'-état / adjectif-qualificatif.*
    - Les articles possibles sont: "le", "la" ou "l'"
    - Les noms communs sont les mots de bases désignants les choses. On veut les 30 les plus utilisés en français (trouver sur internet).
        - ex: "chat", "ami", "justice"...
    - Les verbes d'état sont les 8 verbes utilisés pour exprimer l'état ou le changement d'état d'une chose (trouver sur internet).
        - ex: "être", "devenir"...
    - Les adjectifs qualificatifs sont des mots caractérisants les choses. On veut les 20 les plus utilisés en français (trouver sur internet).
        - ex: "bleue", "gentil", "magique"...
- la fonction doit retourner des phrases valides, mais elles peuvent être absurdes:
    - le chat est bleu - OK
    - la chat est bleu - PAS OK
    - le ciel semble gentil - OK
    - la souris est gentil - PAS OK
    - la justice est douce - OK

- votre code doit être correctement organisé: (si PHP, aucun fichier ne doit faire plus de 50 lignes)
- chaque nom, verbe et adjectif doit être tiré aléatoirement

## Tips
- prenez bien le temps de décomposer chaque problème, en commençant petit (ex: un simple générateur de nom commun aléatoire parmis 3 mots seulement)
- Ne perdez pas de temps: copier / coller les listes de mots touvées sur internet avec [ctrl + c] [ctrl + maj + v], puis utiliser [ctrl + d] pour faire des modifications communes sur sublimetext/vscode
- pensez à toutes les implications du masculin et du féminin en français :
    - quel mot change le genre de quels autres ?
    - avez vous besoin de string ? de booléen ?
    - avez vous besoin d'arrays ? de hashtables ? de collections bien organisées ?

## Consigne bonus
- gérer les pluriels pour chaque article - nom - verbe - adjectif !!!


Bonne chance...
