<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterEventResourceResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterEventResourceResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enforcementAction  **参数解释**: 执行动作 **取值范围**: 字符长度1-256位
    * group  **参数解释**: 组 **取值范围**: 字符长度1-256位
    * message  **参数解释**: 信息 **取值范围**: 字符长度1-256位
    * name  **参数解释**: 名称 **取值范围**: 字符长度1-256位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-256位
    * version  **参数解释**: 版本 **取值范围**: 字符长度0-128位
    * kind  **参数解释**: 资源类型 **取值范围**: 字符长度1-64位
    * resourceName  **参数解释**: 资源名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enforcementAction' => 'string',
            'group' => 'string',
            'message' => 'string',
            'name' => 'string',
            'namespace' => 'string',
            'version' => 'string',
            'kind' => 'string',
            'resourceName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enforcementAction  **参数解释**: 执行动作 **取值范围**: 字符长度1-256位
    * group  **参数解释**: 组 **取值范围**: 字符长度1-256位
    * message  **参数解释**: 信息 **取值范围**: 字符长度1-256位
    * name  **参数解释**: 名称 **取值范围**: 字符长度1-256位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-256位
    * version  **参数解释**: 版本 **取值范围**: 字符长度0-128位
    * kind  **参数解释**: 资源类型 **取值范围**: 字符长度1-64位
    * resourceName  **参数解释**: 资源名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enforcementAction' => null,
        'group' => null,
        'message' => null,
        'name' => null,
        'namespace' => null,
        'version' => null,
        'kind' => null,
        'resourceName' => null
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
    * enforcementAction  **参数解释**: 执行动作 **取值范围**: 字符长度1-256位
    * group  **参数解释**: 组 **取值范围**: 字符长度1-256位
    * message  **参数解释**: 信息 **取值范围**: 字符长度1-256位
    * name  **参数解释**: 名称 **取值范围**: 字符长度1-256位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-256位
    * version  **参数解释**: 版本 **取值范围**: 字符长度0-128位
    * kind  **参数解释**: 资源类型 **取值范围**: 字符长度1-64位
    * resourceName  **参数解释**: 资源名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enforcementAction' => 'enforcement_action',
            'group' => 'group',
            'message' => 'message',
            'name' => 'name',
            'namespace' => 'namespace',
            'version' => 'version',
            'kind' => 'kind',
            'resourceName' => 'resource_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enforcementAction  **参数解释**: 执行动作 **取值范围**: 字符长度1-256位
    * group  **参数解释**: 组 **取值范围**: 字符长度1-256位
    * message  **参数解释**: 信息 **取值范围**: 字符长度1-256位
    * name  **参数解释**: 名称 **取值范围**: 字符长度1-256位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-256位
    * version  **参数解释**: 版本 **取值范围**: 字符长度0-128位
    * kind  **参数解释**: 资源类型 **取值范围**: 字符长度1-64位
    * resourceName  **参数解释**: 资源名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'enforcementAction' => 'setEnforcementAction',
            'group' => 'setGroup',
            'message' => 'setMessage',
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'version' => 'setVersion',
            'kind' => 'setKind',
            'resourceName' => 'setResourceName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enforcementAction  **参数解释**: 执行动作 **取值范围**: 字符长度1-256位
    * group  **参数解释**: 组 **取值范围**: 字符长度1-256位
    * message  **参数解释**: 信息 **取值范围**: 字符长度1-256位
    * name  **参数解释**: 名称 **取值范围**: 字符长度1-256位
    * namespace  **参数解释**: 命名空间 **取值范围**: 字符长度0-256位
    * version  **参数解释**: 版本 **取值范围**: 字符长度0-128位
    * kind  **参数解释**: 资源类型 **取值范围**: 字符长度1-64位
    * resourceName  **参数解释**: 资源名称 **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'enforcementAction' => 'getEnforcementAction',
            'group' => 'getGroup',
            'message' => 'getMessage',
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'version' => 'getVersion',
            'kind' => 'getKind',
            'resourceName' => 'getResourceName'
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
        $this->container['enforcementAction'] = isset($data['enforcementAction']) ? $data['enforcementAction'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enforcementAction']) && (mb_strlen($this->container['enforcementAction']) > 256)) {
                $invalidProperties[] = "invalid value for 'enforcementAction', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enforcementAction']) && (mb_strlen($this->container['enforcementAction']) < 1)) {
                $invalidProperties[] = "invalid value for 'enforcementAction', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['group']) && (mb_strlen($this->container['group']) > 256)) {
                $invalidProperties[] = "invalid value for 'group', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['group']) && (mb_strlen($this->container['group']) < 1)) {
                $invalidProperties[] = "invalid value for 'group', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 256)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['kind']) && (mb_strlen($this->container['kind']) > 64)) {
                $invalidProperties[] = "invalid value for 'kind', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['kind']) && (mb_strlen($this->container['kind']) < 1)) {
                $invalidProperties[] = "invalid value for 'kind', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 1.";
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
    * Gets enforcementAction
    *  **参数解释**: 执行动作 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getEnforcementAction()
    {
        return $this->container['enforcementAction'];
    }

    /**
    * Sets enforcementAction
    *
    * @param string|null $enforcementAction **参数解释**: 执行动作 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setEnforcementAction($enforcementAction)
    {
        $this->container['enforcementAction'] = $enforcementAction;
        return $this;
    }

    /**
    * Gets group
    *  **参数解释**: 组 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group **参数解释**: 组 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释**: 信息 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释**: 信息 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**: 名称 **取值范围**: 字符长度1-256位
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
    * @param string|null $name **参数解释**: 名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释**: 命名空间 **取值范围**: 字符长度0-256位
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释**: 命名空间 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 版本 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**: 版本 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets kind
    *  **参数解释**: 资源类型 **取值范围**: 字符长度1-64位
    *
    * @return string|null
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string|null $kind **参数解释**: 资源类型 **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets resourceName
    *  **参数解释**: 资源名称 **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName **参数解释**: 资源名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
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

