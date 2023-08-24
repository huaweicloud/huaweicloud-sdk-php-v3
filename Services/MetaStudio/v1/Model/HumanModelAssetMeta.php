<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HumanModelAssetMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HumanModelAssetMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * styleId  数字人模型风格ID。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    * modelingType  数字人模型建模类型。 * UPLOADED：租户上传的模型 * PICTURE_MODELING：照片建模生成的模型 * CHARACTER_CUSTOMIZATION_MODELING：捏脸生成的模型
    * modelingJobId  建模任务ID。
    * modelProperties  modelProperties
    * components  可替换组件列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'styleId' => 'string',
            'modelingType' => 'string',
            'modelingJobId' => 'string',
            'modelProperties' => '\HuaweiCloud\SDK\MetaStudio\v1\Model\HumanModelMetaProperties',
            'components' => '\HuaweiCloud\SDK\MetaStudio\v1\Model\ComponentInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * styleId  数字人模型风格ID。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    * modelingType  数字人模型建模类型。 * UPLOADED：租户上传的模型 * PICTURE_MODELING：照片建模生成的模型 * CHARACTER_CUSTOMIZATION_MODELING：捏脸生成的模型
    * modelingJobId  建模任务ID。
    * modelProperties  modelProperties
    * components  可替换组件列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'styleId' => null,
        'modelingType' => null,
        'modelingJobId' => null,
        'modelProperties' => null,
        'components' => null
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
    * styleId  数字人模型风格ID。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    * modelingType  数字人模型建模类型。 * UPLOADED：租户上传的模型 * PICTURE_MODELING：照片建模生成的模型 * CHARACTER_CUSTOMIZATION_MODELING：捏脸生成的模型
    * modelingJobId  建模任务ID。
    * modelProperties  modelProperties
    * components  可替换组件列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'styleId' => 'style_id',
            'modelingType' => 'modeling_type',
            'modelingJobId' => 'modeling_job_id',
            'modelProperties' => 'model_properties',
            'components' => 'components'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * styleId  数字人模型风格ID。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    * modelingType  数字人模型建模类型。 * UPLOADED：租户上传的模型 * PICTURE_MODELING：照片建模生成的模型 * CHARACTER_CUSTOMIZATION_MODELING：捏脸生成的模型
    * modelingJobId  建模任务ID。
    * modelProperties  modelProperties
    * components  可替换组件列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'styleId' => 'setStyleId',
            'modelingType' => 'setModelingType',
            'modelingJobId' => 'setModelingJobId',
            'modelProperties' => 'setModelProperties',
            'components' => 'setComponents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * styleId  数字人模型风格ID。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    * modelingType  数字人模型建模类型。 * UPLOADED：租户上传的模型 * PICTURE_MODELING：照片建模生成的模型 * CHARACTER_CUSTOMIZATION_MODELING：捏脸生成的模型
    * modelingJobId  建模任务ID。
    * modelProperties  modelProperties
    * components  可替换组件列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'styleId' => 'getStyleId',
            'modelingType' => 'getModelingType',
            'modelingJobId' => 'getModelingJobId',
            'modelProperties' => 'getModelProperties',
            'components' => 'getComponents'
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
    const MODELING_TYPE_UPLOADED = 'UPLOADED';
    const MODELING_TYPE_PICTURE_MODELING = 'PICTURE_MODELING';
    const MODELING_TYPE_CHARACTER_CUSTOMIZATION_MODELING = 'CHARACTER_CUSTOMIZATION_MODELING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModelingTypeAllowableValues()
    {
        return [
            self::MODELING_TYPE_UPLOADED,
            self::MODELING_TYPE_PICTURE_MODELING,
            self::MODELING_TYPE_CHARACTER_CUSTOMIZATION_MODELING,
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
        $this->container['styleId'] = isset($data['styleId']) ? $data['styleId'] : null;
        $this->container['modelingType'] = isset($data['modelingType']) ? $data['modelingType'] : null;
        $this->container['modelingJobId'] = isset($data['modelingJobId']) ? $data['modelingJobId'] : null;
        $this->container['modelProperties'] = isset($data['modelProperties']) ? $data['modelProperties'] : null;
        $this->container['components'] = isset($data['components']) ? $data['components'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['styleId']) && (mb_strlen($this->container['styleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['styleId']) && (mb_strlen($this->container['styleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'styleId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getModelingTypeAllowableValues();
                if (!is_null($this->container['modelingType']) && !in_array($this->container['modelingType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'modelingType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['modelingType']) && (mb_strlen($this->container['modelingType']) > 64)) {
                $invalidProperties[] = "invalid value for 'modelingType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modelingType']) && (mb_strlen($this->container['modelingType']) < 1)) {
                $invalidProperties[] = "invalid value for 'modelingType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['modelingJobId']) && (mb_strlen($this->container['modelingJobId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modelingJobId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modelingJobId']) && (mb_strlen($this->container['modelingJobId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelingJobId', the character length must be bigger than or equal to 0.";
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
    * Gets styleId
    *  数字人模型风格ID。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    *
    * @return string|null
    */
    public function getStyleId()
    {
        return $this->container['styleId'];
    }

    /**
    * Sets styleId
    *
    * @param string|null $styleId 数字人模型风格ID。 * system_male_001：男性风格01 * system_female_001：女性风格01 * system_male_002：男性风格02  * system_female_002：女性风格02
    *
    * @return $this
    */
    public function setStyleId($styleId)
    {
        $this->container['styleId'] = $styleId;
        return $this;
    }

    /**
    * Gets modelingType
    *  数字人模型建模类型。 * UPLOADED：租户上传的模型 * PICTURE_MODELING：照片建模生成的模型 * CHARACTER_CUSTOMIZATION_MODELING：捏脸生成的模型
    *
    * @return string|null
    */
    public function getModelingType()
    {
        return $this->container['modelingType'];
    }

    /**
    * Sets modelingType
    *
    * @param string|null $modelingType 数字人模型建模类型。 * UPLOADED：租户上传的模型 * PICTURE_MODELING：照片建模生成的模型 * CHARACTER_CUSTOMIZATION_MODELING：捏脸生成的模型
    *
    * @return $this
    */
    public function setModelingType($modelingType)
    {
        $this->container['modelingType'] = $modelingType;
        return $this;
    }

    /**
    * Gets modelingJobId
    *  建模任务ID。
    *
    * @return string|null
    */
    public function getModelingJobId()
    {
        return $this->container['modelingJobId'];
    }

    /**
    * Sets modelingJobId
    *
    * @param string|null $modelingJobId 建模任务ID。
    *
    * @return $this
    */
    public function setModelingJobId($modelingJobId)
    {
        $this->container['modelingJobId'] = $modelingJobId;
        return $this;
    }

    /**
    * Gets modelProperties
    *  modelProperties
    *
    * @return \HuaweiCloud\SDK\MetaStudio\v1\Model\HumanModelMetaProperties|null
    */
    public function getModelProperties()
    {
        return $this->container['modelProperties'];
    }

    /**
    * Sets modelProperties
    *
    * @param \HuaweiCloud\SDK\MetaStudio\v1\Model\HumanModelMetaProperties|null $modelProperties modelProperties
    *
    * @return $this
    */
    public function setModelProperties($modelProperties)
    {
        $this->container['modelProperties'] = $modelProperties;
        return $this;
    }

    /**
    * Gets components
    *  可替换组件列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\v1\Model\ComponentInfo[]|null
    */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
    * Sets components
    *
    * @param \HuaweiCloud\SDK\MetaStudio\v1\Model\ComponentInfo[]|null $components 可替换组件列表。
    *
    * @return $this
    */
    public function setComponents($components)
    {
        $this->container['components'] = $components;
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

