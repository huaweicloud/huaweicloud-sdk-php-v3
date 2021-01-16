<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaSecurityGroupCommonRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaSecurityGroupCommonRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fromPort' => 'int',
            'group' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaSecurityGroupCommonGroup',
            'id' => 'string',
            'ipProtocol' => 'string',
            'ipRange' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaSecurityGroupCommonIpRange',
            'parentGroupId' => 'string',
            'toPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fromPort' => 'int32',
        'group' => null,
        'id' => null,
        'ipProtocol' => null,
        'ipRange' => null,
        'parentGroupId' => null,
        'toPort' => 'int32'
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fromPort' => 'from_port',
            'group' => 'group',
            'id' => 'id',
            'ipProtocol' => 'ip_protocol',
            'ipRange' => 'ip_range',
            'parentGroupId' => 'parent_group_id',
            'toPort' => 'to_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'fromPort' => 'setFromPort',
            'group' => 'setGroup',
            'id' => 'setId',
            'ipProtocol' => 'setIpProtocol',
            'ipRange' => 'setIpRange',
            'parentGroupId' => 'setParentGroupId',
            'toPort' => 'setToPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'fromPort' => 'getFromPort',
            'group' => 'getGroup',
            'id' => 'getId',
            'ipProtocol' => 'getIpProtocol',
            'ipRange' => 'getIpRange',
            'parentGroupId' => 'getParentGroupId',
            'toPort' => 'getToPort'
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
        $this->container['fromPort'] = isset($data['fromPort']) ? $data['fromPort'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ipProtocol'] = isset($data['ipProtocol']) ? $data['ipProtocol'] : null;
        $this->container['ipRange'] = isset($data['ipRange']) ? $data['ipRange'] : null;
        $this->container['parentGroupId'] = isset($data['parentGroupId']) ? $data['parentGroupId'] : null;
        $this->container['toPort'] = isset($data['toPort']) ? $data['toPort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fromPort'] === null) {
            $invalidProperties[] = "'fromPort' can't be null";
        }
        if ($this->container['group'] === null) {
            $invalidProperties[] = "'group' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['ipProtocol'] === null) {
            $invalidProperties[] = "'ipProtocol' can't be null";
        }
        if ($this->container['ipRange'] === null) {
            $invalidProperties[] = "'ipRange' can't be null";
        }
        if ($this->container['parentGroupId'] === null) {
            $invalidProperties[] = "'parentGroupId' can't be null";
        }
        if ($this->container['toPort'] === null) {
            $invalidProperties[] = "'toPort' can't be null";
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
    * Gets fromPort
    *
    * @return int
    */
    public function getFromPort()
    {
        return $this->container['fromPort'];
    }

    /**
    * Sets fromPort
    *
    * @param int $fromPort 起始端口，范围1-65535，且不大于to_port。 ip_protocol设置为icmp时，from_port表示type，范围是0-255。
    *
    * @return $this
    */
    public function setFromPort($fromPort)
    {
        $this->container['fromPort'] = $fromPort;
        return $this;
    }

    /**
    * Gets group
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaSecurityGroupCommonGroup
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaSecurityGroupCommonGroup $group group
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets id
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
    * @param string $id 安全组规则ID，UUID格式。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ipProtocol
    *
    * @return string
    */
    public function getIpProtocol()
    {
        return $this->container['ipProtocol'];
    }

    /**
    * Sets ipProtocol
    *
    * @param string $ipProtocol 协议类型或直接指定IP协议号，取值可为icmp，tcp，udp或IP协议号。
    *
    * @return $this
    */
    public function setIpProtocol($ipProtocol)
    {
        $this->container['ipProtocol'] = $ipProtocol;
        return $this;
    }

    /**
    * Gets ipRange
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaSecurityGroupCommonIpRange
    */
    public function getIpRange()
    {
        return $this->container['ipRange'];
    }

    /**
    * Sets ipRange
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaSecurityGroupCommonIpRange $ipRange ipRange
    *
    * @return $this
    */
    public function setIpRange($ipRange)
    {
        $this->container['ipRange'] = $ipRange;
        return $this;
    }

    /**
    * Gets parentGroupId
    *
    * @return string
    */
    public function getParentGroupId()
    {
        return $this->container['parentGroupId'];
    }

    /**
    * Sets parentGroupId
    *
    * @param string $parentGroupId 相关联的安全组ID，UUID格式。
    *
    * @return $this
    */
    public function setParentGroupId($parentGroupId)
    {
        $this->container['parentGroupId'] = $parentGroupId;
        return $this;
    }

    /**
    * Gets toPort
    *
    * @return int
    */
    public function getToPort()
    {
        return $this->container['toPort'];
    }

    /**
    * Sets toPort
    *
    * @param int $toPort 终止端口，范围1-65535，且不小于from_port。 ip_protocol设置为icmp时，to_port表示code，范围是0-255，且如果from_port为-1，to_port为-1表示任意ICMP报文。
    *
    * @return $this
    */
    public function setToPort($toPort)
    {
        $this->container['toPort'] = $toPort;
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

