<?php

namespace HuaweiCloud\SDK\Esw\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RemoteInfosOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RemoteInfosOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * segmentationId  - 参数解释：二层连接的隧道号，对应VXLAN网络标识VNI。 - 约束限制：需与对端VXLAN设置的VNI保持一致。 - 取值范围：1-16777216。 - 默认取值：不涉及。
    * tunnelIp  - 参数解释：ESW实例的远端隧道IP。 - 约束限制：需与对端VXLAN设置的VTEP IP保持一致。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    * tunnelPort  - 参数解释：二层连接的远端隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'segmentationId' => 'int',
            'tunnelIp' => 'string',
            'tunnelPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * segmentationId  - 参数解释：二层连接的隧道号，对应VXLAN网络标识VNI。 - 约束限制：需与对端VXLAN设置的VNI保持一致。 - 取值范围：1-16777216。 - 默认取值：不涉及。
    * tunnelIp  - 参数解释：ESW实例的远端隧道IP。 - 约束限制：需与对端VXLAN设置的VTEP IP保持一致。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    * tunnelPort  - 参数解释：二层连接的远端隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'segmentationId' => 'int32',
        'tunnelIp' => null,
        'tunnelPort' => 'int32'
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
    * segmentationId  - 参数解释：二层连接的隧道号，对应VXLAN网络标识VNI。 - 约束限制：需与对端VXLAN设置的VNI保持一致。 - 取值范围：1-16777216。 - 默认取值：不涉及。
    * tunnelIp  - 参数解释：ESW实例的远端隧道IP。 - 约束限制：需与对端VXLAN设置的VTEP IP保持一致。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    * tunnelPort  - 参数解释：二层连接的远端隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'segmentationId' => 'segmentation_id',
            'tunnelIp' => 'tunnel_ip',
            'tunnelPort' => 'tunnel_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * segmentationId  - 参数解释：二层连接的隧道号，对应VXLAN网络标识VNI。 - 约束限制：需与对端VXLAN设置的VNI保持一致。 - 取值范围：1-16777216。 - 默认取值：不涉及。
    * tunnelIp  - 参数解释：ESW实例的远端隧道IP。 - 约束限制：需与对端VXLAN设置的VTEP IP保持一致。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    * tunnelPort  - 参数解释：二层连接的远端隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'segmentationId' => 'setSegmentationId',
            'tunnelIp' => 'setTunnelIp',
            'tunnelPort' => 'setTunnelPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * segmentationId  - 参数解释：二层连接的隧道号，对应VXLAN网络标识VNI。 - 约束限制：需与对端VXLAN设置的VNI保持一致。 - 取值范围：1-16777216。 - 默认取值：不涉及。
    * tunnelIp  - 参数解释：ESW实例的远端隧道IP。 - 约束限制：需与对端VXLAN设置的VTEP IP保持一致。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    * tunnelPort  - 参数解释：二层连接的远端隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'segmentationId' => 'getSegmentationId',
            'tunnelIp' => 'getTunnelIp',
            'tunnelPort' => 'getTunnelPort'
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
        $this->container['segmentationId'] = isset($data['segmentationId']) ? $data['segmentationId'] : null;
        $this->container['tunnelIp'] = isset($data['tunnelIp']) ? $data['tunnelIp'] : null;
        $this->container['tunnelPort'] = isset($data['tunnelPort']) ? $data['tunnelPort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['segmentationId'] === null) {
            $invalidProperties[] = "'segmentationId' can't be null";
        }
        if ($this->container['tunnelIp'] === null) {
            $invalidProperties[] = "'tunnelIp' can't be null";
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
    * Gets segmentationId
    *  - 参数解释：二层连接的隧道号，对应VXLAN网络标识VNI。 - 约束限制：需与对端VXLAN设置的VNI保持一致。 - 取值范围：1-16777216。 - 默认取值：不涉及。
    *
    * @return int
    */
    public function getSegmentationId()
    {
        return $this->container['segmentationId'];
    }

    /**
    * Sets segmentationId
    *
    * @param int $segmentationId - 参数解释：二层连接的隧道号，对应VXLAN网络标识VNI。 - 约束限制：需与对端VXLAN设置的VNI保持一致。 - 取值范围：1-16777216。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setSegmentationId($segmentationId)
    {
        $this->container['segmentationId'] = $segmentationId;
        return $this;
    }

    /**
    * Gets tunnelIp
    *  - 参数解释：ESW实例的远端隧道IP。 - 约束限制：需与对端VXLAN设置的VTEP IP保持一致。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getTunnelIp()
    {
        return $this->container['tunnelIp'];
    }

    /**
    * Sets tunnelIp
    *
    * @param string $tunnelIp - 参数解释：ESW实例的远端隧道IP。 - 约束限制：需与对端VXLAN设置的VTEP IP保持一致。 - 取值范围：标准的IPv4格式，例：192.168.1.1。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setTunnelIp($tunnelIp)
    {
        $this->container['tunnelIp'] = $tunnelIp;
        return $this;
    }

    /**
    * Gets tunnelPort
    *  - 参数解释：二层连接的远端隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    *
    * @return int|null
    */
    public function getTunnelPort()
    {
        return $this->container['tunnelPort'];
    }

    /**
    * Sets tunnelPort
    *
    * @param int|null $tunnelPort - 参数解释：二层连接的远端隧道端口。 - 约束限制：不涉及。 - 取值范围：4789。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setTunnelPort($tunnelPort)
    {
        $this->container['tunnelPort'] = $tunnelPort;
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

