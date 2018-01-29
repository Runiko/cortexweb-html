# Cortex for Web (visualization in HTML)

## Contribute

### First steps
If you want to add or repair something in design or functioning of our app, just do these steps:
* download and install XAMPP with PHP 7.0.27
* fork this repo in GitHub and then clone it into ```htdocs``` directory (name of local directory must be *cortexweb-html*)
* run Apache and MySQL services in XAMPP Control Panel
* use your favourite database manager and import file ```cortexweb_html.sql```
* browse to URL ```localhost/cortexweb-html/```
* feel free to add something cool

### Translations
If you want to add other language, duplicate file ```strings-en.php``` in ```views``` directory and rename it to ```strings-LC.php```, where ```LC``` should be two-letters language code.
Then translate all strings and push changes to your fork.

For corrections just edit specific files.

### Pushing commits

When your changes are ready to apply, do these steps:
* commit them to your fork
* create new pull request in our repository
