<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerlessInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerlessInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minCap  Serverless型实例的最小算力，单位RCU，范围0.5~8，步进0.5。
    * maxCap  Serverless型实例的最大算力，单位RCU，范围0.5~8，步进0.5。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minCap' => 'string',
            'maxCap' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minCap  Serverless型实例的最小算力，单位RCU，范围0.5~8，步进0.5。
    * maxCap  Serverless型实例的最大算力，单位RCU，范围0.5~8，步进0.5。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minCap' => null,
        'maxCap' => null
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
    * minCap  Serverless型实例的最小算力，单位RCU，范围0.5~8，步进0.5。
    * maxCap  Serverless型实例的最大算力，单位RCU，范围0.5~8，步进0.5。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minCap' => 'min_cap',
            'maxCap' => 'max_cap'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minCap  Serverless型实例的最小算力，单位RCU，范围0.5~8，步进0.5。
    * maxCap  Serverless型实例的最大算力，单位RCU，范围0.5~8，步进0.5。
    *
    * @var string[]
    */
    protected static $setters = [
            'minCap' => 'setMinCap',
            'maxCap' => 'setMaxCap'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minCap  Serverless型实例的最小算力，单位RCU，范围0.5~8，步进0.5。
    * maxCap  Serverless型实例的最大算力，单位RCU，范围0.5~8，步进0.5。
    *
    * @var string[]
    */
    protected static $getters = [
            'minCap' => 'getMinCap',
            'maxCap' => 'getMaxCap'
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
        $this->container['minCap'] = isset($data['minCap']) ? $data['minCap'] : null;
        $this->container['maxCap'] = isset($data['maxCap']) ? $data['maxCap'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['minCap'] === null) {
            $invalidProperties[] = "'minCap' can't be null";
        }
        if ($this->container['maxCap'] === null) {
            $invalidProperties[] = "'maxCap' can't be null";
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
    * Gets minCap
    *  Serverless型实例的最小算力，单位RCU，范围0.5~8，步进0.5。
    *
    * @return string
    */
    public function getMinCap()
    {
        return $this->container['minCap'];
    }

    /**
    * Sets minCap
    *
    * @param string $minCap Serverless型实例的最小算力，单位RCU，范围0.5~8，步进0.5。
    *
    * @return $this
    */
    public function setMinCap($minCap)
    {
        $this->container['minCap'] = $minCap;
        return $this;
    }

    /**
    * Gets maxCap
    *  Serverless型实例的最大算力，单位RCU，范围0.5~8，步进0.5。
    *
    * @return string
    */
    public function getMaxCap()
    {
        return $this->container['maxCap'];
    }

    /**
    * Sets maxCap
    *
    * @param string $maxCap Serverless型实例的最大算力，单位RCU，范围0.5~8，步进0.5。
    *
    * @return $this
    */
    public function setMaxCap($maxCap)
    {
        $this->container['maxCap'] = $maxCap;
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

