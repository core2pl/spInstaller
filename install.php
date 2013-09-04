<?php
/**
 * Created by JetBrains PhpStorm.
 * User: marian
 * Date: 03.09.13
 * Time: 22:47
 * To change this template use File | Settings | File Templates.
 */

echo exec('git clone http://github.com/core2pl/sp.git engine/');
exec('git cd engine/ && git checkout master && cd ../');

echo exec('git clone http://github.com/fabpot/Twig.git Twig/');

echo exec('git clone http://github.com/ckeditor/ckeditor-releases.git ckeditor/');
echo exec('cd ckeditor/ && git checkout stable/full && cd ../');

echo exec('git clone http://github.com/core2pl/theme_default.git themes/default/');
//exec('git cd theme/ && git checkout master && cd ../'); TODO checkout to branch master

header('Location: /installer/welcome');
