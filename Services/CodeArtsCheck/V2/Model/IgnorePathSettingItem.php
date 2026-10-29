<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IgnorePathSettingItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IgnorePathSettingItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filePath  **参数解释：** 需要屏蔽的目录或文件路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * checkboxStatus  **参数解释：** 屏蔽状态。 **约束限制：** 不涉及。 **取值范围：** - unchecked：取消屏蔽 - all：全部屏蔽 - half：半屏蔽，用于目录，表示目录下部分子目录、文件需要屏蔽 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filePath' => 'string',
            'checkboxStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filePath  **参数解释：** 需要屏蔽的目录或文件路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * checkboxStatus  **参数解释：** 屏蔽状态。 **约束限制：** 不涉及。 **取值范围：** - unchecked：取消屏蔽 - all：全部屏蔽 - half：半屏蔽，用于目录，表示目录下部分子目录、文件需要屏蔽 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filePath' => null,
        'checkboxStatus' => null
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
    * filePath  **参数解释：** 需要屏蔽的目录或文件路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * checkboxStatus  **参数解释：** 屏蔽状态。 **约束限制：** 不涉及。 **取值范围：** - unchecked：取消屏蔽 - all：全部屏蔽 - half：半屏蔽，用于目录，表示目录下部分子目录、文件需要屏蔽 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filePath' => 'file_path',
            'checkboxStatus' => 'checkbox_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filePath  **参数解释：** 需要屏蔽的目录或文件路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * checkboxStatus  **参数解释：** 屏蔽状态。 **约束限制：** 不涉及。 **取值范围：** - unchecked：取消屏蔽 - all：全部屏蔽 - half：半屏蔽，用于目录，表示目录下部分子目录、文件需要屏蔽 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'filePath' => 'setFilePath',
            'checkboxStatus' => 'setCheckboxStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filePath  **参数解释：** 需要屏蔽的目录或文件路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * checkboxStatus  **参数解释：** 屏蔽状态。 **约束限制：** 不涉及。 **取值范围：** - unchecked：取消屏蔽 - all：全部屏蔽 - half：半屏蔽，用于目录，表示目录下部分子目录、文件需要屏蔽 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'filePath' => 'getFilePath',
            'checkboxStatus' => 'getCheckboxStatus'
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
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['checkboxStatus'] = isset($data['checkboxStatus']) ? $data['checkboxStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets filePath
    *  **参数解释：** 需要屏蔽的目录或文件路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath **参数解释：** 需要屏蔽的目录或文件路径。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
        return $this;
    }

    /**
    * Gets checkboxStatus
    *  **参数解释：** 屏蔽状态。 **约束限制：** 不涉及。 **取值范围：** - unchecked：取消屏蔽 - all：全部屏蔽 - half：半屏蔽，用于目录，表示目录下部分子目录、文件需要屏蔽 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getCheckboxStatus()
    {
        return $this->container['checkboxStatus'];
    }

    /**
    * Sets checkboxStatus
    *
    * @param string|null $checkboxStatus **参数解释：** 屏蔽状态。 **约束限制：** 不涉及。 **取值范围：** - unchecked：取消屏蔽 - all：全部屏蔽 - half：半屏蔽，用于目录，表示目录下部分子目录、文件需要屏蔽 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCheckboxStatus($checkboxStatus)
    {
        $this->container['checkboxStatus'] = $checkboxStatus;
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

