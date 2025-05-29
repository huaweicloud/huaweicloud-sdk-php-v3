<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListExecutionStepsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListExecutionStepsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executionId  executionId
    * limit  每页显示的条目数量
    * offset  从offset指定的下一条数据开始查询
    * executionStepIdList  步骤id数组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executionId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'executionStepIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executionId  executionId
    * limit  每页显示的条目数量
    * offset  从offset指定的下一条数据开始查询
    * executionStepIdList  步骤id数组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executionId' => null,
        'limit' => 'int32',
        'offset' => 'int64',
        'executionStepIdList' => null
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
    * executionId  executionId
    * limit  每页显示的条目数量
    * offset  从offset指定的下一条数据开始查询
    * executionStepIdList  步骤id数组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executionId' => 'execution_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'executionStepIdList' => 'execution_step_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executionId  executionId
    * limit  每页显示的条目数量
    * offset  从offset指定的下一条数据开始查询
    * executionStepIdList  步骤id数组
    *
    * @var string[]
    */
    protected static $setters = [
            'executionId' => 'setExecutionId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'executionStepIdList' => 'setExecutionStepIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executionId  executionId
    * limit  每页显示的条目数量
    * offset  从offset指定的下一条数据开始查询
    * executionStepIdList  步骤id数组
    *
    * @var string[]
    */
    protected static $getters = [
            'executionId' => 'getExecutionId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'executionStepIdList' => 'getExecutionStepIdList'
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
        $this->container['executionId'] = isset($data['executionId']) ? $data['executionId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['executionStepIdList'] = isset($data['executionStepIdList']) ? $data['executionStepIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['executionId'] === null) {
            $invalidProperties[] = "'executionId' can't be null";
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
    * Gets executionId
    *  executionId
    *
    * @return string
    */
    public function getExecutionId()
    {
        return $this->container['executionId'];
    }

    /**
    * Sets executionId
    *
    * @param string $executionId executionId
    *
    * @return $this
    */
    public function setExecutionId($executionId)
    {
        $this->container['executionId'] = $executionId;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条目数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  从offset指定的下一条数据开始查询
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 从offset指定的下一条数据开始查询
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets executionStepIdList
    *  步骤id数组
    *
    * @return string[]|null
    */
    public function getExecutionStepIdList()
    {
        return $this->container['executionStepIdList'];
    }

    /**
    * Sets executionStepIdList
    *
    * @param string[]|null $executionStepIdList 步骤id数组
    *
    * @return $this
    */
    public function setExecutionStepIdList($executionStepIdList)
    {
        $this->container['executionStepIdList'] = $executionStepIdList;
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

