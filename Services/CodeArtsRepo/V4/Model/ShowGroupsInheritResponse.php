<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGroupsInheritResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGroupsInheritResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释：** 代码组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sourceSetting  **参数解释：** 资源类型设置。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * upwardInheritEditable  **参数解释：** 向上继承是否可编辑。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'sourceSetting' => 'string',
            'projectId' => 'string',
            'upwardInheritEditable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释：** 代码组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sourceSetting  **参数解释：** 资源类型设置。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * upwardInheritEditable  **参数解释：** 向上继承是否可编辑。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'sourceSetting' => null,
        'projectId' => null,
        'upwardInheritEditable' => null
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
    * groupId  **参数解释：** 代码组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sourceSetting  **参数解释：** 资源类型设置。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * upwardInheritEditable  **参数解释：** 向上继承是否可编辑。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'sourceSetting' => 'source_setting',
            'projectId' => 'project_id',
            'upwardInheritEditable' => 'upward_inherit_editable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释：** 代码组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sourceSetting  **参数解释：** 资源类型设置。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * upwardInheritEditable  **参数解释：** 向上继承是否可编辑。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'sourceSetting' => 'setSourceSetting',
            'projectId' => 'setProjectId',
            'upwardInheritEditable' => 'setUpwardInheritEditable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释：** 代码组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * sourceSetting  **参数解释：** 资源类型设置。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * upwardInheritEditable  **参数解释：** 向上继承是否可编辑。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'sourceSetting' => 'getSourceSetting',
            'projectId' => 'getProjectId',
            'upwardInheritEditable' => 'getUpwardInheritEditable'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['sourceSetting'] = isset($data['sourceSetting']) ? $data['sourceSetting'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['upwardInheritEditable'] = isset($data['upwardInheritEditable']) ? $data['upwardInheritEditable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceSetting']) && (mb_strlen($this->container['sourceSetting']) > 1000)) {
                $invalidProperties[] = "invalid value for 'sourceSetting', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['sourceSetting']) && (mb_strlen($this->container['sourceSetting']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceSetting', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
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
    * Gets groupId
    *  **参数解释：** 代码组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释：** 代码组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets sourceSetting
    *  **参数解释：** 资源类型设置。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getSourceSetting()
    {
        return $this->container['sourceSetting'];
    }

    /**
    * Sets sourceSetting
    *
    * @param string|null $sourceSetting **参数解释：** 资源类型设置。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setSourceSetting($sourceSetting)
    {
        $this->container['sourceSetting'] = $sourceSetting;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释：** 项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets upwardInheritEditable
    *  **参数解释：** 向上继承是否可编辑。
    *
    * @return bool|null
    */
    public function getUpwardInheritEditable()
    {
        return $this->container['upwardInheritEditable'];
    }

    /**
    * Sets upwardInheritEditable
    *
    * @param bool|null $upwardInheritEditable **参数解释：** 向上继承是否可编辑。
    *
    * @return $this
    */
    public function setUpwardInheritEditable($upwardInheritEditable)
    {
        $this->container['upwardInheritEditable'] = $upwardInheritEditable;
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

