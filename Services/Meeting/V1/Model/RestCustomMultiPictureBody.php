<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestCustomMultiPictureBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestCustomMultiPictureBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manualSet  是否为手工设置多画面。 * 0： 系统自动多画面 * 1： 手工设置多画面
    * picLayoutInfo  picLayoutInfo
    * imageType  画面类型。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Three-2: 三画面 - Three-3: 三画面 - Three-4: 三画面 - Four: 四画面 - Four-2: 四画面 - Four-3: 四画面 - Five: 五画面 - Five-2: 五画面 - Six: 六画面 - Six-2: 六画面 - Six-3: 六画面 - Six-4: 六画面 - Six-5: 六画面 - Seven: 七画面 - Seven-2: 七画面 - Seven-3: 七画面 - Seven-4: 七画面 - Eight: 八画面 - Eight-2: 八画面 - Eight-3: 八画面 - Eight-4: 八画面 - Nine: 九画面 - Ten: 十画面 - Ten-2: 十画面 - Ten-3: 十画面 - Ten-4: 十画面 - Ten-5: 十画面 - Ten-6: 十画面 - Thirteen: 十三画面 - Thirteen-2: 十三画面 - Thirteen-3: 十三画面 - Thirteen-4: 十三画面 - Thirteen-5: 十三画面 - Sixteen: 十六画面 - Seventeen: 十七画面 - Twenty-Five: 二十五画面
    * subscriberInPics  子画面列表（手工设置多画面时必填）。
    * switchTime  表示轮询间隔,取值范围：10-120，默认10。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。 > 仅针对专业会议终端生效，对软终端不生效。
    * multiPicSaveOnly  多画面是否仅保存。 * true： 仅保存 * false： 保存并应用 > * ”仅保存“效果：仅保存当前画面布局，不进行广播等操作。 > * ”保存并应用“效果：1、当会议状态为广播多画面、声控单画面、声控多画面、主持人观看多画面时，保存并应用后，改变画面布局，不改变状态。2、当会议状态为非广播多画面、声控单画面、声控多画面、主持人观看多画面时，如自动多画面、广播与会者、点名与会者时，保存并应用后，变为广播多画面。 > * 当处于广播多画面、声控多画面、声控单画面状态下，无法设置主持人观看多画面。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manualSet' => 'int',
            'picLayoutInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\PicLayoutInfo',
            'imageType' => 'string',
            'subscriberInPics' => '\HuaweiCloud\SDK\Meeting\V1\Model\RestSubscriberInPic[]',
            'switchTime' => 'int',
            'multiPicSaveOnly' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manualSet  是否为手工设置多画面。 * 0： 系统自动多画面 * 1： 手工设置多画面
    * picLayoutInfo  picLayoutInfo
    * imageType  画面类型。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Three-2: 三画面 - Three-3: 三画面 - Three-4: 三画面 - Four: 四画面 - Four-2: 四画面 - Four-3: 四画面 - Five: 五画面 - Five-2: 五画面 - Six: 六画面 - Six-2: 六画面 - Six-3: 六画面 - Six-4: 六画面 - Six-5: 六画面 - Seven: 七画面 - Seven-2: 七画面 - Seven-3: 七画面 - Seven-4: 七画面 - Eight: 八画面 - Eight-2: 八画面 - Eight-3: 八画面 - Eight-4: 八画面 - Nine: 九画面 - Ten: 十画面 - Ten-2: 十画面 - Ten-3: 十画面 - Ten-4: 十画面 - Ten-5: 十画面 - Ten-6: 十画面 - Thirteen: 十三画面 - Thirteen-2: 十三画面 - Thirteen-3: 十三画面 - Thirteen-4: 十三画面 - Thirteen-5: 十三画面 - Sixteen: 十六画面 - Seventeen: 十七画面 - Twenty-Five: 二十五画面
    * subscriberInPics  子画面列表（手工设置多画面时必填）。
    * switchTime  表示轮询间隔,取值范围：10-120，默认10。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。 > 仅针对专业会议终端生效，对软终端不生效。
    * multiPicSaveOnly  多画面是否仅保存。 * true： 仅保存 * false： 保存并应用 > * ”仅保存“效果：仅保存当前画面布局，不进行广播等操作。 > * ”保存并应用“效果：1、当会议状态为广播多画面、声控单画面、声控多画面、主持人观看多画面时，保存并应用后，改变画面布局，不改变状态。2、当会议状态为非广播多画面、声控单画面、声控多画面、主持人观看多画面时，如自动多画面、广播与会者、点名与会者时，保存并应用后，变为广播多画面。 > * 当处于广播多画面、声控多画面、声控单画面状态下，无法设置主持人观看多画面。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manualSet' => 'int32',
        'picLayoutInfo' => null,
        'imageType' => null,
        'subscriberInPics' => null,
        'switchTime' => 'int32',
        'multiPicSaveOnly' => null
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
    * manualSet  是否为手工设置多画面。 * 0： 系统自动多画面 * 1： 手工设置多画面
    * picLayoutInfo  picLayoutInfo
    * imageType  画面类型。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Three-2: 三画面 - Three-3: 三画面 - Three-4: 三画面 - Four: 四画面 - Four-2: 四画面 - Four-3: 四画面 - Five: 五画面 - Five-2: 五画面 - Six: 六画面 - Six-2: 六画面 - Six-3: 六画面 - Six-4: 六画面 - Six-5: 六画面 - Seven: 七画面 - Seven-2: 七画面 - Seven-3: 七画面 - Seven-4: 七画面 - Eight: 八画面 - Eight-2: 八画面 - Eight-3: 八画面 - Eight-4: 八画面 - Nine: 九画面 - Ten: 十画面 - Ten-2: 十画面 - Ten-3: 十画面 - Ten-4: 十画面 - Ten-5: 十画面 - Ten-6: 十画面 - Thirteen: 十三画面 - Thirteen-2: 十三画面 - Thirteen-3: 十三画面 - Thirteen-4: 十三画面 - Thirteen-5: 十三画面 - Sixteen: 十六画面 - Seventeen: 十七画面 - Twenty-Five: 二十五画面
    * subscriberInPics  子画面列表（手工设置多画面时必填）。
    * switchTime  表示轮询间隔,取值范围：10-120，默认10。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。 > 仅针对专业会议终端生效，对软终端不生效。
    * multiPicSaveOnly  多画面是否仅保存。 * true： 仅保存 * false： 保存并应用 > * ”仅保存“效果：仅保存当前画面布局，不进行广播等操作。 > * ”保存并应用“效果：1、当会议状态为广播多画面、声控单画面、声控多画面、主持人观看多画面时，保存并应用后，改变画面布局，不改变状态。2、当会议状态为非广播多画面、声控单画面、声控多画面、主持人观看多画面时，如自动多画面、广播与会者、点名与会者时，保存并应用后，变为广播多画面。 > * 当处于广播多画面、声控多画面、声控单画面状态下，无法设置主持人观看多画面。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manualSet' => 'manualSet',
            'picLayoutInfo' => 'picLayoutInfo',
            'imageType' => 'imageType',
            'subscriberInPics' => 'subscriberInPics',
            'switchTime' => 'switchTime',
            'multiPicSaveOnly' => 'multiPicSaveOnly'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manualSet  是否为手工设置多画面。 * 0： 系统自动多画面 * 1： 手工设置多画面
    * picLayoutInfo  picLayoutInfo
    * imageType  画面类型。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Three-2: 三画面 - Three-3: 三画面 - Three-4: 三画面 - Four: 四画面 - Four-2: 四画面 - Four-3: 四画面 - Five: 五画面 - Five-2: 五画面 - Six: 六画面 - Six-2: 六画面 - Six-3: 六画面 - Six-4: 六画面 - Six-5: 六画面 - Seven: 七画面 - Seven-2: 七画面 - Seven-3: 七画面 - Seven-4: 七画面 - Eight: 八画面 - Eight-2: 八画面 - Eight-3: 八画面 - Eight-4: 八画面 - Nine: 九画面 - Ten: 十画面 - Ten-2: 十画面 - Ten-3: 十画面 - Ten-4: 十画面 - Ten-5: 十画面 - Ten-6: 十画面 - Thirteen: 十三画面 - Thirteen-2: 十三画面 - Thirteen-3: 十三画面 - Thirteen-4: 十三画面 - Thirteen-5: 十三画面 - Sixteen: 十六画面 - Seventeen: 十七画面 - Twenty-Five: 二十五画面
    * subscriberInPics  子画面列表（手工设置多画面时必填）。
    * switchTime  表示轮询间隔,取值范围：10-120，默认10。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。 > 仅针对专业会议终端生效，对软终端不生效。
    * multiPicSaveOnly  多画面是否仅保存。 * true： 仅保存 * false： 保存并应用 > * ”仅保存“效果：仅保存当前画面布局，不进行广播等操作。 > * ”保存并应用“效果：1、当会议状态为广播多画面、声控单画面、声控多画面、主持人观看多画面时，保存并应用后，改变画面布局，不改变状态。2、当会议状态为非广播多画面、声控单画面、声控多画面、主持人观看多画面时，如自动多画面、广播与会者、点名与会者时，保存并应用后，变为广播多画面。 > * 当处于广播多画面、声控多画面、声控单画面状态下，无法设置主持人观看多画面。
    *
    * @var string[]
    */
    protected static $setters = [
            'manualSet' => 'setManualSet',
            'picLayoutInfo' => 'setPicLayoutInfo',
            'imageType' => 'setImageType',
            'subscriberInPics' => 'setSubscriberInPics',
            'switchTime' => 'setSwitchTime',
            'multiPicSaveOnly' => 'setMultiPicSaveOnly'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manualSet  是否为手工设置多画面。 * 0： 系统自动多画面 * 1： 手工设置多画面
    * picLayoutInfo  picLayoutInfo
    * imageType  画面类型。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Three-2: 三画面 - Three-3: 三画面 - Three-4: 三画面 - Four: 四画面 - Four-2: 四画面 - Four-3: 四画面 - Five: 五画面 - Five-2: 五画面 - Six: 六画面 - Six-2: 六画面 - Six-3: 六画面 - Six-4: 六画面 - Six-5: 六画面 - Seven: 七画面 - Seven-2: 七画面 - Seven-3: 七画面 - Seven-4: 七画面 - Eight: 八画面 - Eight-2: 八画面 - Eight-3: 八画面 - Eight-4: 八画面 - Nine: 九画面 - Ten: 十画面 - Ten-2: 十画面 - Ten-3: 十画面 - Ten-4: 十画面 - Ten-5: 十画面 - Ten-6: 十画面 - Thirteen: 十三画面 - Thirteen-2: 十三画面 - Thirteen-3: 十三画面 - Thirteen-4: 十三画面 - Thirteen-5: 十三画面 - Sixteen: 十六画面 - Seventeen: 十七画面 - Twenty-Five: 二十五画面
    * subscriberInPics  子画面列表（手工设置多画面时必填）。
    * switchTime  表示轮询间隔,取值范围：10-120，默认10。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。 > 仅针对专业会议终端生效，对软终端不生效。
    * multiPicSaveOnly  多画面是否仅保存。 * true： 仅保存 * false： 保存并应用 > * ”仅保存“效果：仅保存当前画面布局，不进行广播等操作。 > * ”保存并应用“效果：1、当会议状态为广播多画面、声控单画面、声控多画面、主持人观看多画面时，保存并应用后，改变画面布局，不改变状态。2、当会议状态为非广播多画面、声控单画面、声控多画面、主持人观看多画面时，如自动多画面、广播与会者、点名与会者时，保存并应用后，变为广播多画面。 > * 当处于广播多画面、声控多画面、声控单画面状态下，无法设置主持人观看多画面。
    *
    * @var string[]
    */
    protected static $getters = [
            'manualSet' => 'getManualSet',
            'picLayoutInfo' => 'getPicLayoutInfo',
            'imageType' => 'getImageType',
            'subscriberInPics' => 'getSubscriberInPics',
            'switchTime' => 'getSwitchTime',
            'multiPicSaveOnly' => 'getMultiPicSaveOnly'
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
        $this->container['manualSet'] = isset($data['manualSet']) ? $data['manualSet'] : null;
        $this->container['picLayoutInfo'] = isset($data['picLayoutInfo']) ? $data['picLayoutInfo'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['subscriberInPics'] = isset($data['subscriberInPics']) ? $data['subscriberInPics'] : null;
        $this->container['switchTime'] = isset($data['switchTime']) ? $data['switchTime'] : null;
        $this->container['multiPicSaveOnly'] = isset($data['multiPicSaveOnly']) ? $data['multiPicSaveOnly'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['manualSet'] === null) {
            $invalidProperties[] = "'manualSet' can't be null";
        }
            if (($this->container['manualSet'] > 1)) {
                $invalidProperties[] = "invalid value for 'manualSet', must be smaller than or equal to 1.";
            }
            if (($this->container['manualSet'] < 0)) {
                $invalidProperties[] = "invalid value for 'manualSet', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['switchTime']) && ($this->container['switchTime'] > 120)) {
                $invalidProperties[] = "invalid value for 'switchTime', must be smaller than or equal to 120.";
            }
            if (!is_null($this->container['switchTime']) && ($this->container['switchTime'] < 10)) {
                $invalidProperties[] = "invalid value for 'switchTime', must be bigger than or equal to 10.";
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
    * Gets manualSet
    *  是否为手工设置多画面。 * 0： 系统自动多画面 * 1： 手工设置多画面
    *
    * @return int
    */
    public function getManualSet()
    {
        return $this->container['manualSet'];
    }

    /**
    * Sets manualSet
    *
    * @param int $manualSet 是否为手工设置多画面。 * 0： 系统自动多画面 * 1： 手工设置多画面
    *
    * @return $this
    */
    public function setManualSet($manualSet)
    {
        $this->container['manualSet'] = $manualSet;
        return $this;
    }

    /**
    * Gets picLayoutInfo
    *  picLayoutInfo
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\PicLayoutInfo|null
    */
    public function getPicLayoutInfo()
    {
        return $this->container['picLayoutInfo'];
    }

    /**
    * Sets picLayoutInfo
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\PicLayoutInfo|null $picLayoutInfo picLayoutInfo
    *
    * @return $this
    */
    public function setPicLayoutInfo($picLayoutInfo)
    {
        $this->container['picLayoutInfo'] = $picLayoutInfo;
        return $this;
    }

    /**
    * Gets imageType
    *  画面类型。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Three-2: 三画面 - Three-3: 三画面 - Three-4: 三画面 - Four: 四画面 - Four-2: 四画面 - Four-3: 四画面 - Five: 五画面 - Five-2: 五画面 - Six: 六画面 - Six-2: 六画面 - Six-3: 六画面 - Six-4: 六画面 - Six-5: 六画面 - Seven: 七画面 - Seven-2: 七画面 - Seven-3: 七画面 - Seven-4: 七画面 - Eight: 八画面 - Eight-2: 八画面 - Eight-3: 八画面 - Eight-4: 八画面 - Nine: 九画面 - Ten: 十画面 - Ten-2: 十画面 - Ten-3: 十画面 - Ten-4: 十画面 - Ten-5: 十画面 - Ten-6: 十画面 - Thirteen: 十三画面 - Thirteen-2: 十三画面 - Thirteen-3: 十三画面 - Thirteen-4: 十三画面 - Thirteen-5: 十三画面 - Sixteen: 十六画面 - Seventeen: 十七画面 - Twenty-Five: 二十五画面
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType 画面类型。手工设置多画面时有效。 - Single: 单画面 - Two: 二画面 - Three: 三画面 - Three-2: 三画面 - Three-3: 三画面 - Three-4: 三画面 - Four: 四画面 - Four-2: 四画面 - Four-3: 四画面 - Five: 五画面 - Five-2: 五画面 - Six: 六画面 - Six-2: 六画面 - Six-3: 六画面 - Six-4: 六画面 - Six-5: 六画面 - Seven: 七画面 - Seven-2: 七画面 - Seven-3: 七画面 - Seven-4: 七画面 - Eight: 八画面 - Eight-2: 八画面 - Eight-3: 八画面 - Eight-4: 八画面 - Nine: 九画面 - Ten: 十画面 - Ten-2: 十画面 - Ten-3: 十画面 - Ten-4: 十画面 - Ten-5: 十画面 - Ten-6: 十画面 - Thirteen: 十三画面 - Thirteen-2: 十三画面 - Thirteen-3: 十三画面 - Thirteen-4: 十三画面 - Thirteen-5: 十三画面 - Sixteen: 十六画面 - Seventeen: 十七画面 - Twenty-Five: 二十五画面
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets subscriberInPics
    *  子画面列表（手工设置多画面时必填）。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\RestSubscriberInPic[]|null
    */
    public function getSubscriberInPics()
    {
        return $this->container['subscriberInPics'];
    }

    /**
    * Sets subscriberInPics
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\RestSubscriberInPic[]|null $subscriberInPics 子画面列表（手工设置多画面时必填）。
    *
    * @return $this
    */
    public function setSubscriberInPics($subscriberInPics)
    {
        $this->container['subscriberInPics'] = $subscriberInPics;
        return $this;
    }

    /**
    * Gets switchTime
    *  表示轮询间隔,取值范围：10-120，默认10。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。 > 仅针对专业会议终端生效，对软终端不生效。
    *
    * @return int|null
    */
    public function getSwitchTime()
    {
        return $this->container['switchTime'];
    }

    /**
    * Sets switchTime
    *
    * @param int|null $switchTime 表示轮询间隔,取值范围：10-120，默认10。单位：秒。 当同一个子画面中包含有多个与会者时，此参数有效。 > 仅针对专业会议终端生效，对软终端不生效。
    *
    * @return $this
    */
    public function setSwitchTime($switchTime)
    {
        $this->container['switchTime'] = $switchTime;
        return $this;
    }

    /**
    * Gets multiPicSaveOnly
    *  多画面是否仅保存。 * true： 仅保存 * false： 保存并应用 > * ”仅保存“效果：仅保存当前画面布局，不进行广播等操作。 > * ”保存并应用“效果：1、当会议状态为广播多画面、声控单画面、声控多画面、主持人观看多画面时，保存并应用后，改变画面布局，不改变状态。2、当会议状态为非广播多画面、声控单画面、声控多画面、主持人观看多画面时，如自动多画面、广播与会者、点名与会者时，保存并应用后，变为广播多画面。 > * 当处于广播多画面、声控多画面、声控单画面状态下，无法设置主持人观看多画面。
    *
    * @return bool|null
    */
    public function getMultiPicSaveOnly()
    {
        return $this->container['multiPicSaveOnly'];
    }

    /**
    * Sets multiPicSaveOnly
    *
    * @param bool|null $multiPicSaveOnly 多画面是否仅保存。 * true： 仅保存 * false： 保存并应用 > * ”仅保存“效果：仅保存当前画面布局，不进行广播等操作。 > * ”保存并应用“效果：1、当会议状态为广播多画面、声控单画面、声控多画面、主持人观看多画面时，保存并应用后，改变画面布局，不改变状态。2、当会议状态为非广播多画面、声控单画面、声控多画面、主持人观看多画面时，如自动多画面、广播与会者、点名与会者时，保存并应用后，变为广播多画面。 > * 当处于广播多画面、声控多画面、声控单画面状态下，无法设置主持人观看多画面。
    *
    * @return $this
    */
    public function setMultiPicSaveOnly($multiPicSaveOnly)
    {
        $this->container['multiPicSaveOnly'] = $multiPicSaveOnly;
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

