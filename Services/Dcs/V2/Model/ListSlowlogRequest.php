<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSlowlogRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSlowlogRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示的条目数量。
    * sortKey  返回结果按该关键字排序，支持start_time，duration，默认为“start_time”
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）
    * startTime  查询开始时间，时间为UTC时间的Unix时间戳。如：1598803200000。
    * endTime  查询结束时间，时间为UTC时间的Unix时间戳。如：1599494399000。
    * role  查询节点，分为proxy和server。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'role' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示的条目数量。
    * sortKey  返回结果按该关键字排序，支持start_time，duration，默认为“start_time”
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）
    * startTime  查询开始时间，时间为UTC时间的Unix时间戳。如：1598803200000。
    * endTime  查询结束时间，时间为UTC时间的Unix时间戳。如：1599494399000。
    * role  查询节点，分为proxy和server。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'offset' => null,
        'limit' => null,
        'sortKey' => null,
        'sortDir' => null,
        'startTime' => null,
        'endTime' => null,
        'role' => null
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
    * instanceId  实例ID。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示的条目数量。
    * sortKey  返回结果按该关键字排序，支持start_time，duration，默认为“start_time”
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）
    * startTime  查询开始时间，时间为UTC时间的Unix时间戳。如：1598803200000。
    * endTime  查询结束时间，时间为UTC时间的Unix时间戳。如：1599494399000。
    * role  查询节点，分为proxy和server。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'role' => 'role'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示的条目数量。
    * sortKey  返回结果按该关键字排序，支持start_time，duration，默认为“start_time”
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）
    * startTime  查询开始时间，时间为UTC时间的Unix时间戳。如：1598803200000。
    * endTime  查询结束时间，时间为UTC时间的Unix时间戳。如：1599494399000。
    * role  查询节点，分为proxy和server。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'role' => 'setRole'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0
    * limit  每页显示的条目数量。
    * sortKey  返回结果按该关键字排序，支持start_time，duration，默认为“start_time”
    * sortDir  降序或升序（分别对应desc和asc，默认为“desc”）
    * startTime  查询开始时间，时间为UTC时间的Unix时间戳。如：1598803200000。
    * endTime  查询结束时间，时间为UTC时间的Unix时间戳。如：1599494399000。
    * role  查询节点，分为proxy和server。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'role' => 'getRole'
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
    const SORT_KEY_START_TIME = 'start_time';
    const SORT_KEY_DURATION = 'duration';
    const SORT_DIR_DESC = 'desc';
    const SORT_DIR_ASC = 'asc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortKeyAllowableValues()
    {
        return [
            self::SORT_KEY_START_TIME,
            self::SORT_KEY_DURATION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_DESC,
            self::SORT_DIR_ASC,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            $allowedValues = $this->getSortKeyAllowableValues();
                if (!is_null($this->container['sortKey']) && !in_array($this->container['sortKey'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortKey', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortDirAllowableValues();
                if (!is_null($this->container['sortDir']) && !in_array($this->container['sortDir'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortDir', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    * Gets instanceId
    *  实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询， offset大于等于0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，表示从此偏移量开始查询， offset大于等于0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条目数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortKey
    *  返回结果按该关键字排序，支持start_time，duration，默认为“start_time”
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 返回结果按该关键字排序，支持start_time，duration，默认为“start_time”
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  降序或升序（分别对应desc和asc，默认为“desc”）
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 降序或升序（分别对应desc和asc，默认为“desc”）
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets startTime
    *  查询开始时间，时间为UTC时间的Unix时间戳。如：1598803200000。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 查询开始时间，时间为UTC时间的Unix时间戳。如：1598803200000。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  查询结束时间，时间为UTC时间的Unix时间戳。如：1599494399000。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 查询结束时间，时间为UTC时间的Unix时间戳。如：1599494399000。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets role
    *  查询节点，分为proxy和server。
    *
    * @return string|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param string|null $role 查询节点，分为proxy和server。
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
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

