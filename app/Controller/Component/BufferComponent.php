<?php
/**
 * Buffer Component
 *
 * @package       app.Controller.Component
 * @author     Joao Moraes - joaomoraesbr@gmail.com
 * @since         2014
 */
class BufferComponent extends AppComponent{

	/**
	 * Inicia o buffer
	 *
	 * @var $length int
	 */
	public function init($length = 4096)
	{
		ob_start();

		for($i = 0 ; $i < $length ; $i++){
			echo "  ";
		}
	}

	/**
	 * Envia o conteudo para o buffer e descarrega
	 *
	 * @var $content string
	 */
	public function write($content)
	{
		echo $content;
		ob_flush();
		flush();
	}

	/**
	 * Finaliza o buffer
	 */
	public function end()
	{
		ob_end_flush();
	}
}
?>
