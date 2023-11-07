<?php

use Latte\Runtime as LR;

/** source: D:\wamp64\www\ddw_transferencia\template\template.latte */
final class Template2df0b6eec0 extends Latte\Runtime\Template
{
	public const Source = 'D:\\wamp64\\www\\ddw_transferencia\\template\\template.latte';

	public const Blocks = [
		['head' => 'blockHead', 'title' => 'blockTitle', 'menu' => 'blockMenu', 'contenido' => 'blockContenido', 'piepag' => 'blockPiepag'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!DOCTYPE html>
<html lang="es">
	<head>
';
		$this->renderBlock('head', get_defined_vars()) /* line 5 */;
		echo '	</head>
	<body id="page-top">
		<!-- Barra de navegación -->
';
		$this->renderBlock('menu', get_defined_vars()) /* line 21 */;
		echo "\n";
		$this->renderBlock('contenido', get_defined_vars()) /* line 25 */;
		echo '
		<!-- Pie de página -->
';
		$this->renderBlock('piepag', get_defined_vars()) /* line 28 */;
		echo '
		<!-- Bootstrap JS-->
		<script src="vendor/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
		<!-- Core theme JS-->
		<script src="js/scripts.js"></script>
	</body>
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->createTemplate('menu.latte', $this->params, "import")->render() /* line 1 */;
		return get_defined_vars();
	}


	/** {block head} on line 5 */
	public function blockHead(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="Actividad Transferencia Diseño y Desarrollo Web, UCompensar" />
		<meta name="author" content="Jaime Fabián Bejarano León" />
		<title>';
		$this->renderBlock('title', get_defined_vars(), function ($s, $type) {
			$ʟ_fi = new LR\FilterInfo($type);
			return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('trim', $ʟ_fi, $this->filters->filterContent('stripHtml', $ʟ_fi, $s)));
		}) /* line 10 */;
		echo ' - Fabián Bejarano León</title>
		<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
		<!-- Font Awesome free version -->
		<script src="vendor/fontawesome-free-6.4.2-web/js/all.min.js"></script>
		<!-- CSS -->
		<link href="vendor/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />
';
	}


	/** {block title|stripHtml|trim} on line 10 */
	public function blockTitle(array $ʟ_args): void
	{
	}


	/** {block menu} on line 21 */
	public function blockMenu(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('menuBuilder', [$menuItems] + [], 'html') /* line 22 */;
	}


	/** {block contenido } on line 25 */
	public function blockContenido(array $ʟ_args): void
	{
	}


	/** {block piepag} on line 28 */
	public function blockPiepag(array $ʟ_args): void
	{
		echo '			<footer class="footer bg-black small text-center text-white-50">
				<div class="container px-4 px-lg-5">
					&copy; Copyright ';
		echo LR\Filters::escapeHtmlText(date('Y')) /* line 31 */;
		echo ' - Jaime Fabián Bejarano León
				</div>
			</footer>
';
	}
}
