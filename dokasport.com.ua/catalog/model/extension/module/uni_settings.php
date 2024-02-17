<?php
class ModelExtensionModuleUniSettings extends Model {	
	public function getSetting() {
		$store_id = (int)$this->config->get('config_store_id');
		
		$data = $this->cache->get('unishop.settings.'.$store_id);
		
		if (!$data) {
			$data = [];
			
			$query = $this->db->query("SELECT data FROM `".DB_PREFIX."uni_setting` WHERE store_id = '".$store_id."'");
			
			if($query->rows) {
				$data = json_decode($query->row['data'], true);
				$this->cache->set('unishop.settings.'.$store_id, $data);
				
				$this->removeFiles();
				
				$this->cache->delete('product.unishop');
			}
		}
		
		$this->config->set('config_unishop2', $data);
	}
	
	private function removeFiles() {
		$store_id = (int)$this->config->get('config_store_id');
		
		$styles = glob(DIR_TEMPLATE.'unishop2/stylesheet/merged*');
		
		$styles[] = DIR_TEMPLATE.'unishop2/stylesheet/generated-'.$store_id.'.css';
		$styles[] = DIR_TEMPLATE.'unishop2/stylesheet/generated-user-style-'.$store_id.'.css';
		
		if($styles) {
			foreach($styles as $file) {
				if (file_exists($file)) {
					unlink($file);
				}
			}
		}
		
		$scripts = glob(DIR_TEMPLATE.'unishop2/js/merged*');
		
		if($scripts) {
			foreach($scripts as $file) {
				if (file_exists($file)) {
					unlink($file);
				}
			}
		}
	}
}
?>