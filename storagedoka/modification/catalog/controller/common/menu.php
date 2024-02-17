<?php
class ControllerCommonMenu extends Controller {
	public function index() {

				$uniset = $this->config->get('config_unishop2');
				$lang_id = (int)$this->config->get('config_language_id');
				$cat_arr = isset($this->request->get['path']) ? explode('_', (string)$this->request->get['path']) : [];
				$cat_id = !isset($this->request->get['product_id']) && isset($uniset['menu_links_disabled']) ? (int)array_pop($cat_arr) : '';
				$third_level_limit = isset($uniset['menu_3rd_level_limit']) ? $uniset['menu_3rd_level_limit'] : 0;
			
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);

						
					$children2 = $this->model_catalog_category->getCategories($child['category_id']);
					
					$children_data2 = [];
					$child_count = 0;
					$more = '';
					$show_more = $third_level_limit && $third_level_limit < count($children2) ? true : false;
			
					foreach ($children2 as $child2) {
						if(isset($uniset['menu_links_show']) ? $child2['top'] : 1) {
							$children_data2[] = array(
								'name'  		=> $child2['name'],
								'category_id'	=> $child2['category_id'],
								'disabled'		=> $child2['category_id'] == $cat_id ? true : false,
								'href'  		=> $this->url->link('product/category', 'path='.$category['category_id'].'_'.$child['category_id'].'_'.$child2['category_id']),
							);
							
							$child_count++;
						}
						
						if($show_more && $third_level_limit == $child_count) {
							$more = count($children2);
							break;
						}
					}
			
					if(isset($uniset['menu_links_show']) ? $child['top'] : 1) {
						$children_data[] = array(
							'name'       	=> $child['name'],
							'category_id'	=> $child['category_id'],
							'disabled'		=> $child['category_id'] == $cat_id ? true : false,
							'children'   	=> $children_data2,
							'href'        	=> $this->url->link('product/category', 'path='.$category['category_id'].'_'.$child['category_id']),
							'more'			=> $more
						);
					}
				}
				
				// Level 1
			
				$data['categories'][] = array(
					'name'     => $category['name'],

			'icon' 		=> isset($uniset[$lang_id]['main_category_icons'][$category['category_id']]) ? $uniset[$lang_id]['main_category_icons'][$category['category_id']] : '',
			'disabled'	=> $category['category_id'] == $cat_id ? true : false,
			
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}


			$data = array_merge($data, $this->load->controller('extension/module/uni_new_data', ['type' => 'menu']));
			
			if($data['additional_link']) {
				$data['categories'] = array_merge($data['categories'], $data['additional_link']);
			}
			
		return $this->load->view('common/menu', $data);
	}
}
