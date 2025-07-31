<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListContainerImageLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListContainerImageLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceName  资源名称
    * resourceType  资源类型
    * eventType  事件类型
    * eventName  事件名称
    * sourceIp  触发事件的源ip
    * userName  操作用户
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceName' => 'string',
            'resourceType' => 'string',
            'eventType' => 'string',
            'eventName' => 'string',
            'sourceIp' => 'string',
            'userName' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceName  资源名称
    * resourceType  资源类型
    * eventType  事件类型
    * eventName  事件名称
    * sourceIp  触发事件的源ip
    * userName  操作用户
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceName' => null,
        'resourceType' => null,
        'eventType' => null,
        'eventName' => null,
        'sourceIp' => null,
        'userName' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'limit' => 'int32',
        'offset' => 'int32'
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
    * resourceName  资源名称
    * resourceType  资源类型
    * eventType  事件类型
    * eventName  事件名称
    * sourceIp  触发事件的源ip
    * userName  操作用户
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceName' => 'resource_name',
            'resourceType' => 'resource_type',
            'eventType' => 'event_type',
            'eventName' => 'event_name',
            'sourceIp' => 'source_ip',
            'userName' => 'user_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceName  资源名称
    * resourceType  资源类型
    * eventType  事件类型
    * eventName  事件名称
    * sourceIp  触发事件的源ip
    * userName  操作用户
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceName' => 'setResourceName',
            'resourceType' => 'setResourceType',
            'eventType' => 'setEventType',
            'eventName' => 'setEventName',
            'sourceIp' => 'setSourceIp',
            'userName' => 'setUserName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceName  资源名称
    * resourceType  资源类型
    * eventType  事件类型
    * eventName  事件名称
    * sourceIp  触发事件的源ip
    * userName  操作用户
    * startTime  查询日志范围的最小时间
    * endTime  查询日志范围的最大时间
    * limit  每页显示个数，默认为10
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceName' => 'getResourceName',
            'resourceType' => 'getResourceType',
            'eventType' => 'getEventType',
            'eventName' => 'getEventName',
            'sourceIp' => 'getSourceIp',
            'userName' => 'getUserName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['sourceIp'] = isset($data['sourceIp']) ? $data['sourceIp'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceName']) && !preg_match("/^.*$/", $this->container['resourceName'])) {
                $invalidProperties[] = "invalid value for 'resourceName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceType']) && !preg_match("/^.*$/", $this->container['resourceType'])) {
                $invalidProperties[] = "invalid value for 'resourceType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['eventType']) && (mb_strlen($this->container['eventType']) > 64)) {
                $invalidProperties[] = "invalid value for 'eventType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['eventType']) && (mb_strlen($this->container['eventType']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventType']) && !preg_match("/^.*$/", $this->container['eventType'])) {
                $invalidProperties[] = "invalid value for 'eventType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) > 256)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['eventName']) && (mb_strlen($this->container['eventName']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['eventName']) && !preg_match("/^.*$/", $this->container['eventName'])) {
                $invalidProperties[] = "invalid value for 'eventName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['sourceIp']) && (mb_strlen($this->container['sourceIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceIp']) && (mb_strlen($this->container['sourceIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceIp']) && !preg_match("/^.*$/", $this->container['sourceIp'])) {
                $invalidProperties[] = "invalid value for 'sourceIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) > 64)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['userName']) && (mb_strlen($this->container['userName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userName']) && !preg_match("/^.*$/", $this->container['userName'])) {
                $invalidProperties[] = "invalid value for 'userName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
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
    * Gets resourceName
    *  资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型
    *
    * @return string|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string|null $eventType 事件类型
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets eventName
    *  事件名称
    *
    * @return string|null
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string|null $eventName 事件名称
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets sourceIp
    *  触发事件的源ip
    *
    * @return string|null
    */
    public function getSourceIp()
    {
        return $this->container['sourceIp'];
    }

    /**
    * Sets sourceIp
    *
    * @param string|null $sourceIp 触发事件的源ip
    *
    * @return $this
    */
    public function setSourceIp($sourceIp)
    {
        $this->container['sourceIp'] = $sourceIp;
        return $this;
    }

    /**
    * Gets userName
    *  操作用户
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 操作用户
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets startTime
    *  查询日志范围的最小时间
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 查询日志范围的最小时间
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
    *  查询日志范围的最大时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 查询日志范围的最大时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示个数，默认为10
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
    * @param int|null $limit 每页显示个数，默认为10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
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
    * @param int|null $offset 偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

