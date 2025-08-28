<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVulReportDataResponseInfoHosts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVulReportDataResponseInfo_hosts';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  **参数解释**： 主机名称 **取值范围**： 字符长度1-256位
    * publicIp  **参数解释**： 服务器公网ip **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私网ip **取值范围**： 字符长度0-128位
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
    * severityLevel  **参数解释**： 漏洞风险等级 **取值范围**： - Critical：紧急。 - High：高危。 - Medium：中危。 - Low：低危。
    * vulTotalNum  **参数解释**： 漏洞数 **取值范围**： 最小值0，最大值10000000
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'scanTime' => 'int',
            'severityLevel' => 'string',
            'vulTotalNum' => 'int',
            'hostId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  **参数解释**： 主机名称 **取值范围**： 字符长度1-256位
    * publicIp  **参数解释**： 服务器公网ip **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私网ip **取值范围**： 字符长度0-128位
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
    * severityLevel  **参数解释**： 漏洞风险等级 **取值范围**： - Critical：紧急。 - High：高危。 - Medium：中危。 - Low：低危。
    * vulTotalNum  **参数解释**： 漏洞数 **取值范围**： 最小值0，最大值10000000
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'publicIp' => null,
        'privateIp' => null,
        'scanTime' => 'int64',
        'severityLevel' => null,
        'vulTotalNum' => 'int32',
        'hostId' => null
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
    * hostName  **参数解释**： 主机名称 **取值范围**： 字符长度1-256位
    * publicIp  **参数解释**： 服务器公网ip **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私网ip **取值范围**： 字符长度0-128位
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
    * severityLevel  **参数解释**： 漏洞风险等级 **取值范围**： - Critical：紧急。 - High：高危。 - Medium：中危。 - Low：低危。
    * vulTotalNum  **参数解释**： 漏洞数 **取值范围**： 最小值0，最大值10000000
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'scanTime' => 'scan_time',
            'severityLevel' => 'severity_level',
            'vulTotalNum' => 'vul_total_num',
            'hostId' => 'host_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  **参数解释**： 主机名称 **取值范围**： 字符长度1-256位
    * publicIp  **参数解释**： 服务器公网ip **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私网ip **取值范围**： 字符长度0-128位
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
    * severityLevel  **参数解释**： 漏洞风险等级 **取值范围**： - Critical：紧急。 - High：高危。 - Medium：中危。 - Low：低危。
    * vulTotalNum  **参数解释**： 漏洞数 **取值范围**： 最小值0，最大值10000000
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'scanTime' => 'setScanTime',
            'severityLevel' => 'setSeverityLevel',
            'vulTotalNum' => 'setVulTotalNum',
            'hostId' => 'setHostId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  **参数解释**： 主机名称 **取值范围**： 字符长度1-256位
    * publicIp  **参数解释**： 服务器公网ip **取值范围**： 字符长度1-64位
    * privateIp  **参数解释**： 服务器私网ip **取值范围**： 字符长度0-128位
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
    * severityLevel  **参数解释**： 漏洞风险等级 **取值范围**： - Critical：紧急。 - High：高危。 - Medium：中危。 - Low：低危。
    * vulTotalNum  **参数解释**： 漏洞数 **取值范围**： 最小值0，最大值10000000
    * hostId  **参数解释**： 主机ID **取值范围**： 字符长度1-128位
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'scanTime' => 'getScanTime',
            'severityLevel' => 'getSeverityLevel',
            'vulTotalNum' => 'getVulTotalNum',
            'hostId' => 'getHostId'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['vulTotalNum'] = isset($data['vulTotalNum']) ? $data['vulTotalNum'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 64)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vulTotalNum']) && ($this->container['vulTotalNum'] > 10000000)) {
                $invalidProperties[] = "invalid value for 'vulTotalNum', must be smaller than or equal to 10000000.";
            }
            if (!is_null($this->container['vulTotalNum']) && ($this->container['vulTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'vulTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
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
    * Gets hostName
    *  **参数解释**： 主机名称 **取值范围**： 字符长度1-256位
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
    * @param string|null $hostName **参数解释**： 主机名称 **取值范围**： 字符长度1-256位
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets publicIp
    *  **参数解释**： 服务器公网ip **取值范围**： 字符长度1-64位
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp **参数解释**： 服务器公网ip **取值范围**： 字符长度1-64位
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**： 服务器私网ip **取值范围**： 字符长度0-128位
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**： 服务器私网ip **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
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
    * @param int|null $scanTime **参数解释**： 最近扫描时间 **取值范围**： 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**： 漏洞风险等级 **取值范围**： - Critical：紧急。 - High：高危。 - Medium：中危。 - Low：低危。
    *
    * @return string|null
    */
    public function getSeverityLevel()
    {
        return $this->container['severityLevel'];
    }

    /**
    * Sets severityLevel
    *
    * @param string|null $severityLevel **参数解释**： 漏洞风险等级 **取值范围**： - Critical：紧急。 - High：高危。 - Medium：中危。 - Low：低危。
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets vulTotalNum
    *  **参数解释**： 漏洞数 **取值范围**： 最小值0，最大值10000000
    *
    * @return int|null
    */
    public function getVulTotalNum()
    {
        return $this->container['vulTotalNum'];
    }

    /**
    * Sets vulTotalNum
    *
    * @param int|null $vulTotalNum **参数解释**： 漏洞数 **取值范围**： 最小值0，最大值10000000
    *
    * @return $this
    */
    public function setVulTotalNum($vulTotalNum)
    {
        $this->container['vulTotalNum'] = $vulTotalNum;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**： 主机ID **取值范围**： 字符长度1-128位
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
    * @param string|null $hostId **参数解释**： 主机ID **取值范围**： 字符长度1-128位
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
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

