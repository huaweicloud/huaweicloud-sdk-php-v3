<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdcardScoreInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdcardScoreInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tamperingScore  身份证PS告警分数，分数越高，PS的可能性越高。 仅在传入参数detect_tampering为true时，返回该字段。
    * interimScore  临时身份证告警分数，分数越高，临时身份证的可能性越高。 仅在传入参数detect_interim为true时，返回该字段。
    * reproduceScore  身份证翻拍告警分数，分数越高，身份证图像经过翻拍的可能性越高。 仅在传入参数detect_reproduce为true时，返回该字段。
    * copyScore  身份证复印告警分数, 分数越高，身份证图像是复印件的可能性越高。 仅在传入参数detect_copy为true时，返回该字段。
    * borderIntegrityScore  身份证边缘完整性告警的分数，分数越高，身份证图像边缘不完整的可能性越高。 仅在传入参数detect_border_integrity为true时，返回该字段。
    * blurScore  身份证模糊告警分数，分数越高，身份证图像模糊的可能性越高。 仅在传入参数detect_blur为true时，返回该字段。
    * glareScore  身份证反光告警分数，分数越高，身份证图像存在反光的可能性越高。 仅在传入参数detect_glare为true时，返回该字段。
    * blockingWithinBorderScore  身份证图像框内是否有遮挡的告警分数，分数越高，身份证图像框内存在异物遮挡的可能性越高。 仅在传入参数detect_blocking_within_border为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tamperingScore' => 'int',
            'interimScore' => 'int',
            'reproduceScore' => 'int',
            'copyScore' => 'int',
            'borderIntegrityScore' => 'int',
            'blurScore' => 'int',
            'glareScore' => 'int',
            'blockingWithinBorderScore' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tamperingScore  身份证PS告警分数，分数越高，PS的可能性越高。 仅在传入参数detect_tampering为true时，返回该字段。
    * interimScore  临时身份证告警分数，分数越高，临时身份证的可能性越高。 仅在传入参数detect_interim为true时，返回该字段。
    * reproduceScore  身份证翻拍告警分数，分数越高，身份证图像经过翻拍的可能性越高。 仅在传入参数detect_reproduce为true时，返回该字段。
    * copyScore  身份证复印告警分数, 分数越高，身份证图像是复印件的可能性越高。 仅在传入参数detect_copy为true时，返回该字段。
    * borderIntegrityScore  身份证边缘完整性告警的分数，分数越高，身份证图像边缘不完整的可能性越高。 仅在传入参数detect_border_integrity为true时，返回该字段。
    * blurScore  身份证模糊告警分数，分数越高，身份证图像模糊的可能性越高。 仅在传入参数detect_blur为true时，返回该字段。
    * glareScore  身份证反光告警分数，分数越高，身份证图像存在反光的可能性越高。 仅在传入参数detect_glare为true时，返回该字段。
    * blockingWithinBorderScore  身份证图像框内是否有遮挡的告警分数，分数越高，身份证图像框内存在异物遮挡的可能性越高。 仅在传入参数detect_blocking_within_border为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tamperingScore' => 'int32',
        'interimScore' => 'int32',
        'reproduceScore' => 'int32',
        'copyScore' => 'int32',
        'borderIntegrityScore' => 'int32',
        'blurScore' => 'int32',
        'glareScore' => 'int32',
        'blockingWithinBorderScore' => 'int32'
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
    * tamperingScore  身份证PS告警分数，分数越高，PS的可能性越高。 仅在传入参数detect_tampering为true时，返回该字段。
    * interimScore  临时身份证告警分数，分数越高，临时身份证的可能性越高。 仅在传入参数detect_interim为true时，返回该字段。
    * reproduceScore  身份证翻拍告警分数，分数越高，身份证图像经过翻拍的可能性越高。 仅在传入参数detect_reproduce为true时，返回该字段。
    * copyScore  身份证复印告警分数, 分数越高，身份证图像是复印件的可能性越高。 仅在传入参数detect_copy为true时，返回该字段。
    * borderIntegrityScore  身份证边缘完整性告警的分数，分数越高，身份证图像边缘不完整的可能性越高。 仅在传入参数detect_border_integrity为true时，返回该字段。
    * blurScore  身份证模糊告警分数，分数越高，身份证图像模糊的可能性越高。 仅在传入参数detect_blur为true时，返回该字段。
    * glareScore  身份证反光告警分数，分数越高，身份证图像存在反光的可能性越高。 仅在传入参数detect_glare为true时，返回该字段。
    * blockingWithinBorderScore  身份证图像框内是否有遮挡的告警分数，分数越高，身份证图像框内存在异物遮挡的可能性越高。 仅在传入参数detect_blocking_within_border为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tamperingScore' => 'tampering_score',
            'interimScore' => 'interim_score',
            'reproduceScore' => 'reproduce_score',
            'copyScore' => 'copy_score',
            'borderIntegrityScore' => 'border_integrity_score',
            'blurScore' => 'blur_score',
            'glareScore' => 'glare_score',
            'blockingWithinBorderScore' => 'blocking_within_border_score'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tamperingScore  身份证PS告警分数，分数越高，PS的可能性越高。 仅在传入参数detect_tampering为true时，返回该字段。
    * interimScore  临时身份证告警分数，分数越高，临时身份证的可能性越高。 仅在传入参数detect_interim为true时，返回该字段。
    * reproduceScore  身份证翻拍告警分数，分数越高，身份证图像经过翻拍的可能性越高。 仅在传入参数detect_reproduce为true时，返回该字段。
    * copyScore  身份证复印告警分数, 分数越高，身份证图像是复印件的可能性越高。 仅在传入参数detect_copy为true时，返回该字段。
    * borderIntegrityScore  身份证边缘完整性告警的分数，分数越高，身份证图像边缘不完整的可能性越高。 仅在传入参数detect_border_integrity为true时，返回该字段。
    * blurScore  身份证模糊告警分数，分数越高，身份证图像模糊的可能性越高。 仅在传入参数detect_blur为true时，返回该字段。
    * glareScore  身份证反光告警分数，分数越高，身份证图像存在反光的可能性越高。 仅在传入参数detect_glare为true时，返回该字段。
    * blockingWithinBorderScore  身份证图像框内是否有遮挡的告警分数，分数越高，身份证图像框内存在异物遮挡的可能性越高。 仅在传入参数detect_blocking_within_border为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'tamperingScore' => 'setTamperingScore',
            'interimScore' => 'setInterimScore',
            'reproduceScore' => 'setReproduceScore',
            'copyScore' => 'setCopyScore',
            'borderIntegrityScore' => 'setBorderIntegrityScore',
            'blurScore' => 'setBlurScore',
            'glareScore' => 'setGlareScore',
            'blockingWithinBorderScore' => 'setBlockingWithinBorderScore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tamperingScore  身份证PS告警分数，分数越高，PS的可能性越高。 仅在传入参数detect_tampering为true时，返回该字段。
    * interimScore  临时身份证告警分数，分数越高，临时身份证的可能性越高。 仅在传入参数detect_interim为true时，返回该字段。
    * reproduceScore  身份证翻拍告警分数，分数越高，身份证图像经过翻拍的可能性越高。 仅在传入参数detect_reproduce为true时，返回该字段。
    * copyScore  身份证复印告警分数, 分数越高，身份证图像是复印件的可能性越高。 仅在传入参数detect_copy为true时，返回该字段。
    * borderIntegrityScore  身份证边缘完整性告警的分数，分数越高，身份证图像边缘不完整的可能性越高。 仅在传入参数detect_border_integrity为true时，返回该字段。
    * blurScore  身份证模糊告警分数，分数越高，身份证图像模糊的可能性越高。 仅在传入参数detect_blur为true时，返回该字段。
    * glareScore  身份证反光告警分数，分数越高，身份证图像存在反光的可能性越高。 仅在传入参数detect_glare为true时，返回该字段。
    * blockingWithinBorderScore  身份证图像框内是否有遮挡的告警分数，分数越高，身份证图像框内存在异物遮挡的可能性越高。 仅在传入参数detect_blocking_within_border为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'tamperingScore' => 'getTamperingScore',
            'interimScore' => 'getInterimScore',
            'reproduceScore' => 'getReproduceScore',
            'copyScore' => 'getCopyScore',
            'borderIntegrityScore' => 'getBorderIntegrityScore',
            'blurScore' => 'getBlurScore',
            'glareScore' => 'getGlareScore',
            'blockingWithinBorderScore' => 'getBlockingWithinBorderScore'
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
        $this->container['tamperingScore'] = isset($data['tamperingScore']) ? $data['tamperingScore'] : null;
        $this->container['interimScore'] = isset($data['interimScore']) ? $data['interimScore'] : null;
        $this->container['reproduceScore'] = isset($data['reproduceScore']) ? $data['reproduceScore'] : null;
        $this->container['copyScore'] = isset($data['copyScore']) ? $data['copyScore'] : null;
        $this->container['borderIntegrityScore'] = isset($data['borderIntegrityScore']) ? $data['borderIntegrityScore'] : null;
        $this->container['blurScore'] = isset($data['blurScore']) ? $data['blurScore'] : null;
        $this->container['glareScore'] = isset($data['glareScore']) ? $data['glareScore'] : null;
        $this->container['blockingWithinBorderScore'] = isset($data['blockingWithinBorderScore']) ? $data['blockingWithinBorderScore'] : null;
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
    * Gets tamperingScore
    *  身份证PS告警分数，分数越高，PS的可能性越高。 仅在传入参数detect_tampering为true时，返回该字段。
    *
    * @return int|null
    */
    public function getTamperingScore()
    {
        return $this->container['tamperingScore'];
    }

    /**
    * Sets tamperingScore
    *
    * @param int|null $tamperingScore 身份证PS告警分数，分数越高，PS的可能性越高。 仅在传入参数detect_tampering为true时，返回该字段。
    *
    * @return $this
    */
    public function setTamperingScore($tamperingScore)
    {
        $this->container['tamperingScore'] = $tamperingScore;
        return $this;
    }

    /**
    * Gets interimScore
    *  临时身份证告警分数，分数越高，临时身份证的可能性越高。 仅在传入参数detect_interim为true时，返回该字段。
    *
    * @return int|null
    */
    public function getInterimScore()
    {
        return $this->container['interimScore'];
    }

    /**
    * Sets interimScore
    *
    * @param int|null $interimScore 临时身份证告警分数，分数越高，临时身份证的可能性越高。 仅在传入参数detect_interim为true时，返回该字段。
    *
    * @return $this
    */
    public function setInterimScore($interimScore)
    {
        $this->container['interimScore'] = $interimScore;
        return $this;
    }

    /**
    * Gets reproduceScore
    *  身份证翻拍告警分数，分数越高，身份证图像经过翻拍的可能性越高。 仅在传入参数detect_reproduce为true时，返回该字段。
    *
    * @return int|null
    */
    public function getReproduceScore()
    {
        return $this->container['reproduceScore'];
    }

    /**
    * Sets reproduceScore
    *
    * @param int|null $reproduceScore 身份证翻拍告警分数，分数越高，身份证图像经过翻拍的可能性越高。 仅在传入参数detect_reproduce为true时，返回该字段。
    *
    * @return $this
    */
    public function setReproduceScore($reproduceScore)
    {
        $this->container['reproduceScore'] = $reproduceScore;
        return $this;
    }

    /**
    * Gets copyScore
    *  身份证复印告警分数, 分数越高，身份证图像是复印件的可能性越高。 仅在传入参数detect_copy为true时，返回该字段。
    *
    * @return int|null
    */
    public function getCopyScore()
    {
        return $this->container['copyScore'];
    }

    /**
    * Sets copyScore
    *
    * @param int|null $copyScore 身份证复印告警分数, 分数越高，身份证图像是复印件的可能性越高。 仅在传入参数detect_copy为true时，返回该字段。
    *
    * @return $this
    */
    public function setCopyScore($copyScore)
    {
        $this->container['copyScore'] = $copyScore;
        return $this;
    }

    /**
    * Gets borderIntegrityScore
    *  身份证边缘完整性告警的分数，分数越高，身份证图像边缘不完整的可能性越高。 仅在传入参数detect_border_integrity为true时，返回该字段。
    *
    * @return int|null
    */
    public function getBorderIntegrityScore()
    {
        return $this->container['borderIntegrityScore'];
    }

    /**
    * Sets borderIntegrityScore
    *
    * @param int|null $borderIntegrityScore 身份证边缘完整性告警的分数，分数越高，身份证图像边缘不完整的可能性越高。 仅在传入参数detect_border_integrity为true时，返回该字段。
    *
    * @return $this
    */
    public function setBorderIntegrityScore($borderIntegrityScore)
    {
        $this->container['borderIntegrityScore'] = $borderIntegrityScore;
        return $this;
    }

    /**
    * Gets blurScore
    *  身份证模糊告警分数，分数越高，身份证图像模糊的可能性越高。 仅在传入参数detect_blur为true时，返回该字段。
    *
    * @return int|null
    */
    public function getBlurScore()
    {
        return $this->container['blurScore'];
    }

    /**
    * Sets blurScore
    *
    * @param int|null $blurScore 身份证模糊告警分数，分数越高，身份证图像模糊的可能性越高。 仅在传入参数detect_blur为true时，返回该字段。
    *
    * @return $this
    */
    public function setBlurScore($blurScore)
    {
        $this->container['blurScore'] = $blurScore;
        return $this;
    }

    /**
    * Gets glareScore
    *  身份证反光告警分数，分数越高，身份证图像存在反光的可能性越高。 仅在传入参数detect_glare为true时，返回该字段。
    *
    * @return int|null
    */
    public function getGlareScore()
    {
        return $this->container['glareScore'];
    }

    /**
    * Sets glareScore
    *
    * @param int|null $glareScore 身份证反光告警分数，分数越高，身份证图像存在反光的可能性越高。 仅在传入参数detect_glare为true时，返回该字段。
    *
    * @return $this
    */
    public function setGlareScore($glareScore)
    {
        $this->container['glareScore'] = $glareScore;
        return $this;
    }

    /**
    * Gets blockingWithinBorderScore
    *  身份证图像框内是否有遮挡的告警分数，分数越高，身份证图像框内存在异物遮挡的可能性越高。 仅在传入参数detect_blocking_within_border为true时，返回该字段。
    *
    * @return int|null
    */
    public function getBlockingWithinBorderScore()
    {
        return $this->container['blockingWithinBorderScore'];
    }

    /**
    * Sets blockingWithinBorderScore
    *
    * @param int|null $blockingWithinBorderScore 身份证图像框内是否有遮挡的告警分数，分数越高，身份证图像框内存在异物遮挡的可能性越高。 仅在传入参数detect_blocking_within_border为true时，返回该字段。
    *
    * @return $this
    */
    public function setBlockingWithinBorderScore($blockingWithinBorderScore)
    {
        $this->container['blockingWithinBorderScore'] = $blockingWithinBorderScore;
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

