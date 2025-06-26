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
    * isActionEditable  **参数解释**： 分身数字人的动作是否可编辑 **约束限制**： 不涉及 **取值范围**： * true: 动作可编辑 * false: 动作不可编辑
    * isRealBackground  **参数解释**： 是否是实景分身数字人 **约束限制**： 实景分身数字人不做背景替换。 **取值范围**： * true: 实景分身数字人 * false: 普通分身数字人，不带背景。
    * supportLive  **参数解释**： 是否支持直播 **约束限制**： 不涉及 **取值范围**： * true: 支持直播 * false: 不支持直播。
    * modelVersion  **参数解释**： 分身数字人模型版本 **约束限制**： 不涉及 **取值范围**： * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型 * V3_3：V3.3版本模型
    * modelResolution  **参数解释**： 分身数字人模型分辨率。 **约束限制**： 不涉及 **取值范围**： * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * deviceNames  **参数解释**： 已执行编译任务设备类型列表。 **约束限制**： 支持走动的数字人，当前仅用于视频制作，不能用于直播和智能交互 **取值范围**： 设备名称列表最多16个。 设备名称字符长度1-64位。 **默认取值**： false
    * isWithActionLibrary  分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    * actionTagMap  动作标签映射。
    * isFlexus  是否是Flexus版本分身数字人。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isActionEditable' => 'bool',
            'isRealBackground' => 'bool',
            'supportLive' => 'bool',
            'modelVersion' => 'string',
            'modelResolution' => 'string',
            'deviceNames' => 'string[]',
            'isWithActionLibrary' => 'bool',
            'actionTagMap' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ActionTagInfo[]',
            'isFlexus' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isActionEditable  **参数解释**： 分身数字人的动作是否可编辑 **约束限制**： 不涉及 **取值范围**： * true: 动作可编辑 * false: 动作不可编辑
    * isRealBackground  **参数解释**： 是否是实景分身数字人 **约束限制**： 实景分身数字人不做背景替换。 **取值范围**： * true: 实景分身数字人 * false: 普通分身数字人，不带背景。
    * supportLive  **参数解释**： 是否支持直播 **约束限制**： 不涉及 **取值范围**： * true: 支持直播 * false: 不支持直播。
    * modelVersion  **参数解释**： 分身数字人模型版本 **约束限制**： 不涉及 **取值范围**： * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型 * V3_3：V3.3版本模型
    * modelResolution  **参数解释**： 分身数字人模型分辨率。 **约束限制**： 不涉及 **取值范围**： * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * deviceNames  **参数解释**： 已执行编译任务设备类型列表。 **约束限制**： 支持走动的数字人，当前仅用于视频制作，不能用于直播和智能交互 **取值范围**： 设备名称列表最多16个。 设备名称字符长度1-64位。 **默认取值**： false
    * isWithActionLibrary  分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    * actionTagMap  动作标签映射。
    * isFlexus  是否是Flexus版本分身数字人。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isActionEditable' => null,
        'isRealBackground' => null,
        'supportLive' => null,
        'modelVersion' => null,
        'modelResolution' => null,
        'deviceNames' => null,
        'isWithActionLibrary' => null,
        'actionTagMap' => null,
        'isFlexus' => null
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
    * isActionEditable  **参数解释**： 分身数字人的动作是否可编辑 **约束限制**： 不涉及 **取值范围**： * true: 动作可编辑 * false: 动作不可编辑
    * isRealBackground  **参数解释**： 是否是实景分身数字人 **约束限制**： 实景分身数字人不做背景替换。 **取值范围**： * true: 实景分身数字人 * false: 普通分身数字人，不带背景。
    * supportLive  **参数解释**： 是否支持直播 **约束限制**： 不涉及 **取值范围**： * true: 支持直播 * false: 不支持直播。
    * modelVersion  **参数解释**： 分身数字人模型版本 **约束限制**： 不涉及 **取值范围**： * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型 * V3_3：V3.3版本模型
    * modelResolution  **参数解释**： 分身数字人模型分辨率。 **约束限制**： 不涉及 **取值范围**： * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * deviceNames  **参数解释**： 已执行编译任务设备类型列表。 **约束限制**： 支持走动的数字人，当前仅用于视频制作，不能用于直播和智能交互 **取值范围**： 设备名称列表最多16个。 设备名称字符长度1-64位。 **默认取值**： false
    * isWithActionLibrary  分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    * actionTagMap  动作标签映射。
    * isFlexus  是否是Flexus版本分身数字人。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isActionEditable' => 'is_action_editable',
            'isRealBackground' => 'is_real_background',
            'supportLive' => 'support_live',
            'modelVersion' => 'model_version',
            'modelResolution' => 'model_resolution',
            'deviceNames' => 'device_names',
            'isWithActionLibrary' => 'is_with_action_library',
            'actionTagMap' => 'action_tag_map',
            'isFlexus' => 'is_flexus'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isActionEditable  **参数解释**： 分身数字人的动作是否可编辑 **约束限制**： 不涉及 **取值范围**： * true: 动作可编辑 * false: 动作不可编辑
    * isRealBackground  **参数解释**： 是否是实景分身数字人 **约束限制**： 实景分身数字人不做背景替换。 **取值范围**： * true: 实景分身数字人 * false: 普通分身数字人，不带背景。
    * supportLive  **参数解释**： 是否支持直播 **约束限制**： 不涉及 **取值范围**： * true: 支持直播 * false: 不支持直播。
    * modelVersion  **参数解释**： 分身数字人模型版本 **约束限制**： 不涉及 **取值范围**： * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型 * V3_3：V3.3版本模型
    * modelResolution  **参数解释**： 分身数字人模型分辨率。 **约束限制**： 不涉及 **取值范围**： * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * deviceNames  **参数解释**： 已执行编译任务设备类型列表。 **约束限制**： 支持走动的数字人，当前仅用于视频制作，不能用于直播和智能交互 **取值范围**： 设备名称列表最多16个。 设备名称字符长度1-64位。 **默认取值**： false
    * isWithActionLibrary  分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    * actionTagMap  动作标签映射。
    * isFlexus  是否是Flexus版本分身数字人。
    *
    * @var string[]
    */
    protected static $setters = [
            'isActionEditable' => 'setIsActionEditable',
            'isRealBackground' => 'setIsRealBackground',
            'supportLive' => 'setSupportLive',
            'modelVersion' => 'setModelVersion',
            'modelResolution' => 'setModelResolution',
            'deviceNames' => 'setDeviceNames',
            'isWithActionLibrary' => 'setIsWithActionLibrary',
            'actionTagMap' => 'setActionTagMap',
            'isFlexus' => 'setIsFlexus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isActionEditable  **参数解释**： 分身数字人的动作是否可编辑 **约束限制**： 不涉及 **取值范围**： * true: 动作可编辑 * false: 动作不可编辑
    * isRealBackground  **参数解释**： 是否是实景分身数字人 **约束限制**： 实景分身数字人不做背景替换。 **取值范围**： * true: 实景分身数字人 * false: 普通分身数字人，不带背景。
    * supportLive  **参数解释**： 是否支持直播 **约束限制**： 不涉及 **取值范围**： * true: 支持直播 * false: 不支持直播。
    * modelVersion  **参数解释**： 分身数字人模型版本 **约束限制**： 不涉及 **取值范围**： * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型 * V3_3：V3.3版本模型
    * modelResolution  **参数解释**： 分身数字人模型分辨率。 **约束限制**： 不涉及 **取值范围**： * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    * deviceNames  **参数解释**： 已执行编译任务设备类型列表。 **约束限制**： 支持走动的数字人，当前仅用于视频制作，不能用于直播和智能交互 **取值范围**： 设备名称列表最多16个。 设备名称字符长度1-64位。 **默认取值**： false
    * isWithActionLibrary  分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    * actionTagMap  动作标签映射。
    * isFlexus  是否是Flexus版本分身数字人。
    *
    * @var string[]
    */
    protected static $getters = [
            'isActionEditable' => 'getIsActionEditable',
            'isRealBackground' => 'getIsRealBackground',
            'supportLive' => 'getSupportLive',
            'modelVersion' => 'getModelVersion',
            'modelResolution' => 'getModelResolution',
            'deviceNames' => 'getDeviceNames',
            'isWithActionLibrary' => 'getIsWithActionLibrary',
            'actionTagMap' => 'getActionTagMap',
            'isFlexus' => 'getIsFlexus'
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
    const MODEL_VERSION_V3_3 = 'V3_3';
    

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
            self::MODEL_VERSION_V3_3,
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
        $this->container['deviceNames'] = isset($data['deviceNames']) ? $data['deviceNames'] : null;
        $this->container['isWithActionLibrary'] = isset($data['isWithActionLibrary']) ? $data['isWithActionLibrary'] : null;
        $this->container['actionTagMap'] = isset($data['actionTagMap']) ? $data['actionTagMap'] : null;
        $this->container['isFlexus'] = isset($data['isFlexus']) ? $data['isFlexus'] : null;
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

            if (!is_null($this->container['modelVersion']) && (mb_strlen($this->container['modelVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'modelVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modelVersion']) && (mb_strlen($this->container['modelVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelVersion', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**： 分身数字人的动作是否可编辑 **约束限制**： 不涉及 **取值范围**： * true: 动作可编辑 * false: 动作不可编辑
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
    * @param bool|null $isActionEditable **参数解释**： 分身数字人的动作是否可编辑 **约束限制**： 不涉及 **取值范围**： * true: 动作可编辑 * false: 动作不可编辑
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
    *  **参数解释**： 是否是实景分身数字人 **约束限制**： 实景分身数字人不做背景替换。 **取值范围**： * true: 实景分身数字人 * false: 普通分身数字人，不带背景。
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
    * @param bool|null $isRealBackground **参数解释**： 是否是实景分身数字人 **约束限制**： 实景分身数字人不做背景替换。 **取值范围**： * true: 实景分身数字人 * false: 普通分身数字人，不带背景。
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
    *  **参数解释**： 是否支持直播 **约束限制**： 不涉及 **取值范围**： * true: 支持直播 * false: 不支持直播。
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
    * @param bool|null $supportLive **参数解释**： 是否支持直播 **约束限制**： 不涉及 **取值范围**： * true: 支持直播 * false: 不支持直播。
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
    *  **参数解释**： 分身数字人模型版本 **约束限制**： 不涉及 **取值范围**： * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型 * V3_3：V3.3版本模型
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
    * @param string|null $modelVersion **参数解释**： 分身数字人模型版本 **约束限制**： 不涉及 **取值范围**： * V2: V2版本模型 * V3：V3版本模型 * V3_2：V3.2版本模型 * V3_3：V3.3版本模型
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
    *  **参数解释**： 分身数字人模型分辨率。 **约束限制**： 不涉及 **取值范围**： * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
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
    * @param string|null $modelResolution **参数解释**： 分身数字人模型分辨率。 **约束限制**： 不涉及 **取值范围**： * 1080P：1080P。支持1080P及720P的视频输出。 * 4K：4K。支持4K、1080P及720P的视频输出。
    *
    * @return $this
    */
    public function setModelResolution($modelResolution)
    {
        $this->container['modelResolution'] = $modelResolution;
        return $this;
    }

    /**
    * Gets deviceNames
    *  **参数解释**： 已执行编译任务设备类型列表。 **约束限制**： 支持走动的数字人，当前仅用于视频制作，不能用于直播和智能交互 **取值范围**： 设备名称列表最多16个。 设备名称字符长度1-64位。 **默认取值**： false
    *
    * @return string[]|null
    */
    public function getDeviceNames()
    {
        return $this->container['deviceNames'];
    }

    /**
    * Sets deviceNames
    *
    * @param string[]|null $deviceNames **参数解释**： 已执行编译任务设备类型列表。 **约束限制**： 支持走动的数字人，当前仅用于视频制作，不能用于直播和智能交互 **取值范围**： 设备名称列表最多16个。 设备名称字符长度1-64位。 **默认取值**： false
    *
    * @return $this
    */
    public function setDeviceNames($deviceNames)
    {
        $this->container['deviceNames'] = $deviceNames;
        return $this;
    }

    /**
    * Gets isWithActionLibrary
    *  分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    *
    * @return bool|null
    */
    public function getIsWithActionLibrary()
    {
        return $this->container['isWithActionLibrary'];
    }

    /**
    * Sets isWithActionLibrary
    *
    * @param bool|null $isWithActionLibrary 分身数字人是否带原子动作库。 > * 带原子动作库的分身数字人可做动作编排。
    *
    * @return $this
    */
    public function setIsWithActionLibrary($isWithActionLibrary)
    {
        $this->container['isWithActionLibrary'] = $isWithActionLibrary;
        return $this;
    }

    /**
    * Gets actionTagMap
    *  动作标签映射。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ActionTagInfo[]|null
    */
    public function getActionTagMap()
    {
        return $this->container['actionTagMap'];
    }

    /**
    * Sets actionTagMap
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ActionTagInfo[]|null $actionTagMap 动作标签映射。
    *
    * @return $this
    */
    public function setActionTagMap($actionTagMap)
    {
        $this->container['actionTagMap'] = $actionTagMap;
        return $this;
    }

    /**
    * Gets isFlexus
    *  是否是Flexus版本分身数字人。
    *
    * @return bool|null
    */
    public function getIsFlexus()
    {
        return $this->container['isFlexus'];
    }

    /**
    * Sets isFlexus
    *
    * @param bool|null $isFlexus 是否是Flexus版本分身数字人。
    *
    * @return $this
    */
    public function setIsFlexus($isFlexus)
    {
        $this->container['isFlexus'] = $isFlexus;
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

