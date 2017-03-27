# ACF Modular

- You will need ACF Pro to use this code.
- Import ACF files from acf-json folder.
- Create new post type called  Modules.

Add this code in your functions.php file in theme directory /wp-content/themes/theme_name

```php
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'modules',
    array(
      'labels' => array(
        'name' => __( 'Modules' ),
        'singular_name' => __( 'module' )
      ),
      'public' => true,
      'publicly_queryable' => false,
    )
  );
}
```

- Add new module content from Modules content type.
- Browse page content type and try to add modules there.