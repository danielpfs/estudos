<?php

foreach (glob('*', GLOB_ONLYDIR) as $dir) {
    echo '<a href="' . $dir . '">' . $dir . '</a><br>';
}