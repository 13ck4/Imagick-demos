<?php


namespace ImagickDemo\ControlElement;

use Intahwebz\Request;


class FillModifiedColor extends ColorElement {

    protected function getDefault() {
        return 'LightCoral';
    }

    protected function getVariableName() {
        return 'fillModifiedColor';
    }

    protected function getDisplayName() {
        return 'Fill modified color';
    }

    function getFillModifiedColor() {
        return $this->getValue();
    }
}


 