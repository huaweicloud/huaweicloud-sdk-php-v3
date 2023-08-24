<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckHostInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckHostInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostId  服务器ID
    * hostName  服务器名称
    * hostPublicIp  服务器公网IP
    * hostPrivateIp  服务器私网IP
    * scanTime  扫描时间
    * failedNum  风险项数量
    * passedNum  通过项数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostId' => 'string',
            'hostName' => 'string',
            'hostPublicIp' => 'string',
            'hostPrivateIp' => 'string',
            'scanTime' => 'int',
            'failedNum' => 'int',
            'passedNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostId  服务器ID
    * hostName  服务器名称
    * hostPublicIp  服务器公网IP
    * hostPrivateIp  服务器私网IP
    * scanTime  扫描时间
    * failedNum  风险项数量
    * passedNum  通过项数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostId' => null,
        'hostName' => null,
        'hostPublicIp' => null,
        'hostPrivateIp' => null,
        'scanTime' => 'int64',
        'failedNum' => 'int32',
        'passedNum' => 'int32'
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
    * hostId  服务器ID
    * hostName  服务器名称
    * hostPublicIp  服务器公网IP
    * hostPrivateIp  服务器私网IP
    * scanTime  扫描时间
    * failedNum  风险项数量
    * passedNum  通过项数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'hostPublicIp' => 'host_public_ip',
            'hostPrivateIp' => 'host_private_ip',
            'scanTime' => 'scan_time',
            'failedNum' => 'failed_num',
            'passedNum' => 'passed_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostId  服务器ID
    * hostName  服务器名称
    * hostPublicIp  服务器公网IP
    * hostPrivateIp  服务器私网IP
    * scanTime  扫描时间
    * failedNum  风险项数量
    * passedNum  通过项数量
    *
    * @var string[]
    */
    protected static $setters = [
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'hostPublicIp' => 'setHostPublicIp',
            'hostPrivateIp' => 'setHostPrivateIp',
            'scanTime' => 'setScanTime',
            'failedNum' => 'setFailedNum',
            'passedNum' => 'setPassedNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostId  服务器ID
    * hostName  服务器名称
    * hostPublicIp  服务器公网IP
    * hostPrivateIp  服务器私网IP
    * scanTime  扫描时间
    * failedNum  风险项数量
    * passedNum  通过项数量
    *
    * @var string[]
    */
    protected static $getters = [
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'hostPublicIp' => 'getHostPublicIp',
            'hostPrivateIp' => 'getHostPrivateIp',
            'scanTime' => 'getScanTime',
            'failedNum' => 'getFailedNum',
            'passedNum' => 'getPassedNum'
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
        $this->container['hostPublicIp'] = isset($data['hostPublicIp']) ? $data['hostPublicIp'] : null;
        $this->container['hostPrivateIp'] = isset($data['hostPrivateIp']) ? $data['hostPrivateIp'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['failedNum'] = isset($data['failedNum']) ? $data['failedNum'] : null;
        $this->container['passedNum'] = isset($data['passedNum']) ? $data['passedNum'] : null;
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
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostPublicIp']) && (mb_strlen($this->container['hostPublicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'hostPublicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['hostPublicIp']) && (mb_strlen($this->container['hostPublicIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostPublicIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostPrivateIp']) && (mb_strlen($this->container['hostPrivateIp']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostPrivateIp', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostPrivateIp']) && (mb_strlen($this->container['hostPrivateIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostPrivateIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['passedNum']) && ($this->container['passedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'passedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['passedNum']) && ($this->container['passedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'passedNum', must be bigger than or equal to 0.";
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
    *  服务器ID
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
    * @param string|null $hostId 服务器ID
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
    * Gets hostPublicIp
    *  服务器公网IP
    *
    * @return string|null
    */
    public function getHostPublicIp()
    {
        return $this->container['hostPublicIp'];
    }

    /**
    * Sets hostPublicIp
    *
    * @param string|null $hostPublicIp 服务器公网IP
    *
    * @return $this
    */
    public function setHostPublicIp($hostPublicIp)
    {
        $this->container['hostPublicIp'] = $hostPublicIp;
        return $this;
    }

    /**
    * Gets hostPrivateIp
    *  服务器私网IP
    *
    * @return string|null
    */
    public function getHostPrivateIp()
    {
        return $this->container['hostPrivateIp'];
    }

    /**
    * Sets hostPrivateIp
    *
    * @param string|null $hostPrivateIp 服务器私网IP
    *
    * @return $this
    */
    public function setHostPrivateIp($hostPrivateIp)
    {
        $this->container['hostPrivateIp'] = $hostPrivateIp;
        return $this;
    }

    /**
    * Gets scanTime
    *  扫描时间
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
    * @param int|null $scanTime 扫描时间
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets failedNum
    *  风险项数量
    *
    * @return int|null
    */
    public function getFailedNum()
    {
        return $this->container['failedNum'];
    }

    /**
    * Sets failedNum
    *
    * @param int|null $failedNum 风险项数量
    *
    * @return $this
    */
    public function setFailedNum($failedNum)
    {
        $this->container['failedNum'] = $failedNum;
        return $this;
    }

    /**
    * Gets passedNum
    *  通过项数量
    *
    * @return int|null
    */
    public function getPassedNum()
    {
        return $this->container['passedNum'];
    }

    /**
    * Sets passedNum
    *
    * @param int|null $passedNum 通过项数量
    *
    * @return $this
    */
    public function setPassedNum($passedNum)
    {
        $this->container['passedNum'] = $passedNum;
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

