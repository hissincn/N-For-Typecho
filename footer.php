<style>
	.footer-card{
		height: 200px;
		background-color: #424242;
		
		margin-top: 40px;
width:100%;
    
	}
	.footer-a{
		margin-top: -160px;
		color: white!important;
		font-size: 1.2rem;
		text-align: center;
		width:100%;
	}

.footer-a a:link {
        text-decoration: none;
        color: white!important;
   text-decoration: none;
	font-size: 1.5rem!important;
	font-weight: 2;
    }

.footer-a a:HOVER {
        background-color:#4D4D4D;
        border-radius: 20px;
   text-decoration: none;
 }
.footer-a a:visited {
 	      text-decoration: none;
        color: white;
   text-decoration: none;
	font-size: 1.5rem!important;
	font-weight: 2;
 }
 @media screen and (max-width:768px){
 	.footer-card{
 		height: 150PX;
 		margin-top:50PX;
 	}
 		.footer-a{
		margin-top: -120px;
		line-height: 20px;
 		}
 		.footer-a a:visited,.footer-a a:link{
 			  font-size: 1.2rem!important;
 		}
  
 }
</style>
<center>
<div class="footer-card"></div>
 	<div class="footer-a">
 	
 	
 	
 	&nbsp<a href="<?php $this->options->siteUrl(); ?>">&nbsp首页&nbsp</a>
    <?php $this->widget('Widget_Contents_Page_List')
                 ->parse('&nbsp<a href="{permalink}">&nbsp{title}&nbsp</a>'); ?>
                 <p><?php $this->options->description() ?></p>
    <p> ©<?php echo date("Y")?>&nbsp;| &nbsp;<?php $this->options->title() ?></p>
    

                </div>   
                 
                 
                 </div>
      </center>    
      <?php if ($this->options->enableUpyun): ?>
<a href="https://thesky.work" target="_blank"><img src="https://sky-1252500346.cos.ap-beijing.myqcloud.com/tb/tbspp.png"/></a><?php endif; ?>

<?php if ($this->options->enableAliLogo): ?>
<a href="https://cloud.tencent.com/" target="_blank"><img src="https://sky-1252500346.cos.ap-beijing.myqcloud.com/tb/txy.svg"/></a><?php endif; ?>

                              </p>
		</div>


	</div>

	<script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
 	<script src="<?php $this->options->themeUrl('JS/X.js'); ?>"></script>
	<script src="<?php $this->options->themeUrl('JS/prism.js'); ?>"></script>
	<script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
	<script src="https://cdn.bootcss.com/fancybox/3.5.6/jquery.fancybox.min.js"></script>

	<?php $this->footer(); ?>

	<script>
		ajaxc();
		PreFancybox();
		show_site_runtime("<?php getBuildTime($this->options->builtTime);?>");
		<?php echo $this->options->CustomJSf;?>
	</script>

</div>


<?php if (isset($this->options->plugins['activated']['ExSearch'])) : ?>
	<div id="m_search">
		<span><a><i class="i m_search search-form-input"></i></a></span>
	</div>
<?php endif ?>
      <div id="m_top">
	<span><a onclick="gototop();"><i class="i gototop"></i></a></span>
</div>

<div id="m_menu">
	<span><a onclick="sideMenu_toggle();"><i class="i m_menu"></i></a></span>
</div>
   <?php $this->need('sliderbar.php'); ?>
   </body>