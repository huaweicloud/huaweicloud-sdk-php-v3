<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrderConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrderConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * thresholdList  阈值列表
    * alertConfig  alertConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'thresholdList' => '\HuaweiCloud\SDK\SecMaster\V1\Model\UsageThreshold[]',
            'alertConfig' => '\HuaweiCloud\SDK\SecMaster\V1\Model\AlertConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * thresholdList  阈值列表
    * alertConfig  alertConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'thresholdList' => null,
        'alertConfig' => null
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
    * thresholdList  阈值列表
    * alertConfig  alertConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'thresholdList' => 'threshold_list',
            'alertConfig' => 'alert_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * thresholdList  阈值列表
    * alertConfig  alertConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'thresholdList' => 'setThresholdList',
            'alertConfig' => 'setAlertConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * thresholdList  阈值列表
    * alertConfig  alertConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'thresholdList' => 'getThresholdList',
            'alertConfig' => 'getAlertConfig'
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
        $this->container['thresholdList'] = isset($data['thresholdList']) ? $data['thresholdList'] : null;
        $this->container['alertConfig'] = isset($data['alertConfig']) ? $data['alertConfig'] : null;
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
    * Gets thresholdList
    *  阈值列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\UsageThreshold[]|null
    */
    public function getThresholdList()
    {
        return $this->container['thresholdList'];
    }

    /**
    * Sets thresholdList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\UsageThreshold[]|null $thresholdList 阈值列表
    *
    * @return $this
    */
    public function setThresholdList($thresholdList)
    {
        $this->container['thresholdList'] = $thresholdList;
        return $this;
    }

    /**
    * Gets alertConfig
    *  alertConfig
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\AlertConfig|null
    */
    public function getAlertConfig()
    {
        return $this->container['alertConfig'];
    }

    /**
    * Sets alertConfig
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\AlertConfig|null $alertConfig alertConfig
    *
    * @return $this
    */
    public function setAlertConfig($alertConfig)
    {
        $this->container['alertConfig'] = $alertConfig;
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

