<?php

use Latte\Runtime as LR;

/** source: D:\wamp64\www\ddw_transferencia\template\menu.latte */
final class Template264471b156 extends Latte\Runtime\Template
{
	public const Source = 'D:\\wamp64\\www\\ddw_transferencia\\template\\menu.latte';

	public const Blocks = [
		['menuBuilder' => 'blockMenuBuilder'],
	];


	public function main(array $ʟ_args): void
	{
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['item' => '11'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {define menuBuilder $items} on line 1 */
	public function blockMenuBuilder(array $ʟ_args): void
	{
		extract($this->params);
		$items = $ʟ_args[0] ?? $ʟ_args['items'] ?? null;
		unset($ʟ_args);

		echo '	<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top" id="mainNav" data-bs-theme="dark">
		<div class="container px-4 px-lg-5">
			<a class="navbar-brand" href="index.php">Fabián Bejarano León</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ms-auto">
';
		foreach ($items as $item) /* line 11 */ {
			echo '						<li class="nav-item">
							<a class="nav-link" href="index.php?p=';
			echo LR\Filters::escapeHtmlAttr($item->pag) /* line 13 */;
			echo '">
								<i class="';
			echo LR\Filters::escapeHtmlAttr($item->icon) /* line 14 */;
			echo '"></i> ';
			echo LR\Filters::escapeHtmlText($item->txt) /* line 14 */;
			echo '
							</a>
						</li>
';

		}

		echo '				</ul>
			</div>
		</div>
	</nav>
';
	}
}
