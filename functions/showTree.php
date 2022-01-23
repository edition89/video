<?php
function showTree($folder)
{
    $files = scandir($folder);
    foreach ($files as $file) {
        if (($file == '.') || ($file == '..')) {
            continue;
        }
        $f0 = $folder . '/' . $file;
        if (is_dir($f0)) {
            echo '<ul><li class="folder">';
            echo $file;
            showTree($f0, '');
            echo '</ul>';
        } else {
            echo '<ul><li class="file" data-src="' . $f0 . '">' . $file . '</li></ul>';
        }
    }
}

?>