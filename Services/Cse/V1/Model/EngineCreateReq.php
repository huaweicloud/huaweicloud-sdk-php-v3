<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EngineCreateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EngineCreateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  微服务引擎专享版的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
    * description  微服务引擎专享版描述，长度0~255。
    * payment  微服务引擎专享版计费方式，1表示按需
    * flavor  微服务引擎专享版的规格
    * azList  当前局点可用区列表。
    * authType  微服务引擎专享版认证方式，RBAC为安全认证，NONE为无认证。
    * vpc  vpc名称
    * vpcId  vpc标识
    * networkId  微服务引擎专享版子网ID
    * subnetCidr  微服务引擎专享版子网划分
    * publicIpId  微服务引擎专享版公网地址ID，当前为null
    * authCred  authCred
    * specType  微服务引擎专享版应用部署类型
    * inputs  引擎附加参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'payment' => 'string',
            'flavor' => 'string',
            'azList' => 'string[]',
            'authType' => 'string',
            'vpc' => 'string',
            'vpcId' => 'string',
            'networkId' => 'string',
            'subnetCidr' => 'string',
            'publicIpId' => 'string',
            'authCred' => '\HuaweiCloud\SDK\Cse\V1\Model\EngineRbacPwd',
            'specType' => 'string',
            'inputs' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  微服务引擎专享版的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
    * description  微服务引擎专享版描述，长度0~255。
    * payment  微服务引擎专享版计费方式，1表示按需
    * flavor  微服务引擎专享版的规格
    * azList  当前局点可用区列表。
    * authType  微服务引擎专享版认证方式，RBAC为安全认证，NONE为无认证。
    * vpc  vpc名称
    * vpcId  vpc标识
    * networkId  微服务引擎专享版子网ID
    * subnetCidr  微服务引擎专享版子网划分
    * publicIpId  微服务引擎专享版公网地址ID，当前为null
    * authCred  authCred
    * specType  微服务引擎专享版应用部署类型
    * inputs  引擎附加参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'payment' => null,
        'flavor' => null,
        'azList' => null,
        'authType' => null,
        'vpc' => null,
        'vpcId' => null,
        'networkId' => null,
        'subnetCidr' => null,
        'publicIpId' => null,
        'authCred' => null,
        'specType' => null,
        'inputs' => null
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
    * name  微服务引擎专享版的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
    * description  微服务引擎专享版描述，长度0~255。
    * payment  微服务引擎专享版计费方式，1表示按需
    * flavor  微服务引擎专享版的规格
    * azList  当前局点可用区列表。
    * authType  微服务引擎专享版认证方式，RBAC为安全认证，NONE为无认证。
    * vpc  vpc名称
    * vpcId  vpc标识
    * networkId  微服务引擎专享版子网ID
    * subnetCidr  微服务引擎专享版子网划分
    * publicIpId  微服务引擎专享版公网地址ID，当前为null
    * authCred  authCred
    * specType  微服务引擎专享版应用部署类型
    * inputs  引擎附加参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'payment' => 'payment',
            'flavor' => 'flavor',
            'azList' => 'azList',
            'authType' => 'authType',
            'vpc' => 'vpc',
            'vpcId' => 'vpcId',
            'networkId' => 'networkId',
            'subnetCidr' => 'subnetCidr',
            'publicIpId' => 'publicIpId',
            'authCred' => 'auth_cred',
            'specType' => 'specType',
            'inputs' => 'inputs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  微服务引擎专享版的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
    * description  微服务引擎专享版描述，长度0~255。
    * payment  微服务引擎专享版计费方式，1表示按需
    * flavor  微服务引擎专享版的规格
    * azList  当前局点可用区列表。
    * authType  微服务引擎专享版认证方式，RBAC为安全认证，NONE为无认证。
    * vpc  vpc名称
    * vpcId  vpc标识
    * networkId  微服务引擎专享版子网ID
    * subnetCidr  微服务引擎专享版子网划分
    * publicIpId  微服务引擎专享版公网地址ID，当前为null
    * authCred  authCred
    * specType  微服务引擎专享版应用部署类型
    * inputs  引擎附加参数
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'payment' => 'setPayment',
            'flavor' => 'setFlavor',
            'azList' => 'setAzList',
            'authType' => 'setAuthType',
            'vpc' => 'setVpc',
            'vpcId' => 'setVpcId',
            'networkId' => 'setNetworkId',
            'subnetCidr' => 'setSubnetCidr',
            'publicIpId' => 'setPublicIpId',
            'authCred' => 'setAuthCred',
            'specType' => 'setSpecType',
            'inputs' => 'setInputs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  微服务引擎专享版的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
    * description  微服务引擎专享版描述，长度0~255。
    * payment  微服务引擎专享版计费方式，1表示按需
    * flavor  微服务引擎专享版的规格
    * azList  当前局点可用区列表。
    * authType  微服务引擎专享版认证方式，RBAC为安全认证，NONE为无认证。
    * vpc  vpc名称
    * vpcId  vpc标识
    * networkId  微服务引擎专享版子网ID
    * subnetCidr  微服务引擎专享版子网划分
    * publicIpId  微服务引擎专享版公网地址ID，当前为null
    * authCred  authCred
    * specType  微服务引擎专享版应用部署类型
    * inputs  引擎附加参数
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'payment' => 'getPayment',
            'flavor' => 'getFlavor',
            'azList' => 'getAzList',
            'authType' => 'getAuthType',
            'vpc' => 'getVpc',
            'vpcId' => 'getVpcId',
            'networkId' => 'getNetworkId',
            'subnetCidr' => 'getSubnetCidr',
            'publicIpId' => 'getPublicIpId',
            'authCred' => 'getAuthCred',
            'specType' => 'getSpecType',
            'inputs' => 'getInputs'
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
    const PAYMENT__1 = '1';
    const FLAVOR_CSE_S1_SMALL2 = 'cse.s1.small2';
    const FLAVOR_CSE_S1_MEDIUM2 = 'cse.s1.medium2';
    const FLAVOR_CSE_S1_LARGE2 = 'cse.s1.large2';
    const FLAVOR_CSE_S1_XLARGE2 = 'cse.s1.xlarge2';
    const AUTH_TYPE_RBAC = 'RBAC';
    const AUTH_TYPE_NONE = 'NONE';
    const SPEC_TYPE_CSE = 'CSE';
    const SPEC_TYPE_CSE2 = 'CSE2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPaymentAllowableValues()
    {
        return [
            self::PAYMENT__1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFlavorAllowableValues()
    {
        return [
            self::FLAVOR_CSE_S1_SMALL2,
            self::FLAVOR_CSE_S1_MEDIUM2,
            self::FLAVOR_CSE_S1_LARGE2,
            self::FLAVOR_CSE_S1_XLARGE2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_RBAC,
            self::AUTH_TYPE_NONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecTypeAllowableValues()
    {
        return [
            self::SPEC_TYPE_CSE,
            self::SPEC_TYPE_CSE2,
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
        $this->container['payment'] = isset($data['payment']) ? $data['payment'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['azList'] = isset($data['azList']) ? $data['azList'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['vpc'] = isset($data['vpc']) ? $data['vpc'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['subnetCidr'] = isset($data['subnetCidr']) ? $data['subnetCidr'] : null;
        $this->container['publicIpId'] = isset($data['publicIpId']) ? $data['publicIpId'] : null;
        $this->container['authCred'] = isset($data['authCred']) ? $data['authCred'] : null;
        $this->container['specType'] = isset($data['specType']) ? $data['specType'] : null;
        $this->container['inputs'] = isset($data['inputs']) ? $data['inputs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!preg_match("/[a-zA-Z]{1}[a-z0-9A-Z-]{3,24}[a-z0-9A-Z]$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[a-zA-Z]{1}[a-z0-9A-Z-]{3,24}[a-z0-9A-Z]$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
        if ($this->container['payment'] === null) {
            $invalidProperties[] = "'payment' can't be null";
        }
            $allowedValues = $this->getPaymentAllowableValues();
                if (!is_null($this->container['payment']) && !in_array($this->container['payment'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'payment', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['payment']) > 24)) {
                $invalidProperties[] = "invalid value for 'payment', the character length must be smaller than or equal to 24.";
            }
        if ($this->container['flavor'] === null) {
            $invalidProperties[] = "'flavor' can't be null";
        }
            $allowedValues = $this->getFlavorAllowableValues();
                if (!is_null($this->container['flavor']) && !in_array($this->container['flavor'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'flavor', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['azList'] === null) {
            $invalidProperties[] = "'azList' can't be null";
        }
        if ($this->container['authType'] === null) {
            $invalidProperties[] = "'authType' can't be null";
        }
            $allowedValues = $this->getAuthTypeAllowableValues();
                if (!is_null($this->container['authType']) && !in_array($this->container['authType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['vpc'] === null) {
            $invalidProperties[] = "'vpc' can't be null";
        }
            if ((mb_strlen($this->container['vpc']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpc', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['networkId'] === null) {
            $invalidProperties[] = "'networkId' can't be null";
        }
            if ((mb_strlen($this->container['networkId']) > 64)) {
                $invalidProperties[] = "invalid value for 'networkId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['subnetCidr'] === null) {
            $invalidProperties[] = "'subnetCidr' can't be null";
        }
            if ((mb_strlen($this->container['subnetCidr']) > 24)) {
                $invalidProperties[] = "invalid value for 'subnetCidr', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['publicIpId']) && (mb_strlen($this->container['publicIpId']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicIpId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['specType'] === null) {
            $invalidProperties[] = "'specType' can't be null";
        }
            $allowedValues = $this->getSpecTypeAllowableValues();
                if (!is_null($this->container['specType']) && !in_array($this->container['specType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'specType', must be one of '%s'",
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
    *  微服务引擎专享版的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 微服务引擎专享版的名称，名称为字母开头，字母、数字、-组成，且不能以-结尾，3-24个字符。
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
    *  微服务引擎专享版描述，长度0~255。
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
    * @param string|null $description 微服务引擎专享版描述，长度0~255。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets payment
    *  微服务引擎专享版计费方式，1表示按需
    *
    * @return string
    */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
    * Sets payment
    *
    * @param string $payment 微服务引擎专享版计费方式，1表示按需
    *
    * @return $this
    */
    public function setPayment($payment)
    {
        $this->container['payment'] = $payment;
        return $this;
    }

    /**
    * Gets flavor
    *  微服务引擎专享版的规格
    *
    * @return string
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string $flavor 微服务引擎专享版的规格
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets azList
    *  当前局点可用区列表。
    *
    * @return string[]
    */
    public function getAzList()
    {
        return $this->container['azList'];
    }

    /**
    * Sets azList
    *
    * @param string[] $azList 当前局点可用区列表。
    *
    * @return $this
    */
    public function setAzList($azList)
    {
        $this->container['azList'] = $azList;
        return $this;
    }

    /**
    * Gets authType
    *  微服务引擎专享版认证方式，RBAC为安全认证，NONE为无认证。
    *
    * @return string
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string $authType 微服务引擎专享版认证方式，RBAC为安全认证，NONE为无认证。
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets vpc
    *  vpc名称
    *
    * @return string
    */
    public function getVpc()
    {
        return $this->container['vpc'];
    }

    /**
    * Sets vpc
    *
    * @param string $vpc vpc名称
    *
    * @return $this
    */
    public function setVpc($vpc)
    {
        $this->container['vpc'] = $vpc;
        return $this;
    }

    /**
    * Gets vpcId
    *  vpc标识
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
    * @param string|null $vpcId vpc标识
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets networkId
    *  微服务引擎专享版子网ID
    *
    * @return string
    */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
    * Sets networkId
    *
    * @param string $networkId 微服务引擎专享版子网ID
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets subnetCidr
    *  微服务引擎专享版子网划分
    *
    * @return string
    */
    public function getSubnetCidr()
    {
        return $this->container['subnetCidr'];
    }

    /**
    * Sets subnetCidr
    *
    * @param string $subnetCidr 微服务引擎专享版子网划分
    *
    * @return $this
    */
    public function setSubnetCidr($subnetCidr)
    {
        $this->container['subnetCidr'] = $subnetCidr;
        return $this;
    }

    /**
    * Gets publicIpId
    *  微服务引擎专享版公网地址ID，当前为null
    *
    * @return string|null
    */
    public function getPublicIpId()
    {
        return $this->container['publicIpId'];
    }

    /**
    * Sets publicIpId
    *
    * @param string|null $publicIpId 微服务引擎专享版公网地址ID，当前为null
    *
    * @return $this
    */
    public function setPublicIpId($publicIpId)
    {
        $this->container['publicIpId'] = $publicIpId;
        return $this;
    }

    /**
    * Gets authCred
    *  authCred
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\EngineRbacPwd|null
    */
    public function getAuthCred()
    {
        return $this->container['authCred'];
    }

    /**
    * Sets authCred
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\EngineRbacPwd|null $authCred authCred
    *
    * @return $this
    */
    public function setAuthCred($authCred)
    {
        $this->container['authCred'] = $authCred;
        return $this;
    }

    /**
    * Gets specType
    *  微服务引擎专享版应用部署类型
    *
    * @return string
    */
    public function getSpecType()
    {
        return $this->container['specType'];
    }

    /**
    * Sets specType
    *
    * @param string $specType 微服务引擎专享版应用部署类型
    *
    * @return $this
    */
    public function setSpecType($specType)
    {
        $this->container['specType'] = $specType;
        return $this;
    }

    /**
    * Gets inputs
    *  引擎附加参数
    *
    * @return map[string,string]|null
    */
    public function getInputs()
    {
        return $this->container['inputs'];
    }

    /**
    * Sets inputs
    *
    * @param map[string,string]|null $inputs 引擎附加参数
    *
    * @return $this
    */
    public function setInputs($inputs)
    {
        $this->container['inputs'] = $inputs;
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

