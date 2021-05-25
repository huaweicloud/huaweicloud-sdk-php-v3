<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductSummary';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  资源空间ID。
    * appName  资源空间名称。
    * productId  产品ID，用于唯一标识一个产品，在物联网平台创建产品后由平台分配获得。
    * name  产品名称。
    * deviceType  设备类型。
    * protocolType  设备使用的协议类型。取值范围：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF， OPC-UA。
    * dataFormat  设备上报数据的格式，取值范围：json，binary。
    * manufacturerName  厂商名称。
    * industry  设备所属行业。
    * description  产品的描述信息。
    * createTime  在物联网平台创建产品的时间，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'appName' => 'string',
            'productId' => 'string',
            'name' => 'string',
            'deviceType' => 'string',
            'protocolType' => 'string',
            'dataFormat' => 'string',
            'manufacturerName' => 'string',
            'industry' => 'string',
            'description' => 'string',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  资源空间ID。
    * appName  资源空间名称。
    * productId  产品ID，用于唯一标识一个产品，在物联网平台创建产品后由平台分配获得。
    * name  产品名称。
    * deviceType  设备类型。
    * protocolType  设备使用的协议类型。取值范围：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF， OPC-UA。
    * dataFormat  设备上报数据的格式，取值范围：json，binary。
    * manufacturerName  厂商名称。
    * industry  设备所属行业。
    * description  产品的描述信息。
    * createTime  在物联网平台创建产品的时间，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'appName' => null,
        'productId' => null,
        'name' => null,
        'deviceType' => null,
        'protocolType' => null,
        'dataFormat' => null,
        'manufacturerName' => null,
        'industry' => null,
        'description' => null,
        'createTime' => null
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
    * appId  资源空间ID。
    * appName  资源空间名称。
    * productId  产品ID，用于唯一标识一个产品，在物联网平台创建产品后由平台分配获得。
    * name  产品名称。
    * deviceType  设备类型。
    * protocolType  设备使用的协议类型。取值范围：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF， OPC-UA。
    * dataFormat  设备上报数据的格式，取值范围：json，binary。
    * manufacturerName  厂商名称。
    * industry  设备所属行业。
    * description  产品的描述信息。
    * createTime  在物联网平台创建产品的时间，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'appName' => 'app_name',
            'productId' => 'product_id',
            'name' => 'name',
            'deviceType' => 'device_type',
            'protocolType' => 'protocol_type',
            'dataFormat' => 'data_format',
            'manufacturerName' => 'manufacturer_name',
            'industry' => 'industry',
            'description' => 'description',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  资源空间ID。
    * appName  资源空间名称。
    * productId  产品ID，用于唯一标识一个产品，在物联网平台创建产品后由平台分配获得。
    * name  产品名称。
    * deviceType  设备类型。
    * protocolType  设备使用的协议类型。取值范围：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF， OPC-UA。
    * dataFormat  设备上报数据的格式，取值范围：json，binary。
    * manufacturerName  厂商名称。
    * industry  设备所属行业。
    * description  产品的描述信息。
    * createTime  在物联网平台创建产品的时间，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'appName' => 'setAppName',
            'productId' => 'setProductId',
            'name' => 'setName',
            'deviceType' => 'setDeviceType',
            'protocolType' => 'setProtocolType',
            'dataFormat' => 'setDataFormat',
            'manufacturerName' => 'setManufacturerName',
            'industry' => 'setIndustry',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  资源空间ID。
    * appName  资源空间名称。
    * productId  产品ID，用于唯一标识一个产品，在物联网平台创建产品后由平台分配获得。
    * name  产品名称。
    * deviceType  设备类型。
    * protocolType  设备使用的协议类型。取值范围：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF， OPC-UA。
    * dataFormat  设备上报数据的格式，取值范围：json，binary。
    * manufacturerName  厂商名称。
    * industry  设备所属行业。
    * description  产品的描述信息。
    * createTime  在物联网平台创建产品的时间，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'appName' => 'getAppName',
            'productId' => 'getProductId',
            'name' => 'getName',
            'deviceType' => 'getDeviceType',
            'protocolType' => 'getProtocolType',
            'dataFormat' => 'getDataFormat',
            'manufacturerName' => 'getManufacturerName',
            'industry' => 'getIndustry',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime'
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['deviceType'] = isset($data['deviceType']) ? $data['deviceType'] : null;
        $this->container['protocolType'] = isset($data['protocolType']) ? $data['protocolType'] : null;
        $this->container['dataFormat'] = isset($data['dataFormat']) ? $data['dataFormat'] : null;
        $this->container['manufacturerName'] = isset($data['manufacturerName']) ? $data['manufacturerName'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets appId
    *  资源空间ID。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 资源空间ID。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets appName
    *  资源空间名称。
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 资源空间名称。
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets productId
    *  产品ID，用于唯一标识一个产品，在物联网平台创建产品后由平台分配获得。
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
    * @param string|null $productId 产品ID，用于唯一标识一个产品，在物联网平台创建产品后由平台分配获得。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets name
    *  产品名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 产品名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets deviceType
    *  设备类型。
    *
    * @return string|null
    */
    public function getDeviceType()
    {
        return $this->container['deviceType'];
    }

    /**
    * Sets deviceType
    *
    * @param string|null $deviceType 设备类型。
    *
    * @return $this
    */
    public function setDeviceType($deviceType)
    {
        $this->container['deviceType'] = $deviceType;
        return $this;
    }

    /**
    * Gets protocolType
    *  设备使用的协议类型。取值范围：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF， OPC-UA。
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
    * @param string|null $protocolType 设备使用的协议类型。取值范围：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF， OPC-UA。
    *
    * @return $this
    */
    public function setProtocolType($protocolType)
    {
        $this->container['protocolType'] = $protocolType;
        return $this;
    }

    /**
    * Gets dataFormat
    *  设备上报数据的格式，取值范围：json，binary。
    *
    * @return string|null
    */
    public function getDataFormat()
    {
        return $this->container['dataFormat'];
    }

    /**
    * Sets dataFormat
    *
    * @param string|null $dataFormat 设备上报数据的格式，取值范围：json，binary。
    *
    * @return $this
    */
    public function setDataFormat($dataFormat)
    {
        $this->container['dataFormat'] = $dataFormat;
        return $this;
    }

    /**
    * Gets manufacturerName
    *  厂商名称。
    *
    * @return string|null
    */
    public function getManufacturerName()
    {
        return $this->container['manufacturerName'];
    }

    /**
    * Sets manufacturerName
    *
    * @param string|null $manufacturerName 厂商名称。
    *
    * @return $this
    */
    public function setManufacturerName($manufacturerName)
    {
        $this->container['manufacturerName'] = $manufacturerName;
        return $this;
    }

    /**
    * Gets industry
    *  设备所属行业。
    *
    * @return string|null
    */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
    * Sets industry
    *
    * @param string|null $industry 设备所属行业。
    *
    * @return $this
    */
    public function setIndustry($industry)
    {
        $this->container['industry'] = $industry;
        return $this;
    }

    /**
    * Gets description
    *  产品的描述信息。
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
    * @param string|null $description 产品的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  在物联网平台创建产品的时间，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 在物联网平台创建产品的时间，格式：yyyyMMdd'T'HHmmss'Z'，如20151212T121212Z。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

