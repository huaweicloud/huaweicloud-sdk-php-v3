<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdcardBackResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdcardBackResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    * adjustedImage  身份证卡面图片信息的base64码结果。  > 说明： - 仅在输入参数return_adjusted_image为true时，返回该字段。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。 仅return_text_location设置为true时才返回。
    * detectReproduceResult  身份证图像是否翻拍告警结果。 - true：表示身份证图片经过翻拍。 - false：表示身份证图片未经过翻拍。 仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  身份证图像是否黑白复印件告警结果。 - true：表示身份证图片是复印件。 - false”表示身份证图片是原件。 仅在输入参数detect_copy为true时，返回该字段。
    * detectTamperingResult  身份证图片是否PS告警结果。 - true：表示身份证经过PS。 - false：表示未经过PS。 仅在传入参数detect_tampering为true时，返回该字段。
    * detectBorderIntegrityResult  身份证图片边框完整性告警结果。 - true：表示边框不完整 - false：表示边框完整。 仅在输入参数detect_border_integrity为true时，返回该字段。
    * detectBlockingWithinBorderResult  身份证图像框内是否存在遮挡的告警结果。 - true：表示边框内部存在遮挡。 - false：表示边框内部不存在遮挡。 仅在输入参数detect_blocking_within_border为true时，返回该字段。
    * detectBlurResult  身份证模糊告警结果。 - true：表示身份证图片较模糊。 - false：表示身份证清晰。 仅在输入参数detect_blur为true时，返回该字段。
    * detectInterimResult  临时身份证告警结果。 - true：表示是临时身份证。 - false：表示非临时身份证。 仅在输入参数detect_interim为true时，返回该字段。
    * detectGlareResult  身份证反光告警结果。 - true：表示身份证图片存在反光。 - false：表示是身份证不存在反光。 仅在输入参数detect_glare为true时，返回该字段。
    * scoreInfo  scoreInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'issue' => 'string',
            'validFrom' => 'string',
            'validTo' => 'string',
            'adjustedImage' => 'string',
            'verificationResult' => '\HuaweiCloud\SDK\Ocr\V1\Model\IdcardBackVerificationResult',
            'textLocation' => 'object',
            'detectReproduceResult' => 'bool',
            'detectCopyResult' => 'bool',
            'detectTamperingResult' => 'bool',
            'detectBorderIntegrityResult' => 'bool',
            'detectBlockingWithinBorderResult' => 'bool',
            'detectBlurResult' => 'bool',
            'detectInterimResult' => 'bool',
            'detectGlareResult' => 'bool',
            'scoreInfo' => '\HuaweiCloud\SDK\Ocr\V1\Model\IdcardScoreInfoResult'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    * adjustedImage  身份证卡面图片信息的base64码结果。  > 说明： - 仅在输入参数return_adjusted_image为true时，返回该字段。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。 仅return_text_location设置为true时才返回。
    * detectReproduceResult  身份证图像是否翻拍告警结果。 - true：表示身份证图片经过翻拍。 - false：表示身份证图片未经过翻拍。 仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  身份证图像是否黑白复印件告警结果。 - true：表示身份证图片是复印件。 - false”表示身份证图片是原件。 仅在输入参数detect_copy为true时，返回该字段。
    * detectTamperingResult  身份证图片是否PS告警结果。 - true：表示身份证经过PS。 - false：表示未经过PS。 仅在传入参数detect_tampering为true时，返回该字段。
    * detectBorderIntegrityResult  身份证图片边框完整性告警结果。 - true：表示边框不完整 - false：表示边框完整。 仅在输入参数detect_border_integrity为true时，返回该字段。
    * detectBlockingWithinBorderResult  身份证图像框内是否存在遮挡的告警结果。 - true：表示边框内部存在遮挡。 - false：表示边框内部不存在遮挡。 仅在输入参数detect_blocking_within_border为true时，返回该字段。
    * detectBlurResult  身份证模糊告警结果。 - true：表示身份证图片较模糊。 - false：表示身份证清晰。 仅在输入参数detect_blur为true时，返回该字段。
    * detectInterimResult  临时身份证告警结果。 - true：表示是临时身份证。 - false：表示非临时身份证。 仅在输入参数detect_interim为true时，返回该字段。
    * detectGlareResult  身份证反光告警结果。 - true：表示身份证图片存在反光。 - false：表示是身份证不存在反光。 仅在输入参数detect_glare为true时，返回该字段。
    * scoreInfo  scoreInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'issue' => null,
        'validFrom' => null,
        'validTo' => null,
        'adjustedImage' => null,
        'verificationResult' => null,
        'textLocation' => null,
        'detectReproduceResult' => null,
        'detectCopyResult' => null,
        'detectTamperingResult' => null,
        'detectBorderIntegrityResult' => null,
        'detectBlockingWithinBorderResult' => null,
        'detectBlurResult' => null,
        'detectInterimResult' => null,
        'detectGlareResult' => null,
        'scoreInfo' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    * adjustedImage  身份证卡面图片信息的base64码结果。  > 说明： - 仅在输入参数return_adjusted_image为true时，返回该字段。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。 仅return_text_location设置为true时才返回。
    * detectReproduceResult  身份证图像是否翻拍告警结果。 - true：表示身份证图片经过翻拍。 - false：表示身份证图片未经过翻拍。 仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  身份证图像是否黑白复印件告警结果。 - true：表示身份证图片是复印件。 - false”表示身份证图片是原件。 仅在输入参数detect_copy为true时，返回该字段。
    * detectTamperingResult  身份证图片是否PS告警结果。 - true：表示身份证经过PS。 - false：表示未经过PS。 仅在传入参数detect_tampering为true时，返回该字段。
    * detectBorderIntegrityResult  身份证图片边框完整性告警结果。 - true：表示边框不完整 - false：表示边框完整。 仅在输入参数detect_border_integrity为true时，返回该字段。
    * detectBlockingWithinBorderResult  身份证图像框内是否存在遮挡的告警结果。 - true：表示边框内部存在遮挡。 - false：表示边框内部不存在遮挡。 仅在输入参数detect_blocking_within_border为true时，返回该字段。
    * detectBlurResult  身份证模糊告警结果。 - true：表示身份证图片较模糊。 - false：表示身份证清晰。 仅在输入参数detect_blur为true时，返回该字段。
    * detectInterimResult  临时身份证告警结果。 - true：表示是临时身份证。 - false：表示非临时身份证。 仅在输入参数detect_interim为true时，返回该字段。
    * detectGlareResult  身份证反光告警结果。 - true：表示身份证图片存在反光。 - false：表示是身份证不存在反光。 仅在输入参数detect_glare为true时，返回该字段。
    * scoreInfo  scoreInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'issue' => 'issue',
            'validFrom' => 'valid_from',
            'validTo' => 'valid_to',
            'adjustedImage' => 'adjusted_image',
            'verificationResult' => 'verification_result',
            'textLocation' => 'text_location',
            'detectReproduceResult' => 'detect_reproduce_result',
            'detectCopyResult' => 'detect_copy_result',
            'detectTamperingResult' => 'detect_tampering_result',
            'detectBorderIntegrityResult' => 'detect_border_integrity_result',
            'detectBlockingWithinBorderResult' => 'detect_blocking_within_border_result',
            'detectBlurResult' => 'detect_blur_result',
            'detectInterimResult' => 'detect_interim_result',
            'detectGlareResult' => 'detect_glare_result',
            'scoreInfo' => 'score_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    * adjustedImage  身份证卡面图片信息的base64码结果。  > 说明： - 仅在输入参数return_adjusted_image为true时，返回该字段。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。 仅return_text_location设置为true时才返回。
    * detectReproduceResult  身份证图像是否翻拍告警结果。 - true：表示身份证图片经过翻拍。 - false：表示身份证图片未经过翻拍。 仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  身份证图像是否黑白复印件告警结果。 - true：表示身份证图片是复印件。 - false”表示身份证图片是原件。 仅在输入参数detect_copy为true时，返回该字段。
    * detectTamperingResult  身份证图片是否PS告警结果。 - true：表示身份证经过PS。 - false：表示未经过PS。 仅在传入参数detect_tampering为true时，返回该字段。
    * detectBorderIntegrityResult  身份证图片边框完整性告警结果。 - true：表示边框不完整 - false：表示边框完整。 仅在输入参数detect_border_integrity为true时，返回该字段。
    * detectBlockingWithinBorderResult  身份证图像框内是否存在遮挡的告警结果。 - true：表示边框内部存在遮挡。 - false：表示边框内部不存在遮挡。 仅在输入参数detect_blocking_within_border为true时，返回该字段。
    * detectBlurResult  身份证模糊告警结果。 - true：表示身份证图片较模糊。 - false：表示身份证清晰。 仅在输入参数detect_blur为true时，返回该字段。
    * detectInterimResult  临时身份证告警结果。 - true：表示是临时身份证。 - false：表示非临时身份证。 仅在输入参数detect_interim为true时，返回该字段。
    * detectGlareResult  身份证反光告警结果。 - true：表示身份证图片存在反光。 - false：表示是身份证不存在反光。 仅在输入参数detect_glare为true时，返回该字段。
    * scoreInfo  scoreInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'issue' => 'setIssue',
            'validFrom' => 'setValidFrom',
            'validTo' => 'setValidTo',
            'adjustedImage' => 'setAdjustedImage',
            'verificationResult' => 'setVerificationResult',
            'textLocation' => 'setTextLocation',
            'detectReproduceResult' => 'setDetectReproduceResult',
            'detectCopyResult' => 'setDetectCopyResult',
            'detectTamperingResult' => 'setDetectTamperingResult',
            'detectBorderIntegrityResult' => 'setDetectBorderIntegrityResult',
            'detectBlockingWithinBorderResult' => 'setDetectBlockingWithinBorderResult',
            'detectBlurResult' => 'setDetectBlurResult',
            'detectInterimResult' => 'setDetectInterimResult',
            'detectGlareResult' => 'setDetectGlareResult',
            'scoreInfo' => 'setScoreInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。
    * adjustedImage  身份证卡面图片信息的base64码结果。  > 说明： - 仅在输入参数return_adjusted_image为true时，返回该字段。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。 仅return_text_location设置为true时才返回。
    * detectReproduceResult  身份证图像是否翻拍告警结果。 - true：表示身份证图片经过翻拍。 - false：表示身份证图片未经过翻拍。 仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  身份证图像是否黑白复印件告警结果。 - true：表示身份证图片是复印件。 - false”表示身份证图片是原件。 仅在输入参数detect_copy为true时，返回该字段。
    * detectTamperingResult  身份证图片是否PS告警结果。 - true：表示身份证经过PS。 - false：表示未经过PS。 仅在传入参数detect_tampering为true时，返回该字段。
    * detectBorderIntegrityResult  身份证图片边框完整性告警结果。 - true：表示边框不完整 - false：表示边框完整。 仅在输入参数detect_border_integrity为true时，返回该字段。
    * detectBlockingWithinBorderResult  身份证图像框内是否存在遮挡的告警结果。 - true：表示边框内部存在遮挡。 - false：表示边框内部不存在遮挡。 仅在输入参数detect_blocking_within_border为true时，返回该字段。
    * detectBlurResult  身份证模糊告警结果。 - true：表示身份证图片较模糊。 - false：表示身份证清晰。 仅在输入参数detect_blur为true时，返回该字段。
    * detectInterimResult  临时身份证告警结果。 - true：表示是临时身份证。 - false：表示非临时身份证。 仅在输入参数detect_interim为true时，返回该字段。
    * detectGlareResult  身份证反光告警结果。 - true：表示身份证图片存在反光。 - false：表示是身份证不存在反光。 仅在输入参数detect_glare为true时，返回该字段。
    * scoreInfo  scoreInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'issue' => 'getIssue',
            'validFrom' => 'getValidFrom',
            'validTo' => 'getValidTo',
            'adjustedImage' => 'getAdjustedImage',
            'verificationResult' => 'getVerificationResult',
            'textLocation' => 'getTextLocation',
            'detectReproduceResult' => 'getDetectReproduceResult',
            'detectCopyResult' => 'getDetectCopyResult',
            'detectTamperingResult' => 'getDetectTamperingResult',
            'detectBorderIntegrityResult' => 'getDetectBorderIntegrityResult',
            'detectBlockingWithinBorderResult' => 'getDetectBlockingWithinBorderResult',
            'detectBlurResult' => 'getDetectBlurResult',
            'detectInterimResult' => 'getDetectInterimResult',
            'detectGlareResult' => 'getDetectGlareResult',
            'scoreInfo' => 'getScoreInfo'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['issue'] = isset($data['issue']) ? $data['issue'] : null;
        $this->container['validFrom'] = isset($data['validFrom']) ? $data['validFrom'] : null;
        $this->container['validTo'] = isset($data['validTo']) ? $data['validTo'] : null;
        $this->container['adjustedImage'] = isset($data['adjustedImage']) ? $data['adjustedImage'] : null;
        $this->container['verificationResult'] = isset($data['verificationResult']) ? $data['verificationResult'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
        $this->container['detectReproduceResult'] = isset($data['detectReproduceResult']) ? $data['detectReproduceResult'] : null;
        $this->container['detectCopyResult'] = isset($data['detectCopyResult']) ? $data['detectCopyResult'] : null;
        $this->container['detectTamperingResult'] = isset($data['detectTamperingResult']) ? $data['detectTamperingResult'] : null;
        $this->container['detectBorderIntegrityResult'] = isset($data['detectBorderIntegrityResult']) ? $data['detectBorderIntegrityResult'] : null;
        $this->container['detectBlockingWithinBorderResult'] = isset($data['detectBlockingWithinBorderResult']) ? $data['detectBlockingWithinBorderResult'] : null;
        $this->container['detectBlurResult'] = isset($data['detectBlurResult']) ? $data['detectBlurResult'] : null;
        $this->container['detectInterimResult'] = isset($data['detectInterimResult']) ? $data['detectInterimResult'] : null;
        $this->container['detectGlareResult'] = isset($data['detectGlareResult']) ? $data['detectGlareResult'] : null;
        $this->container['scoreInfo'] = isset($data['scoreInfo']) ? $data['scoreInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets issue
    *  发证机关。
    *
    * @return string|null
    */
    public function getIssue()
    {
        return $this->container['issue'];
    }

    /**
    * Sets issue
    *
    * @param string|null $issue 发证机关。
    *
    * @return $this
    */
    public function setIssue($issue)
    {
        $this->container['issue'] = $issue;
        return $this;
    }

    /**
    * Gets validFrom
    *  有效起始日期。
    *
    * @return string|null
    */
    public function getValidFrom()
    {
        return $this->container['validFrom'];
    }

    /**
    * Sets validFrom
    *
    * @param string|null $validFrom 有效起始日期。
    *
    * @return $this
    */
    public function setValidFrom($validFrom)
    {
        $this->container['validFrom'] = $validFrom;
        return $this;
    }

    /**
    * Gets validTo
    *  有效结束日期。
    *
    * @return string|null
    */
    public function getValidTo()
    {
        return $this->container['validTo'];
    }

    /**
    * Sets validTo
    *
    * @param string|null $validTo 有效结束日期。
    *
    * @return $this
    */
    public function setValidTo($validTo)
    {
        $this->container['validTo'] = $validTo;
        return $this;
    }

    /**
    * Gets adjustedImage
    *  身份证卡面图片信息的base64码结果。  > 说明： - 仅在输入参数return_adjusted_image为true时，返回该字段。
    *
    * @return string|null
    */
    public function getAdjustedImage()
    {
        return $this->container['adjustedImage'];
    }

    /**
    * Sets adjustedImage
    *
    * @param string|null $adjustedImage 身份证卡面图片信息的base64码结果。  > 说明： - 仅在输入参数return_adjusted_image为true时，返回该字段。
    *
    * @return $this
    */
    public function setAdjustedImage($adjustedImage)
    {
        $this->container['adjustedImage'] = $adjustedImage;
        return $this;
    }

    /**
    * Gets verificationResult
    *  verificationResult
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\IdcardBackVerificationResult|null
    */
    public function getVerificationResult()
    {
        return $this->container['verificationResult'];
    }

    /**
    * Sets verificationResult
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\IdcardBackVerificationResult|null $verificationResult verificationResult
    *
    * @return $this
    */
    public function setVerificationResult($verificationResult)
    {
        $this->container['verificationResult'] = $verificationResult;
        return $this;
    }

    /**
    * Gets textLocation
    *  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。 仅return_text_location设置为true时才返回。
    *
    * @return object|null
    */
    public function getTextLocation()
    {
        return $this->container['textLocation'];
    }

    /**
    * Sets textLocation
    *
    * @param object|null $textLocation 文本框在原图位置。输出左上、右上、右下、左下四个点坐标。 仅return_text_location设置为true时才返回。
    *
    * @return $this
    */
    public function setTextLocation($textLocation)
    {
        $this->container['textLocation'] = $textLocation;
        return $this;
    }

    /**
    * Gets detectReproduceResult
    *  身份证图像是否翻拍告警结果。 - true：表示身份证图片经过翻拍。 - false：表示身份证图片未经过翻拍。 仅在输入参数detect_reproduce为true时，返回该字段。
    *
    * @return bool|null
    */
    public function getDetectReproduceResult()
    {
        return $this->container['detectReproduceResult'];
    }

    /**
    * Sets detectReproduceResult
    *
    * @param bool|null $detectReproduceResult 身份证图像是否翻拍告警结果。 - true：表示身份证图片经过翻拍。 - false：表示身份证图片未经过翻拍。 仅在输入参数detect_reproduce为true时，返回该字段。
    *
    * @return $this
    */
    public function setDetectReproduceResult($detectReproduceResult)
    {
        $this->container['detectReproduceResult'] = $detectReproduceResult;
        return $this;
    }

    /**
    * Gets detectCopyResult
    *  身份证图像是否黑白复印件告警结果。 - true：表示身份证图片是复印件。 - false”表示身份证图片是原件。 仅在输入参数detect_copy为true时，返回该字段。
    *
    * @return bool|null
    */
    public function getDetectCopyResult()
    {
        return $this->container['detectCopyResult'];
    }

    /**
    * Sets detectCopyResult
    *
    * @param bool|null $detectCopyResult 身份证图像是否黑白复印件告警结果。 - true：表示身份证图片是复印件。 - false”表示身份证图片是原件。 仅在输入参数detect_copy为true时，返回该字段。
    *
    * @return $this
    */
    public function setDetectCopyResult($detectCopyResult)
    {
        $this->container['detectCopyResult'] = $detectCopyResult;
        return $this;
    }

    /**
    * Gets detectTamperingResult
    *  身份证图片是否PS告警结果。 - true：表示身份证经过PS。 - false：表示未经过PS。 仅在传入参数detect_tampering为true时，返回该字段。
    *
    * @return bool|null
    */
    public function getDetectTamperingResult()
    {
        return $this->container['detectTamperingResult'];
    }

    /**
    * Sets detectTamperingResult
    *
    * @param bool|null $detectTamperingResult 身份证图片是否PS告警结果。 - true：表示身份证经过PS。 - false：表示未经过PS。 仅在传入参数detect_tampering为true时，返回该字段。
    *
    * @return $this
    */
    public function setDetectTamperingResult($detectTamperingResult)
    {
        $this->container['detectTamperingResult'] = $detectTamperingResult;
        return $this;
    }

    /**
    * Gets detectBorderIntegrityResult
    *  身份证图片边框完整性告警结果。 - true：表示边框不完整 - false：表示边框完整。 仅在输入参数detect_border_integrity为true时，返回该字段。
    *
    * @return bool|null
    */
    public function getDetectBorderIntegrityResult()
    {
        return $this->container['detectBorderIntegrityResult'];
    }

    /**
    * Sets detectBorderIntegrityResult
    *
    * @param bool|null $detectBorderIntegrityResult 身份证图片边框完整性告警结果。 - true：表示边框不完整 - false：表示边框完整。 仅在输入参数detect_border_integrity为true时，返回该字段。
    *
    * @return $this
    */
    public function setDetectBorderIntegrityResult($detectBorderIntegrityResult)
    {
        $this->container['detectBorderIntegrityResult'] = $detectBorderIntegrityResult;
        return $this;
    }

    /**
    * Gets detectBlockingWithinBorderResult
    *  身份证图像框内是否存在遮挡的告警结果。 - true：表示边框内部存在遮挡。 - false：表示边框内部不存在遮挡。 仅在输入参数detect_blocking_within_border为true时，返回该字段。
    *
    * @return bool|null
    */
    public function getDetectBlockingWithinBorderResult()
    {
        return $this->container['detectBlockingWithinBorderResult'];
    }

    /**
    * Sets detectBlockingWithinBorderResult
    *
    * @param bool|null $detectBlockingWithinBorderResult 身份证图像框内是否存在遮挡的告警结果。 - true：表示边框内部存在遮挡。 - false：表示边框内部不存在遮挡。 仅在输入参数detect_blocking_within_border为true时，返回该字段。
    *
    * @return $this
    */
    public function setDetectBlockingWithinBorderResult($detectBlockingWithinBorderResult)
    {
        $this->container['detectBlockingWithinBorderResult'] = $detectBlockingWithinBorderResult;
        return $this;
    }

    /**
    * Gets detectBlurResult
    *  身份证模糊告警结果。 - true：表示身份证图片较模糊。 - false：表示身份证清晰。 仅在输入参数detect_blur为true时，返回该字段。
    *
    * @return bool|null
    */
    public function getDetectBlurResult()
    {
        return $this->container['detectBlurResult'];
    }

    /**
    * Sets detectBlurResult
    *
    * @param bool|null $detectBlurResult 身份证模糊告警结果。 - true：表示身份证图片较模糊。 - false：表示身份证清晰。 仅在输入参数detect_blur为true时，返回该字段。
    *
    * @return $this
    */
    public function setDetectBlurResult($detectBlurResult)
    {
        $this->container['detectBlurResult'] = $detectBlurResult;
        return $this;
    }

    /**
    * Gets detectInterimResult
    *  临时身份证告警结果。 - true：表示是临时身份证。 - false：表示非临时身份证。 仅在输入参数detect_interim为true时，返回该字段。
    *
    * @return bool|null
    */
    public function getDetectInterimResult()
    {
        return $this->container['detectInterimResult'];
    }

    /**
    * Sets detectInterimResult
    *
    * @param bool|null $detectInterimResult 临时身份证告警结果。 - true：表示是临时身份证。 - false：表示非临时身份证。 仅在输入参数detect_interim为true时，返回该字段。
    *
    * @return $this
    */
    public function setDetectInterimResult($detectInterimResult)
    {
        $this->container['detectInterimResult'] = $detectInterimResult;
        return $this;
    }

    /**
    * Gets detectGlareResult
    *  身份证反光告警结果。 - true：表示身份证图片存在反光。 - false：表示是身份证不存在反光。 仅在输入参数detect_glare为true时，返回该字段。
    *
    * @return bool|null
    */
    public function getDetectGlareResult()
    {
        return $this->container['detectGlareResult'];
    }

    /**
    * Sets detectGlareResult
    *
    * @param bool|null $detectGlareResult 身份证反光告警结果。 - true：表示身份证图片存在反光。 - false：表示是身份证不存在反光。 仅在输入参数detect_glare为true时，返回该字段。
    *
    * @return $this
    */
    public function setDetectGlareResult($detectGlareResult)
    {
        $this->container['detectGlareResult'] = $detectGlareResult;
        return $this;
    }

    /**
    * Gets scoreInfo
    *  scoreInfo
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\IdcardScoreInfoResult|null
    */
    public function getScoreInfo()
    {
        return $this->container['scoreInfo'];
    }

    /**
    * Sets scoreInfo
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\IdcardScoreInfoResult|null $scoreInfo scoreInfo
    *
    * @return $this
    */
    public function setScoreInfo($scoreInfo)
    {
        $this->container['scoreInfo'] = $scoreInfo;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

