<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StyleExtraMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StyleExtraMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pictureModelingEnable  是否支持照片建模
    * editEnable  是否支持模型编辑
    * editEngine  编辑使用引擎
    * modelId  照片建模算法调用的模型类型
    * editValueItems  值可设置条目列表
    * editColorItems  颜色可设置条目列表
    * editComponents  可替换组件列表
    * modellingAlgorithm  分类算法列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pictureModelingEnable' => 'bool',
            'editEnable' => 'bool',
            'editEngine' => 'string',
            'modelId' => 'string',
            'editValueItems' => 'map[string,\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMetaEditValueItems]',
            'editColorItems' => 'map[string,\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMetaEditColorItems]',
            'editComponents' => 'map[string,\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMetaEditComponents]',
            'modellingAlgorithm' => 'map[string,\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMetaModellingAlgorithm]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pictureModelingEnable  是否支持照片建模
    * editEnable  是否支持模型编辑
    * editEngine  编辑使用引擎
    * modelId  照片建模算法调用的模型类型
    * editValueItems  值可设置条目列表
    * editColorItems  颜色可设置条目列表
    * editComponents  可替换组件列表
    * modellingAlgorithm  分类算法列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pictureModelingEnable' => null,
        'editEnable' => null,
        'editEngine' => null,
        'modelId' => null,
        'editValueItems' => null,
        'editColorItems' => null,
        'editComponents' => null,
        'modellingAlgorithm' => null
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
    * pictureModelingEnable  是否支持照片建模
    * editEnable  是否支持模型编辑
    * editEngine  编辑使用引擎
    * modelId  照片建模算法调用的模型类型
    * editValueItems  值可设置条目列表
    * editColorItems  颜色可设置条目列表
    * editComponents  可替换组件列表
    * modellingAlgorithm  分类算法列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pictureModelingEnable' => 'picture_modeling_enable',
            'editEnable' => 'edit_enable',
            'editEngine' => 'edit_engine',
            'modelId' => 'model_id',
            'editValueItems' => 'edit_value_items',
            'editColorItems' => 'edit_color_items',
            'editComponents' => 'edit_components',
            'modellingAlgorithm' => 'modelling_algorithm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pictureModelingEnable  是否支持照片建模
    * editEnable  是否支持模型编辑
    * editEngine  编辑使用引擎
    * modelId  照片建模算法调用的模型类型
    * editValueItems  值可设置条目列表
    * editColorItems  颜色可设置条目列表
    * editComponents  可替换组件列表
    * modellingAlgorithm  分类算法列表
    *
    * @var string[]
    */
    protected static $setters = [
            'pictureModelingEnable' => 'setPictureModelingEnable',
            'editEnable' => 'setEditEnable',
            'editEngine' => 'setEditEngine',
            'modelId' => 'setModelId',
            'editValueItems' => 'setEditValueItems',
            'editColorItems' => 'setEditColorItems',
            'editComponents' => 'setEditComponents',
            'modellingAlgorithm' => 'setModellingAlgorithm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pictureModelingEnable  是否支持照片建模
    * editEnable  是否支持模型编辑
    * editEngine  编辑使用引擎
    * modelId  照片建模算法调用的模型类型
    * editValueItems  值可设置条目列表
    * editColorItems  颜色可设置条目列表
    * editComponents  可替换组件列表
    * modellingAlgorithm  分类算法列表
    *
    * @var string[]
    */
    protected static $getters = [
            'pictureModelingEnable' => 'getPictureModelingEnable',
            'editEnable' => 'getEditEnable',
            'editEngine' => 'getEditEngine',
            'modelId' => 'getModelId',
            'editValueItems' => 'getEditValueItems',
            'editColorItems' => 'getEditColorItems',
            'editComponents' => 'getEditComponents',
            'modellingAlgorithm' => 'getModellingAlgorithm'
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
        $this->container['pictureModelingEnable'] = isset($data['pictureModelingEnable']) ? $data['pictureModelingEnable'] : null;
        $this->container['editEnable'] = isset($data['editEnable']) ? $data['editEnable'] : null;
        $this->container['editEngine'] = isset($data['editEngine']) ? $data['editEngine'] : null;
        $this->container['modelId'] = isset($data['modelId']) ? $data['modelId'] : null;
        $this->container['editValueItems'] = isset($data['editValueItems']) ? $data['editValueItems'] : null;
        $this->container['editColorItems'] = isset($data['editColorItems']) ? $data['editColorItems'] : null;
        $this->container['editComponents'] = isset($data['editComponents']) ? $data['editComponents'] : null;
        $this->container['modellingAlgorithm'] = isset($data['modellingAlgorithm']) ? $data['modellingAlgorithm'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['editEngine']) && (mb_strlen($this->container['editEngine']) > 128)) {
                $invalidProperties[] = "invalid value for 'editEngine', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['editEngine']) && (mb_strlen($this->container['editEngine']) < 1)) {
                $invalidProperties[] = "invalid value for 'editEngine', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['modelId']) && (mb_strlen($this->container['modelId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modelId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modelId']) && (mb_strlen($this->container['modelId']) < 1)) {
                $invalidProperties[] = "invalid value for 'modelId', the character length must be bigger than or equal to 1.";
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
    * Gets pictureModelingEnable
    *  是否支持照片建模
    *
    * @return bool|null
    */
    public function getPictureModelingEnable()
    {
        return $this->container['pictureModelingEnable'];
    }

    /**
    * Sets pictureModelingEnable
    *
    * @param bool|null $pictureModelingEnable 是否支持照片建模
    *
    * @return $this
    */
    public function setPictureModelingEnable($pictureModelingEnable)
    {
        $this->container['pictureModelingEnable'] = $pictureModelingEnable;
        return $this;
    }

    /**
    * Gets editEnable
    *  是否支持模型编辑
    *
    * @return bool|null
    */
    public function getEditEnable()
    {
        return $this->container['editEnable'];
    }

    /**
    * Sets editEnable
    *
    * @param bool|null $editEnable 是否支持模型编辑
    *
    * @return $this
    */
    public function setEditEnable($editEnable)
    {
        $this->container['editEnable'] = $editEnable;
        return $this;
    }

    /**
    * Gets editEngine
    *  编辑使用引擎
    *
    * @return string|null
    */
    public function getEditEngine()
    {
        return $this->container['editEngine'];
    }

    /**
    * Sets editEngine
    *
    * @param string|null $editEngine 编辑使用引擎
    *
    * @return $this
    */
    public function setEditEngine($editEngine)
    {
        $this->container['editEngine'] = $editEngine;
        return $this;
    }

    /**
    * Gets modelId
    *  照片建模算法调用的模型类型
    *
    * @return string|null
    */
    public function getModelId()
    {
        return $this->container['modelId'];
    }

    /**
    * Sets modelId
    *
    * @param string|null $modelId 照片建模算法调用的模型类型
    *
    * @return $this
    */
    public function setModelId($modelId)
    {
        $this->container['modelId'] = $modelId;
        return $this;
    }

    /**
    * Gets editValueItems
    *  值可设置条目列表
    *
    * @return map[string,\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMetaEditValueItems]|null
    */
    public function getEditValueItems()
    {
        return $this->container['editValueItems'];
    }

    /**
    * Sets editValueItems
    *
    * @param map[string,\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMetaEditValueItems]|null $editValueItems 值可设置条目列表
    *
    * @return $this
    */
    public function setEditValueItems($editValueItems)
    {
        $this->container['editValueItems'] = $editValueItems;
        return $this;
    }

    /**
    * Gets editColorItems
    *  颜色可设置条目列表
    *
    * @return map[string,\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMetaEditColorItems]|null
    */
    public function getEditColorItems()
    {
        return $this->container['editColorItems'];
    }

    /**
    * Sets editColorItems
    *
    * @param map[string,\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMetaEditColorItems]|null $editColorItems 颜色可设置条目列表
    *
    * @return $this
    */
    public function setEditColorItems($editColorItems)
    {
        $this->container['editColorItems'] = $editColorItems;
        return $this;
    }

    /**
    * Gets editComponents
    *  可替换组件列表
    *
    * @return map[string,\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMetaEditComponents]|null
    */
    public function getEditComponents()
    {
        return $this->container['editComponents'];
    }

    /**
    * Sets editComponents
    *
    * @param map[string,\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMetaEditComponents]|null $editComponents 可替换组件列表
    *
    * @return $this
    */
    public function setEditComponents($editComponents)
    {
        $this->container['editComponents'] = $editComponents;
        return $this;
    }

    /**
    * Gets modellingAlgorithm
    *  分类算法列表
    *
    * @return map[string,\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMetaModellingAlgorithm]|null
    */
    public function getModellingAlgorithm()
    {
        return $this->container['modellingAlgorithm'];
    }

    /**
    * Sets modellingAlgorithm
    *
    * @param map[string,\HuaweiCloud\SDK\MetaStudio\V1\Model\StyleExtraMetaModellingAlgorithm]|null $modellingAlgorithm 分类算法列表
    *
    * @return $this
    */
    public function setModellingAlgorithm($modellingAlgorithm)
    {
        $this->container['modellingAlgorithm'] = $modellingAlgorithm;
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

