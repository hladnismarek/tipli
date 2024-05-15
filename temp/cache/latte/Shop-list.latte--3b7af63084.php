<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: /var/www/html/app/UI/Shop/list.latte */
final class Template_3b7af63084 extends Latte\Runtime\Template
{
	public const Source = '/var/www/html/app/UI/Shop/list.latte';

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
			foreach (array_intersect_key(['shop' => '5'], $this->params) as $ʟ_v => $ʟ_l) {
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

		echo '<h1>Obchody</h1>
<table>
    <tbody>
';
		foreach ($shops as $shop) /* line 5 */ {
			echo '        <tr>
            <td>
                <a href="obchod/';
			echo LR\Filters::escapeHtmlAttr(($this->filters->lower)($shop->getName())) /* line 8 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($shop->getName()) /* line 8 */;
			echo '</a>
            </td>
        </tr>
';

		}

		echo '    </tbody>
</table>
';
	}
}
