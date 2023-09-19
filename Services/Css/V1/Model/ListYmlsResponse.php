<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListYmlsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListYmlsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configurations  集群参数配置列表。该对象中key值以具体获取为准，value拥有以下属性。 - id:  参数配置ID。 - key: 参数名称。 - vlaue:  参数值。 - defaultValue:  参数默认值。 - regex:  参数约束限制。 - desc:  参数中文描述。 - type:  参数类型描述。 - moduleDesc: 参数功能中文描述。 - modifyEnable: 参数是否可修改 true： 可以修改。 false：不可修改。 - enableValue: 参数支持修改的值。 - fileName: 参数存在的文件名称。默认为elasticsearch.yml。 - version:  版本信息。 - descENG: 参数英文描述。 - moduleDescENG:  参数功能英文描述。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configurations' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configurations  集群参数配置列表。该对象中key值以具体获取为准，value拥有以下属性。 - id:  参数配置ID。 - key: 参数名称。 - vlaue:  参数值。 - defaultValue:  参数默认值。 - regex:  参数约束限制。 - desc:  参数中文描述。 - type:  参数类型描述。 - moduleDesc: 参数功能中文描述。 - modifyEnable: 参数是否可修改 true： 可以修改。 false：不可修改。 - enableValue: 参数支持修改的值。 - fileName: 参数存在的文件名称。默认为elasticsearch.yml。 - version:  版本信息。 - descENG: 参数英文描述。 - moduleDescENG:  参数功能英文描述。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configurations' => null
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
    * configurations  集群参数配置列表。该对象中key值以具体获取为准，value拥有以下属性。 - id:  参数配置ID。 - key: 参数名称。 - vlaue:  参数值。 - defaultValue:  参数默认值。 - regex:  参数约束限制。 - desc:  参数中文描述。 - type:  参数类型描述。 - moduleDesc: 参数功能中文描述。 - modifyEnable: 参数是否可修改 true： 可以修改。 false：不可修改。 - enableValue: 参数支持修改的值。 - fileName: 参数存在的文件名称。默认为elasticsearch.yml。 - version:  版本信息。 - descENG: 参数英文描述。 - moduleDescENG:  参数功能英文描述。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configurations' => 'configurations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configurations  集群参数配置列表。该对象中key值以具体获取为准，value拥有以下属性。 - id:  参数配置ID。 - key: 参数名称。 - vlaue:  参数值。 - defaultValue:  参数默认值。 - regex:  参数约束限制。 - desc:  参数中文描述。 - type:  参数类型描述。 - moduleDesc: 参数功能中文描述。 - modifyEnable: 参数是否可修改 true： 可以修改。 false：不可修改。 - enableValue: 参数支持修改的值。 - fileName: 参数存在的文件名称。默认为elasticsearch.yml。 - version:  版本信息。 - descENG: 参数英文描述。 - moduleDescENG:  参数功能英文描述。
    *
    * @var string[]
    */
    protected static $setters = [
            'configurations' => 'setConfigurations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configurations  集群参数配置列表。该对象中key值以具体获取为准，value拥有以下属性。 - id:  参数配置ID。 - key: 参数名称。 - vlaue:  参数值。 - defaultValue:  参数默认值。 - regex:  参数约束限制。 - desc:  参数中文描述。 - type:  参数类型描述。 - moduleDesc: 参数功能中文描述。 - modifyEnable: 参数是否可修改 true： 可以修改。 false：不可修改。 - enableValue: 参数支持修改的值。 - fileName: 参数存在的文件名称。默认为elasticsearch.yml。 - version:  版本信息。 - descENG: 参数英文描述。 - moduleDescENG:  参数功能英文描述。
    *
    * @var string[]
    */
    protected static $getters = [
            'configurations' => 'getConfigurations'
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
        $this->container['configurations'] = isset($data['configurations']) ? $data['configurations'] : null;
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
    * Gets configurations
    *  集群参数配置列表。该对象中key值以具体获取为准，value拥有以下属性。 - id:  参数配置ID。 - key: 参数名称。 - vlaue:  参数值。 - defaultValue:  参数默认值。 - regex:  参数约束限制。 - desc:  参数中文描述。 - type:  参数类型描述。 - moduleDesc: 参数功能中文描述。 - modifyEnable: 参数是否可修改 true： 可以修改。 false：不可修改。 - enableValue: 参数支持修改的值。 - fileName: 参数存在的文件名称。默认为elasticsearch.yml。 - version:  版本信息。 - descENG: 参数英文描述。 - moduleDescENG:  参数功能英文描述。
    *
    * @return object|null
    */
    public function getConfigurations()
    {
        return $this->container['configurations'];
    }

    /**
    * Sets configurations
    *
    * @param object|null $configurations 集群参数配置列表。该对象中key值以具体获取为准，value拥有以下属性。 - id:  参数配置ID。 - key: 参数名称。 - vlaue:  参数值。 - defaultValue:  参数默认值。 - regex:  参数约束限制。 - desc:  参数中文描述。 - type:  参数类型描述。 - moduleDesc: 参数功能中文描述。 - modifyEnable: 参数是否可修改 true： 可以修改。 false：不可修改。 - enableValue: 参数支持修改的值。 - fileName: 参数存在的文件名称。默认为elasticsearch.yml。 - version:  版本信息。 - descENG: 参数英文描述。 - moduleDescENG:  参数功能英文描述。
    *
    * @return $this
    */
    public function setConfigurations($configurations)
    {
        $this->container['configurations'] = $configurations;
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

