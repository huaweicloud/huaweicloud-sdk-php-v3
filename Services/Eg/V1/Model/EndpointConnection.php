<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EndpointConnection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EndpointConnection';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endpointServiceId  访问端点的服务ID
    * endpointServiceName  访问端点的服务名称
    * markerId  访问端点的终端节点的报文ID
    * id  访问端点的终端节点ID
    * ip  访问端点的终端节点IP
    * createdTime  访问端点的终端节点创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endpointServiceId' => 'string',
            'endpointServiceName' => 'string',
            'markerId' => 'string',
            'id' => 'string',
            'ip' => 'string',
            'createdTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endpointServiceId  访问端点的服务ID
    * endpointServiceName  访问端点的服务名称
    * markerId  访问端点的终端节点的报文ID
    * id  访问端点的终端节点ID
    * ip  访问端点的终端节点IP
    * createdTime  访问端点的终端节点创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endpointServiceId' => null,
        'endpointServiceName' => null,
        'markerId' => null,
        'id' => null,
        'ip' => null,
        'createdTime' => null
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
    * endpointServiceId  访问端点的服务ID
    * endpointServiceName  访问端点的服务名称
    * markerId  访问端点的终端节点的报文ID
    * id  访问端点的终端节点ID
    * ip  访问端点的终端节点IP
    * createdTime  访问端点的终端节点创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endpointServiceId' => 'endpoint_service_id',
            'endpointServiceName' => 'endpoint_service_name',
            'markerId' => 'marker_id',
            'id' => 'id',
            'ip' => 'ip',
            'createdTime' => 'created_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endpointServiceId  访问端点的服务ID
    * endpointServiceName  访问端点的服务名称
    * markerId  访问端点的终端节点的报文ID
    * id  访问端点的终端节点ID
    * ip  访问端点的终端节点IP
    * createdTime  访问端点的终端节点创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'endpointServiceId' => 'setEndpointServiceId',
            'endpointServiceName' => 'setEndpointServiceName',
            'markerId' => 'setMarkerId',
            'id' => 'setId',
            'ip' => 'setIp',
            'createdTime' => 'setCreatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endpointServiceId  访问端点的服务ID
    * endpointServiceName  访问端点的服务名称
    * markerId  访问端点的终端节点的报文ID
    * id  访问端点的终端节点ID
    * ip  访问端点的终端节点IP
    * createdTime  访问端点的终端节点创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'endpointServiceId' => 'getEndpointServiceId',
            'endpointServiceName' => 'getEndpointServiceName',
            'markerId' => 'getMarkerId',
            'id' => 'getId',
            'ip' => 'getIp',
            'createdTime' => 'getCreatedTime'
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
        $this->container['endpointServiceId'] = isset($data['endpointServiceId']) ? $data['endpointServiceId'] : null;
        $this->container['endpointServiceName'] = isset($data['endpointServiceName']) ? $data['endpointServiceName'] : null;
        $this->container['markerId'] = isset($data['markerId']) ? $data['markerId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
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
    * Gets endpointServiceId
    *  访问端点的服务ID
    *
    * @return string|null
    */
    public function getEndpointServiceId()
    {
        return $this->container['endpointServiceId'];
    }

    /**
    * Sets endpointServiceId
    *
    * @param string|null $endpointServiceId 访问端点的服务ID
    *
    * @return $this
    */
    public function setEndpointServiceId($endpointServiceId)
    {
        $this->container['endpointServiceId'] = $endpointServiceId;
        return $this;
    }

    /**
    * Gets endpointServiceName
    *  访问端点的服务名称
    *
    * @return string|null
    */
    public function getEndpointServiceName()
    {
        return $this->container['endpointServiceName'];
    }

    /**
    * Sets endpointServiceName
    *
    * @param string|null $endpointServiceName 访问端点的服务名称
    *
    * @return $this
    */
    public function setEndpointServiceName($endpointServiceName)
    {
        $this->container['endpointServiceName'] = $endpointServiceName;
        return $this;
    }

    /**
    * Gets markerId
    *  访问端点的终端节点的报文ID
    *
    * @return string|null
    */
    public function getMarkerId()
    {
        return $this->container['markerId'];
    }

    /**
    * Sets markerId
    *
    * @param string|null $markerId 访问端点的终端节点的报文ID
    *
    * @return $this
    */
    public function setMarkerId($markerId)
    {
        $this->container['markerId'] = $markerId;
        return $this;
    }

    /**
    * Gets id
    *  访问端点的终端节点ID
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
    * @param string|null $id 访问端点的终端节点ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ip
    *  访问端点的终端节点IP
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 访问端点的终端节点IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets createdTime
    *  访问端点的终端节点创建时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 访问端点的终端节点创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
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

