<?php

namespace HuaweiCloud\SDK\AntiDDoS\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WarnConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WarnConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * antiDDoS  DDoS攻击
    * backDoors  网页后门
    * bruceForce  暴力破解（系统登录，FTP，DB）
    * highPrivilege  数据库进程权限过高
    * remoteLogin  异地登录提醒
    * sendFrequency  取值范围： - 0：表示每天一次 - 1：表示半小时一次  对于HID必选。
    * waf  保留字段
    * weakPassword  弱口令（系统，数据库）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'antiDDoS' => 'bool',
            'backDoors' => 'bool',
            'bruceForce' => 'bool',
            'highPrivilege' => 'bool',
            'remoteLogin' => 'bool',
            'sendFrequency' => 'int',
            'waf' => 'bool',
            'weakPassword' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * antiDDoS  DDoS攻击
    * backDoors  网页后门
    * bruceForce  暴力破解（系统登录，FTP，DB）
    * highPrivilege  数据库进程权限过高
    * remoteLogin  异地登录提醒
    * sendFrequency  取值范围： - 0：表示每天一次 - 1：表示半小时一次  对于HID必选。
    * waf  保留字段
    * weakPassword  弱口令（系统，数据库）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'antiDDoS' => null,
        'backDoors' => null,
        'bruceForce' => null,
        'highPrivilege' => null,
        'remoteLogin' => null,
        'sendFrequency' => 'int32',
        'waf' => null,
        'weakPassword' => null
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
    * antiDDoS  DDoS攻击
    * backDoors  网页后门
    * bruceForce  暴力破解（系统登录，FTP，DB）
    * highPrivilege  数据库进程权限过高
    * remoteLogin  异地登录提醒
    * sendFrequency  取值范围： - 0：表示每天一次 - 1：表示半小时一次  对于HID必选。
    * waf  保留字段
    * weakPassword  弱口令（系统，数据库）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'antiDDoS' => 'antiDDoS',
            'backDoors' => 'back_doors',
            'bruceForce' => 'bruce_force',
            'highPrivilege' => 'high_privilege',
            'remoteLogin' => 'remote_login',
            'sendFrequency' => 'send_frequency',
            'waf' => 'waf',
            'weakPassword' => 'weak_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * antiDDoS  DDoS攻击
    * backDoors  网页后门
    * bruceForce  暴力破解（系统登录，FTP，DB）
    * highPrivilege  数据库进程权限过高
    * remoteLogin  异地登录提醒
    * sendFrequency  取值范围： - 0：表示每天一次 - 1：表示半小时一次  对于HID必选。
    * waf  保留字段
    * weakPassword  弱口令（系统，数据库）
    *
    * @var string[]
    */
    protected static $setters = [
            'antiDDoS' => 'setAntiDDoS',
            'backDoors' => 'setBackDoors',
            'bruceForce' => 'setBruceForce',
            'highPrivilege' => 'setHighPrivilege',
            'remoteLogin' => 'setRemoteLogin',
            'sendFrequency' => 'setSendFrequency',
            'waf' => 'setWaf',
            'weakPassword' => 'setWeakPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * antiDDoS  DDoS攻击
    * backDoors  网页后门
    * bruceForce  暴力破解（系统登录，FTP，DB）
    * highPrivilege  数据库进程权限过高
    * remoteLogin  异地登录提醒
    * sendFrequency  取值范围： - 0：表示每天一次 - 1：表示半小时一次  对于HID必选。
    * waf  保留字段
    * weakPassword  弱口令（系统，数据库）
    *
    * @var string[]
    */
    protected static $getters = [
            'antiDDoS' => 'getAntiDDoS',
            'backDoors' => 'getBackDoors',
            'bruceForce' => 'getBruceForce',
            'highPrivilege' => 'getHighPrivilege',
            'remoteLogin' => 'getRemoteLogin',
            'sendFrequency' => 'getSendFrequency',
            'waf' => 'getWaf',
            'weakPassword' => 'getWeakPassword'
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
    const SEND_FREQUENCY_0 = 0;
    const SEND_FREQUENCY_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSendFrequencyAllowableValues()
    {
        return [
            self::SEND_FREQUENCY_0,
            self::SEND_FREQUENCY_1,
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
        $this->container['antiDDoS'] = isset($data['antiDDoS']) ? $data['antiDDoS'] : null;
        $this->container['backDoors'] = isset($data['backDoors']) ? $data['backDoors'] : null;
        $this->container['bruceForce'] = isset($data['bruceForce']) ? $data['bruceForce'] : null;
        $this->container['highPrivilege'] = isset($data['highPrivilege']) ? $data['highPrivilege'] : null;
        $this->container['remoteLogin'] = isset($data['remoteLogin']) ? $data['remoteLogin'] : null;
        $this->container['sendFrequency'] = isset($data['sendFrequency']) ? $data['sendFrequency'] : null;
        $this->container['waf'] = isset($data['waf']) ? $data['waf'] : null;
        $this->container['weakPassword'] = isset($data['weakPassword']) ? $data['weakPassword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['antiDDoS'] === null) {
            $invalidProperties[] = "'antiDDoS' can't be null";
        }
            $allowedValues = $this->getSendFrequencyAllowableValues();
                if (!is_null($this->container['sendFrequency']) && !in_array($this->container['sendFrequency'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sendFrequency', must be one of '%s'",
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
    * Gets antiDDoS
    *  DDoS攻击
    *
    * @return bool
    */
    public function getAntiDDoS()
    {
        return $this->container['antiDDoS'];
    }

    /**
    * Sets antiDDoS
    *
    * @param bool $antiDDoS DDoS攻击
    *
    * @return $this
    */
    public function setAntiDDoS($antiDDoS)
    {
        $this->container['antiDDoS'] = $antiDDoS;
        return $this;
    }

    /**
    * Gets backDoors
    *  网页后门
    *
    * @return bool|null
    */
    public function getBackDoors()
    {
        return $this->container['backDoors'];
    }

    /**
    * Sets backDoors
    *
    * @param bool|null $backDoors 网页后门
    *
    * @return $this
    */
    public function setBackDoors($backDoors)
    {
        $this->container['backDoors'] = $backDoors;
        return $this;
    }

    /**
    * Gets bruceForce
    *  暴力破解（系统登录，FTP，DB）
    *
    * @return bool|null
    */
    public function getBruceForce()
    {
        return $this->container['bruceForce'];
    }

    /**
    * Sets bruceForce
    *
    * @param bool|null $bruceForce 暴力破解（系统登录，FTP，DB）
    *
    * @return $this
    */
    public function setBruceForce($bruceForce)
    {
        $this->container['bruceForce'] = $bruceForce;
        return $this;
    }

    /**
    * Gets highPrivilege
    *  数据库进程权限过高
    *
    * @return bool|null
    */
    public function getHighPrivilege()
    {
        return $this->container['highPrivilege'];
    }

    /**
    * Sets highPrivilege
    *
    * @param bool|null $highPrivilege 数据库进程权限过高
    *
    * @return $this
    */
    public function setHighPrivilege($highPrivilege)
    {
        $this->container['highPrivilege'] = $highPrivilege;
        return $this;
    }

    /**
    * Gets remoteLogin
    *  异地登录提醒
    *
    * @return bool|null
    */
    public function getRemoteLogin()
    {
        return $this->container['remoteLogin'];
    }

    /**
    * Sets remoteLogin
    *
    * @param bool|null $remoteLogin 异地登录提醒
    *
    * @return $this
    */
    public function setRemoteLogin($remoteLogin)
    {
        $this->container['remoteLogin'] = $remoteLogin;
        return $this;
    }

    /**
    * Gets sendFrequency
    *  取值范围： - 0：表示每天一次 - 1：表示半小时一次  对于HID必选。
    *
    * @return int|null
    */
    public function getSendFrequency()
    {
        return $this->container['sendFrequency'];
    }

    /**
    * Sets sendFrequency
    *
    * @param int|null $sendFrequency 取值范围： - 0：表示每天一次 - 1：表示半小时一次  对于HID必选。
    *
    * @return $this
    */
    public function setSendFrequency($sendFrequency)
    {
        $this->container['sendFrequency'] = $sendFrequency;
        return $this;
    }

    /**
    * Gets waf
    *  保留字段
    *
    * @return bool|null
    */
    public function getWaf()
    {
        return $this->container['waf'];
    }

    /**
    * Sets waf
    *
    * @param bool|null $waf 保留字段
    *
    * @return $this
    */
    public function setWaf($waf)
    {
        $this->container['waf'] = $waf;
        return $this;
    }

    /**
    * Gets weakPassword
    *  弱口令（系统，数据库）
    *
    * @return bool|null
    */
    public function getWeakPassword()
    {
        return $this->container['weakPassword'];
    }

    /**
    * Sets weakPassword
    *
    * @param bool|null $weakPassword 弱口令（系统，数据库）
    *
    * @return $this
    */
    public function setWeakPassword($weakPassword)
    {
        $this->container['weakPassword'] = $weakPassword;
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

