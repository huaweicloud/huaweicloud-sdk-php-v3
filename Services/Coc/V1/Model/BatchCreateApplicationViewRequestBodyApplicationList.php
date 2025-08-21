<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateApplicationViewRequestBodyApplicationList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateApplicationViewRequestBody_application_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释：** 应用名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * description  **参数解释：** 应用描述。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在0到256个字符之间。 **默认取值：** 不涉及。
    * parentName  **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    * level  **参数解释：** 层级，默认应用层级为1，子应用层级为2。 **约束限制：** 不涉及。 **取值范围：** - 1：应用层级。 - 2：子应用层级。 **默认取值：** 默认应用层级为1。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'parentName' => 'string',
            'level' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释：** 应用名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * description  **参数解释：** 应用描述。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在0到256个字符之间。 **默认取值：** 不涉及。
    * parentName  **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    * level  **参数解释：** 层级，默认应用层级为1，子应用层级为2。 **约束限制：** 不涉及。 **取值范围：** - 1：应用层级。 - 2：子应用层级。 **默认取值：** 默认应用层级为1。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'parentName' => null,
        'level' => null
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
    * name  **参数解释：** 应用名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * description  **参数解释：** 应用描述。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在0到256个字符之间。 **默认取值：** 不涉及。
    * parentName  **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    * level  **参数解释：** 层级，默认应用层级为1，子应用层级为2。 **约束限制：** 不涉及。 **取值范围：** - 1：应用层级。 - 2：子应用层级。 **默认取值：** 默认应用层级为1。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'parentName' => 'parent_name',
            'level' => 'level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释：** 应用名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * description  **参数解释：** 应用描述。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在0到256个字符之间。 **默认取值：** 不涉及。
    * parentName  **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    * level  **参数解释：** 层级，默认应用层级为1，子应用层级为2。 **约束限制：** 不涉及。 **取值范围：** - 1：应用层级。 - 2：子应用层级。 **默认取值：** 默认应用层级为1。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'parentName' => 'setParentName',
            'level' => 'setLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释：** 应用名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    * description  **参数解释：** 应用描述。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在0到256个字符之间。 **默认取值：** 不涉及。
    * parentName  **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    * level  **参数解释：** 层级，默认应用层级为1，子应用层级为2。 **约束限制：** 不涉及。 **取值范围：** - 1：应用层级。 - 2：子应用层级。 **默认取值：** 默认应用层级为1。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'parentName' => 'getParentName',
            'level' => 'getLevel'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['parentName'] = isset($data['parentName']) ? $data['parentName'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 50)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['parentName']) && (mb_strlen($this->container['parentName']) > 50)) {
                $invalidProperties[] = "invalid value for 'parentName', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['parentName']) && (mb_strlen($this->container['parentName']) < 3)) {
                $invalidProperties[] = "invalid value for 'parentName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 1)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 1)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  **参数解释：** 应用名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
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
    * @param string|null $name **参数解释：** 应用名称。 **约束限制：** 不涉及。 **取值范围：** 由中文、英文字母、数字、中划线、下划线组成，长度在3~50个字符之间。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 应用描述。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在0到256个字符之间。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 应用描述。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度在0到256个字符之间。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets parentName
    *  **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getParentName()
    {
        return $this->container['parentName'];
    }

    /**
    * Sets parentName
    *
    * @param string|null $parentName **参数解释：** 父节点名称。 **约束限制：** 不涉及。 **取值范围：** 字符串，长度3到50个字符。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setParentName($parentName)
    {
        $this->container['parentName'] = $parentName;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释：** 层级，默认应用层级为1，子应用层级为2。 **约束限制：** 不涉及。 **取值范围：** - 1：应用层级。 - 2：子应用层级。 **默认取值：** 默认应用层级为1。
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level **参数解释：** 层级，默认应用层级为1，子应用层级为2。 **约束限制：** 不涉及。 **取值范围：** - 1：应用层级。 - 2：子应用层级。 **默认取值：** 默认应用层级为1。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
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

