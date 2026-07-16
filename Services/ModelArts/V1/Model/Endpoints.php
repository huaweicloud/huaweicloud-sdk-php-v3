<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Endpoints implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Endpoints';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * devService  **参数解释**：支持的服务。 **取值范围**： - NOTEBOOK：可以通过https协议访问Notebook - SSH：可以通过SSH协议远程连接Notebook
    * extensions  **参数解释**：通过应用专属URL直接打开应用进入远程开发模式。包含应用的各种扩展配置。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sshKeys  **参数解释**：SSH密钥对名称列表。允许设置多个密钥对实现同时对SSH实例的访问。 **约束限制**：不涉及。 **取值范围**：0 - 1024个密钥对 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'devService' => 'string',
            'extensions' => 'map[string,string]',
            'sshKeys' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * devService  **参数解释**：支持的服务。 **取值范围**： - NOTEBOOK：可以通过https协议访问Notebook - SSH：可以通过SSH协议远程连接Notebook
    * extensions  **参数解释**：通过应用专属URL直接打开应用进入远程开发模式。包含应用的各种扩展配置。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sshKeys  **参数解释**：SSH密钥对名称列表。允许设置多个密钥对实现同时对SSH实例的访问。 **约束限制**：不涉及。 **取值范围**：0 - 1024个密钥对 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'devService' => null,
        'extensions' => null,
        'sshKeys' => null
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
    * devService  **参数解释**：支持的服务。 **取值范围**： - NOTEBOOK：可以通过https协议访问Notebook - SSH：可以通过SSH协议远程连接Notebook
    * extensions  **参数解释**：通过应用专属URL直接打开应用进入远程开发模式。包含应用的各种扩展配置。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sshKeys  **参数解释**：SSH密钥对名称列表。允许设置多个密钥对实现同时对SSH实例的访问。 **约束限制**：不涉及。 **取值范围**：0 - 1024个密钥对 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'devService' => 'dev_service',
            'extensions' => 'extensions',
            'sshKeys' => 'ssh_keys'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * devService  **参数解释**：支持的服务。 **取值范围**： - NOTEBOOK：可以通过https协议访问Notebook - SSH：可以通过SSH协议远程连接Notebook
    * extensions  **参数解释**：通过应用专属URL直接打开应用进入远程开发模式。包含应用的各种扩展配置。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sshKeys  **参数解释**：SSH密钥对名称列表。允许设置多个密钥对实现同时对SSH实例的访问。 **约束限制**：不涉及。 **取值范围**：0 - 1024个密钥对 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'devService' => 'setDevService',
            'extensions' => 'setExtensions',
            'sshKeys' => 'setSshKeys'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * devService  **参数解释**：支持的服务。 **取值范围**： - NOTEBOOK：可以通过https协议访问Notebook - SSH：可以通过SSH协议远程连接Notebook
    * extensions  **参数解释**：通过应用专属URL直接打开应用进入远程开发模式。包含应用的各种扩展配置。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    * sshKeys  **参数解释**：SSH密钥对名称列表。允许设置多个密钥对实现同时对SSH实例的访问。 **约束限制**：不涉及。 **取值范围**：0 - 1024个密钥对 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'devService' => 'getDevService',
            'extensions' => 'getExtensions',
            'sshKeys' => 'getSshKeys'
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
    const DEV_SERVICE_AI_FLOW = 'AI_FLOW';
    const DEV_SERVICE_MA_STUDIO = 'MA_STUDIO';
    const DEV_SERVICE_NOTEBOOK = 'NOTEBOOK';
    const DEV_SERVICE_SSH = 'SSH';
    const DEV_SERVICE_TENSOR_BOARD = 'TENSOR_BOARD';
    const DEV_SERVICE_WEB_IDE = 'WEB_IDE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDevServiceAllowableValues()
    {
        return [
            self::DEV_SERVICE_AI_FLOW,
            self::DEV_SERVICE_MA_STUDIO,
            self::DEV_SERVICE_NOTEBOOK,
            self::DEV_SERVICE_SSH,
            self::DEV_SERVICE_TENSOR_BOARD,
            self::DEV_SERVICE_WEB_IDE,
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
        $this->container['devService'] = isset($data['devService']) ? $data['devService'] : null;
        $this->container['extensions'] = isset($data['extensions']) ? $data['extensions'] : null;
        $this->container['sshKeys'] = isset($data['sshKeys']) ? $data['sshKeys'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDevServiceAllowableValues();
                if (!is_null($this->container['devService']) && !in_array($this->container['devService'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'devService', must be one of '%s'",
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
    * Gets devService
    *  **参数解释**：支持的服务。 **取值范围**： - NOTEBOOK：可以通过https协议访问Notebook - SSH：可以通过SSH协议远程连接Notebook
    *
    * @return string|null
    */
    public function getDevService()
    {
        return $this->container['devService'];
    }

    /**
    * Sets devService
    *
    * @param string|null $devService **参数解释**：支持的服务。 **取值范围**： - NOTEBOOK：可以通过https协议访问Notebook - SSH：可以通过SSH协议远程连接Notebook
    *
    * @return $this
    */
    public function setDevService($devService)
    {
        $this->container['devService'] = $devService;
        return $this;
    }

    /**
    * Gets extensions
    *  **参数解释**：通过应用专属URL直接打开应用进入远程开发模式。包含应用的各种扩展配置。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return map[string,string]|null
    */
    public function getExtensions()
    {
        return $this->container['extensions'];
    }

    /**
    * Sets extensions
    *
    * @param map[string,string]|null $extensions **参数解释**：通过应用专属URL直接打开应用进入远程开发模式。包含应用的各种扩展配置。 **约束限制**：不涉及。 **取值范围**：不涉及。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setExtensions($extensions)
    {
        $this->container['extensions'] = $extensions;
        return $this;
    }

    /**
    * Gets sshKeys
    *  **参数解释**：SSH密钥对名称列表。允许设置多个密钥对实现同时对SSH实例的访问。 **约束限制**：不涉及。 **取值范围**：0 - 1024个密钥对 **默认取值**：不涉及。
    *
    * @return string[]|null
    */
    public function getSshKeys()
    {
        return $this->container['sshKeys'];
    }

    /**
    * Sets sshKeys
    *
    * @param string[]|null $sshKeys **参数解释**：SSH密钥对名称列表。允许设置多个密钥对实现同时对SSH实例的访问。 **约束限制**：不涉及。 **取值范围**：0 - 1024个密钥对 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSshKeys($sshKeys)
    {
        $this->container['sshKeys'] = $sshKeys;
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

