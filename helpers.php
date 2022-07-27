<?php

/**
 * Ces fonctions sont nécessaires pour le workflow de Vite.
 * Elles ont été créées par Matthieu donc n'y touchez pas.
 */

/**
 * Permet de savoir si le serveur de dev vite est lancé.
 */
function viteIsDev($entry) {
    static $isDev = null;

    if ($isDev !== null) {
        return $isDev;
    }

    return $isDev = (bool) @file_get_contents('http://localhost:5173/'.$entry);
}

/**
 * Permet d'afficher les bonnes balises script et link.
 */
function vite($entry) {
    return viteJs($entry).PHP_EOL.viteCss($entry);
}

/**
 * Permet de générer la bonne balise script.
 */
function viteJs($entry) {
    $url = viteIsDev($entry) ? 'http://localhost:5173/'.$entry : viteAsset($entry);

    return $url ? '<script type="module" src="'.$url.'"></script>' : '';
}

/**
 * Permet de générer les links.
 */
function viteCss($entry) {
    if (viteIsDev($entry)) {
        return '';
    }

    $manifest = viteManifest();
    $urls = [];
    $tags = '';

    if (!empty($manifest[$entry]['css'])) {
        foreach ($manifest[$entry]['css'] as $file) {
            $urls[] = '/dist/'.$file;
        }

        foreach ($urls as $url) {
            $tags .= '<link rel="stylesheet" href="'.$url.'">'.PHP_EOL;
        }
    }

    return $tags;
}

/**
 * Permet d'aller lire le manifest.
 */
function viteManifest() {
    return json_decode(@file_get_contents(__DIR__.'/public/dist/manifest.json'), true);
}

/**
 * Permet d'aller lire une entrée dans le manifest.
 */
function viteAsset($entry) {
    $manifest = viteManifest();

    return isset($manifest[$entry]) ? '/dist/'.$manifest[$entry]['file'] : '';
}
