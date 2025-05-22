<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IterationHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IterationHistory';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * iterationId  迭代ID
    * projectId  项目ID
    * operator  operator
    * operate  操作类型
    * operateTime  操作时间
    * details  操作详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'iterationId' => 'string',
            'projectId' => 'string',
            'operator' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IterationHistoryOperator',
            'operate' => 'string',
            'operateTime' => 'string',
            'details' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\IterationHistoryDetails[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * iterationId  迭代ID
    * projectId  项目ID
    * operator  operator
    * operate  操作类型
    * operateTime  操作时间
    * details  操作详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'iterationId' => null,
        'projectId' => null,
        'operator' => null,
        'operate' => null,
        'operateTime' => null,
        'details' => null
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
    * iterationId  迭代ID
    * projectId  项目ID
    * operator  operator
    * operate  操作类型
    * operateTime  操作时间
    * details  操作详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'iterationId' => 'iteration_id',
            'projectId' => 'project_id',
            'operator' => 'operator',
            'operate' => 'operate',
            'operateTime' => 'operate_time',
            'details' => 'details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * iterationId  迭代ID
    * projectId  项目ID
    * operator  operator
    * operate  操作类型
    * operateTime  操作时间
    * details  操作详情
    *
    * @var string[]
    */
    protected static $setters = [
            'iterationId' => 'setIterationId',
            'projectId' => 'setProjectId',
            'operator' => 'setOperator',
            'operate' => 'setOperate',
            'operateTime' => 'setOperateTime',
            'details' => 'setDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * iterationId  迭代ID
    * projectId  项目ID
    * operator  operator
    * operate  操作类型
    * operateTime  操作时间
    * details  操作详情
    *
    * @var string[]
    */
    protected static $getters = [
            'iterationId' => 'getIterationId',
            'projectId' => 'getProjectId',
            'operator' => 'getOperator',
            'operate' => 'getOperate',
            'operateTime' => 'getOperateTime',
            'details' => 'getDetails'
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
        $this->container['iterationId'] = isset($data['iterationId']) ? $data['iterationId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['operate'] = isset($data['operate']) ? $data['operate'] : null;
        $this->container['operateTime'] = isset($data['operateTime']) ? $data['operateTime'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
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
    * Gets iterationId
    *  迭代ID
    *
    * @return string|null
    */
    public function getIterationId()
    {
        return $this->container['iterationId'];
    }

    /**
    * Sets iterationId
    *
    * @param string|null $iterationId 迭代ID
    *
    * @return $this
    */
    public function setIterationId($iterationId)
    {
        $this->container['iterationId'] = $iterationId;
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
    * Gets operator
    *  operator
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IterationHistoryOperator|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IterationHistoryOperator|null $operator operator
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets operate
    *  操作类型
    *
    * @return string|null
    */
    public function getOperate()
    {
        return $this->container['operate'];
    }

    /**
    * Sets operate
    *
    * @param string|null $operate 操作类型
    *
    * @return $this
    */
    public function setOperate($operate)
    {
        $this->container['operate'] = $operate;
        return $this;
    }

    /**
    * Gets operateTime
    *  操作时间
    *
    * @return string|null
    */
    public function getOperateTime()
    {
        return $this->container['operateTime'];
    }

    /**
    * Sets operateTime
    *
    * @param string|null $operateTime 操作时间
    *
    * @return $this
    */
    public function setOperateTime($operateTime)
    {
        $this->container['operateTime'] = $operateTime;
        return $this;
    }

    /**
    * Gets details
    *  操作详情
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\IterationHistoryDetails[]|null
    */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
    * Sets details
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\IterationHistoryDetails[]|null $details 操作详情
    *
    * @return $this
    */
    public function setDetails($details)
    {
        $this->container['details'] = $details;
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

