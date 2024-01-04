<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAction';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名称
    * description  描述
    * actionType  类型，默认AOP_WORKFLOW.
    * actionId  剧本动作ID
    * sortOrder  排序方式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'actionType' => 'string',
            'actionId' => 'string',
            'sortOrder' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名称
    * description  描述
    * actionType  类型，默认AOP_WORKFLOW.
    * actionId  剧本动作ID
    * sortOrder  排序方式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'actionType' => null,
        'actionId' => null,
        'sortOrder' => null
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
    * name  名称
    * description  描述
    * actionType  类型，默认AOP_WORKFLOW.
    * actionId  剧本动作ID
    * sortOrder  排序方式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'actionType' => 'action_type',
            'actionId' => 'action_id',
            'sortOrder' => 'sort_order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名称
    * description  描述
    * actionType  类型，默认AOP_WORKFLOW.
    * actionId  剧本动作ID
    * sortOrder  排序方式
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'actionType' => 'setActionType',
            'actionId' => 'setActionId',
            'sortOrder' => 'setSortOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名称
    * description  描述
    * actionType  类型，默认AOP_WORKFLOW.
    * actionId  剧本动作ID
    * sortOrder  排序方式
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'actionType' => 'getActionType',
            'actionId' => 'getActionId',
            'sortOrder' => 'getSortOrder'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['actionType'] === null) {
            $invalidProperties[] = "'actionType' can't be null";
        }
            if ((mb_strlen($this->container['actionType']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['actionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['actionId'] === null) {
            $invalidProperties[] = "'actionId' can't be null";
        }
            if ((mb_strlen($this->container['actionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['actionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'actionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['sortOrder']) && (mb_strlen($this->container['sortOrder']) > 64)) {
                $invalidProperties[] = "invalid value for 'sortOrder', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sortOrder']) && (mb_strlen($this->container['sortOrder']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortOrder', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets actionType
    *  类型，默认AOP_WORKFLOW.
    *
    * @return string
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param string $actionType 类型，默认AOP_WORKFLOW.
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
        return $this;
    }

    /**
    * Gets actionId
    *  剧本动作ID
    *
    * @return string
    */
    public function getActionId()
    {
        return $this->container['actionId'];
    }

    /**
    * Sets actionId
    *
    * @param string $actionId 剧本动作ID
    *
    * @return $this
    */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;
        return $this;
    }

    /**
    * Gets sortOrder
    *  排序方式
    *
    * @return string|null
    */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
    * Sets sortOrder
    *
    * @param string|null $sortOrder 排序方式
    *
    * @return $this
    */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;
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

