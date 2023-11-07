<?php

use Latte\Runtime as LR;

/** source: D:\wamp64\www\ddw_transferencia/pags/proyectos.latte */
final class Template3ade9e773a extends Latte\Runtime\Template
{
	public const Source = 'D:\\wamp64\\www\\ddw_transferencia/pags/proyectos.latte';

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
		$this->renderBlock('title', get_defined_vars()) /* line 6 */;
		echo '
		<!-- Featured Project Row-->
		<div class="row gx-0 mb-4 mb-lg-5 align-items-center">
			<div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="img/proyecto-unialquileres.jpg" alt="Proyecto Unialquileres" /></div>
			<div class="col-xl-4 col-lg-5">
				<div class="featured-text text-center text-lg-left">
					<h4>Control de Activos - Unialquileres</h4>
					<p class="mb-0 text-white-50">Diseño y desarrollo de aplicativo web con base de datos MySQL, para el control de activos de una empresa.</p>
				</div>
			</div>
		</div>
		<!-- Project One Row-->
		<div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
			<div class="col-lg-6"><img class="img-fluid" src="img/proyecto-azulequipos.jpg" alt="..." /></div>
			<div class="col-lg-6">
				<div class="bg-black text-center h-100 project">
					<div class="d-flex h-100">
						<div class="project-text w-100 my-auto text-center text-lg-left">
							<h4 class="text-white">SGC - AzulEquipos</h4>
							<p class="mb-0 text-white-50">Programa Sistema de Gestión de Calidad - Administración de Hojas de Vida de Equipos Biométricos. PHP con MySQL.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Project Two Row-->
		<div class="row gx-0 justify-content-center">
			<div class="col-lg-6"><img class="img-fluid" src="img/proyecto-centroandes.jpg" alt="..." /></div>
			<div class="col-lg-6 order-lg-first">
				<div class="bg-black text-center h-100 project">
					<div class="d-flex h-100">
						<div class="project-text w-100 my-auto text-center text-lg-right">
							<h4 class="text-white">Centro Empresarial de los Andes</h4>
							<p class="mb-0 text-white-50">Diseño de página web para el Centro Empresarial de los Andes usando Joomla.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
';
	}


	/** n:block="title" on line 6 */
	public function blockTitle(array $ʟ_args): void
	{
		echo '		<h1 class="titulopag">Proyectos</h1>
';
	}
}
