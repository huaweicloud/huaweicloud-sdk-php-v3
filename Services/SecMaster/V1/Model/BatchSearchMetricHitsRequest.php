<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchSearchMetricHitsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchSearchMetricHitsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * timespan  查询指标的时间范围，ISO8601格式，例如：2007-03-01T13:00:00Z/2008-05-11T15:30:00Z或2007-03-01T13:00:00Z/P1Y2M10DT2H30M或P1Y2M10DT2H30M/2008-05-11T15:30:00Z
    * cache  是否启用缓存，默认true, 禁用缓存 false
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'timespan' => 'string',
            'cache' => 'bool',
            'body' => '\HuaweiCloud\SDK\SecMaster\V1\Model\BatchSearchMetricHitsRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  工作空间ID
    * timespan  查询指标的时间范围，ISO8601格式，例如：2007-03-01T13:00:00Z/2008-05-11T15:30:00Z或2007-03-01T13:00:00Z/P1Y2M10DT2H30M或P1Y2M10DT2H30M/2008-05-11T15:30:00Z
    * cache  是否启用缓存，默认true, 禁用缓存 false
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'timespan' => null,
        'cache' => null,
        'body' => null
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
    * workspaceId  工作空间ID
    * timespan  查询指标的时间范围，ISO8601格式，例如：2007-03-01T13:00:00Z/2008-05-11T15:30:00Z或2007-03-01T13:00:00Z/P1Y2M10DT2H30M或P1Y2M10DT2H30M/2008-05-11T15:30:00Z
    * cache  是否启用缓存，默认true, 禁用缓存 false
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspace_id',
            'timespan' => 'timespan',
            'cache' => 'cache',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  工作空间ID
    * timespan  查询指标的时间范围，ISO8601格式，例如：2007-03-01T13:00:00Z/2008-05-11T15:30:00Z或2007-03-01T13:00:00Z/P1Y2M10DT2H30M或P1Y2M10DT2H30M/2008-05-11T15:30:00Z
    * cache  是否启用缓存，默认true, 禁用缓存 false
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'timespan' => 'setTimespan',
            'cache' => 'setCache',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  工作空间ID
    * timespan  查询指标的时间范围，ISO8601格式，例如：2007-03-01T13:00:00Z/2008-05-11T15:30:00Z或2007-03-01T13:00:00Z/P1Y2M10DT2H30M或P1Y2M10DT2H30M/2008-05-11T15:30:00Z
    * cache  是否启用缓存，默认true, 禁用缓存 false
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'timespan' => 'getTimespan',
            'cache' => 'getCache',
            'body' => 'getBody'
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['timespan'] = isset($data['timespan']) ? $data['timespan'] : null;
        $this->container['cache'] = isset($data['cache']) ? $data['cache'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspaceId'] === null) {
            $invalidProperties[] = "'workspaceId' can't be null";
        }
            if ((mb_strlen($this->container['workspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['workspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['timespan']) && (mb_strlen($this->container['timespan']) > 255)) {
                $invalidProperties[] = "invalid value for 'timespan', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['timespan']) && (mb_strlen($this->container['timespan']) < 1)) {
                $invalidProperties[] = "invalid value for 'timespan', the character length must be bigger than or equal to 1.";
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
    * Gets workspaceId
    *  工作空间ID
    *
    * @return string
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string $workspaceId 工作空间ID
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets timespan
    *  查询指标的时间范围，ISO8601格式，例如：2007-03-01T13:00:00Z/2008-05-11T15:30:00Z或2007-03-01T13:00:00Z/P1Y2M10DT2H30M或P1Y2M10DT2H30M/2008-05-11T15:30:00Z
    *
    * @return string|null
    */
    public function getTimespan()
    {
        return $this->container['timespan'];
    }

    /**
    * Sets timespan
    *
    * @param string|null $timespan 查询指标的时间范围，ISO8601格式，例如：2007-03-01T13:00:00Z/2008-05-11T15:30:00Z或2007-03-01T13:00:00Z/P1Y2M10DT2H30M或P1Y2M10DT2H30M/2008-05-11T15:30:00Z
    *
    * @return $this
    */
    public function setTimespan($timespan)
    {
        $this->container['timespan'] = $timespan;
        return $this;
    }

    /**
    * Gets cache
    *  是否启用缓存，默认true, 禁用缓存 false
    *
    * @return bool|null
    */
    public function getCache()
    {
        return $this->container['cache'];
    }

    /**
    * Sets cache
    *
    * @param bool|null $cache 是否启用缓存，默认true, 禁用缓存 false
    *
    * @return $this
    */
    public function setCache($cache)
    {
        $this->container['cache'] = $cache;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\BatchSearchMetricHitsRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\BatchSearchMetricHitsRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

