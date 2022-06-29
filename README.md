# Setup Vite + PHP Full Stack Ninja 🥷🚀

Ce setup permet de mettre en place un projet Full Stack en combinant le PHP et Vue JS. L'avantage est que l'on profite de tout ce qu'on peut faire avec Vue CLI (Import, fichier vue seul) et de tout ce qu'on peut faire en PHP.

Ici, nous passons par [Vite](https://vitejs.dev) pour faire la compilation et pas [webpack](https://webpack.js.org) comme Vue CLI.

Le front et les composants Vue sont dans le dossier `vite` où l'on retrouve la même structure que Vue CLI. La partie PHP est dans le dossier `public`. L'avantage de ce dossier est qu'il sera le seul accessible pour le serveur web.

Pour créer le dossier `vite`, j'ai simplement suivi la documentation. L'exemple est fait avec Vue JS mais on pourrait le faire avec React.

## Lancer le serveur front

Pour travailler avec Vue JS, il faudra lancer le serveur de développement vite :

```bash
cd vite
npm install
npm run dev
```

## Lancer le serveur back

Pour travailler avec PHP et HTML, il faudra lancer le serveur de développement back :

```bash
php -S 127.0.0.1:8000 -t public
```

Le site est maintenant accessible sur http://localhost:8000

## Configuration pour les images

Les images seront stockées dans le dossier `src` de `vite`. On peut faire un raccourci avec un lien symbolique pour les avoir facilement dans le dossier `public` :

```bash
ln -s {CHEMIN_PROJET_VITE}/src/assets {CHEMIN_PROJET_PUBLIC}/assets
```

## Utiliser du HTML / CSS / PHP

Il est évident que vous pouvez faire du HTML / CSS / PHP et même du JS de manière classique dans le dossier `public`.

## Utiliser Vue JS sur une page HTML ou PHP

L'avantage de cette architecture est que vous pouvez facilement ajouter un composant Vue dans n'importe quel fichier html ou php que vous allez créer.

## Déployer le code

Lorsque votre projet ira en production, vous n'aurez pas le serveur de développement, il faudra donc faire une compilation des fichiers JS :

```bash
cd vite && npm run build
```

Les fichiers compilés vont se retrouver dans le dossier `public/dist`. A chaque modification des fichiers Vue, il faut recompiler.
