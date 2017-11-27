<?php

return [
    // 上传图片配置
    'images' => [
        'extension' => ['png', 'jpg', 'jpeg', 'gif'],
        'store_path' => '/uploads/images/',
        'max_size' => 1024 * 1024 * 2, // 文件上传单位为字节
    ]
];