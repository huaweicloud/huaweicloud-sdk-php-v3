<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeSqlFilterRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeSqlFilterRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlType  Sql限流类型。  取值范围： - SELECT - UPDATE - DELETE
    * patterns  SQL限流具体规则。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlType' => 'string',
            'patterns' => '\HuaweiCloud\SDK\GaussDB\V3\Model\NodeSqlFilterRulePattern[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlType  Sql限流类型。  取值范围： - SELECT - UPDATE - DELETE
    * patterns  SQL限流具体规则。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlType' => null,
        'patterns' => null
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
    * sqlType  Sql限流类型。  取值范围： - SELECT - UPDATE - DELETE
    * patterns  SQL限流具体规则。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlType' => 'sql_type',
            'patterns' => 'patterns'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlType  Sql限流类型。  取值范围： - SELECT - UPDATE - DELETE
    * patterns  SQL限流具体规则。
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlType' => 'setSqlType',
            'patterns' => 'setPatterns'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlType  Sql限流类型。  取值范围： - SELECT - UPDATE - DELETE
    * patterns  SQL限流具体规则。
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlType' => 'getSqlType',
            'patterns' => 'getPatterns'
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
        $this->container['sqlType'] = isset($data['sqlType']) ? $data['sqlType'] : null;
        $this->container['patterns'] = isset($data['patterns']) ? $data['patterns'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sqlType'] === null) {
            $invalidProperties[] = "'sqlType' can't be null";
        }
        if ($this->container['patterns'] === null) {
            $invalidProperties[] = "'patterns' can't be null";
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
    * Gets sqlType
    *  Sql限流类型。  取值范围： - SELECT - UPDATE - DELETE
    *
    * @return string
    */
    public function getSqlType()
    {
        return $this->container['sqlType'];
    }

    /**
    * Sets sqlType
    *
    * @param string $sqlType Sql限流类型。  取值范围： - SELECT - UPDATE - DELETE
    *
    * @return $this
    */
    public function setSqlType($sqlType)
    {
        $this->container['sqlType'] = $sqlType;
        return $this;
    }

    /**
    * Gets patterns
    *  SQL限流具体规则。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\NodeSqlFilterRulePattern[]
    */
    public function getPatterns()
    {
        return $this->container['patterns'];
    }

    /**
    * Sets patterns
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\NodeSqlFilterRulePattern[] $patterns SQL限流具体规则。
    *
    * @return $this
    */
    public function setPatterns($patterns)
    {
        $this->container['patterns'] = $patterns;
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

