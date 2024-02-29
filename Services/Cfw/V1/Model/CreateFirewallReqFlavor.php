<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateFirewallReqFlavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateFirewallReq_flavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  防火墙版本 “charge_mode”为“prePaid”时，仅支持专业版。 “charge_mode”为“postPaid”时，支持标准版、专业版。  Standard - 标准版 Professional - 专业版
    * extendEipCount  扩展EIP数量，仅包周期场景下生效
    * extendBandwidth  扩展带宽，步长为5，仅包周期场景下生效
    * extendVpcCount  扩展VPC数量，仅包周期场景下生效
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'extendEipCount' => 'int',
            'extendBandwidth' => 'int',
            'extendVpcCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  防火墙版本 “charge_mode”为“prePaid”时，仅支持专业版。 “charge_mode”为“postPaid”时，支持标准版、专业版。  Standard - 标准版 Professional - 专业版
    * extendEipCount  扩展EIP数量，仅包周期场景下生效
    * extendBandwidth  扩展带宽，步长为5，仅包周期场景下生效
    * extendVpcCount  扩展VPC数量，仅包周期场景下生效
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'extendEipCount' => 'int32',
        'extendBandwidth' => 'int32',
        'extendVpcCount' => 'int32'
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
    * version  防火墙版本 “charge_mode”为“prePaid”时，仅支持专业版。 “charge_mode”为“postPaid”时，支持标准版、专业版。  Standard - 标准版 Professional - 专业版
    * extendEipCount  扩展EIP数量，仅包周期场景下生效
    * extendBandwidth  扩展带宽，步长为5，仅包周期场景下生效
    * extendVpcCount  扩展VPC数量，仅包周期场景下生效
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'extendEipCount' => 'extend_eip_count',
            'extendBandwidth' => 'extend_bandwidth',
            'extendVpcCount' => 'extend_vpc_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  防火墙版本 “charge_mode”为“prePaid”时，仅支持专业版。 “charge_mode”为“postPaid”时，支持标准版、专业版。  Standard - 标准版 Professional - 专业版
    * extendEipCount  扩展EIP数量，仅包周期场景下生效
    * extendBandwidth  扩展带宽，步长为5，仅包周期场景下生效
    * extendVpcCount  扩展VPC数量，仅包周期场景下生效
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'extendEipCount' => 'setExtendEipCount',
            'extendBandwidth' => 'setExtendBandwidth',
            'extendVpcCount' => 'setExtendVpcCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  防火墙版本 “charge_mode”为“prePaid”时，仅支持专业版。 “charge_mode”为“postPaid”时，支持标准版、专业版。  Standard - 标准版 Professional - 专业版
    * extendEipCount  扩展EIP数量，仅包周期场景下生效
    * extendBandwidth  扩展带宽，步长为5，仅包周期场景下生效
    * extendVpcCount  扩展VPC数量，仅包周期场景下生效
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'extendEipCount' => 'getExtendEipCount',
            'extendBandwidth' => 'getExtendBandwidth',
            'extendVpcCount' => 'getExtendVpcCount'
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
    const VERSION_STANDARD = 'Standard';
    const VERSION_PROFESSIONAL = 'Professional';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVersionAllowableValues()
    {
        return [
            self::VERSION_STANDARD,
            self::VERSION_PROFESSIONAL,
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['extendEipCount'] = isset($data['extendEipCount']) ? $data['extendEipCount'] : null;
        $this->container['extendBandwidth'] = isset($data['extendBandwidth']) ? $data['extendBandwidth'] : null;
        $this->container['extendVpcCount'] = isset($data['extendVpcCount']) ? $data['extendVpcCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getVersionAllowableValues();
                if (!is_null($this->container['version']) && !in_array($this->container['version'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'version', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['extendEipCount']) && ($this->container['extendEipCount'] > 2000)) {
                $invalidProperties[] = "invalid value for 'extendEipCount', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['extendEipCount']) && ($this->container['extendEipCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'extendEipCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['extendBandwidth']) && ($this->container['extendBandwidth'] > 5000)) {
                $invalidProperties[] = "invalid value for 'extendBandwidth', must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['extendBandwidth']) && ($this->container['extendBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'extendBandwidth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['extendVpcCount']) && ($this->container['extendVpcCount'] > 100)) {
                $invalidProperties[] = "invalid value for 'extendVpcCount', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['extendVpcCount']) && ($this->container['extendVpcCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'extendVpcCount', must be bigger than or equal to 0.";
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
    * Gets version
    *  防火墙版本 “charge_mode”为“prePaid”时，仅支持专业版。 “charge_mode”为“postPaid”时，支持标准版、专业版。  Standard - 标准版 Professional - 专业版
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 防火墙版本 “charge_mode”为“prePaid”时，仅支持专业版。 “charge_mode”为“postPaid”时，支持标准版、专业版。  Standard - 标准版 Professional - 专业版
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets extendEipCount
    *  扩展EIP数量，仅包周期场景下生效
    *
    * @return int|null
    */
    public function getExtendEipCount()
    {
        return $this->container['extendEipCount'];
    }

    /**
    * Sets extendEipCount
    *
    * @param int|null $extendEipCount 扩展EIP数量，仅包周期场景下生效
    *
    * @return $this
    */
    public function setExtendEipCount($extendEipCount)
    {
        $this->container['extendEipCount'] = $extendEipCount;
        return $this;
    }

    /**
    * Gets extendBandwidth
    *  扩展带宽，步长为5，仅包周期场景下生效
    *
    * @return int|null
    */
    public function getExtendBandwidth()
    {
        return $this->container['extendBandwidth'];
    }

    /**
    * Sets extendBandwidth
    *
    * @param int|null $extendBandwidth 扩展带宽，步长为5，仅包周期场景下生效
    *
    * @return $this
    */
    public function setExtendBandwidth($extendBandwidth)
    {
        $this->container['extendBandwidth'] = $extendBandwidth;
        return $this;
    }

    /**
    * Gets extendVpcCount
    *  扩展VPC数量，仅包周期场景下生效
    *
    * @return int|null
    */
    public function getExtendVpcCount()
    {
        return $this->container['extendVpcCount'];
    }

    /**
    * Sets extendVpcCount
    *
    * @param int|null $extendVpcCount 扩展VPC数量，仅包周期场景下生效
    *
    * @return $this
    */
    public function setExtendVpcCount($extendVpcCount)
    {
        $this->container['extendVpcCount'] = $extendVpcCount;
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

