<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRelatedDnsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRelatedDnsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relatedDataNodes  关联DN。
    * latestRestorableTime  最近恢复时间点。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relatedDataNodes' => '\HuaweiCloud\SDK\Ddm\V1\Model\RelatedDnVO[]',
            'latestRestorableTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relatedDataNodes  关联DN。
    * latestRestorableTime  最近恢复时间点。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relatedDataNodes' => null,
        'latestRestorableTime' => null
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
    * relatedDataNodes  关联DN。
    * latestRestorableTime  最近恢复时间点。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relatedDataNodes' => 'related_data_nodes',
            'latestRestorableTime' => 'latest_restorable_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relatedDataNodes  关联DN。
    * latestRestorableTime  最近恢复时间点。
    *
    * @var string[]
    */
    protected static $setters = [
            'relatedDataNodes' => 'setRelatedDataNodes',
            'latestRestorableTime' => 'setLatestRestorableTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relatedDataNodes  关联DN。
    * latestRestorableTime  最近恢复时间点。
    *
    * @var string[]
    */
    protected static $getters = [
            'relatedDataNodes' => 'getRelatedDataNodes',
            'latestRestorableTime' => 'getLatestRestorableTime'
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
        $this->container['relatedDataNodes'] = isset($data['relatedDataNodes']) ? $data['relatedDataNodes'] : null;
        $this->container['latestRestorableTime'] = isset($data['latestRestorableTime']) ? $data['latestRestorableTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['latestRestorableTime']) && (mb_strlen($this->container['latestRestorableTime']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'latestRestorableTime', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['latestRestorableTime']) && (mb_strlen($this->container['latestRestorableTime']) < 1)) {
                $invalidProperties[] = "invalid value for 'latestRestorableTime', the character length must be bigger than or equal to 1.";
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
    * Gets relatedDataNodes
    *  关联DN。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\RelatedDnVO[]|null
    */
    public function getRelatedDataNodes()
    {
        return $this->container['relatedDataNodes'];
    }

    /**
    * Sets relatedDataNodes
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\RelatedDnVO[]|null $relatedDataNodes 关联DN。
    *
    * @return $this
    */
    public function setRelatedDataNodes($relatedDataNodes)
    {
        $this->container['relatedDataNodes'] = $relatedDataNodes;
        return $this;
    }

    /**
    * Gets latestRestorableTime
    *  最近恢复时间点。
    *
    * @return string|null
    */
    public function getLatestRestorableTime()
    {
        return $this->container['latestRestorableTime'];
    }

    /**
    * Sets latestRestorableTime
    *
    * @param string|null $latestRestorableTime 最近恢复时间点。
    *
    * @return $this
    */
    public function setLatestRestorableTime($latestRestorableTime)
    {
        $this->container['latestRestorableTime'] = $latestRestorableTime;
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

