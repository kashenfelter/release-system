<?php
defined('_JEXEC') or die;

/** @var  \Akeeba\ReleaseSystem\Site\View\Browse\Html $this */

use Akeeba\ReleaseSystem\Site\Helper\Router;
use Akeeba\ReleaseSystem\Admin\Helper\Format;

$category_url = Router::_('index.php?option=com_ars&view=category&id=' . $item->id . '&Itemid=' . $Itemid);
?>
<div class="ars-category-{{{ $id }}} well">
	<h4 class="{{ $item->type == 'bleedingedge' ? 'warning' : '' }}">
		<a href="{{ htmlentities($category_url) }}">
			{{{ $item->title }}}
		</a>
	</h4>

	<div class="ars-browse-category">
		<div class="ars-category-description">
			{{ Format::preProcessMessage($item->description, 'com_ars.category_description') }}
		</div>
		@if(!isset($no_link))
		<p class="readmore">
			<a href="{{ htmlentities($category_url) }}" class="btn btn-primary">
				@lang('LBL_CATEGORY_VIEW')
			</a>
		</p>
		@endif
	</div>
</div>