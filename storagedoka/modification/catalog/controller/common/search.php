<?php
class ControllerCommonSearch extends Controller {
	public function index() {
		$this->load->language('common/search');

			$uniset = $this->config->get('config_unishop2');
			$this->load->language('extension/module/uni_othertext');
			
			$data['search_mob_hide'] = isset($uniset['search_mob_hide']) ? true : false;
			
			$data['categories'] = [];
			
			if(!isset($uniset['search']['category'])) {
				$this->load->model('catalog/category');
				$categories = $this->model_catalog_category->getCategories(0);
				foreach ($categories as $category) {
					$data['categories'][] = array(
						'category_id' => $category['category_id'],
						'name'        => $category['name'],
					);
				}
			}
			

		$data['text_search'] = $this->language->get('text_search');

		if (isset($this->request->get['search'])) {
			$data['search'] = $this->request->get['search'];
		} else {
			$data['search'] = '';
		}

		return $this->load->view('common/search', $data);
	}
}