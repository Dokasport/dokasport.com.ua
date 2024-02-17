<?php
class ModelDesignLayout extends Model {
	public function getLayout($route) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "layout_route WHERE '" . $this->db->escape($route) . "' LIKE route AND store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY route DESC LIMIT 1");

		if ($query->num_rows) {
			return (int)$query->row['layout_id'];
		} else {
			return 0;
		}
	}
	
	public function getLayoutModules($layout_id, $position) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "layout_module WHERE layout_id = '" . (int)$layout_id . "' AND position = '" . $this->db->escape($position) . "' ORDER BY sort_order");
		

			$uniset = $this->config->get('config_unishop2');
			
			$home_banners_layouts = isset($uniset['home_banners_layout']) ? explode(',', $uniset['home_banners_layout']) : [1];
			
			if(isset($uniset['home_banners_position']) && $uniset['home_banners_position'] == $position && in_array($layout_id, $home_banners_layouts)) {
				$query->rows[] = array(
					'layout_module_id'	=> 99999999,
					'layout_id'			=> $layout_id,
					'code' 				=> 'uni_home_banner',
					'position' 			=> $uniset['home_banners_position'],
					'sort_order'		=> $uniset['home_banners_position_n']
				);
				
				$this->config->set('module_uni_home_banner_status', 1);
				
				foreach ($query->rows as $key => $value) {
					$sort[$key] = $value['sort_order'];
				}
			
				array_multisort($sort, SORT_ASC, $query->rows);
			}
			
		return $query->rows;
	}
}