<?php 

class MixItUp
{
	private $_post_id = 0;
	private $_taxonomy = '';
	private $_terms;

	public function __construct($post_id, $taxonomy)
	{
		$this->_post_id = $post_id;
		$this->_taxonomy = $taxonomy;

		$this->getTerms();
	}


	private function getTerms()
	{
		$this->_terms = get_the_terms($this->_post_id, $this->_taxonomy);
	}

	public function getDataFilter()
	{
		$classes = '';
		if($this->_terms) {
			foreach($this->_terms as $term) {
				$classes .= $term->slug . ' ';
			}
		}
		
		return trim($classes);
	}

	public function getMixClasses() 
	{
		$classes = 'mix ';
		if($this->_terms) {
			foreach($this->_terms as $term) {
				$classes .= $term->slug . ' ';
			}
		}
		
		return trim($classes);
	}
}