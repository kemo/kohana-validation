<?php namespace Kohana\Validation;
/**
 * @package    Kohana
 * @category   Exceptions
 * @author     Kohana Team
 * @copyright  (c) 2009-2012 Kohana Team
 * @license    http://kohanaframework.org/license
 */
class Exception extends \Exception {

	/**
	 * @var  object  Validation instance
	 */
	protected $array;

	/**
	 * @param  Validation   $array      Validation object
	 * @param  string       $message    error message (optional)
	 * @param  array        $values     translation variables (optional)
	 * @param  int          $code       the exception code (optional)
	 * @param  \Exception   $previous   previous exception (optional)
	 */
	public function __construct(Validation $array, $message = 'Failed to validate array', array $values = NULL, $code = 0, \Exception $previous = NULL)
	{
		$this->array = $array;
		
		$message = strtr($message, $values);

		parent::__construct($message, $code, $previous);
	}

}
