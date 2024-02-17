<?php
class ControllerExtensionModuleCategory extends Controller {
	public function index() {
		$this->load->language('extension/module/category');

			$uniset = $this->config->get('config_unishop2');
			$lang_id = $this->config->get('config_language_id');
			
			if(isset($uniset['show_heading_in_admin']) && isset($setting['name'])) { 
				$data['heading_title'] = $setting['name'];
			} elseif ($this->language->get('heading_title')) {
				$data['heading_title'] = $this->language->get('heading_title');
			}
			
			$module_type_view = isset($uniset['module_type_view']) ? $uniset['module_type_view'] : [];
			$data['type_view'] = isset($setting['name']) && in_array($setting['name'], $module_type_view) ? 'grid' : 'carousel';
			
			$new_data = $this->load->controller('extension/module/uni_new_data', ['type' => 'catalog']);
			$data = isset($data) ? array_merge($data, $new_data) : $new_data;
			
			$currency = $this->session->data['currency'];
			$this->load->model('extension/module/uni_new_data');
			

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		
			$cache_name = 'category.module.'.(int)$this->config->get('config_language_id').'.'.(int)$this->config->get('config_store_id');
			$data['categories'] = $this->cache->get($cache_name);
			if(!$data['categories']) {
			

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			$children_data = array();

			if ($category['category_id'] > 0) {
				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach($children as $child) {
					$filter_data = array('filter_category_id' => $child['category_id'], 'filter_sub_category' => true);

					$children_data[] = array(
						'category_id' => $child['category_id'],
						'name' => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}
			}

			$filter_data = array(
				'filter_category_id'  => $category['category_id'],
				'filter_sub_category' => true
			);

			$data['categories'][] = array(
				'category_id' => $category['category_id'],
				'name'        => $category['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
				'children'    => $children_data,
				'href'        => $this->url->link('product/category', 'path=' . $category['category_id'])
			);
		}


				$this->cache->set($cache_name, $data['categories']);
			}
			
		return $this->load->view('extension/module/category', $data);
	}
}