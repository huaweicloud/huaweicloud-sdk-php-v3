<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateProduct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateProduct';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数，指定要修改的产品属于哪个资源空间；若不携带，则优先修改默认资源空间下产品，如默认资源空间下无对应产品，则按照产品创建时间修改最早创建产品。如果用户存在多资源空间，同时又不想携带该参数，可以联系华为技术支持对用户数据做资源空间合并。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * deviceType  **参数说明**：设备类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * protocolType  **参数说明**：设备使用的协议类型。注：禁止其他协议类型修改为CoAP。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other，TCP，UDP。
    * dataFormat  **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式
    * serviceCapabilities  **参数说明**：设备的服务能力列表。
    * manufacturerName  **参数说明**：厂商名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * industry  **参数说明**：设备所属行业。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * description  **参数说明**：产品的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appId' => 'string',
            'name' => 'string',
            'deviceType' => 'string',
            'protocolType' => 'string',
            'dataFormat' => 'string',
            'serviceCapabilities' => '\HuaweiCloud\SDK\IoTDA\V5\Model\ServiceCapability[]',
            'manufacturerName' => 'string',
            'industry' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数，指定要修改的产品属于哪个资源空间；若不携带，则优先修改默认资源空间下产品，如默认资源空间下无对应产品，则按照产品创建时间修改最早创建产品。如果用户存在多资源空间，同时又不想携带该参数，可以联系华为技术支持对用户数据做资源空间合并。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * deviceType  **参数说明**：设备类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * protocolType  **参数说明**：设备使用的协议类型。注：禁止其他协议类型修改为CoAP。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other，TCP，UDP。
    * dataFormat  **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式
    * serviceCapabilities  **参数说明**：设备的服务能力列表。
    * manufacturerName  **参数说明**：厂商名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * industry  **参数说明**：设备所属行业。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * description  **参数说明**：产品的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appId' => null,
        'name' => null,
        'deviceType' => null,
        'protocolType' => null,
        'dataFormat' => null,
        'serviceCapabilities' => null,
        'manufacturerName' => null,
        'industry' => null,
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
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数，指定要修改的产品属于哪个资源空间；若不携带，则优先修改默认资源空间下产品，如默认资源空间下无对应产品，则按照产品创建时间修改最早创建产品。如果用户存在多资源空间，同时又不想携带该参数，可以联系华为技术支持对用户数据做资源空间合并。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * deviceType  **参数说明**：设备类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * protocolType  **参数说明**：设备使用的协议类型。注：禁止其他协议类型修改为CoAP。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other，TCP，UDP。
    * dataFormat  **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式
    * serviceCapabilities  **参数说明**：设备的服务能力列表。
    * manufacturerName  **参数说明**：厂商名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * industry  **参数说明**：设备所属行业。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * description  **参数说明**：产品的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appId' => 'app_id',
            'name' => 'name',
            'deviceType' => 'device_type',
            'protocolType' => 'protocol_type',
            'dataFormat' => 'data_format',
            'serviceCapabilities' => 'service_capabilities',
            'manufacturerName' => 'manufacturer_name',
            'industry' => 'industry',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数，指定要修改的产品属于哪个资源空间；若不携带，则优先修改默认资源空间下产品，如默认资源空间下无对应产品，则按照产品创建时间修改最早创建产品。如果用户存在多资源空间，同时又不想携带该参数，可以联系华为技术支持对用户数据做资源空间合并。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * deviceType  **参数说明**：设备类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * protocolType  **参数说明**：设备使用的协议类型。注：禁止其他协议类型修改为CoAP。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other，TCP，UDP。
    * dataFormat  **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式
    * serviceCapabilities  **参数说明**：设备的服务能力列表。
    * manufacturerName  **参数说明**：厂商名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * industry  **参数说明**：设备所属行业。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * description  **参数说明**：产品的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    *
    * @var string[]
    */
    protected static $setters = [
            'appId' => 'setAppId',
            'name' => 'setName',
            'deviceType' => 'setDeviceType',
            'protocolType' => 'setProtocolType',
            'dataFormat' => 'setDataFormat',
            'serviceCapabilities' => 'setServiceCapabilities',
            'manufacturerName' => 'setManufacturerName',
            'industry' => 'setIndustry',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appId  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数，指定要修改的产品属于哪个资源空间；若不携带，则优先修改默认资源空间下产品，如默认资源空间下无对应产品，则按照产品创建时间修改最早创建产品。如果用户存在多资源空间，同时又不想携带该参数，可以联系华为技术支持对用户数据做资源空间合并。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    * name  **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * deviceType  **参数说明**：设备类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * protocolType  **参数说明**：设备使用的协议类型。注：禁止其他协议类型修改为CoAP。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other，TCP，UDP。
    * dataFormat  **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式
    * serviceCapabilities  **参数说明**：设备的服务能力列表。
    * manufacturerName  **参数说明**：厂商名称。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * industry  **参数说明**：设备所属行业。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
    * description  **参数说明**：产品的描述信息。 **取值范围**：长度不超过128，只允许中文、字母、数字、空白字符、以及_?'#().,;&%@!- ，、：；。/等字符的组合。
    *
    * @var string[]
    */
    protected static $getters = [
            'appId' => 'getAppId',
            'name' => 'getName',
            'deviceType' => 'getDeviceType',
            'protocolType' => 'getProtocolType',
            'dataFormat' => 'getDataFormat',
            'serviceCapabilities' => 'getServiceCapabilities',
            'manufacturerName' => 'getManufacturerName',
            'industry' => 'getIndustry',
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
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['deviceType'] = isset($data['deviceType']) ? $data['deviceType'] : null;
        $this->container['protocolType'] = isset($data['protocolType']) ? $data['protocolType'] : null;
        $this->container['dataFormat'] = isset($data['dataFormat']) ? $data['dataFormat'] : null;
        $this->container['serviceCapabilities'] = isset($data['serviceCapabilities']) ? $data['serviceCapabilities'] : null;
        $this->container['manufacturerName'] = isset($data['manufacturerName']) ? $data['manufacturerName'] : null;
        $this->container['industry'] = isset($data['industry']) ? $data['industry'] : null;
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
            if (!is_null($this->container['appId']) && !preg_match("/^[a-zA-Z0-9_-]{1,36}$/", $this->container['appId'])) {
                $invalidProperties[] = "invalid value for 'appId', must be conform to the pattern /^[a-zA-Z0-9_-]{1,36}$/.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/.";
            }
            if (!is_null($this->container['deviceType']) && !preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,32}$/", $this->container['deviceType'])) {
                $invalidProperties[] = "invalid value for 'deviceType', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,32}$/.";
            }
            if (!is_null($this->container['protocolType']) && !preg_match("/(MQTT|CoAP|HTTP|HTTPS|Modbus|ONVIF|OPC-UA|OPC-DA|Other|TCP|UDP)/", $this->container['protocolType'])) {
                $invalidProperties[] = "invalid value for 'protocolType', must be conform to the pattern /(MQTT|CoAP|HTTP|HTTPS|Modbus|ONVIF|OPC-UA|OPC-DA|Other|TCP|UDP)/.";
            }
            if (!is_null($this->container['dataFormat']) && !preg_match("/(json|binary)/", $this->container['dataFormat'])) {
                $invalidProperties[] = "invalid value for 'dataFormat', must be conform to the pattern /(json|binary)/.";
            }
            if (!is_null($this->container['manufacturerName']) && !preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,32}$/", $this->container['manufacturerName'])) {
                $invalidProperties[] = "invalid value for 'manufacturerName', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,32}$/.";
            }
            if (!is_null($this->container['industry']) && !preg_match("/^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/", $this->container['industry'])) {
                $invalidProperties[] = "invalid value for 'industry', must be conform to the pattern /^[一-龥a-zA-Z0-9_?'#().,&%@!-]{1,64}$/.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[\\s一-龥a-zA-Z0-9_?'#().,;&%@!\\- ，、：；。￥$！【】’‘“”（）？…~\/]{1,128}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\s一-龥a-zA-Z0-9_?'#().,;&%@!\\- ，、：；。￥$！【】’‘“”（）？…~\/]{1,128}$/.";
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
    * Gets appId
    *  **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数，指定要修改的产品属于哪个资源空间；若不携带，则优先修改默认资源空间下产品，如默认资源空间下无对应产品，则按照产品创建时间修改最早创建产品。如果用户存在多资源空间，同时又不想携带该参数，可以联系华为技术支持对用户数据做资源空间合并。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
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
    * @param string|null $appId **参数说明**：资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数，指定要修改的产品属于哪个资源空间；若不携带，则优先修改默认资源空间下产品，如默认资源空间下无对应产品，则按照产品创建时间修改最早创建产品。如果用户存在多资源空间，同时又不想携带该参数，可以联系华为技术支持对用户数据做资源空间合并。 **取值范围**：长度不超过36，只允许字母、数字、下划线（_）、连接符（-）的组合。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets name
    *  **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
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
    * @param string|null $name **参数说明**：产品名称。 **取值范围**：长度不超过64，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
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
    * @return string|null
    */
    public function getDeviceType()
    {
        return $this->container['deviceType'];
    }

    /**
    * Sets deviceType
    *
    * @param string|null $deviceType **参数说明**：设备类型。 **取值范围**：长度不超过32，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合。
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
    *  **参数说明**：设备使用的协议类型。注：禁止其他协议类型修改为CoAP。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other，TCP，UDP。
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
    * @param string|null $protocolType **参数说明**：设备使用的协议类型。注：禁止其他协议类型修改为CoAP。 **取值范围**：MQTT，CoAP，HTTP，HTTPS，Modbus，ONVIF，OPC-UA，OPC-DA，Other，TCP，UDP。
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
    *  **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式
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
    * @param string|null $dataFormat **参数说明**：设备上报数据的格式。 **取值范围**： - json：JSON格式 - binary：二进制码流格式
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
    *  **参数说明**：设备的服务能力列表。
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\ServiceCapability[]|null
    */
    public function getServiceCapabilities()
    {
        return $this->container['serviceCapabilities'];
    }

    /**
    * Sets serviceCapabilities
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\ServiceCapability[]|null $serviceCapabilities **参数说明**：设备的服务能力列表。
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

