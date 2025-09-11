<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  企业仓库实例名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，3-64个字符。
    * description  企业仓库实例描述
    * spec  企业仓库实例规格，目前支持企业版(swr.ee.professional)
    * vpcId  用户虚拟私有云ID
    * subnetId  用户子网的网络ID
    * projectId  vpc和子网所在项目编号
    * chargeMode  实例计费模式，目前只支持按需(postPaid)
    * enterpriseProjectId  企业项目编号
    * resourceTags  指定资源tag.
    * obsEncrypt  obs桶是否开启加密, 如果开启了加密，则可以根据encrypt_type指定加密算法
    * encryptType  obs桶加密类型，空值使用AES-256加密算法, gm为国密加密算法
    * obsBucketName  指定obs桶的名称，当指定自定义obs桶之后，则无需对obs_encrypt、encrypt_type进行传值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'spec' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'projectId' => 'string',
            'chargeMode' => 'string',
            'enterpriseProjectId' => 'string',
            'resourceTags' => '\HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceRequestBodyResourceTags[]',
            'obsEncrypt' => 'bool',
            'encryptType' => 'string',
            'obsBucketName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  企业仓库实例名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，3-64个字符。
    * description  企业仓库实例描述
    * spec  企业仓库实例规格，目前支持企业版(swr.ee.professional)
    * vpcId  用户虚拟私有云ID
    * subnetId  用户子网的网络ID
    * projectId  vpc和子网所在项目编号
    * chargeMode  实例计费模式，目前只支持按需(postPaid)
    * enterpriseProjectId  企业项目编号
    * resourceTags  指定资源tag.
    * obsEncrypt  obs桶是否开启加密, 如果开启了加密，则可以根据encrypt_type指定加密算法
    * encryptType  obs桶加密类型，空值使用AES-256加密算法, gm为国密加密算法
    * obsBucketName  指定obs桶的名称，当指定自定义obs桶之后，则无需对obs_encrypt、encrypt_type进行传值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'spec' => null,
        'vpcId' => null,
        'subnetId' => null,
        'projectId' => null,
        'chargeMode' => null,
        'enterpriseProjectId' => null,
        'resourceTags' => null,
        'obsEncrypt' => null,
        'encryptType' => null,
        'obsBucketName' => null
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
    * name  企业仓库实例名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，3-64个字符。
    * description  企业仓库实例描述
    * spec  企业仓库实例规格，目前支持企业版(swr.ee.professional)
    * vpcId  用户虚拟私有云ID
    * subnetId  用户子网的网络ID
    * projectId  vpc和子网所在项目编号
    * chargeMode  实例计费模式，目前只支持按需(postPaid)
    * enterpriseProjectId  企业项目编号
    * resourceTags  指定资源tag.
    * obsEncrypt  obs桶是否开启加密, 如果开启了加密，则可以根据encrypt_type指定加密算法
    * encryptType  obs桶加密类型，空值使用AES-256加密算法, gm为国密加密算法
    * obsBucketName  指定obs桶的名称，当指定自定义obs桶之后，则无需对obs_encrypt、encrypt_type进行传值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'spec' => 'spec',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'projectId' => 'project_id',
            'chargeMode' => 'charge_mode',
            'enterpriseProjectId' => 'enterprise_project_id',
            'resourceTags' => 'resource_tags',
            'obsEncrypt' => 'obs_encrypt',
            'encryptType' => 'encrypt_type',
            'obsBucketName' => 'obs_bucket_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  企业仓库实例名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，3-64个字符。
    * description  企业仓库实例描述
    * spec  企业仓库实例规格，目前支持企业版(swr.ee.professional)
    * vpcId  用户虚拟私有云ID
    * subnetId  用户子网的网络ID
    * projectId  vpc和子网所在项目编号
    * chargeMode  实例计费模式，目前只支持按需(postPaid)
    * enterpriseProjectId  企业项目编号
    * resourceTags  指定资源tag.
    * obsEncrypt  obs桶是否开启加密, 如果开启了加密，则可以根据encrypt_type指定加密算法
    * encryptType  obs桶加密类型，空值使用AES-256加密算法, gm为国密加密算法
    * obsBucketName  指定obs桶的名称，当指定自定义obs桶之后，则无需对obs_encrypt、encrypt_type进行传值。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'spec' => 'setSpec',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'projectId' => 'setProjectId',
            'chargeMode' => 'setChargeMode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'resourceTags' => 'setResourceTags',
            'obsEncrypt' => 'setObsEncrypt',
            'encryptType' => 'setEncryptType',
            'obsBucketName' => 'setObsBucketName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  企业仓库实例名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，3-64个字符。
    * description  企业仓库实例描述
    * spec  企业仓库实例规格，目前支持企业版(swr.ee.professional)
    * vpcId  用户虚拟私有云ID
    * subnetId  用户子网的网络ID
    * projectId  vpc和子网所在项目编号
    * chargeMode  实例计费模式，目前只支持按需(postPaid)
    * enterpriseProjectId  企业项目编号
    * resourceTags  指定资源tag.
    * obsEncrypt  obs桶是否开启加密, 如果开启了加密，则可以根据encrypt_type指定加密算法
    * encryptType  obs桶加密类型，空值使用AES-256加密算法, gm为国密加密算法
    * obsBucketName  指定obs桶的名称，当指定自定义obs桶之后，则无需对obs_encrypt、encrypt_type进行传值。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'spec' => 'getSpec',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'projectId' => 'getProjectId',
            'chargeMode' => 'getChargeMode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'resourceTags' => 'getResourceTags',
            'obsEncrypt' => 'getObsEncrypt',
            'encryptType' => 'getEncryptType',
            'obsBucketName' => 'getObsBucketName'
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
    const SPEC_SWR_EE_BASIC = 'swr.ee.basic';
    const SPEC_SWR_EE_PROFESSIONAL = 'swr.ee.professional';
    const CHARGE_MODE_POST_PAID = 'postPaid';
    const ENCRYPT_TYPE_GM = 'gm';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSpecAllowableValues()
    {
        return [
            self::SPEC_SWR_EE_BASIC,
            self::SPEC_SWR_EE_PROFESSIONAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_POST_PAID,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEncryptTypeAllowableValues()
    {
        return [
            self::ENCRYPT_TYPE_GM,
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
        $this->container['spec'] = isset($data['spec']) ? $data['spec'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['resourceTags'] = isset($data['resourceTags']) ? $data['resourceTags'] : null;
        $this->container['obsEncrypt'] = isset($data['obsEncrypt']) ? $data['obsEncrypt'] : null;
        $this->container['encryptType'] = isset($data['encryptType']) ? $data['encryptType'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
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
        if ($this->container['spec'] === null) {
            $invalidProperties[] = "'spec' can't be null";
        }
            $allowedValues = $this->getSpecAllowableValues();
                if (!is_null($this->container['spec']) && !in_array($this->container['spec'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'spec', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['chargeMode'] === null) {
            $invalidProperties[] = "'chargeMode' can't be null";
        }
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
            $allowedValues = $this->getEncryptTypeAllowableValues();
                if (!is_null($this->container['encryptType']) && !in_array($this->container['encryptType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'encryptType', must be one of '%s'",
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
    *  企业仓库实例名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，3-64个字符。
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
    * @param string $name 企业仓库实例名称，小写字母或数字开头，后面跟小写字母、数字、点、下划线或中划线（其中点、下划线、中划线不能直接连续），小写字母或数字结尾，3-64个字符。
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
    *  企业仓库实例描述
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
    * @param string|null $description 企业仓库实例描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets spec
    *  企业仓库实例规格，目前支持企业版(swr.ee.professional)
    *
    * @return string
    */
    public function getSpec()
    {
        return $this->container['spec'];
    }

    /**
    * Sets spec
    *
    * @param string $spec 企业仓库实例规格，目前支持企业版(swr.ee.professional)
    *
    * @return $this
    */
    public function setSpec($spec)
    {
        $this->container['spec'] = $spec;
        return $this;
    }

    /**
    * Gets vpcId
    *  用户虚拟私有云ID
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 用户虚拟私有云ID
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
    *  用户子网的网络ID
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 用户子网的网络ID
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets projectId
    *  vpc和子网所在项目编号
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId vpc和子网所在项目编号
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets chargeMode
    *  实例计费模式，目前只支持按需(postPaid)
    *
    * @return string
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string $chargeMode 实例计费模式，目前只支持按需(postPaid)
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目编号
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目编号
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets resourceTags
    *  指定资源tag.
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceRequestBodyResourceTags[]|null
    */
    public function getResourceTags()
    {
        return $this->container['resourceTags'];
    }

    /**
    * Sets resourceTags
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\CreateInstanceRequestBodyResourceTags[]|null $resourceTags 指定资源tag.
    *
    * @return $this
    */
    public function setResourceTags($resourceTags)
    {
        $this->container['resourceTags'] = $resourceTags;
        return $this;
    }

    /**
    * Gets obsEncrypt
    *  obs桶是否开启加密, 如果开启了加密，则可以根据encrypt_type指定加密算法
    *
    * @return bool|null
    */
    public function getObsEncrypt()
    {
        return $this->container['obsEncrypt'];
    }

    /**
    * Sets obsEncrypt
    *
    * @param bool|null $obsEncrypt obs桶是否开启加密, 如果开启了加密，则可以根据encrypt_type指定加密算法
    *
    * @return $this
    */
    public function setObsEncrypt($obsEncrypt)
    {
        $this->container['obsEncrypt'] = $obsEncrypt;
        return $this;
    }

    /**
    * Gets encryptType
    *  obs桶加密类型，空值使用AES-256加密算法, gm为国密加密算法
    *
    * @return string|null
    */
    public function getEncryptType()
    {
        return $this->container['encryptType'];
    }

    /**
    * Sets encryptType
    *
    * @param string|null $encryptType obs桶加密类型，空值使用AES-256加密算法, gm为国密加密算法
    *
    * @return $this
    */
    public function setEncryptType($encryptType)
    {
        $this->container['encryptType'] = $encryptType;
        return $this;
    }

    /**
    * Gets obsBucketName
    *  指定obs桶的名称，当指定自定义obs桶之后，则无需对obs_encrypt、encrypt_type进行传值。
    *
    * @return string|null
    */
    public function getObsBucketName()
    {
        return $this->container['obsBucketName'];
    }

    /**
    * Sets obsBucketName
    *
    * @param string|null $obsBucketName 指定obs桶的名称，当指定自定义obs桶之后，则无需对obs_encrypt、encrypt_type进行传值。
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
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

