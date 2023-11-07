<?php

use Latte\Runtime as LR;

/** source: D:\wamp64\www\ddw_transferencia/pags/contacto.latte */
final class Templatec397a77f13 extends Latte\Runtime\Template
{
	public const Source = 'D:\\wamp64\\www\\ddw_transferencia/pags/contacto.latte';

	public const Blocks = [
		['contenido' => 'blockContenido', 'title' => 'blockTitle'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->renderBlock('contenido', get_defined_vars()) /* line 3 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '../template/template.latte';
		return get_defined_vars();
	}


	/** {block contenido} on line 3 */
	public function blockContenido(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '	<div class="container px-4 px-lg-5">
';
		$this->renderBlock('title', get_defined_vars()) /* line 5 */;
		echo '
		<p>Fabián Bejarano León
		<p>Desarrollo y Diseño Web
	</div>
';
	}


	/** n:block="title" on line 5 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '		<h1 class="titulopag">Contacto</h1>
';
	}
}
