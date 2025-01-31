<?php
/**
 * Manages all our base variables
 *
 * @package ide-interactive/simple-logo-carousel
 */

namespace PLSimpleLogoCarousel\Base;

/**
 * @property string plugin_path
 * @property string plugin_url
 * @property string plugin
 * @property string admin_url
 * @property string updater_url
 */
class BaseController
{
    public $plugin_path;
    public $plugin_url;
    public $plugin;
    public $admin_url;
    
    /**
     * create our constructor
     */
    public function __construct()
    {
        $this->plugin_path = plugin_dir_path(dirname(__FILE__, 2));
        $this->plugin_url = plugin_dir_url(dirname(__FILE__, 2));
        $this->plugin = plugin_basename(dirname(__FILE__, 3)) . '/simple-logo-carousel.php';
        $this->admin_url = admin_url();
    }
}
