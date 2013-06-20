<?php defined('SYSPATH') or die('No direct script access.');?>
<h3><?=$widget->categories_title?></h3>

<?if($widget->cat_breadcrumb !== NULL):?>
<h5>
	<p>
		<a href="<?=Route::url('list',array('category'=>$widget->cat_breadcrumb['parent_seoname'],'location'=>$widget->loc_seoname))?>" title="<?=$widget->cat_breadcrumb['parent_name']?>"><?=$widget->cat_breadcrumb['parent_name']?></a> - 
		<?=$widget->cat_breadcrumb['name']?>
	</p>
</h5>
<?endif?>
<ul>
<?foreach($widget->cat_items as $cat):?>
    <li>
        <a href="<?=Route::url('list',array('category'=>$cat->seoname,'location'=>$widget->loc_seoname))?>" title="<?=$cat->name?>">
        <?=$cat->name?></a>
    </li>
<?endforeach?>
</ul>