Le problème du FizzBuzz est simple, mais profond, ce qui en fait un outil populaire et normal en entretien d'embauche de dev. De quoi s'agit-il ? Voici la consigne :

## CONSIGNES
Ouvrez votre éditeur et écrivez une fonction, qui prend en paramètre n'importe-quel nombre entier, et qui retourne :
- "fizz" si c'est un multiple de 3
- "buzz" si c'est un multiple de 5
- "fizzbuzz" si c'est un multiple de 3 et 5
- l'entier d'origine, s'il n'a pas de multiples associés

## EXEMPLES
- 1 retourne 1
- 3 retourne "fizz"
- 4 retourne 4
- 5 retourne "buzz"
- 15 retourne "fizzbuzz"
- 16 retourne 16
- 30 retourne "fizzbuzz"
Bonus: si l'utilisateur passe autre chose qu'un entier à la fonction, elle devrait afficher un message d'erreur

## AIDE
Un multiple de x est un nombre qui, divisé par x, retourne un nombre entier et un reste égal à 0
- Exemple des multiples de 3: 3, 6, 9, 12, 15, 18, etc.
- Exemple des multiples de 5: 5, 10, 15, 20, 25, etc.

En informatique, il existe un opérateur qui renvoie le reste d'une division entière: le MODULO, qui se note %.
Par exemple, les condition suivantes sont vraies:
- 6 % 3 == 0, donc 6 est un multiple de 3
- 10 % 3 == 1, donc 10 n'est pas un multiple de 3
- 15 % 3 == 0, donc 15 est un multiple de 3
- 15 % 5 === 0, donc 15 est un multiple de 5
Pour résumer, si (n % x == 0), alors n est un multiple de x !


## ATTENTION
- ne cherchez pas la solution sur internet !
- donnez moi vos solutions en privé (en cliquant sur mon nom dans la liste à gauche) avant dimanche prochain, je les partagerais plus tard à celles qui auront joué.
- je testerai tous les nombres de 0 à 10 000, avec votre fonction, et ça doit marcher.
- pour celles qui finissent vite, je donnerais un autre exercice...

## CONSIGNES BONUS
1. La simplicité d'abord: 
    - réussissez l'exercice sans utiliser l'opérateur &&, et sans qu'aucun "if" soient imbriqués l'un dans l'autre
2. La complexité maîtrisée:
    - réussissez l'exercice avec, en plus "hiss" pour les multiple de 7, et "howl" pour les multiples de 11, en respectant les règles précédentes
    - exemples :
        - "fizzbuzz" si c'est un multiple de 3 et 5
        - "fizzbuzzhiss" si c'est un multiple de 3 et 5 et 7
        - "fizzbuzzhisshowl" si c'est un multiple de 3 et 5 et 7 et 11
        - tout les cas intermédaires doivent marcher aussi (ex: fizzhowl pour 33)
            - 15 -> "fizzbuzz"
            - 165 -> "fizzbuzzhowl"
            - 1155 -> "fizzbuzzhisshowl"
3. Faites en sorte qu'on puisse passer le tableau des conditions à la fonction, et qu'elle marche toujours peut importe les conditions :
```
$conditions = array(
    "fizz" => 3,
    "buzz" => 5,
    "hiss" => 7,
    "howl" => 11,
    "web8" => 17 /* etc... */
);
function fizzbuzz ($arrOfConditions, $testedInteger) {
    /* mon code */
    return;
}
echo fizzbuzz($conditions, 19635); // devrait afficher fizzbuzzhisshowlweb8
```


Bonne chance.