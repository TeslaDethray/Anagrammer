#!/usr/bin/env php
<?php

$file = explode("\n", file_get_contents(__DIR__ . '/../' . $argv[1]));
foreach ($file as $word) {
    passthru("bin/anagrammer.php add Word $word");
}
