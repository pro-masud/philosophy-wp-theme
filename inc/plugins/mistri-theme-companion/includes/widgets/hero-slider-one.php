<?php
use Elementor\Controls_Manager;
use Elementor\Widget_Base;

/**
 * Example elemtor widget class
 */
class Hero_Slider_One extends Widget_Base {
    public function get_name() {
        return 'my-elementor-widget';
    }

    public function get_title() {
        return __('My Elementor Widget', 'my-elementor-widget');
    }

    public function get_icon() {
        return 'fa fa-code';
    }

    public function get_categories() {
        return ['basic',''];
    }

    public function render() {
        // Widget content
    }
}

