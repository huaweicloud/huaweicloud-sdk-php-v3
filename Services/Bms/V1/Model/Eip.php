<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Eip implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Eip';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * iptype  弹性公网IP地址类型。类型枚举值：5_bgp、5_sbgp详情请参见《虚拟私有云API参考》申请弹性公网IP章节的publicip字段说明。
    * bandwidth  bandwidth
    * extendparam  extendparam
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'iptype' => 'string',
            'bandwidth' => '\HuaweiCloud\SDK\Bms\V1\Model\BandWidth',
            'extendparam' => '\HuaweiCloud\SDK\Bms\V1\Model\ExtendParamEip'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * iptype  弹性公网IP地址类型。类型枚举值：5_bgp、5_sbgp详情请参见《虚拟私有云API参考》申请弹性公网IP章节的publicip字段说明。
    * bandwidth  bandwidth
    * extendparam  extendparam
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'iptype' => null,
        'bandwidth' => null,
        'extendparam' => null
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
    * iptype  弹性公网IP地址类型。类型枚举值：5_bgp、5_sbgp详情请参见《虚拟私有云API参考》申请弹性公网IP章节的publicip字段说明。
    * bandwidth  bandwidth
    * extendparam  extendparam
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'iptype' => 'iptype',
            'bandwidth' => 'bandwidth',
            'extendparam' => 'extendparam'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * iptype  弹性公网IP地址类型。类型枚举值：5_bgp、5_sbgp详情请参见《虚拟私有云API参考》申请弹性公网IP章节的publicip字段说明。
    * bandwidth  bandwidth
    * extendparam  extendparam
    *
    * @var string[]
    */
    protected static $setters = [
            'iptype' => 'setIptype',
            'bandwidth' => 'setBandwidth',
            'extendparam' => 'setExtendparam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * iptype  弹性公网IP地址类型。类型枚举值：5_bgp、5_sbgp详情请参见《虚拟私有云API参考》申请弹性公网IP章节的publicip字段说明。
    * bandwidth  bandwidth
    * extendparam  extendparam
    *
    * @var string[]
    */
    protected static $getters = [
            'iptype' => 'getIptype',
            'bandwidth' => 'getBandwidth',
            'extendparam' => 'getExtendparam'
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
    const IPTYPE__5_BGP = '5_bgp';
    const IPTYPE__5_SBGP = '5_sbgp';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIptypeAllowableValues()
    {
        return [
            self::IPTYPE__5_BGP,
            self::IPTYPE__5_SBGP,
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
        $this->container['iptype'] = isset($data['iptype']) ? $data['iptype'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['extendparam'] = isset($data['extendparam']) ? $data['extendparam'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['iptype'] === null) {
            $invalidProperties[] = "'iptype' can't be null";
        }
            $allowedValues = $this->getIptypeAllowableValues();
                if (!is_null($this->container['iptype']) && !in_array($this->container['iptype'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'iptype', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['bandwidth'] === null) {
            $invalidProperties[] = "'bandwidth' can't be null";
        }
        if ($this->container['extendparam'] === null) {
            $invalidProperties[] = "'extendparam' can't be null";
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
    * Gets iptype
    *  弹性公网IP地址类型。类型枚举值：5_bgp、5_sbgp详情请参见《虚拟私有云API参考》申请弹性公网IP章节的publicip字段说明。
    *
    * @return string
    */
    public function getIptype()
    {
        return $this->container['iptype'];
    }

    /**
    * Sets iptype
    *
    * @param string $iptype 弹性公网IP地址类型。类型枚举值：5_bgp、5_sbgp详情请参见《虚拟私有云API参考》申请弹性公网IP章节的publicip字段说明。
    *
    * @return $this
    */
    public function setIptype($iptype)
    {
        $this->container['iptype'] = $iptype;
        return $this;
    }

    /**
    * Gets bandwidth
    *  bandwidth
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\BandWidth
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\BandWidth $bandwidth bandwidth
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets extendparam
    *  extendparam
    *
    * @return \HuaweiCloud\SDK\Bms\V1\Model\ExtendParamEip
    */
    public function getExtendparam()
    {
        return $this->container['extendparam'];
    }

    /**
    * Sets extendparam
    *
    * @param \HuaweiCloud\SDK\Bms\V1\Model\ExtendParamEip $extendparam extendparam
    *
    * @return $this
    */
    public function setExtendparam($extendparam)
    {
        $this->container['extendparam'] = $extendparam;
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

