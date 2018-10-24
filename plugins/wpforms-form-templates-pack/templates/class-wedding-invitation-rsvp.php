<?php
/**
 * Wedding Invitation RSVP Form template.
 *
 * @package    WPFormsFormTemplates
 * @author     WPForms
 * @since      1.0.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2017, WPForms LLC
 */
class WPForms_Template_Wedding_Invitation_RSVP extends WPForms_Template {

	/**
	 * Primary class constructor.
	 *
	 * @since 1.0.0
	 */
	public function init() {

		$this->name = __( 'Wedding Invitation RSVP Form', 'wpforms-form-templates-pack' );
		$this->slug = 'wedding-invitation-rsvp';
		$this->data = array(
			'field_id' => 9,
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
					'label' => __( 'Are you attending?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				4 => array(
					'id' => '4',
					'type' => 'radio',
					'label' => __( 'Your meal selection', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Chicken', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Fish', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Salad', 'wpforms-form-templates-pack' ),
						),
					),
				),
				5 => array(
					'id' => '5',
					'type' => 'radio',
					'label' => __( 'Are you bringing a guest?', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Yes', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'No', 'wpforms-form-templates-pack' ),
						),
					),
					'required' => '1',
				),
				6 => array(
					'id' => '6',
					'type' => 'name',
					'label' => __( 'Guest Name', 'wpforms-form-templates-pack' ),
					'format' => 'first-last',
					'required' => '1',
					'size' => 'medium',
				),
				7 => array(
					'id' => '7',
					'type' => 'radio',
					'label' => __( 'Guest meal selection', 'wpforms-form-templates-pack' ),
					'choices' => array(
						1 => array(
							'label' => __( 'Chicken', 'wpforms-form-templates-pack' ),
						),
						2 => array(
							'label' => __( 'Fish', 'wpforms-form-templates-pack' ),
						),
						3 => array(
							'label' => __( 'Salad', 'wpforms-form-templates-pack' ),
						),
					),
				),
				8 => array(
					'id' => '8',
					'type' => 'textarea',
					'label' => __( 'Comments or Questions', 'wpforms-form-templates-pack' ),
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
new WPForms_Template_Wedding_Invitation_RSVP;
