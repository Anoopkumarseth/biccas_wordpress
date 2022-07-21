<?php 

function teams_collab() {  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Collabs', 'Post Type General Name', 'Biccas' ),
            'singular_name'       => _x( 'Collab', 'Post Type Singular Name', 'Biccas' ),
            'menu_name'           => __( 'Collabs', 'Biccas' ),
            'parent_item_colon'   => __( 'Parent Collab', 'Biccas' ),
            'all_items'           => __( 'All Collabs', 'Biccas' ),
            'view_item'           => __( 'View Collab', 'Biccas' ),
            'add_new_item'        => __( 'Add New Collab', 'Biccas' ),
            'add_new'             => __( 'Add New', 'Biccas' ),
            'edit_item'           => __( 'Edit Collab', 'Biccas' ),
            'update_item'         => __( 'Update Collab', 'Biccas' ),
            'search_items'        => __( 'Search Collab', 'Biccas' ),
            'not_found'           => __( 'Not Found', 'Biccas' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'Biccas' ),
            
        );          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'Collabs', 'Biccas' ),
            'description'         => __( 'Collab news and reviews', 'Biccas' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
            'menu_icon'   => 'dashicons-nametag',
      
        );          
        // Registering your Custom Post Type
        register_post_type( 'team_collabs', $args );
      
    }
    add_action( 'init', 'teams_collab', 0 );


function support_ratings() {  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Ratings', 'Post Type General Name', 'Biccas' ),
            'singular_name'       => _x( 'Rating', 'Post Type Singular Name', 'Biccas' ),
            'menu_name'           => __( 'Ratings', 'Biccas' ),
            'parent_item_colon'   => __( 'Parent Rating', 'Biccas' ),
            'all_items'           => __( 'All Ratings', 'Biccas' ),
            'view_item'           => __( 'View Rating', 'Biccas' ),
            'add_new_item'        => __( 'Add New Rating', 'Biccas' ),
            'add_new'             => __( 'Add New', 'Biccas' ),
            'edit_item'           => __( 'Edit Rating', 'Biccas' ),
            'update_item'         => __( 'Update Rating', 'Biccas' ),
            'search_items'        => __( 'Search Rating', 'Biccas' ),
            'not_found'           => __( 'Not Found', 'Biccas' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'Biccas' ),
            
        );          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'Ratings', 'Biccas' ),
            'description'         => __( 'Rating news and reviews', 'Biccas' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
            'menu_icon'   => 'dashicons-star-filled',
      
        );          
        // Registering your Custom Post Type
        register_post_type( 'support_ratings', $args );
      
}
add_action( 'init', 'support_ratings', 1 );


function testimonials() {  
    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'testimonials', 'Post Type General Name', 'Biccas' ),
            'singular_name'       => _x( 'testimonial', 'Post Type Singular Name', 'Biccas' ),
            'menu_name'           => __( 'testimonials', 'Biccas' ),
            'parent_item_colon'   => __( 'Parent testimonial', 'Biccas' ),
            'all_items'           => __( 'All testimonials', 'Biccas' ),
            'view_item'           => __( 'View testimonial', 'Biccas' ),
            'add_new_item'        => __( 'Add New testimonial', 'Biccas' ),
            'add_new'             => __( 'Add New', 'Biccas' ),
            'edit_item'           => __( 'Edit testimonial', 'Biccas' ),
            'update_item'         => __( 'Update testimonial', 'Biccas' ),
            'search_items'        => __( 'Search testimonial', 'Biccas' ),
            'not_found'           => __( 'Not Found', 'Biccas' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'Biccas' ),
            
        );          
    // Set other options for Custom Post Type
          
        $args = array(
            'label'               => __( 'testimonials', 'Biccas' ),
            'description'         => __( 'testimonial news and reviews', 'Biccas' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
            'menu_icon'   => 'dashicons-testimonial',
      
        );          
        // Registering your Custom Post Type
        register_post_type( 'testimonials', $args );
      
    }
    add_action( 'init', 'testimonials', 3 );


    function pricing() {  
        // Set UI labels for Custom Post Type
            $labels = array(
                'name'                => _x( 'Plans', 'Post Type General Name', 'Biccas' ),
                'singular_name'       => _x( 'Plan', 'Post Type Singular Name', 'Biccas' ),
                'menu_name'           => __( 'Plans', 'Biccas' ),
                'parent_item_colon'   => __( 'Parent Plan', 'Biccas' ),
                'all_items'           => __( 'All Plans', 'Biccas' ),
                'view_item'           => __( 'View Plan', 'Biccas' ),
                'add_new_item'        => __( 'Add New Plan', 'Biccas' ),
                'add_new'             => __( 'Add New', 'Biccas' ),
                'edit_item'           => __( 'Edit Plan', 'Biccas' ),
                'update_item'         => __( 'Update Plan', 'Biccas' ),
                'search_items'        => __( 'Search Plan', 'Biccas' ),
                'not_found'           => __( 'Not Found', 'Biccas' ),
                'not_found_in_trash'  => __( 'Not found in Trash', 'Biccas' ),
                
            );          
        // Set other options for Custom Post Type
              
            $args = array(
                'label'               => __( 'Plans', 'Biccas' ),
                'description'         => __( 'Plan news and reviews', 'Biccas' ),
                'labels'              => $labels,
                // Features this CPT supports in Post Editor
                'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
                // You can associate this CPT with a taxonomy or custom taxonomy. 
                'taxonomies'          => array( 'genres' ),
                /* A hierarchical CPT is like Pages and can have
                * Parent and child items. A non-hierarchical CPT
                * is like Posts.
                */
                'hierarchical'        => false,
                'public'              => true,
                'show_ui'             => true,
                'show_in_menu'        => true,
                'show_in_nav_menus'   => true,
                'show_in_admin_bar'   => true,
                'menu_position'       => 5,
                'can_export'          => true,
                'has_archive'         => true,
                'exclude_from_search' => false,
                'publicly_queryable'  => true,
                'capability_type'     => 'post',
                'show_in_rest' => true,
                'menu_icon'   => 'dashicons-tag',
                'taxonomies'          => array( 'category' ),
          
            );          
            // Registering your Custom Post Type
            register_post_type( 'pricing', $args );
          
    }
    add_action( 'init', 'pricing', 1 );