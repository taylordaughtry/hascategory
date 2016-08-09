<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
	'pi_name' => 'HasCategory',
	'pi_version' => '0.1.0',
	'pi_author' => 'Taylor Daughtry',
	'pi_author_url' => 'https://github.com/taylordaughtry/hascategory',
	'pi_description' => 'Check if an entry has a category',
	'pi_usage' => HasCategory::usage()
);

class HasCategory
{
	public $return_data = false;

	public function __construct()
	{
		$catIds = explode('|', ee()->TMPL->fetch_param('category_id'));
		$entryId = ee()->TMPL->fetch_param('entry');

		ee()->db->select('*')
			->where('entry_id', $entryId)
			->where_in('cat_id', $catIds);

		$response = ee()->db->get('exp_category_posts');

		$this->return_data = $response->num_rows > 0;
	}

	public static function usage()
	{
		return 'See https://github.com/taylordaughtry/hascategory for documentation.';
	}
}