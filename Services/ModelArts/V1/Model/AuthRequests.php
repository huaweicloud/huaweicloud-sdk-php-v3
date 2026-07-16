<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuthRequests implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuthRequests';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionId  **参数解释**：随机UUID，用来定位使用。 **取值范围**不涉及。
    * action  **参数解释**：细粒度action。 **取值范围**不涉及。
    * resource  **参数解释**：资源。 **取值范围**不涉及。
    * serviceAttributes  **参数解释**：操作对象。 **取值范围**不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionId' => 'string',
            'action' => 'string',
            'resource' => 'string',
            'serviceAttributes' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionId  **参数解释**：随机UUID，用来定位使用。 **取值范围**不涉及。
    * action  **参数解释**：细粒度action。 **取值范围**不涉及。
    * resource  **参数解释**：资源。 **取值范围**不涉及。
    * serviceAttributes  **参数解释**：操作对象。 **取值范围**不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionId' => null,
        'action' => null,
        'resource' => null,
        'serviceAttributes' => null
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
    * actionId  **参数解释**：随机UUID，用来定位使用。 **取值范围**不涉及。
    * action  **参数解释**：细粒度action。 **取值范围**不涉及。
    * resource  **参数解释**：资源。 **取值范围**不涉及。
    * serviceAttributes  **参数解释**：操作对象。 **取值范围**不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionId' => 'action_id',
            'action' => 'action',
            'resource' => 'resource',
            'serviceAttributes' => 'service_attributes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionId  **参数解释**：随机UUID，用来定位使用。 **取值范围**不涉及。
    * action  **参数解释**：细粒度action。 **取值范围**不涉及。
    * resource  **参数解释**：资源。 **取值范围**不涉及。
    * serviceAttributes  **参数解释**：操作对象。 **取值范围**不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'actionId' => 'setActionId',
            'action' => 'setAction',
            'resource' => 'setResource',
            'serviceAttributes' => 'setServiceAttributes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionId  **参数解释**：随机UUID，用来定位使用。 **取值范围**不涉及。
    * action  **参数解释**：细粒度action。 **取值范围**不涉及。
    * resource  **参数解释**：资源。 **取值范围**不涉及。
    * serviceAttributes  **参数解释**：操作对象。 **取值范围**不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'actionId' => 'getActionId',
            'action' => 'getAction',
            'resource' => 'getResource',
            'serviceAttributes' => 'getServiceAttributes'
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
        $this->container['actionId'] = isset($data['actionId']) ? $data['actionId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['serviceAttributes'] = isset($data['serviceAttributes']) ? $data['serviceAttributes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['actionId'] === null) {
            $invalidProperties[] = "'actionId' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
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
    * Gets actionId
    *  **参数解释**：随机UUID，用来定位使用。 **取值范围**不涉及。
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
    * @param string $actionId **参数解释**：随机UUID，用来定位使用。 **取值范围**不涉及。
    *
    * @return $this
    */
    public function setActionId($actionId)
    {
        $this->container['actionId'] = $actionId;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释**：细粒度action。 **取值范围**不涉及。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action **参数解释**：细粒度action。 **取值范围**不涉及。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets resource
    *  **参数解释**：资源。 **取值范围**不涉及。
    *
    * @return string|null
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string|null $resource **参数解释**：资源。 **取值范围**不涉及。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets serviceAttributes
    *  **参数解释**：操作对象。 **取值范围**不涉及。
    *
    * @return map[string,string]|null
    */
    public function getServiceAttributes()
    {
        return $this->container['serviceAttributes'];
    }

    /**
    * Sets serviceAttributes
    *
    * @param map[string,string]|null $serviceAttributes **参数解释**：操作对象。 **取值范围**不涉及。
    *
    * @return $this
    */
    public function setServiceAttributes($serviceAttributes)
    {
        $this->container['serviceAttributes'] = $serviceAttributes;
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

