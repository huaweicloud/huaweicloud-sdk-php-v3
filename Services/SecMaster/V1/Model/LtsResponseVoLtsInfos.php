<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LtsResponseVoLtsInfos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LtsResponseVo_lts_infos';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logGroupId  日志组id
    * logGroupName  组名称
    * streams  流列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logGroupId' => 'string',
            'logGroupName' => 'string',
            'streams' => '\HuaweiCloud\SDK\SecMaster\V1\Model\LtsResponseVoStreams[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logGroupId  日志组id
    * logGroupName  组名称
    * streams  流列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logGroupId' => null,
        'logGroupName' => null,
        'streams' => null
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
    * logGroupId  日志组id
    * logGroupName  组名称
    * streams  流列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logGroupId' => 'log_group_id',
            'logGroupName' => 'log_group_name',
            'streams' => 'streams'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logGroupId  日志组id
    * logGroupName  组名称
    * streams  流列表
    *
    * @var string[]
    */
    protected static $setters = [
            'logGroupId' => 'setLogGroupId',
            'logGroupName' => 'setLogGroupName',
            'streams' => 'setStreams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logGroupId  日志组id
    * logGroupName  组名称
    * streams  流列表
    *
    * @var string[]
    */
    protected static $getters = [
            'logGroupId' => 'getLogGroupId',
            'logGroupName' => 'getLogGroupName',
            'streams' => 'getStreams'
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
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logGroupName'] = isset($data['logGroupName']) ? $data['logGroupName'] : null;
        $this->container['streams'] = isset($data['streams']) ? $data['streams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) > 255)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) > 255)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['logGroupName']) && (mb_strlen($this->container['logGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'logGroupName', the character length must be bigger than or equal to 1.";
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
    * Gets logGroupId
    *  日志组id
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
    * @param string|null $logGroupId 日志组id
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logGroupName
    *  组名称
    *
    * @return string|null
    */
    public function getLogGroupName()
    {
        return $this->container['logGroupName'];
    }

    /**
    * Sets logGroupName
    *
    * @param string|null $logGroupName 组名称
    *
    * @return $this
    */
    public function setLogGroupName($logGroupName)
    {
        $this->container['logGroupName'] = $logGroupName;
        return $this;
    }

    /**
    * Gets streams
    *  流列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\LtsResponseVoStreams[]|null
    */
    public function getStreams()
    {
        return $this->container['streams'];
    }

    /**
    * Sets streams
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\LtsResponseVoStreams[]|null $streams 流列表
    *
    * @return $this
    */
    public function setStreams($streams)
    {
        $this->container['streams'] = $streams;
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

