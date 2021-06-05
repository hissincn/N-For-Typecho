<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php 
/**
* 友情链接
*
* @package custom
*/
$this -> need('header.php');
?>
<style>
	#links{
		width: 800px;
	margin: 20px auto 20px auto;
	
	background: RGB(255,255,255);
	box-shadow: 0px 0px 70px 6px rgba(0,0,0,0.12);
	padding: 1px;
	border-radius: 5px;

	}
	#links-content{
		color: black!important;
		font-size: 2rem;
		padding: 50px 10px 80px 60px;
		
	}
	
	#links-post{
		color: 	#383838;
		font-size: 1.2rem;
		font-weight: 6%;
	
	}
	
	
	
	
	
</style>


	<div id="links">
		<div id="links-content">
			<h3>友人帐</h3>
			<div id="links-post">
				<?php
				$content = $this->content;
				emotionContent($content,$this->options->themeUrl);
				 ?>
		 </div>
	    <div class="friends">
				<?php if (isset($this->options->plugins['activated']['Links'])) : ?>
					<?php Links_Plugin::output("
					<li class='clear'>
						<a href='{url}' target='_blank'></a>
						<img src='{image}' alt='{name}'/>
						<div class='link-item-content'>
							<h3>{name}</h3>
							<span>{sort}</span>
							<p>{description}</p>
						</div>
					</li>
					", 0); ?>
				<?php else: ?>
					<?php Links(); ?>
				<?php endif; ?>

		</div>
	</div>
  </div>
	<?php
		$enableComment = $this->fields->enableComment;
		if ($enableComment == 1):
	?>
	<?php $this->need('comments.php'); ?>
<?php endif; ?>
<?php $this -> need('footer.php'); ?>