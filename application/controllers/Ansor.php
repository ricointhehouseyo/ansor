<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ansor extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Ansor_model");
	}
	public function index()
	{
		$data["title"] = "GP Ansor Jombang";
		$data["selected"] = "home";
		$data['result'] = $this->Ansor_model->get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCDK69Bq8u45GMNOTmNeMg3Q&key=AIzaSyCoQzkfEmoRR5hv1dORTDUbTU7WSnT-bA8');
		$data['content'] = $this->Ansor_model->get_CURL("http://ansorjatim.or.id/wp-json/wp/v2/posts?_embed");
		$this->load->view("templates/header", $data);
		$this->load->view("templates/navbar", $data);
		$this->load->view("templates/carousel");
		$this->load->view("home/carousel-news", $data);
		$this->load->view("ansor/news", $data);
		$this->load->view("home/medsoc", $data);
		$this->load->view("templates/footer");
		//$data["content"] =
		//$this->Ansor_model->getAPI("");
		//$this->load->view("",$data);	
	}
	public function show_page($slug)
	{
		$data["content"] = $this->Ansor_model->halaman($slug);
		$data['title'] = $data["content"]["judul_halaman"];
		$data['selected'] = "profile";
		$this->load->view("templates/header", $data);
		$this->load->view("templates/navbar", $data);
		$this->load->view("ansor/halaman", $data);
		$this->load->view("templates/footer");
	}
	public function news()
	{
		$data['content'] = $this->Ansor_model->get_CURL("http://ansorjatim.or.id/wp-json/wp/v2/posts?_embed");
		$data['title'] = "Berita";
		$data['selected'] = "berita";

		// var_dump($data);
		$this->load->view("templates/header", $data);
		$this->load->view("templates/navbar", $data);
		$this->load->view("ansor/news", $data);
		$this->load->view("templates/footer");
	}
}