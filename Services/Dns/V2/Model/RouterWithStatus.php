<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RouterWithStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RouterWithStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释：** 关联VPC的状态。 **取值范围：** 不涉及。
    * routerId  **参数解释：** 关联VPC的ID。 **取值范围：** 不涉及。
    * routerRegion  **参数解释：** 关联VPC所在的region。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'routerId' => 'string',
            'routerRegion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释：** 关联VPC的状态。 **取值范围：** 不涉及。
    * routerId  **参数解释：** 关联VPC的ID。 **取值范围：** 不涉及。
    * routerRegion  **参数解释：** 关联VPC所在的region。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'routerId' => null,
        'routerRegion' => null
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
    * status  **参数解释：** 关联VPC的状态。 **取值范围：** 不涉及。
    * routerId  **参数解释：** 关联VPC的ID。 **取值范围：** 不涉及。
    * routerRegion  **参数解释：** 关联VPC所在的region。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'routerId' => 'router_id',
            'routerRegion' => 'router_region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释：** 关联VPC的状态。 **取值范围：** 不涉及。
    * routerId  **参数解释：** 关联VPC的ID。 **取值范围：** 不涉及。
    * routerRegion  **参数解释：** 关联VPC所在的region。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'routerId' => 'setRouterId',
            'routerRegion' => 'setRouterRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释：** 关联VPC的状态。 **取值范围：** 不涉及。
    * routerId  **参数解释：** 关联VPC的ID。 **取值范围：** 不涉及。
    * routerRegion  **参数解释：** 关联VPC所在的region。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'routerId' => 'getRouterId',
            'routerRegion' => 'getRouterRegion'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['routerId'] = isset($data['routerId']) ? $data['routerId'] : null;
        $this->container['routerRegion'] = isset($data['routerRegion']) ? $data['routerRegion'] : null;
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
    * Gets status
    *  **参数解释：** 关联VPC的状态。 **取值范围：** 不涉及。
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
    * @param string|null $status **参数解释：** 关联VPC的状态。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets routerId
    *  **参数解释：** 关联VPC的ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRouterId()
    {
        return $this->container['routerId'];
    }

    /**
    * Sets routerId
    *
    * @param string|null $routerId **参数解释：** 关联VPC的ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRouterId($routerId)
    {
        $this->container['routerId'] = $routerId;
        return $this;
    }

    /**
    * Gets routerRegion
    *  **参数解释：** 关联VPC所在的region。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRouterRegion()
    {
        return $this->container['routerRegion'];
    }

    /**
    * Sets routerRegion
    *
    * @param string|null $routerRegion **参数解释：** 关联VPC所在的region。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRouterRegion($routerRegion)
    {
        $this->container['routerRegion'] = $routerRegion;
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

