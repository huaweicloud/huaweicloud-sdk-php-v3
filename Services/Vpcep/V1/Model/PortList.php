<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PortList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PortList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientPort  终端节点访问的端口。 终端节点提供给用户，作为访问终端节点服务的端口，范围1-65535。
    * serverPort  终端节点服务的端口。 终端节点服务绑定了后端资源，作为提供服务的端口，范围1-65535。
    * protocol  端口映射协议，支持TCP。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientPort' => 'int',
            'serverPort' => 'int',
            'protocol' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientPort  终端节点访问的端口。 终端节点提供给用户，作为访问终端节点服务的端口，范围1-65535。
    * serverPort  终端节点服务的端口。 终端节点服务绑定了后端资源，作为提供服务的端口，范围1-65535。
    * protocol  端口映射协议，支持TCP。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientPort' => null,
        'serverPort' => null,
        'protocol' => null
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
    * clientPort  终端节点访问的端口。 终端节点提供给用户，作为访问终端节点服务的端口，范围1-65535。
    * serverPort  终端节点服务的端口。 终端节点服务绑定了后端资源，作为提供服务的端口，范围1-65535。
    * protocol  端口映射协议，支持TCP。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientPort' => 'client_port',
            'serverPort' => 'server_port',
            'protocol' => 'protocol'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientPort  终端节点访问的端口。 终端节点提供给用户，作为访问终端节点服务的端口，范围1-65535。
    * serverPort  终端节点服务的端口。 终端节点服务绑定了后端资源，作为提供服务的端口，范围1-65535。
    * protocol  端口映射协议，支持TCP。
    *
    * @var string[]
    */
    protected static $setters = [
            'clientPort' => 'setClientPort',
            'serverPort' => 'setServerPort',
            'protocol' => 'setProtocol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientPort  终端节点访问的端口。 终端节点提供给用户，作为访问终端节点服务的端口，范围1-65535。
    * serverPort  终端节点服务的端口。 终端节点服务绑定了后端资源，作为提供服务的端口，范围1-65535。
    * protocol  端口映射协议，支持TCP。
    *
    * @var string[]
    */
    protected static $getters = [
            'clientPort' => 'getClientPort',
            'serverPort' => 'getServerPort',
            'protocol' => 'getProtocol'
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
    const PROTOCOL_TCP = 'TCP';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_TCP,
        ];
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
        $this->container['clientPort'] = isset($data['clientPort']) ? $data['clientPort'] : null;
        $this->container['serverPort'] = isset($data['serverPort']) ? $data['serverPort'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets clientPort
    *  终端节点访问的端口。 终端节点提供给用户，作为访问终端节点服务的端口，范围1-65535。
    *
    * @return int|null
    */
    public function getClientPort()
    {
        return $this->container['clientPort'];
    }

    /**
    * Sets clientPort
    *
    * @param int|null $clientPort 终端节点访问的端口。 终端节点提供给用户，作为访问终端节点服务的端口，范围1-65535。
    *
    * @return $this
    */
    public function setClientPort($clientPort)
    {
        $this->container['clientPort'] = $clientPort;
        return $this;
    }

    /**
    * Gets serverPort
    *  终端节点服务的端口。 终端节点服务绑定了后端资源，作为提供服务的端口，范围1-65535。
    *
    * @return int|null
    */
    public function getServerPort()
    {
        return $this->container['serverPort'];
    }

    /**
    * Sets serverPort
    *
    * @param int|null $serverPort 终端节点服务的端口。 终端节点服务绑定了后端资源，作为提供服务的端口，范围1-65535。
    *
    * @return $this
    */
    public function setServerPort($serverPort)
    {
        $this->container['serverPort'] = $serverPort;
        return $this;
    }

    /**
    * Gets protocol
    *  端口映射协议，支持TCP。
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 端口映射协议，支持TCP。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
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

