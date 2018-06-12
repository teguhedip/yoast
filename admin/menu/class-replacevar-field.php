<?php
/**
 * WPSEO plugin file.
 *
 * @package WPSEO\Admin\Menu
 */

/**
 * Renders a single replacement variable field.
 */
class WPSEO_Replacevar_Field {
	/**
	 * @var Yoast_Form Yoast Forms instance.
	 */
	private $yform;

	/**
	 * @var string The id for the hidden field.
	 */
	private $field_id;

	/**
	 * @var string The label for the field.
	 */
	private $label;

	/**
	 * Constructs the object.
	 *
	 * @param Yoast_Form $yform       Yoast forms.
	 * @param string     $field_id    The field id.
	 * @param string     $label       The field label.
	 */
	public function __construct( Yoast_Form $yform, $field_id, $label ) {
		$this->yform    = $yform;
		$this->field_id = $field_id;
		$this->label    = $label;
	}

	/**
	 * Renders a div for the react application to mount to, and hidden inputs where
	 * the app should store it's value so they will be properly saved when the form
	 * is submitted.
	 *
	 * @return void
	 */
	public function render() {
		$this->yform->hidden( $this->field_id, $this->field_id );

		printf( '<div
			data-react-replacevar-field
			data-react-replacevar-field-id="%1$s"
			data-react-replacevar-field-label="%2$s"></div>',
			esc_attr( $this->field_id ),
			esc_attr( $this->label )
		);
	}
}
