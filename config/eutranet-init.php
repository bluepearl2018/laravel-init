<?php
return [
	'name' => 'Eutranet\'s Laravel Init',
	'description' => 'This package is the basis for all other packages. It contains all the instructions and resources to make all the other packages work.',
	'tables' => [
		// 'failed_jobs',
		'language_lines',
		'media',
		'roles',
		'permissions',
		'menus',
		'users',
	],
	'migrations' =>
		[
			'add_fields_to_users_table',
			'create_failed_jobs_table',
			'create_language_lines_table',
			'create_oauth_access_tokens_table',
			'create_oauth_codes_table',
			'create_oauth_clients_table',
			'create_oauth_personal_access_table',
			'create_oauth_refresh_tokens_table',
			'create_password_resets_table',
			'create_passwords_resets_table',
			'create_permission_tables', // Spatie
			'create_personal_access_tokens_table',
			'create_sessions_table',
			'create_menus_table',
			'create_users_table',
		],
	'models' =>
		[
			// 'FailedJobs',
			'InstallStatus',
			'Menu',
		]
];