<?php

class Photo
{
    public $title;
    public $location;
    public $date;

    public function __construct($title, $location, $date)
    {
        $this->title = $title;
        $this->location = $location;
        $this->date = $date;
    }

    public function toHtml()
    {
        return "<div>" .
            "<p>" . htmlspecialchars($this->title) . "</p>" .
            "<p>" . htmlspecialchars($this->location) . "</p>" .
            "<p>" . htmlspecialchars($this->date) . "</p>" .
            "</div>";
    }
}

// クライアントコードの一部
$photo = new Photo("誕生日パーティー", "東京", "2020-01-01");
echo $photo->toHtml();

// 別の場所での類似のコード
$anotherPhoto = new Photo("ピクニック", "山梨", "2020-05-01");
echo $anotherPhoto->toHtml();
