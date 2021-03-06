<?php
/**
 * user.php
 * 
 * user表定义
 */

return array(
    // 表字段
    'columns' => array(
        'user_id' => array(
            'type' => 'integer',
            'unsigned' => true,
            'autoincrement' => true,
            'required' => false,
            'comment' => '会员ID'
        ),
        'username' => array(
            'type' => 'string',
            'length' => 50,
            'required' => true,
            'default' => '',
            'comment' => '昵称'
        ),
        
        'point' => array(
            'type' => 'integer',
            'default' => 0,
            'unsigned' => false,
            'required' => true,
            'comment' => '积分'
        ),
        
        'sex' => array(
            'type' => array(
                0 => '女',
                1 => '男',
                2 => '保密'
            ),
            'default' => 2,
            'required' => true,
            'commnet' => '性别'
        ),
        'wedlock' => array(
            'type' => 'boolean',
            'default' => 0,
            'required' => true,
            'comment' => '婚姻状况'
        ),
        'regtime' => array(
            'type' => 'integer',
            'unsigned' => false,
            'default' => 0,
            'required' => true,
            'comment' => '注册时间'
        )
    ),
    
    // 主键
    'primary' => 'user_id',
    // 普通索引
    'index' => array(
        'ind_regtime' => [
            'columns' => [
                'regtime'
            ]
        ]
    ),
    
    // 数据表注释
    'comment' => '会员表'
);
