<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateStartedConfigReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateStartedConfigReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lockSharing  锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * allowUnmuteByOneself  是否允许自己解除静音，默认为允许 - 0: 不允许 - 1: 允许
    * chatPermission  会议聊天权限 1.全员禁止 2.仅允许私聊 3.仅允许公开聊天 4.允许自由聊天
    * audienceCallInRestriction  网络研讨会观众允许呼入的范围 0：所有用户  2：企业内用户和被邀请用户
    * clientRecMode  客户端本地录制权限的范围，默认为仅主持人支持本地录制 - 0: 所有用户 - 1：全部人可录制 - 2：部分人可录制
    * allowOpenCamera  与会人自行开启摄像头 0:禁止 1:允许
    * allowRename  是否允许与会人改名 0:不允许 1:允许
    * labelPermission  标注权限 0:所有人可标注 1:仅共享人可标注
    * freeShare  抢共享权限设置 0:仅主持人/联席 1:所有人可抢共享
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lockSharing' => 'int',
            'callInRestriction' => 'int',
            'allowUnmuteByOneself' => 'int',
            'chatPermission' => 'int',
            'audienceCallInRestriction' => 'int',
            'clientRecMode' => 'int',
            'allowOpenCamera' => 'int',
            'allowRename' => 'int',
            'labelPermission' => 'int',
            'freeShare' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lockSharing  锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * allowUnmuteByOneself  是否允许自己解除静音，默认为允许 - 0: 不允许 - 1: 允许
    * chatPermission  会议聊天权限 1.全员禁止 2.仅允许私聊 3.仅允许公开聊天 4.允许自由聊天
    * audienceCallInRestriction  网络研讨会观众允许呼入的范围 0：所有用户  2：企业内用户和被邀请用户
    * clientRecMode  客户端本地录制权限的范围，默认为仅主持人支持本地录制 - 0: 所有用户 - 1：全部人可录制 - 2：部分人可录制
    * allowOpenCamera  与会人自行开启摄像头 0:禁止 1:允许
    * allowRename  是否允许与会人改名 0:不允许 1:允许
    * labelPermission  标注权限 0:所有人可标注 1:仅共享人可标注
    * freeShare  抢共享权限设置 0:仅主持人/联席 1:所有人可抢共享
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lockSharing' => 'int32',
        'callInRestriction' => 'int32',
        'allowUnmuteByOneself' => 'int32',
        'chatPermission' => 'int32',
        'audienceCallInRestriction' => 'int32',
        'clientRecMode' => 'int32',
        'allowOpenCamera' => 'int32',
        'allowRename' => 'int32',
        'labelPermission' => 'int32',
        'freeShare' => 'int32'
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
    * lockSharing  锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * allowUnmuteByOneself  是否允许自己解除静音，默认为允许 - 0: 不允许 - 1: 允许
    * chatPermission  会议聊天权限 1.全员禁止 2.仅允许私聊 3.仅允许公开聊天 4.允许自由聊天
    * audienceCallInRestriction  网络研讨会观众允许呼入的范围 0：所有用户  2：企业内用户和被邀请用户
    * clientRecMode  客户端本地录制权限的范围，默认为仅主持人支持本地录制 - 0: 所有用户 - 1：全部人可录制 - 2：部分人可录制
    * allowOpenCamera  与会人自行开启摄像头 0:禁止 1:允许
    * allowRename  是否允许与会人改名 0:不允许 1:允许
    * labelPermission  标注权限 0:所有人可标注 1:仅共享人可标注
    * freeShare  抢共享权限设置 0:仅主持人/联席 1:所有人可抢共享
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lockSharing' => 'lockSharing',
            'callInRestriction' => 'callInRestriction',
            'allowUnmuteByOneself' => 'allowUnmuteByOneself',
            'chatPermission' => 'chatPermission',
            'audienceCallInRestriction' => 'audienceCallInRestriction',
            'clientRecMode' => 'clientRecMode',
            'allowOpenCamera' => 'allowOpenCamera',
            'allowRename' => 'allowRename',
            'labelPermission' => 'labelPermission',
            'freeShare' => 'freeShare'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lockSharing  锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * allowUnmuteByOneself  是否允许自己解除静音，默认为允许 - 0: 不允许 - 1: 允许
    * chatPermission  会议聊天权限 1.全员禁止 2.仅允许私聊 3.仅允许公开聊天 4.允许自由聊天
    * audienceCallInRestriction  网络研讨会观众允许呼入的范围 0：所有用户  2：企业内用户和被邀请用户
    * clientRecMode  客户端本地录制权限的范围，默认为仅主持人支持本地录制 - 0: 所有用户 - 1：全部人可录制 - 2：部分人可录制
    * allowOpenCamera  与会人自行开启摄像头 0:禁止 1:允许
    * allowRename  是否允许与会人改名 0:不允许 1:允许
    * labelPermission  标注权限 0:所有人可标注 1:仅共享人可标注
    * freeShare  抢共享权限设置 0:仅主持人/联席 1:所有人可抢共享
    *
    * @var string[]
    */
    protected static $setters = [
            'lockSharing' => 'setLockSharing',
            'callInRestriction' => 'setCallInRestriction',
            'allowUnmuteByOneself' => 'setAllowUnmuteByOneself',
            'chatPermission' => 'setChatPermission',
            'audienceCallInRestriction' => 'setAudienceCallInRestriction',
            'clientRecMode' => 'setClientRecMode',
            'allowOpenCamera' => 'setAllowOpenCamera',
            'allowRename' => 'setAllowRename',
            'labelPermission' => 'setLabelPermission',
            'freeShare' => 'setFreeShare'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lockSharing  锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    * callInRestriction  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    * allowUnmuteByOneself  是否允许自己解除静音，默认为允许 - 0: 不允许 - 1: 允许
    * chatPermission  会议聊天权限 1.全员禁止 2.仅允许私聊 3.仅允许公开聊天 4.允许自由聊天
    * audienceCallInRestriction  网络研讨会观众允许呼入的范围 0：所有用户  2：企业内用户和被邀请用户
    * clientRecMode  客户端本地录制权限的范围，默认为仅主持人支持本地录制 - 0: 所有用户 - 1：全部人可录制 - 2：部分人可录制
    * allowOpenCamera  与会人自行开启摄像头 0:禁止 1:允许
    * allowRename  是否允许与会人改名 0:不允许 1:允许
    * labelPermission  标注权限 0:所有人可标注 1:仅共享人可标注
    * freeShare  抢共享权限设置 0:仅主持人/联席 1:所有人可抢共享
    *
    * @var string[]
    */
    protected static $getters = [
            'lockSharing' => 'getLockSharing',
            'callInRestriction' => 'getCallInRestriction',
            'allowUnmuteByOneself' => 'getAllowUnmuteByOneself',
            'chatPermission' => 'getChatPermission',
            'audienceCallInRestriction' => 'getAudienceCallInRestriction',
            'clientRecMode' => 'getClientRecMode',
            'allowOpenCamera' => 'getAllowOpenCamera',
            'allowRename' => 'getAllowRename',
            'labelPermission' => 'getLabelPermission',
            'freeShare' => 'getFreeShare'
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
        $this->container['lockSharing'] = isset($data['lockSharing']) ? $data['lockSharing'] : null;
        $this->container['callInRestriction'] = isset($data['callInRestriction']) ? $data['callInRestriction'] : null;
        $this->container['allowUnmuteByOneself'] = isset($data['allowUnmuteByOneself']) ? $data['allowUnmuteByOneself'] : null;
        $this->container['chatPermission'] = isset($data['chatPermission']) ? $data['chatPermission'] : null;
        $this->container['audienceCallInRestriction'] = isset($data['audienceCallInRestriction']) ? $data['audienceCallInRestriction'] : null;
        $this->container['clientRecMode'] = isset($data['clientRecMode']) ? $data['clientRecMode'] : null;
        $this->container['allowOpenCamera'] = isset($data['allowOpenCamera']) ? $data['allowOpenCamera'] : null;
        $this->container['allowRename'] = isset($data['allowRename']) ? $data['allowRename'] : null;
        $this->container['labelPermission'] = isset($data['labelPermission']) ? $data['labelPermission'] : null;
        $this->container['freeShare'] = isset($data['freeShare']) ? $data['freeShare'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['lockSharing']) && ($this->container['lockSharing'] > 1)) {
                $invalidProperties[] = "invalid value for 'lockSharing', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['lockSharing']) && ($this->container['lockSharing'] < 0)) {
                $invalidProperties[] = "invalid value for 'lockSharing', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['callInRestriction']) && ($this->container['callInRestriction'] > 3)) {
                $invalidProperties[] = "invalid value for 'callInRestriction', must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['callInRestriction']) && ($this->container['callInRestriction'] < 0)) {
                $invalidProperties[] = "invalid value for 'callInRestriction', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['allowUnmuteByOneself']) && ($this->container['allowUnmuteByOneself'] > 1)) {
                $invalidProperties[] = "invalid value for 'allowUnmuteByOneself', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['allowUnmuteByOneself']) && ($this->container['allowUnmuteByOneself'] < 0)) {
                $invalidProperties[] = "invalid value for 'allowUnmuteByOneself', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chatPermission']) && ($this->container['chatPermission'] > 4)) {
                $invalidProperties[] = "invalid value for 'chatPermission', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['chatPermission']) && ($this->container['chatPermission'] < 1)) {
                $invalidProperties[] = "invalid value for 'chatPermission', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['audienceCallInRestriction']) && ($this->container['audienceCallInRestriction'] > 2)) {
                $invalidProperties[] = "invalid value for 'audienceCallInRestriction', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['audienceCallInRestriction']) && ($this->container['audienceCallInRestriction'] < 0)) {
                $invalidProperties[] = "invalid value for 'audienceCallInRestriction', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clientRecMode']) && ($this->container['clientRecMode'] > 2)) {
                $invalidProperties[] = "invalid value for 'clientRecMode', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['clientRecMode']) && ($this->container['clientRecMode'] < 0)) {
                $invalidProperties[] = "invalid value for 'clientRecMode', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['allowOpenCamera']) && ($this->container['allowOpenCamera'] > 1)) {
                $invalidProperties[] = "invalid value for 'allowOpenCamera', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['allowOpenCamera']) && ($this->container['allowOpenCamera'] < 0)) {
                $invalidProperties[] = "invalid value for 'allowOpenCamera', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['allowRename']) && ($this->container['allowRename'] > 1)) {
                $invalidProperties[] = "invalid value for 'allowRename', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['allowRename']) && ($this->container['allowRename'] < 0)) {
                $invalidProperties[] = "invalid value for 'allowRename', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['labelPermission']) && ($this->container['labelPermission'] > 1)) {
                $invalidProperties[] = "invalid value for 'labelPermission', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['labelPermission']) && ($this->container['labelPermission'] < 0)) {
                $invalidProperties[] = "invalid value for 'labelPermission', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['freeShare']) && ($this->container['freeShare'] > 1)) {
                $invalidProperties[] = "invalid value for 'freeShare', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['freeShare']) && ($this->container['freeShare'] < 0)) {
                $invalidProperties[] = "invalid value for 'freeShare', must be bigger than or equal to 0.";
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
    * Gets lockSharing
    *  锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    *
    * @return int|null
    */
    public function getLockSharing()
    {
        return $this->container['lockSharing'];
    }

    /**
    * Sets lockSharing
    *
    * @param int|null $lockSharing 锁定共享标志位。 * 0: 不锁定 * 1: 锁定
    *
    * @return $this
    */
    public function setLockSharing($lockSharing)
    {
        $this->container['lockSharing'] = $lockSharing;
        return $this;
    }

    /**
    * Gets callInRestriction
    *  允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    *
    * @return int|null
    */
    public function getCallInRestriction()
    {
        return $this->container['callInRestriction'];
    }

    /**
    * Sets callInRestriction
    *
    * @param int|null $callInRestriction 允许加入会议的范围。 - 0: 所有用户 - 2: 企业内用户 - 3: 被邀请用户
    *
    * @return $this
    */
    public function setCallInRestriction($callInRestriction)
    {
        $this->container['callInRestriction'] = $callInRestriction;
        return $this;
    }

    /**
    * Gets allowUnmuteByOneself
    *  是否允许自己解除静音，默认为允许 - 0: 不允许 - 1: 允许
    *
    * @return int|null
    */
    public function getAllowUnmuteByOneself()
    {
        return $this->container['allowUnmuteByOneself'];
    }

    /**
    * Sets allowUnmuteByOneself
    *
    * @param int|null $allowUnmuteByOneself 是否允许自己解除静音，默认为允许 - 0: 不允许 - 1: 允许
    *
    * @return $this
    */
    public function setAllowUnmuteByOneself($allowUnmuteByOneself)
    {
        $this->container['allowUnmuteByOneself'] = $allowUnmuteByOneself;
        return $this;
    }

    /**
    * Gets chatPermission
    *  会议聊天权限 1.全员禁止 2.仅允许私聊 3.仅允许公开聊天 4.允许自由聊天
    *
    * @return int|null
    */
    public function getChatPermission()
    {
        return $this->container['chatPermission'];
    }

    /**
    * Sets chatPermission
    *
    * @param int|null $chatPermission 会议聊天权限 1.全员禁止 2.仅允许私聊 3.仅允许公开聊天 4.允许自由聊天
    *
    * @return $this
    */
    public function setChatPermission($chatPermission)
    {
        $this->container['chatPermission'] = $chatPermission;
        return $this;
    }

    /**
    * Gets audienceCallInRestriction
    *  网络研讨会观众允许呼入的范围 0：所有用户  2：企业内用户和被邀请用户
    *
    * @return int|null
    */
    public function getAudienceCallInRestriction()
    {
        return $this->container['audienceCallInRestriction'];
    }

    /**
    * Sets audienceCallInRestriction
    *
    * @param int|null $audienceCallInRestriction 网络研讨会观众允许呼入的范围 0：所有用户  2：企业内用户和被邀请用户
    *
    * @return $this
    */
    public function setAudienceCallInRestriction($audienceCallInRestriction)
    {
        $this->container['audienceCallInRestriction'] = $audienceCallInRestriction;
        return $this;
    }

    /**
    * Gets clientRecMode
    *  客户端本地录制权限的范围，默认为仅主持人支持本地录制 - 0: 所有用户 - 1：全部人可录制 - 2：部分人可录制
    *
    * @return int|null
    */
    public function getClientRecMode()
    {
        return $this->container['clientRecMode'];
    }

    /**
    * Sets clientRecMode
    *
    * @param int|null $clientRecMode 客户端本地录制权限的范围，默认为仅主持人支持本地录制 - 0: 所有用户 - 1：全部人可录制 - 2：部分人可录制
    *
    * @return $this
    */
    public function setClientRecMode($clientRecMode)
    {
        $this->container['clientRecMode'] = $clientRecMode;
        return $this;
    }

    /**
    * Gets allowOpenCamera
    *  与会人自行开启摄像头 0:禁止 1:允许
    *
    * @return int|null
    */
    public function getAllowOpenCamera()
    {
        return $this->container['allowOpenCamera'];
    }

    /**
    * Sets allowOpenCamera
    *
    * @param int|null $allowOpenCamera 与会人自行开启摄像头 0:禁止 1:允许
    *
    * @return $this
    */
    public function setAllowOpenCamera($allowOpenCamera)
    {
        $this->container['allowOpenCamera'] = $allowOpenCamera;
        return $this;
    }

    /**
    * Gets allowRename
    *  是否允许与会人改名 0:不允许 1:允许
    *
    * @return int|null
    */
    public function getAllowRename()
    {
        return $this->container['allowRename'];
    }

    /**
    * Sets allowRename
    *
    * @param int|null $allowRename 是否允许与会人改名 0:不允许 1:允许
    *
    * @return $this
    */
    public function setAllowRename($allowRename)
    {
        $this->container['allowRename'] = $allowRename;
        return $this;
    }

    /**
    * Gets labelPermission
    *  标注权限 0:所有人可标注 1:仅共享人可标注
    *
    * @return int|null
    */
    public function getLabelPermission()
    {
        return $this->container['labelPermission'];
    }

    /**
    * Sets labelPermission
    *
    * @param int|null $labelPermission 标注权限 0:所有人可标注 1:仅共享人可标注
    *
    * @return $this
    */
    public function setLabelPermission($labelPermission)
    {
        $this->container['labelPermission'] = $labelPermission;
        return $this;
    }

    /**
    * Gets freeShare
    *  抢共享权限设置 0:仅主持人/联席 1:所有人可抢共享
    *
    * @return int|null
    */
    public function getFreeShare()
    {
        return $this->container['freeShare'];
    }

    /**
    * Sets freeShare
    *
    * @param int|null $freeShare 抢共享权限设置 0:仅主持人/联席 1:所有人可抢共享
    *
    * @return $this
    */
    public function setFreeShare($freeShare)
    {
        $this->container['freeShare'] = $freeShare;
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

