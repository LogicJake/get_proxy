<?php

/**
 * 封装 AJAX 返回数据的类
 * Author: Rex
 */

class Result {
	public static $return;
	public static function success($data = null) {
		self::$return = ['code' => 0];
		$data && self::$return['data'] = $data;
		self::send();
	}
	public static function error($msg = null) {
		self::$return = ['code' => 1];
		$msg && self::$return['msg'] = $msg;
		self::send();
	}
	public static function jump($url = null) {
		self::$return = ['code' => 2];
		$url && self::$return['url'] = $url;
		self::send();
	}
	public static function send() {
		header('Content-type: application/json; charset=utf-8');
		!self::$return && self::$return = [];
		echo json_encode(self::$return, JSON_UNESCAPED_UNICODE);
		exit();
	}
}
