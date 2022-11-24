<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StackEventResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StackEventResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceIdKey  资源的id名称，即对应资源作为唯一id使用的值的名称，当资源未创建的时候，不返回resource_id_key
    * resourceIdValue  资源的id值，即对应资源作为唯一id使用的值，当资源未创建的时候，不返回resource_id_value
    * resourceName  资源的名称
    * resourceType  资源的类型
    * time  事件发生的时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * eventType  此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。详细信息将在EventMessage中存储。此为暂时状态， 因为目前我们无法解析terraform的log，只能直全部以LOG形式打出，未来我们吃掉terraform内核以后， 将去除这个状态，并改为下列的更精准的状态 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `DELETION_SKIPPED` - 跳过删除。未来我们将支持，用户可以从IaC中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * eventMessage  事件对应的详细信息
    * elapsedSeconds  资源改动所花的时间，以秒为单位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceIdKey' => 'string',
            'resourceIdValue' => 'string',
            'resourceName' => 'string',
            'resourceType' => 'string',
            'time' => 'string',
            'eventType' => 'string',
            'eventMessage' => 'string',
            'elapsedSeconds' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceIdKey  资源的id名称，即对应资源作为唯一id使用的值的名称，当资源未创建的时候，不返回resource_id_key
    * resourceIdValue  资源的id值，即对应资源作为唯一id使用的值，当资源未创建的时候，不返回resource_id_value
    * resourceName  资源的名称
    * resourceType  资源的类型
    * time  事件发生的时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * eventType  此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。详细信息将在EventMessage中存储。此为暂时状态， 因为目前我们无法解析terraform的log，只能直全部以LOG形式打出，未来我们吃掉terraform内核以后， 将去除这个状态，并改为下列的更精准的状态 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `DELETION_SKIPPED` - 跳过删除。未来我们将支持，用户可以从IaC中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * eventMessage  事件对应的详细信息
    * elapsedSeconds  资源改动所花的时间，以秒为单位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceIdKey' => null,
        'resourceIdValue' => null,
        'resourceName' => null,
        'resourceType' => null,
        'time' => null,
        'eventType' => null,
        'eventMessage' => null,
        'elapsedSeconds' => null
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
    * resourceIdKey  资源的id名称，即对应资源作为唯一id使用的值的名称，当资源未创建的时候，不返回resource_id_key
    * resourceIdValue  资源的id值，即对应资源作为唯一id使用的值，当资源未创建的时候，不返回resource_id_value
    * resourceName  资源的名称
    * resourceType  资源的类型
    * time  事件发生的时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * eventType  此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。详细信息将在EventMessage中存储。此为暂时状态， 因为目前我们无法解析terraform的log，只能直全部以LOG形式打出，未来我们吃掉terraform内核以后， 将去除这个状态，并改为下列的更精准的状态 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `DELETION_SKIPPED` - 跳过删除。未来我们将支持，用户可以从IaC中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * eventMessage  事件对应的详细信息
    * elapsedSeconds  资源改动所花的时间，以秒为单位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceIdKey' => 'resource_id_key',
            'resourceIdValue' => 'resource_id_value',
            'resourceName' => 'resource_name',
            'resourceType' => 'resource_type',
            'time' => 'time',
            'eventType' => 'event_type',
            'eventMessage' => 'event_message',
            'elapsedSeconds' => 'elapsed_seconds'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceIdKey  资源的id名称，即对应资源作为唯一id使用的值的名称，当资源未创建的时候，不返回resource_id_key
    * resourceIdValue  资源的id值，即对应资源作为唯一id使用的值，当资源未创建的时候，不返回resource_id_value
    * resourceName  资源的名称
    * resourceType  资源的类型
    * time  事件发生的时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * eventType  此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。详细信息将在EventMessage中存储。此为暂时状态， 因为目前我们无法解析terraform的log，只能直全部以LOG形式打出，未来我们吃掉terraform内核以后， 将去除这个状态，并改为下列的更精准的状态 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `DELETION_SKIPPED` - 跳过删除。未来我们将支持，用户可以从IaC中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * eventMessage  事件对应的详细信息
    * elapsedSeconds  资源改动所花的时间，以秒为单位
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceIdKey' => 'setResourceIdKey',
            'resourceIdValue' => 'setResourceIdValue',
            'resourceName' => 'setResourceName',
            'resourceType' => 'setResourceType',
            'time' => 'setTime',
            'eventType' => 'setEventType',
            'eventMessage' => 'setEventMessage',
            'elapsedSeconds' => 'setElapsedSeconds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceIdKey  资源的id名称，即对应资源作为唯一id使用的值的名称，当资源未创建的时候，不返回resource_id_key
    * resourceIdValue  资源的id值，即对应资源作为唯一id使用的值，当资源未创建的时候，不返回resource_id_value
    * resourceName  资源的名称
    * resourceType  资源的类型
    * time  事件发生的时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    * eventType  此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。详细信息将在EventMessage中存储。此为暂时状态， 因为目前我们无法解析terraform的log，只能直全部以LOG形式打出，未来我们吃掉terraform内核以后， 将去除这个状态，并改为下列的更精准的状态 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `DELETION_SKIPPED` - 跳过删除。未来我们将支持，用户可以从IaC中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    * eventMessage  事件对应的详细信息
    * elapsedSeconds  资源改动所花的时间，以秒为单位
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceIdKey' => 'getResourceIdKey',
            'resourceIdValue' => 'getResourceIdValue',
            'resourceName' => 'getResourceName',
            'resourceType' => 'getResourceType',
            'time' => 'getTime',
            'eventType' => 'getEventType',
            'eventMessage' => 'getEventMessage',
            'elapsedSeconds' => 'getElapsedSeconds'
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
    const EVENT_TYPE_LOG = 'LOG';
    const EVENT_TYPE_ERROR = 'ERROR';
    const EVENT_TYPE_DRIFT = 'DRIFT';
    const EVENT_TYPE_SUMMARY = 'SUMMARY';
    const EVENT_TYPE_CREATION_IN_PROGRESS = 'CREATION_IN_PROGRESS';
    const EVENT_TYPE_CREATION_FAILED = 'CREATION_FAILED';
    const EVENT_TYPE_CREATION_COMPLETE = 'CREATION_COMPLETE';
    const EVENT_TYPE_DELETION_IN_PROGRESS = 'DELETION_IN_PROGRESS';
    const EVENT_TYPE_DELETION_FAILED = 'DELETION_FAILED';
    const EVENT_TYPE_DELETION_COMPLETE = 'DELETION_COMPLETE';
    const EVENT_TYPE_DELETION_SKIPPED = 'DELETION_SKIPPED';
    const EVENT_TYPE_UPDATE_IN_PROGRESS = 'UPDATE_IN_PROGRESS';
    const EVENT_TYPE_UPDATE_FAILED = 'UPDATE_FAILED';
    const EVENT_TYPE_UPDATE_COMPLETE = 'UPDATE_COMPLETE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_LOG,
            self::EVENT_TYPE_ERROR,
            self::EVENT_TYPE_DRIFT,
            self::EVENT_TYPE_SUMMARY,
            self::EVENT_TYPE_CREATION_IN_PROGRESS,
            self::EVENT_TYPE_CREATION_FAILED,
            self::EVENT_TYPE_CREATION_COMPLETE,
            self::EVENT_TYPE_DELETION_IN_PROGRESS,
            self::EVENT_TYPE_DELETION_FAILED,
            self::EVENT_TYPE_DELETION_COMPLETE,
            self::EVENT_TYPE_DELETION_SKIPPED,
            self::EVENT_TYPE_UPDATE_IN_PROGRESS,
            self::EVENT_TYPE_UPDATE_FAILED,
            self::EVENT_TYPE_UPDATE_COMPLETE,
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
        $this->container['resourceIdKey'] = isset($data['resourceIdKey']) ? $data['resourceIdKey'] : null;
        $this->container['resourceIdValue'] = isset($data['resourceIdValue']) ? $data['resourceIdValue'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['eventMessage'] = isset($data['eventMessage']) ? $data['eventMessage'] : null;
        $this->container['elapsedSeconds'] = isset($data['elapsedSeconds']) ? $data['elapsedSeconds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getEventTypeAllowableValues();
                if (!is_null($this->container['eventType']) && !in_array($this->container['eventType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventType', must be one of '%s'",
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
    * Gets resourceIdKey
    *  资源的id名称，即对应资源作为唯一id使用的值的名称，当资源未创建的时候，不返回resource_id_key
    *
    * @return string|null
    */
    public function getResourceIdKey()
    {
        return $this->container['resourceIdKey'];
    }

    /**
    * Sets resourceIdKey
    *
    * @param string|null $resourceIdKey 资源的id名称，即对应资源作为唯一id使用的值的名称，当资源未创建的时候，不返回resource_id_key
    *
    * @return $this
    */
    public function setResourceIdKey($resourceIdKey)
    {
        $this->container['resourceIdKey'] = $resourceIdKey;
        return $this;
    }

    /**
    * Gets resourceIdValue
    *  资源的id值，即对应资源作为唯一id使用的值，当资源未创建的时候，不返回resource_id_value
    *
    * @return string|null
    */
    public function getResourceIdValue()
    {
        return $this->container['resourceIdValue'];
    }

    /**
    * Sets resourceIdValue
    *
    * @param string|null $resourceIdValue 资源的id值，即对应资源作为唯一id使用的值，当资源未创建的时候，不返回resource_id_value
    *
    * @return $this
    */
    public function setResourceIdValue($resourceIdValue)
    {
        $this->container['resourceIdValue'] = $resourceIdValue;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源的名称
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
    * @param string|null $resourceName 资源的名称
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
    *  资源的类型
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
    * @param string|null $resourceType 资源的类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets time
    *  事件发生的时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 事件发生的时间，格式遵循RFC3339，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets eventType
    *  此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。详细信息将在EventMessage中存储。此为暂时状态， 因为目前我们无法解析terraform的log，只能直全部以LOG形式打出，未来我们吃掉terraform内核以后， 将去除这个状态，并改为下列的更精准的状态 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `DELETION_SKIPPED` - 跳过删除。未来我们将支持，用户可以从IaC中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
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
    * @param string|null $eventType 此次事件的类型 * `LOG` - 记录状态信息，比如当前状态，目标状态等。详细信息将在EventMessage中存储。此为暂时状态， 因为目前我们无法解析terraform的log，只能直全部以LOG形式打出，未来我们吃掉terraform内核以后， 将去除这个状态，并改为下列的更精准的状态 * `ERROR` - 记录失败信息 * `DRIFT` - 记录资源偏移信息 * `SUMMARY` - 记录资源变更结果总结 * `CREATION_IN_PROGRESS` - 正在生成 * `CREATION_FAILED` - 生成失败 * `CREATION_COMPLETE` - 生成完成 * `DELETION_IN_PROGRESS` - 正在删除 * `DELETION_FAILED` - 删除失败 * `DELETION_COMPLETE` - 已经删除 * `DELETION_SKIPPED` - 跳过删除。未来我们将支持，用户可以从IaC中删除，但是不真的删除资源本身 * `UPDATE_IN_PROGRESS` - 正在更新。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION * `UPDATE_FAILED` - 更新失败。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后 * `UPDATE_COMPLETE` - 更新完成。此处的更新特指非替换式更新，如果是替换式更新，则使用CREATION后DELETION
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets eventMessage
    *  事件对应的详细信息
    *
    * @return string|null
    */
    public function getEventMessage()
    {
        return $this->container['eventMessage'];
    }

    /**
    * Sets eventMessage
    *
    * @param string|null $eventMessage 事件对应的详细信息
    *
    * @return $this
    */
    public function setEventMessage($eventMessage)
    {
        $this->container['eventMessage'] = $eventMessage;
        return $this;
    }

    /**
    * Gets elapsedSeconds
    *  资源改动所花的时间，以秒为单位
    *
    * @return int|null
    */
    public function getElapsedSeconds()
    {
        return $this->container['elapsedSeconds'];
    }

    /**
    * Sets elapsedSeconds
    *
    * @param int|null $elapsedSeconds 资源改动所花的时间，以秒为单位
    *
    * @return $this
    */
    public function setElapsedSeconds($elapsedSeconds)
    {
        $this->container['elapsedSeconds'] = $elapsedSeconds;
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

