<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostnameConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostnameConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  K8S节点名称配置类型, 默认为“privateIp”。  -  privateIp: 将节点私有IP作为K8S节点名称 -  cceNodeName: 将CCE节点名称作为K8S节点名称  > - 配置为cceNodeName的节点, 其节点名称、K8S节点名称以及虚机名称相同。节点名称不支持修改, 并且在ECS侧修改了虚机名称，同步云服务器时，不会将修改后的虚机名称同步到节点。 > - 配置为cceNodeName的节点，为了避免K8S节点名称冲突，系统会自动在节点名称后添加后缀，后缀的格式为中划线(-)+五位随机字符，随机字符的取值为[a-z0-9]。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  K8S节点名称配置类型, 默认为“privateIp”。  -  privateIp: 将节点私有IP作为K8S节点名称 -  cceNodeName: 将CCE节点名称作为K8S节点名称  > - 配置为cceNodeName的节点, 其节点名称、K8S节点名称以及虚机名称相同。节点名称不支持修改, 并且在ECS侧修改了虚机名称，同步云服务器时，不会将修改后的虚机名称同步到节点。 > - 配置为cceNodeName的节点，为了避免K8S节点名称冲突，系统会自动在节点名称后添加后缀，后缀的格式为中划线(-)+五位随机字符，随机字符的取值为[a-z0-9]。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null
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
    * type  K8S节点名称配置类型, 默认为“privateIp”。  -  privateIp: 将节点私有IP作为K8S节点名称 -  cceNodeName: 将CCE节点名称作为K8S节点名称  > - 配置为cceNodeName的节点, 其节点名称、K8S节点名称以及虚机名称相同。节点名称不支持修改, 并且在ECS侧修改了虚机名称，同步云服务器时，不会将修改后的虚机名称同步到节点。 > - 配置为cceNodeName的节点，为了避免K8S节点名称冲突，系统会自动在节点名称后添加后缀，后缀的格式为中划线(-)+五位随机字符，随机字符的取值为[a-z0-9]。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  K8S节点名称配置类型, 默认为“privateIp”。  -  privateIp: 将节点私有IP作为K8S节点名称 -  cceNodeName: 将CCE节点名称作为K8S节点名称  > - 配置为cceNodeName的节点, 其节点名称、K8S节点名称以及虚机名称相同。节点名称不支持修改, 并且在ECS侧修改了虚机名称，同步云服务器时，不会将修改后的虚机名称同步到节点。 > - 配置为cceNodeName的节点，为了避免K8S节点名称冲突，系统会自动在节点名称后添加后缀，后缀的格式为中划线(-)+五位随机字符，随机字符的取值为[a-z0-9]。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  K8S节点名称配置类型, 默认为“privateIp”。  -  privateIp: 将节点私有IP作为K8S节点名称 -  cceNodeName: 将CCE节点名称作为K8S节点名称  > - 配置为cceNodeName的节点, 其节点名称、K8S节点名称以及虚机名称相同。节点名称不支持修改, 并且在ECS侧修改了虚机名称，同步云服务器时，不会将修改后的虚机名称同步到节点。 > - 配置为cceNodeName的节点，为了避免K8S节点名称冲突，系统会自动在节点名称后添加后缀，后缀的格式为中划线(-)+五位随机字符，随机字符的取值为[a-z0-9]。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType'
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
    const TYPE_PRIVATE_IP = 'privateIp';
    const TYPE_CCE_NODE_NAME = 'cceNodeName';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PRIVATE_IP,
            self::TYPE_CCE_NODE_NAME,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets type
    *  K8S节点名称配置类型, 默认为“privateIp”。  -  privateIp: 将节点私有IP作为K8S节点名称 -  cceNodeName: 将CCE节点名称作为K8S节点名称  > - 配置为cceNodeName的节点, 其节点名称、K8S节点名称以及虚机名称相同。节点名称不支持修改, 并且在ECS侧修改了虚机名称，同步云服务器时，不会将修改后的虚机名称同步到节点。 > - 配置为cceNodeName的节点，为了避免K8S节点名称冲突，系统会自动在节点名称后添加后缀，后缀的格式为中划线(-)+五位随机字符，随机字符的取值为[a-z0-9]。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type K8S节点名称配置类型, 默认为“privateIp”。  -  privateIp: 将节点私有IP作为K8S节点名称 -  cceNodeName: 将CCE节点名称作为K8S节点名称  > - 配置为cceNodeName的节点, 其节点名称、K8S节点名称以及虚机名称相同。节点名称不支持修改, 并且在ECS侧修改了虚机名称，同步云服务器时，不会将修改后的虚机名称同步到节点。 > - 配置为cceNodeName的节点，为了避免K8S节点名称冲突，系统会自动在节点名称后添加后缀，后缀的格式为中划线(-)+五位随机字符，随机字符的取值为[a-z0-9]。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

