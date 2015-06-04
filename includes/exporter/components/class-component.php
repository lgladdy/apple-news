<?php
namespace Exporter\Components;

abstract class Component {

	protected $workspace;
	protected $json = null;

	function __construct( $text, $workspace ) {
		$this->workspace = $workspace;
	}

	public function value() {
		// Lazy value evaluation
		if( is_null( $this->json ) ) {
			$this->build( $text );
		}

		return $this->json;
	}

	abstract protected function build( $text );

}
