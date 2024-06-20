<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProvisioningTemplateBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProvisioningTemplateBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parameters  **参数说明**：预调配模板参数， ，配置格式为{\"parameter\":{\"type\":\"String\"}} ，其中parameter目前支持从预调配设备的证书的使用者字段提取内容，证书必须包含模板中定义的所有参数值，华为云IoT平台定义了可在预调配模板中声明和引用的如下参数: - iotda::certificate::country (国家/地区,C ) - iotda::certificate::organization (组织,O) - iotda::certificate::organizational_unit (组织单位,OU) - iotda::certificate::distinguished_name_qualifier (可辨别名称限定符,dnQualifier) - iotda::certificate::state_name (省市,ST) - iotda::certificate::common_name (公用名,CN) - iotda::certificate::serial_number (序列号,serialNumber)  type描述parameter的类型，目前仅支持string。  配置样例：  '{\"iotda::certificate::country\":{\"type\":\"String\"},  \"iotda::certificate::organization\":{\"type\":\"String\"},  \"iotda::certificate::organizational_unit\":{\"type\":\"String\"},  \"iotda::certificate::distinguished_name_qualifier\":{\"type\":\"String\"},  \"iotda::certificate::state_name\":{\"type\":\"String\"},  \"iotda::certificate::common_name\":{\"type\":\"String\"},  \"iotda::certificate::serial_number\":{\"type\":\"String\"}}'
    * resources  resources
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parameters' => 'object',
            'resources' => '\HuaweiCloud\SDK\IoTDA\V5\Model\TemplateResource'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parameters  **参数说明**：预调配模板参数， ，配置格式为{\"parameter\":{\"type\":\"String\"}} ，其中parameter目前支持从预调配设备的证书的使用者字段提取内容，证书必须包含模板中定义的所有参数值，华为云IoT平台定义了可在预调配模板中声明和引用的如下参数: - iotda::certificate::country (国家/地区,C ) - iotda::certificate::organization (组织,O) - iotda::certificate::organizational_unit (组织单位,OU) - iotda::certificate::distinguished_name_qualifier (可辨别名称限定符,dnQualifier) - iotda::certificate::state_name (省市,ST) - iotda::certificate::common_name (公用名,CN) - iotda::certificate::serial_number (序列号,serialNumber)  type描述parameter的类型，目前仅支持string。  配置样例：  '{\"iotda::certificate::country\":{\"type\":\"String\"},  \"iotda::certificate::organization\":{\"type\":\"String\"},  \"iotda::certificate::organizational_unit\":{\"type\":\"String\"},  \"iotda::certificate::distinguished_name_qualifier\":{\"type\":\"String\"},  \"iotda::certificate::state_name\":{\"type\":\"String\"},  \"iotda::certificate::common_name\":{\"type\":\"String\"},  \"iotda::certificate::serial_number\":{\"type\":\"String\"}}'
    * resources  resources
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parameters' => null,
        'resources' => null
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
    * parameters  **参数说明**：预调配模板参数， ，配置格式为{\"parameter\":{\"type\":\"String\"}} ，其中parameter目前支持从预调配设备的证书的使用者字段提取内容，证书必须包含模板中定义的所有参数值，华为云IoT平台定义了可在预调配模板中声明和引用的如下参数: - iotda::certificate::country (国家/地区,C ) - iotda::certificate::organization (组织,O) - iotda::certificate::organizational_unit (组织单位,OU) - iotda::certificate::distinguished_name_qualifier (可辨别名称限定符,dnQualifier) - iotda::certificate::state_name (省市,ST) - iotda::certificate::common_name (公用名,CN) - iotda::certificate::serial_number (序列号,serialNumber)  type描述parameter的类型，目前仅支持string。  配置样例：  '{\"iotda::certificate::country\":{\"type\":\"String\"},  \"iotda::certificate::organization\":{\"type\":\"String\"},  \"iotda::certificate::organizational_unit\":{\"type\":\"String\"},  \"iotda::certificate::distinguished_name_qualifier\":{\"type\":\"String\"},  \"iotda::certificate::state_name\":{\"type\":\"String\"},  \"iotda::certificate::common_name\":{\"type\":\"String\"},  \"iotda::certificate::serial_number\":{\"type\":\"String\"}}'
    * resources  resources
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parameters' => 'parameters',
            'resources' => 'resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parameters  **参数说明**：预调配模板参数， ，配置格式为{\"parameter\":{\"type\":\"String\"}} ，其中parameter目前支持从预调配设备的证书的使用者字段提取内容，证书必须包含模板中定义的所有参数值，华为云IoT平台定义了可在预调配模板中声明和引用的如下参数: - iotda::certificate::country (国家/地区,C ) - iotda::certificate::organization (组织,O) - iotda::certificate::organizational_unit (组织单位,OU) - iotda::certificate::distinguished_name_qualifier (可辨别名称限定符,dnQualifier) - iotda::certificate::state_name (省市,ST) - iotda::certificate::common_name (公用名,CN) - iotda::certificate::serial_number (序列号,serialNumber)  type描述parameter的类型，目前仅支持string。  配置样例：  '{\"iotda::certificate::country\":{\"type\":\"String\"},  \"iotda::certificate::organization\":{\"type\":\"String\"},  \"iotda::certificate::organizational_unit\":{\"type\":\"String\"},  \"iotda::certificate::distinguished_name_qualifier\":{\"type\":\"String\"},  \"iotda::certificate::state_name\":{\"type\":\"String\"},  \"iotda::certificate::common_name\":{\"type\":\"String\"},  \"iotda::certificate::serial_number\":{\"type\":\"String\"}}'
    * resources  resources
    *
    * @var string[]
    */
    protected static $setters = [
            'parameters' => 'setParameters',
            'resources' => 'setResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parameters  **参数说明**：预调配模板参数， ，配置格式为{\"parameter\":{\"type\":\"String\"}} ，其中parameter目前支持从预调配设备的证书的使用者字段提取内容，证书必须包含模板中定义的所有参数值，华为云IoT平台定义了可在预调配模板中声明和引用的如下参数: - iotda::certificate::country (国家/地区,C ) - iotda::certificate::organization (组织,O) - iotda::certificate::organizational_unit (组织单位,OU) - iotda::certificate::distinguished_name_qualifier (可辨别名称限定符,dnQualifier) - iotda::certificate::state_name (省市,ST) - iotda::certificate::common_name (公用名,CN) - iotda::certificate::serial_number (序列号,serialNumber)  type描述parameter的类型，目前仅支持string。  配置样例：  '{\"iotda::certificate::country\":{\"type\":\"String\"},  \"iotda::certificate::organization\":{\"type\":\"String\"},  \"iotda::certificate::organizational_unit\":{\"type\":\"String\"},  \"iotda::certificate::distinguished_name_qualifier\":{\"type\":\"String\"},  \"iotda::certificate::state_name\":{\"type\":\"String\"},  \"iotda::certificate::common_name\":{\"type\":\"String\"},  \"iotda::certificate::serial_number\":{\"type\":\"String\"}}'
    * resources  resources
    *
    * @var string[]
    */
    protected static $getters = [
            'parameters' => 'getParameters',
            'resources' => 'getResources'
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
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['parameters'] === null) {
            $invalidProperties[] = "'parameters' can't be null";
        }
        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
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
    * Gets parameters
    *  **参数说明**：预调配模板参数， ，配置格式为{\"parameter\":{\"type\":\"String\"}} ，其中parameter目前支持从预调配设备的证书的使用者字段提取内容，证书必须包含模板中定义的所有参数值，华为云IoT平台定义了可在预调配模板中声明和引用的如下参数: - iotda::certificate::country (国家/地区,C ) - iotda::certificate::organization (组织,O) - iotda::certificate::organizational_unit (组织单位,OU) - iotda::certificate::distinguished_name_qualifier (可辨别名称限定符,dnQualifier) - iotda::certificate::state_name (省市,ST) - iotda::certificate::common_name (公用名,CN) - iotda::certificate::serial_number (序列号,serialNumber)  type描述parameter的类型，目前仅支持string。  配置样例：  '{\"iotda::certificate::country\":{\"type\":\"String\"},  \"iotda::certificate::organization\":{\"type\":\"String\"},  \"iotda::certificate::organizational_unit\":{\"type\":\"String\"},  \"iotda::certificate::distinguished_name_qualifier\":{\"type\":\"String\"},  \"iotda::certificate::state_name\":{\"type\":\"String\"},  \"iotda::certificate::common_name\":{\"type\":\"String\"},  \"iotda::certificate::serial_number\":{\"type\":\"String\"}}'
    *
    * @return object
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param object $parameters **参数说明**：预调配模板参数， ，配置格式为{\"parameter\":{\"type\":\"String\"}} ，其中parameter目前支持从预调配设备的证书的使用者字段提取内容，证书必须包含模板中定义的所有参数值，华为云IoT平台定义了可在预调配模板中声明和引用的如下参数: - iotda::certificate::country (国家/地区,C ) - iotda::certificate::organization (组织,O) - iotda::certificate::organizational_unit (组织单位,OU) - iotda::certificate::distinguished_name_qualifier (可辨别名称限定符,dnQualifier) - iotda::certificate::state_name (省市,ST) - iotda::certificate::common_name (公用名,CN) - iotda::certificate::serial_number (序列号,serialNumber)  type描述parameter的类型，目前仅支持string。  配置样例：  '{\"iotda::certificate::country\":{\"type\":\"String\"},  \"iotda::certificate::organization\":{\"type\":\"String\"},  \"iotda::certificate::organizational_unit\":{\"type\":\"String\"},  \"iotda::certificate::distinguished_name_qualifier\":{\"type\":\"String\"},  \"iotda::certificate::state_name\":{\"type\":\"String\"},  \"iotda::certificate::common_name\":{\"type\":\"String\"},  \"iotda::certificate::serial_number\":{\"type\":\"String\"}}'
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets resources
    *  resources
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\TemplateResource
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\TemplateResource $resources resources
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
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

