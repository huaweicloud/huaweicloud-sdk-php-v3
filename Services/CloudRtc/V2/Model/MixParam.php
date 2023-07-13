<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MixParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MixParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roomId  房间id
    * encodeTemplate  输出编码模板名称 - 1920*1080_30_4620：输出流是1080p，帧率30，码率4.62Mbps - 1920*1080_30_3150：输出流是1080p，帧率30，码率3.15Mbps - 1920*1080_15_3460：输出流是1080p，帧率15，码率3.46Mbps - 1920*1080_15_2080：输出流是1080p，帧率15，码率2.08Mbps - 1280*720_30_3420：输出流是720p，帧率30，码率3.42Mbps - 1280*720_30_1710：输出流是720p，帧率30，码率1.71Mbps - 1280*720_15_2260：输出流是720p，帧率15，码率2.26Mbps - 1280*720_15_1130：输出流是720p，帧率15，码率1.13Mbps - 640*480_30_1500：输出流是480p，帧率30，码率1.50Mbps - 640*480_15_500：输出流是480p，帧率15，码率500Kbps - 640*480_30_1000 输出流是480p，帧率30，码率1000Kbps - 480*360_30_490：输出流是360p，帧率30，码率490Kbps - 480*360_15_320：输出流是360p，帧率15，码率320Kbps
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * layoutTemplate  视频布局模板编号，不混视频的时候，不需要带。 - nine_grids_view：九宫格模板（自适应模板） - screen_share_left：主视图在左边的屏幕共享模板（自适应模板） - screen_share_right：主视图在右边的屏幕共享模板（自适应模板） - custom：自定义布局
    * defaultUserBackgroundImage  默认用户背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * screenBackgroundImage  共享屏幕的背景图地址，图片先上传obs，格式s3://bucket/object。  在一大多小的布局场景下，无论大窗是显示非指定用户（屏幕共享人的桌面）还是指定用户的共享桌面，都通过该字段指定背景图。
    * backgroundImage  画布背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * layoutPanes  需要混流的视频列表。若不需要混流视频，则可不传递该参数。  nine_grids_view模板不需要填写本字段。
    * userBackgroundImages  指定用户背景图，优先级大于default_user_background_image
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roomId' => 'string',
            'encodeTemplate' => 'string',
            'maxIdleTime' => 'int',
            'layoutTemplate' => 'string',
            'defaultUserBackgroundImage' => 'string',
            'screenBackgroundImage' => 'string',
            'backgroundImage' => 'string',
            'layoutPanes' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\MixLayoutPane[]',
            'userBackgroundImages' => '\HuaweiCloud\SDK\CloudRTC\V2\Model\MixUserBackgroundImage[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roomId  房间id
    * encodeTemplate  输出编码模板名称 - 1920*1080_30_4620：输出流是1080p，帧率30，码率4.62Mbps - 1920*1080_30_3150：输出流是1080p，帧率30，码率3.15Mbps - 1920*1080_15_3460：输出流是1080p，帧率15，码率3.46Mbps - 1920*1080_15_2080：输出流是1080p，帧率15，码率2.08Mbps - 1280*720_30_3420：输出流是720p，帧率30，码率3.42Mbps - 1280*720_30_1710：输出流是720p，帧率30，码率1.71Mbps - 1280*720_15_2260：输出流是720p，帧率15，码率2.26Mbps - 1280*720_15_1130：输出流是720p，帧率15，码率1.13Mbps - 640*480_30_1500：输出流是480p，帧率30，码率1.50Mbps - 640*480_15_500：输出流是480p，帧率15，码率500Kbps - 640*480_30_1000 输出流是480p，帧率30，码率1000Kbps - 480*360_30_490：输出流是360p，帧率30，码率490Kbps - 480*360_15_320：输出流是360p，帧率15，码率320Kbps
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * layoutTemplate  视频布局模板编号，不混视频的时候，不需要带。 - nine_grids_view：九宫格模板（自适应模板） - screen_share_left：主视图在左边的屏幕共享模板（自适应模板） - screen_share_right：主视图在右边的屏幕共享模板（自适应模板） - custom：自定义布局
    * defaultUserBackgroundImage  默认用户背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * screenBackgroundImage  共享屏幕的背景图地址，图片先上传obs，格式s3://bucket/object。  在一大多小的布局场景下，无论大窗是显示非指定用户（屏幕共享人的桌面）还是指定用户的共享桌面，都通过该字段指定背景图。
    * backgroundImage  画布背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * layoutPanes  需要混流的视频列表。若不需要混流视频，则可不传递该参数。  nine_grids_view模板不需要填写本字段。
    * userBackgroundImages  指定用户背景图，优先级大于default_user_background_image
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roomId' => null,
        'encodeTemplate' => null,
        'maxIdleTime' => null,
        'layoutTemplate' => null,
        'defaultUserBackgroundImage' => null,
        'screenBackgroundImage' => null,
        'backgroundImage' => null,
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
    * roomId  房间id
    * encodeTemplate  输出编码模板名称 - 1920*1080_30_4620：输出流是1080p，帧率30，码率4.62Mbps - 1920*1080_30_3150：输出流是1080p，帧率30，码率3.15Mbps - 1920*1080_15_3460：输出流是1080p，帧率15，码率3.46Mbps - 1920*1080_15_2080：输出流是1080p，帧率15，码率2.08Mbps - 1280*720_30_3420：输出流是720p，帧率30，码率3.42Mbps - 1280*720_30_1710：输出流是720p，帧率30，码率1.71Mbps - 1280*720_15_2260：输出流是720p，帧率15，码率2.26Mbps - 1280*720_15_1130：输出流是720p，帧率15，码率1.13Mbps - 640*480_30_1500：输出流是480p，帧率30，码率1.50Mbps - 640*480_15_500：输出流是480p，帧率15，码率500Kbps - 640*480_30_1000 输出流是480p，帧率30，码率1000Kbps - 480*360_30_490：输出流是360p，帧率30，码率490Kbps - 480*360_15_320：输出流是360p，帧率15，码率320Kbps
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * layoutTemplate  视频布局模板编号，不混视频的时候，不需要带。 - nine_grids_view：九宫格模板（自适应模板） - screen_share_left：主视图在左边的屏幕共享模板（自适应模板） - screen_share_right：主视图在右边的屏幕共享模板（自适应模板） - custom：自定义布局
    * defaultUserBackgroundImage  默认用户背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * screenBackgroundImage  共享屏幕的背景图地址，图片先上传obs，格式s3://bucket/object。  在一大多小的布局场景下，无论大窗是显示非指定用户（屏幕共享人的桌面）还是指定用户的共享桌面，都通过该字段指定背景图。
    * backgroundImage  画布背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * layoutPanes  需要混流的视频列表。若不需要混流视频，则可不传递该参数。  nine_grids_view模板不需要填写本字段。
    * userBackgroundImages  指定用户背景图，优先级大于default_user_background_image
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roomId' => 'room_id',
            'encodeTemplate' => 'encode_template',
            'maxIdleTime' => 'max_idle_time',
            'layoutTemplate' => 'layout_template',
            'defaultUserBackgroundImage' => 'default_user_background_image',
            'screenBackgroundImage' => 'screen_background_image',
            'backgroundImage' => 'background_image',
            'layoutPanes' => 'layout_panes',
            'userBackgroundImages' => 'user_background_images'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roomId  房间id
    * encodeTemplate  输出编码模板名称 - 1920*1080_30_4620：输出流是1080p，帧率30，码率4.62Mbps - 1920*1080_30_3150：输出流是1080p，帧率30，码率3.15Mbps - 1920*1080_15_3460：输出流是1080p，帧率15，码率3.46Mbps - 1920*1080_15_2080：输出流是1080p，帧率15，码率2.08Mbps - 1280*720_30_3420：输出流是720p，帧率30，码率3.42Mbps - 1280*720_30_1710：输出流是720p，帧率30，码率1.71Mbps - 1280*720_15_2260：输出流是720p，帧率15，码率2.26Mbps - 1280*720_15_1130：输出流是720p，帧率15，码率1.13Mbps - 640*480_30_1500：输出流是480p，帧率30，码率1.50Mbps - 640*480_15_500：输出流是480p，帧率15，码率500Kbps - 640*480_30_1000 输出流是480p，帧率30，码率1000Kbps - 480*360_30_490：输出流是360p，帧率30，码率490Kbps - 480*360_15_320：输出流是360p，帧率15，码率320Kbps
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * layoutTemplate  视频布局模板编号，不混视频的时候，不需要带。 - nine_grids_view：九宫格模板（自适应模板） - screen_share_left：主视图在左边的屏幕共享模板（自适应模板） - screen_share_right：主视图在右边的屏幕共享模板（自适应模板） - custom：自定义布局
    * defaultUserBackgroundImage  默认用户背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * screenBackgroundImage  共享屏幕的背景图地址，图片先上传obs，格式s3://bucket/object。  在一大多小的布局场景下，无论大窗是显示非指定用户（屏幕共享人的桌面）还是指定用户的共享桌面，都通过该字段指定背景图。
    * backgroundImage  画布背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * layoutPanes  需要混流的视频列表。若不需要混流视频，则可不传递该参数。  nine_grids_view模板不需要填写本字段。
    * userBackgroundImages  指定用户背景图，优先级大于default_user_background_image
    *
    * @var string[]
    */
    protected static $setters = [
            'roomId' => 'setRoomId',
            'encodeTemplate' => 'setEncodeTemplate',
            'maxIdleTime' => 'setMaxIdleTime',
            'layoutTemplate' => 'setLayoutTemplate',
            'defaultUserBackgroundImage' => 'setDefaultUserBackgroundImage',
            'screenBackgroundImage' => 'setScreenBackgroundImage',
            'backgroundImage' => 'setBackgroundImage',
            'layoutPanes' => 'setLayoutPanes',
            'userBackgroundImages' => 'setUserBackgroundImages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roomId  房间id
    * encodeTemplate  输出编码模板名称 - 1920*1080_30_4620：输出流是1080p，帧率30，码率4.62Mbps - 1920*1080_30_3150：输出流是1080p，帧率30，码率3.15Mbps - 1920*1080_15_3460：输出流是1080p，帧率15，码率3.46Mbps - 1920*1080_15_2080：输出流是1080p，帧率15，码率2.08Mbps - 1280*720_30_3420：输出流是720p，帧率30，码率3.42Mbps - 1280*720_30_1710：输出流是720p，帧率30，码率1.71Mbps - 1280*720_15_2260：输出流是720p，帧率15，码率2.26Mbps - 1280*720_15_1130：输出流是720p，帧率15，码率1.13Mbps - 640*480_30_1500：输出流是480p，帧率30，码率1.50Mbps - 640*480_15_500：输出流是480p，帧率15，码率500Kbps - 640*480_30_1000 输出流是480p，帧率30，码率1000Kbps - 480*360_30_490：输出流是360p，帧率30，码率490Kbps - 480*360_15_320：输出流是360p，帧率15，码率320Kbps
    * maxIdleTime  最长空闲频道时间。  取值范围：[5，43200]，默认值为30。  单位：秒。  如果频道内无连麦方的状态持续超过该时间，录制程序会自动退出。退出后，再次调用start请求，会产生新的录制任务。  连麦方指：joiner或者publisher的用户。
    * layoutTemplate  视频布局模板编号，不混视频的时候，不需要带。 - nine_grids_view：九宫格模板（自适应模板） - screen_share_left：主视图在左边的屏幕共享模板（自适应模板） - screen_share_right：主视图在右边的屏幕共享模板（自适应模板） - custom：自定义布局
    * defaultUserBackgroundImage  默认用户背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * screenBackgroundImage  共享屏幕的背景图地址，图片先上传obs，格式s3://bucket/object。  在一大多小的布局场景下，无论大窗是显示非指定用户（屏幕共享人的桌面）还是指定用户的共享桌面，都通过该字段指定背景图。
    * backgroundImage  画布背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    * layoutPanes  需要混流的视频列表。若不需要混流视频，则可不传递该参数。  nine_grids_view模板不需要填写本字段。
    * userBackgroundImages  指定用户背景图，优先级大于default_user_background_image
    *
    * @var string[]
    */
    protected static $getters = [
            'roomId' => 'getRoomId',
            'encodeTemplate' => 'getEncodeTemplate',
            'maxIdleTime' => 'getMaxIdleTime',
            'layoutTemplate' => 'getLayoutTemplate',
            'defaultUserBackgroundImage' => 'getDefaultUserBackgroundImage',
            'screenBackgroundImage' => 'getScreenBackgroundImage',
            'backgroundImage' => 'getBackgroundImage',
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
    const ENCODE_TEMPLATE__19201080_30_4620 = '1920*1080_30_4620';
    const ENCODE_TEMPLATE__19201080_30_3150 = '1920*1080_30_3150';
    const ENCODE_TEMPLATE__19201080_15_3460 = '1920*1080_15_3460';
    const ENCODE_TEMPLATE__19201080_15_2080 = '1920*1080_15_2080';
    const ENCODE_TEMPLATE__1280720_30_3420 = '1280*720_30_3420';
    const ENCODE_TEMPLATE__1280720_30_1710 = '1280*720_30_1710';
    const ENCODE_TEMPLATE__1280720_15_2260 = '1280*720_15_2260';
    const ENCODE_TEMPLATE__1280720_15_1130 = '1280*720_15_1130';
    const ENCODE_TEMPLATE__640480_30_1000 = '640*480_30_1000';
    const ENCODE_TEMPLATE__640480_30_1500 = '640*480_30_1500';
    const ENCODE_TEMPLATE__640480_15_500 = '640*480_15_500';
    const ENCODE_TEMPLATE__480360_30_490 = '480*360_30_490';
    const ENCODE_TEMPLATE__480360_15_320 = '480*360_15_320';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEncodeTemplateAllowableValues()
    {
        return [
            self::ENCODE_TEMPLATE__19201080_30_4620,
            self::ENCODE_TEMPLATE__19201080_30_3150,
            self::ENCODE_TEMPLATE__19201080_15_3460,
            self::ENCODE_TEMPLATE__19201080_15_2080,
            self::ENCODE_TEMPLATE__1280720_30_3420,
            self::ENCODE_TEMPLATE__1280720_30_1710,
            self::ENCODE_TEMPLATE__1280720_15_2260,
            self::ENCODE_TEMPLATE__1280720_15_1130,
            self::ENCODE_TEMPLATE__640480_30_1000,
            self::ENCODE_TEMPLATE__640480_30_1500,
            self::ENCODE_TEMPLATE__640480_15_500,
            self::ENCODE_TEMPLATE__480360_30_490,
            self::ENCODE_TEMPLATE__480360_15_320,
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
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['encodeTemplate'] = isset($data['encodeTemplate']) ? $data['encodeTemplate'] : null;
        $this->container['maxIdleTime'] = isset($data['maxIdleTime']) ? $data['maxIdleTime'] : null;
        $this->container['layoutTemplate'] = isset($data['layoutTemplate']) ? $data['layoutTemplate'] : null;
        $this->container['defaultUserBackgroundImage'] = isset($data['defaultUserBackgroundImage']) ? $data['defaultUserBackgroundImage'] : null;
        $this->container['screenBackgroundImage'] = isset($data['screenBackgroundImage']) ? $data['screenBackgroundImage'] : null;
        $this->container['backgroundImage'] = isset($data['backgroundImage']) ? $data['backgroundImage'] : null;
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
        if ($this->container['roomId'] === null) {
            $invalidProperties[] = "'roomId' can't be null";
        }
            if ((mb_strlen($this->container['roomId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['roomId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['encodeTemplate'] === null) {
            $invalidProperties[] = "'encodeTemplate' can't be null";
        }
            $allowedValues = $this->getEncodeTemplateAllowableValues();
                if (!is_null($this->container['encodeTemplate']) && !in_array($this->container['encodeTemplate'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'encodeTemplate', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['encodeTemplate']) > 128)) {
                $invalidProperties[] = "invalid value for 'encodeTemplate', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['encodeTemplate']) < 1)) {
                $invalidProperties[] = "invalid value for 'encodeTemplate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['maxIdleTime']) && ($this->container['maxIdleTime'] > 43200)) {
                $invalidProperties[] = "invalid value for 'maxIdleTime', must be smaller than or equal to 43200.";
            }
            if (!is_null($this->container['maxIdleTime']) && ($this->container['maxIdleTime'] < 5)) {
                $invalidProperties[] = "invalid value for 'maxIdleTime', must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['layoutTemplate']) && (mb_strlen($this->container['layoutTemplate']) > 128)) {
                $invalidProperties[] = "invalid value for 'layoutTemplate', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['layoutTemplate']) && (mb_strlen($this->container['layoutTemplate']) < 0)) {
                $invalidProperties[] = "invalid value for 'layoutTemplate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['defaultUserBackgroundImage']) && (mb_strlen($this->container['defaultUserBackgroundImage']) > 128)) {
                $invalidProperties[] = "invalid value for 'defaultUserBackgroundImage', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['defaultUserBackgroundImage']) && (mb_strlen($this->container['defaultUserBackgroundImage']) < 1)) {
                $invalidProperties[] = "invalid value for 'defaultUserBackgroundImage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['screenBackgroundImage']) && (mb_strlen($this->container['screenBackgroundImage']) > 128)) {
                $invalidProperties[] = "invalid value for 'screenBackgroundImage', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['screenBackgroundImage']) && (mb_strlen($this->container['screenBackgroundImage']) < 1)) {
                $invalidProperties[] = "invalid value for 'screenBackgroundImage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['backgroundImage']) && (mb_strlen($this->container['backgroundImage']) > 128)) {
                $invalidProperties[] = "invalid value for 'backgroundImage', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['backgroundImage']) && (mb_strlen($this->container['backgroundImage']) < 1)) {
                $invalidProperties[] = "invalid value for 'backgroundImage', the character length must be bigger than or equal to 1.";
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
    * Gets roomId
    *  房间id
    *
    * @return string
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string $roomId 房间id
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets encodeTemplate
    *  输出编码模板名称 - 1920*1080_30_4620：输出流是1080p，帧率30，码率4.62Mbps - 1920*1080_30_3150：输出流是1080p，帧率30，码率3.15Mbps - 1920*1080_15_3460：输出流是1080p，帧率15，码率3.46Mbps - 1920*1080_15_2080：输出流是1080p，帧率15，码率2.08Mbps - 1280*720_30_3420：输出流是720p，帧率30，码率3.42Mbps - 1280*720_30_1710：输出流是720p，帧率30，码率1.71Mbps - 1280*720_15_2260：输出流是720p，帧率15，码率2.26Mbps - 1280*720_15_1130：输出流是720p，帧率15，码率1.13Mbps - 640*480_30_1500：输出流是480p，帧率30，码率1.50Mbps - 640*480_15_500：输出流是480p，帧率15，码率500Kbps - 640*480_30_1000 输出流是480p，帧率30，码率1000Kbps - 480*360_30_490：输出流是360p，帧率30，码率490Kbps - 480*360_15_320：输出流是360p，帧率15，码率320Kbps
    *
    * @return string
    */
    public function getEncodeTemplate()
    {
        return $this->container['encodeTemplate'];
    }

    /**
    * Sets encodeTemplate
    *
    * @param string $encodeTemplate 输出编码模板名称 - 1920*1080_30_4620：输出流是1080p，帧率30，码率4.62Mbps - 1920*1080_30_3150：输出流是1080p，帧率30，码率3.15Mbps - 1920*1080_15_3460：输出流是1080p，帧率15，码率3.46Mbps - 1920*1080_15_2080：输出流是1080p，帧率15，码率2.08Mbps - 1280*720_30_3420：输出流是720p，帧率30，码率3.42Mbps - 1280*720_30_1710：输出流是720p，帧率30，码率1.71Mbps - 1280*720_15_2260：输出流是720p，帧率15，码率2.26Mbps - 1280*720_15_1130：输出流是720p，帧率15，码率1.13Mbps - 640*480_30_1500：输出流是480p，帧率30，码率1.50Mbps - 640*480_15_500：输出流是480p，帧率15，码率500Kbps - 640*480_30_1000 输出流是480p，帧率30，码率1000Kbps - 480*360_30_490：输出流是360p，帧率30，码率490Kbps - 480*360_15_320：输出流是360p，帧率15，码率320Kbps
    *
    * @return $this
    */
    public function setEncodeTemplate($encodeTemplate)
    {
        $this->container['encodeTemplate'] = $encodeTemplate;
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
    * Gets layoutTemplate
    *  视频布局模板编号，不混视频的时候，不需要带。 - nine_grids_view：九宫格模板（自适应模板） - screen_share_left：主视图在左边的屏幕共享模板（自适应模板） - screen_share_right：主视图在右边的屏幕共享模板（自适应模板） - custom：自定义布局
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
    * @param string|null $layoutTemplate 视频布局模板编号，不混视频的时候，不需要带。 - nine_grids_view：九宫格模板（自适应模板） - screen_share_left：主视图在左边的屏幕共享模板（自适应模板） - screen_share_right：主视图在右边的屏幕共享模板（自适应模板） - custom：自定义布局
    *
    * @return $this
    */
    public function setLayoutTemplate($layoutTemplate)
    {
        $this->container['layoutTemplate'] = $layoutTemplate;
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
    * Gets backgroundImage
    *  画布背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
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
    * @param string|null $backgroundImage 画布背景图地址，图片先上传obs，格式s3://bucket/object。默认使用等比缩放裁剪，保证铺满。
    *
    * @return $this
    */
    public function setBackgroundImage($backgroundImage)
    {
        $this->container['backgroundImage'] = $backgroundImage;
        return $this;
    }

    /**
    * Gets layoutPanes
    *  需要混流的视频列表。若不需要混流视频，则可不传递该参数。  nine_grids_view模板不需要填写本字段。
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
    * @param \HuaweiCloud\SDK\CloudRTC\V2\Model\MixLayoutPane[]|null $layoutPanes 需要混流的视频列表。若不需要混流视频，则可不传递该参数。  nine_grids_view模板不需要填写本字段。
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

