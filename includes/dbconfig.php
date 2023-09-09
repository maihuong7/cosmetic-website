<?php
    require __DIR__.'/vendor/autoload.php';

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\Auth;
    use Kreait\Firebase\Contract\Storage;
    use Google\Cloud\Core\Timestamp;
    use Kreait\Firebase\Contract\Firestore;
    use Cloudinary\Cloudinary;
    use Cloudinary\Transformation\Resize;
    use Cloudinary\Api\Upload\UploadApi;
    use Cloudinary\Configuration\Configuration;


    $factory = (new Factory)
    ->withServiceAccount('D:/xampp/htdocs/cosmetic/includes/mh.json')
    ->withDatabaseUri('https://web-cosmetic-2aa1f-default-rtdb.firebaseio.com/');

    $cloudinary = new Cloudinary(
        [
            'cloud' => [
                'cloud_name' => 'dqtruuyls', 
                'api_key' => '352548228369754', 
                'api_secret' => 'TgmYlX4vlwmbg9nlUaJk58Nmg8o',            ],
        ]
    );


    $database = $factory->createDatabase();
    $auth = $factory-> createAuth();
    $storage = $factory->createStorage();
    // $firestore = $factory->createFirestore();
    // $storage = $factory->getBucket();
?>