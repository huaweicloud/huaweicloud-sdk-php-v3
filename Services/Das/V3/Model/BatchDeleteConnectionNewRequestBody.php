<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeleteConnectionNewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeleteConnectionNewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deleteAll  是否删除所有连接
    * connectionIds  连接ID列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deleteAll' => 'bool',
            'connectionIds' => '\HuaweiCloud\SDK\Das\V3\Model\ConnectionIdsItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deleteAll  是否删除所有连接
    * connectionIds  连接ID列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deleteAll' => null,
        'connectionIds' => null
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
    * deleteAll  是否删除所有连接
    * connectionIds  连接ID列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deleteAll' => 'delete_all',
            'connectionIds' => 'connection_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deleteAll  是否删除所有连接
    * connectionIds  连接ID列表
    *
    * @var string[]
    */
    protected static $setters = [
            'deleteAll' => 'setDeleteAll',
            'connectionIds' => 'setConnectionIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deleteAll  是否删除所有连接
    * connectionIds  连接ID列表
    *
    * @var string[]
    */
    protected static $getters = [
            'deleteAll' => 'getDeleteAll',
            'connectionIds' => 'getConnectionIds'
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
        $this->container['deleteAll'] = isset($data['deleteAll']) ? $data['deleteAll'] : null;
        $this->container['connectionIds'] = isset($data['connectionIds']) ? $data['connectionIds'] : null;
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
    * Gets deleteAll
    *  是否删除所有连接
    *
    * @return bool|null
    */
    public function getDeleteAll()
    {
        return $this->container['deleteAll'];
    }

    /**
    * Sets deleteAll
    *
    * @param bool|null $deleteAll 是否删除所有连接
    *
    * @return $this
    */
    public function setDeleteAll($deleteAll)
    {
        $this->container['deleteAll'] = $deleteAll;
        return $this;
    }

    /**
    * Gets connectionIds
    *  连接ID列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ConnectionIdsItem[]|null
    */
    public function getConnectionIds()
    {
        return $this->container['connectionIds'];
    }

    /**
    * Sets connectionIds
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ConnectionIdsItem[]|null $connectionIds 连接ID列表
    *
    * @return $this
    */
    public function setConnectionIds($connectionIds)
    {
        $this->container['connectionIds'] = $connectionIds;
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

