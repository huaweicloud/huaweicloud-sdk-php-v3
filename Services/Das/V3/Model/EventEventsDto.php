<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventEventsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventEventsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logName  文件名称
    * pos  位置
    * eventType  事件类型
    * serverId  服务器ID
    * endLogPos  结束位置
    * info  信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logName' => 'string',
            'pos' => 'int',
            'eventType' => 'string',
            'serverId' => 'string',
            'endLogPos' => 'int',
            'info' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logName  文件名称
    * pos  位置
    * eventType  事件类型
    * serverId  服务器ID
    * endLogPos  结束位置
    * info  信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logName' => null,
        'pos' => 'int64',
        'eventType' => null,
        'serverId' => null,
        'endLogPos' => 'int64',
        'info' => null
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
    * logName  文件名称
    * pos  位置
    * eventType  事件类型
    * serverId  服务器ID
    * endLogPos  结束位置
    * info  信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logName' => 'log_name',
            'pos' => 'pos',
            'eventType' => 'event_type',
            'serverId' => 'server_id',
            'endLogPos' => 'end_log_pos',
            'info' => 'info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logName  文件名称
    * pos  位置
    * eventType  事件类型
    * serverId  服务器ID
    * endLogPos  结束位置
    * info  信息
    *
    * @var string[]
    */
    protected static $setters = [
            'logName' => 'setLogName',
            'pos' => 'setPos',
            'eventType' => 'setEventType',
            'serverId' => 'setServerId',
            'endLogPos' => 'setEndLogPos',
            'info' => 'setInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logName  文件名称
    * pos  位置
    * eventType  事件类型
    * serverId  服务器ID
    * endLogPos  结束位置
    * info  信息
    *
    * @var string[]
    */
    protected static $getters = [
            'logName' => 'getLogName',
            'pos' => 'getPos',
            'eventType' => 'getEventType',
            'serverId' => 'getServerId',
            'endLogPos' => 'getEndLogPos',
            'info' => 'getInfo'
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
        $this->container['logName'] = isset($data['logName']) ? $data['logName'] : null;
        $this->container['pos'] = isset($data['pos']) ? $data['pos'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['endLogPos'] = isset($data['endLogPos']) ? $data['endLogPos'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
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
    * Gets logName
    *  文件名称
    *
    * @return string|null
    */
    public function getLogName()
    {
        return $this->container['logName'];
    }

    /**
    * Sets logName
    *
    * @param string|null $logName 文件名称
    *
    * @return $this
    */
    public function setLogName($logName)
    {
        $this->container['logName'] = $logName;
        return $this;
    }

    /**
    * Gets pos
    *  位置
    *
    * @return int|null
    */
    public function getPos()
    {
        return $this->container['pos'];
    }

    /**
    * Sets pos
    *
    * @param int|null $pos 位置
    *
    * @return $this
    */
    public function setPos($pos)
    {
        $this->container['pos'] = $pos;
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
    * Gets serverId
    *  服务器ID
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 服务器ID
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets endLogPos
    *  结束位置
    *
    * @return int|null
    */
    public function getEndLogPos()
    {
        return $this->container['endLogPos'];
    }

    /**
    * Sets endLogPos
    *
    * @param int|null $endLogPos 结束位置
    *
    * @return $this
    */
    public function setEndLogPos($endLogPos)
    {
        $this->container['endLogPos'] = $endLogPos;
        return $this;
    }

    /**
    * Gets info
    *  信息
    *
    * @return string|null
    */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
    * Sets info
    *
    * @param string|null $info 信息
    *
    * @return $this
    */
    public function setInfo($info)
    {
        $this->container['info'] = $info;
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

