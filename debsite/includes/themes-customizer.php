<?php 


function mytheme_customize_register( $wp_customize ) {
    
    $wp_customize->add_section( 'deb_site_new_section_name' , array(
    'title'      => __( 'Theme Settings', 'Deb_Site' ),
    'priority'   => 30,
) );
    
    //Footer copyrights
   $wp_customize->add_setting( 'footer_copyright' , array(
    'default'   => 'copright editable-> customizer',
    'transport' => 'refresh',
) );
    
    
    $wp_customize->add_control( 
        'footer_control_id_credits', 
        array(
            'label'    => __( 'Change Copyright Text', 'Deb_Site' ),
            'section'  => 'deb_site_new_section_name',
            'settings' => 'footer_copyright',
            'type'     => 'text',
            
        )
    ); 
    
    
    //PRIMARY COLOR
    $wp_customize->add_setting( 'primary_theme_color' , array(
    'default'   => '#007bff',
    'transport' => 'refresh',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'deb_site_primary_color', array(
	'label'      => __( 'Primary Color', 'Deb_Site' ),
	'section'    => 'deb_site_new_section_name',
	'settings'   => 'primary_theme_color',
) ) );
}


add_action( 'customize_register', 'mytheme_customize_register' );
add_action('wp_footer', 'footer_add_credits_copyrights');

function footer_add_credits_copyrights()
{
        echo "<script>
        document.getElementById('footer-copyright-credits').innerHTML=\"".get_theme_mod('footer_copyright', false)."\";

        </script>";
}

function mytheme_customize_css()
{
    ?>
         <style type="text/css">
             #commentform .form-submit #submit{
                background-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
             }
             #searchButton:hover{
                color:<?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
            }
             .badge-primary {
                background-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
            }
             .bg-primary {
                background-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>!important;
            }
             .border-primary {
                border-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>!important;
            }
             .btn-outline-primary {
                 color:<?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
                border-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
            }
             .btn-outline-primary:hover {
                  color: #fff;
                  background-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
                  border-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
                }
             .btn-outline-primary:focus, .btn-outline-primary.focus {
                  box-shadow: 0 0 0 0.2rem rgba(<?php 
                    $hex = get_theme_mod('primary_theme_color', '#007bff');;
                list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                echo "$r, $g, $b, 0.5";  ?>);
                }
             
                .btn-outline-primary.disabled, .btn-outline-primary:disabled {
                  color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
                }

                .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
                .show > .btn-outline-primary.dropdown-toggle {
                  background-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
                  border-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
                }

                .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
                .show > .btn-outline-primary.dropdown-toggle:focus {
                  box-shadow: 0 0 0 0.2rem rgba(<?php 
                    $hex = get_theme_mod('primary_theme_color', '#007bff');;
                list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                echo "$r, $g, $b, 0.5";  ?>);
                }
                 
                 .btn-primary {
                  background-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?> !important;;
                  border-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?> !important;
                    color:white !important;
                }

                .btn-primary:hover {
                  background-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
                  border-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
                     filter: brightness(80%);
                }

                .btn-primary:focus, .btn-primary.focus {
                  box-shadow: 0 0 0 0.2rem rgba(<?php 
                    $hex = get_theme_mod('primary_theme_color', '#007bff');;
                list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                echo "$r, $g, $b, 0.5";  ?>);
                }

                .btn-primary.disabled, .btn-primary:disabled {
                  background-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
                  border-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
                }

                .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
                .show > .btn-primary.dropdown-toggle {
                  background-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
                  border-color: <?php echo get_theme_mod('primary_theme_color', '#007bff'); ?>;
                }

                .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
                .show > .btn-primary.dropdown-toggle:focus {
                  box-shadow: 0 0 0 0.2rem rgba(<?php 
                    $hex = get_theme_mod('primary_theme_color', '#007bff');;
                list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                echo "$r, $g, $b, 0.5";  ?>);
                }
         </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');



?>