<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('set_cache_control_headers')) {
    /**
     * Set Cache-Control headers for sensitive and static content
     *
     * @param string $page_type - Type of page (sensitive or static)
     * @return void
     */
    function set_cache_control_headers_helper($page_type) {
        $CI =& get_instance();  // Get CI instance to use its resources

        if ($page_type === 'sensitive') {
            // For sensitive pages like login, profile, etc.
            $CI->output->set_header('Cache-Control: no-store');
            $CI->output->set_header('Pragma: no-cache');
        } else {
            // For static pages (like images, CSS, JS)
            $CI->output->set_header('Cache-Control: public, max-age=86400');  // Cache for 1 day
        }
    }
}
