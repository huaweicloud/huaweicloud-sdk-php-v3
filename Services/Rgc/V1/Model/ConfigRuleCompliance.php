<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigRuleCompliance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigRuleCompliance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleName  合规规则。
    * status  合规状态。
    * region  区域信息。
    * controlId  控制策略ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleName' => 'string',
            'status' => 'string',
            'region' => 'string',
            'controlId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleName  合规规则。
    * status  合规状态。
    * region  区域信息。
    * controlId  控制策略ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleName' => null,
        'status' => null,
        'region' => null,
        'controlId' => null
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
    * ruleName  合规规则。
    * status  合规状态。
    * region  区域信息。
    * controlId  控制策略ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleName' => 'rule_name',
            'status' => 'status',
            'region' => 'region',
            'controlId' => 'control_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleName  合规规则。
    * status  合规状态。
    * region  区域信息。
    * controlId  控制策略ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleName' => 'setRuleName',
            'status' => 'setStatus',
            'region' => 'setRegion',
            'controlId' => 'setControlId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleName  合规规则。
    * status  合规状态。
    * region  区域信息。
    * controlId  控制策略ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleName' => 'getRuleName',
            'status' => 'getStatus',
            'region' => 'getRegion',
            'controlId' => 'getControlId'
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
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['controlId'] = isset($data['controlId']) ? $data['controlId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['controlId']) && (mb_strlen($this->container['controlId']) > 128)) {
                $invalidProperties[] = "invalid value for 'controlId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['controlId']) && (mb_strlen($this->container['controlId']) < 1)) {
                $invalidProperties[] = "invalid value for 'controlId', the character length must be bigger than or equal to 1.";
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
    * Gets ruleName
    *  合规规则。
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 合规规则。
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets status
    *  合规状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 合规状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets region
    *  区域信息。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域信息。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets controlId
    *  控制策略ID。
    *
    * @return string|null
    */
    public function getControlId()
    {
        return $this->container['controlId'];
    }

    /**
    * Sets controlId
    *
    * @param string|null $controlId 控制策略ID。
    *
    * @return $this
    */
    public function setControlId($controlId)
    {
        $this->container['controlId'] = $controlId;
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

