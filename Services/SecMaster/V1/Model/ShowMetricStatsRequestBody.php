<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMetricStatsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMetricStatsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataspaceId  数据空间ID
    * endTimestamp  结束时间
    * pipeId  数据管道ID
    * startTimestamp  开始时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataspaceId' => 'string',
            'endTimestamp' => 'int',
            'pipeId' => 'string',
            'startTimestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataspaceId  数据空间ID
    * endTimestamp  结束时间
    * pipeId  数据管道ID
    * startTimestamp  开始时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataspaceId' => null,
        'endTimestamp' => 'int64',
        'pipeId' => null,
        'startTimestamp' => 'int64'
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
    * dataspaceId  数据空间ID
    * endTimestamp  结束时间
    * pipeId  数据管道ID
    * startTimestamp  开始时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataspaceId' => 'dataspace_id',
            'endTimestamp' => 'end_timestamp',
            'pipeId' => 'pipe_id',
            'startTimestamp' => 'start_timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataspaceId  数据空间ID
    * endTimestamp  结束时间
    * pipeId  数据管道ID
    * startTimestamp  开始时间
    *
    * @var string[]
    */
    protected static $setters = [
            'dataspaceId' => 'setDataspaceId',
            'endTimestamp' => 'setEndTimestamp',
            'pipeId' => 'setPipeId',
            'startTimestamp' => 'setStartTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataspaceId  数据空间ID
    * endTimestamp  结束时间
    * pipeId  数据管道ID
    * startTimestamp  开始时间
    *
    * @var string[]
    */
    protected static $getters = [
            'dataspaceId' => 'getDataspaceId',
            'endTimestamp' => 'getEndTimestamp',
            'pipeId' => 'getPipeId',
            'startTimestamp' => 'getStartTimestamp'
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
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['endTimestamp'] = isset($data['endTimestamp']) ? $data['endTimestamp'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['startTimestamp'] = isset($data['startTimestamp']) ? $data['startTimestamp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dataspaceId'] === null) {
            $invalidProperties[] = "'dataspaceId' can't be null";
        }
            if ((mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['dataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['endTimestamp'] === null) {
            $invalidProperties[] = "'endTimestamp' can't be null";
        }
            if (($this->container['endTimestamp'] > 10000000000000)) {
                $invalidProperties[] = "invalid value for 'endTimestamp', must be smaller than or equal to 10000000000000.";
            }
            if (($this->container['endTimestamp'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTimestamp', must be bigger than or equal to 0.";
            }
        if ($this->container['pipeId'] === null) {
            $invalidProperties[] = "'pipeId' can't be null";
        }
            if ((mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['pipeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['startTimestamp'] === null) {
            $invalidProperties[] = "'startTimestamp' can't be null";
        }
            if (($this->container['startTimestamp'] > 10000000000000)) {
                $invalidProperties[] = "invalid value for 'startTimestamp', must be smaller than or equal to 10000000000000.";
            }
            if (($this->container['startTimestamp'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTimestamp', must be bigger than or equal to 0.";
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
    * Gets dataspaceId
    *  数据空间ID
    *
    * @return string
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string $dataspaceId 数据空间ID
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
        return $this;
    }

    /**
    * Gets endTimestamp
    *  结束时间
    *
    * @return int
    */
    public function getEndTimestamp()
    {
        return $this->container['endTimestamp'];
    }

    /**
    * Sets endTimestamp
    *
    * @param int $endTimestamp 结束时间
    *
    * @return $this
    */
    public function setEndTimestamp($endTimestamp)
    {
        $this->container['endTimestamp'] = $endTimestamp;
        return $this;
    }

    /**
    * Gets pipeId
    *  数据管道ID
    *
    * @return string
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string $pipeId 数据管道ID
    *
    * @return $this
    */
    public function setPipeId($pipeId)
    {
        $this->container['pipeId'] = $pipeId;
        return $this;
    }

    /**
    * Gets startTimestamp
    *  开始时间
    *
    * @return int
    */
    public function getStartTimestamp()
    {
        return $this->container['startTimestamp'];
    }

    /**
    * Sets startTimestamp
    *
    * @param int $startTimestamp 开始时间
    *
    * @return $this
    */
    public function setStartTimestamp($startTimestamp)
    {
        $this->container['startTimestamp'] = $startTimestamp;
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

