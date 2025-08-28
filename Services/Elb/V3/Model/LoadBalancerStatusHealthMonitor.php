<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadBalancerStatusHealthMonitor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadBalancerStatusHealthMonitor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**：健康检查器协议类型。  **取值范围**：TCP、UDP_CONNECT、HTTP。
    * id  **参数解释**：健康检查器ID。  **取值范围**：不涉及
    * name  **参数解释**：健康检查器名称。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：健康检查器的配置状态。  **取值范围**：ACTIVE表示使用中。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'id' => 'string',
            'name' => 'string',
            'provisioningStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**：健康检查器协议类型。  **取值范围**：TCP、UDP_CONNECT、HTTP。
    * id  **参数解释**：健康检查器ID。  **取值范围**：不涉及
    * name  **参数解释**：健康检查器名称。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：健康检查器的配置状态。  **取值范围**：ACTIVE表示使用中。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'id' => null,
        'name' => null,
        'provisioningStatus' => null
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
    * type  **参数解释**：健康检查器协议类型。  **取值范围**：TCP、UDP_CONNECT、HTTP。
    * id  **参数解释**：健康检查器ID。  **取值范围**：不涉及
    * name  **参数解释**：健康检查器名称。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：健康检查器的配置状态。  **取值范围**：ACTIVE表示使用中。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'id' => 'id',
            'name' => 'name',
            'provisioningStatus' => 'provisioning_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**：健康检查器协议类型。  **取值范围**：TCP、UDP_CONNECT、HTTP。
    * id  **参数解释**：健康检查器ID。  **取值范围**：不涉及
    * name  **参数解释**：健康检查器名称。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：健康检查器的配置状态。  **取值范围**：ACTIVE表示使用中。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'id' => 'setId',
            'name' => 'setName',
            'provisioningStatus' => 'setProvisioningStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**：健康检查器协议类型。  **取值范围**：TCP、UDP_CONNECT、HTTP。
    * id  **参数解释**：健康检查器ID。  **取值范围**：不涉及
    * name  **参数解释**：健康检查器名称。  **取值范围**：不涉及
    * provisioningStatus  **参数解释**：健康检查器的配置状态。  **取值范围**：ACTIVE表示使用中。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'id' => 'getId',
            'name' => 'getName',
            'provisioningStatus' => 'getProvisioningStatus'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
    * Gets type
    *  **参数解释**：健康检查器协议类型。  **取值范围**：TCP、UDP_CONNECT、HTTP。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：健康检查器协议类型。  **取值范围**：TCP、UDP_CONNECT、HTTP。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：健康检查器ID。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**：健康检查器ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：健康检查器名称。  **取值范围**：不涉及
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
    * @param string|null $name **参数解释**：健康检查器名称。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  **参数解释**：健康检查器的配置状态。  **取值范围**：ACTIVE表示使用中。
    *
    * @return string|null
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string|null $provisioningStatus **参数解释**：健康检查器的配置状态。  **取值范围**：ACTIVE表示使用中。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
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

