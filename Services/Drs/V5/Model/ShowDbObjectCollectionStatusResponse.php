<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDbObjectCollectionStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDbObjectCollectionStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetRootDb  targetRootDb
    * objectInfo  数据库对象迁移或同步信息。
    * maxTableNum  库下表数量的阈值。
    * status  获取提交查询对象选择信息的状态
    * id  任务id
    * objectScope  该数据库在实时同步场景下的类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetRootDb' => '\HuaweiCloud\SDK\Drs\V5\Model\TargetRootDb',
            'objectInfo' => 'map[string,\HuaweiCloud\SDK\Drs\V5\Model\DatabaseObject]',
            'maxTableNum' => 'int',
            'status' => 'string',
            'id' => 'string',
            'objectScope' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetRootDb  targetRootDb
    * objectInfo  数据库对象迁移或同步信息。
    * maxTableNum  库下表数量的阈值。
    * status  获取提交查询对象选择信息的状态
    * id  任务id
    * objectScope  该数据库在实时同步场景下的类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetRootDb' => null,
        'objectInfo' => null,
        'maxTableNum' => 'int32',
        'status' => null,
        'id' => null,
        'objectScope' => null
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
    * targetRootDb  targetRootDb
    * objectInfo  数据库对象迁移或同步信息。
    * maxTableNum  库下表数量的阈值。
    * status  获取提交查询对象选择信息的状态
    * id  任务id
    * objectScope  该数据库在实时同步场景下的类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetRootDb' => 'target_root_db',
            'objectInfo' => 'object_info',
            'maxTableNum' => 'max_table_num',
            'status' => 'status',
            'id' => 'id',
            'objectScope' => 'object_scope'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetRootDb  targetRootDb
    * objectInfo  数据库对象迁移或同步信息。
    * maxTableNum  库下表数量的阈值。
    * status  获取提交查询对象选择信息的状态
    * id  任务id
    * objectScope  该数据库在实时同步场景下的类型
    *
    * @var string[]
    */
    protected static $setters = [
            'targetRootDb' => 'setTargetRootDb',
            'objectInfo' => 'setObjectInfo',
            'maxTableNum' => 'setMaxTableNum',
            'status' => 'setStatus',
            'id' => 'setId',
            'objectScope' => 'setObjectScope'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetRootDb  targetRootDb
    * objectInfo  数据库对象迁移或同步信息。
    * maxTableNum  库下表数量的阈值。
    * status  获取提交查询对象选择信息的状态
    * id  任务id
    * objectScope  该数据库在实时同步场景下的类型
    *
    * @var string[]
    */
    protected static $getters = [
            'targetRootDb' => 'getTargetRootDb',
            'objectInfo' => 'getObjectInfo',
            'maxTableNum' => 'getMaxTableNum',
            'status' => 'getStatus',
            'id' => 'getId',
            'objectScope' => 'getObjectScope'
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
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';
    const STATUS_PENDING = 'pending';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
            self::STATUS_PENDING,
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
        $this->container['targetRootDb'] = isset($data['targetRootDb']) ? $data['targetRootDb'] : null;
        $this->container['objectInfo'] = isset($data['objectInfo']) ? $data['objectInfo'] : null;
        $this->container['maxTableNum'] = isset($data['maxTableNum']) ? $data['maxTableNum'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['objectScope'] = isset($data['objectScope']) ? $data['objectScope'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets targetRootDb
    *  targetRootDb
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\TargetRootDb|null
    */
    public function getTargetRootDb()
    {
        return $this->container['targetRootDb'];
    }

    /**
    * Sets targetRootDb
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\TargetRootDb|null $targetRootDb targetRootDb
    *
    * @return $this
    */
    public function setTargetRootDb($targetRootDb)
    {
        $this->container['targetRootDb'] = $targetRootDb;
        return $this;
    }

    /**
    * Gets objectInfo
    *  数据库对象迁移或同步信息。
    *
    * @return map[string,\HuaweiCloud\SDK\Drs\V5\Model\DatabaseObject]|null
    */
    public function getObjectInfo()
    {
        return $this->container['objectInfo'];
    }

    /**
    * Sets objectInfo
    *
    * @param map[string,\HuaweiCloud\SDK\Drs\V5\Model\DatabaseObject]|null $objectInfo 数据库对象迁移或同步信息。
    *
    * @return $this
    */
    public function setObjectInfo($objectInfo)
    {
        $this->container['objectInfo'] = $objectInfo;
        return $this;
    }

    /**
    * Gets maxTableNum
    *  库下表数量的阈值。
    *
    * @return int|null
    */
    public function getMaxTableNum()
    {
        return $this->container['maxTableNum'];
    }

    /**
    * Sets maxTableNum
    *
    * @param int|null $maxTableNum 库下表数量的阈值。
    *
    * @return $this
    */
    public function setMaxTableNum($maxTableNum)
    {
        $this->container['maxTableNum'] = $maxTableNum;
        return $this;
    }

    /**
    * Gets status
    *  获取提交查询对象选择信息的状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 获取提交查询对象选择信息的状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets id
    *  任务id
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
    * @param string|null $id 任务id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets objectScope
    *  该数据库在实时同步场景下的类型
    *
    * @return string|null
    */
    public function getObjectScope()
    {
        return $this->container['objectScope'];
    }

    /**
    * Sets objectScope
    *
    * @param string|null $objectScope 该数据库在实时同步场景下的类型
    *
    * @return $this
    */
    public function setObjectScope($objectScope)
    {
        $this->container['objectScope'] = $objectScope;
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

