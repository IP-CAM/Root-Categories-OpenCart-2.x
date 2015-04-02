<?php echo $header; ?>
<div class="container">
	<ul class="breadcrumb">
		<?php foreach ($breadcrumbs as $breadcrumb) { ?>
		<li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
		<?php } ?>
	</ul>
	<div class="row"><?php echo $column_left; ?>
		<?php if ($column_left && $column_right) { ?>
		<?php $class = 'col-sm-6'; $class_category='col-sm-6'; ?>
		<?php } elseif ($column_left || $column_right) { ?>
		<?php $class = 'col-sm-9'; $class_category='col-sm-4'; ?>
		<?php } else { ?>
		<?php $class = 'col-sm-12'; $class_category='col-sm-4'; ?>
		<?php } ?>
		<div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
			<h2><?php echo $heading_title; ?></h2>
			<?php if ($categories) { ?>
			<div class="row">
					<?php foreach ($categories as $category) { ?>
					<div class="<?php echo $class_category; ?> col-xs-12">
						<div class="cat-list-thumb">
							<a href="<?php echo $category['href']; ?>" class="thumbnail cart">
								<img src="<?php echo $category['img']; ?>">
								<div class="caption">
									<h4 style="text-align:center;"><?php echo $category['name']; ?></h4>
								</div>
							</a>
						</div>
					</div>
					<?php } ?>
			</div>
			<?php } ?>
			<?php echo $content_bottom; ?>
		</div>
		<?php echo $column_right; ?>
	</div>
</div>
<?php echo $footer; ?>