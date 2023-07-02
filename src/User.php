<?php

/**
 * ユーザモデルを記載したファイル
 * 
 * PHP Version 8.2.7
 * 
 * @category Model
 * @package  App
 * @author   rym49 <h.ry0ma.dev@gmail.com>
 * @license  MIT https://github.com/RyoMa99/study_php/LICENSE.txt
 * @link     https://hoge.com
 */
namespace App;

/**
 * ユーザモデル
 * 
 * @category Model
 * @package  App
 * @author   rym49 <h.ry0ma.dev@gmail.com>
 * @license  MIT https://github.com/RyoMa99/study_php/LICENSE.txt
 * @link     https://hoge.com
 */
class User
{
    public $first_name;
    public $last_name;

    /**
     * ユーザのファーストネームとラストネームを半角空行を挟んで連結しフルネームを返す関数
     *
     * @return void
     */
    public function getFullName()
    {
        return trim("$this->first_name $this->last_name");
    }
}
