<?php
/**
 * EditableEmailField
 *
 * Allow users to define a validating editable email field for a UserDefinedForm
 *
 * @package userforms
 */
class EditableEmailField extends EditableFormField {
	
	static $singular_name = 'Email field';
	
	static $plural_name = 'Email fields';
	
	function getFormField() {
		return new EmailField($this->Name, $this->Title);
	}
	
	function getFilterField() {
		return $this->createField(true);
	}
	
	/**
	 * Return the validation information related to this field. This is 
	 * interrupted as a JSON object for validate plugin and used in the 
	 * PHP. 
	 *
	 * @see http://docs.jquery.com/Plugins/Validation/Methods
	 * @return Array
	 */
	public function getValidation() {
		return array(
			'email' => true
		);
	}
}
?>