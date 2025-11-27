<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class L4Limit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'L4Limit';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connection  **参数解释**：负载均衡实例的四层规格的最大并发连接数限速值。  **取值范围**：不涉及
    * cps  **参数解释**：负载均衡实例的四层规格的每秒新建连接数限速值。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connection' => 'int',
            'cps' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connection  **参数解释**：负载均衡实例的四层规格的最大并发连接数限速值。  **取值范围**：不涉及
    * cps  **参数解释**：负载均衡实例的四层规格的每秒新建连接数限速值。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connection' => 'int32',
        'cps' => 'int32'
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
    * connection  **参数解释**：负载均衡实例的四层规格的最大并发连接数限速值。  **取值范围**：不涉及
    * cps  **参数解释**：负载均衡实例的四层规格的每秒新建连接数限速值。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connection' => 'connection',
            'cps' => 'cps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connection  **参数解释**：负载均衡实例的四层规格的最大并发连接数限速值。  **取值范围**：不涉及
    * cps  **参数解释**：负载均衡实例的四层规格的每秒新建连接数限速值。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'connection' => 'setConnection',
            'cps' => 'setCps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connection  **参数解释**：负载均衡实例的四层规格的最大并发连接数限速值。  **取值范围**：不涉及
    * cps  **参数解释**：负载均衡实例的四层规格的每秒新建连接数限速值。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'connection' => 'getConnection',
            'cps' => 'getCps'
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
        $this->container['connection'] = isset($data['connection']) ? $data['connection'] : null;
        $this->container['cps'] = isset($data['cps']) ? $data['cps'] : null;
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
    * Gets connection
    *  **参数解释**：负载均衡实例的四层规格的最大并发连接数限速值。  **取值范围**：不涉及
    *
    * @return int|null
    */
    public function getConnection()
    {
        return $this->container['connection'];
    }

    /**
    * Sets connection
    *
    * @param int|null $connection **参数解释**：负载均衡实例的四层规格的最大并发连接数限速值。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setConnection($connection)
    {
        $this->container['connection'] = $connection;
        return $this;
    }

    /**
    * Gets cps
    *  **参数解释**：负载均衡实例的四层规格的每秒新建连接数限速值。  **取值范围**：不涉及
    *
    * @return int|null
    */
    public function getCps()
    {
        return $this->container['cps'];
    }

    /**
    * Sets cps
    *
    * @param int|null $cps **参数解释**：负载均衡实例的四层规格的每秒新建连接数限速值。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setCps($cps)
    {
        $this->container['cps'] = $cps;
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

