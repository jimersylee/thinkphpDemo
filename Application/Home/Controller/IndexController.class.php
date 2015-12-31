<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index($ID=2){
        //查找数据库的过程
		//$title='快速入门1';
		$article=M('article');
		//$sql['title']=$title;
		
		//select 语句存在问题,暂时用id吧
		//$sqlPage['title']=$ID;
		//$pageResult=$article->where($sqlPage)->select();
		$pageResult=$article->find($ID);
		$this->assign('page',$pageResult); //渲染标题,内容等
		$this->assign('articleID',$ID); //渲染评论区 文章ID
		
		//查找此父标题下的所有子文章
		$sql['fatherID']=$ID;
		$childTitle=$article->where($sql)->select();
		$this->assign('childTitle',$childTitle);
		
		//查找此文章下的所有评论
		$comment=M('comment');
		$sqlComment['articleID']=$ID;
		$commentResult=$comment->where($sqlComment)->select();
		$this->assign('comment',$commentResult);
		
		
		$this->display();
		
    }
	public function edit(){
		$this->display();
		
	}
	
	public function comment($articleID,$content,$fatherID=''){
		//评论文章的id,评论内容,评论某人id
		//save方法
		$comment = D('comment');
			if($comment->create()) {
				$result = $comment->add();
				if($result) {
					$this->success('评论成功！');
				}else{
					$this->error('评论失败！');
				}
			}else{
				$this->error($Form->getError());
			}
		
		
	}
}