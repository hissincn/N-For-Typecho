<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<style>
#page{
		width: 800px;
	margin: 20px auto;
	
	background: RGB(255,255,255);
	box-shadow: 0px 0px 70px 6px rgba(0,0,0,0.12);
	padding: 1px;
	border-radius: 5px;

	}
	#page-content-title{
		color: black!important;
		font-size: 2rem;
			padding: 60 60 10 60;
	}
	
	#page-content-article{
		color: 	#383838;
		font-size: 1.2rem;
		font-weight: 6%;
		padding: 10 60 60 60;
	}
	
	
	
	
	
</style>



	<div id="page">
			<div id="page-content">
				<h2 id="page-content-title"><?php $this->title();?></h2>
				<div id="page-content-article">
					<?php
					$content = $this->content;
					emotionContent($content,$this->options->themeUrl);
					 ?>
				</div>
			</div>
		</div>







		<?php $enableComment = $this->fields->enableComment; if ($enableComment == 1): ?>
		<?php $this->need('comments.php'); ?>
	     <?php endif; ?>
	<?php $this->need('footer.php'); ?>
