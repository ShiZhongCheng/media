<?php
namespace app\api\model;
use think\Model;
use think\Request;
use think\Loader;
use think\Cookie;
use think\Db;

class GuidData
{
	// 当前位置
	var $location = array(
		array("loc" => "指引", "href" => "api/admin/guid"),
	);

	// 拼接数据函数
	public function getData()
	{
		// 当前位置数据
		$GuidData["location"] = $this->location;

		// dump( $GuidData );
		return $GuidData;
	}
}
