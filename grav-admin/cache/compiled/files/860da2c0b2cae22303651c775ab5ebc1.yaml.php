<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/grossesproblem/grav-admin/user/themes/crazy/blueprints.yaml',
    'modified' => 1681651560,
    'size' => 726,
    'data' => [
        'name' => 'Crazy',
        'slug' => 'crazy',
        'type' => 'theme',
        'version' => '0.1.0',
        'description' => 'crazy problem theme',
        'icon' => 'rebel',
        'author' => [
            'name' => 'n&amp;s',
            'email' => 'naschanuee@gmail.com'
        ],
        'homepage' => 'https://github.com/n-s/grav-theme-crazy',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/n-s/grav-theme-crazy/issues',
        'readme' => 'https://github.com/n-s/grav-theme-crazy/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
