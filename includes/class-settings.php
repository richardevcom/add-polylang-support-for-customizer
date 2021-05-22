<?php

namespace Richardevcom\Apsfc;

/**
 * APSFC Settings Class
 */
class ApsfcSettings
{
    /**
     * Holds the values to be used in the fields callbacks
     */
    private $options;

    /**
     * Init
     */
    public function __construct()
    {
        if (is_admin()) { // admin actions
            add_action('admin_menu', [$this, 'add_submenu_page'], 11);
            add_action('admin_init', [$this, 'register_settings']);
            add_filter('plugin_action_links_' . APSFC_BASENAME, array($this, 'add_action_links'));
        } else {
            // non-admin enqueues, actions, and filters
        }
    }

    /**
     * Add submenu page to Polylang parent page
     */
    public function add_submenu_page()
    {
        add_submenu_page(
            'mlang', // Third party plugin Slug 
            __('Customizer Support', 'apsfc'),
            __('Customizer Support', 'apsfc'),
            'manage_options',
            'apsfc-setting-admin',
            [$this, 'submenu_page'],
            3
        );
    }

    function add_action_links($links)
    {
        // Build and escape the URL.
        $url = esc_url(add_query_arg(
            'page',
            'apsfc-setting-admin',
            get_admin_url() . 'admin.php'
        ));
        // Create the link.
        $settings_link = "<a href='$url'>" . __('Settings') . '</a>';
        // Adds the link to the end of the array.
        array_push(
            $links,
            $settings_link
        );
        return $links;
    } //end nc_settings_link()

    /**
     * Display submenu page contents
     */
    public function submenu_page()
    {
        $this->options = get_option('apsfc_force_lang');
        if (isset($_POST)) {
            if (isset($_POST['apsfc_force_lang'])) {
                update_option('apsfc_force_lang', "on");
            } else {
                if (isset($_POST['submit'])) {
                    update_option('apsfc_force_lang', "off");
                }
            }
        }
?>
<div class="wrap">
    <h1><?php _e('Customizer Support Settings', 'apsfc'); ?></h1>
    <form method="post">
        <?php
                // This prints out all hidden setting fields
                settings_fields('apsfc_settings_group');
                do_settings_sections('apsfc-setting-admin');
                ?>
        <table class="form-table" role="presentation">
            <tbody>
                <tr>
                    <th scope="row"><?php _e('Language setup', 'apsfc'); ?></th>
                    <td>
                        <fieldset>
                            <label for="apsfc_force_lang">
                                <input name="apsfc_force_lang" type="checkbox" id="apsfc_force_lang"
                                    value="<?php echo get_option('apsfc_force_lang'); ?>"
                                    <?php echo get_option('apsfc_force_lang') == "on" ? " checked" : ""; ?>>
                                Force <i>"The language is set from content"</i> in <strong><code>Language</code> >
                                    <code>Settings</code> > <code>URL modifications</code></code></strong>?
                            </label>
                        </fieldset>
                    </td>
                </tr>
            </tbody>
        </table>
        <p class="submit"><?php submit_button(); ?></p>
    </form>
</div>
<?php
    }


    function register_settings()
    {
        register_setting('apsfc_settings_group', 'apsfc_force_lang');
        if (!get_option('apsfc_force_lang')) add_option('apsfc_force_lang', "off");
    }
}
