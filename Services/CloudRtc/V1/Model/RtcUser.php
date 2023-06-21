<?php

namespace HuaweiCloud\SDK\CloudRTC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RtcUser implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RtcUser';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  域名
    * app  应用标识
    * roomId  房间ID
    * uid  用户id
    * session  会话id
    * state  用户状态   - FAIL： 加入失败   - ONLINE：在线   - OFFLINE：离开
    * nickName  用户昵称
    * ip  用户接入IP
    * region  用户接入IP所在省份
    * isp  用户接入IP所在运营商
    * deviceModel  用户设备型号
    * platform  用户设备平台
    * sdk  用户sdk版本
    * joinTime  用户加入房间时间。格式为：YYYY-MM-DDThh:mm:ssZ
    * leaveTime  用户离开房间时间。格式为：YYYY-MM-DDThh:mm:ssZ，若用户未离开，则返回 “-”
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'app' => 'string',
            'roomId' => 'string',
            'uid' => 'string',
            'session' => 'string',
            'state' => 'string',
            'nickName' => 'string',
            'ip' => 'string',
            'region' => 'string',
            'isp' => 'string',
            'deviceModel' => 'string',
            'platform' => 'string',
            'sdk' => 'string',
            'joinTime' => 'string',
            'leaveTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  域名
    * app  应用标识
    * roomId  房间ID
    * uid  用户id
    * session  会话id
    * state  用户状态   - FAIL： 加入失败   - ONLINE：在线   - OFFLINE：离开
    * nickName  用户昵称
    * ip  用户接入IP
    * region  用户接入IP所在省份
    * isp  用户接入IP所在运营商
    * deviceModel  用户设备型号
    * platform  用户设备平台
    * sdk  用户sdk版本
    * joinTime  用户加入房间时间。格式为：YYYY-MM-DDThh:mm:ssZ
    * leaveTime  用户离开房间时间。格式为：YYYY-MM-DDThh:mm:ssZ，若用户未离开，则返回 “-”
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'app' => null,
        'roomId' => null,
        'uid' => null,
        'session' => null,
        'state' => null,
        'nickName' => null,
        'ip' => null,
        'region' => null,
        'isp' => null,
        'deviceModel' => null,
        'platform' => null,
        'sdk' => null,
        'joinTime' => null,
        'leaveTime' => null
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
    * domain  域名
    * app  应用标识
    * roomId  房间ID
    * uid  用户id
    * session  会话id
    * state  用户状态   - FAIL： 加入失败   - ONLINE：在线   - OFFLINE：离开
    * nickName  用户昵称
    * ip  用户接入IP
    * region  用户接入IP所在省份
    * isp  用户接入IP所在运营商
    * deviceModel  用户设备型号
    * platform  用户设备平台
    * sdk  用户sdk版本
    * joinTime  用户加入房间时间。格式为：YYYY-MM-DDThh:mm:ssZ
    * leaveTime  用户离开房间时间。格式为：YYYY-MM-DDThh:mm:ssZ，若用户未离开，则返回 “-”
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'app' => 'app',
            'roomId' => 'room_id',
            'uid' => 'uid',
            'session' => 'session',
            'state' => 'state',
            'nickName' => 'nick_name',
            'ip' => 'ip',
            'region' => 'region',
            'isp' => 'isp',
            'deviceModel' => 'device_model',
            'platform' => 'platform',
            'sdk' => 'sdk',
            'joinTime' => 'join_time',
            'leaveTime' => 'leave_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  域名
    * app  应用标识
    * roomId  房间ID
    * uid  用户id
    * session  会话id
    * state  用户状态   - FAIL： 加入失败   - ONLINE：在线   - OFFLINE：离开
    * nickName  用户昵称
    * ip  用户接入IP
    * region  用户接入IP所在省份
    * isp  用户接入IP所在运营商
    * deviceModel  用户设备型号
    * platform  用户设备平台
    * sdk  用户sdk版本
    * joinTime  用户加入房间时间。格式为：YYYY-MM-DDThh:mm:ssZ
    * leaveTime  用户离开房间时间。格式为：YYYY-MM-DDThh:mm:ssZ，若用户未离开，则返回 “-”
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'app' => 'setApp',
            'roomId' => 'setRoomId',
            'uid' => 'setUid',
            'session' => 'setSession',
            'state' => 'setState',
            'nickName' => 'setNickName',
            'ip' => 'setIp',
            'region' => 'setRegion',
            'isp' => 'setIsp',
            'deviceModel' => 'setDeviceModel',
            'platform' => 'setPlatform',
            'sdk' => 'setSdk',
            'joinTime' => 'setJoinTime',
            'leaveTime' => 'setLeaveTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  域名
    * app  应用标识
    * roomId  房间ID
    * uid  用户id
    * session  会话id
    * state  用户状态   - FAIL： 加入失败   - ONLINE：在线   - OFFLINE：离开
    * nickName  用户昵称
    * ip  用户接入IP
    * region  用户接入IP所在省份
    * isp  用户接入IP所在运营商
    * deviceModel  用户设备型号
    * platform  用户设备平台
    * sdk  用户sdk版本
    * joinTime  用户加入房间时间。格式为：YYYY-MM-DDThh:mm:ssZ
    * leaveTime  用户离开房间时间。格式为：YYYY-MM-DDThh:mm:ssZ，若用户未离开，则返回 “-”
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'app' => 'getApp',
            'roomId' => 'getRoomId',
            'uid' => 'getUid',
            'session' => 'getSession',
            'state' => 'getState',
            'nickName' => 'getNickName',
            'ip' => 'getIp',
            'region' => 'getRegion',
            'isp' => 'getIsp',
            'deviceModel' => 'getDeviceModel',
            'platform' => 'getPlatform',
            'sdk' => 'getSdk',
            'joinTime' => 'getJoinTime',
            'leaveTime' => 'getLeaveTime'
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
    const STATE_FAIL = 'FAIL';
    const STATE_ONLINE = 'ONLINE';
    const STATE_OFFLINE = 'OFFLINE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_FAIL,
            self::STATE_ONLINE,
            self::STATE_OFFLINE,
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['session'] = isset($data['session']) ? $data['session'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['deviceModel'] = isset($data['deviceModel']) ? $data['deviceModel'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['sdk'] = isset($data['sdk']) ? $data['sdk'] : null;
        $this->container['joinTime'] = isset($data['joinTime']) ? $data['joinTime'] : null;
        $this->container['leaveTime'] = isset($data['leaveTime']) ? $data['leaveTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 256)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) > 256)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) > 256)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['roomId']) && (mb_strlen($this->container['roomId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roomId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['uid']) && (mb_strlen($this->container['uid']) > 256)) {
                $invalidProperties[] = "invalid value for 'uid', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['uid']) && (mb_strlen($this->container['uid']) < 1)) {
                $invalidProperties[] = "invalid value for 'uid', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['session']) && (mb_strlen($this->container['session']) > 256)) {
                $invalidProperties[] = "invalid value for 'session', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['session']) && (mb_strlen($this->container['session']) < 1)) {
                $invalidProperties[] = "invalid value for 'session', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) > 256)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['nickName']) && (mb_strlen($this->container['nickName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nickName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) > 256)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ip']) && (mb_strlen($this->container['ip']) < 1)) {
                $invalidProperties[] = "invalid value for 'ip', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 256)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['isp']) && (mb_strlen($this->container['isp']) > 256)) {
                $invalidProperties[] = "invalid value for 'isp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['isp']) && (mb_strlen($this->container['isp']) < 1)) {
                $invalidProperties[] = "invalid value for 'isp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['deviceModel']) && (mb_strlen($this->container['deviceModel']) > 256)) {
                $invalidProperties[] = "invalid value for 'deviceModel', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['deviceModel']) && (mb_strlen($this->container['deviceModel']) < 1)) {
                $invalidProperties[] = "invalid value for 'deviceModel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['platform']) && (mb_strlen($this->container['platform']) > 256)) {
                $invalidProperties[] = "invalid value for 'platform', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['platform']) && (mb_strlen($this->container['platform']) < 1)) {
                $invalidProperties[] = "invalid value for 'platform', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sdk']) && (mb_strlen($this->container['sdk']) > 256)) {
                $invalidProperties[] = "invalid value for 'sdk', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['sdk']) && (mb_strlen($this->container['sdk']) < 1)) {
                $invalidProperties[] = "invalid value for 'sdk', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['joinTime']) && (mb_strlen($this->container['joinTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'joinTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['joinTime']) && (mb_strlen($this->container['joinTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'joinTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['leaveTime']) && (mb_strlen($this->container['leaveTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'leaveTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['leaveTime']) && (mb_strlen($this->container['leaveTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'leaveTime', the character length must be bigger than or equal to 0.";
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
    * Gets domain
    *  域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets app
    *  应用标识
    *
    * @return string|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string|null $app 应用标识
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets roomId
    *  房间ID
    *
    * @return string|null
    */
    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    /**
    * Sets roomId
    *
    * @param string|null $roomId 房间ID
    *
    * @return $this
    */
    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    /**
    * Gets uid
    *  用户id
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid 用户id
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets session
    *  会话id
    *
    * @return string|null
    */
    public function getSession()
    {
        return $this->container['session'];
    }

    /**
    * Sets session
    *
    * @param string|null $session 会话id
    *
    * @return $this
    */
    public function setSession($session)
    {
        $this->container['session'] = $session;
        return $this;
    }

    /**
    * Gets state
    *  用户状态   - FAIL： 加入失败   - ONLINE：在线   - OFFLINE：离开
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 用户状态   - FAIL： 加入失败   - ONLINE：在线   - OFFLINE：离开
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets nickName
    *  用户昵称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 用户昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets ip
    *  用户接入IP
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 用户接入IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets region
    *  用户接入IP所在省份
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 用户接入IP所在省份
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets isp
    *  用户接入IP所在运营商
    *
    * @return string|null
    */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
    * Sets isp
    *
    * @param string|null $isp 用户接入IP所在运营商
    *
    * @return $this
    */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;
        return $this;
    }

    /**
    * Gets deviceModel
    *  用户设备型号
    *
    * @return string|null
    */
    public function getDeviceModel()
    {
        return $this->container['deviceModel'];
    }

    /**
    * Sets deviceModel
    *
    * @param string|null $deviceModel 用户设备型号
    *
    * @return $this
    */
    public function setDeviceModel($deviceModel)
    {
        $this->container['deviceModel'] = $deviceModel;
        return $this;
    }

    /**
    * Gets platform
    *  用户设备平台
    *
    * @return string|null
    */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
    * Sets platform
    *
    * @param string|null $platform 用户设备平台
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
        return $this;
    }

    /**
    * Gets sdk
    *  用户sdk版本
    *
    * @return string|null
    */
    public function getSdk()
    {
        return $this->container['sdk'];
    }

    /**
    * Sets sdk
    *
    * @param string|null $sdk 用户sdk版本
    *
    * @return $this
    */
    public function setSdk($sdk)
    {
        $this->container['sdk'] = $sdk;
        return $this;
    }

    /**
    * Gets joinTime
    *  用户加入房间时间。格式为：YYYY-MM-DDThh:mm:ssZ
    *
    * @return string|null
    */
    public function getJoinTime()
    {
        return $this->container['joinTime'];
    }

    /**
    * Sets joinTime
    *
    * @param string|null $joinTime 用户加入房间时间。格式为：YYYY-MM-DDThh:mm:ssZ
    *
    * @return $this
    */
    public function setJoinTime($joinTime)
    {
        $this->container['joinTime'] = $joinTime;
        return $this;
    }

    /**
    * Gets leaveTime
    *  用户离开房间时间。格式为：YYYY-MM-DDThh:mm:ssZ，若用户未离开，则返回 “-”
    *
    * @return string|null
    */
    public function getLeaveTime()
    {
        return $this->container['leaveTime'];
    }

    /**
    * Sets leaveTime
    *
    * @param string|null $leaveTime 用户离开房间时间。格式为：YYYY-MM-DDThh:mm:ssZ，若用户未离开，则返回 “-”
    *
    * @return $this
    */
    public function setLeaveTime($leaveTime)
    {
        $this->container['leaveTime'] = $leaveTime;
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

