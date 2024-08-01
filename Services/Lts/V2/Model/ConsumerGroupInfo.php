<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConsumerGroupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConsumerGroupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * consumerGroupName  创建的消费组名
    * createTime  创建时间
    * logGroupId  日志组ID
    * logStreamId  日志流ID
    * projectId  项目ID
    * timeout  超时时间，单位秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'consumerGroupName' => 'string',
            'createTime' => 'int',
            'logGroupId' => 'string',
            'logStreamId' => 'string',
            'projectId' => 'string',
            'timeout' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * consumerGroupName  创建的消费组名
    * createTime  创建时间
    * logGroupId  日志组ID
    * logStreamId  日志流ID
    * projectId  项目ID
    * timeout  超时时间，单位秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'consumerGroupName' => null,
        'createTime' => 'int64',
        'logGroupId' => null,
        'logStreamId' => null,
        'projectId' => null,
        'timeout' => 'int32'
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
    * consumerGroupName  创建的消费组名
    * createTime  创建时间
    * logGroupId  日志组ID
    * logStreamId  日志流ID
    * projectId  项目ID
    * timeout  超时时间，单位秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'consumerGroupName' => 'consumer_group_name',
            'createTime' => 'create_time',
            'logGroupId' => 'log_group_id',
            'logStreamId' => 'log_stream_id',
            'projectId' => 'project_id',
            'timeout' => 'timeout'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * consumerGroupName  创建的消费组名
    * createTime  创建时间
    * logGroupId  日志组ID
    * logStreamId  日志流ID
    * projectId  项目ID
    * timeout  超时时间，单位秒
    *
    * @var string[]
    */
    protected static $setters = [
            'consumerGroupName' => 'setConsumerGroupName',
            'createTime' => 'setCreateTime',
            'logGroupId' => 'setLogGroupId',
            'logStreamId' => 'setLogStreamId',
            'projectId' => 'setProjectId',
            'timeout' => 'setTimeout'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * consumerGroupName  创建的消费组名
    * createTime  创建时间
    * logGroupId  日志组ID
    * logStreamId  日志流ID
    * projectId  项目ID
    * timeout  超时时间，单位秒
    *
    * @var string[]
    */
    protected static $getters = [
            'consumerGroupName' => 'getConsumerGroupName',
            'createTime' => 'getCreateTime',
            'logGroupId' => 'getLogGroupId',
            'logStreamId' => 'getLogStreamId',
            'projectId' => 'getProjectId',
            'timeout' => 'getTimeout'
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
        $this->container['consumerGroupName'] = isset($data['consumerGroupName']) ? $data['consumerGroupName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['consumerGroupName'] === null) {
            $invalidProperties[] = "'consumerGroupName' can't be null";
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
    * Gets consumerGroupName
    *  创建的消费组名
    *
    * @return string
    */
    public function getConsumerGroupName()
    {
        return $this->container['consumerGroupName'];
    }

    /**
    * Sets consumerGroupName
    *
    * @param string $consumerGroupName 创建的消费组名
    *
    * @return $this
    */
    public function setConsumerGroupName($consumerGroupName)
    {
        $this->container['consumerGroupName'] = $consumerGroupName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组ID
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 日志组ID
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志流ID
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId 日志流ID
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets timeout
    *  超时时间，单位秒
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout 超时时间，单位秒
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
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

