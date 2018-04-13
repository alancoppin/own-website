// Fichiers d'extention multiple à copier {lien src : lien dist}
//  Mettre le SRC sans "./" comme suit :  "assets_dev/fonts/**/*" pour que le watch fonctionne dessus
// N.D.A : Le watch a un problème avec l'utilisation du "./".
// N.D.A 2 : Le watch ne peut s'effectuer sur la création d'un nouveau dossier.
var migrationConfig =  {
   "assets_dev/vendor/fontawesome/fonts/**/*" : "./assets_dist/fonts"
};

/* Fichiers JS de vendor à compresser dans le fichier assets_dist/js/vendor.js*/
var vendorConfig = [
    './assets_dev/vendor/jquery/dist/jquery.min.js',
    './assets_dev/vendor/bootstrap-sass/assets/javascripts/bootstrap.min.js',
    './assets_dev/vendor/gsap/src/minified/jquery.gsap.min.js',
    './assets_dev/vendor/gsap/src/minified/TweenMax.min.js',
    './assets_dev/vendor/gsap/src/minified/TimelineMax.min.js',
    './assets_dev/vendor/lodash/dist/lodash.min.js',
    './assets_dev/vendor/typed.js/lib/typed.min.js',
    './assets_dev/vendor/lazysizes/lazysizes.min.js',
    './assets_dev/vendor/macy/dist/macy.js'
];

// export it
exports.vendorConfig =vendorConfig;
exports.migrationConfig =migrationConfig;
