<?php
class Request
{
	private $_controller;

	private $_method;

	private $_path;

	public function __construct()
	{
		$url = $this->handleURI($_SERVER['REQUEST_URI']);
		$parts = explode('?', $url);
		$parts = array_filter($parts);
		$path = $parts[0];
		$segments = explode("/", $path);
		$segments = array_filter($segments);
		$this->_method = ($c = array_pop($segments)) ? $c : "index";
		$this->_controller = ($c = array_pop($segments)) ? ucfirst($c) : "Index";
		$this->_path = sizeof($segments) > 0 ? join("/", $segments) . '/' : '';
	}

	private function handleURI($requestUri)
	{
		global $routes;
		$requestUri = trim($requestUri, "/");
		foreach ($routes as $key => $value) {
			if (preg_match("~" . $key . "~is", $requestUri)) {
				$this->auth($value["roles"]);
				$requestUri = preg_replace("~" . $key . "~is", $value["handler"], $requestUri);
				return $requestUri;
			}
		}
		throw new Exception('404 - Not found');
	}

	private function auth($roles)
	{
		if (in_array("all", $roles)) {
			return;
		}
		if (!isset($_SESSION["role"])) {
			header('Location: /login');
			return;
		}
		if (!in_array($_SESSION["role"], $roles)) {
			header('Location: /notpermission');
			return;
		}
	}

	public function getController()
	{
		return $this->_controller;
	}
	public function getMethod()
	{
		return $this->_method;
	}
	public function getPath()
	{
		return $this->_path;
	}
}
