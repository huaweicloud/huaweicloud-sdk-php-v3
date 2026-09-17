<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClientNodeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClientNodeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * channelId  推送通道ID
    * nodeId  节点ID
    * allottedTime  路由分配到节点的时间
    * updateTime  节点实例化后通道的连接和推送信息的修改时间
    * synchronizedTime  下发时间，表示通道是否已经同步到了节点
    * synchronizedStatus  下发状态，表示是否已同步到了节点
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'channelId' => 'string',
            'nodeId' => 'string',
            'allottedTime' => 'string',
            'updateTime' => 'string',
            'synchronizedTime' => 'string',
            'synchronizedStatus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * channelId  推送通道ID
    * nodeId  节点ID
    * allottedTime  路由分配到节点的时间
    * updateTime  节点实例化后通道的连接和推送信息的修改时间
    * synchronizedTime  下发时间，表示通道是否已经同步到了节点
    * synchronizedStatus  下发状态，表示是否已同步到了节点
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'channelId' => null,
        'nodeId' => null,
        'allottedTime' => null,
        'updateTime' => null,
        'synchronizedTime' => null,
        'synchronizedStatus' => null
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
    * channelId  推送通道ID
    * nodeId  节点ID
    * allottedTime  路由分配到节点的时间
    * updateTime  节点实例化后通道的连接和推送信息的修改时间
    * synchronizedTime  下发时间，表示通道是否已经同步到了节点
    * synchronizedStatus  下发状态，表示是否已同步到了节点
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'channelId' => 'channel_id',
            'nodeId' => 'node_id',
            'allottedTime' => 'allotted_time',
            'updateTime' => 'update_time',
            'synchronizedTime' => 'synchronized_time',
            'synchronizedStatus' => 'synchronized_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * channelId  推送通道ID
    * nodeId  节点ID
    * allottedTime  路由分配到节点的时间
    * updateTime  节点实例化后通道的连接和推送信息的修改时间
    * synchronizedTime  下发时间，表示通道是否已经同步到了节点
    * synchronizedStatus  下发状态，表示是否已同步到了节点
    *
    * @var string[]
    */
    protected static $setters = [
            'channelId' => 'setChannelId',
            'nodeId' => 'setNodeId',
            'allottedTime' => 'setAllottedTime',
            'updateTime' => 'setUpdateTime',
            'synchronizedTime' => 'setSynchronizedTime',
            'synchronizedStatus' => 'setSynchronizedStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * channelId  推送通道ID
    * nodeId  节点ID
    * allottedTime  路由分配到节点的时间
    * updateTime  节点实例化后通道的连接和推送信息的修改时间
    * synchronizedTime  下发时间，表示通道是否已经同步到了节点
    * synchronizedStatus  下发状态，表示是否已同步到了节点
    *
    * @var string[]
    */
    protected static $getters = [
            'channelId' => 'getChannelId',
            'nodeId' => 'getNodeId',
            'allottedTime' => 'getAllottedTime',
            'updateTime' => 'getUpdateTime',
            'synchronizedTime' => 'getSynchronizedTime',
            'synchronizedStatus' => 'getSynchronizedStatus'
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
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['allottedTime'] = isset($data['allottedTime']) ? $data['allottedTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['synchronizedTime'] = isset($data['synchronizedTime']) ? $data['synchronizedTime'] : null;
        $this->container['synchronizedStatus'] = isset($data['synchronizedStatus']) ? $data['synchronizedStatus'] : null;
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
    * Gets channelId
    *  推送通道ID
    *
    * @return string|null
    */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
    * Sets channelId
    *
    * @param string|null $channelId 推送通道ID
    *
    * @return $this
    */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets allottedTime
    *  路由分配到节点的时间
    *
    * @return string|null
    */
    public function getAllottedTime()
    {
        return $this->container['allottedTime'];
    }

    /**
    * Sets allottedTime
    *
    * @param string|null $allottedTime 路由分配到节点的时间
    *
    * @return $this
    */
    public function setAllottedTime($allottedTime)
    {
        $this->container['allottedTime'] = $allottedTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  节点实例化后通道的连接和推送信息的修改时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 节点实例化后通道的连接和推送信息的修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets synchronizedTime
    *  下发时间，表示通道是否已经同步到了节点
    *
    * @return string|null
    */
    public function getSynchronizedTime()
    {
        return $this->container['synchronizedTime'];
    }

    /**
    * Sets synchronizedTime
    *
    * @param string|null $synchronizedTime 下发时间，表示通道是否已经同步到了节点
    *
    * @return $this
    */
    public function setSynchronizedTime($synchronizedTime)
    {
        $this->container['synchronizedTime'] = $synchronizedTime;
        return $this;
    }

    /**
    * Gets synchronizedStatus
    *  下发状态，表示是否已同步到了节点
    *
    * @return bool|null
    */
    public function getSynchronizedStatus()
    {
        return $this->container['synchronizedStatus'];
    }

    /**
    * Sets synchronizedStatus
    *
    * @param bool|null $synchronizedStatus 下发状态，表示是否已同步到了节点
    *
    * @return $this
    */
    public function setSynchronizedStatus($synchronizedStatus)
    {
        $this->container['synchronizedStatus'] = $synchronizedStatus;
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

