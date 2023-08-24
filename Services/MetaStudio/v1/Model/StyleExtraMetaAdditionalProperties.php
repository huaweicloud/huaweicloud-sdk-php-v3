<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StyleExtraMetaAdditionalProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StyleExtraMeta_additionalProperties';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * icon  图标url
    * label  展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    * useAlgFile  是否使用算法输出文件，针对生成算法
    * algorithmClassifyTag  所属算法标签属性值，针对分类算法
    * modelBodyStyle  当前使用的身体骨骼
    * mcAsset  mcAsset
    * ueAsset  ueAsset
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'icon' => 'string',
            'label' => 'map[string,string]',
            'useAlgFile' => 'bool',
            'algorithmClassifyTag' => 'map[string,string]',
            'modelBodyStyle' => 'string',
            'mcAsset' => '\HuaweiCloud\SDK\MetaStudio\v1\Model\EngineAssetInfo',
            'ueAsset' => '\HuaweiCloud\SDK\MetaStudio\v1\Model\EngineAssetInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * icon  图标url
    * label  展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    * useAlgFile  是否使用算法输出文件，针对生成算法
    * algorithmClassifyTag  所属算法标签属性值，针对分类算法
    * modelBodyStyle  当前使用的身体骨骼
    * mcAsset  mcAsset
    * ueAsset  ueAsset
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'icon' => null,
        'label' => null,
        'useAlgFile' => null,
        'algorithmClassifyTag' => null,
        'modelBodyStyle' => null,
        'mcAsset' => null,
        'ueAsset' => null
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
    * icon  图标url
    * label  展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    * useAlgFile  是否使用算法输出文件，针对生成算法
    * algorithmClassifyTag  所属算法标签属性值，针对分类算法
    * modelBodyStyle  当前使用的身体骨骼
    * mcAsset  mcAsset
    * ueAsset  ueAsset
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'icon' => 'icon',
            'label' => 'label',
            'useAlgFile' => 'use_alg_file',
            'algorithmClassifyTag' => 'algorithm_classify_tag',
            'modelBodyStyle' => 'model_body_style',
            'mcAsset' => 'mc_asset',
            'ueAsset' => 'ue_asset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * icon  图标url
    * label  展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    * useAlgFile  是否使用算法输出文件，针对生成算法
    * algorithmClassifyTag  所属算法标签属性值，针对分类算法
    * modelBodyStyle  当前使用的身体骨骼
    * mcAsset  mcAsset
    * ueAsset  ueAsset
    *
    * @var string[]
    */
    protected static $setters = [
            'icon' => 'setIcon',
            'label' => 'setLabel',
            'useAlgFile' => 'setUseAlgFile',
            'algorithmClassifyTag' => 'setAlgorithmClassifyTag',
            'modelBodyStyle' => 'setModelBodyStyle',
            'mcAsset' => 'setMcAsset',
            'ueAsset' => 'setUeAsset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * icon  图标url
    * label  展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    * useAlgFile  是否使用算法输出文件，针对生成算法
    * algorithmClassifyTag  所属算法标签属性值，针对分类算法
    * modelBodyStyle  当前使用的身体骨骼
    * mcAsset  mcAsset
    * ueAsset  ueAsset
    *
    * @var string[]
    */
    protected static $getters = [
            'icon' => 'getIcon',
            'label' => 'getLabel',
            'useAlgFile' => 'getUseAlgFile',
            'algorithmClassifyTag' => 'getAlgorithmClassifyTag',
            'modelBodyStyle' => 'getModelBodyStyle',
            'mcAsset' => 'getMcAsset',
            'ueAsset' => 'getUeAsset'
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
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['useAlgFile'] = isset($data['useAlgFile']) ? $data['useAlgFile'] : null;
        $this->container['algorithmClassifyTag'] = isset($data['algorithmClassifyTag']) ? $data['algorithmClassifyTag'] : null;
        $this->container['modelBodyStyle'] = isset($data['modelBodyStyle']) ? $data['modelBodyStyle'] : null;
        $this->container['mcAsset'] = isset($data['mcAsset']) ? $data['mcAsset'] : null;
        $this->container['ueAsset'] = isset($data['ueAsset']) ? $data['ueAsset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['icon']) && (mb_strlen($this->container['icon']) > 2048)) {
                $invalidProperties[] = "invalid value for 'icon', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['icon']) && (mb_strlen($this->container['icon']) < 0)) {
                $invalidProperties[] = "invalid value for 'icon', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['modelBodyStyle']) && (mb_strlen($this->container['modelBodyStyle']) > 256)) {
                $invalidProperties[] = "invalid value for 'modelBodyStyle', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['modelBodyStyle']) && (mb_strlen($this->container['modelBodyStyle']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelBodyStyle', the character length must be bigger than or equal to 0.";
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
    * Gets icon
    *  图标url
    *
    * @return string|null
    */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
    * Sets icon
    *
    * @param string|null $icon 图标url
    *
    * @return $this
    */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;
        return $this;
    }

    /**
    * Gets label
    *  展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    *
    * @return map[string,string]|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param map[string,string]|null $label 展示标签 {\"cn\": \"xxxxx\",\"en\":\"xxxxx\"}
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets useAlgFile
    *  是否使用算法输出文件，针对生成算法
    *
    * @return bool|null
    */
    public function getUseAlgFile()
    {
        return $this->container['useAlgFile'];
    }

    /**
    * Sets useAlgFile
    *
    * @param bool|null $useAlgFile 是否使用算法输出文件，针对生成算法
    *
    * @return $this
    */
    public function setUseAlgFile($useAlgFile)
    {
        $this->container['useAlgFile'] = $useAlgFile;
        return $this;
    }

    /**
    * Gets algorithmClassifyTag
    *  所属算法标签属性值，针对分类算法
    *
    * @return map[string,string]|null
    */
    public function getAlgorithmClassifyTag()
    {
        return $this->container['algorithmClassifyTag'];
    }

    /**
    * Sets algorithmClassifyTag
    *
    * @param map[string,string]|null $algorithmClassifyTag 所属算法标签属性值，针对分类算法
    *
    * @return $this
    */
    public function setAlgorithmClassifyTag($algorithmClassifyTag)
    {
        $this->container['algorithmClassifyTag'] = $algorithmClassifyTag;
        return $this;
    }

    /**
    * Gets modelBodyStyle
    *  当前使用的身体骨骼
    *
    * @return string|null
    */
    public function getModelBodyStyle()
    {
        return $this->container['modelBodyStyle'];
    }

    /**
    * Sets modelBodyStyle
    *
    * @param string|null $modelBodyStyle 当前使用的身体骨骼
    *
    * @return $this
    */
    public function setModelBodyStyle($modelBodyStyle)
    {
        $this->container['modelBodyStyle'] = $modelBodyStyle;
        return $this;
    }

    /**
    * Gets mcAsset
    *  mcAsset
    *
    * @return \HuaweiCloud\SDK\MetaStudio\v1\Model\EngineAssetInfo|null
    */
    public function getMcAsset()
    {
        return $this->container['mcAsset'];
    }

    /**
    * Sets mcAsset
    *
    * @param \HuaweiCloud\SDK\MetaStudio\v1\Model\EngineAssetInfo|null $mcAsset mcAsset
    *
    * @return $this
    */
    public function setMcAsset($mcAsset)
    {
        $this->container['mcAsset'] = $mcAsset;
        return $this;
    }

    /**
    * Gets ueAsset
    *  ueAsset
    *
    * @return \HuaweiCloud\SDK\MetaStudio\v1\Model\EngineAssetInfo|null
    */
    public function getUeAsset()
    {
        return $this->container['ueAsset'];
    }

    /**
    * Sets ueAsset
    *
    * @param \HuaweiCloud\SDK\MetaStudio\v1\Model\EngineAssetInfo|null $ueAsset ueAsset
    *
    * @return $this
    */
    public function setUeAsset($ueAsset)
    {
        $this->container['ueAsset'] = $ueAsset;
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

