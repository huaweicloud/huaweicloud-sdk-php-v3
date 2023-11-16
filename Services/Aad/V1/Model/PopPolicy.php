<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PopPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PopPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * blockLocation  位置封禁列表
    * blockProtocol  协议封禁列表
    * bwList  bwList
    * connectionProtection  是否开启连接防护
    * connectionProtectionList  连接防护列表
    * fingerprintCount  指纹数
    * portBlockCount  端口封禁数
    * watermarkCount  水印数
    * ifExistTraffic  是否存在流量
    * pop  固定值ALL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'blockLocation' => 'string[]',
            'blockProtocol' => 'string[]',
            'bwList' => '\HuaweiCloud\SDK\Aad\V1\Model\Bw',
            'connectionProtection' => 'bool',
            'connectionProtectionList' => 'string[]',
            'fingerprintCount' => 'int',
            'portBlockCount' => 'int',
            'watermarkCount' => 'int',
            'ifExistTraffic' => 'bool',
            'pop' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * blockLocation  位置封禁列表
    * blockProtocol  协议封禁列表
    * bwList  bwList
    * connectionProtection  是否开启连接防护
    * connectionProtectionList  连接防护列表
    * fingerprintCount  指纹数
    * portBlockCount  端口封禁数
    * watermarkCount  水印数
    * ifExistTraffic  是否存在流量
    * pop  固定值ALL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'blockLocation' => null,
        'blockProtocol' => null,
        'bwList' => null,
        'connectionProtection' => null,
        'connectionProtectionList' => null,
        'fingerprintCount' => 'int32',
        'portBlockCount' => 'int32',
        'watermarkCount' => 'int32',
        'ifExistTraffic' => null,
        'pop' => null
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
    * blockLocation  位置封禁列表
    * blockProtocol  协议封禁列表
    * bwList  bwList
    * connectionProtection  是否开启连接防护
    * connectionProtectionList  连接防护列表
    * fingerprintCount  指纹数
    * portBlockCount  端口封禁数
    * watermarkCount  水印数
    * ifExistTraffic  是否存在流量
    * pop  固定值ALL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'blockLocation' => 'block_location',
            'blockProtocol' => 'block_protocol',
            'bwList' => 'bw_list',
            'connectionProtection' => 'connection_protection',
            'connectionProtectionList' => 'connection_protection_list',
            'fingerprintCount' => 'fingerprint_count',
            'portBlockCount' => 'port_block_count',
            'watermarkCount' => 'watermark_count',
            'ifExistTraffic' => 'if_exist_traffic',
            'pop' => 'pop'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * blockLocation  位置封禁列表
    * blockProtocol  协议封禁列表
    * bwList  bwList
    * connectionProtection  是否开启连接防护
    * connectionProtectionList  连接防护列表
    * fingerprintCount  指纹数
    * portBlockCount  端口封禁数
    * watermarkCount  水印数
    * ifExistTraffic  是否存在流量
    * pop  固定值ALL
    *
    * @var string[]
    */
    protected static $setters = [
            'blockLocation' => 'setBlockLocation',
            'blockProtocol' => 'setBlockProtocol',
            'bwList' => 'setBwList',
            'connectionProtection' => 'setConnectionProtection',
            'connectionProtectionList' => 'setConnectionProtectionList',
            'fingerprintCount' => 'setFingerprintCount',
            'portBlockCount' => 'setPortBlockCount',
            'watermarkCount' => 'setWatermarkCount',
            'ifExistTraffic' => 'setIfExistTraffic',
            'pop' => 'setPop'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * blockLocation  位置封禁列表
    * blockProtocol  协议封禁列表
    * bwList  bwList
    * connectionProtection  是否开启连接防护
    * connectionProtectionList  连接防护列表
    * fingerprintCount  指纹数
    * portBlockCount  端口封禁数
    * watermarkCount  水印数
    * ifExistTraffic  是否存在流量
    * pop  固定值ALL
    *
    * @var string[]
    */
    protected static $getters = [
            'blockLocation' => 'getBlockLocation',
            'blockProtocol' => 'getBlockProtocol',
            'bwList' => 'getBwList',
            'connectionProtection' => 'getConnectionProtection',
            'connectionProtectionList' => 'getConnectionProtectionList',
            'fingerprintCount' => 'getFingerprintCount',
            'portBlockCount' => 'getPortBlockCount',
            'watermarkCount' => 'getWatermarkCount',
            'ifExistTraffic' => 'getIfExistTraffic',
            'pop' => 'getPop'
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
    const POP_ALL = 'ALL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPopAllowableValues()
    {
        return [
            self::POP_ALL,
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
        $this->container['blockLocation'] = isset($data['blockLocation']) ? $data['blockLocation'] : null;
        $this->container['blockProtocol'] = isset($data['blockProtocol']) ? $data['blockProtocol'] : null;
        $this->container['bwList'] = isset($data['bwList']) ? $data['bwList'] : null;
        $this->container['connectionProtection'] = isset($data['connectionProtection']) ? $data['connectionProtection'] : null;
        $this->container['connectionProtectionList'] = isset($data['connectionProtectionList']) ? $data['connectionProtectionList'] : null;
        $this->container['fingerprintCount'] = isset($data['fingerprintCount']) ? $data['fingerprintCount'] : null;
        $this->container['portBlockCount'] = isset($data['portBlockCount']) ? $data['portBlockCount'] : null;
        $this->container['watermarkCount'] = isset($data['watermarkCount']) ? $data['watermarkCount'] : null;
        $this->container['ifExistTraffic'] = isset($data['ifExistTraffic']) ? $data['ifExistTraffic'] : null;
        $this->container['pop'] = isset($data['pop']) ? $data['pop'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['blockLocation'] === null) {
            $invalidProperties[] = "'blockLocation' can't be null";
        }
        if ($this->container['blockProtocol'] === null) {
            $invalidProperties[] = "'blockProtocol' can't be null";
        }
        if ($this->container['bwList'] === null) {
            $invalidProperties[] = "'bwList' can't be null";
        }
        if ($this->container['connectionProtection'] === null) {
            $invalidProperties[] = "'connectionProtection' can't be null";
        }
        if ($this->container['connectionProtectionList'] === null) {
            $invalidProperties[] = "'connectionProtectionList' can't be null";
        }
        if ($this->container['fingerprintCount'] === null) {
            $invalidProperties[] = "'fingerprintCount' can't be null";
        }
            if (($this->container['fingerprintCount'] > 255)) {
                $invalidProperties[] = "invalid value for 'fingerprintCount', must be smaller than or equal to 255.";
            }
            if (($this->container['fingerprintCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'fingerprintCount', must be bigger than or equal to 0.";
            }
        if ($this->container['portBlockCount'] === null) {
            $invalidProperties[] = "'portBlockCount' can't be null";
        }
            if (($this->container['portBlockCount'] > 255)) {
                $invalidProperties[] = "invalid value for 'portBlockCount', must be smaller than or equal to 255.";
            }
            if (($this->container['portBlockCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'portBlockCount', must be bigger than or equal to 0.";
            }
        if ($this->container['watermarkCount'] === null) {
            $invalidProperties[] = "'watermarkCount' can't be null";
        }
            if (($this->container['watermarkCount'] > 255)) {
                $invalidProperties[] = "invalid value for 'watermarkCount', must be smaller than or equal to 255.";
            }
            if (($this->container['watermarkCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'watermarkCount', must be bigger than or equal to 0.";
            }
        if ($this->container['ifExistTraffic'] === null) {
            $invalidProperties[] = "'ifExistTraffic' can't be null";
        }
        if ($this->container['pop'] === null) {
            $invalidProperties[] = "'pop' can't be null";
        }
            $allowedValues = $this->getPopAllowableValues();
                if (!is_null($this->container['pop']) && !in_array($this->container['pop'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pop', must be one of '%s'",
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
    * Gets blockLocation
    *  位置封禁列表
    *
    * @return string[]
    */
    public function getBlockLocation()
    {
        return $this->container['blockLocation'];
    }

    /**
    * Sets blockLocation
    *
    * @param string[] $blockLocation 位置封禁列表
    *
    * @return $this
    */
    public function setBlockLocation($blockLocation)
    {
        $this->container['blockLocation'] = $blockLocation;
        return $this;
    }

    /**
    * Gets blockProtocol
    *  协议封禁列表
    *
    * @return string[]
    */
    public function getBlockProtocol()
    {
        return $this->container['blockProtocol'];
    }

    /**
    * Sets blockProtocol
    *
    * @param string[] $blockProtocol 协议封禁列表
    *
    * @return $this
    */
    public function setBlockProtocol($blockProtocol)
    {
        $this->container['blockProtocol'] = $blockProtocol;
        return $this;
    }

    /**
    * Gets bwList
    *  bwList
    *
    * @return \HuaweiCloud\SDK\Aad\V1\Model\Bw
    */
    public function getBwList()
    {
        return $this->container['bwList'];
    }

    /**
    * Sets bwList
    *
    * @param \HuaweiCloud\SDK\Aad\V1\Model\Bw $bwList bwList
    *
    * @return $this
    */
    public function setBwList($bwList)
    {
        $this->container['bwList'] = $bwList;
        return $this;
    }

    /**
    * Gets connectionProtection
    *  是否开启连接防护
    *
    * @return bool
    */
    public function getConnectionProtection()
    {
        return $this->container['connectionProtection'];
    }

    /**
    * Sets connectionProtection
    *
    * @param bool $connectionProtection 是否开启连接防护
    *
    * @return $this
    */
    public function setConnectionProtection($connectionProtection)
    {
        $this->container['connectionProtection'] = $connectionProtection;
        return $this;
    }

    /**
    * Gets connectionProtectionList
    *  连接防护列表
    *
    * @return string[]
    */
    public function getConnectionProtectionList()
    {
        return $this->container['connectionProtectionList'];
    }

    /**
    * Sets connectionProtectionList
    *
    * @param string[] $connectionProtectionList 连接防护列表
    *
    * @return $this
    */
    public function setConnectionProtectionList($connectionProtectionList)
    {
        $this->container['connectionProtectionList'] = $connectionProtectionList;
        return $this;
    }

    /**
    * Gets fingerprintCount
    *  指纹数
    *
    * @return int
    */
    public function getFingerprintCount()
    {
        return $this->container['fingerprintCount'];
    }

    /**
    * Sets fingerprintCount
    *
    * @param int $fingerprintCount 指纹数
    *
    * @return $this
    */
    public function setFingerprintCount($fingerprintCount)
    {
        $this->container['fingerprintCount'] = $fingerprintCount;
        return $this;
    }

    /**
    * Gets portBlockCount
    *  端口封禁数
    *
    * @return int
    */
    public function getPortBlockCount()
    {
        return $this->container['portBlockCount'];
    }

    /**
    * Sets portBlockCount
    *
    * @param int $portBlockCount 端口封禁数
    *
    * @return $this
    */
    public function setPortBlockCount($portBlockCount)
    {
        $this->container['portBlockCount'] = $portBlockCount;
        return $this;
    }

    /**
    * Gets watermarkCount
    *  水印数
    *
    * @return int
    */
    public function getWatermarkCount()
    {
        return $this->container['watermarkCount'];
    }

    /**
    * Sets watermarkCount
    *
    * @param int $watermarkCount 水印数
    *
    * @return $this
    */
    public function setWatermarkCount($watermarkCount)
    {
        $this->container['watermarkCount'] = $watermarkCount;
        return $this;
    }

    /**
    * Gets ifExistTraffic
    *  是否存在流量
    *
    * @return bool
    */
    public function getIfExistTraffic()
    {
        return $this->container['ifExistTraffic'];
    }

    /**
    * Sets ifExistTraffic
    *
    * @param bool $ifExistTraffic 是否存在流量
    *
    * @return $this
    */
    public function setIfExistTraffic($ifExistTraffic)
    {
        $this->container['ifExistTraffic'] = $ifExistTraffic;
        return $this;
    }

    /**
    * Gets pop
    *  固定值ALL
    *
    * @return string
    */
    public function getPop()
    {
        return $this->container['pop'];
    }

    /**
    * Sets pop
    *
    * @param string $pop 固定值ALL
    *
    * @return $this
    */
    public function setPop($pop)
    {
        $this->container['pop'] = $pop;
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

