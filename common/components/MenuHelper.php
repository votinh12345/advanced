<?php

namespace common\components;

use frontend\models\Category;

class MenuHelper {

    public static function getAllMenu() {
        $categoryModel = new Category();
        $categories = $categoryModel->getCategories(0);
        $data['category_id'] = 0;
        $data['categories'] = array();
        foreach ($categories as $category) {
            $children_data = array();
            if ($category['category_id'] != $data['category_id']) {
                $children = $categoryModel->getCategories($category['category_id']);
                foreach ($children as $child) {
                    $children_data[] = array(
                        'category_id' => $child['category_id'],
                        'name' => $child['name'],
                        'href' => 'product/category/' . 'path=' . $category['category_id'] . '_' . $child['category_id']
                    );
                }
            }
            $data['category_id'] = $category['category_id'];
            $data['categories'][] = array(
                'category_id' => $category['category_id'],
                'name' => $category['name'],
                'children' => $children_data,
                'href' => 'product/category.' . 'path=' . $category['category_id']
            );
        }

        return $data;
    }

}
