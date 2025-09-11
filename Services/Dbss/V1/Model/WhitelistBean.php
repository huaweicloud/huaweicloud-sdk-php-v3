<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WhitelistBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WhitelistBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTimestampMs  创建时间
    * dbIds  数据库IDs
    * desc  描述
    * enabled  状态 - true:启用 - false: 禁用
    * id  记录ID
    * sql  SQL语句
    * updateTimestampMs  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTimestampMs' => 'int',
            'dbIds' => 'string[]',
            'desc' => 'string',
            'enabled' => 'bool',
            'id' => 'string',
            'sql' => 'string',
            'updateTimestampMs' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTimestampMs  创建时间
    * dbIds  数据库IDs
    * desc  描述
    * enabled  状态 - true:启用 - false: 禁用
    * id  记录ID
    * sql  SQL语句
    * updateTimestampMs  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTimestampMs' => 'int64',
        'dbIds' => null,
        'desc' => null,
        'enabled' => null,
        'id' => null,
        'sql' => null,
        'updateTimestampMs' => 'int64'
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
    * createTimestampMs  创建时间
    * dbIds  数据库IDs
    * desc  描述
    * enabled  状态 - true:启用 - false: 禁用
    * id  记录ID
    * sql  SQL语句
    * updateTimestampMs  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTimestampMs' => 'create_timestamp_ms',
            'dbIds' => 'db_ids',
            'desc' => 'desc',
            'enabled' => 'enabled',
            'id' => 'id',
            'sql' => 'sql',
            'updateTimestampMs' => 'update_timestamp_ms'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTimestampMs  创建时间
    * dbIds  数据库IDs
    * desc  描述
    * enabled  状态 - true:启用 - false: 禁用
    * id  记录ID
    * sql  SQL语句
    * updateTimestampMs  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'createTimestampMs' => 'setCreateTimestampMs',
            'dbIds' => 'setDbIds',
            'desc' => 'setDesc',
            'enabled' => 'setEnabled',
            'id' => 'setId',
            'sql' => 'setSql',
            'updateTimestampMs' => 'setUpdateTimestampMs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTimestampMs  创建时间
    * dbIds  数据库IDs
    * desc  描述
    * enabled  状态 - true:启用 - false: 禁用
    * id  记录ID
    * sql  SQL语句
    * updateTimestampMs  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'createTimestampMs' => 'getCreateTimestampMs',
            'dbIds' => 'getDbIds',
            'desc' => 'getDesc',
            'enabled' => 'getEnabled',
            'id' => 'getId',
            'sql' => 'getSql',
            'updateTimestampMs' => 'getUpdateTimestampMs'
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
        $this->container['createTimestampMs'] = isset($data['createTimestampMs']) ? $data['createTimestampMs'] : null;
        $this->container['dbIds'] = isset($data['dbIds']) ? $data['dbIds'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sql'] = isset($data['sql']) ? $data['sql'] : null;
        $this->container['updateTimestampMs'] = isset($data['updateTimestampMs']) ? $data['updateTimestampMs'] : null;
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
    * Gets createTimestampMs
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTimestampMs()
    {
        return $this->container['createTimestampMs'];
    }

    /**
    * Sets createTimestampMs
    *
    * @param int|null $createTimestampMs 创建时间
    *
    * @return $this
    */
    public function setCreateTimestampMs($createTimestampMs)
    {
        $this->container['createTimestampMs'] = $createTimestampMs;
        return $this;
    }

    /**
    * Gets dbIds
    *  数据库IDs
    *
    * @return string[]|null
    */
    public function getDbIds()
    {
        return $this->container['dbIds'];
    }

    /**
    * Sets dbIds
    *
    * @param string[]|null $dbIds 数据库IDs
    *
    * @return $this
    */
    public function setDbIds($dbIds)
    {
        $this->container['dbIds'] = $dbIds;
        return $this;
    }

    /**
    * Gets desc
    *  描述
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 描述
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets enabled
    *  状态 - true:启用 - false: 禁用
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 状态 - true:启用 - false: 禁用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets id
    *  记录ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 记录ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets sql
    *  SQL语句
    *
    * @return string|null
    */
    public function getSql()
    {
        return $this->container['sql'];
    }

    /**
    * Sets sql
    *
    * @param string|null $sql SQL语句
    *
    * @return $this
    */
    public function setSql($sql)
    {
        $this->container['sql'] = $sql;
        return $this;
    }

    /**
    * Gets updateTimestampMs
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTimestampMs()
    {
        return $this->container['updateTimestampMs'];
    }

    /**
    * Sets updateTimestampMs
    *
    * @param int|null $updateTimestampMs 更新时间
    *
    * @return $this
    */
    public function setUpdateTimestampMs($updateTimestampMs)
    {
        $this->container['updateTimestampMs'] = $updateTimestampMs;
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

