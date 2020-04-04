<?php
/**
 * Settings configuration.
 *
 * @package HivePress\Configs
 */

use HivePress\Helpers as hp;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

return [
	'integrations' => [
		'sections' => [
			'hivepress' => [
				'title'  => esc_html__( 'HivePress Store', 'hivepress-updates' ),
				'_order' => 1000,

				'fields' => [
					'hivepress_license_key' => [
						'label'       => esc_html__( 'License Keys', 'hivepress-updates' ),
						'description' => esc_html__( 'Please enter the license keys for purchased themes and extensions, each key on a new line.', 'hivepress-updates' ),
						'type'        => 'textarea',
						'max_length'  => 2048,
						'_order'      => 10,
					],
				],
			],
		],
	],
];
