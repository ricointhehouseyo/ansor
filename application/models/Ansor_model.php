<?php

class Ansor_model extends CI_Model
{
	public function halaman($slug)
	{
		return $this->db->get_where("halaman", ["slug" => $slug])->row_array();
	}

	function get_CURL($url)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_exec($curl);
		$result = curl_exec($curl);
		curl_close($curl);

		return json_decode($result, true);
	}
	function get_xml($url)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_exec($curl);
		$result = curl_exec($curl);
		curl_close($curl);

		return simplexml_load_string($result);
	}
}