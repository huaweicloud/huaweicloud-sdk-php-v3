<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteDatabaseRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteDatabaseRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseName  删除的数据库名称。
    * async  async
    * cascade  cascade
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseName' => 'string',
            'async' => 'bool',
            'cascade' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseName  删除的数据库名称。
    * async  async
    * cascade  cascade
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseName' => null,
        'async' => null,
        'cascade' => null
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
    * databaseName  删除的数据库名称。
    * async  async
    * cascade  cascade
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseName' => 'database_name',
            'async' => 'async',
            'cascade' => 'cascade'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseName  删除的数据库名称。
    * async  async
    * cascade  cascade
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseName' => 'setDatabaseName',
            'async' => 'setAsync',
            'cascade' => 'setCascade'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseName  删除的数据库名称。
    * async  async
    * cascade  cascade
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseName' => 'getDatabaseName',
            'async' => 'getAsync',
            'cascade' => 'getCascade'
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
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['async'] = isset($data['async']) ? $data['async'] : null;
        $this->container['cascade'] = isset($data['cascade']) ? $data['cascade'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
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
    * Gets databaseName
    *  删除的数据库名称。
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName 删除的数据库名称。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets async
    *  async
    *
    * @return bool|null
    */
    public function getAsync()
    {
        return $this->container['async'];
    }

    /**
    * Sets async
    *
    * @param bool|null $async async
    *
    * @return $this
    */
    public function setAsync($async)
    {
        $this->container['async'] = $async;
        return $this;
    }

    /**
    * Gets cascade
    *  cascade
    *
    * @return bool|null
    */
    public function getCascade()
    {
        return $this->container['cascade'];
    }

    /**
    * Sets cascade
    *
    * @param bool|null $cascade cascade
    *
    * @return $this
    */
    public function setCascade($cascade)
    {
        $this->container['cascade'] = $cascade;
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

