// Rimuovi compressione immagini
add_filter( 'wp_generate_attachment_metadata', 'remove_image_compression_astra', 10, 2 );
function remove_image_compression_astra( $metadata, $attachment_id ) {
    remove_filter( 'jpeg_quality', 'astra_jpeg_quality' );
    remove_filter( 'wp_editor_set_quality', 'astra_jpeg_quality' );
    return $metadata;
}
