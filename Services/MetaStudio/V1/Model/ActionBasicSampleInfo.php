<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ActionBasicSampleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ActionBasicSampleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionNameZh  原子动作中文名称。
    * actionNameEn  原子动作英文名称。
    * actionTag  原子动作标签。
    * catalog  原子动作标签。
    * recommendedValue  推荐等级。
    * isSelected  是否选择此动作。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionNameZh' => 'string',
            'actionNameEn' => 'string',
            'actionTag' => 'string',
            'catalog' => 'string',
            'recommendedValue' => 'int',
            'isSelected' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionNameZh  原子动作中文名称。
    * actionNameEn  原子动作英文名称。
    * actionTag  原子动作标签。
    * catalog  原子动作标签。
    * recommendedValue  推荐等级。
    * isSelected  是否选择此动作。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionNameZh' => null,
        'actionNameEn' => null,
        'actionTag' => null,
        'catalog' => null,
        'recommendedValue' => 'int32',
        'isSelected' => null
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
    * actionNameZh  原子动作中文名称。
    * actionNameEn  原子动作英文名称。
    * actionTag  原子动作标签。
    * catalog  原子动作标签。
    * recommendedValue  推荐等级。
    * isSelected  是否选择此动作。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionNameZh' => 'action_name_zh',
            'actionNameEn' => 'action_name_en',
            'actionTag' => 'action_tag',
            'catalog' => 'catalog',
            'recommendedValue' => 'recommended_value',
            'isSelected' => 'is_selected'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionNameZh  原子动作中文名称。
    * actionNameEn  原子动作英文名称。
    * actionTag  原子动作标签。
    * catalog  原子动作标签。
    * recommendedValue  推荐等级。
    * isSelected  是否选择此动作。
    *
    * @var string[]
    */
    protected static $setters = [
            'actionNameZh' => 'setActionNameZh',
            'actionNameEn' => 'setActionNameEn',
            'actionTag' => 'setActionTag',
            'catalog' => 'setCatalog',
            'recommendedValue' => 'setRecommendedValue',
            'isSelected' => 'setIsSelected'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionNameZh  原子动作中文名称。
    * actionNameEn  原子动作英文名称。
    * actionTag  原子动作标签。
    * catalog  原子动作标签。
    * recommendedValue  推荐等级。
    * isSelected  是否选择此动作。
    *
    * @var string[]
    */
    protected static $getters = [
            'actionNameZh' => 'getActionNameZh',
            'actionNameEn' => 'getActionNameEn',
            'actionTag' => 'getActionTag',
            'catalog' => 'getCatalog',
            'recommendedValue' => 'getRecommendedValue',
            'isSelected' => 'getIsSelected'
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
        $this->container['actionNameZh'] = isset($data['actionNameZh']) ? $data['actionNameZh'] : null;
        $this->container['actionNameEn'] = isset($data['actionNameEn']) ? $data['actionNameEn'] : null;
        $this->container['actionTag'] = isset($data['actionTag']) ? $data['actionTag'] : null;
        $this->container['catalog'] = isset($data['catalog']) ? $data['catalog'] : null;
        $this->container['recommendedValue'] = isset($data['recommendedValue']) ? $data['recommendedValue'] : null;
        $this->container['isSelected'] = isset($data['isSelected']) ? $data['isSelected'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['actionNameZh']) && (mb_strlen($this->container['actionNameZh']) > 1028)) {
                $invalidProperties[] = "invalid value for 'actionNameZh', the character length must be smaller than or equal to 1028.";
            }
            if (!is_null($this->container['actionNameZh']) && (mb_strlen($this->container['actionNameZh']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionNameZh', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['actionNameEn']) && (mb_strlen($this->container['actionNameEn']) > 1028)) {
                $invalidProperties[] = "invalid value for 'actionNameEn', the character length must be smaller than or equal to 1028.";
            }
            if (!is_null($this->container['actionNameEn']) && (mb_strlen($this->container['actionNameEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionNameEn', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['actionTag'] === null) {
            $invalidProperties[] = "'actionTag' can't be null";
        }
            if ((mb_strlen($this->container['actionTag']) > 128)) {
                $invalidProperties[] = "invalid value for 'actionTag', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['actionTag']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionTag', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['catalog']) && (mb_strlen($this->container['catalog']) > 128)) {
                $invalidProperties[] = "invalid value for 'catalog', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['catalog']) && (mb_strlen($this->container['catalog']) < 1)) {
                $invalidProperties[] = "invalid value for 'catalog', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['recommendedValue']) && ($this->container['recommendedValue'] > 100)) {
                $invalidProperties[] = "invalid value for 'recommendedValue', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['recommendedValue']) && ($this->container['recommendedValue'] < 0)) {
                $invalidProperties[] = "invalid value for 'recommendedValue', must be bigger than or equal to 0.";
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
    * Gets actionNameZh
    *  原子动作中文名称。
    *
    * @return string|null
    */
    public function getActionNameZh()
    {
        return $this->container['actionNameZh'];
    }

    /**
    * Sets actionNameZh
    *
    * @param string|null $actionNameZh 原子动作中文名称。
    *
    * @return $this
    */
    public function setActionNameZh($actionNameZh)
    {
        $this->container['actionNameZh'] = $actionNameZh;
        return $this;
    }

    /**
    * Gets actionNameEn
    *  原子动作英文名称。
    *
    * @return string|null
    */
    public function getActionNameEn()
    {
        return $this->container['actionNameEn'];
    }

    /**
    * Sets actionNameEn
    *
    * @param string|null $actionNameEn 原子动作英文名称。
    *
    * @return $this
    */
    public function setActionNameEn($actionNameEn)
    {
        $this->container['actionNameEn'] = $actionNameEn;
        return $this;
    }

    /**
    * Gets actionTag
    *  原子动作标签。
    *
    * @return string
    */
    public function getActionTag()
    {
        return $this->container['actionTag'];
    }

    /**
    * Sets actionTag
    *
    * @param string $actionTag 原子动作标签。
    *
    * @return $this
    */
    public function setActionTag($actionTag)
    {
        $this->container['actionTag'] = $actionTag;
        return $this;
    }

    /**
    * Gets catalog
    *  原子动作标签。
    *
    * @return string|null
    */
    public function getCatalog()
    {
        return $this->container['catalog'];
    }

    /**
    * Sets catalog
    *
    * @param string|null $catalog 原子动作标签。
    *
    * @return $this
    */
    public function setCatalog($catalog)
    {
        $this->container['catalog'] = $catalog;
        return $this;
    }

    /**
    * Gets recommendedValue
    *  推荐等级。
    *
    * @return int|null
    */
    public function getRecommendedValue()
    {
        return $this->container['recommendedValue'];
    }

    /**
    * Sets recommendedValue
    *
    * @param int|null $recommendedValue 推荐等级。
    *
    * @return $this
    */
    public function setRecommendedValue($recommendedValue)
    {
        $this->container['recommendedValue'] = $recommendedValue;
        return $this;
    }

    /**
    * Gets isSelected
    *  是否选择此动作。
    *
    * @return bool|null
    */
    public function getIsSelected()
    {
        return $this->container['isSelected'];
    }

    /**
    * Sets isSelected
    *
    * @param bool|null $isSelected 是否选择此动作。
    *
    * @return $this
    */
    public function setIsSelected($isSelected)
    {
        $this->container['isSelected'] = $isSelected;
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

