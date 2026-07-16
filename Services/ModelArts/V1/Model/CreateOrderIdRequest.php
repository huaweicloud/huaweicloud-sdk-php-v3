<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateOrderIdRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateOrderIdRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：资源池ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * actionType  **参数解释**：订单操作类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - toPeriod：按需转包周期，默认值 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，默认是0。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'actionType' => 'string',
            'workspaceId' => 'string',
            'body' => '\HuaweiCloud\SDK\ModelArts\V1\Model\CreateOrderRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：资源池ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * actionType  **参数解释**：订单操作类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - toPeriod：按需转包周期，默认值 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，默认是0。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'actionType' => null,
        'workspaceId' => null,
        'body' => null
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
    * name  **参数解释**：资源池ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * actionType  **参数解释**：订单操作类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - toPeriod：按需转包周期，默认值 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，默认是0。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'actionType' => 'actionType',
            'workspaceId' => 'workspaceId',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：资源池ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * actionType  **参数解释**：订单操作类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - toPeriod：按需转包周期，默认值 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，默认是0。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'actionType' => 'setActionType',
            'workspaceId' => 'setWorkspaceId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：资源池ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * actionType  **参数解释**：订单操作类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - toPeriod：按需转包周期，默认值 **默认取值**：不涉及。
    * workspaceId  **参数解释**：工作空间ID，默认是0。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'actionType' => 'getActionType',
            'workspaceId' => 'getWorkspaceId',
            'body' => 'getBody'
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
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
    *  **参数解释**：资源池ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**：资源池ID。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets actionType
    *  **参数解释**：订单操作类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - toPeriod：按需转包周期，默认值 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param string|null $actionType **参数解释**：订单操作类型。 **约束限制**：不涉及。 **取值范围**：可选值如下： - toPeriod：按需转包周期，默认值 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
        return $this;
    }

    /**
    * Gets workspaceId
    *  **参数解释**：工作空间ID，默认是0。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId **参数解释**：工作空间ID，默认是0。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\CreateOrderRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\CreateOrderRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

