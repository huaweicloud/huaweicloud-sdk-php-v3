<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MultiPicDisplayDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MultiPicDisplayDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manualSet  是否为手工设置多画面。 * 0 ：系统自动多画面 * 1 ：手工设置多画面
    * imageType  画面类型。取值范围: * Single: 单画面 * Two: 二画面 * Three: 三画面， Three-2: 三画面-2， Three-3: 三画面-3， Three-4: 三画面-4 * Four: 四画面， Four-2: 四画面-2， Four-3: 四画面-3 * Five: 五画面， Five-2: 五画面-2 * Six: 六画面， Six-2: 六画面-2， Six-3: 六画面-3， Six-4: 六画面-4， Six-5: 六画面-5 * Seven: 七画面， Seven-2: 七画面-2， Seven-3: 七画面-3， Seven-4: 七画面-4 * Eight: 八画面， Eight-2: 八画面-2， Eight-3: 八画面-3， Eight-4: 八画面-4 * Nine: 九画面 * Ten: 十画面， Ten-2: 十画面-2， Ten-3: 十画面-3， Ten-4: 十画面-4， Ten-5: 十画面-5， Ten-6: 十画面-6 * Thirteen: 十三画面， Thirteen-2: 十三画面-2， Thirteen-3: 十三画面-3，Thirteen-4: 十三画面-4， Thirteen-5: 十三画面-5， ThirteenR: 十三画面R， ThirteenM: 十三画面M * Sixteen: 十六画面 * Seventeen: 十七画面 * Twenty-Five: 二十五画面 * Custom: 自定义多画面（当前不支持）
    * subscriberInPics  子画面列表。
    * switchTime  表示轮询间隔，单位：秒。当同一个子画面中包含有多个视频源时，此参数有效。
    * picLayoutInfo  picLayoutInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manualSet' => 'int',
            'imageType' => 'string',
            'subscriberInPics' => '\HuaweiCloud\SDK\Meeting\V1\Model\PicInfoNotify[]',
            'switchTime' => 'string',
            'picLayoutInfo' => '\HuaweiCloud\SDK\Meeting\V1\Model\PicLayoutInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manualSet  是否为手工设置多画面。 * 0 ：系统自动多画面 * 1 ：手工设置多画面
    * imageType  画面类型。取值范围: * Single: 单画面 * Two: 二画面 * Three: 三画面， Three-2: 三画面-2， Three-3: 三画面-3， Three-4: 三画面-4 * Four: 四画面， Four-2: 四画面-2， Four-3: 四画面-3 * Five: 五画面， Five-2: 五画面-2 * Six: 六画面， Six-2: 六画面-2， Six-3: 六画面-3， Six-4: 六画面-4， Six-5: 六画面-5 * Seven: 七画面， Seven-2: 七画面-2， Seven-3: 七画面-3， Seven-4: 七画面-4 * Eight: 八画面， Eight-2: 八画面-2， Eight-3: 八画面-3， Eight-4: 八画面-4 * Nine: 九画面 * Ten: 十画面， Ten-2: 十画面-2， Ten-3: 十画面-3， Ten-4: 十画面-4， Ten-5: 十画面-5， Ten-6: 十画面-6 * Thirteen: 十三画面， Thirteen-2: 十三画面-2， Thirteen-3: 十三画面-3，Thirteen-4: 十三画面-4， Thirteen-5: 十三画面-5， ThirteenR: 十三画面R， ThirteenM: 十三画面M * Sixteen: 十六画面 * Seventeen: 十七画面 * Twenty-Five: 二十五画面 * Custom: 自定义多画面（当前不支持）
    * subscriberInPics  子画面列表。
    * switchTime  表示轮询间隔，单位：秒。当同一个子画面中包含有多个视频源时，此参数有效。
    * picLayoutInfo  picLayoutInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manualSet' => 'int32',
        'imageType' => null,
        'subscriberInPics' => null,
        'switchTime' => null,
        'picLayoutInfo' => null
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
    * manualSet  是否为手工设置多画面。 * 0 ：系统自动多画面 * 1 ：手工设置多画面
    * imageType  画面类型。取值范围: * Single: 单画面 * Two: 二画面 * Three: 三画面， Three-2: 三画面-2， Three-3: 三画面-3， Three-4: 三画面-4 * Four: 四画面， Four-2: 四画面-2， Four-3: 四画面-3 * Five: 五画面， Five-2: 五画面-2 * Six: 六画面， Six-2: 六画面-2， Six-3: 六画面-3， Six-4: 六画面-4， Six-5: 六画面-5 * Seven: 七画面， Seven-2: 七画面-2， Seven-3: 七画面-3， Seven-4: 七画面-4 * Eight: 八画面， Eight-2: 八画面-2， Eight-3: 八画面-3， Eight-4: 八画面-4 * Nine: 九画面 * Ten: 十画面， Ten-2: 十画面-2， Ten-3: 十画面-3， Ten-4: 十画面-4， Ten-5: 十画面-5， Ten-6: 十画面-6 * Thirteen: 十三画面， Thirteen-2: 十三画面-2， Thirteen-3: 十三画面-3，Thirteen-4: 十三画面-4， Thirteen-5: 十三画面-5， ThirteenR: 十三画面R， ThirteenM: 十三画面M * Sixteen: 十六画面 * Seventeen: 十七画面 * Twenty-Five: 二十五画面 * Custom: 自定义多画面（当前不支持）
    * subscriberInPics  子画面列表。
    * switchTime  表示轮询间隔，单位：秒。当同一个子画面中包含有多个视频源时，此参数有效。
    * picLayoutInfo  picLayoutInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manualSet' => 'manualSet',
            'imageType' => 'imageType',
            'subscriberInPics' => 'subscriberInPics',
            'switchTime' => 'switchTime',
            'picLayoutInfo' => 'picLayoutInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manualSet  是否为手工设置多画面。 * 0 ：系统自动多画面 * 1 ：手工设置多画面
    * imageType  画面类型。取值范围: * Single: 单画面 * Two: 二画面 * Three: 三画面， Three-2: 三画面-2， Three-3: 三画面-3， Three-4: 三画面-4 * Four: 四画面， Four-2: 四画面-2， Four-3: 四画面-3 * Five: 五画面， Five-2: 五画面-2 * Six: 六画面， Six-2: 六画面-2， Six-3: 六画面-3， Six-4: 六画面-4， Six-5: 六画面-5 * Seven: 七画面， Seven-2: 七画面-2， Seven-3: 七画面-3， Seven-4: 七画面-4 * Eight: 八画面， Eight-2: 八画面-2， Eight-3: 八画面-3， Eight-4: 八画面-4 * Nine: 九画面 * Ten: 十画面， Ten-2: 十画面-2， Ten-3: 十画面-3， Ten-4: 十画面-4， Ten-5: 十画面-5， Ten-6: 十画面-6 * Thirteen: 十三画面， Thirteen-2: 十三画面-2， Thirteen-3: 十三画面-3，Thirteen-4: 十三画面-4， Thirteen-5: 十三画面-5， ThirteenR: 十三画面R， ThirteenM: 十三画面M * Sixteen: 十六画面 * Seventeen: 十七画面 * Twenty-Five: 二十五画面 * Custom: 自定义多画面（当前不支持）
    * subscriberInPics  子画面列表。
    * switchTime  表示轮询间隔，单位：秒。当同一个子画面中包含有多个视频源时，此参数有效。
    * picLayoutInfo  picLayoutInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'manualSet' => 'setManualSet',
            'imageType' => 'setImageType',
            'subscriberInPics' => 'setSubscriberInPics',
            'switchTime' => 'setSwitchTime',
            'picLayoutInfo' => 'setPicLayoutInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manualSet  是否为手工设置多画面。 * 0 ：系统自动多画面 * 1 ：手工设置多画面
    * imageType  画面类型。取值范围: * Single: 单画面 * Two: 二画面 * Three: 三画面， Three-2: 三画面-2， Three-3: 三画面-3， Three-4: 三画面-4 * Four: 四画面， Four-2: 四画面-2， Four-3: 四画面-3 * Five: 五画面， Five-2: 五画面-2 * Six: 六画面， Six-2: 六画面-2， Six-3: 六画面-3， Six-4: 六画面-4， Six-5: 六画面-5 * Seven: 七画面， Seven-2: 七画面-2， Seven-3: 七画面-3， Seven-4: 七画面-4 * Eight: 八画面， Eight-2: 八画面-2， Eight-3: 八画面-3， Eight-4: 八画面-4 * Nine: 九画面 * Ten: 十画面， Ten-2: 十画面-2， Ten-3: 十画面-3， Ten-4: 十画面-4， Ten-5: 十画面-5， Ten-6: 十画面-6 * Thirteen: 十三画面， Thirteen-2: 十三画面-2， Thirteen-3: 十三画面-3，Thirteen-4: 十三画面-4， Thirteen-5: 十三画面-5， ThirteenR: 十三画面R， ThirteenM: 十三画面M * Sixteen: 十六画面 * Seventeen: 十七画面 * Twenty-Five: 二十五画面 * Custom: 自定义多画面（当前不支持）
    * subscriberInPics  子画面列表。
    * switchTime  表示轮询间隔，单位：秒。当同一个子画面中包含有多个视频源时，此参数有效。
    * picLayoutInfo  picLayoutInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'manualSet' => 'getManualSet',
            'imageType' => 'getImageType',
            'subscriberInPics' => 'getSubscriberInPics',
            'switchTime' => 'getSwitchTime',
            'picLayoutInfo' => 'getPicLayoutInfo'
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
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['subscriberInPics'] = isset($data['subscriberInPics']) ? $data['subscriberInPics'] : null;
        $this->container['switchTime'] = isset($data['switchTime']) ? $data['switchTime'] : null;
        $this->container['picLayoutInfo'] = isset($data['picLayoutInfo']) ? $data['picLayoutInfo'] : null;
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
    * Gets manualSet
    *  是否为手工设置多画面。 * 0 ：系统自动多画面 * 1 ：手工设置多画面
    *
    * @return int|null
    */
    public function getManualSet()
    {
        return $this->container['manualSet'];
    }

    /**
    * Sets manualSet
    *
    * @param int|null $manualSet 是否为手工设置多画面。 * 0 ：系统自动多画面 * 1 ：手工设置多画面
    *
    * @return $this
    */
    public function setManualSet($manualSet)
    {
        $this->container['manualSet'] = $manualSet;
        return $this;
    }

    /**
    * Gets imageType
    *  画面类型。取值范围: * Single: 单画面 * Two: 二画面 * Three: 三画面， Three-2: 三画面-2， Three-3: 三画面-3， Three-4: 三画面-4 * Four: 四画面， Four-2: 四画面-2， Four-3: 四画面-3 * Five: 五画面， Five-2: 五画面-2 * Six: 六画面， Six-2: 六画面-2， Six-3: 六画面-3， Six-4: 六画面-4， Six-5: 六画面-5 * Seven: 七画面， Seven-2: 七画面-2， Seven-3: 七画面-3， Seven-4: 七画面-4 * Eight: 八画面， Eight-2: 八画面-2， Eight-3: 八画面-3， Eight-4: 八画面-4 * Nine: 九画面 * Ten: 十画面， Ten-2: 十画面-2， Ten-3: 十画面-3， Ten-4: 十画面-4， Ten-5: 十画面-5， Ten-6: 十画面-6 * Thirteen: 十三画面， Thirteen-2: 十三画面-2， Thirteen-3: 十三画面-3，Thirteen-4: 十三画面-4， Thirteen-5: 十三画面-5， ThirteenR: 十三画面R， ThirteenM: 十三画面M * Sixteen: 十六画面 * Seventeen: 十七画面 * Twenty-Five: 二十五画面 * Custom: 自定义多画面（当前不支持）
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
    * @param string|null $imageType 画面类型。取值范围: * Single: 单画面 * Two: 二画面 * Three: 三画面， Three-2: 三画面-2， Three-3: 三画面-3， Three-4: 三画面-4 * Four: 四画面， Four-2: 四画面-2， Four-3: 四画面-3 * Five: 五画面， Five-2: 五画面-2 * Six: 六画面， Six-2: 六画面-2， Six-3: 六画面-3， Six-4: 六画面-4， Six-5: 六画面-5 * Seven: 七画面， Seven-2: 七画面-2， Seven-3: 七画面-3， Seven-4: 七画面-4 * Eight: 八画面， Eight-2: 八画面-2， Eight-3: 八画面-3， Eight-4: 八画面-4 * Nine: 九画面 * Ten: 十画面， Ten-2: 十画面-2， Ten-3: 十画面-3， Ten-4: 十画面-4， Ten-5: 十画面-5， Ten-6: 十画面-6 * Thirteen: 十三画面， Thirteen-2: 十三画面-2， Thirteen-3: 十三画面-3，Thirteen-4: 十三画面-4， Thirteen-5: 十三画面-5， ThirteenR: 十三画面R， ThirteenM: 十三画面M * Sixteen: 十六画面 * Seventeen: 十七画面 * Twenty-Five: 二十五画面 * Custom: 自定义多画面（当前不支持）
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
    *  子画面列表。
    *
    * @return \HuaweiCloud\SDK\Meeting\V1\Model\PicInfoNotify[]|null
    */
    public function getSubscriberInPics()
    {
        return $this->container['subscriberInPics'];
    }

    /**
    * Sets subscriberInPics
    *
    * @param \HuaweiCloud\SDK\Meeting\V1\Model\PicInfoNotify[]|null $subscriberInPics 子画面列表。
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
    *  表示轮询间隔，单位：秒。当同一个子画面中包含有多个视频源时，此参数有效。
    *
    * @return string|null
    */
    public function getSwitchTime()
    {
        return $this->container['switchTime'];
    }

    /**
    * Sets switchTime
    *
    * @param string|null $switchTime 表示轮询间隔，单位：秒。当同一个子画面中包含有多个视频源时，此参数有效。
    *
    * @return $this
    */
    public function setSwitchTime($switchTime)
    {
        $this->container['switchTime'] = $switchTime;
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

