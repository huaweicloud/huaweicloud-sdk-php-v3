<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LogMappingStreamInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LogMappingStreamInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceLogStreamId  源日志流ID
    * targetLogStreamId  目标日志流ID
    * targetLogStreamName  目标日志流名称
    * targetLogStreamEpsId  目标日志流EPS ID
    * targetLogStreamTtl  目标日志流ttl
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceLogStreamId' => 'string',
            'targetLogStreamId' => 'string',
            'targetLogStreamName' => 'string',
            'targetLogStreamEpsId' => 'string',
            'targetLogStreamTtl' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceLogStreamId  源日志流ID
    * targetLogStreamId  目标日志流ID
    * targetLogStreamName  目标日志流名称
    * targetLogStreamEpsId  目标日志流EPS ID
    * targetLogStreamTtl  目标日志流ttl
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceLogStreamId' => null,
        'targetLogStreamId' => null,
        'targetLogStreamName' => null,
        'targetLogStreamEpsId' => null,
        'targetLogStreamTtl' => 'int32'
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
    * sourceLogStreamId  源日志流ID
    * targetLogStreamId  目标日志流ID
    * targetLogStreamName  目标日志流名称
    * targetLogStreamEpsId  目标日志流EPS ID
    * targetLogStreamTtl  目标日志流ttl
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceLogStreamId' => 'source_log_stream_id',
            'targetLogStreamId' => 'target_log_stream_id',
            'targetLogStreamName' => 'target_log_stream_name',
            'targetLogStreamEpsId' => 'target_log_stream_eps_id',
            'targetLogStreamTtl' => 'target_log_stream_ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceLogStreamId  源日志流ID
    * targetLogStreamId  目标日志流ID
    * targetLogStreamName  目标日志流名称
    * targetLogStreamEpsId  目标日志流EPS ID
    * targetLogStreamTtl  目标日志流ttl
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceLogStreamId' => 'setSourceLogStreamId',
            'targetLogStreamId' => 'setTargetLogStreamId',
            'targetLogStreamName' => 'setTargetLogStreamName',
            'targetLogStreamEpsId' => 'setTargetLogStreamEpsId',
            'targetLogStreamTtl' => 'setTargetLogStreamTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceLogStreamId  源日志流ID
    * targetLogStreamId  目标日志流ID
    * targetLogStreamName  目标日志流名称
    * targetLogStreamEpsId  目标日志流EPS ID
    * targetLogStreamTtl  目标日志流ttl
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceLogStreamId' => 'getSourceLogStreamId',
            'targetLogStreamId' => 'getTargetLogStreamId',
            'targetLogStreamName' => 'getTargetLogStreamName',
            'targetLogStreamEpsId' => 'getTargetLogStreamEpsId',
            'targetLogStreamTtl' => 'getTargetLogStreamTtl'
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
        $this->container['sourceLogStreamId'] = isset($data['sourceLogStreamId']) ? $data['sourceLogStreamId'] : null;
        $this->container['targetLogStreamId'] = isset($data['targetLogStreamId']) ? $data['targetLogStreamId'] : null;
        $this->container['targetLogStreamName'] = isset($data['targetLogStreamName']) ? $data['targetLogStreamName'] : null;
        $this->container['targetLogStreamEpsId'] = isset($data['targetLogStreamEpsId']) ? $data['targetLogStreamEpsId'] : null;
        $this->container['targetLogStreamTtl'] = isset($data['targetLogStreamTtl']) ? $data['targetLogStreamTtl'] : null;
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
    * Gets sourceLogStreamId
    *  源日志流ID
    *
    * @return string|null
    */
    public function getSourceLogStreamId()
    {
        return $this->container['sourceLogStreamId'];
    }

    /**
    * Sets sourceLogStreamId
    *
    * @param string|null $sourceLogStreamId 源日志流ID
    *
    * @return $this
    */
    public function setSourceLogStreamId($sourceLogStreamId)
    {
        $this->container['sourceLogStreamId'] = $sourceLogStreamId;
        return $this;
    }

    /**
    * Gets targetLogStreamId
    *  目标日志流ID
    *
    * @return string|null
    */
    public function getTargetLogStreamId()
    {
        return $this->container['targetLogStreamId'];
    }

    /**
    * Sets targetLogStreamId
    *
    * @param string|null $targetLogStreamId 目标日志流ID
    *
    * @return $this
    */
    public function setTargetLogStreamId($targetLogStreamId)
    {
        $this->container['targetLogStreamId'] = $targetLogStreamId;
        return $this;
    }

    /**
    * Gets targetLogStreamName
    *  目标日志流名称
    *
    * @return string|null
    */
    public function getTargetLogStreamName()
    {
        return $this->container['targetLogStreamName'];
    }

    /**
    * Sets targetLogStreamName
    *
    * @param string|null $targetLogStreamName 目标日志流名称
    *
    * @return $this
    */
    public function setTargetLogStreamName($targetLogStreamName)
    {
        $this->container['targetLogStreamName'] = $targetLogStreamName;
        return $this;
    }

    /**
    * Gets targetLogStreamEpsId
    *  目标日志流EPS ID
    *
    * @return string|null
    */
    public function getTargetLogStreamEpsId()
    {
        return $this->container['targetLogStreamEpsId'];
    }

    /**
    * Sets targetLogStreamEpsId
    *
    * @param string|null $targetLogStreamEpsId 目标日志流EPS ID
    *
    * @return $this
    */
    public function setTargetLogStreamEpsId($targetLogStreamEpsId)
    {
        $this->container['targetLogStreamEpsId'] = $targetLogStreamEpsId;
        return $this;
    }

    /**
    * Gets targetLogStreamTtl
    *  目标日志流ttl
    *
    * @return int|null
    */
    public function getTargetLogStreamTtl()
    {
        return $this->container['targetLogStreamTtl'];
    }

    /**
    * Sets targetLogStreamTtl
    *
    * @param int|null $targetLogStreamTtl 目标日志流ttl
    *
    * @return $this
    */
    public function setTargetLogStreamTtl($targetLogStreamTtl)
    {
        $this->container['targetLogStreamTtl'] = $targetLogStreamTtl;
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

