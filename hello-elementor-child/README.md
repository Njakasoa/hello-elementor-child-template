# Hello Elementor Child (Takamoa)

A starter child theme for [Hello Elementor](https://wordpress.org/themes/hello-elementor/) with a modern build pipeline using Vite and Lightning CSS.

## Installation

1. Copy or zip the `hello-elementor-child` folder into `wp-content/themes/`.
2. Activate **Hello Elementor Child (Takamoa)** from the WordPress dashboard.

## Development

```bash
npm ci
npm run dev       # development server
npm run build     # build to /dist
```

```bash
composer install
composer phpcs    # run coding standards
```

## Elementor widgets

A sample widget scaffold exists at `inc/Elementor/widgets/class-sample-widget.php`. To enable it, uncomment the lines in `inc/Elementor/class-plugin.php` that require and register the widget.

## WooCommerce

The theme adds WooCommerce support automatically when the plugin is active.

## Security

Use nonces when processing forms or AJAX requests:

```php
wp_nonce_field( 'action', 'nonce_field' );
// Verify: check_admin_referer( 'action', 'nonce_field' );
```
