<?php echo $header; ?>
<div class="container">
	<ul class="breadcrumb">
		<?php foreach ($breadcrumbs as $breadcrumb) { ?>
		<li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
		<?php } ?>
	</ul>
	<div class="row"><?php echo $column_left; ?>
		<?php if ($column_left && $column_right) { ?>
		<?php $class = 'col-sm-6'; ?>
		<?php } elseif ($column_left || $column_right) { ?>
		<?php $class = 'col-sm-9'; ?>
		<?php } else { ?>
		<?php $class = 'col-sm-12'; ?>
		<?php } ?>
		<div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
			<h2><?php echo $heading_title; ?></h2>
			<?php if ($categories) { ?>
			<div class="row">
					<?php foreach ($categories as $category) { ?>
					<div class="col-md-6 col-xs-12">
						<div class="cat-list-thumb">
							<a href="<?php echo $category['href']; ?>" class="thumbnail cart">
								<img width="230" height="230" src="/image/<?php echo $category['img']; ?>">
								<div class="caption">
									<h3><?php echo $category['name']; ?></h3>
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