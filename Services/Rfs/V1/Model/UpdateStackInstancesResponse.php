<?php

namespace HuaweiCloud\SDK\Rfs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateStackInstancesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateStackInstancesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stackSetOperationId  资源栈集操作（stack_set_operation）的唯一Id。  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stackSetOperationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stackSetOperationId  资源栈集操作（stack_set_operation）的唯一Id。  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stackSetOperationId' => null
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
    * stackSetOperationId  资源栈集操作（stack_set_operation）的唯一Id。  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stackSetOperationId' => 'stack_set_operation_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stackSetOperationId  资源栈集操作（stack_set_operation）的唯一Id。  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    *
    * @var string[]
    */
    protected static $setters = [
            'stackSetOperationId' => 'setStackSetOperationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stackSetOperationId  资源栈集操作（stack_set_operation）的唯一Id。  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    *
    * @var string[]
    */
    protected static $getters = [
            'stackSetOperationId' => 'getStackSetOperationId'
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
        $this->container['stackSetOperationId'] = isset($data['stackSetOperationId']) ? $data['stackSetOperationId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['stackSetOperationId']) && (mb_strlen($this->container['stackSetOperationId']) > 36)) {
                $invalidProperties[] = "invalid value for 'stackSetOperationId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['stackSetOperationId']) && (mb_strlen($this->container['stackSetOperationId']) < 36)) {
                $invalidProperties[] = "invalid value for 'stackSetOperationId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['stackSetOperationId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['stackSetOperationId'])) {
                $invalidProperties[] = "invalid value for 'stackSetOperationId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
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
    * Gets stackSetOperationId
    *  资源栈集操作（stack_set_operation）的唯一Id。  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    *
    * @return string|null
    */
    public function getStackSetOperationId()
    {
        return $this->container['stackSetOperationId'];
    }

    /**
    * Sets stackSetOperationId
    *
    * @param string|null $stackSetOperationId 资源栈集操作（stack_set_operation）的唯一Id。  此ID由资源编排服务在生成资源栈集操作的时候生成，为UUID。
    *
    * @return $this
    */
    public function setStackSetOperationId($stackSetOperationId)
    {
        $this->container['stackSetOperationId'] = $stackSetOperationId;
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

