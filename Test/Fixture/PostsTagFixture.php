<?php
/**
 * Short description for class.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 */
class PostsTagFixture extends CakeTestFixture {

/**
 * name property
 *
 * @var string 'PostsTag'
 */
	public $name = 'PostsTag';

/**
 * Table to be created
 *
 * @var string 'PostsTag'
 */
	public $table = 'posts_tags';

/**
 * fields property
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'post_id' => array('type' => 'integer', 'null' => false),
		'tag_id' => array('type' => 'integer', 'null' => false)
	);

/**
 * records property
 *
 * @var array
 */
	public $records = array(

	);

}
