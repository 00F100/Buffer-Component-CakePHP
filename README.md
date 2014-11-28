Buffer-Component-CakePHP
========================

Utilizar o buffer do PHP no cakePHP.

# INSTALAR:

Para utilizar este component, adicione-o ao diretório "Component" dentro de "Controller".

Após adicione o nome do component a chamada de components.

$components = array('Buffer', ...);

# UTILIZAR

Inicia o buffer (4096 é o valor mínimo configurado na variável 'output_buffering' no php.ini, sujeito a alteração).

$this->Buffer->init(4096);

Descarrega uma variável utilizando 'echo'.

$this->Buffer->write($var);

Finaliza o buffer

$this->Buffer->end();