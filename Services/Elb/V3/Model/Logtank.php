<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Logtank implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Logtank';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云日志ID。
    * projectId  项目ID。
    * loadbalancerId  负载均衡器ID。
    * logGroupId  云日志分组ID。
    * logTopicId  云日志主题ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'loadbalancerId' => 'string',
            'logGroupId' => 'string',
            'logTopicId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云日志ID。
    * projectId  项目ID。
    * loadbalancerId  负载均衡器ID。
    * logGroupId  云日志分组ID。
    * logTopicId  云日志主题ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'loadbalancerId' => null,
        'logGroupId' => null,
        'logTopicId' => null
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
    * id  云日志ID。
    * projectId  项目ID。
    * loadbalancerId  负载均衡器ID。
    * logGroupId  云日志分组ID。
    * logTopicId  云日志主题ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'loadbalancerId' => 'loadbalancer_id',
            'logGroupId' => 'log_group_id',
            'logTopicId' => 'log_topic_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云日志ID。
    * projectId  项目ID。
    * loadbalancerId  负载均衡器ID。
    * logGroupId  云日志分组ID。
    * logTopicId  云日志主题ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'loadbalancerId' => 'setLoadbalancerId',
            'logGroupId' => 'setLogGroupId',
            'logTopicId' => 'setLogTopicId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云日志ID。
    * projectId  项目ID。
    * loadbalancerId  负载均衡器ID。
    * logGroupId  云日志分组ID。
    * logTopicId  云日志主题ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'loadbalancerId' => 'getLoadbalancerId',
            'logGroupId' => 'getLogGroupId',
            'logTopicId' => 'getLogTopicId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logTopicId'] = isset($data['logTopicId']) ? $data['logTopicId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['loadbalancerId'] === null) {
            $invalidProperties[] = "'loadbalancerId' can't be null";
        }
        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
        if ($this->container['logTopicId'] === null) {
            $invalidProperties[] = "'logTopicId' can't be null";
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
    * Gets id
    *  云日志ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 云日志ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  负载均衡器ID。
    *
    * @return string
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string $loadbalancerId 负载均衡器ID。
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets logGroupId
    *  云日志分组ID。
    *
    * @return string
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string $logGroupId 云日志分组ID。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logTopicId
    *  云日志主题ID。
    *
    * @return string
    */
    public function getLogTopicId()
    {
        return $this->container['logTopicId'];
    }

    /**
    * Sets logTopicId
    *
    * @param string $logTopicId 云日志主题ID。
    *
    * @return $this
    */
    public function setLogTopicId($logTopicId)
    {
        $this->container['logTopicId'] = $logTopicId;
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

