<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlLimitingRecordInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlLimitingRecordInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * itemId  SQL限流规则ID
    * type  SQL类型
    * keyStr  限流规则
    * maxConnection  最大并发数
    * maxWaiting  最大等待时间
    * curConnection  当前并发数
    * curReject  当前拦截数
    * totalReject  总拦截数
    * createAt  创建时间
    * queryId  PostgreSQL限流语句标准化后唯一标识
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'itemId' => 'string',
            'type' => 'string',
            'keyStr' => 'string',
            'maxConnection' => 'string',
            'maxWaiting' => 'string',
            'curConnection' => 'int',
            'curReject' => 'int',
            'totalReject' => 'int',
            'createAt' => 'string',
            'queryId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * itemId  SQL限流规则ID
    * type  SQL类型
    * keyStr  限流规则
    * maxConnection  最大并发数
    * maxWaiting  最大等待时间
    * curConnection  当前并发数
    * curReject  当前拦截数
    * totalReject  总拦截数
    * createAt  创建时间
    * queryId  PostgreSQL限流语句标准化后唯一标识
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'itemId' => null,
        'type' => null,
        'keyStr' => null,
        'maxConnection' => null,
        'maxWaiting' => null,
        'curConnection' => 'int32',
        'curReject' => 'int32',
        'totalReject' => 'int32',
        'createAt' => null,
        'queryId' => null
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
    * itemId  SQL限流规则ID
    * type  SQL类型
    * keyStr  限流规则
    * maxConnection  最大并发数
    * maxWaiting  最大等待时间
    * curConnection  当前并发数
    * curReject  当前拦截数
    * totalReject  总拦截数
    * createAt  创建时间
    * queryId  PostgreSQL限流语句标准化后唯一标识
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'itemId' => 'item_id',
            'type' => 'type',
            'keyStr' => 'key_str',
            'maxConnection' => 'max_connection',
            'maxWaiting' => 'max_waiting',
            'curConnection' => 'cur_connection',
            'curReject' => 'cur_reject',
            'totalReject' => 'total_reject',
            'createAt' => 'create_at',
            'queryId' => 'query_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * itemId  SQL限流规则ID
    * type  SQL类型
    * keyStr  限流规则
    * maxConnection  最大并发数
    * maxWaiting  最大等待时间
    * curConnection  当前并发数
    * curReject  当前拦截数
    * totalReject  总拦截数
    * createAt  创建时间
    * queryId  PostgreSQL限流语句标准化后唯一标识
    *
    * @var string[]
    */
    protected static $setters = [
            'itemId' => 'setItemId',
            'type' => 'setType',
            'keyStr' => 'setKeyStr',
            'maxConnection' => 'setMaxConnection',
            'maxWaiting' => 'setMaxWaiting',
            'curConnection' => 'setCurConnection',
            'curReject' => 'setCurReject',
            'totalReject' => 'setTotalReject',
            'createAt' => 'setCreateAt',
            'queryId' => 'setQueryId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * itemId  SQL限流规则ID
    * type  SQL类型
    * keyStr  限流规则
    * maxConnection  最大并发数
    * maxWaiting  最大等待时间
    * curConnection  当前并发数
    * curReject  当前拦截数
    * totalReject  总拦截数
    * createAt  创建时间
    * queryId  PostgreSQL限流语句标准化后唯一标识
    *
    * @var string[]
    */
    protected static $getters = [
            'itemId' => 'getItemId',
            'type' => 'getType',
            'keyStr' => 'getKeyStr',
            'maxConnection' => 'getMaxConnection',
            'maxWaiting' => 'getMaxWaiting',
            'curConnection' => 'getCurConnection',
            'curReject' => 'getCurReject',
            'totalReject' => 'getTotalReject',
            'createAt' => 'getCreateAt',
            'queryId' => 'getQueryId'
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
        $this->container['itemId'] = isset($data['itemId']) ? $data['itemId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['keyStr'] = isset($data['keyStr']) ? $data['keyStr'] : null;
        $this->container['maxConnection'] = isset($data['maxConnection']) ? $data['maxConnection'] : null;
        $this->container['maxWaiting'] = isset($data['maxWaiting']) ? $data['maxWaiting'] : null;
        $this->container['curConnection'] = isset($data['curConnection']) ? $data['curConnection'] : null;
        $this->container['curReject'] = isset($data['curReject']) ? $data['curReject'] : null;
        $this->container['totalReject'] = isset($data['totalReject']) ? $data['totalReject'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['queryId'] = isset($data['queryId']) ? $data['queryId'] : null;
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
    * Gets itemId
    *  SQL限流规则ID
    *
    * @return string|null
    */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
    * Sets itemId
    *
    * @param string|null $itemId SQL限流规则ID
    *
    * @return $this
    */
    public function setItemId($itemId)
    {
        $this->container['itemId'] = $itemId;
        return $this;
    }

    /**
    * Gets type
    *  SQL类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type SQL类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets keyStr
    *  限流规则
    *
    * @return string|null
    */
    public function getKeyStr()
    {
        return $this->container['keyStr'];
    }

    /**
    * Sets keyStr
    *
    * @param string|null $keyStr 限流规则
    *
    * @return $this
    */
    public function setKeyStr($keyStr)
    {
        $this->container['keyStr'] = $keyStr;
        return $this;
    }

    /**
    * Gets maxConnection
    *  最大并发数
    *
    * @return string|null
    */
    public function getMaxConnection()
    {
        return $this->container['maxConnection'];
    }

    /**
    * Sets maxConnection
    *
    * @param string|null $maxConnection 最大并发数
    *
    * @return $this
    */
    public function setMaxConnection($maxConnection)
    {
        $this->container['maxConnection'] = $maxConnection;
        return $this;
    }

    /**
    * Gets maxWaiting
    *  最大等待时间
    *
    * @return string|null
    */
    public function getMaxWaiting()
    {
        return $this->container['maxWaiting'];
    }

    /**
    * Sets maxWaiting
    *
    * @param string|null $maxWaiting 最大等待时间
    *
    * @return $this
    */
    public function setMaxWaiting($maxWaiting)
    {
        $this->container['maxWaiting'] = $maxWaiting;
        return $this;
    }

    /**
    * Gets curConnection
    *  当前并发数
    *
    * @return int|null
    */
    public function getCurConnection()
    {
        return $this->container['curConnection'];
    }

    /**
    * Sets curConnection
    *
    * @param int|null $curConnection 当前并发数
    *
    * @return $this
    */
    public function setCurConnection($curConnection)
    {
        $this->container['curConnection'] = $curConnection;
        return $this;
    }

    /**
    * Gets curReject
    *  当前拦截数
    *
    * @return int|null
    */
    public function getCurReject()
    {
        return $this->container['curReject'];
    }

    /**
    * Sets curReject
    *
    * @param int|null $curReject 当前拦截数
    *
    * @return $this
    */
    public function setCurReject($curReject)
    {
        $this->container['curReject'] = $curReject;
        return $this;
    }

    /**
    * Gets totalReject
    *  总拦截数
    *
    * @return int|null
    */
    public function getTotalReject()
    {
        return $this->container['totalReject'];
    }

    /**
    * Sets totalReject
    *
    * @param int|null $totalReject 总拦截数
    *
    * @return $this
    */
    public function setTotalReject($totalReject)
    {
        $this->container['totalReject'] = $totalReject;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt 创建时间
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets queryId
    *  PostgreSQL限流语句标准化后唯一标识
    *
    * @return string|null
    */
    public function getQueryId()
    {
        return $this->container['queryId'];
    }

    /**
    * Sets queryId
    *
    * @param string|null $queryId PostgreSQL限流语句标准化后唯一标识
    *
    * @return $this
    */
    public function setQueryId($queryId)
    {
        $this->container['queryId'] = $queryId;
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

