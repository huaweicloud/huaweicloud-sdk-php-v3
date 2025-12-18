<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceNetwork implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceNetwork';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * iPv4Cidr  **参数解释：** kubernetes clusterIP IPv4 CIDR取值范围。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 默认为\"10.247.0.0/16\"。
    * iPv6Cidr  **参数解释：** kubernetes clusterIP IPv6 CIDR取值范围。 **约束限制：** 仅开启IPV6双栈的Turbo集群支持配置IPv6服务网段。 **取值范围：** 不涉及 **默认取值：** Turbo集群默认为\"fc00::/112\" CCE集群默认为\"fd00:1234::/120\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'iPv4Cidr' => 'string',
            'iPv6Cidr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * iPv4Cidr  **参数解释：** kubernetes clusterIP IPv4 CIDR取值范围。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 默认为\"10.247.0.0/16\"。
    * iPv6Cidr  **参数解释：** kubernetes clusterIP IPv6 CIDR取值范围。 **约束限制：** 仅开启IPV6双栈的Turbo集群支持配置IPv6服务网段。 **取值范围：** 不涉及 **默认取值：** Turbo集群默认为\"fc00::/112\" CCE集群默认为\"fd00:1234::/120\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'iPv4Cidr' => null,
        'iPv6Cidr' => null
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
    * iPv4Cidr  **参数解释：** kubernetes clusterIP IPv4 CIDR取值范围。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 默认为\"10.247.0.0/16\"。
    * iPv6Cidr  **参数解释：** kubernetes clusterIP IPv6 CIDR取值范围。 **约束限制：** 仅开启IPV6双栈的Turbo集群支持配置IPv6服务网段。 **取值范围：** 不涉及 **默认取值：** Turbo集群默认为\"fc00::/112\" CCE集群默认为\"fd00:1234::/120\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'iPv4Cidr' => 'IPv4CIDR',
            'iPv6Cidr' => 'IPv6CIDR'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * iPv4Cidr  **参数解释：** kubernetes clusterIP IPv4 CIDR取值范围。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 默认为\"10.247.0.0/16\"。
    * iPv6Cidr  **参数解释：** kubernetes clusterIP IPv6 CIDR取值范围。 **约束限制：** 仅开启IPV6双栈的Turbo集群支持配置IPv6服务网段。 **取值范围：** 不涉及 **默认取值：** Turbo集群默认为\"fc00::/112\" CCE集群默认为\"fd00:1234::/120\"
    *
    * @var string[]
    */
    protected static $setters = [
            'iPv4Cidr' => 'setIPv4Cidr',
            'iPv6Cidr' => 'setIPv6Cidr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * iPv4Cidr  **参数解释：** kubernetes clusterIP IPv4 CIDR取值范围。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 默认为\"10.247.0.0/16\"。
    * iPv6Cidr  **参数解释：** kubernetes clusterIP IPv6 CIDR取值范围。 **约束限制：** 仅开启IPV6双栈的Turbo集群支持配置IPv6服务网段。 **取值范围：** 不涉及 **默认取值：** Turbo集群默认为\"fc00::/112\" CCE集群默认为\"fd00:1234::/120\"
    *
    * @var string[]
    */
    protected static $getters = [
            'iPv4Cidr' => 'getIPv4Cidr',
            'iPv6Cidr' => 'getIPv6Cidr'
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
        $this->container['iPv4Cidr'] = isset($data['iPv4Cidr']) ? $data['iPv4Cidr'] : null;
        $this->container['iPv6Cidr'] = isset($data['iPv6Cidr']) ? $data['iPv6Cidr'] : null;
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
    * Gets iPv4Cidr
    *  **参数解释：** kubernetes clusterIP IPv4 CIDR取值范围。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 默认为\"10.247.0.0/16\"。
    *
    * @return string|null
    */
    public function getIPv4Cidr()
    {
        return $this->container['iPv4Cidr'];
    }

    /**
    * Sets iPv4Cidr
    *
    * @param string|null $iPv4Cidr **参数解释：** kubernetes clusterIP IPv4 CIDR取值范围。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 默认为\"10.247.0.0/16\"。
    *
    * @return $this
    */
    public function setIPv4Cidr($iPv4Cidr)
    {
        $this->container['iPv4Cidr'] = $iPv4Cidr;
        return $this;
    }

    /**
    * Gets iPv6Cidr
    *  **参数解释：** kubernetes clusterIP IPv6 CIDR取值范围。 **约束限制：** 仅开启IPV6双栈的Turbo集群支持配置IPv6服务网段。 **取值范围：** 不涉及 **默认取值：** Turbo集群默认为\"fc00::/112\" CCE集群默认为\"fd00:1234::/120\"
    *
    * @return string|null
    */
    public function getIPv6Cidr()
    {
        return $this->container['iPv6Cidr'];
    }

    /**
    * Sets iPv6Cidr
    *
    * @param string|null $iPv6Cidr **参数解释：** kubernetes clusterIP IPv6 CIDR取值范围。 **约束限制：** 仅开启IPV6双栈的Turbo集群支持配置IPv6服务网段。 **取值范围：** 不涉及 **默认取值：** Turbo集群默认为\"fc00::/112\" CCE集群默认为\"fd00:1234::/120\"
    *
    * @return $this
    */
    public function setIPv6Cidr($iPv6Cidr)
    {
        $this->container['iPv6Cidr'] = $iPv6Cidr;
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

