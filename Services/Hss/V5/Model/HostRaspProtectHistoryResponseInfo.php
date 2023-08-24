<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostRaspProtectHistoryResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostRaspProtectHistoryResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostIp  服务器ip
    * hostName  服务器名称
    * alarmTime  告警时间
    * threatType  威胁类型
    * alarmLevel  告警级别
    * sourceIp  源IP
    * attackedUrl  攻击URL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostIp' => 'string',
            'hostName' => 'string',
            'alarmTime' => 'int',
            'threatType' => 'string',
            'alarmLevel' => 'int',
            'sourceIp' => 'string',
            'attackedUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostIp  服务器ip
    * hostName  服务器名称
    * alarmTime  告警时间
    * threatType  威胁类型
    * alarmLevel  告警级别
    * sourceIp  源IP
    * attackedUrl  攻击URL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostIp' => null,
        'hostName' => null,
        'alarmTime' => 'int64',
        'threatType' => null,
        'alarmLevel' => null,
        'sourceIp' => null,
        'attackedUrl' => null
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
    * hostIp  服务器ip
    * hostName  服务器名称
    * alarmTime  告警时间
    * threatType  威胁类型
    * alarmLevel  告警级别
    * sourceIp  源IP
    * attackedUrl  攻击URL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostIp' => 'host_ip',
            'hostName' => 'host_name',
            'alarmTime' => 'alarm_time',
            'threatType' => 'threat_type',
            'alarmLevel' => 'alarm_level',
            'sourceIp' => 'source_ip',
            'attackedUrl' => 'attacked_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostIp  服务器ip
    * hostName  服务器名称
    * alarmTime  告警时间
    * threatType  威胁类型
    * alarmLevel  告警级别
    * sourceIp  源IP
    * attackedUrl  攻击URL
    *
    * @var string[]
    */
    protected static $setters = [
            'hostIp' => 'setHostIp',
            'hostName' => 'setHostName',
            'alarmTime' => 'setAlarmTime',
            'threatType' => 'setThreatType',
            'alarmLevel' => 'setAlarmLevel',
            'sourceIp' => 'setSourceIp',
            'attackedUrl' => 'setAttackedUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostIp  服务器ip
    * hostName  服务器名称
    * alarmTime  告警时间
    * threatType  威胁类型
    * alarmLevel  告警级别
    * sourceIp  源IP
    * attackedUrl  攻击URL
    *
    * @var string[]
    */
    protected static $getters = [
            'hostIp' => 'getHostIp',
            'hostName' => 'getHostName',
            'alarmTime' => 'getAlarmTime',
            'threatType' => 'getThreatType',
            'alarmLevel' => 'getAlarmLevel',
            'sourceIp' => 'getSourceIp',
            'attackedUrl' => 'getAttackedUrl'
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
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['alarmTime'] = isset($data['alarmTime']) ? $data['alarmTime'] : null;
        $this->container['threatType'] = isset($data['threatType']) ? $data['threatType'] : null;
        $this->container['alarmLevel'] = isset($data['alarmLevel']) ? $data['alarmLevel'] : null;
        $this->container['sourceIp'] = isset($data['sourceIp']) ? $data['sourceIp'] : null;
        $this->container['attackedUrl'] = isset($data['attackedUrl']) ? $data['attackedUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alarmTime']) && ($this->container['alarmTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'alarmTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['alarmTime']) && ($this->container['alarmTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'alarmTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['threatType']) && (mb_strlen($this->container['threatType']) > 64)) {
                $invalidProperties[] = "invalid value for 'threatType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['threatType']) && (mb_strlen($this->container['threatType']) < 0)) {
                $invalidProperties[] = "invalid value for 'threatType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['alarmLevel']) && ($this->container['alarmLevel'] > 100)) {
                $invalidProperties[] = "invalid value for 'alarmLevel', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['alarmLevel']) && ($this->container['alarmLevel'] < 0)) {
                $invalidProperties[] = "invalid value for 'alarmLevel', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceIp']) && (mb_strlen($this->container['sourceIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'sourceIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sourceIp']) && (mb_strlen($this->container['sourceIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackedUrl']) && (mb_strlen($this->container['attackedUrl']) > 2000)) {
                $invalidProperties[] = "invalid value for 'attackedUrl', the character length must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['attackedUrl']) && (mb_strlen($this->container['attackedUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'attackedUrl', the character length must be bigger than or equal to 0.";
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
    * Gets hostIp
    *  服务器ip
    *
    * @return string|null
    */
    public function getHostIp()
    {
        return $this->container['hostIp'];
    }

    /**
    * Sets hostIp
    *
    * @param string|null $hostIp 服务器ip
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets hostName
    *  服务器名称
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 服务器名称
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets alarmTime
    *  告警时间
    *
    * @return int|null
    */
    public function getAlarmTime()
    {
        return $this->container['alarmTime'];
    }

    /**
    * Sets alarmTime
    *
    * @param int|null $alarmTime 告警时间
    *
    * @return $this
    */
    public function setAlarmTime($alarmTime)
    {
        $this->container['alarmTime'] = $alarmTime;
        return $this;
    }

    /**
    * Gets threatType
    *  威胁类型
    *
    * @return string|null
    */
    public function getThreatType()
    {
        return $this->container['threatType'];
    }

    /**
    * Sets threatType
    *
    * @param string|null $threatType 威胁类型
    *
    * @return $this
    */
    public function setThreatType($threatType)
    {
        $this->container['threatType'] = $threatType;
        return $this;
    }

    /**
    * Gets alarmLevel
    *  告警级别
    *
    * @return int|null
    */
    public function getAlarmLevel()
    {
        return $this->container['alarmLevel'];
    }

    /**
    * Sets alarmLevel
    *
    * @param int|null $alarmLevel 告警级别
    *
    * @return $this
    */
    public function setAlarmLevel($alarmLevel)
    {
        $this->container['alarmLevel'] = $alarmLevel;
        return $this;
    }

    /**
    * Gets sourceIp
    *  源IP
    *
    * @return string|null
    */
    public function getSourceIp()
    {
        return $this->container['sourceIp'];
    }

    /**
    * Sets sourceIp
    *
    * @param string|null $sourceIp 源IP
    *
    * @return $this
    */
    public function setSourceIp($sourceIp)
    {
        $this->container['sourceIp'] = $sourceIp;
        return $this;
    }

    /**
    * Gets attackedUrl
    *  攻击URL
    *
    * @return string|null
    */
    public function getAttackedUrl()
    {
        return $this->container['attackedUrl'];
    }

    /**
    * Sets attackedUrl
    *
    * @param string|null $attackedUrl 攻击URL
    *
    * @return $this
    */
    public function setAttackedUrl($attackedUrl)
    {
        $this->container['attackedUrl'] = $attackedUrl;
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

