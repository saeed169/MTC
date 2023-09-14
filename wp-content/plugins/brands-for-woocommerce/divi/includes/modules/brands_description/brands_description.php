<?php

class ET_Builder_Module_brands_description extends ET_Builder_Module {

	public $slug       = 'et_pb_brands_description';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => '',
		'author_uri' => '',
	);
    function init() {
        $this->name       = __( 'Product Brands Description', 'brands-for-woocommerce' );
		$this->folder_name = 'et_pb_berocket_modules';

        $this->whitelisted_fields = array(
            'brand_id',
            'display_title',
            'display_description',
            'thumbnail_display',
            'thumbnail_width',
            'thumbnail_width_units',
            'thumbnail_height',
            'thumbnail_height_units',
            'thumbnail_fit',
            'thumbnail_align',
            'banner_display',
            'banner_width',
            'banner_width_units',
            'banner_height',
            'banner_height_units',
            'banner_fit',
            'banner_align',
            'related_products_display',
            'per_page',
            'columns',
            'orderby',
            'order',
            'slider',
            'hide_brands',
            'display_link',
            'featured',
        );

        $this->fields_defaults = array(
            'brand_id'              => array('', 'add_default_setting'),
            'display_title'         => array('on', 'add_default_setting'),
            'display_description'   => array('on', 'add_default_setting'),
            'thumbnail_display'     => array('on', 'add_default_setting'),
            'thumbnail_width'       => array('100', 'add_default_setting'),
            'thumbnail_width_units' => array('%', 'add_default_setting'),
            'thumbnail_height'      => array('100', 'add_default_setting'),
            'thumbnail_height_units'=> array('%', 'add_default_setting'),
            'thumbnail_fit'         => array('cover', 'add_default_setting'),
            'thumbnail_align'       => array('none', 'add_default_setting'),
            'banner_display'        => array('on', 'add_default_setting'),
            'banner_width'          => array('100', 'add_default_setting'),
            'banner_width_units'    => array('%', 'add_default_setting'),
            'banner_height'         => array('100', 'add_default_setting'),
            'banner_height_units'   => array('%', 'add_default_setting'),
            'banner_fit'            => array('cover', 'add_default_setting'),
            'banner_align'          => array('none', 'add_default_setting'),
            'related_products_display'=> array('off', 'add_default_setting'),
            'per_page'              => array('', 'add_default_setting'),
            'columns'               => array('4', 'add_default_setting'),
            'orderby'               => array('title', 'add_default_setting'),
            'order'                 => array('asc', 'add_default_setting'),
            'slider'                => array('off', 'add_default_setting'),
            'hide_brands'           => array('off', 'add_default_setting'),
            'display_link'          => array('off', 'add_default_setting'),
            'featured'              => array('off', 'add_default_setting'),
        );
		$this->advanced_fields = array(
			'fonts'           => array(
				'brand_title'   => array(
					'label'        => et_builder_i18n( 'Brand Title' ),
					'css'          => array(
						'main'      => "{$this->main_css_element} .brand_description_block h2",
						'important' => 'plugin_only',
					),
				),
			),
			'link_options'  => false,
			'visibility'    => false,
			'text'          => false,
			'transform'     => false,
			'animation'     => false,
			'background'    => false,
			'borders'       => false,
			'box_shadow'    => false,
			'button'        => false,
			'filters'       => false,
			'margin_padding'=> false,
			'max_width'     => false,
		);
    }

    function get_fields() {
        $brands = BREX_BrandExtension::get_brands_for_option();
        $brands = array_merge(array('' => 'Current Brand(work only on brand archive page)'), $brands);
        $fields = array(
            'brand_id' => array(
                "label"           => esc_html__( 'Brand', 'brands-for-woocommerce' ),
                'type'            => 'select',
                'options'         => $brands,
            ),
            'display_title' => array(
                "label"             => esc_html__( 'Display brand title', 'brands-for-woocommerce' ),
                'type'              => 'yes_no_button',
                'options'           => array(
                    'off' => esc_html__( "No", 'et_builder' ),
                    'on'  => esc_html__( 'Yes', 'et_builder' ),
                ),
            ),
            'display_description' => array(
                "label"             => esc_html__( 'Display brand description', 'brands-for-woocommerce' ),
                'type'              => 'yes_no_button',
                'options'           => array(
                    'off' => esc_html__( "No", 'et_builder' ),
                    'on'  => esc_html__( 'Yes', 'et_builder' ),
                ),
            ),
            //Thumbnail
            'thumbnail_display' => array(
                "label"             => esc_html__( 'Display Thumbnail', 'brands-for-woocommerce' ),
                'type'              => 'yes_no_button',
                'options'           => array(
                    'off' => esc_html__( "No", 'et_builder' ),
                    'on'  => esc_html__( 'Yes', 'et_builder' ),
                ),
            ),
            'thumbnail_width' => array(
                "label"             => esc_html__( 'Thumbnail Width', 'brands-for-woocommerce' ),
                'type'              => 'number',
                'show_if'           => array(
                    'thumbnail_display' => 'on',
                )
            ),
            'thumbnail_width_units' => array(
                "label"           => esc_html__( 'Thumbnail Width Units', 'brands-for-woocommerce' ),
                'type'            => 'select',
                'options'         => array(
                    'px' => esc_html__( 'px', 'brands-for-woocommerce' ),
                    '%'  => esc_html__( '%', 'brands-for-woocommerce' ),
                ),
                'show_if'           => array(
                    'thumbnail_display' => 'on',
                )
            ),
            'thumbnail_height' => array(
                "label"             => esc_html__( 'Thumbnail Height', 'brands-for-woocommerce' ),
                'type'              => 'number',
                'show_if'           => array(
                    'thumbnail_display' => 'on',
                )
            ),
            'thumbnail_height_units' => array(
                "label"           => esc_html__( 'Thumbnail Height Units', 'brands-for-woocommerce' ),
                'type'            => 'select',
                'options'         => array(
                    'px' => esc_html__( 'px', 'brands-for-woocommerce' ),
                    '%'  => esc_html__( '%', 'brands-for-woocommerce' ),
                ),
                'show_if'           => array(
                    'thumbnail_display' => 'on',
                )
            ),
            'thumbnail_fit' => array(
                "label"           => esc_html__( 'Thumbnail Fit', 'brands-for-woocommerce' ),
                'type'            => 'select',
                'options'         => array(
                    'cover'     => esc_html__( 'Cover', 'brands-for-woocommerce' ),
                    'contain'   => esc_html__( 'Contain', 'brands-for-woocommerce' ),
                    'fill'      => esc_html__( 'Fill', 'brands-for-woocommerce' ),
                    'none'      => esc_html__( 'None', 'brands-for-woocommerce' ),
                ),
                'show_if'           => array(
                    'thumbnail_display' => 'on',
                )
            ),
            'thumbnail_align' => array(
                "label"           => esc_html__( 'Thumbnail Align', 'brands-for-woocommerce' ),
                'type'            => 'select',
                'options'         => array(
                    'left'      => esc_html__( 'Left to text', 'brands-for-woocommerce' ),
                    'right'     => esc_html__( 'Right to text', 'brands-for-woocommerce' ),
                    'none'      => esc_html__( 'None', 'brands-for-woocommerce' ),
                ),
                'show_if'           => array(
                    'thumbnail_display' => 'on',
                )
            ),
            //Banner
            'banner_display' => array(
                "label"             => esc_html__( 'Display Banner', 'brands-for-woocommerce' ),
                'type'              => 'yes_no_button',
                'options'           => array(
                    'off' => esc_html__( "No", 'et_builder' ),
                    'on'  => esc_html__( 'Yes', 'et_builder' ),
                ),
            ),
            'banner_width' => array(
                "label"             => esc_html__( 'Banner Width', 'brands-for-woocommerce' ),
                'type'              => 'number',
                'show_if'           => array(
                    'banner_display' => 'on',
                )
            ),
            'banner_width_units' => array(
                "label"           => esc_html__( 'Banner Width Units', 'brands-for-woocommerce' ),
                'type'            => 'select',
                'options'         => array(
                    'px' => esc_html__( 'px', 'brands-for-woocommerce' ),
                    '%'  => esc_html__( '%', 'brands-for-woocommerce' ),
                ),
                'show_if'           => array(
                    'banner_display' => 'on',
                )
            ),
            'banner_height' => array(
                "label"             => esc_html__( 'Banner Height', 'brands-for-woocommerce' ),
                'type'              => 'number',
                'show_if'           => array(
                    'banner_display' => 'on',
                )
            ),
            'banner_height_units' => array(
                "label"           => esc_html__( 'Banner Height Units', 'brands-for-woocommerce' ),
                'type'            => 'select',
                'options'         => array(
                    'px' => esc_html__( 'px', 'brands-for-woocommerce' ),
                    '%'  => esc_html__( '%', 'brands-for-woocommerce' ),
                ),
                'show_if'           => array(
                    'banner_display' => 'on',
                )
            ),
            'banner_fit' => array(
                "label"           => esc_html__( 'Banner Fit', 'brands-for-woocommerce' ),
                'type'            => 'select',
                'options'         => array(
                    'cover'     => esc_html__( 'Cover', 'brands-for-woocommerce' ),
                    'contain'   => esc_html__( 'Contain', 'brands-for-woocommerce' ),
                    'fill'      => esc_html__( 'Fill', 'brands-for-woocommerce' ),
                    'none'      => esc_html__( 'None', 'brands-for-woocommerce' ),
                ),
                'show_if'           => array(
                    'banner_display' => 'on',
                )
            ),
            'banner_align' => array(
                "label"           => esc_html__( 'Banner Align', 'brands-for-woocommerce' ),
                'type'            => 'select',
                'options'         => array(
                    'left'      => esc_html__( 'Left to text', 'brands-for-woocommerce' ),
                    'right'     => esc_html__( 'Right to text', 'brands-for-woocommerce' ),
                    'none'      => esc_html__( 'None', 'brands-for-woocommerce' ),
                ),
                'show_if'           => array(
                    'banner_display' => 'on',
                )
            ),
            //Related products
            'related_products_display' => array(
                "label"             => esc_html__( 'Display Related products', 'brands-for-woocommerce' ),
                'type'              => 'yes_no_button',
                'options'           => array(
                    'off' => esc_html__( "No", 'et_builder' ),
                    'on'  => esc_html__( 'Yes', 'et_builder' ),
                ),
            ),
            'per_page' => array(
                "label"             => esc_html__( 'Related products Per page', 'brands-for-woocommerce' ),
                'type'              => 'number',
                'placeholder'       => esc_html__( 'All', 'brands-for-woocommerce' ),
                'show_if'           => array(
                    'related_products_display' => 'on',
                )
            ),
            'columns' => array(
                "label"             => esc_html__( 'Related products Columns', 'brands-for-woocommerce' ),
                'type'              => 'number',
                'show_if'           => array(
                    'related_products_display' => 'on',
                )
            ),
            'orderby' => array(
                "label"           => esc_html__( 'Related products Order by', 'brands-for-woocommerce' ),
                'type'            => 'select',
                'options'         => array(
                    'title'     => esc_html__( 'Title', 'brands-for-woocommerce' ),
                    'name'      => esc_html__( 'Product name', 'brands-for-woocommerce' ),
                    'date'      => esc_html__( 'Date of creation', 'brands-for-woocommerce' ),
                    'modified'  => esc_html__( 'Last modified date', 'brands-for-woocommerce' ),
                    'rand'      => esc_html__( 'Random', 'brands-for-woocommerce' ),
                ),
                'show_if'           => array(
                    'related_products_display' => 'on',
                )
            ),
            'order' => array(
                "label"           => esc_html__( 'Related products Order', 'brands-for-woocommerce' ),
                'type'            => 'select',
                'options'         => array(
                    'asc'       => esc_html__( 'Asc', 'brands-for-woocommerce' ),
                    'desc'      => esc_html__( 'Desc', 'brands-for-woocommerce' ),
                ),
                'show_if'           => array(
                    'related_products_display' => 'on',
                )
            ),
            'slider' => array(
                "label"             => esc_html__( 'Related products Slider', 'brands-for-woocommerce' ),
                'type'              => 'yes_no_button',
                'options'           => array(
                    'off' => esc_html__( "No", 'et_builder' ),
                    'on'  => esc_html__( 'Yes', 'et_builder' ),
                ),
                'show_if'           => array(
                    'related_products_display' => 'on',
                )
            ),
            'hide_brands' => array(
                "label"             => esc_html__( 'Related products Hide Brands', 'brands-for-woocommerce' ),
                'type'              => 'yes_no_button',
                'options'           => array(
                    'off' => esc_html__( "No", 'et_builder' ),
                    'on'  => esc_html__( 'Yes', 'et_builder' ),
                ),
                'show_if'           => array(
                    'related_products_display' => 'on',
                )
            ),
            'display_link' => array(
                "label"             => esc_html__( 'Display external link', 'brands-for-woocommerce' ),
                'type'              => 'yes_no_button',
                'options'           => array(
                    'off' => esc_html__( "No", 'et_builder' ),
                    'on'  => esc_html__( 'Yes', 'et_builder' ),
                ),
            ),
            'featured' => array(
                "label"             => esc_html__( 'Display last created featured brand', 'brands-for-woocommerce' ),
                'type'              => 'yes_no_button',
                'options'           => array(
                    'off' => esc_html__( "No", 'et_builder' ),
                    'on'  => esc_html__( 'Yes', 'et_builder' ),
                ),
            ),
        );

        return $fields;
    }

    function render( $atts, $content = null, $function_name = '' ) {
        $atts = BREX_BrandExtension::convert_on_off($atts);
        ob_start();
        the_widget( 'berocket_product_brand_description_widget', $atts );
        return ob_get_clean();
    }
}

new ET_Builder_Module_brands_description;
