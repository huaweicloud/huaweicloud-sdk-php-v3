<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HwcRdsHa implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HwcRdsHa';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * replicationMode  备机同步参数。  取值：非空。  RDS for MySQL为“async”或“semisync”。 RDS for PostgreSQL为“async”或“sync”。 RDS for Microsoft SQL Server为“sync”。 说明： “async”为异步模式。 “semisync”为半同步模式。 “sync”为同步模式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'replicationMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * replicationMode  备机同步参数。  取值：非空。  RDS for MySQL为“async”或“semisync”。 RDS for PostgreSQL为“async”或“sync”。 RDS for Microsoft SQL Server为“sync”。 说明： “async”为异步模式。 “semisync”为半同步模式。 “sync”为同步模式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * replicationMode  备机同步参数。  取值：非空。  RDS for MySQL为“async”或“semisync”。 RDS for PostgreSQL为“async”或“sync”。 RDS for Microsoft SQL Server为“sync”。 说明： “async”为异步模式。 “semisync”为半同步模式。 “sync”为同步模式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'replicationMode' => 'replication_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * replicationMode  备机同步参数。  取值：非空。  RDS for MySQL为“async”或“semisync”。 RDS for PostgreSQL为“async”或“sync”。 RDS for Microsoft SQL Server为“sync”。 说明： “async”为异步模式。 “semisync”为半同步模式。 “sync”为同步模式。
    *
    * @var string[]
    */
    protected static $setters = [
            'replicationMode' => 'setReplicationMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * replicationMode  备机同步参数。  取值：非空。  RDS for MySQL为“async”或“semisync”。 RDS for PostgreSQL为“async”或“sync”。 RDS for Microsoft SQL Server为“sync”。 说明： “async”为异步模式。 “semisync”为半同步模式。 “sync”为同步模式。
    *
    * @var string[]
    */
    protected static $getters = [
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
        if ($this->container['replicationMode'] === null) {
            $invalidProperties[] = "'replicationMode' can't be null";
        }
            if ((mb_strlen($this->container['replicationMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'replicationMode', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['replicationMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'replicationMode', the character length must be bigger than or equal to 0.";
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
    * Gets replicationMode
    *  备机同步参数。  取值：非空。  RDS for MySQL为“async”或“semisync”。 RDS for PostgreSQL为“async”或“sync”。 RDS for Microsoft SQL Server为“sync”。 说明： “async”为异步模式。 “semisync”为半同步模式。 “sync”为同步模式。
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
    * @param string $replicationMode 备机同步参数。  取值：非空。  RDS for MySQL为“async”或“semisync”。 RDS for PostgreSQL为“async”或“sync”。 RDS for Microsoft SQL Server为“sync”。 说明： “async”为异步模式。 “semisync”为半同步模式。 “sync”为同步模式。
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

