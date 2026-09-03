<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeadLockResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeadLockResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lockLabel  死锁标签（keylock、objectlock、ridlock、pagelock、compilelock）
    * dbId  数据库ID
    * dbName  数据库名称
    * indexName  索引名（仅keylock展示）
    * associatedObjectId  关联对象ID
    * objectName  对象名称，死锁名称
    * lockMode  锁模式
    * ownerList  持有者列表
    * waiterList  等待者列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lockLabel' => 'string',
            'dbId' => 'string',
            'dbName' => 'string',
            'indexName' => 'string',
            'associatedObjectId' => 'string',
            'objectName' => 'string',
            'lockMode' => 'string',
            'ownerList' => '\HuaweiCloud\SDK\Das\V3\Model\DeadLockObject[]',
            'waiterList' => '\HuaweiCloud\SDK\Das\V3\Model\DeadLockObject[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lockLabel  死锁标签（keylock、objectlock、ridlock、pagelock、compilelock）
    * dbId  数据库ID
    * dbName  数据库名称
    * indexName  索引名（仅keylock展示）
    * associatedObjectId  关联对象ID
    * objectName  对象名称，死锁名称
    * lockMode  锁模式
    * ownerList  持有者列表
    * waiterList  等待者列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lockLabel' => null,
        'dbId' => null,
        'dbName' => null,
        'indexName' => null,
        'associatedObjectId' => null,
        'objectName' => null,
        'lockMode' => null,
        'ownerList' => null,
        'waiterList' => null
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
    * lockLabel  死锁标签（keylock、objectlock、ridlock、pagelock、compilelock）
    * dbId  数据库ID
    * dbName  数据库名称
    * indexName  索引名（仅keylock展示）
    * associatedObjectId  关联对象ID
    * objectName  对象名称，死锁名称
    * lockMode  锁模式
    * ownerList  持有者列表
    * waiterList  等待者列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lockLabel' => 'lock_label',
            'dbId' => 'db_id',
            'dbName' => 'db_name',
            'indexName' => 'index_name',
            'associatedObjectId' => 'associated_object_id',
            'objectName' => 'object_name',
            'lockMode' => 'lock_mode',
            'ownerList' => 'owner_list',
            'waiterList' => 'waiter_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lockLabel  死锁标签（keylock、objectlock、ridlock、pagelock、compilelock）
    * dbId  数据库ID
    * dbName  数据库名称
    * indexName  索引名（仅keylock展示）
    * associatedObjectId  关联对象ID
    * objectName  对象名称，死锁名称
    * lockMode  锁模式
    * ownerList  持有者列表
    * waiterList  等待者列表
    *
    * @var string[]
    */
    protected static $setters = [
            'lockLabel' => 'setLockLabel',
            'dbId' => 'setDbId',
            'dbName' => 'setDbName',
            'indexName' => 'setIndexName',
            'associatedObjectId' => 'setAssociatedObjectId',
            'objectName' => 'setObjectName',
            'lockMode' => 'setLockMode',
            'ownerList' => 'setOwnerList',
            'waiterList' => 'setWaiterList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lockLabel  死锁标签（keylock、objectlock、ridlock、pagelock、compilelock）
    * dbId  数据库ID
    * dbName  数据库名称
    * indexName  索引名（仅keylock展示）
    * associatedObjectId  关联对象ID
    * objectName  对象名称，死锁名称
    * lockMode  锁模式
    * ownerList  持有者列表
    * waiterList  等待者列表
    *
    * @var string[]
    */
    protected static $getters = [
            'lockLabel' => 'getLockLabel',
            'dbId' => 'getDbId',
            'dbName' => 'getDbName',
            'indexName' => 'getIndexName',
            'associatedObjectId' => 'getAssociatedObjectId',
            'objectName' => 'getObjectName',
            'lockMode' => 'getLockMode',
            'ownerList' => 'getOwnerList',
            'waiterList' => 'getWaiterList'
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
        $this->container['lockLabel'] = isset($data['lockLabel']) ? $data['lockLabel'] : null;
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['indexName'] = isset($data['indexName']) ? $data['indexName'] : null;
        $this->container['associatedObjectId'] = isset($data['associatedObjectId']) ? $data['associatedObjectId'] : null;
        $this->container['objectName'] = isset($data['objectName']) ? $data['objectName'] : null;
        $this->container['lockMode'] = isset($data['lockMode']) ? $data['lockMode'] : null;
        $this->container['ownerList'] = isset($data['ownerList']) ? $data['ownerList'] : null;
        $this->container['waiterList'] = isset($data['waiterList']) ? $data['waiterList'] : null;
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
    * Gets lockLabel
    *  死锁标签（keylock、objectlock、ridlock、pagelock、compilelock）
    *
    * @return string|null
    */
    public function getLockLabel()
    {
        return $this->container['lockLabel'];
    }

    /**
    * Sets lockLabel
    *
    * @param string|null $lockLabel 死锁标签（keylock、objectlock、ridlock、pagelock、compilelock）
    *
    * @return $this
    */
    public function setLockLabel($lockLabel)
    {
        $this->container['lockLabel'] = $lockLabel;
        return $this;
    }

    /**
    * Gets dbId
    *  数据库ID
    *
    * @return string|null
    */
    public function getDbId()
    {
        return $this->container['dbId'];
    }

    /**
    * Sets dbId
    *
    * @param string|null $dbId 数据库ID
    *
    * @return $this
    */
    public function setDbId($dbId)
    {
        $this->container['dbId'] = $dbId;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets indexName
    *  索引名（仅keylock展示）
    *
    * @return string|null
    */
    public function getIndexName()
    {
        return $this->container['indexName'];
    }

    /**
    * Sets indexName
    *
    * @param string|null $indexName 索引名（仅keylock展示）
    *
    * @return $this
    */
    public function setIndexName($indexName)
    {
        $this->container['indexName'] = $indexName;
        return $this;
    }

    /**
    * Gets associatedObjectId
    *  关联对象ID
    *
    * @return string|null
    */
    public function getAssociatedObjectId()
    {
        return $this->container['associatedObjectId'];
    }

    /**
    * Sets associatedObjectId
    *
    * @param string|null $associatedObjectId 关联对象ID
    *
    * @return $this
    */
    public function setAssociatedObjectId($associatedObjectId)
    {
        $this->container['associatedObjectId'] = $associatedObjectId;
        return $this;
    }

    /**
    * Gets objectName
    *  对象名称，死锁名称
    *
    * @return string|null
    */
    public function getObjectName()
    {
        return $this->container['objectName'];
    }

    /**
    * Sets objectName
    *
    * @param string|null $objectName 对象名称，死锁名称
    *
    * @return $this
    */
    public function setObjectName($objectName)
    {
        $this->container['objectName'] = $objectName;
        return $this;
    }

    /**
    * Gets lockMode
    *  锁模式
    *
    * @return string|null
    */
    public function getLockMode()
    {
        return $this->container['lockMode'];
    }

    /**
    * Sets lockMode
    *
    * @param string|null $lockMode 锁模式
    *
    * @return $this
    */
    public function setLockMode($lockMode)
    {
        $this->container['lockMode'] = $lockMode;
        return $this;
    }

    /**
    * Gets ownerList
    *  持有者列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\DeadLockObject[]|null
    */
    public function getOwnerList()
    {
        return $this->container['ownerList'];
    }

    /**
    * Sets ownerList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\DeadLockObject[]|null $ownerList 持有者列表
    *
    * @return $this
    */
    public function setOwnerList($ownerList)
    {
        $this->container['ownerList'] = $ownerList;
        return $this;
    }

    /**
    * Gets waiterList
    *  等待者列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\DeadLockObject[]|null
    */
    public function getWaiterList()
    {
        return $this->container['waiterList'];
    }

    /**
    * Sets waiterList
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\DeadLockObject[]|null $waiterList 等待者列表
    *
    * @return $this
    */
    public function setWaiterList($waiterList)
    {
        $this->container['waiterList'] = $waiterList;
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

