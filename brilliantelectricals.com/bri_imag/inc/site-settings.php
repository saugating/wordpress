<?php
if ( ! defined( '_I_VERSION' ) ) {
  wp_die('No Direct access allowed.');
}

class Site_Setting_attributes
{
  protected $attributes = [];

  public function get_fields()
  {
    $this->attributes = [
      array('id'=>'ic_google_map_link','title'        =>'Site Description:','cb'              =>'ic_google_map_link_cb','type'    =>'text'),

      array('id'=>'ic_insta_link','title'             =>'Instagram Link:','cb'               =>'ic_social_links_cb','type'       =>'url'),
      array('id'=>'ic_fb_link','title'                =>'Facebook Link:','cb'                =>'ic_social_links_cb','type'       =>'url'),
      array('id'=>'ic_tw_link','title'                =>'Twitter Link:','cb'        =>'ic_social_links_cb','type'        =>'url'),

      array('id'=>'ic_location','title'        =>'Location:','cb'              =>'ic_google_map_link_cb','type'    =>'text'),
      array('id'=>'ic_email','title'        =>'Email Address:','cb'              =>'ic_google_map_link_cb','type'    =>'text'),
      array('id'=>'ic_email_office','title'        =>'Office Email Address:','cb'              =>'ic_google_map_link_cb','type'    =>'text'),
      array('id'=>'ic_contact','title'        =>'Contact Number:','cb'              =>'ic_google_map_link_cb','type'    =>'text'),
      array('id'=>'ic_contact_office','title'        =>'Office Contact Number:','cb'              =>'ic_google_map_link_cb','type'    =>'text'),
    ];
  }
}

class Site_Settings extends Site_Setting_attributes
{
  private $db;
  private $options;

  public function __Construct()
  {
    global $wpdb;
    $this->db = $wpdb;
    $this->get_fields();
    add_action( 'admin_menu', array($this, 'custom_setting_page'));
    add_action( 'admin_init', array($this, 'ic_settings_cb'));
  }

  public function custom_setting_page() {
    add_menu_page( 'Site Settings', 'Site Settings', 'manage_options', 'site_settings_page', array($this, 'ic_page_settings_cb'),'dashicons-admin-generic', 95.99);
  }

  public function ic_page_settings_cb()
  {
    $this->options = get_option( 'ic_options' );
    ?>
    <div class="wrap">
      <h1>Site Settings</h1>
      <form method="post" action="options.php">
        <?php
        settings_fields( 'ic_options_group' );
        do_settings_sections( 'ic_settings' );
        submit_button();
        ?>
      </form>
    </div>
    <?php
  }

  public function ic_settings_cb()
  {
    register_setting(
      'ic_options_group',
      'ic_options',
      array( $this, 'sanitize' )
    );

    add_settings_section(
      'ic_section_id',
      '',
      array( $this, 'get_info' ),
      'ic_settings'
    );

    if(is_array($this->attributes) && !empty($this->attributes))
    {
      foreach($this->attributes as $attribute)
      {
        add_settings_field(
          $attribute['id'], // ID
          $attribute['title'], // Title
          array( $this, $attribute['cb'] ), // Callback
          'ic_settings', // Page
          'ic_section_id', // Section,
          $attribute['id']
        );
      }
    }
  }

  public function sanitize( $input )
  {
    $new_input = array();
    if(is_array($this->attributes) && !empty($this->attributes)){
      foreach($this->attributes as $attribute)
      {
        if(isset( $input[$attribute['id']] ) && $attribute['type'] == 'text')
        {
          $new_input[$attribute['id']] = sanitize_text_field( $input[$attribute['id']] );
        }
        if(isset( $input[$attribute['id']] ) && $attribute['type'] == 'url')
        {
          $new_input[$attribute['id']] = esc_url_raw( $input[$attribute['id']] );
        }
      }
    }
    return $new_input;
  }

  public function get_info()
  {
    print 'Please configure the site settings :';
  }



  public function ic_contact_email_cb( $args )
  {
    printf(
      '<input type="email" id="'.$args.'" class="regular-text" name="ic_options['.$args.']" value="%s" required="required" />',
      isset( $this->options[$args] ) ? esc_attr( $this->options[$args]) : ''
    );
  }

  public function ic_contact_no_cb( $args )
  {
    printf(
      '<input type="text" id="'.$args.'" class="regular-text" name="ic_options['.$args.']" value="%s" required="required" />',
      isset( $this->options[$args] ) ? esc_attr( $this->options[$args]) : ''
    );
  }

  public function ic_social_links_cb( $args )
  {
    printf(
      '<input type="url" id="'.$args.'" class="regular-text" name="ic_options['.$args.']" value="%s" required="required" />',
      isset( $this->options[$args] ) ? esc_attr( $this->options[$args]) : ''
    );
  }

  public function IC_google_map_link_cb( $args )
  {
    printf(
      '<input type="text" id="'.$args.'" class="regular-text" name="ic_options['.$args.']" value="%s" required="required" />',
      isset( $this->options[$args] ) ? esc_attr( $this->options[$args]) : ''
    );
  }

  public function get_site_settings_cb( $args )
  {
    $options = get_option( 'ic_options' );
    if(array_key_exists($args['option'], $options))
    {
      return $options[$args['option']];
    }
  }


}
if(is_admin()):
  new Site_Settings();
else:
  add_shortcode( 'get_site_value', array( 'Site_Settings', 'get_site_settings_cb' ) );
endif;
