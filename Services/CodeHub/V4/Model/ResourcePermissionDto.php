<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourcePermissionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourcePermissionDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * permissionId  **参数解释：** 记录id。
    * action  **参数解释：** 操作。 **取值范围：** 字符串长度不少于1，不超过1000。
    * displayName  **参数解释：** 操作名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * displayNameCn  **参数解释：** 操作中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * enabled  **参数解释：** 是否开启。
    * editable  **参数解释：** 是否编辑。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'permissionId' => 'int',
            'action' => 'string',
            'displayName' => 'string',
            'displayNameCn' => 'string',
            'enabled' => 'bool',
            'editable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * permissionId  **参数解释：** 记录id。
    * action  **参数解释：** 操作。 **取值范围：** 字符串长度不少于1，不超过1000。
    * displayName  **参数解释：** 操作名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * displayNameCn  **参数解释：** 操作中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * enabled  **参数解释：** 是否开启。
    * editable  **参数解释：** 是否编辑。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'permissionId' => 'int32',
        'action' => null,
        'displayName' => null,
        'displayNameCn' => null,
        'enabled' => null,
        'editable' => null
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
    * permissionId  **参数解释：** 记录id。
    * action  **参数解释：** 操作。 **取值范围：** 字符串长度不少于1，不超过1000。
    * displayName  **参数解释：** 操作名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * displayNameCn  **参数解释：** 操作中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * enabled  **参数解释：** 是否开启。
    * editable  **参数解释：** 是否编辑。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'permissionId' => 'permission_id',
            'action' => 'action',
            'displayName' => 'display_name',
            'displayNameCn' => 'display_name_cn',
            'enabled' => 'enabled',
            'editable' => 'editable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * permissionId  **参数解释：** 记录id。
    * action  **参数解释：** 操作。 **取值范围：** 字符串长度不少于1，不超过1000。
    * displayName  **参数解释：** 操作名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * displayNameCn  **参数解释：** 操作中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * enabled  **参数解释：** 是否开启。
    * editable  **参数解释：** 是否编辑。
    *
    * @var string[]
    */
    protected static $setters = [
            'permissionId' => 'setPermissionId',
            'action' => 'setAction',
            'displayName' => 'setDisplayName',
            'displayNameCn' => 'setDisplayNameCn',
            'enabled' => 'setEnabled',
            'editable' => 'setEditable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * permissionId  **参数解释：** 记录id。
    * action  **参数解释：** 操作。 **取值范围：** 字符串长度不少于1，不超过1000。
    * displayName  **参数解释：** 操作名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * displayNameCn  **参数解释：** 操作中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * enabled  **参数解释：** 是否开启。
    * editable  **参数解释：** 是否编辑。
    *
    * @var string[]
    */
    protected static $getters = [
            'permissionId' => 'getPermissionId',
            'action' => 'getAction',
            'displayName' => 'getDisplayName',
            'displayNameCn' => 'getDisplayNameCn',
            'enabled' => 'getEnabled',
            'editable' => 'getEditable'
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
        $this->container['permissionId'] = isset($data['permissionId']) ? $data['permissionId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['displayNameCn'] = isset($data['displayNameCn']) ? $data['displayNameCn'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['permissionId']) && ($this->container['permissionId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'permissionId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['permissionId']) && ($this->container['permissionId'] < 1)) {
                $invalidProperties[] = "invalid value for 'permissionId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 1000)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) > 1000)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['displayName']) && (mb_strlen($this->container['displayName']) < 1)) {
                $invalidProperties[] = "invalid value for 'displayName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['displayNameCn']) && (mb_strlen($this->container['displayNameCn']) > 1000)) {
                $invalidProperties[] = "invalid value for 'displayNameCn', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['displayNameCn']) && (mb_strlen($this->container['displayNameCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'displayNameCn', the character length must be bigger than or equal to 1.";
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
    * Gets permissionId
    *  **参数解释：** 记录id。
    *
    * @return int|null
    */
    public function getPermissionId()
    {
        return $this->container['permissionId'];
    }

    /**
    * Sets permissionId
    *
    * @param int|null $permissionId **参数解释：** 记录id。
    *
    * @return $this
    */
    public function setPermissionId($permissionId)
    {
        $this->container['permissionId'] = $permissionId;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释：** 操作。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action **参数解释：** 操作。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets displayName
    *  **参数解释：** 操作名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName **参数解释：** 操作名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets displayNameCn
    *  **参数解释：** 操作中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getDisplayNameCn()
    {
        return $this->container['displayNameCn'];
    }

    /**
    * Sets displayNameCn
    *
    * @param string|null $displayNameCn **参数解释：** 操作中文名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setDisplayNameCn($displayNameCn)
    {
        $this->container['displayNameCn'] = $displayNameCn;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释：** 是否开启。
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled **参数解释：** 是否开启。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets editable
    *  **参数解释：** 是否编辑。
    *
    * @return bool|null
    */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
    * Sets editable
    *
    * @param bool|null $editable **参数解释：** 是否编辑。
    *
    * @return $this
    */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;
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

