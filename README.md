Acquia BLT Tugboat integration
====

This is a **community-supported** BLT plugin providing Tugboat integration. It is provided with no warranty or support. Contributions in the form of pull requests are welcome.

## Installation and usage

To use this plugin, you must already have a Drupal project using BLT 10.

In your project, require the plugin with Composer:

`composer require acquia/blt-tugboat`

Initialize the Tugboat integration by calling `recipes:ci:tugboat:init`, which is provided by this plugin:

`blt recipes:ci:tugboat:init`

This will copy a template Makefile to your project root directory. Make sure to commit this as well as your updated composer.json to Git.