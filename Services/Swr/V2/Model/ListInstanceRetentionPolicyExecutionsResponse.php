<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceRetentionPolicyExecutionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceRetentionPolicyExecutionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  总数
    * executions  老化策略执行列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'executions' => '\HuaweiCloud\SDK\Swr\V2\Model\RetentionExecution[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  总数
    * executions  老化策略执行列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => null,
        'executions' => null
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
    * total  总数
    * executions  老化策略执行列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'executions' => 'executions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  总数
    * executions  老化策略执行列表
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'executions' => 'setExecutions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  总数
    * executions  老化策略执行列表
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'executions' => 'getExecutions'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['executions'] = isset($data['executions']) ? $data['executions'] : null;
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
    * Gets total
    *  总数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets executions
    *  老化策略执行列表
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\RetentionExecution[]|null
    */
    public function getExecutions()
    {
        return $this->container['executions'];
    }

    /**
    * Sets executions
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\RetentionExecution[]|null $executions 老化策略执行列表
    *
    * @return $this
    */
    public function setExecutions($executions)
    {
        $this->container['executions'] = $executions;
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

