<?php
$status_codes = [
    [
        'code' => '102',
        'meaning' => 'Processing',
        'description' => '処理中である'
    ],
    [
        'code' => '200',
        'meaning' => 'OK',
        'description' => 'リクエストが正常に成功できた'
    ],
    [
        'code' => '301',
        'meaning' => 'Not Modified',
        'description' => 'リクエストしたリソースが恒久的に移動されている'
    ],
    [
        'code' => '304',
        'meaning' => 'Not Modified',
        'description' => 'リクエストしたリソースは更新されていない'
    ],
    [
        'code' => '400',
        'meaning' => 'Bad Request',
        'description' => 'クライアントのリクエストに異常がある'
    ],
    [
        'code' => '401',
        'meaning' => 'Unauthorized',
        'description' => 'アクセストークンが無効なときや、認証がされていない'
    ],
    [
        'code' => '403',
        'meaning' => 'Forbidden',
        'description' => '閲覧権限が無いファイルやフォルダである'
    ],
    [
        'code' => '404',
        'meaning' => 'Not found',
        'description' => 'webページが見つからない'
    ],
    [
        'code' => '500',
        'meaning' => 'internal Server Error',
        'description' => '何らかのサーバー内でエラーが起きた'
    ],
    [
        'code' => '502',
        'meaning' => 'Bat Gateway',
        'description' => 'サーバーがリクエストに満たすのに必要な機能をサポートしていない'
    ],
    [
        'code' => '503',
        'meaning' => 'Service Unavailable',
        'description' => '一時的にサーバにアクセス出来ない'
    ],
];