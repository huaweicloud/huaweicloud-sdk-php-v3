<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AdditionalParamsResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AdditionalParamsResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcId  **参数说明**：企业版实例的VPCID。
    * subnetId  **参数说明**：企业版实例的子网ID。
    * securityGroupId  **参数说明**：企业版实例的安全组ID。
    * cipheringAlgorithm  **参数说明**：实例支持的加密算法。 **取值范围**： - COMMON_ALGORITHM: 通用加密算法（支持RSA，SHA256等国际通用的密码算法） - SM_ALGORITHM: 支持SM系列商密算法（支持SM2，SM3，SM4等国密算法）
    * forwardingInfo  forwardingInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'cipheringAlgorithm' => 'string',
            'forwardingInfo' => '\HuaweiCloud\SDK\IoTDM\V5\Model\ForwardingInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcId  **参数说明**：企业版实例的VPCID。
    * subnetId  **参数说明**：企业版实例的子网ID。
    * securityGroupId  **参数说明**：企业版实例的安全组ID。
    * cipheringAlgorithm  **参数说明**：实例支持的加密算法。 **取值范围**： - COMMON_ALGORITHM: 通用加密算法（支持RSA，SHA256等国际通用的密码算法） - SM_ALGORITHM: 支持SM系列商密算法（支持SM2，SM3，SM4等国密算法）
    * forwardingInfo  forwardingInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'cipheringAlgorithm' => null,
        'forwardingInfo' => null
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
    * vpcId  **参数说明**：企业版实例的VPCID。
    * subnetId  **参数说明**：企业版实例的子网ID。
    * securityGroupId  **参数说明**：企业版实例的安全组ID。
    * cipheringAlgorithm  **参数说明**：实例支持的加密算法。 **取值范围**： - COMMON_ALGORITHM: 通用加密算法（支持RSA，SHA256等国际通用的密码算法） - SM_ALGORITHM: 支持SM系列商密算法（支持SM2，SM3，SM4等国密算法）
    * forwardingInfo  forwardingInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'cipheringAlgorithm' => 'ciphering_algorithm',
            'forwardingInfo' => 'forwarding_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcId  **参数说明**：企业版实例的VPCID。
    * subnetId  **参数说明**：企业版实例的子网ID。
    * securityGroupId  **参数说明**：企业版实例的安全组ID。
    * cipheringAlgorithm  **参数说明**：实例支持的加密算法。 **取值范围**： - COMMON_ALGORITHM: 通用加密算法（支持RSA，SHA256等国际通用的密码算法） - SM_ALGORITHM: 支持SM系列商密算法（支持SM2，SM3，SM4等国密算法）
    * forwardingInfo  forwardingInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'cipheringAlgorithm' => 'setCipheringAlgorithm',
            'forwardingInfo' => 'setForwardingInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcId  **参数说明**：企业版实例的VPCID。
    * subnetId  **参数说明**：企业版实例的子网ID。
    * securityGroupId  **参数说明**：企业版实例的安全组ID。
    * cipheringAlgorithm  **参数说明**：实例支持的加密算法。 **取值范围**： - COMMON_ALGORITHM: 通用加密算法（支持RSA，SHA256等国际通用的密码算法） - SM_ALGORITHM: 支持SM系列商密算法（支持SM2，SM3，SM4等国密算法）
    * forwardingInfo  forwardingInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'cipheringAlgorithm' => 'getCipheringAlgorithm',
            'forwardingInfo' => 'getForwardingInfo'
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
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['cipheringAlgorithm'] = isset($data['cipheringAlgorithm']) ? $data['cipheringAlgorithm'] : null;
        $this->container['forwardingInfo'] = isset($data['forwardingInfo']) ? $data['forwardingInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityGroupId']) && (mb_strlen($this->container['securityGroupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['securityGroupId']) && (mb_strlen($this->container['securityGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cipheringAlgorithm']) && !preg_match("/(COMMON_ALGORITHM|SM_ALGORITHM)/", $this->container['cipheringAlgorithm'])) {
                $invalidProperties[] = "invalid value for 'cipheringAlgorithm', must be conform to the pattern /(COMMON_ALGORITHM|SM_ALGORITHM)/.";
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
    * Gets vpcId
    *  **参数说明**：企业版实例的VPCID。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId **参数说明**：企业版实例的VPCID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  **参数说明**：企业版实例的子网ID。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId **参数说明**：企业版实例的子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  **参数说明**：企业版实例的安全组ID。
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId **参数说明**：企业版实例的安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets cipheringAlgorithm
    *  **参数说明**：实例支持的加密算法。 **取值范围**： - COMMON_ALGORITHM: 通用加密算法（支持RSA，SHA256等国际通用的密码算法） - SM_ALGORITHM: 支持SM系列商密算法（支持SM2，SM3，SM4等国密算法）
    *
    * @return string|null
    */
    public function getCipheringAlgorithm()
    {
        return $this->container['cipheringAlgorithm'];
    }

    /**
    * Sets cipheringAlgorithm
    *
    * @param string|null $cipheringAlgorithm **参数说明**：实例支持的加密算法。 **取值范围**： - COMMON_ALGORITHM: 通用加密算法（支持RSA，SHA256等国际通用的密码算法） - SM_ALGORITHM: 支持SM系列商密算法（支持SM2，SM3，SM4等国密算法）
    *
    * @return $this
    */
    public function setCipheringAlgorithm($cipheringAlgorithm)
    {
        $this->container['cipheringAlgorithm'] = $cipheringAlgorithm;
        return $this;
    }

    /**
    * Gets forwardingInfo
    *  forwardingInfo
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\ForwardingInfo|null
    */
    public function getForwardingInfo()
    {
        return $this->container['forwardingInfo'];
    }

    /**
    * Sets forwardingInfo
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\ForwardingInfo|null $forwardingInfo forwardingInfo
    *
    * @return $this
    */
    public function setForwardingInfo($forwardingInfo)
    {
        $this->container['forwardingInfo'] = $forwardingInfo;
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

