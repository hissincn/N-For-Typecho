<html>
<head>
	<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0, width=device-width"/>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
        <?php $this->header(); ?>
    <link href="https://cdn.bootcss.com/fancybox/3.5.6/jquery.fancybox.min.css" rel="stylesheet">
	<link href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('CSS/N.css'); ?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php $this->options->themeUrl('CSS/shortcode.G.css'); ?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php $this->options->themeUrl('CSS/OwO.min.css'); ?>" rel="stylesheet" />
	<link rel="stylesheet" href="<?php $this->options->themeUrl('CSS/prism.css'); ?>" rel="stylesheet" />
	
<style>
    .header-tu{
	height:320px;
	padding-top: 20px;
	margin: -8px;
	margin-bottom: 20px;
	background: url(<?php $this->options->bkimg(); ?>) no-repeat;
				background-size: cover;
}
	.header-icon{
		display: block;
		border-radius: 50%;
		height: 120px;
		width: 120px;
	transition:all 500ms;	
	margin-top: -330px;
	border:2px solid #C0C0C0;
	}
    .header-icon:hover{
	transform:rotate(360deg); 
	};
	
	
	.nav-focus{
		margin-top: 15px;
    float: none;
    text-align: center;
    width: 100%;
	}
	.title{
		font-size: 4rem;
		color: white;
margin-top: 25px;
	}
	.title2{
		font-size: 1.2rem;
			color: white;
		margin-top: -2px;
		margin-bottom: 25px;
	}
	.header-card{
		line-height: 20px;
	}
	.sousuol{
		margin-top: 20px;
	}
.header-menu a:link {
        text-decoration: none;
        color: white!important;
   text-decoration: none;
	font-size: 1.5rem;
	font-weight: 2;
    }

.header-menu a:HOVER {
        background-color:#4D4D4D;
        border-radius:20px;
   text-decoration: none;
 }
.header-menu a:visited {
 	      text-decoration: none;
        color: white;
   text-decoration: none;
	font-size: 1.5rem;
	font-weight: 2;
 }

 
.header-menu{
	margin-bottom: 40px;
}



}
</style>

<center><div class="header-card">
   <div class="header-tu"></div>
   <a href="<?php $this->options->siteUrl(); ?>"><img class="header-icon"src="<?php echo $this->options->touxiang(); ?>"></a>
   <h1 class="title"><?php  $this->options->title() ?> </h1>
   <h2 class="title2"><?php  $this->options->description() ?> </h2>
     <div class="header-menu">
    &nbsp<a href="<?php $this->options->siteUrl(); ?>">&nbsp首页&nbsp</a>
    <?php $this->widget('Widget_Contents_Page_List')
                 ->parse('&nbsp<a href="{permalink}">&nbsp{title}&nbsp</a>'); ?>
                 <br>
                 <br>
                  <br>
                 
     </div>
        
</div></center>				
	
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					