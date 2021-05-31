<?php

//timezone

date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados

define('BD_SERVIDOR', getenv('BD_SERVIDOR'));
define('BD_USUARIO', getenv('BD_USUARIO'));
define('BD_SENHA','');
define('BD_BANCO', getenv('BD_BANCO'));
define('PASSWORD_SECRET', getenv('PASSWORD_SECRET'));

?>