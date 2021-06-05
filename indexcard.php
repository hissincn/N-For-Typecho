
<div id="article" class="clear">
  <div id="article-content">

  <?php while($this->next()): ?>
    <div class="card-item">
       <article>
<div class="card-cover" style="background-image: url(<?php  $imgurl = $this->fields->imgurl;  if(isset($imgurl)){echo $imgurl;}else{$this->options->defaultPostIMG();}?>)"></div>

         <a class="article-link card-link" href="<?php $this->permalink() ?>" itemprop="url"></a>
         <h2 class="article-title"><?php $this->sticky();$this->title() ?></h2>
         <div class="article-meta">
           <div class="article-category">
             <a class="article-category-link"><?php $this->category(',',false); ?></a>
             <a class="article-date"><?php echo formatTime($this->created);?></a>
             <a class="article-category-link"><?php $this->commentsNum('%d个脚印'); ?></a>
           </div>
         </div>
       </article>
     </div>
  <?php endwhile; ?>

 <div class="next"><?php $this->pageLink('更多 >','next'); ?></div>
 <div class="prev"><?php $this->pageLink('< 返回','prev'); ?></div>

 </div>
</div>
