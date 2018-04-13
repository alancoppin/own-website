<?php
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}

/* Personnalisation theme */

function theme_customize_register($wp_customize){

  // Code de personalisation du theme

  // Création de la section

  $wp_customize->add_section('ma_section',array(
    'title'=>'Option du thème',
    'description'=> 'Personalisation du thème',
    'priority'=>200,
  ));

  // Champ de texte
  $wp_customize->add_setting('adresse',array(
    'default'=>'Saisissez votre texte',
  ));

  // ajout du controle

  $wp_customize->add_control('adresse',array(
    'label' => 'Adresse',
    'section' => 'ma_section',
    'type' => 'textarea',
  )); 

  // Champ de texte
  $wp_customize->add_setting('mail',array(
    'default'=>'Saisissez votre texte',
  ));

  // ajout du controle

  $wp_customize->add_control('mail',array(
    'label' => 'Email',
    'section' => 'ma_section',
    'type' => 'mail',
  ));   

  // Champ de texte
  $wp_customize->add_setting('tel',array(
    'default'=>'Saisissez votre texte',
  ));

  // ajout du controle

  $wp_customize->add_control('tel',array(
    'label' => 'Numéro de téléphone',
    'section' => 'ma_section',
    'type' => 'tel',
  ));   


  // Champ de texte
  $wp_customize->add_setting('url_facebook',array(
    'default'=>'Saisissez votre texte',
  ));

  // ajout du controle

  $wp_customize->add_control('url_facebook',array(
    'label' => 'URL Pinterest',
    'section' => 'ma_section',
    'type' => 'url',
  ));


  // Champ de texte
  $wp_customize->add_setting('url_pinterest',array(
    'default'=>'Saisissez votre texte',
  ));

  // ajout du controle

  $wp_customize->add_control('url_pinterest',array(
    'label' => 'URL Pinterest',
    'section' => 'ma_section',
    'type' => 'url',
  ));

  // Champ de texte
  $wp_customize->add_setting('url_instagram',array(
    'default'=>'Saisissez votre texte',
  ));

  // ajout du controle

  $wp_customize->add_control('url_instagram',array(
    'label' => 'URL page Instagram',
    'section' => 'ma_section',
    'type' => 'url',
  ));


}

add_action('customize_register','theme_customize_register');

/* On ajoute les thumbnails */
add_theme_support('post-thumbnails');

/* Création produit */
add_action( 'init', 'create_post_type' );



function create_post_type() {
  register_post_type( 'project',
    array(
      'labels' => array(
       'name' => __( 'Project' ),
       'singular_name' => __( 'Project' )
      ),
      'public' => true,
	  'capability_type' => 'post',
	  'supports' => array(
	      'title',       
       'excerpt',       
       'thumbnail',
       'revisions',
       'page-attributes',
        'editor'
     ),
    'taxonomies' => array('category', 'post_tag')
    )
  );
}

/* Création de l'emplacement des menus (principale, secondaire, ...) */

if (function_exists('register_nav_menus')){
	register_nav_menus(
		array(
				'principal' => 'Menu principal'
			)
		);
}




