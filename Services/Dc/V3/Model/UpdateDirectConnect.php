<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDirectConnect implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDirectConnect';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  物理专线的名字
    * description  物理专线的描述信息
    * bandwidth  指定托管专线接入带宽,单位Mbps。[注：标准或运营专线的带宽不能降低！](tag:dt)
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字
    * status  更新资源状态，合法值是：PENDING_PAY,APPLY
    * providerStatus  更新运营商状态，合法值是：ACTIVE,DOWN
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'bandwidth' => 'int',
            'peerLocation' => 'string',
            'status' => 'string',
            'providerStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  物理专线的名字
    * description  物理专线的描述信息
    * bandwidth  指定托管专线接入带宽,单位Mbps。[注：标准或运营专线的带宽不能降低！](tag:dt)
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字
    * status  更新资源状态，合法值是：PENDING_PAY,APPLY
    * providerStatus  更新运营商状态，合法值是：ACTIVE,DOWN
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'bandwidth' => 'int32',
        'peerLocation' => null,
        'status' => null,
        'providerStatus' => null
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
    * name  物理专线的名字
    * description  物理专线的描述信息
    * bandwidth  指定托管专线接入带宽,单位Mbps。[注：标准或运营专线的带宽不能降低！](tag:dt)
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字
    * status  更新资源状态，合法值是：PENDING_PAY,APPLY
    * providerStatus  更新运营商状态，合法值是：ACTIVE,DOWN
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'bandwidth' => 'bandwidth',
            'peerLocation' => 'peer_location',
            'status' => 'status',
            'providerStatus' => 'provider_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  物理专线的名字
    * description  物理专线的描述信息
    * bandwidth  指定托管专线接入带宽,单位Mbps。[注：标准或运营专线的带宽不能降低！](tag:dt)
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字
    * status  更新资源状态，合法值是：PENDING_PAY,APPLY
    * providerStatus  更新运营商状态，合法值是：ACTIVE,DOWN
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'bandwidth' => 'setBandwidth',
            'peerLocation' => 'setPeerLocation',
            'status' => 'setStatus',
            'providerStatus' => 'setProviderStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  物理专线的名字
    * description  物理专线的描述信息
    * bandwidth  指定托管专线接入带宽,单位Mbps。[注：标准或运营专线的带宽不能降低！](tag:dt)
    * peerLocation  物理专线对端所在的物理位置，省/市/街道或IDC名字
    * status  更新资源状态，合法值是：PENDING_PAY,APPLY
    * providerStatus  更新运营商状态，合法值是：ACTIVE,DOWN
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'bandwidth' => 'getBandwidth',
            'peerLocation' => 'getPeerLocation',
            'status' => 'getStatus',
            'providerStatus' => 'getProviderStatus'
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
    const STATUS_PENDING_PAY = 'PENDING_PAY';
    const STATUS_APPLY = 'APPLY';
    const PROVIDER_STATUS_ACTIVE = 'ACTIVE';
    const PROVIDER_STATUS_DOWN = 'DOWN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING_PAY,
            self::STATUS_APPLY,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProviderStatusAllowableValues()
    {
        return [
            self::PROVIDER_STATUS_ACTIVE,
            self::PROVIDER_STATUS_DOWN,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['peerLocation'] = isset($data['peerLocation']) ? $data['peerLocation'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['providerStatus'] = isset($data['providerStatus']) ? $data['providerStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] > 100000)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be smaller than or equal to 100000.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 2)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['peerLocation']) && (mb_strlen($this->container['peerLocation']) > 255)) {
                $invalidProperties[] = "invalid value for 'peerLocation', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['peerLocation']) && (mb_strlen($this->container['peerLocation']) < 0)) {
                $invalidProperties[] = "invalid value for 'peerLocation', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getProviderStatusAllowableValues();
                if (!is_null($this->container['providerStatus']) && !in_array($this->container['providerStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'providerStatus', must be one of '%s'",
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
    * Gets name
    *  物理专线的名字
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
    * @param string|null $name 物理专线的名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  物理专线的描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 物理专线的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets bandwidth
    *  指定托管专线接入带宽,单位Mbps。[注：标准或运营专线的带宽不能降低！](tag:dt)
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 指定托管专线接入带宽,单位Mbps。[注：标准或运营专线的带宽不能降低！](tag:dt)
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets peerLocation
    *  物理专线对端所在的物理位置，省/市/街道或IDC名字
    *
    * @return string|null
    */
    public function getPeerLocation()
    {
        return $this->container['peerLocation'];
    }

    /**
    * Sets peerLocation
    *
    * @param string|null $peerLocation 物理专线对端所在的物理位置，省/市/街道或IDC名字
    *
    * @return $this
    */
    public function setPeerLocation($peerLocation)
    {
        $this->container['peerLocation'] = $peerLocation;
        return $this;
    }

    /**
    * Gets status
    *  更新资源状态，合法值是：PENDING_PAY,APPLY
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 更新资源状态，合法值是：PENDING_PAY,APPLY
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets providerStatus
    *  更新运营商状态，合法值是：ACTIVE,DOWN
    *
    * @return string|null
    */
    public function getProviderStatus()
    {
        return $this->container['providerStatus'];
    }

    /**
    * Sets providerStatus
    *
    * @param string|null $providerStatus 更新运营商状态，合法值是：ACTIVE,DOWN
    *
    * @return $this
    */
    public function setProviderStatus($providerStatus)
    {
        $this->container['providerStatus'] = $providerStatus;
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

