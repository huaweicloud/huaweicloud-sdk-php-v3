<?php

namespace HuaweiCloud\SDK\AntiDDoS\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DDosStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DDosStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * floatingIpId  EIP的ID
    * floatingIpAddress  浮动IP地址
    * productType  EIP所属类型，可选范围： - Anti-DDoS：eip属于Anti-DDoS流量清洗 - CNAD：eip属于DDoS原生高级防护
    * status  防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    * cleanThreshold  清洗阈值
    * blockThreshold  黑洞阈值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'floatingIpId' => 'string',
            'floatingIpAddress' => 'string',
            'productType' => 'string',
            'status' => 'string',
            'cleanThreshold' => 'int',
            'blockThreshold' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * floatingIpId  EIP的ID
    * floatingIpAddress  浮动IP地址
    * productType  EIP所属类型，可选范围： - Anti-DDoS：eip属于Anti-DDoS流量清洗 - CNAD：eip属于DDoS原生高级防护
    * status  防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    * cleanThreshold  清洗阈值
    * blockThreshold  黑洞阈值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'floatingIpId' => null,
        'floatingIpAddress' => null,
        'productType' => null,
        'status' => null,
        'cleanThreshold' => 'int64',
        'blockThreshold' => null
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
    * floatingIpId  EIP的ID
    * floatingIpAddress  浮动IP地址
    * productType  EIP所属类型，可选范围： - Anti-DDoS：eip属于Anti-DDoS流量清洗 - CNAD：eip属于DDoS原生高级防护
    * status  防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    * cleanThreshold  清洗阈值
    * blockThreshold  黑洞阈值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'floatingIpId' => 'floating_ip_id',
            'floatingIpAddress' => 'floating_ip_address',
            'productType' => 'product_type',
            'status' => 'status',
            'cleanThreshold' => 'clean_threshold',
            'blockThreshold' => 'block_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * floatingIpId  EIP的ID
    * floatingIpAddress  浮动IP地址
    * productType  EIP所属类型，可选范围： - Anti-DDoS：eip属于Anti-DDoS流量清洗 - CNAD：eip属于DDoS原生高级防护
    * status  防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    * cleanThreshold  清洗阈值
    * blockThreshold  黑洞阈值
    *
    * @var string[]
    */
    protected static $setters = [
            'floatingIpId' => 'setFloatingIpId',
            'floatingIpAddress' => 'setFloatingIpAddress',
            'productType' => 'setProductType',
            'status' => 'setStatus',
            'cleanThreshold' => 'setCleanThreshold',
            'blockThreshold' => 'setBlockThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * floatingIpId  EIP的ID
    * floatingIpAddress  浮动IP地址
    * productType  EIP所属类型，可选范围： - Anti-DDoS：eip属于Anti-DDoS流量清洗 - CNAD：eip属于DDoS原生高级防护
    * status  防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    * cleanThreshold  清洗阈值
    * blockThreshold  黑洞阈值
    *
    * @var string[]
    */
    protected static $getters = [
            'floatingIpId' => 'getFloatingIpId',
            'floatingIpAddress' => 'getFloatingIpAddress',
            'productType' => 'getProductType',
            'status' => 'getStatus',
            'cleanThreshold' => 'getCleanThreshold',
            'blockThreshold' => 'getBlockThreshold'
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
        $this->container['floatingIpId'] = isset($data['floatingIpId']) ? $data['floatingIpId'] : null;
        $this->container['floatingIpAddress'] = isset($data['floatingIpAddress']) ? $data['floatingIpAddress'] : null;
        $this->container['productType'] = isset($data['productType']) ? $data['productType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['cleanThreshold'] = isset($data['cleanThreshold']) ? $data['cleanThreshold'] : null;
        $this->container['blockThreshold'] = isset($data['blockThreshold']) ? $data['blockThreshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['floatingIpId'] === null) {
            $invalidProperties[] = "'floatingIpId' can't be null";
        }
        if ($this->container['floatingIpAddress'] === null) {
            $invalidProperties[] = "'floatingIpAddress' can't be null";
        }
        if ($this->container['productType'] === null) {
            $invalidProperties[] = "'productType' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['cleanThreshold'] === null) {
            $invalidProperties[] = "'cleanThreshold' can't be null";
        }
        if ($this->container['blockThreshold'] === null) {
            $invalidProperties[] = "'blockThreshold' can't be null";
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
    * Gets floatingIpId
    *  EIP的ID
    *
    * @return string
    */
    public function getFloatingIpId()
    {
        return $this->container['floatingIpId'];
    }

    /**
    * Sets floatingIpId
    *
    * @param string $floatingIpId EIP的ID
    *
    * @return $this
    */
    public function setFloatingIpId($floatingIpId)
    {
        $this->container['floatingIpId'] = $floatingIpId;
        return $this;
    }

    /**
    * Gets floatingIpAddress
    *  浮动IP地址
    *
    * @return string
    */
    public function getFloatingIpAddress()
    {
        return $this->container['floatingIpAddress'];
    }

    /**
    * Sets floatingIpAddress
    *
    * @param string $floatingIpAddress 浮动IP地址
    *
    * @return $this
    */
    public function setFloatingIpAddress($floatingIpAddress)
    {
        $this->container['floatingIpAddress'] = $floatingIpAddress;
        return $this;
    }

    /**
    * Gets productType
    *  EIP所属类型，可选范围： - Anti-DDoS：eip属于Anti-DDoS流量清洗 - CNAD：eip属于DDoS原生高级防护
    *
    * @return string
    */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
    * Sets productType
    *
    * @param string $productType EIP所属类型，可选范围： - Anti-DDoS：eip属于Anti-DDoS流量清洗 - CNAD：eip属于DDoS原生高级防护
    *
    * @return $this
    */
    public function setProductType($productType)
    {
        $this->container['productType'] = $productType;
        return $this;
    }

    /**
    * Gets status
    *  防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 防护状态，可选范围： - normal：表示正常 - configging：表示设置中 - notConfig：表示未设置 - packetcleaning：表示清洗 - packetdropping：表示黑洞
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets cleanThreshold
    *  清洗阈值
    *
    * @return int
    */
    public function getCleanThreshold()
    {
        return $this->container['cleanThreshold'];
    }

    /**
    * Sets cleanThreshold
    *
    * @param int $cleanThreshold 清洗阈值
    *
    * @return $this
    */
    public function setCleanThreshold($cleanThreshold)
    {
        $this->container['cleanThreshold'] = $cleanThreshold;
        return $this;
    }

    /**
    * Gets blockThreshold
    *  黑洞阈值
    *
    * @return string
    */
    public function getBlockThreshold()
    {
        return $this->container['blockThreshold'];
    }

    /**
    * Sets blockThreshold
    *
    * @param string $blockThreshold 黑洞阈值
    *
    * @return $this
    */
    public function setBlockThreshold($blockThreshold)
    {
        $this->container['blockThreshold'] = $blockThreshold;
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

