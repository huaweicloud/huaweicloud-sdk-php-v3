<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtensionsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtensionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  插件名称。
    * databaseName  数据库名称。
    * version  插件版本。
    * sharedPreloadLibraries  依赖预加载库。
    * created  是否创建。
    * description  插件描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'databaseName' => 'string',
            'version' => 'string',
            'sharedPreloadLibraries' => 'string',
            'created' => 'bool',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  插件名称。
    * databaseName  数据库名称。
    * version  插件版本。
    * sharedPreloadLibraries  依赖预加载库。
    * created  是否创建。
    * description  插件描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'databaseName' => null,
        'version' => null,
        'sharedPreloadLibraries' => null,
        'created' => null,
        'description' => null
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
    * name  插件名称。
    * databaseName  数据库名称。
    * version  插件版本。
    * sharedPreloadLibraries  依赖预加载库。
    * created  是否创建。
    * description  插件描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'databaseName' => 'database_name',
            'version' => 'version',
            'sharedPreloadLibraries' => 'shared_preload_libraries',
            'created' => 'created',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  插件名称。
    * databaseName  数据库名称。
    * version  插件版本。
    * sharedPreloadLibraries  依赖预加载库。
    * created  是否创建。
    * description  插件描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'databaseName' => 'setDatabaseName',
            'version' => 'setVersion',
            'sharedPreloadLibraries' => 'setSharedPreloadLibraries',
            'created' => 'setCreated',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  插件名称。
    * databaseName  数据库名称。
    * version  插件版本。
    * sharedPreloadLibraries  依赖预加载库。
    * created  是否创建。
    * description  插件描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'databaseName' => 'getDatabaseName',
            'version' => 'getVersion',
            'sharedPreloadLibraries' => 'getSharedPreloadLibraries',
            'created' => 'getCreated',
            'description' => 'getDescription'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['sharedPreloadLibraries'] = isset($data['sharedPreloadLibraries']) ? $data['sharedPreloadLibraries'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
    * Gets name
    *  插件名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 插件名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名称。
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 数据库名称。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets version
    *  插件版本。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 插件版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets sharedPreloadLibraries
    *  依赖预加载库。
    *
    * @return string|null
    */
    public function getSharedPreloadLibraries()
    {
        return $this->container['sharedPreloadLibraries'];
    }

    /**
    * Sets sharedPreloadLibraries
    *
    * @param string|null $sharedPreloadLibraries 依赖预加载库。
    *
    * @return $this
    */
    public function setSharedPreloadLibraries($sharedPreloadLibraries)
    {
        $this->container['sharedPreloadLibraries'] = $sharedPreloadLibraries;
        return $this;
    }

    /**
    * Gets created
    *  是否创建。
    *
    * @return bool|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param bool|null $created 是否创建。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets description
    *  插件描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 插件描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

