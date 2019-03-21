
Site : https://www.slash-group.com/
===================================

### Performance 19/100 

**Render-Blocking Resources**: Le site charge de nombreuses ressources au démarrage de la page.
Par exemple l'api google maps or cela n'est pas nécessaire sur la page d'accueil.
Jquery est également utilisé pour faire un loader, on pourrait éviter de charger toute une librairie pour un simple fondu.

**Serve images in next-gen formats**: Les images utilisées ne sont pas optimisées pour le web, il pourrait être intéressant de passer sur du format WebP ou JPEG 2000 ou encore JPEG XR

**Defer unused CSS**: de nombreuses régles css ne sont plus utilisées, il faudrais nettoyer le code.

**Defer offscreen images**: Pour que l'utilisateur puisse accéder plus rapidement au site, il faudrait d'abord charger le texte, il accède au site et enfin ont charge les images.

### Accessibility 62/100

**Background and foreground colors do not have a sufficient contrast ratio**: Les contrastes de certains éléments de la page ne sont pas assez marqué et nuisent
à la lisibilité

**attributes on the page are not unique**: les id de la pages sont réutilisé

**Links do not have a discernible name**: Les noms de liens ne sont pas explicites, ce qui peut prêter à confusion.

### Best Practices 79/100

**Does not use HTTP/2 for all of its resources**: la version d'HTTP est obsolète

**Includes front-end JavaScript libraries with known security vulnerabilities**: 2 vulnérabilitées javascript ont été détecté qui pourrait être exploité par des attaquants
- jQuery@1.12.4
- jQuery UI@1.11.4.4

**Browser errors were logged to the console**: 

### SEO 91/100

**Document does not have a meta description**: Le navigateur ne peut pas présenter une brève description du contenu de la page


### Test de vulnérabilité BWAPP

1-