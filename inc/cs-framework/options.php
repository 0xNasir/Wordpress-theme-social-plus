<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'cs_frameworks';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Theme options',
  'menu_slug'  => 'options',
) );

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => 'About',
  'icon'   => 'fa fa-home',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'about_title',
      'type'  => 'text',
      'title' => 'Title of section',
    ),

    array(
      'id'    => 'about_image',
      'type'  => 'upload',
      'library'=> 'image',
      'title' => 'Upload an image',
      'help'  => 'Upload an image for about the section',
    ),

    array(
      'id'    => 'about_details',
      'type'  => 'wp_editor',
      'title' => 'Description',
    ),

  )
) );

//
// Activites section
//
CSF::createSection( $prefix, array(
  'title'       => 'Activities',
  'icon'        => 'fa fa-activity',
  'fields'      => array(
    array(
      'id'       => 'activity_title',
      'type'     => 'text',
      'title'    => 'Title text',
    ),
    array(
      'id'       => 'show_activity',
      'type'     => 'switcher',
      'title'    => 'Show activity',
      'default'  => false,
    ),
  )
) );

//
// Activites summary
//
CSF::createSection( $prefix, array(
  'title'       => 'Activities summary',
  'icon'        => 'fa fa-summary',
  'fields'      => array(
    array(
      'id'       => 'summary_title',
      'type'     => 'text',
      'title'    => 'Title text',
    ),
    array(
      'id'       => 'summary_bg',
      'type'     => 'upload',
      'title'    => 'Upload a background image',
    ),
    array(
      'id'       => 'show_summary',
      'type'     => 'switcher',
      'title'    => 'Show activity summary',
      'default'  => false,
    ),
  )
) );
//
// Events
//
CSF::createSection( $prefix, array(
  'title'       => 'Events',
  'icon'        => 'fa fa-event',
  'fields'      => array(
    array(
      'id'       => 'event_title',
      'type'     => 'text',
      'title'    => 'Title of event section',
    ),
    array(
      'id'       => 'show_event',
      'type'     => 'switcher',
      'title'    => 'Show event section',
      'default'  => false,
    ),
  )
) );
//
// Welcome
//
CSF::createSection( $prefix, array(
  'title'       => 'Subscription',
  'icon'        => 'fa fa-mail',
  'fields'      => array(
    array(
      'id'       => 'subscription_title',
      'type'     => 'text',
      'title'    => 'Title of subscription section',
    ),
    array(
      'id'       => 'subscription_description',
      'type'     => 'wp_editor',
      'title'    => 'Description',
    ),
    array(
      'id'       => 'subscription_btn_text',
      'type'     => 'text',
      'title'    => 'Button text',
    ),
    array(
      'id'       => 'subscription_btn_url',
      'type'     => 'text',
      'title'    => 'Button URL',
    ),
    array(
      'id'       => 'show_subscription',
      'type'     => 'switcher',
      'title'    => 'Show subscription section',
      'default'  => false,
    ),
  )
) );
//
// Image gallery
//
CSF::createSection( $prefix, array(
  'title'       => 'Image gallery',
  'icon'        => 'fa fa-gallery',
  'fields'      => array(
    array(
      'id'       => 'image_gallery_title',
      'type'     => 'text',
      'title'    => 'Title of image gallery section',
    ),
    array(
      'id'       => 'image_gallery_btn',
      'type'     => 'text',
      'title'    => 'Button text',
    ),
    array(
      'id'       => 'image_gallery_url',
      'type'     => 'text',
      'title'    => 'Button URL',
    ),
    array(
      'id'       => 'show_image_gallery',
      'type'     => 'switcher',
      'title'    => 'Show image gallery section',
      'default'  => false,
    ),
  )
) );

//
// Contact page
//
CSF::createSection( $prefix, array(
  'title'       => 'Contact info',
  'icon'        => 'fa fa-briefcase',
  'fields'      => array(
    array(
      'id'       => 'contact_phone',
      'type'     => 'wp_editor',
      'title'    => 'Phone number and convenient time',
    ),
    array(
      'id'       => 'contact_mail_link',
      'type'     => 'wp_editor',
      'title'    => 'Email and website',
    ),
    array(
      'id'       => 'contact_address',
      'type'     => 'wp_editor',
      'title'    => 'Mailing address',
    ),
    array(
      'id'       => 'show_contact',
      'type'     => 'switcher',
      'title'    => 'Show Contact section',
      'default'  => false,
    ),
  )
) );
