<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListBindingGeip implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListBindingGeip';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * globalEipId  geip的id
    * globalEipSegmentId  网段geip的id
    * status  geip的绑定状态
    * type  geip类型：IP_ADDRESS/IP_SEGMENT
    * errorMessage  geip绑定失败的原因
    * cidr  geip的地址ip/mask
    * addressFamily  geip的地址簇
    * ieVtepIp  CloudPond的集群vtepIp
    * createdTime  geip绑定时间
    * gcbId  带宽包的id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'globalEipId' => 'string',
            'globalEipSegmentId' => 'string',
            'status' => 'string',
            'type' => 'string',
            'errorMessage' => 'string',
            'cidr' => 'string',
            'addressFamily' => 'string',
            'ieVtepIp' => 'string',
            'createdTime' => 'string',
            'gcbId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * globalEipId  geip的id
    * globalEipSegmentId  网段geip的id
    * status  geip的绑定状态
    * type  geip类型：IP_ADDRESS/IP_SEGMENT
    * errorMessage  geip绑定失败的原因
    * cidr  geip的地址ip/mask
    * addressFamily  geip的地址簇
    * ieVtepIp  CloudPond的集群vtepIp
    * createdTime  geip绑定时间
    * gcbId  带宽包的id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'globalEipId' => null,
        'globalEipSegmentId' => null,
        'status' => null,
        'type' => null,
        'errorMessage' => null,
        'cidr' => null,
        'addressFamily' => null,
        'ieVtepIp' => null,
        'createdTime' => null,
        'gcbId' => null
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
    * globalEipId  geip的id
    * globalEipSegmentId  网段geip的id
    * status  geip的绑定状态
    * type  geip类型：IP_ADDRESS/IP_SEGMENT
    * errorMessage  geip绑定失败的原因
    * cidr  geip的地址ip/mask
    * addressFamily  geip的地址簇
    * ieVtepIp  CloudPond的集群vtepIp
    * createdTime  geip绑定时间
    * gcbId  带宽包的id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'globalEipId' => 'global_eip_id',
            'globalEipSegmentId' => 'global_eip_segment_id',
            'status' => 'status',
            'type' => 'type',
            'errorMessage' => 'error_message',
            'cidr' => 'cidr',
            'addressFamily' => 'address_family',
            'ieVtepIp' => 'ie_vtep_ip',
            'createdTime' => 'created_time',
            'gcbId' => 'gcb_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * globalEipId  geip的id
    * globalEipSegmentId  网段geip的id
    * status  geip的绑定状态
    * type  geip类型：IP_ADDRESS/IP_SEGMENT
    * errorMessage  geip绑定失败的原因
    * cidr  geip的地址ip/mask
    * addressFamily  geip的地址簇
    * ieVtepIp  CloudPond的集群vtepIp
    * createdTime  geip绑定时间
    * gcbId  带宽包的id
    *
    * @var string[]
    */
    protected static $setters = [
            'globalEipId' => 'setGlobalEipId',
            'globalEipSegmentId' => 'setGlobalEipSegmentId',
            'status' => 'setStatus',
            'type' => 'setType',
            'errorMessage' => 'setErrorMessage',
            'cidr' => 'setCidr',
            'addressFamily' => 'setAddressFamily',
            'ieVtepIp' => 'setIeVtepIp',
            'createdTime' => 'setCreatedTime',
            'gcbId' => 'setGcbId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * globalEipId  geip的id
    * globalEipSegmentId  网段geip的id
    * status  geip的绑定状态
    * type  geip类型：IP_ADDRESS/IP_SEGMENT
    * errorMessage  geip绑定失败的原因
    * cidr  geip的地址ip/mask
    * addressFamily  geip的地址簇
    * ieVtepIp  CloudPond的集群vtepIp
    * createdTime  geip绑定时间
    * gcbId  带宽包的id
    *
    * @var string[]
    */
    protected static $getters = [
            'globalEipId' => 'getGlobalEipId',
            'globalEipSegmentId' => 'getGlobalEipSegmentId',
            'status' => 'getStatus',
            'type' => 'getType',
            'errorMessage' => 'getErrorMessage',
            'cidr' => 'getCidr',
            'addressFamily' => 'getAddressFamily',
            'ieVtepIp' => 'getIeVtepIp',
            'createdTime' => 'getCreatedTime',
            'gcbId' => 'getGcbId'
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
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_ERROR = 'ERROR';
    const TYPE_IP_ADDRESS = 'IP_ADDRESS';
    const TYPE_IP_SEGMENT = 'IP_SEGMENT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_ERROR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_IP_ADDRESS,
            self::TYPE_IP_SEGMENT,
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
        $this->container['globalEipId'] = isset($data['globalEipId']) ? $data['globalEipId'] : null;
        $this->container['globalEipSegmentId'] = isset($data['globalEipSegmentId']) ? $data['globalEipSegmentId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['addressFamily'] = isset($data['addressFamily']) ? $data['addressFamily'] : null;
        $this->container['ieVtepIp'] = isset($data['ieVtepIp']) ? $data['ieVtepIp'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['gcbId'] = isset($data['gcbId']) ? $data['gcbId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets globalEipId
    *  geip的id
    *
    * @return string|null
    */
    public function getGlobalEipId()
    {
        return $this->container['globalEipId'];
    }

    /**
    * Sets globalEipId
    *
    * @param string|null $globalEipId geip的id
    *
    * @return $this
    */
    public function setGlobalEipId($globalEipId)
    {
        $this->container['globalEipId'] = $globalEipId;
        return $this;
    }

    /**
    * Gets globalEipSegmentId
    *  网段geip的id
    *
    * @return string|null
    */
    public function getGlobalEipSegmentId()
    {
        return $this->container['globalEipSegmentId'];
    }

    /**
    * Sets globalEipSegmentId
    *
    * @param string|null $globalEipSegmentId 网段geip的id
    *
    * @return $this
    */
    public function setGlobalEipSegmentId($globalEipSegmentId)
    {
        $this->container['globalEipSegmentId'] = $globalEipSegmentId;
        return $this;
    }

    /**
    * Gets status
    *  geip的绑定状态
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
    * @param string|null $status geip的绑定状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  geip类型：IP_ADDRESS/IP_SEGMENT
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type geip类型：IP_ADDRESS/IP_SEGMENT
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets errorMessage
    *  geip绑定失败的原因
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage geip绑定失败的原因
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets cidr
    *  geip的地址ip/mask
    *
    * @return string|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string|null $cidr geip的地址ip/mask
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets addressFamily
    *  geip的地址簇
    *
    * @return string|null
    */
    public function getAddressFamily()
    {
        return $this->container['addressFamily'];
    }

    /**
    * Sets addressFamily
    *
    * @param string|null $addressFamily geip的地址簇
    *
    * @return $this
    */
    public function setAddressFamily($addressFamily)
    {
        $this->container['addressFamily'] = $addressFamily;
        return $this;
    }

    /**
    * Gets ieVtepIp
    *  CloudPond的集群vtepIp
    *
    * @return string|null
    */
    public function getIeVtepIp()
    {
        return $this->container['ieVtepIp'];
    }

    /**
    * Sets ieVtepIp
    *
    * @param string|null $ieVtepIp CloudPond的集群vtepIp
    *
    * @return $this
    */
    public function setIeVtepIp($ieVtepIp)
    {
        $this->container['ieVtepIp'] = $ieVtepIp;
        return $this;
    }

    /**
    * Gets createdTime
    *  geip绑定时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime geip绑定时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets gcbId
    *  带宽包的id
    *
    * @return string|null
    */
    public function getGcbId()
    {
        return $this->container['gcbId'];
    }

    /**
    * Sets gcbId
    *
    * @param string|null $gcbId 带宽包的id
    *
    * @return $this
    */
    public function setGcbId($gcbId)
    {
        $this->container['gcbId'] = $gcbId;
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

