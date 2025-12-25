<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OcaIp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OcaIp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * value  资产值
    * version  资产类型：  ipv4、ipv6
    * network  network
    * remark  资产备注
    * name  资产名称，默认为资产值
    * relativeValue  相对值，如资产为ipv4，则为对应的ipv6
    * serverRoom  机房
    * serverRack  机柜
    * dataCenter  dataCenter
    * macAddr  mac地址
    * important  重要等级0 ：不重要 1：重要
    * extendProperties  extendProperties
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'value' => 'string',
            'version' => 'string',
            'network' => '\HuaweiCloud\SDK\SecMaster\V1\Model\OcaIpNetwork',
            'remark' => 'string',
            'name' => 'string',
            'relativeValue' => 'string',
            'serverRoom' => 'string',
            'serverRack' => 'string',
            'dataCenter' => '\HuaweiCloud\SDK\SecMaster\V1\Model\OcaIpDataCenter',
            'macAddr' => 'string',
            'important' => 'string',
            'extendProperties' => '\HuaweiCloud\SDK\SecMaster\V1\Model\OcaIpExtendProperties'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * value  资产值
    * version  资产类型：  ipv4、ipv6
    * network  network
    * remark  资产备注
    * name  资产名称，默认为资产值
    * relativeValue  相对值，如资产为ipv4，则为对应的ipv6
    * serverRoom  机房
    * serverRack  机柜
    * dataCenter  dataCenter
    * macAddr  mac地址
    * important  重要等级0 ：不重要 1：重要
    * extendProperties  extendProperties
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'value' => null,
        'version' => null,
        'network' => null,
        'remark' => null,
        'name' => null,
        'relativeValue' => null,
        'serverRoom' => null,
        'serverRack' => null,
        'dataCenter' => null,
        'macAddr' => null,
        'important' => null,
        'extendProperties' => null
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
    * value  资产值
    * version  资产类型：  ipv4、ipv6
    * network  network
    * remark  资产备注
    * name  资产名称，默认为资产值
    * relativeValue  相对值，如资产为ipv4，则为对应的ipv6
    * serverRoom  机房
    * serverRack  机柜
    * dataCenter  dataCenter
    * macAddr  mac地址
    * important  重要等级0 ：不重要 1：重要
    * extendProperties  extendProperties
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'value' => 'value',
            'version' => 'version',
            'network' => 'network',
            'remark' => 'remark',
            'name' => 'name',
            'relativeValue' => 'relative_value',
            'serverRoom' => 'server_room',
            'serverRack' => 'server_rack',
            'dataCenter' => 'data_center',
            'macAddr' => 'mac_addr',
            'important' => 'important',
            'extendProperties' => 'extend_properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * value  资产值
    * version  资产类型：  ipv4、ipv6
    * network  network
    * remark  资产备注
    * name  资产名称，默认为资产值
    * relativeValue  相对值，如资产为ipv4，则为对应的ipv6
    * serverRoom  机房
    * serverRack  机柜
    * dataCenter  dataCenter
    * macAddr  mac地址
    * important  重要等级0 ：不重要 1：重要
    * extendProperties  extendProperties
    *
    * @var string[]
    */
    protected static $setters = [
            'value' => 'setValue',
            'version' => 'setVersion',
            'network' => 'setNetwork',
            'remark' => 'setRemark',
            'name' => 'setName',
            'relativeValue' => 'setRelativeValue',
            'serverRoom' => 'setServerRoom',
            'serverRack' => 'setServerRack',
            'dataCenter' => 'setDataCenter',
            'macAddr' => 'setMacAddr',
            'important' => 'setImportant',
            'extendProperties' => 'setExtendProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * value  资产值
    * version  资产类型：  ipv4、ipv6
    * network  network
    * remark  资产备注
    * name  资产名称，默认为资产值
    * relativeValue  相对值，如资产为ipv4，则为对应的ipv6
    * serverRoom  机房
    * serverRack  机柜
    * dataCenter  dataCenter
    * macAddr  mac地址
    * important  重要等级0 ：不重要 1：重要
    * extendProperties  extendProperties
    *
    * @var string[]
    */
    protected static $getters = [
            'value' => 'getValue',
            'version' => 'getVersion',
            'network' => 'getNetwork',
            'remark' => 'getRemark',
            'name' => 'getName',
            'relativeValue' => 'getRelativeValue',
            'serverRoom' => 'getServerRoom',
            'serverRack' => 'getServerRack',
            'dataCenter' => 'getDataCenter',
            'macAddr' => 'getMacAddr',
            'important' => 'getImportant',
            'extendProperties' => 'getExtendProperties'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['relativeValue'] = isset($data['relativeValue']) ? $data['relativeValue'] : null;
        $this->container['serverRoom'] = isset($data['serverRoom']) ? $data['serverRoom'] : null;
        $this->container['serverRack'] = isset($data['serverRack']) ? $data['serverRack'] : null;
        $this->container['dataCenter'] = isset($data['dataCenter']) ? $data['dataCenter'] : null;
        $this->container['macAddr'] = isset($data['macAddr']) ? $data['macAddr'] : null;
        $this->container['important'] = isset($data['important']) ? $data['important'] : null;
        $this->container['extendProperties'] = isset($data['extendProperties']) ? $data['extendProperties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
            if ((mb_strlen($this->container['value']) > 64)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
            if ((mb_strlen($this->container['version']) > 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) > 512)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['remark']) && (mb_strlen($this->container['remark']) < 0)) {
                $invalidProperties[] = "invalid value for 'remark', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['relativeValue']) && (mb_strlen($this->container['relativeValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'relativeValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['relativeValue']) && (mb_strlen($this->container['relativeValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'relativeValue', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['serverRoom'] === null) {
            $invalidProperties[] = "'serverRoom' can't be null";
        }
            if ((mb_strlen($this->container['serverRoom']) > 128)) {
                $invalidProperties[] = "invalid value for 'serverRoom', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['serverRoom']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverRoom', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['serverRack'] === null) {
            $invalidProperties[] = "'serverRack' can't be null";
        }
            if ((mb_strlen($this->container['serverRack']) > 128)) {
                $invalidProperties[] = "invalid value for 'serverRack', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['serverRack']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverRack', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['dataCenter'] === null) {
            $invalidProperties[] = "'dataCenter' can't be null";
        }
            if (!is_null($this->container['macAddr']) && (mb_strlen($this->container['macAddr']) > 128)) {
                $invalidProperties[] = "invalid value for 'macAddr', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['macAddr']) && (mb_strlen($this->container['macAddr']) < 0)) {
                $invalidProperties[] = "invalid value for 'macAddr', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['important']) && (mb_strlen($this->container['important']) > 1)) {
                $invalidProperties[] = "invalid value for 'important', the character length must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['important']) && (mb_strlen($this->container['important']) < 1)) {
                $invalidProperties[] = "invalid value for 'important', the character length must be bigger than or equal to 1.";
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
    * Gets value
    *  资产值
    *
    * @return string
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string $value 资产值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets version
    *  资产类型：  ipv4、ipv6
    *
    * @return string
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string $version 资产类型：  ipv4、ipv6
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets network
    *  network
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\OcaIpNetwork
    */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
    * Sets network
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\OcaIpNetwork $network network
    *
    * @return $this
    */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;
        return $this;
    }

    /**
    * Gets remark
    *  资产备注
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 资产备注
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets name
    *  资产名称，默认为资产值
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 资产名称，默认为资产值
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets relativeValue
    *  相对值，如资产为ipv4，则为对应的ipv6
    *
    * @return string|null
    */
    public function getRelativeValue()
    {
        return $this->container['relativeValue'];
    }

    /**
    * Sets relativeValue
    *
    * @param string|null $relativeValue 相对值，如资产为ipv4，则为对应的ipv6
    *
    * @return $this
    */
    public function setRelativeValue($relativeValue)
    {
        $this->container['relativeValue'] = $relativeValue;
        return $this;
    }

    /**
    * Gets serverRoom
    *  机房
    *
    * @return string
    */
    public function getServerRoom()
    {
        return $this->container['serverRoom'];
    }

    /**
    * Sets serverRoom
    *
    * @param string $serverRoom 机房
    *
    * @return $this
    */
    public function setServerRoom($serverRoom)
    {
        $this->container['serverRoom'] = $serverRoom;
        return $this;
    }

    /**
    * Gets serverRack
    *  机柜
    *
    * @return string
    */
    public function getServerRack()
    {
        return $this->container['serverRack'];
    }

    /**
    * Sets serverRack
    *
    * @param string $serverRack 机柜
    *
    * @return $this
    */
    public function setServerRack($serverRack)
    {
        $this->container['serverRack'] = $serverRack;
        return $this;
    }

    /**
    * Gets dataCenter
    *  dataCenter
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\OcaIpDataCenter
    */
    public function getDataCenter()
    {
        return $this->container['dataCenter'];
    }

    /**
    * Sets dataCenter
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\OcaIpDataCenter $dataCenter dataCenter
    *
    * @return $this
    */
    public function setDataCenter($dataCenter)
    {
        $this->container['dataCenter'] = $dataCenter;
        return $this;
    }

    /**
    * Gets macAddr
    *  mac地址
    *
    * @return string|null
    */
    public function getMacAddr()
    {
        return $this->container['macAddr'];
    }

    /**
    * Sets macAddr
    *
    * @param string|null $macAddr mac地址
    *
    * @return $this
    */
    public function setMacAddr($macAddr)
    {
        $this->container['macAddr'] = $macAddr;
        return $this;
    }

    /**
    * Gets important
    *  重要等级0 ：不重要 1：重要
    *
    * @return string|null
    */
    public function getImportant()
    {
        return $this->container['important'];
    }

    /**
    * Sets important
    *
    * @param string|null $important 重要等级0 ：不重要 1：重要
    *
    * @return $this
    */
    public function setImportant($important)
    {
        $this->container['important'] = $important;
        return $this;
    }

    /**
    * Gets extendProperties
    *  extendProperties
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\OcaIpExtendProperties|null
    */
    public function getExtendProperties()
    {
        return $this->container['extendProperties'];
    }

    /**
    * Sets extendProperties
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\OcaIpExtendProperties|null $extendProperties extendProperties
    *
    * @return $this
    */
    public function setExtendProperties($extendProperties)
    {
        $this->container['extendProperties'] = $extendProperties;
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

