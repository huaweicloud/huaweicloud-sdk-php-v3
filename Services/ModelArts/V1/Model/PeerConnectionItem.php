<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeerConnectionItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PeerConnectionItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * peerVpcId  **参数解释**：对端的VPC ID。 **取值范围**：不涉及。
    * peerSubnetId  **参数解释**：对端的子网ID。 **取值范围**：不涉及。
    * defaultGateWay  **参数解释**：创建默认路由的开关，默认为false不创建。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'peerVpcId' => 'string',
            'peerSubnetId' => 'string',
            'defaultGateWay' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * peerVpcId  **参数解释**：对端的VPC ID。 **取值范围**：不涉及。
    * peerSubnetId  **参数解释**：对端的子网ID。 **取值范围**：不涉及。
    * defaultGateWay  **参数解释**：创建默认路由的开关，默认为false不创建。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'peerVpcId' => null,
        'peerSubnetId' => null,
        'defaultGateWay' => null
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
    * peerVpcId  **参数解释**：对端的VPC ID。 **取值范围**：不涉及。
    * peerSubnetId  **参数解释**：对端的子网ID。 **取值范围**：不涉及。
    * defaultGateWay  **参数解释**：创建默认路由的开关，默认为false不创建。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'peerVpcId' => 'peerVpcId',
            'peerSubnetId' => 'peerSubnetId',
            'defaultGateWay' => 'defaultGateWay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * peerVpcId  **参数解释**：对端的VPC ID。 **取值范围**：不涉及。
    * peerSubnetId  **参数解释**：对端的子网ID。 **取值范围**：不涉及。
    * defaultGateWay  **参数解释**：创建默认路由的开关，默认为false不创建。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'peerVpcId' => 'setPeerVpcId',
            'peerSubnetId' => 'setPeerSubnetId',
            'defaultGateWay' => 'setDefaultGateWay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * peerVpcId  **参数解释**：对端的VPC ID。 **取值范围**：不涉及。
    * peerSubnetId  **参数解释**：对端的子网ID。 **取值范围**：不涉及。
    * defaultGateWay  **参数解释**：创建默认路由的开关，默认为false不创建。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'peerVpcId' => 'getPeerVpcId',
            'peerSubnetId' => 'getPeerSubnetId',
            'defaultGateWay' => 'getDefaultGateWay'
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
        $this->container['peerVpcId'] = isset($data['peerVpcId']) ? $data['peerVpcId'] : null;
        $this->container['peerSubnetId'] = isset($data['peerSubnetId']) ? $data['peerSubnetId'] : null;
        $this->container['defaultGateWay'] = isset($data['defaultGateWay']) ? $data['defaultGateWay'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['peerVpcId'] === null) {
            $invalidProperties[] = "'peerVpcId' can't be null";
        }
        if ($this->container['peerSubnetId'] === null) {
            $invalidProperties[] = "'peerSubnetId' can't be null";
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
    * Gets peerVpcId
    *  **参数解释**：对端的VPC ID。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getPeerVpcId()
    {
        return $this->container['peerVpcId'];
    }

    /**
    * Sets peerVpcId
    *
    * @param string $peerVpcId **参数解释**：对端的VPC ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPeerVpcId($peerVpcId)
    {
        $this->container['peerVpcId'] = $peerVpcId;
        return $this;
    }

    /**
    * Gets peerSubnetId
    *  **参数解释**：对端的子网ID。 **取值范围**：不涉及。
    *
    * @return string
    */
    public function getPeerSubnetId()
    {
        return $this->container['peerSubnetId'];
    }

    /**
    * Sets peerSubnetId
    *
    * @param string $peerSubnetId **参数解释**：对端的子网ID。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setPeerSubnetId($peerSubnetId)
    {
        $this->container['peerSubnetId'] = $peerSubnetId;
        return $this;
    }

    /**
    * Gets defaultGateWay
    *  **参数解释**：创建默认路由的开关，默认为false不创建。 **取值范围**：不涉及。
    *
    * @return bool|null
    */
    public function getDefaultGateWay()
    {
        return $this->container['defaultGateWay'];
    }

    /**
    * Sets defaultGateWay
    *
    * @param bool|null $defaultGateWay **参数解释**：创建默认路由的开关，默认为false不创建。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setDefaultGateWay($defaultGateWay)
    {
        $this->container['defaultGateWay'] = $defaultGateWay;
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

