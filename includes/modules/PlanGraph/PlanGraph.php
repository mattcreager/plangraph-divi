<?php

function hook_javascript() {
	?>
		<script async type="module" src="https://unpkg.com/@manifoldco/web-components@latest/dist/manifold/manifold.esm.js"></script>
		<script nomodule src="https://unpkg.com/@manifoldco/web-components@latest/dist/manifold/manifold.js"></script>
	<?php
}

add_action('wp_head', 'hook_javascript');

class PLDI_HelloWorld extends ET_Builder_Module {

	public $slug       = 'pldi_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => '',
		'author_uri' => '',
	);
	

	public function init() {
		$this->name = esc_html__( 'PlanGraph Plan Table', 'pldi-plangraph-divi' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'pldi-plangraph-divi' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'pldi-plangraph-divi' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {

		return sprintf( '<plangraph-plan-table embed="emb-5gn6rtutazqvjpqc"></plangraph-plan-table>', $this->props['content'] );
	}
}

new PLDI_HelloWorld;