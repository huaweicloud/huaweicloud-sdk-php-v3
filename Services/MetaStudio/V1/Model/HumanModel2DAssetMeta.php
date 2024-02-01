<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HumanModel2DAssetMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HumanModel2DAssetMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isActionEditable  分身数字人的动作是否可编辑。默认不可编辑。
    * isRealBackground  是否是实景分身数字人。实景分身数字人不做背景替换。
    * supportLive  是否支持直播
    * modelVersion  分身数字人模型版本。默认是V2版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isActionEditable' => 'bool',
            'isRealBackground' => 'bool',
            'supportLive' => 'bool',
            'modelVersion' => 'string',
            'modelResolution' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isActionEditable  分身数字人的动作是否可编辑。默认不可编辑。
    * isRealBackground  是否是实景分身数字人。实景分身数字人不做背景替换。
    * supportLive  是否支持直播
    * modelVersion  分身数字人模型版本。默认是V2版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isActionEditable' => null,
        'isRealBackground' => null,
        'supportLive' => null,
        'modelVersion' => null,
        'modelResolution' => null
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
    * isActionEditable  分身数字人的动作是否可编辑。默认不可编辑。
    * isRealBackground  是否是实景分身数字人。实景分身数字人不做背景替换。
    * supportLive  是否支持直播
    * modelVersion  分身数字人模型版本。默认是V2版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isActionEditable' => 'is_action_editable',
            'isRealBackground' => 'is_real_background',
            'supportLive' => 'support_live',
            'modelVersion' => 'model_version',
            'modelResolution' => 'model_resolution'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isActionEditable  分身数字人的动作是否可编辑。默认不可编辑。
    * isRealBackground  是否是实景分身数字人。实景分身数字人不做背景替换。
    * supportLive  是否支持直播
    * modelVersion  分身数字人模型版本。默认是V2版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    *
    * @var string[]
    */
    protected static $setters = [
            'isActionEditable' => 'setIsActionEditable',
            'isRealBackground' => 'setIsRealBackground',
            'supportLive' => 'setSupportLive',
            'modelVersion' => 'setModelVersion',
            'modelResolution' => 'setModelResolution'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isActionEditable  分身数字人的动作是否可编辑。默认不可编辑。
    * isRealBackground  是否是实景分身数字人。实景分身数字人不做背景替换。
    * supportLive  是否支持直播
    * modelVersion  分身数字人模型版本。默认是V2版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型
    * modelResolution  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    *
    * @var string[]
    */
    protected static $getters = [
            'isActionEditable' => 'getIsActionEditable',
            'isRealBackground' => 'getIsRealBackground',
            'supportLive' => 'getSupportLive',
            'modelVersion' => 'getModelVersion',
            'modelResolution' => 'getModelResolution'
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
    const MODEL_VERSION_V2 = 'V2';
    const MODEL_VERSION_V3 = 'V3';
    const MODEL_VERSION_V3_2 = 'V3_2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModelVersionAllowableValues()
    {
        return [
            self::MODEL_VERSION_V2,
            self::MODEL_VERSION_V3,
            self::MODEL_VERSION_V3_2,
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
        $this->container['isActionEditable'] = isset($data['isActionEditable']) ? $data['isActionEditable'] : null;
        $this->container['isRealBackground'] = isset($data['isRealBackground']) ? $data['isRealBackground'] : null;
        $this->container['supportLive'] = isset($data['supportLive']) ? $data['supportLive'] : null;
        $this->container['modelVersion'] = isset($data['modelVersion']) ? $data['modelVersion'] : null;
        $this->container['modelResolution'] = isset($data['modelResolution']) ? $data['modelResolution'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getModelVersionAllowableValues();
                if (!is_null($this->container['modelVersion']) && !in_array($this->container['modelVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'modelVersion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['modelResolution']) && (mb_strlen($this->container['modelResolution']) > 64)) {
                $invalidProperties[] = "invalid value for 'modelResolution', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modelResolution']) && (mb_strlen($this->container['modelResolution']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelResolution', the character length must be bigger than or equal to 0.";
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
    * Gets isActionEditable
    *  分身数字人的动作是否可编辑。默认不可编辑。
    *
    * @return bool|null
    */
    public function getIsActionEditable()
    {
        return $this->container['isActionEditable'];
    }

    /**
    * Sets isActionEditable
    *
    * @param bool|null $isActionEditable 分身数字人的动作是否可编辑。默认不可编辑。
    *
    * @return $this
    */
    public function setIsActionEditable($isActionEditable)
    {
        $this->container['isActionEditable'] = $isActionEditable;
        return $this;
    }

    /**
    * Gets isRealBackground
    *  是否是实景分身数字人。实景分身数字人不做背景替换。
    *
    * @return bool|null
    */
    public function getIsRealBackground()
    {
        return $this->container['isRealBackground'];
    }

    /**
    * Sets isRealBackground
    *
    * @param bool|null $isRealBackground 是否是实景分身数字人。实景分身数字人不做背景替换。
    *
    * @return $this
    */
    public function setIsRealBackground($isRealBackground)
    {
        $this->container['isRealBackground'] = $isRealBackground;
        return $this;
    }

    /**
    * Gets supportLive
    *  是否支持直播
    *
    * @return bool|null
    */
    public function getSupportLive()
    {
        return $this->container['supportLive'];
    }

    /**
    * Sets supportLive
    *
    * @param bool|null $supportLive 是否支持直播
    *
    * @return $this
    */
    public function setSupportLive($supportLive)
    {
        $this->container['supportLive'] = $supportLive;
        return $this;
    }

    /**
    * Gets modelVersion
    *  分身数字人模型版本。默认是V2版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型
    *
    * @return string|null
    */
    public function getModelVersion()
    {
        return $this->container['modelVersion'];
    }

    /**
    * Sets modelVersion
    *
    * @param string|null $modelVersion 分身数字人模型版本。默认是V2版本模型。 * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型
    *
    * @return $this
    */
    public function setModelVersion($modelVersion)
    {
        $this->container['modelVersion'] = $modelVersion;
        return $this;
    }

    /**
    * Gets modelResolution
    *  分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    *
    * @return string|null
    */
    public function getModelResolution()
    {
        return $this->container['modelResolution'];
    }

    /**
    * Sets modelResolution
    *
    * @param string|null $modelResolution 分身数字人模型分辨率。默认是1080P。 * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    *
    * @return $this
    */
    public function setModelResolution($modelResolution)
    {
        $this->container['modelResolution'] = $modelResolution;
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

