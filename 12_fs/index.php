<?php
// Magic constants
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';

// Create directory
// mkdir('test');

// Rename directory
// rename('test',  'myfolder');

// Delete directory
// rmdir('myfolder');

// Read files and folders inside directory
// $files = scandir('./');
// echo '<pre>';
// var_dump($files);
// echo '</pre>';

// file_get_contents, file_put_contents
// echo file_get_contents('lorem.txt');
// file_put_contents('test.txt','Hello world');

$content = file_get_contents('lorem.txt');
file_put_contents('lorem.txt','My text' . PHP_EOL . $content);

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file

