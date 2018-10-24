<?php
/**
 * Simple RSVP Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Simple_RSVP extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Simple RSVP Form', 'wpforms-form-templates-pack' );
		$this->slug = 'simple-rsvp';
		$this->data = array(
			'field_id' => 8,
			'fields' => array(
				1 => array(
					'id' => '1',
					'type' => 'name',
					'label' => __( 'Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				2 => array(
					'id' => '2',
					'type' => 'radio',
					'label' => __( 'Are you able to attend?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Not sure', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				3 => array(
					'id' => '3',
					'type' => 'number',
					'label' => __( 'How many guests will you be bringing?', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				4 => array(
					'id' => '4',
					'type' => 'checkbox',
					'label' => __( 'Do you or your guest(s) have any dietary restrictions?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						5 => array(
							'label' => __( 'None', 'wpforms-form-templates-pack' ),
						),
						1 => array(
							'label' => __( 'Vegetarian', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Vegan', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Gluten-free', 'wpforms-form-templates-pack' ),
						),
						4 => array(
							'label' => __( 'Dairy-free', 'wpforms-form-templates-pack' ),
						),
						6 => array(
							'label' => __( 'Other', 'wpforms-form-templates-pack' ),
						),
					),
				),
				7 => array(
					'id' => '7',
					'type' => 'text',
					'label' => __( 'If other', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
				6 => array(
					'id' => '6',
					'type' => 'textarea',
					'label' => __( 'Please elaborate on any dietary restrictions that apply, or let us know if there\'s anything else you\'d like to tell us. Hope to see you soon', 'wpforms-form-templates-pack' ),
					'size' => 'medium',
				),
			),
			'settings' => array(
				'honeypot' => '1',
				'confirmation_message_scroll' => '1',
				'submit_text_processing' => __( 'Sending...', 'wpforms-form-templates-pack' ),
			),
			'meta' => array(
				'template' => $this->slug,
			),
		);
	}
}
new WPForms_Template_Simple_RSVP;
