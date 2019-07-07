<?php

// See: https://timber.github.io/docs/guides/cheatsheet/

$context = Timber::context();
$context['post'] = new Timber\Post();
Timber::render( 'single.twig', $context );