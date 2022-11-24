<?php
/* ===============================================================================
  Custom post configuration file
=============================================================================== */

/* 1.Use Custom Post
	TRUE => Using　FASLE => Not Using
------------------------------------------------------------------------------- */
define("CUSTOM_POST_USE", true);


/* 2.Custom post settings
------------------------------------------------------------------------------- */
if (CUSTOM_POST_USE) {
	add_action('init', 'addPosts');

	function addPosts()
	{
		$add_post_type = array(
			//////

			array(
				'post_type' => 'advertisement',
				'label'     => 'Advertisement',
				'args'      => array(
					'supports' => array(
						'title', 'editor', 'revisions', 'thumbnail', 'excerpt', 'author'
					)
				),
				'taxonomies' => array(
					array(
						'taxonomy'  => 'advertisement_tax',
						'label'     => 'Categories'
					)
				),
			),

			array(
				'post_type' => 'infomations',
				'label'     => 'Infomations',
				'args'      => array(
					'supports' => array(
						'title', 'editor', 'revisions', 'thumbnail', 'excerpt', 'author', 'page-attributes'
					)
				),
				'taxonomies' => array(
					array(
						'taxonomy' => 'infomations_tax',
						'label' => 'Categories',
						'rewrite'   => array(
							'slug' => 'infomation',
							'with_front' => true
						)
					)
				),
			),

			array(
				'post_type' => 'policy',
				'label'     => 'Policy',
				'args'      => array(
					'supports' => array(
						'title', 'editor', 'revisions', 'thumbnail', 'excerpt', 'author',
					)
				),
			),

			array(
				'post_type' => 'why',
				'label'     => 'Why choice',
				'args'      => array(
					'supports' => array(
						'title', 'editor', 'revisions', 'thumbnail', 'excerpt', 'author'
					)
				),
			),

			array(
				'post_type' => 'question',
				'label'     => 'Questions',
				'args'      => array(
					'supports' => array(
						'title', 'revisions', 'excerpt', 'author'
					)
				),
			),

			array(
				'post_type' => 'working',
				'label'     => 'Working',
				'args'      => array(
					'supports' => array(
						'title', 'revisions', 'author'
					)
				),
			),
		);

		foreach ($add_post_type as $data) {
			$args = array(
				'label'           => $data["label"],
				'menu_icon'       => 'dashicons-admin-post',
				'menu_position'   => 5,
				'has_archive'     => true,
				'description'     => $data["label"],
				'public'          => true,
				'show_ui'         => true,
				'show_in_menu'    => true,
				'capability_type' => 'post',
				'hierarchical'    => true,
				'rewrite'         => array('slug' => $data["post_type"], 'with_front' => true),
				'query_var'       => true,
				'supports'        => array('title', 'editor'),
			);

			$args = array_merge($args, $data['args']);

			// $args['labels'] = array(
			// 	'name'               => $data["label"],
			// 	'singular_name'      => $data["label"],
			// 	'menu_name'          => $data["label"],
			// 	'add_new'            => ' ',
			// 	'add_new_item'       => $data["label"] . 'を新規追加',
			// 	'edit'               => '編集',
			// 	'edit_item'          => $data["label"] . 'を編集',
			// 	'new_item'           => '新着' . $data["label"],
			// 	'view'               => $data["label"] . 'を表示',
			// 	'view_item'          => $data["label"] . 'を表示',
			// 	'search_items'       => $data["label"] . 'を検索',
			// 	'all_items'          => $data["label"] . '一覧',
			// 	'not_found'          => $data["label"] . 'はありません',
			// 	'not_found_in_trash' => 'ゴミ箱は空です',
			// 	'parent'             => '親' . $data["label"],
			// );

			register_post_type($data["post_type"], $args);

			if (!empty($data['taxonomies']) && is_array($data['taxonomies'])) {
				foreach ($data['taxonomies'] as $tax) {
					if (is_string($tax)) {
						register_taxonomy_for_object_type($tax, $data["post_type"]);
						continue;
					}

					$tax_args = array(
						'public'            => true,
						'show_ui'           => true,
						'show_in_menu'      => true,
						'show_admin_column' => true,
						'rewrite'           => true,
						'hierarchical'      => true,
						//'meta_box_cb'       => 'post_categories_meta_box',
						//'meta_box_cb'       => 'post_tags_meta_box',
						//'update_count_callback' => '_update_generic_term_count',
					);

					if (isset($tax['args'])) {
						$tax_args = array_merge($tax_args, $tax['args']);
					}
					// Rewrite url slug Taxonomy
					if (!empty($tax['rewrite'])) {
						$tax_args['rewrite'] = $tax['rewrite'];
					}
					if (!empty($tax['label'])) {
						$tax_args['label'] = $tax['label'];
					} elseif (empty($tax_args['label'])) {
						$tax_args['label'] = ($tax_args['hierarchical']) ? 'Loại' : 'Nhãn';
					}

					$tax_args['labels'] = array(
						'name'          => $tax_args['label'],
						'singular_name' => $tax_args['label'],
						'search_items'  => $tax_args['label'] . 'Tìm kiếm',
						'popular_items' => 'Thường được sử dụng ' . $tax_args['label'],
						'all_items'     => 'Tất cả ' . $tax_args['label'],
						'parent_item'   => 'Danh mục cha ' . $tax_args['label'],
						'edit_item'     => $tax_args['label'] . 'chỉnh sửa',
						'update_item'   => 'Thêm mới',
						'add_new_item'  => 'Thêm mới ' . $tax_args['label'],
						'new_item_name' => 'Mới' . $tax_args['label'],
					);
					register_taxonomy($tax['taxonomy'], $data["post_type"], $tax_args);
				}
			}
		}
	}
}
