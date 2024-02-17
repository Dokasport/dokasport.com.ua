<?php
class ControllerExtensionModuleLatest extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/latest');

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
			

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['products'] = array();

		$filter_data = array(
			'sort'  => 'p.date_added',
			'order' => 'DESC',
			'start' => 0,
			'limit' => $setting['limit']
		);

		$results = $this->model_catalog_product->getProducts($filter_data);

		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}


			$setting = isset($setting) ? $setting : '';
			$result = isset($product_info) && $setting ? $product_info : $result;
			$new_data = $this->model_extension_module_uni_new_data->getNewData($result, $setting);
			$show_description = isset($uniset['show_description']) && !isset($uniset['show_description_alt']) || isset($uniset['show_description_alt']) && !$new_data['attributes'] ? true : false;
			
			if($new_data['special_date_end']) {
				$data['show_timer'] = true;
			}
			
			if($result['quantity'] > 0) {
				$show_quantity = isset($uniset['qty_switch']['enabled']) ? true : false;
				$cart_btn_icon = $uniset[$lang_id]['cart_btn_icon'];
				$cart_btn_text = $uniset[$lang_id]['cart_btn_text'];
				$cart_btn_class = '';
				$quick_order = isset($uniset['show_quick_order']) ? true : false;
			} else {
				$show_quantity = isset($uniset['qty_switch']['enabled_all']) ? true : false;
				$cart_btn_icon = $uniset[$lang_id]['cart_btn_icon_disabled'];
				$cart_btn_text = $uniset[$lang_id]['cart_btn_text_disabled'];
				$cart_btn_class = $uniset['cart_btn_disabled'];
				$quick_order = isset($uniset['show_quick_order_quantity']) ? true : false;
			}
			
				$data['products'][] = array(

			'additional_image'	=> $new_data['additional_image'],
			'num_reviews' 		=> isset($uniset['show_rating_count']) ? $result['reviews'] : '',
			'special_date_end' 	=> $new_data['special_date_end'],
			'minimum' 			=> $result['minimum'] ? $result['minimum'] : 1,
			'quantity_indicator'=> $new_data['quantity_indicator'],
			'stickers' 			=> $new_data['stickers'],
			'price_value' 		=> $this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax'))*$this->currency->getValue($currency),
			'special_value' 	=> $this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax'))*$this->currency->getValue($currency),
			'discounts'			=> $new_data['discounts'],
			'attributes' 		=> $new_data['attributes'],
			'options'			=> $new_data['options'],
			'show_description'	=> $show_description,
			'show_quantity'		=> $show_quantity,
			'cart_btn_icon'		=> $cart_btn_icon,
			'cart_btn_text'		=> $cart_btn_text,
			'cart_btn_class'	=> $cart_btn_class,
			'quick_order'		=> $quick_order,
			
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}

			return $this->load->view('extension/module/latest', $data);
		}
	}
}
