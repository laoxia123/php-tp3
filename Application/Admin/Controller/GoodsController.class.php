<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller{
	public function add(){
			if(IS_POST){
				$model = D('goods');
				if($model->create(I('post.'),1)){
					if($model->add()){
						$this->success('操作成功',U('lst'));
						exit;
					}
				}
				$error= $model->getError();
				$this->error($error);
		}
		$this->display();
	}

	public function lst(){
		echo "商品列表页面！";
	}
	
}