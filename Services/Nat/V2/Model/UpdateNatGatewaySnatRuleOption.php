<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateNatGatewaySnatRuleOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateNatGatewaySnatRuleOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * natGatewayId  公网NAT网关的id。
    * publicIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 约束：弹性公网IP的id个数不能超过20个
    * globalEipId  全域弹性公网IP的id。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'natGatewayId' => 'string',
            'publicIpAddress' => 'string',
            'globalEipId' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * natGatewayId  公网NAT网关的id。
    * publicIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 约束：弹性公网IP的id个数不能超过20个
    * globalEipId  全域弹性公网IP的id。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'natGatewayId' => null,
        'publicIpAddress' => null,
        'globalEipId' => null,
        'description' => null
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
    * natGatewayId  公网NAT网关的id。
    * publicIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 约束：弹性公网IP的id个数不能超过20个
    * globalEipId  全域弹性公网IP的id。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'natGatewayId' => 'nat_gateway_id',
            'publicIpAddress' => 'public_ip_address',
            'globalEipId' => 'global_eip_id',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * natGatewayId  公网NAT网关的id。
    * publicIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 约束：弹性公网IP的id个数不能超过20个
    * globalEipId  全域弹性公网IP的id。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    *
    * @var string[]
    */
    protected static $setters = [
            'natGatewayId' => 'setNatGatewayId',
            'publicIpAddress' => 'setPublicIpAddress',
            'globalEipId' => 'setGlobalEipId',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * natGatewayId  公网NAT网关的id。
    * publicIpAddress  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 约束：弹性公网IP的id个数不能超过20个
    * globalEipId  全域弹性公网IP的id。
    * description  SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    *
    * @var string[]
    */
    protected static $getters = [
            'natGatewayId' => 'getNatGatewayId',
            'publicIpAddress' => 'getPublicIpAddress',
            'globalEipId' => 'getGlobalEipId',
            'description' => 'getDescription'
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
        $this->container['natGatewayId'] = isset($data['natGatewayId']) ? $data['natGatewayId'] : null;
        $this->container['publicIpAddress'] = isset($data['publicIpAddress']) ? $data['publicIpAddress'] : null;
        $this->container['globalEipId'] = isset($data['globalEipId']) ? $data['globalEipId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['natGatewayId'] === null) {
            $invalidProperties[] = "'natGatewayId' can't be null";
        }
            if ((mb_strlen($this->container['natGatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'natGatewayId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['natGatewayId']) < 36)) {
                $invalidProperties[] = "invalid value for 'natGatewayId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets natGatewayId
    *  公网NAT网关的id。
    *
    * @return string
    */
    public function getNatGatewayId()
    {
        return $this->container['natGatewayId'];
    }

    /**
    * Sets natGatewayId
    *
    * @param string $natGatewayId 公网NAT网关的id。
    *
    * @return $this
    */
    public function setNatGatewayId($natGatewayId)
    {
        $this->container['natGatewayId'] = $natGatewayId;
        return $this;
    }

    /**
    * Gets publicIpAddress
    *  功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 约束：弹性公网IP的id个数不能超过20个
    *
    * @return string|null
    */
    public function getPublicIpAddress()
    {
        return $this->container['publicIpAddress'];
    }

    /**
    * Sets publicIpAddress
    *
    * @param string|null $publicIpAddress 功能说明：弹性公网IP，多个弹性公网IP使用逗号分隔。 约束：弹性公网IP的id个数不能超过20个
    *
    * @return $this
    */
    public function setPublicIpAddress($publicIpAddress)
    {
        $this->container['publicIpAddress'] = $publicIpAddress;
        return $this;
    }

    /**
    * Gets globalEipId
    *  全域弹性公网IP的id。
    *
    * @return string|null
    */
    public function getGlobalEipId()
    {
        return $this->container['globalEipId'];
    }

    /**
    * Sets globalEipId
    *
    * @param string|null $globalEipId 全域弹性公网IP的id。
    *
    * @return $this
    */
    public function setGlobalEipId($globalEipId)
    {
        $this->container['globalEipId'] = $globalEipId;
        return $this;
    }

    /**
    * Gets description
    *  SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
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
    * @param string|null $description SNAT规则的描述，长度范围小于等于255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

