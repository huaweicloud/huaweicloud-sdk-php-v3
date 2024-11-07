<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLogtankOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLogtankOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  resourceType
    * resourceId  开启云日志的资源ID。
    * logGroupId  云日志服务提供的日志组ID。
    * logStreamId  云日志服务提供的日志流ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => '\HuaweiCloud\SDK\Ga\V1\Model\LogtankResourceType',
            'resourceId' => 'string',
            'logGroupId' => 'string',
            'logStreamId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  resourceType
    * resourceId  开启云日志的资源ID。
    * logGroupId  云日志服务提供的日志组ID。
    * logStreamId  云日志服务提供的日志流ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'resourceId' => null,
        'logGroupId' => null,
        'logStreamId' => null
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
    * resourceType  resourceType
    * resourceId  开启云日志的资源ID。
    * logGroupId  云日志服务提供的日志组ID。
    * logStreamId  云日志服务提供的日志流ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'resourceId' => 'resource_id',
            'logGroupId' => 'log_group_id',
            'logStreamId' => 'log_stream_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  resourceType
    * resourceId  开启云日志的资源ID。
    * logGroupId  云日志服务提供的日志组ID。
    * logStreamId  云日志服务提供的日志流ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'resourceId' => 'setResourceId',
            'logGroupId' => 'setLogGroupId',
            'logStreamId' => 'setLogStreamId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  resourceType
    * resourceId  开启云日志的资源ID。
    * logGroupId  云日志服务提供的日志组ID。
    * logStreamId  云日志服务提供的日志流ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'resourceId' => 'getResourceId',
            'logGroupId' => 'getLogGroupId',
            'logStreamId' => 'getLogStreamId'
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['logGroupId'])) {
                $invalidProperties[] = "invalid value for 'logGroupId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['logStreamId'] === null) {
            $invalidProperties[] = "'logStreamId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['logStreamId'])) {
                $invalidProperties[] = "invalid value for 'logStreamId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets resourceType
    *  resourceType
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\LogtankResourceType
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\LogtankResourceType $resourceType resourceType
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceId
    *  开启云日志的资源ID。
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 开启云日志的资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets logGroupId
    *  云日志服务提供的日志组ID。
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
    * @param string $logGroupId 云日志服务提供的日志组ID。
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
    *  云日志服务提供的日志流ID。
    *
    * @return string
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string $logStreamId 云日志服务提供的日志流ID。
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
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

