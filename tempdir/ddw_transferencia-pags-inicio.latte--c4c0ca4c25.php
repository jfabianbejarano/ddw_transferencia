<?php

use Latte\Runtime as LR;

/** source: D:\wamp64\www\ddw_transferencia/pags/inicio.latte */
final class Templatec4c0ca4c25 extends Latte\Runtime\Template
{
	public const Source = 'D:\\wamp64\\www\\ddw_transferencia/pags/inicio.latte';

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

		echo '	<!-- Encabezado -->
	<header class="encabezado">
		<div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
			<div class="d-flex justify-content-center">
				<div class="text-center">
					<h1 class="mx-auto my-0 text-uppercase">Fabián Bejarano León</h1>
					<h2 class="text-white-50 mx-auto mt-2 mb-5">Desarrollo y Diseño Web</h2>
					<a class="btn btn-primary" href="#about">Iniciar</a>
				</div>
			</div>
		</div>
	</header>

';
		$this->renderBlock('title', get_defined_vars()) /* line 17 */;
		echo '
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
	<p>Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante.
';
	}


	/** n:block="title" on line 17 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '	<h1 class="titulopag">Inicio</h1>
';
	}
}
