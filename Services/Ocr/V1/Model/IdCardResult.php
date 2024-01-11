<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdCardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdCardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  姓名。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * number  身份证号。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。 仅return_text_location设置为true时才返回。
    * portraitLocation  身份证头像位置信息的结果。 仅在输入参数return_portrait_location为true时，返回该字段，当输入身份证背面时返回为空列表。
    * detectReproduceResult  身份证图像是否翻拍告警结果。 - true：表示身份证图片经过翻拍。 - false：表示身份证图片未经过翻拍。 仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  身份证图像是否黑白复印件告警结果。 - true：表示身份证图片是复印件。 - false”表示身份证图片是原件。 仅在输入参数detect_copy为true时，返回该字段。
    * detectTamperingResult  身份证图片是否PS告警结果。 - true：表示身份证经过PS。 - false：表示未经过PS。 仅在传入参数detect_tampering为true时，返回该字段。
    * detectBorderIntegrityResult  身份证图片边框完整性告警结果。 - true：表示边框不完整 - false：表示边框完整。 仅在输入参数detect_border_integrity为true时，返回该字段。
    * detectBlockingWithinBorderResult  身份证图像框内是否存在遮挡的告警结果。 - true：表示边框内部存在遮挡。 - false：表示边框内部不存在遮挡。 仅在输入参数detect_blocking_within_border为true时，返回该字段。
    * detectBlurResult  身份证模糊告警结果。 - true：表示身份证图片较模糊。 - false：表示身份证清晰。 仅在输入参数detect_blur为true时，返回该字段。
    * detectInterimResult  临时身份证告警结果。 - true：表示是临时身份证。 - false：表示非临时身份证。 仅在输入参数detect_interim为true时，返回该字段。
    * detectGlareResult  身份证反光告警结果。 - true：表示身份证图片存在反光。 - false：表示是身份证不存在反光。 仅在输入参数detect_glare为true时，返回该字段。
    * scoreInfo  scoreInfo
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'sex' => 'string',
            'birth' => 'string',
            'ethnicity' => 'string',
            'address' => 'string',
            'number' => 'string',
            'issue' => 'string',
            'validFrom' => 'string',
            'validTo' => 'string',
            'verificationResult' => '\HuaweiCloud\SDK\Ocr\V1\Model\IdcardVerificationResult',
            'textLocation' => 'object',
            'portraitLocation' => 'int[][]',
            'detectReproduceResult' => 'bool',
            'detectCopyResult' => 'bool',
            'detectTamperingResult' => 'bool',
            'detectBorderIntegrityResult' => 'bool',
            'detectBlockingWithinBorderResult' => 'bool',
            'detectBlurResult' => 'bool',
            'detectInterimResult' => 'bool',
            'detectGlareResult' => 'bool',
            'scoreInfo' => '\HuaweiCloud\SDK\Ocr\V1\Model\IdcardScoreInfoResult',
            'front' => '\HuaweiCloud\SDK\Ocr\V1\Model\IdcardFrontResult',
            'back' => '\HuaweiCloud\SDK\Ocr\V1\Model\IdcardBackResult'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  姓名。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * number  身份证号。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。 仅return_text_location设置为true时才返回。
    * portraitLocation  身份证头像位置信息的结果。 仅在输入参数return_portrait_location为true时，返回该字段，当输入身份证背面时返回为空列表。
    * detectReproduceResult  身份证图像是否翻拍告警结果。 - true：表示身份证图片经过翻拍。 - false：表示身份证图片未经过翻拍。 仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  身份证图像是否黑白复印件告警结果。 - true：表示身份证图片是复印件。 - false”表示身份证图片是原件。 仅在输入参数detect_copy为true时，返回该字段。
    * detectTamperingResult  身份证图片是否PS告警结果。 - true：表示身份证经过PS。 - false：表示未经过PS。 仅在传入参数detect_tampering为true时，返回该字段。
    * detectBorderIntegrityResult  身份证图片边框完整性告警结果。 - true：表示边框不完整 - false：表示边框完整。 仅在输入参数detect_border_integrity为true时，返回该字段。
    * detectBlockingWithinBorderResult  身份证图像框内是否存在遮挡的告警结果。 - true：表示边框内部存在遮挡。 - false：表示边框内部不存在遮挡。 仅在输入参数detect_blocking_within_border为true时，返回该字段。
    * detectBlurResult  身份证模糊告警结果。 - true：表示身份证图片较模糊。 - false：表示身份证清晰。 仅在输入参数detect_blur为true时，返回该字段。
    * detectInterimResult  临时身份证告警结果。 - true：表示是临时身份证。 - false：表示非临时身份证。 仅在输入参数detect_interim为true时，返回该字段。
    * detectGlareResult  身份证反光告警结果。 - true：表示身份证图片存在反光。 - false：表示是身份证不存在反光。 仅在输入参数detect_glare为true时，返回该字段。
    * scoreInfo  scoreInfo
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'sex' => null,
        'birth' => null,
        'ethnicity' => null,
        'address' => null,
        'number' => null,
        'issue' => null,
        'validFrom' => null,
        'validTo' => null,
        'verificationResult' => null,
        'textLocation' => null,
        'portraitLocation' => 'int32',
        'detectReproduceResult' => null,
        'detectCopyResult' => null,
        'detectTamperingResult' => null,
        'detectBorderIntegrityResult' => null,
        'detectBlockingWithinBorderResult' => null,
        'detectBlurResult' => null,
        'detectInterimResult' => null,
        'detectGlareResult' => null,
        'scoreInfo' => null,
        'front' => null,
        'back' => null
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
    * name  姓名。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * number  身份证号。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。 仅return_text_location设置为true时才返回。
    * portraitLocation  身份证头像位置信息的结果。 仅在输入参数return_portrait_location为true时，返回该字段，当输入身份证背面时返回为空列表。
    * detectReproduceResult  身份证图像是否翻拍告警结果。 - true：表示身份证图片经过翻拍。 - false：表示身份证图片未经过翻拍。 仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  身份证图像是否黑白复印件告警结果。 - true：表示身份证图片是复印件。 - false”表示身份证图片是原件。 仅在输入参数detect_copy为true时，返回该字段。
    * detectTamperingResult  身份证图片是否PS告警结果。 - true：表示身份证经过PS。 - false：表示未经过PS。 仅在传入参数detect_tampering为true时，返回该字段。
    * detectBorderIntegrityResult  身份证图片边框完整性告警结果。 - true：表示边框不完整 - false：表示边框完整。 仅在输入参数detect_border_integrity为true时，返回该字段。
    * detectBlockingWithinBorderResult  身份证图像框内是否存在遮挡的告警结果。 - true：表示边框内部存在遮挡。 - false：表示边框内部不存在遮挡。 仅在输入参数detect_blocking_within_border为true时，返回该字段。
    * detectBlurResult  身份证模糊告警结果。 - true：表示身份证图片较模糊。 - false：表示身份证清晰。 仅在输入参数detect_blur为true时，返回该字段。
    * detectInterimResult  临时身份证告警结果。 - true：表示是临时身份证。 - false：表示非临时身份证。 仅在输入参数detect_interim为true时，返回该字段。
    * detectGlareResult  身份证反光告警结果。 - true：表示身份证图片存在反光。 - false：表示是身份证不存在反光。 仅在输入参数detect_glare为true时，返回该字段。
    * scoreInfo  scoreInfo
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'sex' => 'sex',
            'birth' => 'birth',
            'ethnicity' => 'ethnicity',
            'address' => 'address',
            'number' => 'number',
            'issue' => 'issue',
            'validFrom' => 'valid_from',
            'validTo' => 'valid_to',
            'verificationResult' => 'verification_result',
            'textLocation' => 'text_location',
            'portraitLocation' => 'portrait_location',
            'detectReproduceResult' => 'detect_reproduce_result',
            'detectCopyResult' => 'detect_copy_result',
            'detectTamperingResult' => 'detect_tampering_result',
            'detectBorderIntegrityResult' => 'detect_border_integrity_result',
            'detectBlockingWithinBorderResult' => 'detect_blocking_within_border_result',
            'detectBlurResult' => 'detect_blur_result',
            'detectInterimResult' => 'detect_interim_result',
            'detectGlareResult' => 'detect_glare_result',
            'scoreInfo' => 'score_info',
            'front' => 'front',
            'back' => 'back'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  姓名。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * number  身份证号。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。 仅return_text_location设置为true时才返回。
    * portraitLocation  身份证头像位置信息的结果。 仅在输入参数return_portrait_location为true时，返回该字段，当输入身份证背面时返回为空列表。
    * detectReproduceResult  身份证图像是否翻拍告警结果。 - true：表示身份证图片经过翻拍。 - false：表示身份证图片未经过翻拍。 仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  身份证图像是否黑白复印件告警结果。 - true：表示身份证图片是复印件。 - false”表示身份证图片是原件。 仅在输入参数detect_copy为true时，返回该字段。
    * detectTamperingResult  身份证图片是否PS告警结果。 - true：表示身份证经过PS。 - false：表示未经过PS。 仅在传入参数detect_tampering为true时，返回该字段。
    * detectBorderIntegrityResult  身份证图片边框完整性告警结果。 - true：表示边框不完整 - false：表示边框完整。 仅在输入参数detect_border_integrity为true时，返回该字段。
    * detectBlockingWithinBorderResult  身份证图像框内是否存在遮挡的告警结果。 - true：表示边框内部存在遮挡。 - false：表示边框内部不存在遮挡。 仅在输入参数detect_blocking_within_border为true时，返回该字段。
    * detectBlurResult  身份证模糊告警结果。 - true：表示身份证图片较模糊。 - false：表示身份证清晰。 仅在输入参数detect_blur为true时，返回该字段。
    * detectInterimResult  临时身份证告警结果。 - true：表示是临时身份证。 - false：表示非临时身份证。 仅在输入参数detect_interim为true时，返回该字段。
    * detectGlareResult  身份证反光告警结果。 - true：表示身份证图片存在反光。 - false：表示是身份证不存在反光。 仅在输入参数detect_glare为true时，返回该字段。
    * scoreInfo  scoreInfo
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'sex' => 'setSex',
            'birth' => 'setBirth',
            'ethnicity' => 'setEthnicity',
            'address' => 'setAddress',
            'number' => 'setNumber',
            'issue' => 'setIssue',
            'validFrom' => 'setValidFrom',
            'validTo' => 'setValidTo',
            'verificationResult' => 'setVerificationResult',
            'textLocation' => 'setTextLocation',
            'portraitLocation' => 'setPortraitLocation',
            'detectReproduceResult' => 'setDetectReproduceResult',
            'detectCopyResult' => 'setDetectCopyResult',
            'detectTamperingResult' => 'setDetectTamperingResult',
            'detectBorderIntegrityResult' => 'setDetectBorderIntegrityResult',
            'detectBlockingWithinBorderResult' => 'setDetectBlockingWithinBorderResult',
            'detectBlurResult' => 'setDetectBlurResult',
            'detectInterimResult' => 'setDetectInterimResult',
            'detectGlareResult' => 'setDetectGlareResult',
            'scoreInfo' => 'setScoreInfo',
            'front' => 'setFront',
            'back' => 'setBack'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  姓名。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * number  身份证号。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。 仅return_text_location设置为true时才返回。
    * portraitLocation  身份证头像位置信息的结果。 仅在输入参数return_portrait_location为true时，返回该字段，当输入身份证背面时返回为空列表。
    * detectReproduceResult  身份证图像是否翻拍告警结果。 - true：表示身份证图片经过翻拍。 - false：表示身份证图片未经过翻拍。 仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  身份证图像是否黑白复印件告警结果。 - true：表示身份证图片是复印件。 - false”表示身份证图片是原件。 仅在输入参数detect_copy为true时，返回该字段。
    * detectTamperingResult  身份证图片是否PS告警结果。 - true：表示身份证经过PS。 - false：表示未经过PS。 仅在传入参数detect_tampering为true时，返回该字段。
    * detectBorderIntegrityResult  身份证图片边框完整性告警结果。 - true：表示边框不完整 - false：表示边框完整。 仅在输入参数detect_border_integrity为true时，返回该字段。
    * detectBlockingWithinBorderResult  身份证图像框内是否存在遮挡的告警结果。 - true：表示边框内部存在遮挡。 - false：表示边框内部不存在遮挡。 仅在输入参数detect_blocking_within_border为true时，返回该字段。
    * detectBlurResult  身份证模糊告警结果。 - true：表示身份证图片较模糊。 - false：表示身份证清晰。 仅在输入参数detect_blur为true时，返回该字段。
    * detectInterimResult  临时身份证告警结果。 - true：表示是临时身份证。 - false：表示非临时身份证。 仅在输入参数detect_interim为true时，返回该字段。
    * detectGlareResult  身份证反光告警结果。 - true：表示身份证图片存在反光。 - false：表示是身份证不存在反光。 仅在输入参数detect_glare为true时，返回该字段。
    * scoreInfo  scoreInfo
    * front  front
    * back  back
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'sex' => 'getSex',
            'birth' => 'getBirth',
            'ethnicity' => 'getEthnicity',
            'address' => 'getAddress',
            'number' => 'getNumber',
            'issue' => 'getIssue',
            'validFrom' => 'getValidFrom',
            'validTo' => 'getValidTo',
            'verificationResult' => 'getVerificationResult',
            'textLocation' => 'getTextLocation',
            'portraitLocation' => 'getPortraitLocation',
            'detectReproduceResult' => 'getDetectReproduceResult',
            'detectCopyResult' => 'getDetectCopyResult',
            'detectTamperingResult' => 'getDetectTamperingResult',
            'detectBorderIntegrityResult' => 'getDetectBorderIntegrityResult',
            'detectBlockingWithinBorderResult' => 'getDetectBlockingWithinBorderResult',
            'detectBlurResult' => 'getDetectBlurResult',
            'detectInterimResult' => 'getDetectInterimResult',
            'detectGlareResult' => 'getDetectGlareResult',
            'scoreInfo' => 'getScoreInfo',
            'front' => 'getFront',
            'back' => 'getBack'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['birth'] = isset($data['birth']) ? $data['birth'] : null;
        $this->container['ethnicity'] = isset($data['ethnicity']) ? $data['ethnicity'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['issue'] = isset($data['issue']) ? $data['issue'] : null;
        $this->container['validFrom'] = isset($data['validFrom']) ? $data['validFrom'] : null;
        $this->container['validTo'] = isset($data['validTo']) ? $data['validTo'] : null;
        $this->container['verificationResult'] = isset($data['verificationResult']) ? $data['verificationResult'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
        $this->container['portraitLocation'] = isset($data['portraitLocation']) ? $data['portraitLocation'] : null;
        $this->container['detectReproduceResult'] = isset($data['detectReproduceResult']) ? $data['detectReproduceResult'] : null;
        $this->container['detectCopyResult'] = isset($data['detectCopyResult']) ? $data['detectCopyResult'] : null;
        $this->container['detectTamperingResult'] = isset($data['detectTamperingResult']) ? $data['detectTamperingResult'] : null;
        $this->container['detectBorderIntegrityResult'] = isset($data['detectBorderIntegrityResult']) ? $data['detectBorderIntegrityResult'] : null;
        $this->container['detectBlockingWithinBorderResult'] = isset($data['detectBlockingWithinBorderResult']) ? $data['detectBlockingWithinBorderResult'] : null;
        $this->container['detectBlurResult'] = isset($data['detectBlurResult']) ? $data['detectBlurResult'] : null;
        $this->container['detectInterimResult'] = isset($data['detectInterimResult']) ? $data['detectInterimResult'] : null;
        $this->container['detectGlareResult'] = isset($data['detectGlareResult']) ? $data['detectGlareResult'] : null;
        $this->container['scoreInfo'] = isset($data['scoreInfo']) ? $data['scoreInfo'] : null;
        $this->container['front'] = isset($data['front']) ? $data['front'] : null;
        $this->container['back'] = isset($data['back']) ? $data['back'] : null;
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
    * Gets name
    *  姓名。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 姓名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sex
    *  性别。
    *
    * @return string|null
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param string|null $sex 性别。
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets birth
    *  出生日期。
    *
    * @return string|null
    */
    public function getBirth()
    {
        return $this->container['birth'];
    }

    /**
    * Sets birth
    *
    * @param string|null $birth 出生日期。
    *
    * @return $this
    */
    public function setBirth($birth)
    {
        $this->container['birth'] = $birth;
        return $this;
    }

    /**
    * Gets ethnicity
    *  民族。
    *
    * @return string|null
    */
    public function getEthnicity()
    {
        return $this->container['ethnicity'];
    }

    /**
    * Sets ethnicity
    *
    * @param string|null $ethnicity 民族。
    *
    * @return $this
    */
    public function setEthnicity($ethnicity)
    {
        $this->container['ethnicity'] = $ethnicity;
        return $this;
    }

    /**
    * Gets address
    *  地址。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets number
    *  身份证号。
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 身份证号。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
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
    *  有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
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
    * @param string|null $validTo 有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
    *
    * @return $this
    */
    public function setValidTo($validTo)
    {
        $this->container['validTo'] = $validTo;
        return $this;
    }

    /**
    * Gets verificationResult
    *  verificationResult
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\IdcardVerificationResult|null
    */
    public function getVerificationResult()
    {
        return $this->container['verificationResult'];
    }

    /**
    * Sets verificationResult
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\IdcardVerificationResult|null $verificationResult verificationResult
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
    * Gets portraitLocation
    *  身份证头像位置信息的结果。 仅在输入参数return_portrait_location为true时，返回该字段，当输入身份证背面时返回为空列表。
    *
    * @return int[][]|null
    */
    public function getPortraitLocation()
    {
        return $this->container['portraitLocation'];
    }

    /**
    * Sets portraitLocation
    *
    * @param int[][]|null $portraitLocation 身份证头像位置信息的结果。 仅在输入参数return_portrait_location为true时，返回该字段，当输入身份证背面时返回为空列表。
    *
    * @return $this
    */
    public function setPortraitLocation($portraitLocation)
    {
        $this->container['portraitLocation'] = $portraitLocation;
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
    * Gets front
    *  front
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\IdcardFrontResult|null
    */
    public function getFront()
    {
        return $this->container['front'];
    }

    /**
    * Sets front
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\IdcardFrontResult|null $front front
    *
    * @return $this
    */
    public function setFront($front)
    {
        $this->container['front'] = $front;
        return $this;
    }

    /**
    * Gets back
    *  back
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\IdcardBackResult|null
    */
    public function getBack()
    {
        return $this->container['back'];
    }

    /**
    * Sets back
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\IdcardBackResult|null $back back
    *
    * @return $this
    */
    public function setBack($back)
    {
        $this->container['back'] = $back;
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

