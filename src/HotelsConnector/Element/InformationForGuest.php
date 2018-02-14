<?php
/**
 * User: Егор Груздев
 * Date: 14.02.2018
 * Time: 16:43
 */

namespace Bronevik\HotelsConnector\Element;


class InformationForGuest
{
	/**
	 * Type: xsd:string
	 *
	 * @var string
	 */
	public $comment;

	/**
	 * @return string
	 */
	public function getComment()
	{
		return $this->comment;
	}

	/**
	 * @param string $comment
	 */
	public function setComment($comment)
	{
		$this->comment = $comment;
	}
}