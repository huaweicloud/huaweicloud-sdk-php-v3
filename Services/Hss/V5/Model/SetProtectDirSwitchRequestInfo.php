<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SetProtectDirSwitchRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SetProtectDirSwitchRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectDirList  **参数解释**: 需要暂停或恢复的防护目录列表 **约束限制**: 不涉及 **取值范围**: 不超过50条 **默认取值**: 不涉及
    * enableProtect  **参数解释**: 暂停或恢复防护目录的防护状态 **约束限制**: 不涉及 **取值范围**: - true ：恢复防护。 - false ：暂停防护。  **默认取值**: false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectDirList' => 'string[]',
            'enableProtect' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectDirList  **参数解释**: 需要暂停或恢复的防护目录列表 **约束限制**: 不涉及 **取值范围**: 不超过50条 **默认取值**: 不涉及
    * enableProtect  **参数解释**: 暂停或恢复防护目录的防护状态 **约束限制**: 不涉及 **取值范围**: - true ：恢复防护。 - false ：暂停防护。  **默认取值**: false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectDirList' => null,
        'enableProtect' => null
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
    * protectDirList  **参数解释**: 需要暂停或恢复的防护目录列表 **约束限制**: 不涉及 **取值范围**: 不超过50条 **默认取值**: 不涉及
    * enableProtect  **参数解释**: 暂停或恢复防护目录的防护状态 **约束限制**: 不涉及 **取值范围**: - true ：恢复防护。 - false ：暂停防护。  **默认取值**: false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectDirList' => 'protect_dir_list',
            'enableProtect' => 'enable_protect'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectDirList  **参数解释**: 需要暂停或恢复的防护目录列表 **约束限制**: 不涉及 **取值范围**: 不超过50条 **默认取值**: 不涉及
    * enableProtect  **参数解释**: 暂停或恢复防护目录的防护状态 **约束限制**: 不涉及 **取值范围**: - true ：恢复防护。 - false ：暂停防护。  **默认取值**: false
    *
    * @var string[]
    */
    protected static $setters = [
            'protectDirList' => 'setProtectDirList',
            'enableProtect' => 'setEnableProtect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectDirList  **参数解释**: 需要暂停或恢复的防护目录列表 **约束限制**: 不涉及 **取值范围**: 不超过50条 **默认取值**: 不涉及
    * enableProtect  **参数解释**: 暂停或恢复防护目录的防护状态 **约束限制**: 不涉及 **取值范围**: - true ：恢复防护。 - false ：暂停防护。  **默认取值**: false
    *
    * @var string[]
    */
    protected static $getters = [
            'protectDirList' => 'getProtectDirList',
            'enableProtect' => 'getEnableProtect'
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
        $this->container['protectDirList'] = isset($data['protectDirList']) ? $data['protectDirList'] : null;
        $this->container['enableProtect'] = isset($data['enableProtect']) ? $data['enableProtect'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['protectDirList'] === null) {
            $invalidProperties[] = "'protectDirList' can't be null";
        }
        if ($this->container['enableProtect'] === null) {
            $invalidProperties[] = "'enableProtect' can't be null";
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
    * Gets protectDirList
    *  **参数解释**: 需要暂停或恢复的防护目录列表 **约束限制**: 不涉及 **取值范围**: 不超过50条 **默认取值**: 不涉及
    *
    * @return string[]
    */
    public function getProtectDirList()
    {
        return $this->container['protectDirList'];
    }

    /**
    * Sets protectDirList
    *
    * @param string[] $protectDirList **参数解释**: 需要暂停或恢复的防护目录列表 **约束限制**: 不涉及 **取值范围**: 不超过50条 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProtectDirList($protectDirList)
    {
        $this->container['protectDirList'] = $protectDirList;
        return $this;
    }

    /**
    * Gets enableProtect
    *  **参数解释**: 暂停或恢复防护目录的防护状态 **约束限制**: 不涉及 **取值范围**: - true ：恢复防护。 - false ：暂停防护。  **默认取值**: false
    *
    * @return bool
    */
    public function getEnableProtect()
    {
        return $this->container['enableProtect'];
    }

    /**
    * Sets enableProtect
    *
    * @param bool $enableProtect **参数解释**: 暂停或恢复防护目录的防护状态 **约束限制**: 不涉及 **取值范围**: - true ：恢复防护。 - false ：暂停防护。  **默认取值**: false
    *
    * @return $this
    */
    public function setEnableProtect($enableProtect)
    {
        $this->container['enableProtect'] = $enableProtect;
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

