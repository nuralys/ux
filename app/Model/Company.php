<?php

class Company extends AppModel {
    // public $hasOne = 'Profile';
    public $hasMany = array(
        'Discount' => array(
            'className'  => 'Discount',
            // 'conditions' => array('Recipe.approved' => '1'),
            // 'order'      => 'Recipe.created DESC'
        )
    );
}
?>