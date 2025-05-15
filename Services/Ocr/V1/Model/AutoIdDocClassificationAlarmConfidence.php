<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoIdDocClassificationAlarmConfidence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoIdDocClassificationAlarmConfidence';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * blurScore  证件图像模糊告警分数，分数越高，证件图像模糊的可能性越高。
    * glareScore  证件图像反光告警分数，分数越高，证件图像反光的可能性越高。
    * blockingWithinBorderScore  证件图像框内遮挡告警分数，分数越高，证件图像框内遮挡的可能性越高。
    * insufficientLightingScore  证件图像过暗告警分数，分数越高，证件图像过暗的可能性越高。
    * copyScore  证件图像复印件告警分数，分数越高，证件图像是复印件的可能性越高。
    * borderIntegrityScore  证件图像边框完整性告警分数，分数越高，证件图像边框不完整的可能性越高。
    * reproduceScore  证件图像翻拍告警分数，分数越高，证件图像经过翻拍的可能性越高。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'blurScore' => 'int',
            'glareScore' => 'int',
            'blockingWithinBorderScore' => 'int',
            'insufficientLightingScore' => 'int',
            'copyScore' => 'int',
            'borderIntegrityScore' => 'int',
            'reproduceScore' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * blurScore  证件图像模糊告警分数，分数越高，证件图像模糊的可能性越高。
    * glareScore  证件图像反光告警分数，分数越高，证件图像反光的可能性越高。
    * blockingWithinBorderScore  证件图像框内遮挡告警分数，分数越高，证件图像框内遮挡的可能性越高。
    * insufficientLightingScore  证件图像过暗告警分数，分数越高，证件图像过暗的可能性越高。
    * copyScore  证件图像复印件告警分数，分数越高，证件图像是复印件的可能性越高。
    * borderIntegrityScore  证件图像边框完整性告警分数，分数越高，证件图像边框不完整的可能性越高。
    * reproduceScore  证件图像翻拍告警分数，分数越高，证件图像经过翻拍的可能性越高。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'blurScore' => 'int32',
        'glareScore' => 'int32',
        'blockingWithinBorderScore' => 'int32',
        'insufficientLightingScore' => 'int32',
        'copyScore' => 'int32',
        'borderIntegrityScore' => 'int32',
        'reproduceScore' => 'int32'
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
    * blurScore  证件图像模糊告警分数，分数越高，证件图像模糊的可能性越高。
    * glareScore  证件图像反光告警分数，分数越高，证件图像反光的可能性越高。
    * blockingWithinBorderScore  证件图像框内遮挡告警分数，分数越高，证件图像框内遮挡的可能性越高。
    * insufficientLightingScore  证件图像过暗告警分数，分数越高，证件图像过暗的可能性越高。
    * copyScore  证件图像复印件告警分数，分数越高，证件图像是复印件的可能性越高。
    * borderIntegrityScore  证件图像边框完整性告警分数，分数越高，证件图像边框不完整的可能性越高。
    * reproduceScore  证件图像翻拍告警分数，分数越高，证件图像经过翻拍的可能性越高。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'blurScore' => 'blur_score',
            'glareScore' => 'glare_score',
            'blockingWithinBorderScore' => 'blocking_within_border_score',
            'insufficientLightingScore' => 'insufficient_lighting_score',
            'copyScore' => 'copy_score',
            'borderIntegrityScore' => 'border_integrity_score',
            'reproduceScore' => 'reproduce_score'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * blurScore  证件图像模糊告警分数，分数越高，证件图像模糊的可能性越高。
    * glareScore  证件图像反光告警分数，分数越高，证件图像反光的可能性越高。
    * blockingWithinBorderScore  证件图像框内遮挡告警分数，分数越高，证件图像框内遮挡的可能性越高。
    * insufficientLightingScore  证件图像过暗告警分数，分数越高，证件图像过暗的可能性越高。
    * copyScore  证件图像复印件告警分数，分数越高，证件图像是复印件的可能性越高。
    * borderIntegrityScore  证件图像边框完整性告警分数，分数越高，证件图像边框不完整的可能性越高。
    * reproduceScore  证件图像翻拍告警分数，分数越高，证件图像经过翻拍的可能性越高。
    *
    * @var string[]
    */
    protected static $setters = [
            'blurScore' => 'setBlurScore',
            'glareScore' => 'setGlareScore',
            'blockingWithinBorderScore' => 'setBlockingWithinBorderScore',
            'insufficientLightingScore' => 'setInsufficientLightingScore',
            'copyScore' => 'setCopyScore',
            'borderIntegrityScore' => 'setBorderIntegrityScore',
            'reproduceScore' => 'setReproduceScore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * blurScore  证件图像模糊告警分数，分数越高，证件图像模糊的可能性越高。
    * glareScore  证件图像反光告警分数，分数越高，证件图像反光的可能性越高。
    * blockingWithinBorderScore  证件图像框内遮挡告警分数，分数越高，证件图像框内遮挡的可能性越高。
    * insufficientLightingScore  证件图像过暗告警分数，分数越高，证件图像过暗的可能性越高。
    * copyScore  证件图像复印件告警分数，分数越高，证件图像是复印件的可能性越高。
    * borderIntegrityScore  证件图像边框完整性告警分数，分数越高，证件图像边框不完整的可能性越高。
    * reproduceScore  证件图像翻拍告警分数，分数越高，证件图像经过翻拍的可能性越高。
    *
    * @var string[]
    */
    protected static $getters = [
            'blurScore' => 'getBlurScore',
            'glareScore' => 'getGlareScore',
            'blockingWithinBorderScore' => 'getBlockingWithinBorderScore',
            'insufficientLightingScore' => 'getInsufficientLightingScore',
            'copyScore' => 'getCopyScore',
            'borderIntegrityScore' => 'getBorderIntegrityScore',
            'reproduceScore' => 'getReproduceScore'
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
        $this->container['blurScore'] = isset($data['blurScore']) ? $data['blurScore'] : null;
        $this->container['glareScore'] = isset($data['glareScore']) ? $data['glareScore'] : null;
        $this->container['blockingWithinBorderScore'] = isset($data['blockingWithinBorderScore']) ? $data['blockingWithinBorderScore'] : null;
        $this->container['insufficientLightingScore'] = isset($data['insufficientLightingScore']) ? $data['insufficientLightingScore'] : null;
        $this->container['copyScore'] = isset($data['copyScore']) ? $data['copyScore'] : null;
        $this->container['borderIntegrityScore'] = isset($data['borderIntegrityScore']) ? $data['borderIntegrityScore'] : null;
        $this->container['reproduceScore'] = isset($data['reproduceScore']) ? $data['reproduceScore'] : null;
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
    * Gets blurScore
    *  证件图像模糊告警分数，分数越高，证件图像模糊的可能性越高。
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
    * @param int|null $blurScore 证件图像模糊告警分数，分数越高，证件图像模糊的可能性越高。
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
    *  证件图像反光告警分数，分数越高，证件图像反光的可能性越高。
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
    * @param int|null $glareScore 证件图像反光告警分数，分数越高，证件图像反光的可能性越高。
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
    *  证件图像框内遮挡告警分数，分数越高，证件图像框内遮挡的可能性越高。
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
    * @param int|null $blockingWithinBorderScore 证件图像框内遮挡告警分数，分数越高，证件图像框内遮挡的可能性越高。
    *
    * @return $this
    */
    public function setBlockingWithinBorderScore($blockingWithinBorderScore)
    {
        $this->container['blockingWithinBorderScore'] = $blockingWithinBorderScore;
        return $this;
    }

    /**
    * Gets insufficientLightingScore
    *  证件图像过暗告警分数，分数越高，证件图像过暗的可能性越高。
    *
    * @return int|null
    */
    public function getInsufficientLightingScore()
    {
        return $this->container['insufficientLightingScore'];
    }

    /**
    * Sets insufficientLightingScore
    *
    * @param int|null $insufficientLightingScore 证件图像过暗告警分数，分数越高，证件图像过暗的可能性越高。
    *
    * @return $this
    */
    public function setInsufficientLightingScore($insufficientLightingScore)
    {
        $this->container['insufficientLightingScore'] = $insufficientLightingScore;
        return $this;
    }

    /**
    * Gets copyScore
    *  证件图像复印件告警分数，分数越高，证件图像是复印件的可能性越高。
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
    * @param int|null $copyScore 证件图像复印件告警分数，分数越高，证件图像是复印件的可能性越高。
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
    *  证件图像边框完整性告警分数，分数越高，证件图像边框不完整的可能性越高。
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
    * @param int|null $borderIntegrityScore 证件图像边框完整性告警分数，分数越高，证件图像边框不完整的可能性越高。
    *
    * @return $this
    */
    public function setBorderIntegrityScore($borderIntegrityScore)
    {
        $this->container['borderIntegrityScore'] = $borderIntegrityScore;
        return $this;
    }

    /**
    * Gets reproduceScore
    *  证件图像翻拍告警分数，分数越高，证件图像经过翻拍的可能性越高。
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
    * @param int|null $reproduceScore 证件图像翻拍告警分数，分数越高，证件图像经过翻拍的可能性越高。
    *
    * @return $this
    */
    public function setReproduceScore($reproduceScore)
    {
        $this->container['reproduceScore'] = $reproduceScore;
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

