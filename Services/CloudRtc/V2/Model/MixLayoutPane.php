<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MixLayoutPane implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MixLayoutPane';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  窗口id，从1开始编号
    * userId  加入房间的用户id
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * x  坐标x，归一化百分比，画布上该画面左上角的横坐标的相对值，范围是 [0.0,1.0]。从左到右布局，0.0在最左端，1.0在最右端，小数取值范围在float内，自定义布局场景下填写本字段。
    * y  坐标y，归一化百分比，画布上该画面左上角的纵坐标的相对值，范围是 [0.0,1.0]。从上到下布局，0.0在最上端，1.0在最下端，小数取值范围在float内，自定义布局场景下填写本字段。
    * width  窗格宽，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    * height  窗格高，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    * zorder  叠放顺序，0为最底层，1层在0层之上，以此类推，最大支持25层，自定义布局场景下填写本字段。
    * cropMode  裁剪模式，自定义布局场景下填写本字段，支持两种模式：   - KEEP_RATIO_PADDING ：保持比例留边。   - KEEP_RATIO_CROP ：保持比例裁剪。
    * fillingPolicy  填充策略，仅限屏幕共享模板(包括screen_share_right、screen_share_left)场景下填写本字段，支持两种模式：   - FIXED_USER ：固定用户填充。   - SHARED_SCREEN ：共享屏幕填充。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'userId' => 'string',
            'videoType' => 'string',
            'x' => 'float',
            'y' => 'float',
            'width' => 'float',
            'height' => 'float',
            'zorder' => 'int',
            'cropMode' => 'string',
            'fillingPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  窗口id，从1开始编号
    * userId  加入房间的用户id
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * x  坐标x，归一化百分比，画布上该画面左上角的横坐标的相对值，范围是 [0.0,1.0]。从左到右布局，0.0在最左端，1.0在最右端，小数取值范围在float内，自定义布局场景下填写本字段。
    * y  坐标y，归一化百分比，画布上该画面左上角的纵坐标的相对值，范围是 [0.0,1.0]。从上到下布局，0.0在最上端，1.0在最下端，小数取值范围在float内，自定义布局场景下填写本字段。
    * width  窗格宽，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    * height  窗格高，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    * zorder  叠放顺序，0为最底层，1层在0层之上，以此类推，最大支持25层，自定义布局场景下填写本字段。
    * cropMode  裁剪模式，自定义布局场景下填写本字段，支持两种模式：   - KEEP_RATIO_PADDING ：保持比例留边。   - KEEP_RATIO_CROP ：保持比例裁剪。
    * fillingPolicy  填充策略，仅限屏幕共享模板(包括screen_share_right、screen_share_left)场景下填写本字段，支持两种模式：   - FIXED_USER ：固定用户填充。   - SHARED_SCREEN ：共享屏幕填充。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'userId' => null,
        'videoType' => null,
        'x' => 'float',
        'y' => 'float',
        'width' => 'float',
        'height' => 'float',
        'zorder' => 'int32',
        'cropMode' => null,
        'fillingPolicy' => null
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
    * id  窗口id，从1开始编号
    * userId  加入房间的用户id
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * x  坐标x，归一化百分比，画布上该画面左上角的横坐标的相对值，范围是 [0.0,1.0]。从左到右布局，0.0在最左端，1.0在最右端，小数取值范围在float内，自定义布局场景下填写本字段。
    * y  坐标y，归一化百分比，画布上该画面左上角的纵坐标的相对值，范围是 [0.0,1.0]。从上到下布局，0.0在最上端，1.0在最下端，小数取值范围在float内，自定义布局场景下填写本字段。
    * width  窗格宽，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    * height  窗格高，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    * zorder  叠放顺序，0为最底层，1层在0层之上，以此类推，最大支持25层，自定义布局场景下填写本字段。
    * cropMode  裁剪模式，自定义布局场景下填写本字段，支持两种模式：   - KEEP_RATIO_PADDING ：保持比例留边。   - KEEP_RATIO_CROP ：保持比例裁剪。
    * fillingPolicy  填充策略，仅限屏幕共享模板(包括screen_share_right、screen_share_left)场景下填写本字段，支持两种模式：   - FIXED_USER ：固定用户填充。   - SHARED_SCREEN ：共享屏幕填充。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'userId' => 'user_id',
            'videoType' => 'video_type',
            'x' => 'x',
            'y' => 'y',
            'width' => 'width',
            'height' => 'height',
            'zorder' => 'zorder',
            'cropMode' => 'crop_mode',
            'fillingPolicy' => 'filling_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  窗口id，从1开始编号
    * userId  加入房间的用户id
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * x  坐标x，归一化百分比，画布上该画面左上角的横坐标的相对值，范围是 [0.0,1.0]。从左到右布局，0.0在最左端，1.0在最右端，小数取值范围在float内，自定义布局场景下填写本字段。
    * y  坐标y，归一化百分比，画布上该画面左上角的纵坐标的相对值，范围是 [0.0,1.0]。从上到下布局，0.0在最上端，1.0在最下端，小数取值范围在float内，自定义布局场景下填写本字段。
    * width  窗格宽，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    * height  窗格高，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    * zorder  叠放顺序，0为最底层，1层在0层之上，以此类推，最大支持25层，自定义布局场景下填写本字段。
    * cropMode  裁剪模式，自定义布局场景下填写本字段，支持两种模式：   - KEEP_RATIO_PADDING ：保持比例留边。   - KEEP_RATIO_CROP ：保持比例裁剪。
    * fillingPolicy  填充策略，仅限屏幕共享模板(包括screen_share_right、screen_share_left)场景下填写本字段，支持两种模式：   - FIXED_USER ：固定用户填充。   - SHARED_SCREEN ：共享屏幕填充。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'userId' => 'setUserId',
            'videoType' => 'setVideoType',
            'x' => 'setX',
            'y' => 'setY',
            'width' => 'setWidth',
            'height' => 'setHeight',
            'zorder' => 'setZorder',
            'cropMode' => 'setCropMode',
            'fillingPolicy' => 'setFillingPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  窗口id，从1开始编号
    * userId  加入房间的用户id
    * videoType  标识视频流的类型，可选摄像头流或者屏幕分享流。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    * x  坐标x，归一化百分比，画布上该画面左上角的横坐标的相对值，范围是 [0.0,1.0]。从左到右布局，0.0在最左端，1.0在最右端，小数取值范围在float内，自定义布局场景下填写本字段。
    * y  坐标y，归一化百分比，画布上该画面左上角的纵坐标的相对值，范围是 [0.0,1.0]。从上到下布局，0.0在最上端，1.0在最下端，小数取值范围在float内，自定义布局场景下填写本字段。
    * width  窗格宽，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    * height  窗格高，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    * zorder  叠放顺序，0为最底层，1层在0层之上，以此类推，最大支持25层，自定义布局场景下填写本字段。
    * cropMode  裁剪模式，自定义布局场景下填写本字段，支持两种模式：   - KEEP_RATIO_PADDING ：保持比例留边。   - KEEP_RATIO_CROP ：保持比例裁剪。
    * fillingPolicy  填充策略，仅限屏幕共享模板(包括screen_share_right、screen_share_left)场景下填写本字段，支持两种模式：   - FIXED_USER ：固定用户填充。   - SHARED_SCREEN ：共享屏幕填充。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'userId' => 'getUserId',
            'videoType' => 'getVideoType',
            'x' => 'getX',
            'y' => 'getY',
            'width' => 'getWidth',
            'height' => 'getHeight',
            'zorder' => 'getZorder',
            'cropMode' => 'getCropMode',
            'fillingPolicy' => 'getFillingPolicy'
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
    const VIDEO_TYPE_CAMERASTREAM = 'CAMERASTREAM';
    const VIDEO_TYPE_SCREENSTREAM = 'SCREENSTREAM';
    const CROP_MODE_KEEP_RATIO_PADDING = 'KEEP_RATIO_PADDING';
    const CROP_MODE_KEEP_RATIO_CROP = 'KEEP_RATIO_CROP';
    const FILLING_POLICY_FIXED_USER = 'FIXED_USER';
    const FILLING_POLICY_SHARED_SCREEN = 'SHARED_SCREEN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVideoTypeAllowableValues()
    {
        return [
            self::VIDEO_TYPE_CAMERASTREAM,
            self::VIDEO_TYPE_SCREENSTREAM,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCropModeAllowableValues()
    {
        return [
            self::CROP_MODE_KEEP_RATIO_PADDING,
            self::CROP_MODE_KEEP_RATIO_CROP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFillingPolicyAllowableValues()
    {
        return [
            self::FILLING_POLICY_FIXED_USER,
            self::FILLING_POLICY_SHARED_SCREEN,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['videoType'] = isset($data['videoType']) ? $data['videoType'] : 'CAMERASTREAM';
        $this->container['x'] = isset($data['x']) ? $data['x'] : null;
        $this->container['y'] = isset($data['y']) ? $data['y'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['zorder'] = isset($data['zorder']) ? $data['zorder'] : null;
        $this->container['cropMode'] = isset($data['cropMode']) ? $data['cropMode'] : 'KEEP_RATIO_PADDING';
        $this->container['fillingPolicy'] = isset($data['fillingPolicy']) ? $data['fillingPolicy'] : 'SHARED_SCREEN';
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 25)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 25.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) > 64)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['userId']) && (mb_strlen($this->container['userId']) < 0)) {
                $invalidProperties[] = "invalid value for 'userId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getVideoTypeAllowableValues();
                if (!is_null($this->container['videoType']) && !in_array($this->container['videoType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'videoType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['videoType']) && (mb_strlen($this->container['videoType']) > 64)) {
                $invalidProperties[] = "invalid value for 'videoType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['videoType']) && (mb_strlen($this->container['videoType']) < 0)) {
                $invalidProperties[] = "invalid value for 'videoType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['x']) && ($this->container['x'] > 1)) {
                $invalidProperties[] = "invalid value for 'x', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['x']) && ($this->container['x'] < 0)) {
                $invalidProperties[] = "invalid value for 'x', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['y']) && ($this->container['y'] > 1)) {
                $invalidProperties[] = "invalid value for 'y', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['y']) && ($this->container['y'] < 0)) {
                $invalidProperties[] = "invalid value for 'y', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] > 1)) {
                $invalidProperties[] = "invalid value for 'width', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['width']) && ($this->container['width'] < 0)) {
                $invalidProperties[] = "invalid value for 'width', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] > 1)) {
                $invalidProperties[] = "invalid value for 'height', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['height']) && ($this->container['height'] < 0)) {
                $invalidProperties[] = "invalid value for 'height', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['zorder']) && ($this->container['zorder'] > 24)) {
                $invalidProperties[] = "invalid value for 'zorder', must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['zorder']) && ($this->container['zorder'] < 0)) {
                $invalidProperties[] = "invalid value for 'zorder', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getCropModeAllowableValues();
                if (!is_null($this->container['cropMode']) && !in_array($this->container['cropMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'cropMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFillingPolicyAllowableValues();
                if (!is_null($this->container['fillingPolicy']) && !in_array($this->container['fillingPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'fillingPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  窗口id，从1开始编号
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 窗口id，从1开始编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets userId
    *  加入房间的用户id
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 加入房间的用户id
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets videoType
    *  标识视频流的类型，可选摄像头流或者屏幕分享流。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    *
    * @return string|null
    */
    public function getVideoType()
    {
        return $this->container['videoType'];
    }

    /**
    * Sets videoType
    *
    * @param string|null $videoType 标识视频流的类型，可选摄像头流或者屏幕分享流。  - CAMERASTREAM：摄像头视频流 - SCREENSTREAM：屏幕分享视频流  默认为CAMERASTREAM。
    *
    * @return $this
    */
    public function setVideoType($videoType)
    {
        $this->container['videoType'] = $videoType;
        return $this;
    }

    /**
    * Gets x
    *  坐标x，归一化百分比，画布上该画面左上角的横坐标的相对值，范围是 [0.0,1.0]。从左到右布局，0.0在最左端，1.0在最右端，小数取值范围在float内，自定义布局场景下填写本字段。
    *
    * @return float|null
    */
    public function getX()
    {
        return $this->container['x'];
    }

    /**
    * Sets x
    *
    * @param float|null $x 坐标x，归一化百分比，画布上该画面左上角的横坐标的相对值，范围是 [0.0,1.0]。从左到右布局，0.0在最左端，1.0在最右端，小数取值范围在float内，自定义布局场景下填写本字段。
    *
    * @return $this
    */
    public function setX($x)
    {
        $this->container['x'] = $x;
        return $this;
    }

    /**
    * Gets y
    *  坐标y，归一化百分比，画布上该画面左上角的纵坐标的相对值，范围是 [0.0,1.0]。从上到下布局，0.0在最上端，1.0在最下端，小数取值范围在float内，自定义布局场景下填写本字段。
    *
    * @return float|null
    */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
    * Sets y
    *
    * @param float|null $y 坐标y，归一化百分比，画布上该画面左上角的纵坐标的相对值，范围是 [0.0,1.0]。从上到下布局，0.0在最上端，1.0在最下端，小数取值范围在float内，自定义布局场景下填写本字段。
    *
    * @return $this
    */
    public function setY($y)
    {
        $this->container['y'] = $y;
        return $this;
    }

    /**
    * Gets width
    *  窗格宽，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    *
    * @return float|null
    */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
    * Sets width
    *
    * @param float|null $width 窗格宽，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    *
    * @return $this
    */
    public function setWidth($width)
    {
        $this->container['width'] = $width;
        return $this;
    }

    /**
    * Gets height
    *  窗格高，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    *
    * @return float|null
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param float|null $height 窗格高，归一化百分比，小数取值范围在float内，自定义布局场景下填写本字段。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets zorder
    *  叠放顺序，0为最底层，1层在0层之上，以此类推，最大支持25层，自定义布局场景下填写本字段。
    *
    * @return int|null
    */
    public function getZorder()
    {
        return $this->container['zorder'];
    }

    /**
    * Sets zorder
    *
    * @param int|null $zorder 叠放顺序，0为最底层，1层在0层之上，以此类推，最大支持25层，自定义布局场景下填写本字段。
    *
    * @return $this
    */
    public function setZorder($zorder)
    {
        $this->container['zorder'] = $zorder;
        return $this;
    }

    /**
    * Gets cropMode
    *  裁剪模式，自定义布局场景下填写本字段，支持两种模式：   - KEEP_RATIO_PADDING ：保持比例留边。   - KEEP_RATIO_CROP ：保持比例裁剪。
    *
    * @return string|null
    */
    public function getCropMode()
    {
        return $this->container['cropMode'];
    }

    /**
    * Sets cropMode
    *
    * @param string|null $cropMode 裁剪模式，自定义布局场景下填写本字段，支持两种模式：   - KEEP_RATIO_PADDING ：保持比例留边。   - KEEP_RATIO_CROP ：保持比例裁剪。
    *
    * @return $this
    */
    public function setCropMode($cropMode)
    {
        $this->container['cropMode'] = $cropMode;
        return $this;
    }

    /**
    * Gets fillingPolicy
    *  填充策略，仅限屏幕共享模板(包括screen_share_right、screen_share_left)场景下填写本字段，支持两种模式：   - FIXED_USER ：固定用户填充。   - SHARED_SCREEN ：共享屏幕填充。
    *
    * @return string|null
    */
    public function getFillingPolicy()
    {
        return $this->container['fillingPolicy'];
    }

    /**
    * Sets fillingPolicy
    *
    * @param string|null $fillingPolicy 填充策略，仅限屏幕共享模板(包括screen_share_right、screen_share_left)场景下填写本字段，支持两种模式：   - FIXED_USER ：固定用户填充。   - SHARED_SCREEN ：共享屏幕填充。
    *
    * @return $this
    */
    public function setFillingPolicy($fillingPolicy)
    {
        $this->container['fillingPolicy'] = $fillingPolicy;
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

