<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSearchConditionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSearchConditionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conditionId  检索条件ID
    * conditionName  检索条件名称
    * dataspaceId  数据空间ID
    * pipeId  数据管道ID
    * query  查询语句
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conditionId' => 'string',
            'conditionName' => 'string',
            'dataspaceId' => 'string',
            'pipeId' => 'string',
            'query' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conditionId  检索条件ID
    * conditionName  检索条件名称
    * dataspaceId  数据空间ID
    * pipeId  数据管道ID
    * query  查询语句
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conditionId' => null,
        'conditionName' => null,
        'dataspaceId' => null,
        'pipeId' => null,
        'query' => null
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
    * conditionId  检索条件ID
    * conditionName  检索条件名称
    * dataspaceId  数据空间ID
    * pipeId  数据管道ID
    * query  查询语句
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conditionId' => 'condition_id',
            'conditionName' => 'condition_name',
            'dataspaceId' => 'dataspace_id',
            'pipeId' => 'pipe_id',
            'query' => 'query'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conditionId  检索条件ID
    * conditionName  检索条件名称
    * dataspaceId  数据空间ID
    * pipeId  数据管道ID
    * query  查询语句
    *
    * @var string[]
    */
    protected static $setters = [
            'conditionId' => 'setConditionId',
            'conditionName' => 'setConditionName',
            'dataspaceId' => 'setDataspaceId',
            'pipeId' => 'setPipeId',
            'query' => 'setQuery'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conditionId  检索条件ID
    * conditionName  检索条件名称
    * dataspaceId  数据空间ID
    * pipeId  数据管道ID
    * query  查询语句
    *
    * @var string[]
    */
    protected static $getters = [
            'conditionId' => 'getConditionId',
            'conditionName' => 'getConditionName',
            'dataspaceId' => 'getDataspaceId',
            'pipeId' => 'getPipeId',
            'query' => 'getQuery'
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
        $this->container['conditionId'] = isset($data['conditionId']) ? $data['conditionId'] : null;
        $this->container['conditionName'] = isset($data['conditionName']) ? $data['conditionName'] : null;
        $this->container['dataspaceId'] = isset($data['dataspaceId']) ? $data['dataspaceId'] : null;
        $this->container['pipeId'] = isset($data['pipeId']) ? $data['pipeId'] : null;
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['conditionId']) && (mb_strlen($this->container['conditionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'conditionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['conditionId']) && (mb_strlen($this->container['conditionId']) < 36)) {
                $invalidProperties[] = "invalid value for 'conditionId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['conditionName']) && (mb_strlen($this->container['conditionName']) > 255)) {
                $invalidProperties[] = "invalid value for 'conditionName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['conditionName']) && (mb_strlen($this->container['conditionName']) < 1)) {
                $invalidProperties[] = "invalid value for 'conditionName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['dataspaceId']) && (mb_strlen($this->container['dataspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'dataspaceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['pipeId']) && (mb_strlen($this->container['pipeId']) < 36)) {
                $invalidProperties[] = "invalid value for 'pipeId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) > 65535)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['query']) && (mb_strlen($this->container['query']) < 1)) {
                $invalidProperties[] = "invalid value for 'query', the character length must be bigger than or equal to 1.";
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
    * Gets conditionId
    *  检索条件ID
    *
    * @return string|null
    */
    public function getConditionId()
    {
        return $this->container['conditionId'];
    }

    /**
    * Sets conditionId
    *
    * @param string|null $conditionId 检索条件ID
    *
    * @return $this
    */
    public function setConditionId($conditionId)
    {
        $this->container['conditionId'] = $conditionId;
        return $this;
    }

    /**
    * Gets conditionName
    *  检索条件名称
    *
    * @return string|null
    */
    public function getConditionName()
    {
        return $this->container['conditionName'];
    }

    /**
    * Sets conditionName
    *
    * @param string|null $conditionName 检索条件名称
    *
    * @return $this
    */
    public function setConditionName($conditionName)
    {
        $this->container['conditionName'] = $conditionName;
        return $this;
    }

    /**
    * Gets dataspaceId
    *  数据空间ID
    *
    * @return string|null
    */
    public function getDataspaceId()
    {
        return $this->container['dataspaceId'];
    }

    /**
    * Sets dataspaceId
    *
    * @param string|null $dataspaceId 数据空间ID
    *
    * @return $this
    */
    public function setDataspaceId($dataspaceId)
    {
        $this->container['dataspaceId'] = $dataspaceId;
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
    * Gets query
    *  查询语句
    *
    * @return string|null
    */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
    * Sets query
    *
    * @param string|null $query 查询语句
    *
    * @return $this
    */
    public function setQuery($query)
    {
        $this->container['query'] = $query;
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

