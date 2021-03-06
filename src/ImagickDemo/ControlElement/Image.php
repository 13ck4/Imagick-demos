<?php

namespace ImagickDemo\ControlElement;

use Room11\HTTP\VariableMap;

//TODO - rename this to imagePath

class Image extends \ImagickDemo\ControlElement\OptionValueElement
{
    protected function getDefault()
    {
        return 'Lorikeet';
    }

    protected function getVariableName()
    {
        return 'imagePath';
    }

    protected function getDisplayName()
    {
        return "Image";
    }

    protected function getOptions()
    {
        $images = [
            "../public/images/Skyline_400.jpg" => 'Skyline',
            "../public/images/Biter_500.jpg" => 'Lorikeet',
            "../public/images/SydneyPeople_400.jpg" => 'People',
            "../public/images/LowContrast.jpg" => 'Low contrast',
        ];

        return $images;
    }

    public function getImagePath()
    {
        return $this->getOptionKey();
    }
}
