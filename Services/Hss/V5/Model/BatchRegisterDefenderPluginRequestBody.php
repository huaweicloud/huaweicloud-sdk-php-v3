<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchRegisterDefenderPluginRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchRegisterDefenderPluginRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * opt  **参数解释**: 操作类型 **约束限制**: 必填 **取值范围**: - install：安装 - uninstall：卸载  **默认取值**: 不涉及
    * instanceIds  **参数解释**: 智能体实例ID列表 **约束限制**: 必填 **取值范围**: 1-200个实例ID **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'opt' => 'string',
            'instanceIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * opt  **参数解释**: 操作类型 **约束限制**: 必填 **取值范围**: - install：安装 - uninstall：卸载  **默认取值**: 不涉及
    * instanceIds  **参数解释**: 智能体实例ID列表 **约束限制**: 必填 **取值范围**: 1-200个实例ID **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'opt' => null,
        'instanceIds' => null
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
    * opt  **参数解释**: 操作类型 **约束限制**: 必填 **取值范围**: - install：安装 - uninstall：卸载  **默认取值**: 不涉及
    * instanceIds  **参数解释**: 智能体实例ID列表 **约束限制**: 必填 **取值范围**: 1-200个实例ID **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'opt' => 'opt',
            'instanceIds' => 'instance_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * opt  **参数解释**: 操作类型 **约束限制**: 必填 **取值范围**: - install：安装 - uninstall：卸载  **默认取值**: 不涉及
    * instanceIds  **参数解释**: 智能体实例ID列表 **约束限制**: 必填 **取值范围**: 1-200个实例ID **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'opt' => 'setOpt',
            'instanceIds' => 'setInstanceIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * opt  **参数解释**: 操作类型 **约束限制**: 必填 **取值范围**: - install：安装 - uninstall：卸载  **默认取值**: 不涉及
    * instanceIds  **参数解释**: 智能体实例ID列表 **约束限制**: 必填 **取值范围**: 1-200个实例ID **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'opt' => 'getOpt',
            'instanceIds' => 'getInstanceIds'
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
    const OPT_INSTALL = 'install';
    const OPT_UNINSTALL = 'uninstall';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOptAllowableValues()
    {
        return [
            self::OPT_INSTALL,
            self::OPT_UNINSTALL,
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
        $this->container['opt'] = isset($data['opt']) ? $data['opt'] : null;
        $this->container['instanceIds'] = isset($data['instanceIds']) ? $data['instanceIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['opt'] === null) {
            $invalidProperties[] = "'opt' can't be null";
        }
            $allowedValues = $this->getOptAllowableValues();
                if (!is_null($this->container['opt']) && !in_array($this->container['opt'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'opt', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!preg_match("/^install|uninstall$/", $this->container['opt'])) {
                $invalidProperties[] = "invalid value for 'opt', must be conform to the pattern /^install|uninstall$/.";
            }
        if ($this->container['instanceIds'] === null) {
            $invalidProperties[] = "'instanceIds' can't be null";
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
    * Gets opt
    *  **参数解释**: 操作类型 **约束限制**: 必填 **取值范围**: - install：安装 - uninstall：卸载  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getOpt()
    {
        return $this->container['opt'];
    }

    /**
    * Sets opt
    *
    * @param string $opt **参数解释**: 操作类型 **约束限制**: 必填 **取值范围**: - install：安装 - uninstall：卸载  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOpt($opt)
    {
        $this->container['opt'] = $opt;
        return $this;
    }

    /**
    * Gets instanceIds
    *  **参数解释**: 智能体实例ID列表 **约束限制**: 必填 **取值范围**: 1-200个实例ID **默认取值**: 不涉及
    *
    * @return string[]
    */
    public function getInstanceIds()
    {
        return $this->container['instanceIds'];
    }

    /**
    * Sets instanceIds
    *
    * @param string[] $instanceIds **参数解释**: 智能体实例ID列表 **约束限制**: 必填 **取值范围**: 1-200个实例ID **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setInstanceIds($instanceIds)
    {
        $this->container['instanceIds'] = $instanceIds;
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

