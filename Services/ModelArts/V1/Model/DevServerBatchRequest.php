<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DevServerBatchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DevServerBatchRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  **参数解释**：批量操作类型。 **约束限制**：不涉及。 **取值范围**： - START：批量启动Lite Server实例 - STOP：批量停止Lite Server实例 - REBOOT：批量重启Lite Server实例 - CHANGEOS：批量切换Lite Server服务器操作系统镜像 - REINSTALLOS：批量重装Lite Server服务器操作系统镜像 - DELETE：批量删除Lite Server实例 **默认取值**：不涉及。
    * servers  **参数解释**：批量操作Lite Server ID列表。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'servers' => '\HuaweiCloud\SDK\ModelArts\V1\Model\BatchActionDevServerIds[]',
            'extendParam' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServerOsRequest'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  **参数解释**：批量操作类型。 **约束限制**：不涉及。 **取值范围**： - START：批量启动Lite Server实例 - STOP：批量停止Lite Server实例 - REBOOT：批量重启Lite Server实例 - CHANGEOS：批量切换Lite Server服务器操作系统镜像 - REINSTALLOS：批量重装Lite Server服务器操作系统镜像 - DELETE：批量删除Lite Server实例 **默认取值**：不涉及。
    * servers  **参数解释**：批量操作Lite Server ID列表。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'servers' => null,
        'extendParam' => null
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
    * type  **参数解释**：批量操作类型。 **约束限制**：不涉及。 **取值范围**： - START：批量启动Lite Server实例 - STOP：批量停止Lite Server实例 - REBOOT：批量重启Lite Server实例 - CHANGEOS：批量切换Lite Server服务器操作系统镜像 - REINSTALLOS：批量重装Lite Server服务器操作系统镜像 - DELETE：批量删除Lite Server实例 **默认取值**：不涉及。
    * servers  **参数解释**：批量操作Lite Server ID列表。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'servers' => 'servers',
            'extendParam' => 'extend_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  **参数解释**：批量操作类型。 **约束限制**：不涉及。 **取值范围**： - START：批量启动Lite Server实例 - STOP：批量停止Lite Server实例 - REBOOT：批量重启Lite Server实例 - CHANGEOS：批量切换Lite Server服务器操作系统镜像 - REINSTALLOS：批量重装Lite Server服务器操作系统镜像 - DELETE：批量删除Lite Server实例 **默认取值**：不涉及。
    * servers  **参数解释**：批量操作Lite Server ID列表。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'servers' => 'setServers',
            'extendParam' => 'setExtendParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  **参数解释**：批量操作类型。 **约束限制**：不涉及。 **取值范围**： - START：批量启动Lite Server实例 - STOP：批量停止Lite Server实例 - REBOOT：批量重启Lite Server实例 - CHANGEOS：批量切换Lite Server服务器操作系统镜像 - REINSTALLOS：批量重装Lite Server服务器操作系统镜像 - DELETE：批量删除Lite Server实例 **默认取值**：不涉及。
    * servers  **参数解释**：批量操作Lite Server ID列表。
    * extendParam  extendParam
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'servers' => 'getServers',
            'extendParam' => 'getExtendParam'
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
    const TYPE_START = 'START';
    const TYPE_STOP = 'STOP';
    const TYPE_REBOOT = 'REBOOT';
    const TYPE_CHANGEOS = 'CHANGEOS';
    const TYPE_REINSTALLOS = 'REINSTALLOS';
    const TYPE_DELETE = 'DELETE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_START,
            self::TYPE_STOP,
            self::TYPE_REBOOT,
            self::TYPE_CHANGEOS,
            self::TYPE_REINSTALLOS,
            self::TYPE_DELETE,
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
        $this->container['servers'] = isset($data['servers']) ? $data['servers'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
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

        if ($this->container['servers'] === null) {
            $invalidProperties[] = "'servers' can't be null";
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
    *  **参数解释**：批量操作类型。 **约束限制**：不涉及。 **取值范围**： - START：批量启动Lite Server实例 - STOP：批量停止Lite Server实例 - REBOOT：批量重启Lite Server实例 - CHANGEOS：批量切换Lite Server服务器操作系统镜像 - REINSTALLOS：批量重装Lite Server服务器操作系统镜像 - DELETE：批量删除Lite Server实例 **默认取值**：不涉及。
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
    * @param string $type **参数解释**：批量操作类型。 **约束限制**：不涉及。 **取值范围**： - START：批量启动Lite Server实例 - STOP：批量停止Lite Server实例 - REBOOT：批量重启Lite Server实例 - CHANGEOS：批量切换Lite Server服务器操作系统镜像 - REINSTALLOS：批量重装Lite Server服务器操作系统镜像 - DELETE：批量删除Lite Server实例 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets servers
    *  **参数解释**：批量操作Lite Server ID列表。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\BatchActionDevServerIds[]
    */
    public function getServers()
    {
        return $this->container['servers'];
    }

    /**
    * Sets servers
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\BatchActionDevServerIds[] $servers **参数解释**：批量操作Lite Server ID列表。
    *
    * @return $this
    */
    public function setServers($servers)
    {
        $this->container['servers'] = $servers;
        return $this;
    }

    /**
    * Gets extendParam
    *  extendParam
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServerOsRequest|null
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServerOsRequest|null $extendParam extendParam
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
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

