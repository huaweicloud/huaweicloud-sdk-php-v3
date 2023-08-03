<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperateErrorInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperateErrorInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workflowUrn  唯一标识ID，流程URN
    * errorDetail  错误详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workflowUrn' => 'string',
            'errorDetail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workflowUrn  唯一标识ID，流程URN
    * errorDetail  错误详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workflowUrn' => null,
        'errorDetail' => null
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
    * workflowUrn  唯一标识ID，流程URN
    * errorDetail  错误详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workflowUrn' => 'workflow_urn',
            'errorDetail' => 'error_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workflowUrn  唯一标识ID，流程URN
    * errorDetail  错误详情
    *
    * @var string[]
    */
    protected static $setters = [
            'workflowUrn' => 'setWorkflowUrn',
            'errorDetail' => 'setErrorDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workflowUrn  唯一标识ID，流程URN
    * errorDetail  错误详情
    *
    * @var string[]
    */
    protected static $getters = [
            'workflowUrn' => 'getWorkflowUrn',
            'errorDetail' => 'getErrorDetail'
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
        $this->container['workflowUrn'] = isset($data['workflowUrn']) ? $data['workflowUrn'] : null;
        $this->container['errorDetail'] = isset($data['errorDetail']) ? $data['errorDetail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['workflowUrn']) && (mb_strlen($this->container['workflowUrn']) > 128)) {
                $invalidProperties[] = "invalid value for 'workflowUrn', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['workflowUrn']) && (mb_strlen($this->container['workflowUrn']) < 1)) {
                $invalidProperties[] = "invalid value for 'workflowUrn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['errorDetail']) && (mb_strlen($this->container['errorDetail']) > 64)) {
                $invalidProperties[] = "invalid value for 'errorDetail', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['errorDetail']) && (mb_strlen($this->container['errorDetail']) < 1)) {
                $invalidProperties[] = "invalid value for 'errorDetail', the character length must be bigger than or equal to 1.";
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
    * Gets workflowUrn
    *  唯一标识ID，流程URN
    *
    * @return string|null
    */
    public function getWorkflowUrn()
    {
        return $this->container['workflowUrn'];
    }

    /**
    * Sets workflowUrn
    *
    * @param string|null $workflowUrn 唯一标识ID，流程URN
    *
    * @return $this
    */
    public function setWorkflowUrn($workflowUrn)
    {
        $this->container['workflowUrn'] = $workflowUrn;
        return $this;
    }

    /**
    * Gets errorDetail
    *  错误详情
    *
    * @return string|null
    */
    public function getErrorDetail()
    {
        return $this->container['errorDetail'];
    }

    /**
    * Sets errorDetail
    *
    * @param string|null $errorDetail 错误详情
    *
    * @return $this
    */
    public function setErrorDetail($errorDetail)
    {
        $this->container['errorDetail'] = $errorDetail;
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

