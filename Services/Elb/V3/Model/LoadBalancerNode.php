<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadBalancerNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadBalancerNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：负载均衡器id。  **取值范围**：不涉及
    * name  **参数解释**：负载均衡器名称。  **取值范围**：不涉及
    * guaranteed  **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
    * l4FlavorId  **参数解释**：网络型规格ID。  **取值范围**：不涉及
    * l7FlavorId  **参数解释**：应用型规格ID。  **取值范围**：不涉及
    * vipAddress  **参数解释**：ipv4地址。  **取值范围**：不涉及
    * ipv6VipAddress  **参数解释**：ipv6地址。  **取值范围**：不涉及
    * availabilityZoneList  **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'guaranteed' => 'bool',
            'l4FlavorId' => 'string',
            'l7FlavorId' => 'string',
            'vipAddress' => 'string',
            'ipv6VipAddress' => 'string',
            'availabilityZoneList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：负载均衡器id。  **取值范围**：不涉及
    * name  **参数解释**：负载均衡器名称。  **取值范围**：不涉及
    * guaranteed  **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
    * l4FlavorId  **参数解释**：网络型规格ID。  **取值范围**：不涉及
    * l7FlavorId  **参数解释**：应用型规格ID。  **取值范围**：不涉及
    * vipAddress  **参数解释**：ipv4地址。  **取值范围**：不涉及
    * ipv6VipAddress  **参数解释**：ipv6地址。  **取值范围**：不涉及
    * availabilityZoneList  **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'guaranteed' => null,
        'l4FlavorId' => null,
        'l7FlavorId' => null,
        'vipAddress' => null,
        'ipv6VipAddress' => null,
        'availabilityZoneList' => null
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
    * id  **参数解释**：负载均衡器id。  **取值范围**：不涉及
    * name  **参数解释**：负载均衡器名称。  **取值范围**：不涉及
    * guaranteed  **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
    * l4FlavorId  **参数解释**：网络型规格ID。  **取值范围**：不涉及
    * l7FlavorId  **参数解释**：应用型规格ID。  **取值范围**：不涉及
    * vipAddress  **参数解释**：ipv4地址。  **取值范围**：不涉及
    * ipv6VipAddress  **参数解释**：ipv6地址。  **取值范围**：不涉及
    * availabilityZoneList  **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'guaranteed' => 'guaranteed',
            'l4FlavorId' => 'l4_flavor_id',
            'l7FlavorId' => 'l7_flavor_id',
            'vipAddress' => 'vip_address',
            'ipv6VipAddress' => 'ipv6_vip_address',
            'availabilityZoneList' => 'availability_zone_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：负载均衡器id。  **取值范围**：不涉及
    * name  **参数解释**：负载均衡器名称。  **取值范围**：不涉及
    * guaranteed  **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
    * l4FlavorId  **参数解释**：网络型规格ID。  **取值范围**：不涉及
    * l7FlavorId  **参数解释**：应用型规格ID。  **取值范围**：不涉及
    * vipAddress  **参数解释**：ipv4地址。  **取值范围**：不涉及
    * ipv6VipAddress  **参数解释**：ipv6地址。  **取值范围**：不涉及
    * availabilityZoneList  **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'guaranteed' => 'setGuaranteed',
            'l4FlavorId' => 'setL4FlavorId',
            'l7FlavorId' => 'setL7FlavorId',
            'vipAddress' => 'setVipAddress',
            'ipv6VipAddress' => 'setIpv6VipAddress',
            'availabilityZoneList' => 'setAvailabilityZoneList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：负载均衡器id。  **取值范围**：不涉及
    * name  **参数解释**：负载均衡器名称。  **取值范围**：不涉及
    * guaranteed  **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
    * l4FlavorId  **参数解释**：网络型规格ID。  **取值范围**：不涉及
    * l7FlavorId  **参数解释**：应用型规格ID。  **取值范围**：不涉及
    * vipAddress  **参数解释**：ipv4地址。  **取值范围**：不涉及
    * ipv6VipAddress  **参数解释**：ipv6地址。  **取值范围**：不涉及
    * availabilityZoneList  **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'guaranteed' => 'getGuaranteed',
            'l4FlavorId' => 'getL4FlavorId',
            'l7FlavorId' => 'getL7FlavorId',
            'vipAddress' => 'getVipAddress',
            'ipv6VipAddress' => 'getIpv6VipAddress',
            'availabilityZoneList' => 'getAvailabilityZoneList'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['guaranteed'] = isset($data['guaranteed']) ? $data['guaranteed'] : null;
        $this->container['l4FlavorId'] = isset($data['l4FlavorId']) ? $data['l4FlavorId'] : null;
        $this->container['l7FlavorId'] = isset($data['l7FlavorId']) ? $data['l7FlavorId'] : null;
        $this->container['vipAddress'] = isset($data['vipAddress']) ? $data['vipAddress'] : null;
        $this->container['ipv6VipAddress'] = isset($data['ipv6VipAddress']) ? $data['ipv6VipAddress'] : null;
        $this->container['availabilityZoneList'] = isset($data['availabilityZoneList']) ? $data['availabilityZoneList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['guaranteed'] === null) {
            $invalidProperties[] = "'guaranteed' can't be null";
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
    * Gets id
    *  **参数解释**：负载均衡器id。  **取值范围**：不涉及
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**：负载均衡器id。  **取值范围**：不涉及
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
    *  **参数解释**：负载均衡器名称。  **取值范围**：不涉及
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
    * @param string $name **参数解释**：负载均衡器名称。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets guaranteed
    *  **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
    *
    * @return bool
    */
    public function getGuaranteed()
    {
        return $this->container['guaranteed'];
    }

    /**
    * Sets guaranteed
    *
    * @param bool $guaranteed **参数解释**：是否独享型LB。  **取值范围**： - false：共享型。 - true：独享型。
    *
    * @return $this
    */
    public function setGuaranteed($guaranteed)
    {
        $this->container['guaranteed'] = $guaranteed;
        return $this;
    }

    /**
    * Gets l4FlavorId
    *  **参数解释**：网络型规格ID。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getL4FlavorId()
    {
        return $this->container['l4FlavorId'];
    }

    /**
    * Sets l4FlavorId
    *
    * @param string|null $l4FlavorId **参数解释**：网络型规格ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setL4FlavorId($l4FlavorId)
    {
        $this->container['l4FlavorId'] = $l4FlavorId;
        return $this;
    }

    /**
    * Gets l7FlavorId
    *  **参数解释**：应用型规格ID。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getL7FlavorId()
    {
        return $this->container['l7FlavorId'];
    }

    /**
    * Sets l7FlavorId
    *
    * @param string|null $l7FlavorId **参数解释**：应用型规格ID。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setL7FlavorId($l7FlavorId)
    {
        $this->container['l7FlavorId'] = $l7FlavorId;
        return $this;
    }

    /**
    * Gets vipAddress
    *  **参数解释**：ipv4地址。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getVipAddress()
    {
        return $this->container['vipAddress'];
    }

    /**
    * Sets vipAddress
    *
    * @param string|null $vipAddress **参数解释**：ipv4地址。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setVipAddress($vipAddress)
    {
        $this->container['vipAddress'] = $vipAddress;
        return $this;
    }

    /**
    * Gets ipv6VipAddress
    *  **参数解释**：ipv6地址。  **取值范围**：不涉及
    *
    * @return string|null
    */
    public function getIpv6VipAddress()
    {
        return $this->container['ipv6VipAddress'];
    }

    /**
    * Sets ipv6VipAddress
    *
    * @param string|null $ipv6VipAddress **参数解释**：ipv6地址。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setIpv6VipAddress($ipv6VipAddress)
    {
        $this->container['ipv6VipAddress'] = $ipv6VipAddress;
        return $this;
    }

    /**
    * Gets availabilityZoneList
    *  **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
    *
    * @return string[]|null
    */
    public function getAvailabilityZoneList()
    {
        return $this->container['availabilityZoneList'];
    }

    /**
    * Sets availabilityZoneList
    *
    * @param string[]|null $availabilityZoneList **参数解释**：负载均衡器所在的可用区列表。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setAvailabilityZoneList($availabilityZoneList)
    {
        $this->container['availabilityZoneList'] = $availabilityZoneList;
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

