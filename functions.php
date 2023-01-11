<?php

// === エスケープ処理
function h($var)
{
    return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
}

// === DB接続

class Getdb
{
    // 接続情報
    const DNS = 'mysql:dbname=xs810378_test01;host=localhost;port=3306';
    const USER = 'xs810378_tossy';
    const PASS = 'たら';
}
