<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VehicleLicenseAlarmConfidence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VehicleLicenseAlarmConfidence';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * blockingWithinBorderScore  证件图像框内遮挡告警分数，分数越高，证件图像框内遮挡的可能性越高。
    * borderIntegrityScore  证件图像边框完整性告警分数，分数越高，证件图像边框不完整的可能性越高。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'blockingWithinBorderScore' => 'int',
            'borderIntegrityScore' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * blockingWithinBorderScore  证件图像框内遮挡告警分数，分数越高，证件图像框内遮挡的可能性越高。
    * borderIntegrityScore  证件图像边框完整性告警分数，分数越高，证件图像边框不完整的可能性越高。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'blockingWithinBorderScore' => null,
        'borderIntegrityScore' => null
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
    * blockingWithinBorderScore  证件图像框内遮挡告警分数，分数越高，证件图像框内遮挡的可能性越高。
    * borderIntegrityScore  证件图像边框完整性告警分数，分数越高，证件图像边框不完整的可能性越高。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'blockingWithinBorderScore' => 'blocking_within_border_score',
            'borderIntegrityScore' => 'border_integrity_score'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * blockingWithinBorderScore  证件图像框内遮挡告警分数，分数越高，证件图像框内遮挡的可能性越高。
    * borderIntegrityScore  证件图像边框完整性告警分数，分数越高，证件图像边框不完整的可能性越高。
    *
    * @var string[]
    */
    protected static $setters = [
            'blockingWithinBorderScore' => 'setBlockingWithinBorderScore',
            'borderIntegrityScore' => 'setBorderIntegrityScore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * blockingWithinBorderScore  证件图像框内遮挡告警分数，分数越高，证件图像框内遮挡的可能性越高。
    * borderIntegrityScore  证件图像边框完整性告警分数，分数越高，证件图像边框不完整的可能性越高。
    *
    * @var string[]
    */
    protected static $getters = [
            'blockingWithinBorderScore' => 'getBlockingWithinBorderScore',
            'borderIntegrityScore' => 'getBorderIntegrityScore'
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
        $this->container['blockingWithinBorderScore'] = isset($data['blockingWithinBorderScore']) ? $data['blockingWithinBorderScore'] : null;
        $this->container['borderIntegrityScore'] = isset($data['borderIntegrityScore']) ? $data['borderIntegrityScore'] : null;
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

