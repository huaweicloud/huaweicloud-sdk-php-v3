<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesDatastoreResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesDatastoreResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  数据库引擎。
    * version  数据库版本号。
    * patchAvailable  是否有补丁版本的数据库支持升级，返回true时可以通过升级补丁接口进行数据库升级，否则不允许升级补丁。
    * wholeVersion  数据库的完整版本号(目前只有GeminiDB Cassandra支持)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'version' => 'string',
            'patchAvailable' => 'bool',
            'wholeVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  数据库引擎。
    * version  数据库版本号。
    * patchAvailable  是否有补丁版本的数据库支持升级，返回true时可以通过升级补丁接口进行数据库升级，否则不允许升级补丁。
    * wholeVersion  数据库的完整版本号(目前只有GeminiDB Cassandra支持)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'version' => null,
        'patchAvailable' => null,
        'wholeVersion' => null
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
    * type  数据库引擎。
    * version  数据库版本号。
    * patchAvailable  是否有补丁版本的数据库支持升级，返回true时可以通过升级补丁接口进行数据库升级，否则不允许升级补丁。
    * wholeVersion  数据库的完整版本号(目前只有GeminiDB Cassandra支持)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'version' => 'version',
            'patchAvailable' => 'patch_available',
            'wholeVersion' => 'whole_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  数据库引擎。
    * version  数据库版本号。
    * patchAvailable  是否有补丁版本的数据库支持升级，返回true时可以通过升级补丁接口进行数据库升级，否则不允许升级补丁。
    * wholeVersion  数据库的完整版本号(目前只有GeminiDB Cassandra支持)。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'version' => 'setVersion',
            'patchAvailable' => 'setPatchAvailable',
            'wholeVersion' => 'setWholeVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  数据库引擎。
    * version  数据库版本号。
    * patchAvailable  是否有补丁版本的数据库支持升级，返回true时可以通过升级补丁接口进行数据库升级，否则不允许升级补丁。
    * wholeVersion  数据库的完整版本号(目前只有GeminiDB Cassandra支持)。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'version' => 'getVersion',
            'patchAvailable' => 'getPatchAvailable',
            'wholeVersion' => 'getWholeVersion'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['patchAvailable'] = isset($data['patchAvailable']) ? $data['patchAvailable'] : null;
        $this->container['wholeVersion'] = isset($data['wholeVersion']) ? $data['wholeVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['patchAvailable'] === null) {
            $invalidProperties[] = "'patchAvailable' can't be null";
        }
        if ($this->container['wholeVersion'] === null) {
            $invalidProperties[] = "'wholeVersion' can't be null";
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
    * Gets type
    *  数据库引擎。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 数据库引擎。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets version
    *  数据库版本号。
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 数据库版本号。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets patchAvailable
    *  是否有补丁版本的数据库支持升级，返回true时可以通过升级补丁接口进行数据库升级，否则不允许升级补丁。
    *
    * @return bool
    */
    public function getPatchAvailable()
    {
        return $this->container['patchAvailable'];
    }

    /**
    * Sets patchAvailable
    *
    * @param bool $patchAvailable 是否有补丁版本的数据库支持升级，返回true时可以通过升级补丁接口进行数据库升级，否则不允许升级补丁。
    *
    * @return $this
    */
    public function setPatchAvailable($patchAvailable)
    {
        $this->container['patchAvailable'] = $patchAvailable;
        return $this;
    }

    /**
    * Gets wholeVersion
    *  数据库的完整版本号(目前只有GeminiDB Cassandra支持)。
    *
    * @return string
    */
    public function getWholeVersion()
    {
        return $this->container['wholeVersion'];
    }

    /**
    * Sets wholeVersion
    *
    * @param string $wholeVersion 数据库的完整版本号(目前只有GeminiDB Cassandra支持)。
    *
    * @return $this
    */
    public function setWholeVersion($wholeVersion)
    {
        $this->container['wholeVersion'] = $wholeVersion;
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

