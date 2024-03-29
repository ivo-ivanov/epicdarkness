<?php
/**
 * Loop Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! wc_review_ratings_enabled() ) {
	return;
}

$rating_count = $product->get_rating_count();
$average      = $product->get_average_rating();
if ( $rating_count > 0 ) : ?>

<div class="woocommerce-product-rating">
	<?php echo wc_get_rating_html( $average, $rating_count ); // WPCS: XSS ok. ?>
	<span class="woocommerce-product-rating-count"><?php echo esc_html($rating_count); ?></span>
</div>

<?php endif; ?>