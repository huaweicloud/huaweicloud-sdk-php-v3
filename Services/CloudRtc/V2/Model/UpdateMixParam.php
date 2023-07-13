<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateMixParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateMixParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * layoutTemplate  视频布局模板编号，仅支持自定义模板之间的更新。
    * backgroundImage  画布背景图地址，图片先上传obs。默认使用等比缩放裁剪，保证铺满。格式s3://bucket/object
    * defaultUserBackgroundImage  默认用户背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * screenBackgroundImage  共享屏幕的背景图地址，图片先上传obs，格式s3://bucket/object。  在一大多小的布局场景下，无论大窗是显示非指定用户（屏幕共享人的桌面）还是指定用户的共享桌面，都通过该字段指定背景图。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * layoutPanes  需要混流的视频列表。若不需要视频混流，则可不传递该参数。
    * userBackgroundImages  指定用户背景图，优先级大于default_user_background_image
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'layoutTemplate' => 'string',
            'backgroundImage' => 'string',
            'defaultUserBackgroundImage' => 'string',
            'screenBackgroundImage' => 'string',
            'maxIdleTime' => 'int',
            'layoutPanes' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\MixLayoutPane[]',
            'userBackgroundImages' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\MixUserBackgroundImage[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * layoutTemplate  视频布局模板编号，仅支持自定义模板之间的更新。
    * backgroundImage  画布背景图地址，图片先上传obs。默认使用等比缩放裁剪，保证铺满。格式s3://bucket/object
    * defaultUserBackgroundImage  默认用户背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * screenBackgroundImage  共享屏幕的背景图地址，图片先上传obs，格式s3://bucket/object。  在一大多小的布局场景下，无论大窗是显示非指定用户（屏幕共享人的桌面）还是指定用户的共享桌面，都通过该字段指定背景图。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * layoutPanes  需要混流的视频列表。若不需要视频混流，则可不传递该参数。
    * userBackgroundImages  指定用户背景图，优先级大于default_user_background_image
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'layoutTemplate' => null,
        'backgroundImage' => null,
        'defaultUserBackgroundImage' => null,
        'screenBackgroundImage' => null,
        'maxIdleTime' => null,
        'layoutPanes' => null,
        'userBackgroundImages' => null
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
    * layoutTemplate  视频布局模板编号，仅支持自定义模板之间的更新。
    * backgroundImage  画布背景图地址，图片先上传obs。默认使用等比缩放裁剪，保证铺满。格式s3://bucket/object
    * defaultUserBackgroundImage  默认用户背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * screenBackgroundImage  共享屏幕的背景图地址，图片先上传obs，格式s3://bucket/object。  在一大多小的布局场景下，无论大窗是显示非指定用户（屏幕共享人的桌面）还是指定用户的共享桌面，都通过该字段指定背景图。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * layoutPanes  需要混流的视频列表。若不需要视频混流，则可不传递该参数。
    * userBackgroundImages  指定用户背景图，优先级大于default_user_background_image
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'layoutTemplate' => 'layout_template',
            'backgroundImage' => 'background_image',
            'defaultUserBackgroundImage' => 'default_user_background_image',
            'screenBackgroundImage' => 'screen_background_image',
            'maxIdleTime' => 'max_idle_time',
            'layoutPanes' => 'layout_panes',
            'userBackgroundImages' => 'user_background_images'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * layoutTemplate  视频布局模板编号，仅支持自定义模板之间的更新。
    * backgroundImage  画布背景图地址，图片先上传obs。默认使用等比缩放裁剪，保证铺满。格式s3://bucket/object
    * defaultUserBackgroundImage  默认用户背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * screenBackgroundImage  共享屏幕的背景图地址，图片先上传obs，格式s3://bucket/object。  在一大多小的布局场景下，无论大窗是显示非指定用户（屏幕共享人的桌面）还是指定用户的共享桌面，都通过该字段指定背景图。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * layoutPanes  需要混流的视频列表。若不需要视频混流，则可不传递该参数。
    * userBackgroundImages  指定用户背景图，优先级大于default_user_background_image
    *
    * @var string[]
    */
    protected static $setters = [
            'layoutTemplate' => 'setLayoutTemplate',
            'backgroundImage' => 'setBackgroundImage',
            'defaultUserBackgroundImage' => 'setDefaultUserBackgroundImage',
            'screenBackgroundImage' => 'setScreenBackgroundImage',
            'maxIdleTime' => 'setMaxIdleTime',
            'layoutPanes' => 'setLayoutPanes',
            'userBackgroundImages' => 'setUserBackgroundImages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * layoutTemplate  视频布局模板编号，仅支持自定义模板之间的更新。
    * backgroundImage  画布背景图地址，图片先上传obs。默认使用等比缩放裁剪，保证铺满。格式s3://bucket/object
    * defaultUserBackgroundImage  默认用户背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * screenBackgroundImage  共享屏幕的背景图地址，图片先上传obs，格式s3://bucket/object。  在一大多小的布局场景下，无论大窗是显示非指定用户（屏幕共享人的桌面）还是指定用户的共享桌面，都通过该字段指定背景图。
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * layoutPanes  需要混流的视频列表。若不需要视频混流，则可不传递该参数。
    * userBackgroundImages  指定用户背景图，优先级大于default_user_background_image
    *
    * @var string[]
    */
    protected static $getters = [
            'layoutTemplate' => 'getLayoutTemplate',
            'backgroundImage' => 'getBackgroundImage',
            'defaultUserBackgroundImage' => 'getDefaultUserBackgroundImage',
            'screenBackgroundImage' => 'getScreenBackgroundImage',
            'maxIdleTime' => 'getMaxIdleTime',
            'layoutPanes' => 'getLayoutPanes',
            'userBackgroundImages' => 'getUserBackgroundImages'
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
        $this->container['layoutTemplate'] = isset($data['layoutTemplate']) ? $data['layoutTemplate'] : null;
        $this->container['backgroundImage'] = isset($data['backgroundImage']) ? $data['backgroundImage'] : null;
        $this->container['defaultUserBackgroundImage'] = isset($data['defaultUserBackgroundImage']) ? $data['defaultUserBackgroundImage'] : null;
        $this->container['screenBackgroundImage'] = isset($data['screenBackgroundImage']) ? $data['screenBackgroundImage'] : null;
        $this->container['maxIdleTime'] = isset($data['maxIdleTime']) ? $data['maxIdleTime'] : null;
        $this->container['layoutPanes'] = isset($data['layoutPanes']) ? $data['layoutPanes'] : null;
        $this->container['userBackgroundImages'] = isset($data['userBackgroundImages']) ? $data['userBackgroundImages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['layoutTemplate']) && (mb_strlen($this->container['layoutTemplate']) > 128)) {
                $invalidProperties[] = "invalid value for 'layoutTemplate', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['layoutTemplate']) && (mb_strlen($this->container['layoutTemplate']) < 0)) {
                $invalidProperties[] = "invalid value for 'layoutTemplate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['backgroundImage']) && (mb_strlen($this->container['backgroundImage']) > 128)) {
                $invalidProperties[] = "invalid value for 'backgroundImage', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['backgroundImage']) && (mb_strlen($this->container['backgroundImage']) < 0)) {
                $invalidProperties[] = "invalid value for 'backgroundImage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['defaultUserBackgroundImage']) && (mb_strlen($this->container['defaultUserBackgroundImage']) > 128)) {
                $invalidProperties[] = "invalid value for 'defaultUserBackgroundImage', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['defaultUserBackgroundImage']) && (mb_strlen($this->container['defaultUserBackgroundImage']) < 0)) {
                $invalidProperties[] = "invalid value for 'defaultUserBackgroundImage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['screenBackgroundImage']) && (mb_strlen($this->container['screenBackgroundImage']) > 128)) {
                $invalidProperties[] = "invalid value for 'screenBackgroundImage', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['screenBackgroundImage']) && (mb_strlen($this->container['screenBackgroundImage']) < 0)) {
                $invalidProperties[] = "invalid value for 'screenBackgroundImage', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxIdleTime']) && ($this->container['maxIdleTime'] > 43200)) {
                $invalidProperties[] = "invalid value for 'maxIdleTime', must be smaller than or equal to 43200.";
            }
            if (!is_null($this->container['maxIdleTime']) && ($this->container['maxIdleTime'] < 5)) {
                $invalidProperties[] = "invalid value for 'maxIdleTime', must be bigger than or equal to 5.";
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
    * Gets layoutTemplate
    *  视频布局模板编号，仅支持自定义模板之间的更新。
    *
    * @return string|null
    */
    public function getLayoutTemplate()
    {
        return $this->container['layoutTemplate'];
    }

    /**
    * Sets layoutTemplate
    *
    * @param string|null $layoutTemplate 视频布局模板编号，仅支持自定义模板之间的更新。
    *
    * @return $this
    */
    public function setLayoutTemplate($layoutTemplate)
    {
        $this->container['layoutTemplate'] = $layoutTemplate;
        return $this;
    }

    /**
    * Gets backgroundImage
    *  画布背景图地址，图片先上传obs。默认使用等比缩放裁剪，保证铺满。格式s3://bucket/object
    *
    * @return string|null
    */
    public function getBackgroundImage()
    {
        return $this->container['backgroundImage'];
    }

    /**
    * Sets backgroundImage
    *
    * @param string|null $backgroundImage 画布背景图地址，图片先上传obs。默认使用等比缩放裁剪，保证铺满。格式s3://bucket/object
    *
    * @return $this
    */
    public function setBackgroundImage($backgroundImage)
    {
        $this->container['backgroundImage'] = $backgroundImage;
        return $this;
    }

    /**
    * Gets defaultUserBackgroundImage
    *  默认用户背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    *
    * @return string|null
    */
    public function getDefaultUserBackgroundImage()
    {
        return $this->container['defaultUserBackgroundImage'];
    }

    /**
    * Sets defaultUserBackgroundImage
    *
    * @param string|null $defaultUserBackgroundImage 默认用户背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    *
    * @return $this
    */
    public function setDefaultUserBackgroundImage($defaultUserBackgroundImage)
    {
        $this->container['defaultUserBackgroundImage'] = $defaultUserBackgroundImage;
        return $this;
    }

    /**
    * Gets screenBackgroundImage
    *  共享屏幕的背景图地址，图片先上传obs，格式s3://bucket/object。  在一大多小的布局场景下，无论大窗是显示非指定用户（屏幕共享人的桌面）还是指定用户的共享桌面，都通过该字段指定背景图。
    *
    * @return string|null
    */
    public function getScreenBackgroundImage()
    {
        return $this->container['screenBackgroundImage'];
    }

    /**
    * Sets screenBackgroundImage
    *
    * @param string|null $screenBackgroundImage 共享屏幕的背景图地址，图片先上传obs，格式s3://bucket/object。  在一大多小的布局场景下，无论大窗是显示非指定用户（屏幕共享人的桌面）还是指定用户的共享桌面，都通过该字段指定背景图。
    *
    * @return $this
    */
    public function setScreenBackgroundImage($screenBackgroundImage)
    {
        $this->container['screenBackgroundImage'] = $screenBackgroundImage;
        return $this;
    }

    /**
    * Gets maxIdleTime
    *  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    *
    * @return int|null
    */
    public function getMaxIdleTime()
    {
        return $this->container['maxIdleTime'];
    }

    /**
    * Sets maxIdleTime
    *
    * @param int|null $maxIdleTime 最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    *
    * @return $this
    */
    public function setMaxIdleTime($maxIdleTime)
    {
        $this->container['maxIdleTime'] = $maxIdleTime;
        return $this;
    }

    /**
    * Gets layoutPanes
    *  需要混流的视频列表。若不需要视频混流，则可不传递该参数。
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\MixLayoutPane[]|null
    */
    public function getLayoutPanes()
    {
        return $this->container['layoutPanes'];
    }

    /**
    * Sets layoutPanes
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\MixLayoutPane[]|null $layoutPanes 需要混流的视频列表。若不需要视频混流，则可不传递该参数。
    *
    * @return $this
    */
    public function setLayoutPanes($layoutPanes)
    {
        $this->container['layoutPanes'] = $layoutPanes;
        return $this;
    }

    /**
    * Gets userBackgroundImages
    *  指定用户背景图，优先级大于default_user_background_image
    *
    * @return \HuaweiCloud\SDK\CloudRTC\V2\Model\MixUserBackgroundImage[]|null
    */
    public function getUserBackgroundImages()
    {
        return $this->container['userBackgroundImages'];
    }

    /**
    * Sets userBackgroundImages
    *
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\MixUserBackgroundImage[]|null $userBackgroundImages 指定用户背景图，优先级大于default_user_background_image
    *
    * @return $this
    */
    public function setUserBackgroundImages($userBackgroundImages)
    {
        $this->container['userBackgroundImages'] = $userBackgroundImages;
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

