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
}

// クライアントコードの一部
$photo = new Photo("誕生日パーティー", "東京", "2020-01-01");
echo "<div>";
echo "<p>" . htmlspecialchars($photo->title) . "</p>";
echo "<p>" . htmlspecialchars($photo->location) . "</p>";
echo "<p>" . htmlspecialchars($photo->date) . "</p>";
echo "</div>";

// 別の場所での類似のコード
$anotherPhoto = new Photo("ピクニック", "山梨", "2020-05-01");
echo "<div>";
echo "<p>" . htmlspecialchars($anotherPhoto->title) . "</p>";
echo "<p>" . htmlspecialchars($anotherPhoto->location) . "</p>";
echo "<p>" . htmlspecialchars($anotherPhoto->date) . "</p>";
echo "</div>";
