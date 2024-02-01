<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivateProviderSourcePrimitiveTypeHolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivateProviderSourcePrimitiveTypeHolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * providerSource  用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'providerSource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * providerSource  用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'providerSource' => null
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
    * providerSource  用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'providerSource' => 'provider_source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * providerSource  用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'providerSource' => 'setProviderSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * providerSource  用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'providerSource' => 'getProviderSource'
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
        $this->container['providerSource'] = isset($data['providerSource']) ? $data['providerSource'] : null;
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
    * Gets providerSource
    *  用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    *
    * @return string|null
    */
    public function getProviderSource()
    {
        return $this->container['providerSource'];
    }

    /**
    * Sets providerSource
    *
    * @param string|null $providerSource 用户使用私有provider，在Terraform模板中定义required_providers信息时，需要指明的source参数。  该参数按照“huawei.com/private-provider/{provider_name}”的形式拼接。关于provider_name和provider_source字段在模板中的使用细节，详见创建私有Provider的API描述。
    *
    * @return $this
    */
    public function setProviderSource($providerSource)
    {
        $this->container['providerSource'] = $providerSource;
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

