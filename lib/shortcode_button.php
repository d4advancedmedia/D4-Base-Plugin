<?php
// Use: [button text="" subtext="" link="" icon=""]
	function shortcode_button( $atts ) {
		$attr=shortcode_atts(array(
			'text'		=> '',
			'subtext'	=> '',
			'link' 		=> '',
			'icon' 		=> '',
			'target' 	=> '',
			'class'		=> '',
		), $atts);

		if ($attr['text'] != '') {
			$text = $attr['text'];
		} else {
			$text = 'Learn More';
		}

		if ($attr['subtext'] != '') {
			$subtext = '<span class="button-subtext">'.$attr['subtext'].'</span>';
		}

		if ($attr['link'] != '') {
			$link = 'href="'.$attr['link'].'"';
		}
		if ($attr['target'] != '') {
			$target = ' target="'.$attr['target'].'"';
		}
		if ($attr['class'] != '') {
			$class = ' '.$attr['class'].'"';
		}

		$icon = $attr['icon'];

		$output = '';
		$output .= '<a '.$link.' class="button '.$class.'"'.$target.'><i class="button-icon '.$icon.'"></i>';
		$output .= $text;
		$output .= $subtext;
		$output .= '</a>';

		return $output;
	} add_shortcode( 'button', 'shortcode_button' );
?>