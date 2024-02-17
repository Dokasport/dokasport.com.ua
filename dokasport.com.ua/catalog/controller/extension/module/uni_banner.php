<?php
class ControllerExtensionModuleUniBanner extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$data['banners'] = [];

		$results = $this->model_design_banner->getBanner($setting['banner_id']);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$size = getimagesize(DIR_IMAGE . $result['image']);
				
				$data['banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], $size[0], $size[1])
				);
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/uni_banner', $data);
	}
}