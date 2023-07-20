<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHa implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHa';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * consistency  数据库一致性类型，分布式模式实例仅有。取值为“strong”、“eventual”，分别表示强一致性、最终一致性。
    * replicationMode  备机同步参数。  取值：非空。  GaussDB为 “sync” 说明： “sync”为同步模式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'consistency' => 'string',
            'replicationMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * consistency  数据库一致性类型，分布式模式实例仅有。取值为“strong”、“eventual”，分别表示强一致性、最终一致性。
    * replicationMode  备机同步参数。  取值：非空。  GaussDB为 “sync” 说明： “sync”为同步模式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'consistency' => null,
        'replicationMode' => null
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
    * consistency  数据库一致性类型，分布式模式实例仅有。取值为“strong”、“eventual”，分别表示强一致性、最终一致性。
    * replicationMode  备机同步参数。  取值：非空。  GaussDB为 “sync” 说明： “sync”为同步模式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'consistency' => 'consistency',
            'replicationMode' => 'replication_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * consistency  数据库一致性类型，分布式模式实例仅有。取值为“strong”、“eventual”，分别表示强一致性、最终一致性。
    * replicationMode  备机同步参数。  取值：非空。  GaussDB为 “sync” 说明： “sync”为同步模式。
    *
    * @var string[]
    */
    protected static $setters = [
            'consistency' => 'setConsistency',
            'replicationMode' => 'setReplicationMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * consistency  数据库一致性类型，分布式模式实例仅有。取值为“strong”、“eventual”，分别表示强一致性、最终一致性。
    * replicationMode  备机同步参数。  取值：非空。  GaussDB为 “sync” 说明： “sync”为同步模式。
    *
    * @var string[]
    */
    protected static $getters = [
            'consistency' => 'getConsistency',
            'replicationMode' => 'getReplicationMode'
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
    const CONSISTENCY_STRONG = 'strong';
    const CONSISTENCY_EVENTUAL = 'eventual';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConsistencyAllowableValues()
    {
        return [
            self::CONSISTENCY_STRONG,
            self::CONSISTENCY_EVENTUAL,
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
        $this->container['consistency'] = isset($data['consistency']) ? $data['consistency'] : null;
        $this->container['replicationMode'] = isset($data['replicationMode']) ? $data['replicationMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['consistency'] === null) {
            $invalidProperties[] = "'consistency' can't be null";
        }
            $allowedValues = $this->getConsistencyAllowableValues();
                if (!is_null($this->container['consistency']) && !in_array($this->container['consistency'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'consistency', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['replicationMode'] === null) {
            $invalidProperties[] = "'replicationMode' can't be null";
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
    * Gets consistency
    *  数据库一致性类型，分布式模式实例仅有。取值为“strong”、“eventual”，分别表示强一致性、最终一致性。
    *
    * @return string
    */
    public function getConsistency()
    {
        return $this->container['consistency'];
    }

    /**
    * Sets consistency
    *
    * @param string $consistency 数据库一致性类型，分布式模式实例仅有。取值为“strong”、“eventual”，分别表示强一致性、最终一致性。
    *
    * @return $this
    */
    public function setConsistency($consistency)
    {
        $this->container['consistency'] = $consistency;
        return $this;
    }

    /**
    * Gets replicationMode
    *  备机同步参数。  取值：非空。  GaussDB为 “sync” 说明： “sync”为同步模式。
    *
    * @return string
    */
    public function getReplicationMode()
    {
        return $this->container['replicationMode'];
    }

    /**
    * Sets replicationMode
    *
    * @param string $replicationMode 备机同步参数。  取值：非空。  GaussDB为 “sync” 说明： “sync”为同步模式。
    *
    * @return $this
    */
    public function setReplicationMode($replicationMode)
    {
        $this->container['replicationMode'] = $replicationMode;
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

