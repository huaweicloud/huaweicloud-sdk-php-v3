<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRepositoryInheritSettingSourceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRepositoryInheritSettingSourceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceType  **参数解释：** 设置源类型。 **取值范围：** - project，项目。 - group，代码组。 - repository，仓库。
    * sourceId  **参数解释：** 设置源ID。 **取值范围：** 1-2147483647
    * upwardInheritEditable  **参数解释：** 继承设置是否可修改。 **取值范围：** - true，可修改。 - false，不可修改。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceType' => 'string',
            'sourceId' => 'string',
            'upwardInheritEditable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceType  **参数解释：** 设置源类型。 **取值范围：** - project，项目。 - group，代码组。 - repository，仓库。
    * sourceId  **参数解释：** 设置源ID。 **取值范围：** 1-2147483647
    * upwardInheritEditable  **参数解释：** 继承设置是否可修改。 **取值范围：** - true，可修改。 - false，不可修改。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceType' => null,
        'sourceId' => null,
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
    * sourceType  **参数解释：** 设置源类型。 **取值范围：** - project，项目。 - group，代码组。 - repository，仓库。
    * sourceId  **参数解释：** 设置源ID。 **取值范围：** 1-2147483647
    * upwardInheritEditable  **参数解释：** 继承设置是否可修改。 **取值范围：** - true，可修改。 - false，不可修改。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceType' => 'source_type',
            'sourceId' => 'source_id',
            'upwardInheritEditable' => 'upward_inherit_editable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceType  **参数解释：** 设置源类型。 **取值范围：** - project，项目。 - group，代码组。 - repository，仓库。
    * sourceId  **参数解释：** 设置源ID。 **取值范围：** 1-2147483647
    * upwardInheritEditable  **参数解释：** 继承设置是否可修改。 **取值范围：** - true，可修改。 - false，不可修改。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceType' => 'setSourceType',
            'sourceId' => 'setSourceId',
            'upwardInheritEditable' => 'setUpwardInheritEditable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceType  **参数解释：** 设置源类型。 **取值范围：** - project，项目。 - group，代码组。 - repository，仓库。
    * sourceId  **参数解释：** 设置源ID。 **取值范围：** 1-2147483647
    * upwardInheritEditable  **参数解释：** 继承设置是否可修改。 **取值范围：** - true，可修改。 - false，不可修改。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceType' => 'getSourceType',
            'sourceId' => 'getSourceId',
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
    const SOURCE_TYPE_PROJECT = 'project';
    const SOURCE_TYPE_GROUP = 'group';
    const SOURCE_TYPE_REPOSITORY = 'repository';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_PROJECT,
            self::SOURCE_TYPE_GROUP,
            self::SOURCE_TYPE_REPOSITORY,
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
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
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
            $allowedValues = $this->getSourceTypeAllowableValues();
                if (!is_null($this->container['sourceType']) && !in_array($this->container['sourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sourceType', must be one of '%s'",
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
    * Gets sourceType
    *  **参数解释：** 设置源类型。 **取值范围：** - project，项目。 - group，代码组。 - repository，仓库。
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType **参数解释：** 设置源类型。 **取值范围：** - project，项目。 - group，代码组。 - repository，仓库。
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets sourceId
    *  **参数解释：** 设置源ID。 **取值范围：** 1-2147483647
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId **参数解释：** 设置源ID。 **取值范围：** 1-2147483647
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets upwardInheritEditable
    *  **参数解释：** 继承设置是否可修改。 **取值范围：** - true，可修改。 - false，不可修改。
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
    * @param bool|null $upwardInheritEditable **参数解释：** 继承设置是否可修改。 **取值范围：** - true，可修改。 - false，不可修改。
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

