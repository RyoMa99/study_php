<?php

/**
 * ユーザモデルを記載したファイル
 *
 * PHP Version 8.2.7
 *
 * @category Mainファイル
 * @package  App
 * @author   rym49 <h.ry0ma.dev@gmail.com>
 * @license  MIT https://github.com/RyoMa99/study_php/LICENSE.txt
 * @link     https://hoge.com
 */

$in = [
  [
    'id' => 1,
    'code' => 'S1001',
    'name' => '山田',
  ],
  [
    'id' => 2,
    'code' => 'S1003',
    'name' => '鈴木',
  ],
  [
    'id' => 3,
    'code' => 'S1002',
    'name' => '佐藤',
  ],
];

var_dump(array_column($in, 'name', 'code'));
