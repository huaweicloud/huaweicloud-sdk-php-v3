<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSnapshots4ApiRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSnapshots4ApiRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * connectionId  连接ID
    * module  模块
    * startAt  开始时间（Unix时间戳，毫秒）
    * endAt  结束时间（Unix时间戳，毫秒）
    * perPage  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'connectionId' => 'string',
            'module' => 'int',
            'startAt' => 'int',
            'endAt' => 'int',
            'perPage' => 'int',
            'curPage' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * connectionId  连接ID
    * module  模块
    * startAt  开始时间（Unix时间戳，毫秒）
    * endAt  结束时间（Unix时间戳，毫秒）
    * perPage  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'connectionId' => null,
        'module' => 'int32',
        'startAt' => 'int64',
        'endAt' => 'int64',
        'perPage' => 'int32',
        'curPage' => 'int32'
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
    * connectionId  连接ID
    * module  模块
    * startAt  开始时间（Unix时间戳，毫秒）
    * endAt  结束时间（Unix时间戳，毫秒）
    * perPage  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'connectionId' => 'connection_id',
            'module' => 'module',
            'startAt' => 'start_at',
            'endAt' => 'end_at',
            'perPage' => 'per_page',
            'curPage' => 'cur_page'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * connectionId  连接ID
    * module  模块
    * startAt  开始时间（Unix时间戳，毫秒）
    * endAt  结束时间（Unix时间戳，毫秒）
    * perPage  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $setters = [
            'connectionId' => 'setConnectionId',
            'module' => 'setModule',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt',
            'perPage' => 'setPerPage',
            'curPage' => 'setCurPage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * connectionId  连接ID
    * module  模块
    * startAt  开始时间（Unix时间戳，毫秒）
    * endAt  结束时间（Unix时间戳，毫秒）
    * perPage  每页记录数
    * curPage  当前页码
    *
    * @var string[]
    */
    protected static $getters = [
            'connectionId' => 'getConnectionId',
            'module' => 'getModule',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt',
            'perPage' => 'getPerPage',
            'curPage' => 'getCurPage'
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
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
        $this->container['curPage'] = isset($data['curPage']) ? $data['curPage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['connectionId'] === null) {
            $invalidProperties[] = "'connectionId' can't be null";
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
    * Gets connectionId
    *  连接ID
    *
    * @return string
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string $connectionId 连接ID
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
        return $this;
    }

    /**
    * Gets module
    *  模块
    *
    * @return int|null
    */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
    * Sets module
    *
    * @param int|null $module 模块
    *
    * @return $this
    */
    public function setModule($module)
    {
        $this->container['module'] = $module;
        return $this;
    }

    /**
    * Gets startAt
    *  开始时间（Unix时间戳，毫秒）
    *
    * @return int|null
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int|null $startAt 开始时间（Unix时间戳，毫秒）
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  结束时间（Unix时间戳，毫秒）
    *
    * @return int|null
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int|null $endAt 结束时间（Unix时间戳，毫秒）
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
        return $this;
    }

    /**
    * Gets perPage
    *  每页记录数
    *
    * @return int|null
    */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
    * Sets perPage
    *
    * @param int|null $perPage 每页记录数
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
        return $this;
    }

    /**
    * Gets curPage
    *  当前页码
    *
    * @return int|null
    */
    public function getCurPage()
    {
        return $this->container['curPage'];
    }

    /**
    * Sets curPage
    *
    * @param int|null $curPage 当前页码
    *
    * @return $this
    */
    public function setCurPage($curPage)
    {
        $this->container['curPage'] = $curPage;
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

