<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePrivateSnatOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePrivateSnatOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gatewayId  私网NAT网关实例的ID。
    * cidr  功能说明：规则匹配的CIDR。取值约束：与virsubnet_id参数二选一。
    * virsubnetId  功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    * description  SNAT规则的描述。
    * transitIpIds  功能说明：中转IP的ID的列表。 取值约束：中转IP的ID个数不能超过1个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gatewayId' => 'string',
            'cidr' => 'string',
            'virsubnetId' => 'string',
            'description' => 'string',
            'transitIpIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gatewayId  私网NAT网关实例的ID。
    * cidr  功能说明：规则匹配的CIDR。取值约束：与virsubnet_id参数二选一。
    * virsubnetId  功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    * description  SNAT规则的描述。
    * transitIpIds  功能说明：中转IP的ID的列表。 取值约束：中转IP的ID个数不能超过1个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gatewayId' => null,
        'cidr' => null,
        'virsubnetId' => null,
        'description' => null,
        'transitIpIds' => null
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
    * gatewayId  私网NAT网关实例的ID。
    * cidr  功能说明：规则匹配的CIDR。取值约束：与virsubnet_id参数二选一。
    * virsubnetId  功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    * description  SNAT规则的描述。
    * transitIpIds  功能说明：中转IP的ID的列表。 取值约束：中转IP的ID个数不能超过1个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gatewayId' => 'gateway_id',
            'cidr' => 'cidr',
            'virsubnetId' => 'virsubnet_id',
            'description' => 'description',
            'transitIpIds' => 'transit_ip_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gatewayId  私网NAT网关实例的ID。
    * cidr  功能说明：规则匹配的CIDR。取值约束：与virsubnet_id参数二选一。
    * virsubnetId  功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    * description  SNAT规则的描述。
    * transitIpIds  功能说明：中转IP的ID的列表。 取值约束：中转IP的ID个数不能超过1个。
    *
    * @var string[]
    */
    protected static $setters = [
            'gatewayId' => 'setGatewayId',
            'cidr' => 'setCidr',
            'virsubnetId' => 'setVirsubnetId',
            'description' => 'setDescription',
            'transitIpIds' => 'setTransitIpIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gatewayId  私网NAT网关实例的ID。
    * cidr  功能说明：规则匹配的CIDR。取值约束：与virsubnet_id参数二选一。
    * virsubnetId  功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    * description  SNAT规则的描述。
    * transitIpIds  功能说明：中转IP的ID的列表。 取值约束：中转IP的ID个数不能超过1个。
    *
    * @var string[]
    */
    protected static $getters = [
            'gatewayId' => 'getGatewayId',
            'cidr' => 'getCidr',
            'virsubnetId' => 'getVirsubnetId',
            'description' => 'getDescription',
            'transitIpIds' => 'getTransitIpIds'
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
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['transitIpIds'] = isset($data['transitIpIds']) ? $data['transitIpIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['gatewayId'] === null) {
            $invalidProperties[] = "'gatewayId' can't be null";
        }
            if ((mb_strlen($this->container['gatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['gatewayId']) < 36)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) > 18)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be smaller than or equal to 18.";
            }
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) < 9)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be bigger than or equal to 9.";
            }
            if (!is_null($this->container['virsubnetId']) && (mb_strlen($this->container['virsubnetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['virsubnetId']) && (mb_strlen($this->container['virsubnetId']) < 36)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['transitIpIds'] === null) {
            $invalidProperties[] = "'transitIpIds' can't be null";
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
    * Gets gatewayId
    *  私网NAT网关实例的ID。
    *
    * @return string
    */
    public function getGatewayId()
    {
        return $this->container['gatewayId'];
    }

    /**
    * Sets gatewayId
    *
    * @param string $gatewayId 私网NAT网关实例的ID。
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets cidr
    *  功能说明：规则匹配的CIDR。取值约束：与virsubnet_id参数二选一。
    *
    * @return string|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string|null $cidr 功能说明：规则匹配的CIDR。取值约束：与virsubnet_id参数二选一。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    *
    * @return string|null
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string|null $virsubnetId 功能说明：规则匹配的子网的ID。 取值约束：与cidr参数二选一。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets description
    *  SNAT规则的描述。
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
    * @param string|null $description SNAT规则的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets transitIpIds
    *  功能说明：中转IP的ID的列表。 取值约束：中转IP的ID个数不能超过1个。
    *
    * @return string[]
    */
    public function getTransitIpIds()
    {
        return $this->container['transitIpIds'];
    }

    /**
    * Sets transitIpIds
    *
    * @param string[] $transitIpIds 功能说明：中转IP的ID的列表。 取值约束：中转IP的ID个数不能超过1个。
    *
    * @return $this
    */
    public function setTransitIpIds($transitIpIds)
    {
        $this->container['transitIpIds'] = $transitIpIds;
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

