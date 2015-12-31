<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo ($page["title"]); ?></title>
  
    
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/css/style.css" rel="stylesheet" />
  </head>
  <body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <h3><?php echo ($page["title"]); ?></h3>
      </div>
      <div class="col-md-9"></div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="tabbable" id="tabs-97483">
          <ul class="nav nav-tabs">
            <li class="active">
              <a href="#panel-830309" data-toggle="tab">目录</a>
            </li>
            <li class="">
              <a href="#panel-965253" data-toggle="tab">搜索</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="panel-830309">
              <ul class="list-unstyled" contenteditable="true">
                <?php if(is_array($childTitle)): $i = 0; $__LIST__ = $childTitle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li ><a href="#"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				<!渲染子标题列表,并加链接>
				
	
              </ul>
            </div>
            <div class="tab-pane" id="panel-965253">
              <form class="form-search">
              <input class="input-medium search-query" type="text" /> 
              <button type="submit" class="btn" contenteditable="true">搜索</button>
			  </form>
			  <ul class="list-unstyled" contenteditable="true">
                <li>搜索结果1</li>
                <li>搜索结果1</li>
                <li>搜索结果1</li>
                <li>搜索结果1</li>
                <li>搜索结果1</li>
                <li>搜索结果1</li>
                <li>搜索结果1</li>
                <li>搜索结果1</li>
              </ul>
            </div>
          </div>
        </div>
		<div class="col-md-12">
		<address>
        <strong>Jimersy Lee</strong>
        <br />HangZhou YiBai Tec.inc
        <br />jimersylee@gmail.com
        <br />
        <abbr title="Phone">P:</abbr> (123) 456-7890</address>
        <span class="label label-danger">GPL Lisense</span>
	  
		</div>
      </div>
      <div class="col-md-9">
        <p>
	    <?php echo ($page["content"]); ?>
		</p>
        <ul class="pagination pagination-centered">
          <li>
            <a href="#">快速入门1</a>
          </li>
        
          <li>
            <a href="#">快速入门3</a>
          </li>
        </ul>
		
		
				
				
				
        <form method="post" action="/index.php/Home/Index/comment">  <!调用comment()>
					<fieldset>
					<legend contenteditable="true">相关评论</legend>
					<label contenteditable="true">文明评论</label>
					<input name="content" placeholder="Type something…" type="text">
					<!用一个input存articleID ,userID根据session查询,这是评论文章的,不是评论别人的,所以fatherID=0>
					<input name="articleID" type="hidden" value="<?php echo ($articleID); ?>">
					<input name="fatherID" type="hidden" value="0">
					<input name="userName" type="hidden" value="jimersylee">    
					<span class="help-block" contenteditable="true">理性发言</span>
					
					<button type="submit" class="btn" contenteditable="true">提交</button>
					</fieldset>
				</form>
				
				
				
				
				<?php if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="media">
					<a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="/Public/img/ava.jpg" class="media-object" /></a>
					<div class="media-body">
					<h4 class="media-heading">
						<?php echo ($vo["username"]); ?>
					</h4> <?php echo ($vo["content"]); ?>
					
				    </div>
				
			    </div><?php endforeach; endif; else: echo "" ;endif; ?>
				
		</div>
	</div>
              
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        
      </div>
      <div class="col-md-4">
		
	  </div>
      <div class="col-md-4"></div>
    </div>
  </div>
  <script src="/Public/js/jquery.min.js"></script> 
  <script src="/Public/js/bootstrap.min.js"></script> 
  <script src="/Public/js/scripts.js"></script></body>
</html>