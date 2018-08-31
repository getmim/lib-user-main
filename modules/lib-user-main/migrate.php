<?php

return [
    'LibUserMain\\Model\\User' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => true,
                    'primary_key' => true,
                    'auto_increment' => true
                ]
            ],
            'name' => [
                'type' => 'VARCHAR',
                'length' => 50,
                'attrs' => [
                    'unique' => true,
                    'null' => false
                ]
            ],
            'fullname' => [
                'type' => 'VARCHAR',
                'length' => 100,
                'attrs' => [
                    'null' => false 
                ]
            ],
            'password' => [
                'type' => 'VARCHAR',
                'length' => 150,
                'attrs' => [
                    'null' => false 
                ]
            ],
            'avatar' => [
                'type' => 'VARCHAR',
                'length' => 250
            ],
            'status' => [
                'type' => 'TINYINT',
                'length' => 1,
                'attrs' => [
                    'unsigned' => true,
                    'default' => 2
                ]
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ]
            ]
        ]
    ]
];