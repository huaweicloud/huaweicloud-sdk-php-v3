<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BlockedIpResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BlockedIpResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  主机ID
    * hostName  服务器名称
    * srcIp  攻击源IP
    * loginType  登录类型，包含如下: - \"mysql\" # mysql服务 - \"rdp\" # rdp服务服务 - \"ssh\" # ssh服务 - \"vsftp\" # vsftp服务
    * interceptNum  拦截次数
    * interceptStatus  拦截状态，包含如下:   - \"intercepted\" # 已拦截   - \"canceled\" # 已解除拦截   - \"cancelling\" # 待解除拦截
    * blockTime  开始拦截时间，毫秒
    * latestTime  最近拦截时间，毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'srcIp' => 'string',
            'loginType' => 'string',
            'interceptNum' => 'int',
            'interceptStatus' => 'string',
            'blockTime' => 'int',
            'latestTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  主机ID
    * hostName  服务器名称
    * srcIp  攻击源IP
    * loginType  登录类型，包含如下: - \"mysql\" # mysql服务 - \"rdp\" # rdp服务服务 - \"ssh\" # ssh服务 - \"vsftp\" # vsftp服务
    * interceptNum  拦截次数
    * interceptStatus  拦截状态，包含如下:   - \"intercepted\" # 已拦截   - \"canceled\" # 已解除拦截   - \"cancelling\" # 待解除拦截
    * blockTime  开始拦截时间，毫秒
    * latestTime  最近拦截时间，毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'srcIp' => null,
        'loginType' => null,
        'interceptNum' => 'int32',
        'interceptStatus' => null,
        'blockTime' => 'int64',
        'latestTime' => 'int64'
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
    * hostId  主机ID
    * hostName  服务器名称
    * srcIp  攻击源IP
    * loginType  登录类型，包含如下: - \"mysql\" # mysql服务 - \"rdp\" # rdp服务服务 - \"ssh\" # ssh服务 - \"vsftp\" # vsftp服务
    * interceptNum  拦截次数
    * interceptStatus  拦截状态，包含如下:   - \"intercepted\" # 已拦截   - \"canceled\" # 已解除拦截   - \"cancelling\" # 待解除拦截
    * blockTime  开始拦截时间，毫秒
    * latestTime  最近拦截时间，毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'srcIp' => 'src_ip',
            'loginType' => 'login_type',
            'interceptNum' => 'intercept_num',
            'interceptStatus' => 'intercept_status',
            'blockTime' => 'block_time',
            'latestTime' => 'latest_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  主机ID
    * hostName  服务器名称
    * srcIp  攻击源IP
    * loginType  登录类型，包含如下: - \"mysql\" # mysql服务 - \"rdp\" # rdp服务服务 - \"ssh\" # ssh服务 - \"vsftp\" # vsftp服务
    * interceptNum  拦截次数
    * interceptStatus  拦截状态，包含如下:   - \"intercepted\" # 已拦截   - \"canceled\" # 已解除拦截   - \"cancelling\" # 待解除拦截
    * blockTime  开始拦截时间，毫秒
    * latestTime  最近拦截时间，毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'srcIp' => 'setSrcIp',
            'loginType' => 'setLoginType',
            'interceptNum' => 'setInterceptNum',
            'interceptStatus' => 'setInterceptStatus',
            'blockTime' => 'setBlockTime',
            'latestTime' => 'setLatestTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  主机ID
    * hostName  服务器名称
    * srcIp  攻击源IP
    * loginType  登录类型，包含如下: - \"mysql\" # mysql服务 - \"rdp\" # rdp服务服务 - \"ssh\" # ssh服务 - \"vsftp\" # vsftp服务
    * interceptNum  拦截次数
    * interceptStatus  拦截状态，包含如下:   - \"intercepted\" # 已拦截   - \"canceled\" # 已解除拦截   - \"cancelling\" # 待解除拦截
    * blockTime  开始拦截时间，毫秒
    * latestTime  最近拦截时间，毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'srcIp' => 'getSrcIp',
            'loginType' => 'getLoginType',
            'interceptNum' => 'getInterceptNum',
            'interceptStatus' => 'getInterceptStatus',
            'blockTime' => 'getBlockTime',
            'latestTime' => 'getLatestTime'
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
    const INTERCEPT_STATUS_INTERCEPTED = 'intercepted';
    const INTERCEPT_STATUS_CANCELED = 'canceled';
    const INTERCEPT_STATUS_CANCELLING = 'cancelling';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInterceptStatusAllowableValues()
    {
        return [
            self::INTERCEPT_STATUS_INTERCEPTED,
            self::INTERCEPT_STATUS_CANCELED,
            self::INTERCEPT_STATUS_CANCELLING,
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['loginType'] = isset($data['loginType']) ? $data['loginType'] : null;
        $this->container['interceptNum'] = isset($data['interceptNum']) ? $data['interceptNum'] : null;
        $this->container['interceptStatus'] = isset($data['interceptStatus']) ? $data['interceptStatus'] : null;
        $this->container['blockTime'] = isset($data['blockTime']) ? $data['blockTime'] : null;
        $this->container['latestTime'] = isset($data['latestTime']) ? $data['latestTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hostId'] === null) {
            $invalidProperties[] = "'hostId' can't be null";
        }
            if ((mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['hostName'] === null) {
            $invalidProperties[] = "'hostName' can't be null";
        }
            if ((mb_strlen($this->container['hostName']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['srcIp'] === null) {
            $invalidProperties[] = "'srcIp' can't be null";
        }
            if (!preg_match("/^.*$/", $this->container['srcIp'])) {
                $invalidProperties[] = "invalid value for 'srcIp', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['loginType'] === null) {
            $invalidProperties[] = "'loginType' can't be null";
        }
        if ($this->container['interceptNum'] === null) {
            $invalidProperties[] = "'interceptNum' can't be null";
        }
            if (($this->container['interceptNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'interceptNum', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['interceptNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'interceptNum', must be bigger than or equal to 0.";
            }
        if ($this->container['interceptStatus'] === null) {
            $invalidProperties[] = "'interceptStatus' can't be null";
        }
            $allowedValues = $this->getInterceptStatusAllowableValues();
                if (!is_null($this->container['interceptStatus']) && !in_array($this->container['interceptStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'interceptStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['blockTime'] === null) {
            $invalidProperties[] = "'blockTime' can't be null";
        }
            if (($this->container['blockTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'blockTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['blockTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'blockTime', must be bigger than or equal to 0.";
            }
        if ($this->container['latestTime'] === null) {
            $invalidProperties[] = "'latestTime' can't be null";
        }
            if (($this->container['latestTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'latestTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['latestTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'latestTime', must be bigger than or equal to 0.";
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
    * Gets hostId
    *  主机ID
    *
    * @return string
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string $hostId 主机ID
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets hostName
    *  服务器名称
    *
    * @return string
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string $hostName 服务器名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets srcIp
    *  攻击源IP
    *
    * @return string
    */
    public function getSrcIp()
    {
        return $this->container['srcIp'];
    }

    /**
    * Sets srcIp
    *
    * @param string $srcIp 攻击源IP
    *
    * @return $this
    */
    public function setSrcIp($srcIp)
    {
        $this->container['srcIp'] = $srcIp;
        return $this;
    }

    /**
    * Gets loginType
    *  登录类型，包含如下: - \"mysql\" # mysql服务 - \"rdp\" # rdp服务服务 - \"ssh\" # ssh服务 - \"vsftp\" # vsftp服务
    *
    * @return string
    */
    public function getLoginType()
    {
        return $this->container['loginType'];
    }

    /**
    * Sets loginType
    *
    * @param string $loginType 登录类型，包含如下: - \"mysql\" # mysql服务 - \"rdp\" # rdp服务服务 - \"ssh\" # ssh服务 - \"vsftp\" # vsftp服务
    *
    * @return $this
    */
    public function setLoginType($loginType)
    {
        $this->container['loginType'] = $loginType;
        return $this;
    }

    /**
    * Gets interceptNum
    *  拦截次数
    *
    * @return int
    */
    public function getInterceptNum()
    {
        return $this->container['interceptNum'];
    }

    /**
    * Sets interceptNum
    *
    * @param int $interceptNum 拦截次数
    *
    * @return $this
    */
    public function setInterceptNum($interceptNum)
    {
        $this->container['interceptNum'] = $interceptNum;
        return $this;
    }

    /**
    * Gets interceptStatus
    *  拦截状态，包含如下:   - \"intercepted\" # 已拦截   - \"canceled\" # 已解除拦截   - \"cancelling\" # 待解除拦截
    *
    * @return string
    */
    public function getInterceptStatus()
    {
        return $this->container['interceptStatus'];
    }

    /**
    * Sets interceptStatus
    *
    * @param string $interceptStatus 拦截状态，包含如下:   - \"intercepted\" # 已拦截   - \"canceled\" # 已解除拦截   - \"cancelling\" # 待解除拦截
    *
    * @return $this
    */
    public function setInterceptStatus($interceptStatus)
    {
        $this->container['interceptStatus'] = $interceptStatus;
        return $this;
    }

    /**
    * Gets blockTime
    *  开始拦截时间，毫秒
    *
    * @return int
    */
    public function getBlockTime()
    {
        return $this->container['blockTime'];
    }

    /**
    * Sets blockTime
    *
    * @param int $blockTime 开始拦截时间，毫秒
    *
    * @return $this
    */
    public function setBlockTime($blockTime)
    {
        $this->container['blockTime'] = $blockTime;
        return $this;
    }

    /**
    * Gets latestTime
    *  最近拦截时间，毫秒
    *
    * @return int
    */
    public function getLatestTime()
    {
        return $this->container['latestTime'];
    }

    /**
    * Sets latestTime
    *
    * @param int $latestTime 最近拦截时间，毫秒
    *
    * @return $this
    */
    public function setLatestTime($latestTime)
    {
        $this->container['latestTime'] = $latestTime;
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

