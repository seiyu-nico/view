<?php
namespace SeiyuNico\View;

/**
 */
class View
{
    public static function view($val, $tree = 0)
    {
        $bk = debug_backtrace();
        echo "===[{$bk[$tree]['file']}:{$bk[$tree]['line']}]=========================<br>";
        echo '<pre>';
        echo htmlspecialchars(print_r($val,1));
        echo '</pre><br>';
    }

}
