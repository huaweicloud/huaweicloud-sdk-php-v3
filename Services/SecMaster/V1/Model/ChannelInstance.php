<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChannelInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChannelInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * channelName  分组名称
    * configStatus  configStatus
    * createBy  Iam用户ID
    * miniOnOnline  是否在线
    * monitor  monitor
    * nodeName  分组名称
    * privateIpAddress  IP地址
    * publicIpAddress  IP地址
    * readWrite  readWrite
    * region  地区
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'channelName' => 'string',
            'configStatus' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ConfigStatus',
            'createBy' => 'string',
            'miniOnOnline' => 'bool',
            'monitor' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Monitor',
            'nodeName' => 'string',
            'privateIpAddress' => 'string',
            'publicIpAddress' => 'string',
            'readWrite' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ReadWrite',
            'region' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * channelName  分组名称
    * configStatus  configStatus
    * createBy  Iam用户ID
    * miniOnOnline  是否在线
    * monitor  monitor
    * nodeName  分组名称
    * privateIpAddress  IP地址
    * publicIpAddress  IP地址
    * readWrite  readWrite
    * region  地区
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'channelName' => null,
        'configStatus' => null,
        'createBy' => null,
        'miniOnOnline' => null,
        'monitor' => null,
        'nodeName' => null,
        'privateIpAddress' => null,
        'publicIpAddress' => null,
        'readWrite' => null,
        'region' => null
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
    * channelName  分组名称
    * configStatus  configStatus
    * createBy  Iam用户ID
    * miniOnOnline  是否在线
    * monitor  monitor
    * nodeName  分组名称
    * privateIpAddress  IP地址
    * publicIpAddress  IP地址
    * readWrite  readWrite
    * region  地区
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'channelName' => 'channel_name',
            'configStatus' => 'config_status',
            'createBy' => 'create_by',
            'miniOnOnline' => 'mini_on_online',
            'monitor' => 'monitor',
            'nodeName' => 'node_name',
            'privateIpAddress' => 'private_ip_address',
            'publicIpAddress' => 'public_ip_address',
            'readWrite' => 'read_write',
            'region' => 'region'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * channelName  分组名称
    * configStatus  configStatus
    * createBy  Iam用户ID
    * miniOnOnline  是否在线
    * monitor  monitor
    * nodeName  分组名称
    * privateIpAddress  IP地址
    * publicIpAddress  IP地址
    * readWrite  readWrite
    * region  地区
    *
    * @var string[]
    */
    protected static $setters = [
            'channelName' => 'setChannelName',
            'configStatus' => 'setConfigStatus',
            'createBy' => 'setCreateBy',
            'miniOnOnline' => 'setMiniOnOnline',
            'monitor' => 'setMonitor',
            'nodeName' => 'setNodeName',
            'privateIpAddress' => 'setPrivateIpAddress',
            'publicIpAddress' => 'setPublicIpAddress',
            'readWrite' => 'setReadWrite',
            'region' => 'setRegion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * channelName  分组名称
    * configStatus  configStatus
    * createBy  Iam用户ID
    * miniOnOnline  是否在线
    * monitor  monitor
    * nodeName  分组名称
    * privateIpAddress  IP地址
    * publicIpAddress  IP地址
    * readWrite  readWrite
    * region  地区
    *
    * @var string[]
    */
    protected static $getters = [
            'channelName' => 'getChannelName',
            'configStatus' => 'getConfigStatus',
            'createBy' => 'getCreateBy',
            'miniOnOnline' => 'getMiniOnOnline',
            'monitor' => 'getMonitor',
            'nodeName' => 'getNodeName',
            'privateIpAddress' => 'getPrivateIpAddress',
            'publicIpAddress' => 'getPublicIpAddress',
            'readWrite' => 'getReadWrite',
            'region' => 'getRegion'
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
        $this->container['channelName'] = isset($data['channelName']) ? $data['channelName'] : null;
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['miniOnOnline'] = isset($data['miniOnOnline']) ? $data['miniOnOnline'] : null;
        $this->container['monitor'] = isset($data['monitor']) ? $data['monitor'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['privateIpAddress'] = isset($data['privateIpAddress']) ? $data['privateIpAddress'] : null;
        $this->container['publicIpAddress'] = isset($data['publicIpAddress']) ? $data['publicIpAddress'] : null;
        $this->container['readWrite'] = isset($data['readWrite']) ? $data['readWrite'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['channelName']) && (mb_strlen($this->container['channelName']) > 63)) {
                $invalidProperties[] = "invalid value for 'channelName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['channelName']) && (mb_strlen($this->container['channelName']) < 1)) {
                $invalidProperties[] = "invalid value for 'channelName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 32)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 32)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['nodeName']) && (mb_strlen($this->container['nodeName']) > 63)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['nodeName']) && (mb_strlen($this->container['nodeName']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIpAddress']) && (mb_strlen($this->container['privateIpAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['privateIpAddress']) && (mb_strlen($this->container['privateIpAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['privateIpAddress']) && !preg_match("/((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\\\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/", $this->container['privateIpAddress'])) {
                $invalidProperties[] = "invalid value for 'privateIpAddress', must be conform to the pattern /((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\\\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/.";
            }
            if (!is_null($this->container['publicIpAddress']) && (mb_strlen($this->container['publicIpAddress']) > 15)) {
                $invalidProperties[] = "invalid value for 'publicIpAddress', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['publicIpAddress']) && (mb_strlen($this->container['publicIpAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'publicIpAddress', the character length must be bigger than or equal to 7.";
            }
            if (!is_null($this->container['publicIpAddress']) && !preg_match("/((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\\\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/", $this->container['publicIpAddress'])) {
                $invalidProperties[] = "invalid value for 'publicIpAddress', must be conform to the pattern /((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\\\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)/.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 1024)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
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
    * Gets channelName
    *  分组名称
    *
    * @return string|null
    */
    public function getChannelName()
    {
        return $this->container['channelName'];
    }

    /**
    * Sets channelName
    *
    * @param string|null $channelName 分组名称
    *
    * @return $this
    */
    public function setChannelName($channelName)
    {
        $this->container['channelName'] = $channelName;
        return $this;
    }

    /**
    * Gets configStatus
    *  configStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ConfigStatus|null
    */
    public function getConfigStatus()
    {
        return $this->container['configStatus'];
    }

    /**
    * Sets configStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ConfigStatus|null $configStatus configStatus
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
        return $this;
    }

    /**
    * Gets createBy
    *  Iam用户ID
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy Iam用户ID
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets miniOnOnline
    *  是否在线
    *
    * @return bool|null
    */
    public function getMiniOnOnline()
    {
        return $this->container['miniOnOnline'];
    }

    /**
    * Sets miniOnOnline
    *
    * @param bool|null $miniOnOnline 是否在线
    *
    * @return $this
    */
    public function setMiniOnOnline($miniOnOnline)
    {
        $this->container['miniOnOnline'] = $miniOnOnline;
        return $this;
    }

    /**
    * Gets monitor
    *  monitor
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Monitor|null
    */
    public function getMonitor()
    {
        return $this->container['monitor'];
    }

    /**
    * Sets monitor
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Monitor|null $monitor monitor
    *
    * @return $this
    */
    public function setMonitor($monitor)
    {
        $this->container['monitor'] = $monitor;
        return $this;
    }

    /**
    * Gets nodeName
    *  分组名称
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 分组名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets privateIpAddress
    *  IP地址
    *
    * @return string|null
    */
    public function getPrivateIpAddress()
    {
        return $this->container['privateIpAddress'];
    }

    /**
    * Sets privateIpAddress
    *
    * @param string|null $privateIpAddress IP地址
    *
    * @return $this
    */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->container['privateIpAddress'] = $privateIpAddress;
        return $this;
    }

    /**
    * Gets publicIpAddress
    *  IP地址
    *
    * @return string|null
    */
    public function getPublicIpAddress()
    {
        return $this->container['publicIpAddress'];
    }

    /**
    * Sets publicIpAddress
    *
    * @param string|null $publicIpAddress IP地址
    *
    * @return $this
    */
    public function setPublicIpAddress($publicIpAddress)
    {
        $this->container['publicIpAddress'] = $publicIpAddress;
        return $this;
    }

    /**
    * Gets readWrite
    *  readWrite
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ReadWrite|null
    */
    public function getReadWrite()
    {
        return $this->container['readWrite'];
    }

    /**
    * Sets readWrite
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ReadWrite|null $readWrite readWrite
    *
    * @return $this
    */
    public function setReadWrite($readWrite)
    {
        $this->container['readWrite'] = $readWrite;
        return $this;
    }

    /**
    * Gets region
    *  地区
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
    * @param string|null $region 地区
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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

