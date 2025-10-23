<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VehicleLicenseAlarmResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VehicleLicenseAlarmResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * detectBlockingWithinBorderResult  -| 证件图像框内遮挡告警结果。 true：表示证件图片内部有被遮挡。 false：表示证件图片内部未被遮挡。
    * detectBorderIntegrityResult  -| 证件图像边框完整性告警结果。 true：表示边框不完整。 false：表示边框完整。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'detectBlockingWithinBorderResult' => 'bool',
            'detectBorderIntegrityResult' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * detectBlockingWithinBorderResult  -| 证件图像框内遮挡告警结果。 true：表示证件图片内部有被遮挡。 false：表示证件图片内部未被遮挡。
    * detectBorderIntegrityResult  -| 证件图像边框完整性告警结果。 true：表示边框不完整。 false：表示边框完整。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'detectBlockingWithinBorderResult' => null,
        'detectBorderIntegrityResult' => null
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
    * detectBlockingWithinBorderResult  -| 证件图像框内遮挡告警结果。 true：表示证件图片内部有被遮挡。 false：表示证件图片内部未被遮挡。
    * detectBorderIntegrityResult  -| 证件图像边框完整性告警结果。 true：表示边框不完整。 false：表示边框完整。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'detectBlockingWithinBorderResult' => 'detect_blocking_within_border_result',
            'detectBorderIntegrityResult' => 'detect_border_integrity_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * detectBlockingWithinBorderResult  -| 证件图像框内遮挡告警结果。 true：表示证件图片内部有被遮挡。 false：表示证件图片内部未被遮挡。
    * detectBorderIntegrityResult  -| 证件图像边框完整性告警结果。 true：表示边框不完整。 false：表示边框完整。
    *
    * @var string[]
    */
    protected static $setters = [
            'detectBlockingWithinBorderResult' => 'setDetectBlockingWithinBorderResult',
            'detectBorderIntegrityResult' => 'setDetectBorderIntegrityResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * detectBlockingWithinBorderResult  -| 证件图像框内遮挡告警结果。 true：表示证件图片内部有被遮挡。 false：表示证件图片内部未被遮挡。
    * detectBorderIntegrityResult  -| 证件图像边框完整性告警结果。 true：表示边框不完整。 false：表示边框完整。
    *
    * @var string[]
    */
    protected static $getters = [
            'detectBlockingWithinBorderResult' => 'getDetectBlockingWithinBorderResult',
            'detectBorderIntegrityResult' => 'getDetectBorderIntegrityResult'
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
        $this->container['detectBlockingWithinBorderResult'] = isset($data['detectBlockingWithinBorderResult']) ? $data['detectBlockingWithinBorderResult'] : null;
        $this->container['detectBorderIntegrityResult'] = isset($data['detectBorderIntegrityResult']) ? $data['detectBorderIntegrityResult'] : null;
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
    * Gets detectBlockingWithinBorderResult
    *  -| 证件图像框内遮挡告警结果。 true：表示证件图片内部有被遮挡。 false：表示证件图片内部未被遮挡。
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
    * @param bool|null $detectBlockingWithinBorderResult -| 证件图像框内遮挡告警结果。 true：表示证件图片内部有被遮挡。 false：表示证件图片内部未被遮挡。
    *
    * @return $this
    */
    public function setDetectBlockingWithinBorderResult($detectBlockingWithinBorderResult)
    {
        $this->container['detectBlockingWithinBorderResult'] = $detectBlockingWithinBorderResult;
        return $this;
    }

    /**
    * Gets detectBorderIntegrityResult
    *  -| 证件图像边框完整性告警结果。 true：表示边框不完整。 false：表示边框完整。
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
    * @param bool|null $detectBorderIntegrityResult -| 证件图像边框完整性告警结果。 true：表示边框不完整。 false：表示边框完整。
    *
    * @return $this
    */
    public function setDetectBorderIntegrityResult($detectBorderIntegrityResult)
    {
        $this->container['detectBorderIntegrityResult'] = $detectBorderIntegrityResult;
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

