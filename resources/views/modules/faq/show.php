<?php use Fisharebest\Webtrees\I18N; ?>

<h2 class="wt-page-title"><?= $title ?></h2>

<table class="faq">
	<?php foreach ($faqs as $id => $faq): ?>
	<tr>
		<td style="padding: 5px;">
			<a href="#faq<?= e($id) ?>"><?= e($faq->header) ?></a>
		</td>
	</tr>
	<?php endforeach ?>
</table>

<?php foreach ($faqs as $id => $faq): ?>
	<hr>
	<div class="faq_title" id="faq<?= $id ?>">
		<?= e($faq->header) ?>
		<div class="faq_top faq_italic">
			<a href="#content"><?= I18N::translate('back to top') ?></a>
		</div>
	</div>
	<div class="faq_body">
		<?= substr($faq->body, 0, 1) == '<' ? e($faq->body) : nl2br(e($faq->body), false) ?>
	</div>
<?php endforeach ?>
