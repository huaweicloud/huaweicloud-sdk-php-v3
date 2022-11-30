<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAllScalingV2PoliciesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAllScalingV2PoliciesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalNumber  总记录数。
    * startNumber  查询的起始行号。
    * limit  查询记录数。
    * scalingPolicies  伸缩策略列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalNumber' => 'int',
            'startNumber' => 'int',
            'limit' => 'int',
            'scalingPolicies' => '\HuaweiCloud\SDK\_As\V1\Model\ScalingAllPolicyDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalNumber  总记录数。
    * startNumber  查询的起始行号。
    * limit  查询记录数。
    * scalingPolicies  伸缩策略列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalNumber' => 'int32',
        'startNumber' => 'int32',
        'limit' => null,
        'scalingPolicies' => null
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
    * totalNumber  总记录数。
    * startNumber  查询的起始行号。
    * limit  查询记录数。
    * scalingPolicies  伸缩策略列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalNumber' => 'total_number',
            'startNumber' => 'start_number',
            'limit' => 'limit',
            'scalingPolicies' => 'scaling_policies'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalNumber  总记录数。
    * startNumber  查询的起始行号。
    * limit  查询记录数。
    * scalingPolicies  伸缩策略列表
    *
    * @var string[]
    */
    protected static $setters = [
            'totalNumber' => 'setTotalNumber',
            'startNumber' => 'setStartNumber',
            'limit' => 'setLimit',
            'scalingPolicies' => 'setScalingPolicies'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalNumber  总记录数。
    * startNumber  查询的起始行号。
    * limit  查询记录数。
    * scalingPolicies  伸缩策略列表
    *
    * @var string[]
    */
    protected static $getters = [
            'totalNumber' => 'getTotalNumber',
            'startNumber' => 'getStartNumber',
            'limit' => 'getLimit',
            'scalingPolicies' => 'getScalingPolicies'
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
        $this->container['totalNumber'] = isset($data['totalNumber']) ? $data['totalNumber'] : null;
        $this->container['startNumber'] = isset($data['startNumber']) ? $data['startNumber'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['scalingPolicies'] = isset($data['scalingPolicies']) ? $data['scalingPolicies'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets totalNumber
    *  总记录数。
    *
    * @return int|null
    */
    public function getTotalNumber()
    {
        return $this->container['totalNumber'];
    }

    /**
    * Sets totalNumber
    *
    * @param int|null $totalNumber 总记录数。
    *
    * @return $this
    */
    public function setTotalNumber($totalNumber)
    {
        $this->container['totalNumber'] = $totalNumber;
        return $this;
    }

    /**
    * Gets startNumber
    *  查询的起始行号。
    *
    * @return int|null
    */
    public function getStartNumber()
    {
        return $this->container['startNumber'];
    }

    /**
    * Sets startNumber
    *
    * @param int|null $startNumber 查询的起始行号。
    *
    * @return $this
    */
    public function setStartNumber($startNumber)
    {
        $this->container['startNumber'] = $startNumber;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询记录数。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets scalingPolicies
    *  伸缩策略列表
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\ScalingAllPolicyDetail[]|null
    */
    public function getScalingPolicies()
    {
        return $this->container['scalingPolicies'];
    }

    /**
    * Sets scalingPolicies
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\ScalingAllPolicyDetail[]|null $scalingPolicies 伸缩策略列表
    *
    * @return $this
    */
    public function setScalingPolicies($scalingPolicies)
    {
        $this->container['scalingPolicies'] = $scalingPolicies;
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

