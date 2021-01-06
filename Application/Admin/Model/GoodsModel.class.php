<?php
namespace Admin\Model;
use Think\Model;

class GoodsModel extends Model{
	protected $insertFields = "goods_name,shop_price,market_price,is_on_sale,goods_desc";
	protected $_validate = array(
		array('goods_name','require','商品名称不能为空',1),
		array('shop_price','currency','本店价格必须是货币类型！',1),
		array('market_price','currency','市场价格必须是货币类型！',1),
	);

	protected function _before_insert(&$data,$option){
		// 获取当前时间并添加到表单中这样就会插入到数据库中
		$data['addtime'] = date('Y-m-d H:i:s',time());
		$data['goods_desc'] = removeXSS($_POST['goods_desc']);
	}
	
}