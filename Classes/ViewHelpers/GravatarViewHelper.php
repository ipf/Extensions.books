<?php
class Tx_Books_ViewHelpers_GravatarViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * @param string $emailAddress Email address of the gravatar to be rendered
	 * @param integer $size
	 * @return string
	 */
	public function render($emailAddress, $size = 100) {
		return '<img src="http://gravatar.com/avatar/' . md5($emailAddress) . '?size=' . htmlspecialchars($size) . '" />';
	}
}
?>