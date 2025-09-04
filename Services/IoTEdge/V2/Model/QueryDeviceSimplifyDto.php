<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryDeviceSimplifyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryDeviceSimplifyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceId  设备id
    * nodeId  设备识别码
    * gatewayId  父设备id
    * deviceName  设备名称
    * protocolType  设备协议类型
    * productName  产品名称
    * productId  产品ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceId' => 'string',
            'nodeId' => 'string',
            'gatewayId' => 'string',
            'deviceName' => 'string',
            'protocolType' => 'string',
            'productName' => 'string',
            'productId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceId  设备id
    * nodeId  设备识别码
    * gatewayId  父设备id
    * deviceName  设备名称
    * protocolType  设备协议类型
    * productName  产品名称
    * productId  产品ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceId' => null,
        'nodeId' => null,
        'gatewayId' => null,
        'deviceName' => null,
        'protocolType' => null,
        'productName' => null,
        'productId' => null
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
    * deviceId  设备id
    * nodeId  设备识别码
    * gatewayId  父设备id
    * deviceName  设备名称
    * protocolType  设备协议类型
    * productName  产品名称
    * productId  产品ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceId' => 'device_id',
            'nodeId' => 'node_id',
            'gatewayId' => 'gateway_id',
            'deviceName' => 'device_name',
            'protocolType' => 'protocol_type',
            'productName' => 'product_name',
            'productId' => 'product_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceId  设备id
    * nodeId  设备识别码
    * gatewayId  父设备id
    * deviceName  设备名称
    * protocolType  设备协议类型
    * productName  产品名称
    * productId  产品ID
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceId' => 'setDeviceId',
            'nodeId' => 'setNodeId',
            'gatewayId' => 'setGatewayId',
            'deviceName' => 'setDeviceName',
            'protocolType' => 'setProtocolType',
            'productName' => 'setProductName',
            'productId' => 'setProductId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceId  设备id
    * nodeId  设备识别码
    * gatewayId  父设备id
    * deviceName  设备名称
    * protocolType  设备协议类型
    * productName  产品名称
    * productId  产品ID
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceId' => 'getDeviceId',
            'nodeId' => 'getNodeId',
            'gatewayId' => 'getGatewayId',
            'deviceName' => 'getDeviceName',
            'protocolType' => 'getProtocolType',
            'productName' => 'getProductName',
            'productId' => 'getProductId'
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
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['deviceName'] = isset($data['deviceName']) ? $data['deviceName'] : null;
        $this->container['protocolType'] = isset($data['protocolType']) ? $data['protocolType'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['deviceId']) && (mb_strlen($this->container['deviceId']) > 256)) {
                $invalidProperties[] = "invalid value for 'deviceId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['deviceId']) && (mb_strlen($this->container['deviceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'deviceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['gatewayId']) && (mb_strlen($this->container['gatewayId']) > 256)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['gatewayId']) && (mb_strlen($this->container['gatewayId']) < 0)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deviceName']) && (mb_strlen($this->container['deviceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'deviceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['deviceName']) && (mb_strlen($this->container['deviceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'deviceName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protocolType']) && (mb_strlen($this->container['protocolType']) > 20)) {
                $invalidProperties[] = "invalid value for 'protocolType', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['protocolType']) && (mb_strlen($this->container['protocolType']) < 0)) {
                $invalidProperties[] = "invalid value for 'protocolType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) > 255)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) < 0)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 255)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) < 0)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 0.";
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
    * Gets deviceId
    *  设备id
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 设备id
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  设备识别码
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 设备识别码
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets gatewayId
    *  父设备id
    *
    * @return string|null
    */
    public function getGatewayId()
    {
        return $this->container['gatewayId'];
    }

    /**
    * Sets gatewayId
    *
    * @param string|null $gatewayId 父设备id
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets deviceName
    *  设备名称
    *
    * @return string|null
    */
    public function getDeviceName()
    {
        return $this->container['deviceName'];
    }

    /**
    * Sets deviceName
    *
    * @param string|null $deviceName 设备名称
    *
    * @return $this
    */
    public function setDeviceName($deviceName)
    {
        $this->container['deviceName'] = $deviceName;
        return $this;
    }

    /**
    * Gets protocolType
    *  设备协议类型
    *
    * @return string|null
    */
    public function getProtocolType()
    {
        return $this->container['protocolType'];
    }

    /**
    * Sets protocolType
    *
    * @param string|null $protocolType 设备协议类型
    *
    * @return $this
    */
    public function setProtocolType($protocolType)
    {
        $this->container['protocolType'] = $protocolType;
        return $this;
    }

    /**
    * Gets productName
    *  产品名称
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName 产品名称
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets productId
    *  产品ID
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品ID
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
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

