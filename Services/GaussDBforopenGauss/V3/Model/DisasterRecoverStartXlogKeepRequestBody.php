<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DisasterRecoverStartXlogKeepRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DisasterRecoverStartXlogKeepRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xlogKeepRatio  日志保留空间占可使用剩余磁盘容量的比例, 可设置范围为1-100。 properties:
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xlogKeepRatio' => 'int',
            'disasterType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xlogKeepRatio  日志保留空间占可使用剩余磁盘容量的比例, 可设置范围为1-100。 properties:
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xlogKeepRatio' => null,
        'disasterType' => null
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
    * xlogKeepRatio  日志保留空间占可使用剩余磁盘容量的比例, 可设置范围为1-100。 properties:
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xlogKeepRatio' => 'xlog_keep_ratio',
            'disasterType' => 'disaster_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xlogKeepRatio  日志保留空间占可使用剩余磁盘容量的比例, 可设置范围为1-100。 properties:
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'xlogKeepRatio' => 'setXlogKeepRatio',
            'disasterType' => 'setDisasterType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xlogKeepRatio  日志保留空间占可使用剩余磁盘容量的比例, 可设置范围为1-100。 properties:
    * disasterType  容灾类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'xlogKeepRatio' => 'getXlogKeepRatio',
            'disasterType' => 'getDisasterType'
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
    const DISASTER_TYPE_STREAM = 'stream';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDisasterTypeAllowableValues()
    {
        return [
            self::DISASTER_TYPE_STREAM,
        ];
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
        $this->container['xlogKeepRatio'] = isset($data['xlogKeepRatio']) ? $data['xlogKeepRatio'] : null;
        $this->container['disasterType'] = isset($data['disasterType']) ? $data['disasterType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['disasterType'] === null) {
            $invalidProperties[] = "'disasterType' can't be null";
        }
            $allowedValues = $this->getDisasterTypeAllowableValues();
                if (!is_null($this->container['disasterType']) && !in_array($this->container['disasterType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'disasterType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    * Gets xlogKeepRatio
    *  日志保留空间占可使用剩余磁盘容量的比例, 可设置范围为1-100。 properties:
    *
    * @return int|null
    */
    public function getXlogKeepRatio()
    {
        return $this->container['xlogKeepRatio'];
    }

    /**
    * Sets xlogKeepRatio
    *
    * @param int|null $xlogKeepRatio 日志保留空间占可使用剩余磁盘容量的比例, 可设置范围为1-100。 properties:
    *
    * @return $this
    */
    public function setXlogKeepRatio($xlogKeepRatio)
    {
        $this->container['xlogKeepRatio'] = $xlogKeepRatio;
        return $this;
    }

    /**
    * Gets disasterType
    *  容灾类型。
    *
    * @return string
    */
    public function getDisasterType()
    {
        return $this->container['disasterType'];
    }

    /**
    * Sets disasterType
    *
    * @param string $disasterType 容灾类型。
    *
    * @return $this
    */
    public function setDisasterType($disasterType)
    {
        $this->container['disasterType'] = $disasterType;
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

