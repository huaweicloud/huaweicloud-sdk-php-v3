<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddProduct';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productId  **参数说明**：产品ID，用于唯一标识一个产品。如果携带此参数，平台将产品ID设置为该参数值；如果不携带此参数，产品ID在物联网平台创建产品后由平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * deviceType  **参数说明**：设备类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * protocolType  **参数说明**：设备使用的协议类型。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other。
    * dataFormat  **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式 默认值json。
    * serviceCapabilities  **参数说明**：设备的服务能力列表。 **取值范围**：数组长度大小不超过500，内容大小不超过500k。
    * manufacturerName  **参数说明**：厂商名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * industry  **参数说明**：设备所属行业。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * description  **参数说明**：产品的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的产品归属到哪个资源空间下，否则创建的产品将会归属到[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productId' => 'string',
            'name' => 'string',
            'deviceType' => 'string',
            'protocolType' => 'string',
            'dataFormat' => 'string',
            'serviceCapabilities' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ServiceCapability[]',
            'manufacturerName' => 'string',
            'industry' => 'string',
            'description' => 'string',
            'appId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productId  **参数说明**：产品ID，用于唯一标识一个产品。如果携带此参数，平台将产品ID设置为该参数值；如果不携带此参数，产品ID在物联网平台创建产品后由平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * deviceType  **参数说明**：设备类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * protocolType  **参数说明**：设备使用的协议类型。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other。
    * dataFormat  **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式 默认值json。
    * serviceCapabilities  **参数说明**：设备的服务能力列表。 **取值范围**：数组长度大小不超过500，内容大小不超过500k。
    * manufacturerName  **参数说明**：厂商名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * industry  **参数说明**：设备所属行业。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * description  **参数说明**：产品的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的产品归属到哪个资源空间下，否则创建的产品将会归属到[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productId' => null,
        'name' => null,
        'deviceType' => null,
        'protocolType' => null,
        'dataFormat' => null,
        'serviceCapabilities' => null,
        'manufacturerName' => null,
        'industry' => null,
        'description' => null,
        'appId' => null
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
    * productId  **参数说明**：产品ID，用于唯一标识一个产品。如果携带此参数，平台将产品ID设置为该参数值；如果不携带此参数，产品ID在物联网平台创建产品后由平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * deviceType  **参数说明**：设备类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * protocolType  **参数说明**：设备使用的协议类型。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other。
    * dataFormat  **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式 默认值json。
    * serviceCapabilities  **参数说明**：设备的服务能力列表。 **取值范围**：数组长度大小不超过500，内容大小不超过500k。
    * manufacturerName  **参数说明**：厂商名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * industry  **参数说明**：设备所属行业。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * description  **参数说明**：产品的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的产品归属到哪个资源空间下，否则创建的产品将会归属到[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productId' => 'product_id',
            'name' => 'name',
            'deviceType' => 'device_type',
            'protocolType' => 'protocol_type',
            'dataFormat' => 'data_format',
            'serviceCapabilities' => 'service_capabilities',
            'manufacturerName' => 'manufacturer_name',
            'industry' => 'industry',
            'description' => 'description',
            'appId' => 'app_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productId  **参数说明**：产品ID，用于唯一标识一个产品。如果携带此参数，平台将产品ID设置为该参数值；如果不携带此参数，产品ID在物联网平台创建产品后由平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * deviceType  **参数说明**：设备类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * protocolType  **参数说明**：设备使用的协议类型。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other。
    * dataFormat  **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式 默认值json。
    * serviceCapabilities  **参数说明**：设备的服务能力列表。 **取值范围**：数组长度大小不超过500，内容大小不超过500k。
    * manufacturerName  **参数说明**：厂商名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * industry  **参数说明**：设备所属行业。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * description  **参数说明**：产品的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的产品归属到哪个资源空间下，否则创建的产品将会归属到[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $setters = [
            'productId' => 'setProductId',
            'name' => 'setName',
            'deviceType' => 'setDeviceType',
            'protocolType' => 'setProtocolType',
            'dataFormat' => 'setDataFormat',
            'serviceCapabilities' => 'setServiceCapabilities',
            'manufacturerName' => 'setManufacturerName',
            'industry' => 'setIndustry',
            'description' => 'setDescription',
            'appId' => 'setAppId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productId  **参数说明**：产品ID，用于唯一标识一个产品。如果携带此参数，平台将产品ID设置为该参数值；如果不携带此参数，产品ID在物联网平台创建产品后由平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * deviceType  **参数说明**：设备类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * protocolType  **参数说明**：设备使用的协议类型。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other。
    * dataFormat  **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式 默认值json。
    * serviceCapabilities  **参数说明**：设备的服务能力列表。 **取值范围**：数组长度大小不超过500，内容大小不超过500k。
    * manufacturerName  **参数说明**：厂商名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * industry  **参数说明**：设备所属行业。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * description  **参数说明**：产品的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的产品归属到哪个资源空间下，否则创建的产品将会归属到[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @var string[]
    */
    protected static $getters = [
            'productId' => 'getProductId',
            'name' => 'getName',
            'deviceType' => 'getDeviceType',
            'protocolType' => 'getProtocolType',
            'dataFormat' => 'getDataFormat',
            'serviceCapabilities' => 'getServiceCapabilities',
            'manufacturerName' => 'getManufacturerName',
            'industry' => 'getIndustry',
            'description' => 'getDescription',
            'appId' => 'getAppId'
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
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['deviceType'] = isset($data['deviceType']) ? $data['deviceType'] : null;
        $this->container['protocolType'] = isset($data['protocolType']) ? $data['protocolType'] : null;
        $this->container['dataFormat'] = isset($data['dataFormat']) ? $data['dataFormat'] : 'json';
        $this->container['serviceCapabilities'] = isset($data['serviceCapabilities']) ? $data['serviceCapabilities'] : null;
        $this->container['manufacturerName'] = isset($data['manufacturerName']) ? $data['manufacturerName'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['productId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['productId'])) {
                $invalidProperties[] = "invalid value for 'productId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/.";
            }
        if ($this->container['deviceType'] === null) {
            $invalidProperties[] = "'deviceType' can't be null";
        }
            if (!preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,32}$/", $this->container['deviceType'])) {
                $invalidProperties[] = "invalid value for 'deviceType', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,32}$/.";
            }
        if ($this->container['protocolType'] === null) {
            $invalidProperties[] = "'protocolType' can't be null";
        }
            if (!preg_match("/(MQTT|CoAP|HTTP|HTTPS|Modbus|ONVIF|OPC-UA|OPC-DA|Other)/", $this->container['protocolType'])) {
                $invalidProperties[] = "invalid value for 'protocolType', must be conform to the pattern /(MQTT|CoAP|HTTP|HTTPS|Modbus|ONVIF|OPC-UA|OPC-DA|Other)/.";
            }
        if ($this->container['dataFormat'] === null) {
            $invalidProperties[] = "'dataFormat' can't be null";
        }
            if (!preg_match("/(json|binary)/", $this->container['dataFormat'])) {
                $invalidProperties[] = "invalid value for 'dataFormat', must be conform to the pattern /(json|binary)/.";
            }
        if ($this->container['serviceCapabilities'] === null) {
            $invalidProperties[] = "'serviceCapabilities' can't be null";
        }
            if (!is_null($this->container['manufacturerName']) && !preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,32}$/", $this->container['manufacturerName'])) {
                $invalidProperties[] = "invalid value for 'manufacturerName', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,32}$/.";
            }
            if (!is_null($this->container['industry']) && !preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/", $this->container['industry'])) {
                $invalidProperties[] = "invalid value for 'industry', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[\\s一-龥a-zA-Z0-9_?'#().,;&%@!\\- ，、：；。\/]{1,128}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\s一-龥a-zA-Z0-9_?'#().,;&%@!\\- ，、：；。\/]{1,128}$/.";
            }
            if (!is_null($this->container['appId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
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
    * Gets productId
    *  **参数说明**：产品ID，用于唯一标识一个产品。如果携带此参数，平台将产品ID设置为该参数值；如果不携带此参数，产品ID在物联网平台创建产品后由平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
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
    * @param string|null $productId **参数说明**：产品ID，用于唯一标识一个产品。如果携带此参数，平台将产品ID设置为该参数值；如果不携带此参数，产品ID在物联网平台创建产品后由平台分配获得。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
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
    *  **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
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
    * @param string $name **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
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
    *  **参数说明**：设备类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    *
    * @return string
    */
    public function getDeviceType()
    {
        return $this->container['deviceType'];
    }

    /**
    * Sets deviceType
    *
    * @param string $deviceType **参数说明**：设备类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
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
    *  **参数说明**：设备使用的协议类型。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other。
    *
    * @return string
    */
    public function getProtocolType()
    {
        return $this->container['protocolType'];
    }

    /**
    * Sets protocolType
    *
    * @param string $protocolType **参数说明**：设备使用的协议类型。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other。
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
    *  **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式 默认值json。
    *
    * @return string
    */
    public function getDataFormat()
    {
        return $this->container['dataFormat'];
    }

    /**
    * Sets dataFormat
    *
    * @param string $dataFormat **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式 默认值json。
    *
    * @return $this
    */
    public function setDataFormat($dataFormat)
    {
        $this->container['dataFormat'] = $dataFormat;
        return $this;
    }

    /**
    * Gets serviceCapabilities
    *  **参数说明**：设备的服务能力列表。 **取值范围**：数组长度大小不超过500，内容大小不超过500k。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ServiceCapability[]
    */
    public function getServiceCapabilities()
    {
        return $this->container['serviceCapabilities'];
    }

    /**
    * Sets serviceCapabilities
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ServiceCapability[] $serviceCapabilities **参数说明**：设备的服务能力列表。 **取值范围**：数组长度大小不超过500，内容大小不超过500k。
    *
    * @return $this
    */
    public function setServiceCapabilities($serviceCapabilities)
    {
        $this->container['serviceCapabilities'] = $serviceCapabilities;
        return $this;
    }

    /**
    * Gets manufacturerName
    *  **参数说明**：厂商名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
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
    * @param string|null $manufacturerName **参数说明**：厂商名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
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
    *  **参数说明**：设备所属行业。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
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
    * @param string|null $industry **参数说明**：设备所属行业。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
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
    *  **参数说明**：产品的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
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
    * @param string|null $description **参数说明**：产品的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets appId
    *  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的产品归属到哪个资源空间下，否则创建的产品将会归属到[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
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
    * @param string|null $appId **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的产品归属到哪个资源空间下，否则创建的产品将会归属到[默认资源空间](https://support.huaweicloud.com/usermanual-iothub/iot_01_0006.html#section0)下。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
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

