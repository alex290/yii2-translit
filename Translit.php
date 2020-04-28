<?php

namespace alex290\translit;
use yii\helpers\StringHelper;

/**
 * This is just an example.
 */
class Translit extends \yii\base\Widget {

    public $sufix = null; // Суфикс например .html
    public $text = null; // Русский текст
    public $length = 50; //Длина (количество) символов. По умалчанию 50

    public function run() {
        
        $rus = [
            'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я', 'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я', "?", " ", ".", "(", ")", ",", "'", "’", "'", '"', "«", "»", "&", "/", "\\",
        ];
        $lat = [
            'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', 'a', 'b', 'v', 'g', 'd', 'e', 'e', 'gh', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', 'ch', 'sh', 'sch', 'y', 'y', 'y', 'e', 'yu', 'ya', "", "-", "", "", "", "", "", "", "", "", "", "", "", "", ""
        ];

        return StringHelper::truncate(str_replace($rus, $lat, $this->text), $this->length, '').$this->sufix;
    }

}
