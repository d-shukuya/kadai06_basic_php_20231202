<?php
// XSS対応関数
function hsc($val)
{
    return htmlspecialchars($val, ENT_QUOTES);
}
