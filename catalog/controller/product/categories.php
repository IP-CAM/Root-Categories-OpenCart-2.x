<?php
class ControllerProductCategories extends Controller {
	public function index($setting) {
		$this->load->language('product/categories');

		$data['heading_title'] = $this->language->get('catalog');
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('catalog'),
			'href' => $this->url->link('product/categories')
		);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->load->model('catalog/categories');

		$data['categories'] = array();

		$categories = $this->model_catalog_categories->getCategories();

		foreach ($categories as $category) {

			$data['categories'][] = array(
				'category_id' => $category['category_id'],
				'name'        => $category['name'],
				'img'        => $category['image'],
				'href'        => $this->url->link('product/category', 'path=' . $category['category_id'])
			);
		}

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/product/categories.tpl')) {
			$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/product/categories.tpl', $data));
		} else {
			$this->response->setOutput($this->load->view('default/template/product/categories.tpl', $data));
		}
	}
}