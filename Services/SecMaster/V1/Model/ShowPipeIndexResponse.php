<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPipeIndexResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPipeIndexResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mapping  索引映射信息
    * pipeId  数据管道ID
    * status  索引状态；open 开启，closed 关闭
    * timestampField  时间戳字段名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mapping' => 'map[string,\HuaweiCloud\SDK\SecMaster\V1\Model\KeyIndex]',
            'pipeId' => 'string',
            'status' => 'string',
            'timestampField' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mapping  索引映射信息
    * pipeId  数据管道ID
    * status  索引状态；open 开启，closed 关闭
    * timestampField  时间戳字段名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mapping' => null,
        'pipeId' => null,
        'status' => null,
        'timestampField' => null
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
    * mapping  索引映射信息
    * pipeId  数据管道ID
    * status  索引状态；open 开启，closed 关闭
    * timestampField  时间戳字段名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mapping' => 'mapping',
            'pipeId' => 'pipe_id',
            'status' => 'status',
            'timestampField' => 'timestamp_field'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mapping  索引映射信息
    * pipeId  数据管道ID
    * status  索引状态；open 开启，closed 关闭
    * timestampField  时间戳字段名称
    *
    * @var string[]
    */
    protected static $setters = [
            'mapping' => 'setMapping',
            'pipeId' => 'setPipeId',
            'status' => 'setStatus',
            'timestampField' => 'setTimestampField'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mapping  索引映射信息
    * pipeId  数据管道ID
    * status  索引状态；open 开启，closed 关闭
    * timestampField  时间戳字段名称
    *
    * @var string[]
    */
    protected static $getters = [
            'mapping' => 'getMapping',
            'pipeId' => 'getPipeId',
            'status' => 'getStatus',
            'timestampField' => 'getTimestampField'
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
    const STATUS_OPEN = 'open';
    const STATUS_CLOSED = 'closed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_CLOSED,
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
        $this->container['mapping'] = isset($data['mapping']) ? $data['mapping'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['timestampField'] = isset($data['timestampField']) ? $data['timestampField'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 36.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['timestampField']) && (mb_strlen($this->container['timestampField']) > 256)) {
                $invalidProperties[] = "invalid value for 'timestampField', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['timestampField']) && (mb_strlen($this->container['timestampField']) < 1)) {
                $invalidProperties[] = "invalid value for 'timestampField', the character length must be bigger than or equal to 1.";
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
    * Gets mapping
    *  索引映射信息
    *
    * @return map[string,\HuaweiCloud\SDK\SecMaster\V1\Model\KeyIndex]|null
    */
    public function getMapping()
    {
        return $this->container['mapping'];
    }

    /**
    * Sets mapping
    *
    * @param map[string,\HuaweiCloud\SDK\SecMaster\V1\Model\KeyIndex]|null $mapping 索引映射信息
    *
    * @return $this
    */
    public function setMapping($mapping)
    {
        $this->container['mapping'] = $mapping;
        return $this;
    }

    /**
    * Gets pipeId
    *  数据管道ID
    *
    * @return string|null
    */
    public function getPipeId()
    {
        return $this->container['pipeId'];
    }

    /**
    * Sets pipeId
    *
    * @param string|null $pipeId 数据管道ID
    *
    * @return $this
    */
    public function setPipeId($pipeId)
    {
        $this->container['pipeId'] = $pipeId;
        return $this;
    }

    /**
    * Gets status
    *  索引状态；open 开启，closed 关闭
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 索引状态；open 开启，closed 关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets timestampField
    *  时间戳字段名称
    *
    * @return string|null
    */
    public function getTimestampField()
    {
        return $this->container['timestampField'];
    }

    /**
    * Sets timestampField
    *
    * @param string|null $timestampField 时间戳字段名称
    *
    * @return $this
    */
    public function setTimestampField($timestampField)
    {
        $this->container['timestampField'] = $timestampField;
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

