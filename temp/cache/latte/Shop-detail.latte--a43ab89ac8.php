<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: /var/www/html/app/UI/Shop/detail.latte */
final class Template_a43ab89ac8 extends Latte\Runtime\Template
{
	public const Source = '/var/www/html/app/UI/Shop/detail.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['leaflet' => '16, 31'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<style>
    table,
    tbody,
    tr,
    td
     {
        border: 1px solid black;
    }
</style>
<h1>';
		echo LR\Filters::escapeHtmlText($shopName) /* line 11 */;
		echo '</h1>
<h2>Aktuálne letáky</h2>
<div>
<table id="validLeaflets">
    <tbody>
';
		foreach ($validLeaflets as $leaflet) /* line 16 */ {
			echo '            <tr>
                <td><a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($leaflet->getUrl())) /* line 18 */;
			echo '">Zobrazit leták</a></td>
                <td>';
			if ($leaflet->getTitle() == null) /* line 19 */ {
				echo LR\Filters::escapeHtmlText($leaflet->getShop()->getName()) /* line 19 */;
			} else /* line 19 */ {
				echo LR\Filters::escapeHtmlText($leaflet->getTitle()) /* line 19 */;
			}
			echo '</td>
                <td>';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($leaflet->getValidFrom(), 'd.m.Y H:i:s')) /* line 20 */;
			echo '</td>
                <td>';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($leaflet->getExpiredAt(), 'd.m.Y H:i:s')) /* line 21 */;
			echo '</td>
            </tr>
';

		}

		echo '    </tbody>
</table>
</div>
<div>
<h2>Neplatné letáky</h2>
<table id="expiredLeaflets">
    <tbody>
';
		foreach ($expiredLeaflets as $leaflet) /* line 31 */ {
			echo '            <tr>
                <td><a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($leaflet->getUrl())) /* line 33 */;
			echo '">Zobrazit leták</a></td>
                <td>';
			if ($leaflet->getTitle() == null) /* line 34 */ {
				echo LR\Filters::escapeHtmlText($leaflet->getShop()->getName()) /* line 34 */;
			} else /* line 34 */ {
				echo LR\Filters::escapeHtmlText($leaflet->getTitle()) /* line 34 */;
			}
			echo '</td>
                <td>';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($leaflet->getValidFrom(), 'd.m.Y H:i:s')) /* line 35 */;
			echo '</td>
                <td>';
			echo LR\Filters::escapeHtmlText(($this->filters->date)($leaflet->getExpiredAt(), 'd.m.Y H:i:s')) /* line 36 */;
			echo '</td>
            </tr>
';

		}

		echo '    </tbody>
</table>
</div>
';
	}
}
