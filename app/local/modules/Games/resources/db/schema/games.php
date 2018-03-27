<?php
/**
 * Schema definition for 'table_name'
 */
$schemas = (!isset($schemas)) ? [] : $schemas;
$schemas['table_name'] = [
    'game_id' => [
        'type' => 'int(11) unsigned',
        'auto_increment' => true,
        'primary' => true,
    ],
    'admin_id' => [
        'type' => 'int(11) unsigned',
        'is_null' => true,
        'foreign_key' => [
            'table' => 'admin',
            'column' => 'admin_id',
            'name' => 'FK_MY_MODULE_ADMIN_ID_ADMIN_AMIN_ID',
            'on_update' => 'CASCADE',
            'on_delete' => 'CASCADE',
        ],
    ],
    'name' => [
        'type' => 'varchar(50)',
        'default' => 'default_value',
        'index' => true,
    ],
    'created_at' => [
        'type' => 'datetime',
    ],
    'updated_at' => [
        'type' => 'datetime',
    ],
];
