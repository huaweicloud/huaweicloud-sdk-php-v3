<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostRiskNumInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostRiskNumInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * scanTime  **参数解释**: 扫描时间(ms)。 **取值范围**: 取值0-9223372036854775807
    * highRiskNum  **参数解释**: 高危风险数量。 **取值范围**: 取值0-2147483647
    * mediumRiskNum  **参数解释**: 中危风险数量。 **取值范围**: 取值0-2147483647
    * lowRiskNum  **参数解释**: 低危风险数量。 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'hostIp' => 'string',
            'scanTime' => 'int',
            'highRiskNum' => 'int',
            'mediumRiskNum' => 'int',
            'lowRiskNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * scanTime  **参数解释**: 扫描时间(ms)。 **取值范围**: 取值0-9223372036854775807
    * highRiskNum  **参数解释**: 高危风险数量。 **取值范围**: 取值0-2147483647
    * mediumRiskNum  **参数解释**: 中危风险数量。 **取值范围**: 取值0-2147483647
    * lowRiskNum  **参数解释**: 低危风险数量。 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'hostIp' => null,
        'scanTime' => 'int64',
        'highRiskNum' => 'int32',
        'mediumRiskNum' => 'int32',
        'lowRiskNum' => 'int32'
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
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * scanTime  **参数解释**: 扫描时间(ms)。 **取值范围**: 取值0-9223372036854775807
    * highRiskNum  **参数解释**: 高危风险数量。 **取值范围**: 取值0-2147483647
    * mediumRiskNum  **参数解释**: 中危风险数量。 **取值范围**: 取值0-2147483647
    * lowRiskNum  **参数解释**: 低危风险数量。 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostIp' => 'host_ip',
            'scanTime' => 'scan_time',
            'highRiskNum' => 'high_risk_num',
            'mediumRiskNum' => 'medium_risk_num',
            'lowRiskNum' => 'low_risk_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * scanTime  **参数解释**: 扫描时间(ms)。 **取值范围**: 取值0-9223372036854775807
    * highRiskNum  **参数解释**: 高危风险数量。 **取值范围**: 取值0-2147483647
    * mediumRiskNum  **参数解释**: 中危风险数量。 **取值范围**: 取值0-2147483647
    * lowRiskNum  **参数解释**: 低危风险数量。 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostIp' => 'setHostIp',
            'scanTime' => 'setScanTime',
            'highRiskNum' => 'setHighRiskNum',
            'mediumRiskNum' => 'setMediumRiskNum',
            'lowRiskNum' => 'setLowRiskNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    * hostName  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    * hostIp  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    * scanTime  **参数解释**: 扫描时间(ms)。 **取值范围**: 取值0-9223372036854775807
    * highRiskNum  **参数解释**: 高危风险数量。 **取值范围**: 取值0-2147483647
    * mediumRiskNum  **参数解释**: 中危风险数量。 **取值范围**: 取值0-2147483647
    * lowRiskNum  **参数解释**: 低危风险数量。 **取值范围**: 取值0-2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostIp' => 'getHostIp',
            'scanTime' => 'getScanTime',
            'highRiskNum' => 'getHighRiskNum',
            'mediumRiskNum' => 'getMediumRiskNum',
            'lowRiskNum' => 'getLowRiskNum'
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
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostIp'] = isset($data['hostIp']) ? $data['hostIp'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['highRiskNum'] = isset($data['highRiskNum']) ? $data['highRiskNum'] : null;
        $this->container['mediumRiskNum'] = isset($data['mediumRiskNum']) ? $data['mediumRiskNum'] : null;
        $this->container['lowRiskNum'] = isset($data['lowRiskNum']) ? $data['lowRiskNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostIp']) && (mb_strlen($this->container['hostIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['highRiskNum']) && ($this->container['highRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'highRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['highRiskNum']) && ($this->container['highRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'highRiskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['mediumRiskNum']) && ($this->container['mediumRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mediumRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mediumRiskNum']) && ($this->container['mediumRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'mediumRiskNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lowRiskNum']) && ($this->container['lowRiskNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'lowRiskNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['lowRiskNum']) && ($this->container['lowRiskNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'lowRiskNum', must be bigger than or equal to 0.";
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
    *  **参数解释**： 主机ID **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**： 主机ID **取值范围**： 字符长度1-64位
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
    *  **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
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
    * @param string|null $hostName **参数解释**: 服务器名称 **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostIp
    *  **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
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
    * @param string|null $hostIp **参数解释**: 服务器IP **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setHostIp($hostIp)
    {
        $this->container['hostIp'] = $hostIp;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**: 扫描时间(ms)。 **取值范围**: 取值0-9223372036854775807
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime **参数解释**: 扫描时间(ms)。 **取值范围**: 取值0-9223372036854775807
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets highRiskNum
    *  **参数解释**: 高危风险数量。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getHighRiskNum()
    {
        return $this->container['highRiskNum'];
    }

    /**
    * Sets highRiskNum
    *
    * @param int|null $highRiskNum **参数解释**: 高危风险数量。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setHighRiskNum($highRiskNum)
    {
        $this->container['highRiskNum'] = $highRiskNum;
        return $this;
    }

    /**
    * Gets mediumRiskNum
    *  **参数解释**: 中危风险数量。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getMediumRiskNum()
    {
        return $this->container['mediumRiskNum'];
    }

    /**
    * Sets mediumRiskNum
    *
    * @param int|null $mediumRiskNum **参数解释**: 中危风险数量。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setMediumRiskNum($mediumRiskNum)
    {
        $this->container['mediumRiskNum'] = $mediumRiskNum;
        return $this;
    }

    /**
    * Gets lowRiskNum
    *  **参数解释**: 低危风险数量。 **取值范围**: 取值0-2147483647
    *
    * @return int|null
    */
    public function getLowRiskNum()
    {
        return $this->container['lowRiskNum'];
    }

    /**
    * Sets lowRiskNum
    *
    * @param int|null $lowRiskNum **参数解释**: 低危风险数量。 **取值范围**: 取值0-2147483647
    *
    * @return $this
    */
    public function setLowRiskNum($lowRiskNum)
    {
        $this->container['lowRiskNum'] = $lowRiskNum;
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

