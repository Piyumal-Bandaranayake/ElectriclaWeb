<?php
// Script to generate favicons from logo.png
$source = __DIR__ . '/assets/logo.png';
$dest48 = __DIR__ . '/assets/favicon.png';
$dest180 = __DIR__ . '/assets/favicon-180.png';

if (!file_exists($source)) {
    die("Source logo not found.");
}

$imgInfo = getimagesize($source);
$mime = $imgInfo['mime'];

if ($mime == 'image/png') {
    $srcImg = imagecreatefrompng($source);
} elseif ($mime == 'image/jpeg') {
    $srcImg = imagecreatefromjpeg($source);
} else {
    die("Unsupported image format.");
}

$srcWidth = imagesx($srcImg);
$srcHeight = imagesy($srcImg);

$maxDim = max($srcWidth, $srcHeight);

function createSquareFavicon($srcImg, $srcWidth, $srcHeight, $maxDim, $targetSize, $destPath) {
    $squareImg = imagecreatetruecolor($maxDim, $maxDim);
    imagesavealpha($squareImg, true);
    $transColor = imagecolorallocatealpha($squareImg, 0, 0, 0, 127);
    imagefill($squareImg, 0, 0, $transColor);
    
    $dstX = ($maxDim - $srcWidth) / 2;
    $dstY = ($maxDim - $srcHeight) / 2;
    
    imagecopy($squareImg, $srcImg, $dstX, $dstY, 0, 0, $srcWidth, $srcHeight);
    
    $targetImg = imagecreatetruecolor($targetSize, $targetSize);
    imagesavealpha($targetImg, true);
    $transColor2 = imagecolorallocatealpha($targetImg, 0, 0, 0, 127);
    imagefill($targetImg, 0, 0, $transColor2);
    
    imagecopyresampled($targetImg, $squareImg, 0, 0, 0, 0, $targetSize, $targetSize, $maxDim, $maxDim);
    
    imagepng($targetImg, $destPath);
    imagedestroy($squareImg);
    imagedestroy($targetImg);
}

createSquareFavicon($srcImg, $srcWidth, $srcHeight, $maxDim, 48, $dest48);
createSquareFavicon($srcImg, $srcWidth, $srcHeight, $maxDim, 180, $dest180);

imagedestroy($srcImg);
echo "Favicons generated successfully.";
?>
