<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit337f7348d42fca9e8c3ea45ab501ca0e
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '626dcc41390ebdaa619faa02d99943b0' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/customFunctions.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\composer\\' => 15,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\PropertyAccess\\' => 33,
            'Symfony\\Component\\OptionsResolver\\' => 34,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'M' => 
        array (
            'MyCLabs\\Enum\\' => 13,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\PropertyAccess\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/property-access',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'MyCLabs\\Enum\\' => 
        array (
            0 => __DIR__ . '/..' . '/myclabs/php-enum/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qrcode/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'BaconQrCode' => 
            array (
                0 => __DIR__ . '/..' . '/bacon/bacon-qr-code/src',
            ),
        ),
    );

    public static $classMap = array (
        'QrReader' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/QrReader.php',
        'Zxing\\Binarizer' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Binarizer.php',
        'Zxing\\BinaryBitmap' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/BinaryBitmap.php',
        'Zxing\\ChecksumException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/ChecksumException.php',
        'Zxing\\Common\\BitArray' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/BitArray.php',
        'Zxing\\Common\\BitMatrix' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/BitMatrix.php',
        'Zxing\\Common\\BitSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/BitSource.php',
        'Zxing\\Common\\CharacterSetECI' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/CharacterSetEci.php',
        'Zxing\\Common\\CharacterSetEci\\AbstractEnum\\AbstractEnum' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/AbstractEnum.php',
        'Zxing\\Common\\DecoderResult' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/DecoderResult.php',
        'Zxing\\Common\\DefaultGridSampler' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/DefaultGridSampler.php',
        'Zxing\\Common\\DetectorResult' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/DetectorResult.php',
        'Zxing\\Common\\Detector\\MathUtils' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/detector/MathUtils.php',
        'Zxing\\Common\\Detector\\MonochromeRectangleDetector' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/detector/MonochromeRectangleDetector.php',
        'Zxing\\Common\\GlobalHistogramBinarizer' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/GlobalHistogramBinarizer.php',
        'Zxing\\Common\\GridSampler' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/GridSampler.php',
        'Zxing\\Common\\HybridBinarizer' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/HybridBinarizer.php',
        'Zxing\\Common\\PerspectiveTransform' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/PerspectiveTransform.php',
        'Zxing\\Common\\Reedsolomon\\GenericGF' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/reedsolomon/GenericGF.php',
        'Zxing\\Common\\Reedsolomon\\GenericGFPoly' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/reedsolomon/GenericGFPoly.php',
        'Zxing\\Common\\Reedsolomon\\ReedSolomonDecoder' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/reedsolomon/ReedSolomonDecoder.php',
        'Zxing\\Common\\Reedsolomon\\ReedSolomonException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/common/reedsolomon/ReedSolomonException.php',
        'Zxing\\FormatException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/FormatException.php',
        'Zxing\\GDLuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/GDLuminanceSource.php',
        'Zxing\\IMagickLuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/IMagickLuminanceSource.php',
        'Zxing\\LuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/LuminanceSource.php',
        'Zxing\\NotFoundException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/NotFoundException.php',
        'Zxing\\PlanarYUVLuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/PlanarYUVLuminanceSource.php',
        'Zxing\\Qrcode\\Decoder\\BitMatrixParser' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/BitMatrixParser.php',
        'Zxing\\Qrcode\\Decoder\\DataBlock' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataBlock.php',
        'Zxing\\Qrcode\\Decoder\\DataMask' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask000' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask001' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask010' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask011' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask100' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask101' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask110' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DataMask111' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DataMask.php',
        'Zxing\\Qrcode\\Decoder\\DecodedBitStreamParser' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/DecodedBitStreamParser.php',
        'Zxing\\Qrcode\\Decoder\\Decoder' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/Decoder.php',
        'Zxing\\Qrcode\\Decoder\\ECB' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/Version.php',
        'Zxing\\Qrcode\\Decoder\\ECBlocks' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/Version.php',
        'Zxing\\Qrcode\\Decoder\\ErrorCorrectionLevel' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/ErrorCorrectionLevel.php',
        'Zxing\\Qrcode\\Decoder\\FormatInformation' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/FormatInformation.php',
        'Zxing\\Qrcode\\Decoder\\Mode' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/Mode.php',
        'Zxing\\Qrcode\\Decoder\\Version' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/decoder/Version.php',
        'Zxing\\Qrcode\\Detector\\AlignmentPattern' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/detector/AlignmentPattern.php',
        'Zxing\\Qrcode\\Detector\\AlignmentPatternFinder' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/detector/AlignmentPatternFinder.php',
        'Zxing\\Qrcode\\Detector\\Detector' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/detector/Detector.php',
        'Zxing\\Qrcode\\Detector\\FinderPattern' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/detector/FinderPattern.php',
        'Zxing\\Qrcode\\Detector\\FinderPatternFinder' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/detector/FinderPatternFinder.php',
        'Zxing\\Qrcode\\Detector\\FinderPatternInfo' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/detector/FinderPatternInfo.php',
        'Zxing\\Qrcode\\QRCodeReader' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/qrcode/QRCodeReader.php',
        'Zxing\\RGBLuminanceSource' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/RGBLuminanceSource.php',
        'Zxing\\Reader' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Reader.php',
        'Zxing\\ReaderException' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/ReaderException.php',
        'Zxing\\Result' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/Result.php',
        'Zxing\\ResultPoint' => __DIR__ . '/..' . '/khanamiryan/qrcode-detector-decoder/lib/ResultPoint.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit337f7348d42fca9e8c3ea45ab501ca0e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit337f7348d42fca9e8c3ea45ab501ca0e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit337f7348d42fca9e8c3ea45ab501ca0e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit337f7348d42fca9e8c3ea45ab501ca0e::$classMap;

        }, null, ClassLoader::class);
    }
}
