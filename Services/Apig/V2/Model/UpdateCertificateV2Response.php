<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCertificateV2Response implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCertificateV2Response';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  证书ID
    * name  证书名称
    * type  证书类型  - global：全局证书 - instance：实例证书
    * instanceId  实例编码  - `type`为`global`时，缺省为common - `type`为`instance`时，为实例编码
    * projectId  租户项目编号
    * commonName  域名
    * san  san扩展域名
    * notAfter  有效期到
    * signatureAlgorithm  签名算法
    * createTime  创建时间
    * updateTime  更新时间
    * isHasTrustedRootCa  是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    * algorithmType  证书算法类型： - RSA - ECC - SM2
    * version  版本
    * organization  公司、组织
    * organizationalUnit  部门
    * locality  城市
    * state  省份
    * country  国家
    * notBefore  有效期从
    * serialNumber  序列号
    * issuer  颁发者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'instanceId' => 'string',
            'projectId' => 'string',
            'commonName' => 'string',
            'san' => 'string[]',
            'notAfter' => '\DateTime',
            'signatureAlgorithm' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'isHasTrustedRootCa' => 'bool',
            'algorithmType' => 'string',
            'version' => 'int',
            'organization' => 'string[]',
            'organizationalUnit' => 'string[]',
            'locality' => 'string[]',
            'state' => 'string[]',
            'country' => 'string[]',
            'notBefore' => '\DateTime',
            'serialNumber' => 'string',
            'issuer' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  证书ID
    * name  证书名称
    * type  证书类型  - global：全局证书 - instance：实例证书
    * instanceId  实例编码  - `type`为`global`时，缺省为common - `type`为`instance`时，为实例编码
    * projectId  租户项目编号
    * commonName  域名
    * san  san扩展域名
    * notAfter  有效期到
    * signatureAlgorithm  签名算法
    * createTime  创建时间
    * updateTime  更新时间
    * isHasTrustedRootCa  是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    * algorithmType  证书算法类型： - RSA - ECC - SM2
    * version  版本
    * organization  公司、组织
    * organizationalUnit  部门
    * locality  城市
    * state  省份
    * country  国家
    * notBefore  有效期从
    * serialNumber  序列号
    * issuer  颁发者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'instanceId' => null,
        'projectId' => null,
        'commonName' => null,
        'san' => null,
        'notAfter' => 'date-time',
        'signatureAlgorithm' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'isHasTrustedRootCa' => null,
        'algorithmType' => null,
        'version' => 'int32',
        'organization' => null,
        'organizationalUnit' => null,
        'locality' => null,
        'state' => null,
        'country' => null,
        'notBefore' => 'date-time',
        'serialNumber' => null,
        'issuer' => null
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
    * id  证书ID
    * name  证书名称
    * type  证书类型  - global：全局证书 - instance：实例证书
    * instanceId  实例编码  - `type`为`global`时，缺省为common - `type`为`instance`时，为实例编码
    * projectId  租户项目编号
    * commonName  域名
    * san  san扩展域名
    * notAfter  有效期到
    * signatureAlgorithm  签名算法
    * createTime  创建时间
    * updateTime  更新时间
    * isHasTrustedRootCa  是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    * algorithmType  证书算法类型： - RSA - ECC - SM2
    * version  版本
    * organization  公司、组织
    * organizationalUnit  部门
    * locality  城市
    * state  省份
    * country  国家
    * notBefore  有效期从
    * serialNumber  序列号
    * issuer  颁发者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'instanceId' => 'instance_id',
            'projectId' => 'project_id',
            'commonName' => 'common_name',
            'san' => 'san',
            'notAfter' => 'not_after',
            'signatureAlgorithm' => 'signature_algorithm',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'isHasTrustedRootCa' => 'is_has_trusted_root_ca',
            'algorithmType' => 'algorithm_type',
            'version' => 'version',
            'organization' => 'organization',
            'organizationalUnit' => 'organizational_unit',
            'locality' => 'locality',
            'state' => 'state',
            'country' => 'country',
            'notBefore' => 'not_before',
            'serialNumber' => 'serial_number',
            'issuer' => 'issuer'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  证书ID
    * name  证书名称
    * type  证书类型  - global：全局证书 - instance：实例证书
    * instanceId  实例编码  - `type`为`global`时，缺省为common - `type`为`instance`时，为实例编码
    * projectId  租户项目编号
    * commonName  域名
    * san  san扩展域名
    * notAfter  有效期到
    * signatureAlgorithm  签名算法
    * createTime  创建时间
    * updateTime  更新时间
    * isHasTrustedRootCa  是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    * algorithmType  证书算法类型： - RSA - ECC - SM2
    * version  版本
    * organization  公司、组织
    * organizationalUnit  部门
    * locality  城市
    * state  省份
    * country  国家
    * notBefore  有效期从
    * serialNumber  序列号
    * issuer  颁发者
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'instanceId' => 'setInstanceId',
            'projectId' => 'setProjectId',
            'commonName' => 'setCommonName',
            'san' => 'setSan',
            'notAfter' => 'setNotAfter',
            'signatureAlgorithm' => 'setSignatureAlgorithm',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'isHasTrustedRootCa' => 'setIsHasTrustedRootCa',
            'algorithmType' => 'setAlgorithmType',
            'version' => 'setVersion',
            'organization' => 'setOrganization',
            'organizationalUnit' => 'setOrganizationalUnit',
            'locality' => 'setLocality',
            'state' => 'setState',
            'country' => 'setCountry',
            'notBefore' => 'setNotBefore',
            'serialNumber' => 'setSerialNumber',
            'issuer' => 'setIssuer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  证书ID
    * name  证书名称
    * type  证书类型  - global：全局证书 - instance：实例证书
    * instanceId  实例编码  - `type`为`global`时，缺省为common - `type`为`instance`时，为实例编码
    * projectId  租户项目编号
    * commonName  域名
    * san  san扩展域名
    * notAfter  有效期到
    * signatureAlgorithm  签名算法
    * createTime  创建时间
    * updateTime  更新时间
    * isHasTrustedRootCa  是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    * algorithmType  证书算法类型： - RSA - ECC - SM2
    * version  版本
    * organization  公司、组织
    * organizationalUnit  部门
    * locality  城市
    * state  省份
    * country  国家
    * notBefore  有效期从
    * serialNumber  序列号
    * issuer  颁发者
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'instanceId' => 'getInstanceId',
            'projectId' => 'getProjectId',
            'commonName' => 'getCommonName',
            'san' => 'getSan',
            'notAfter' => 'getNotAfter',
            'signatureAlgorithm' => 'getSignatureAlgorithm',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'isHasTrustedRootCa' => 'getIsHasTrustedRootCa',
            'algorithmType' => 'getAlgorithmType',
            'version' => 'getVersion',
            'organization' => 'getOrganization',
            'organizationalUnit' => 'getOrganizationalUnit',
            'locality' => 'getLocality',
            'state' => 'getState',
            'country' => 'getCountry',
            'notBefore' => 'getNotBefore',
            'serialNumber' => 'getSerialNumber',
            'issuer' => 'getIssuer'
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
    const TYPE__GLOBAL = 'global';
    const TYPE_INSTANCE = 'instance';
    const ALGORITHM_TYPE_RSA = 'RSA';
    const ALGORITHM_TYPE_ECC = 'ECC';
    const ALGORITHM_TYPE_SM2 = 'SM2';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__GLOBAL,
            self::TYPE_INSTANCE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAlgorithmTypeAllowableValues()
    {
        return [
            self::ALGORITHM_TYPE_RSA,
            self::ALGORITHM_TYPE_ECC,
            self::ALGORITHM_TYPE_SM2,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['commonName'] = isset($data['commonName']) ? $data['commonName'] : null;
        $this->container['san'] = isset($data['san']) ? $data['san'] : null;
        $this->container['notAfter'] = isset($data['notAfter']) ? $data['notAfter'] : null;
        $this->container['signatureAlgorithm'] = isset($data['signatureAlgorithm']) ? $data['signatureAlgorithm'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['isHasTrustedRootCa'] = isset($data['isHasTrustedRootCa']) ? $data['isHasTrustedRootCa'] : null;
        $this->container['algorithmType'] = isset($data['algorithmType']) ? $data['algorithmType'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['organizationalUnit'] = isset($data['organizationalUnit']) ? $data['organizationalUnit'] : null;
        $this->container['locality'] = isset($data['locality']) ? $data['locality'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['notBefore'] = isset($data['notBefore']) ? $data['notBefore'] : null;
        $this->container['serialNumber'] = isset($data['serialNumber']) ? $data['serialNumber'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getAlgorithmTypeAllowableValues();
                if (!is_null($this->container['algorithmType']) && !in_array($this->container['algorithmType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'algorithmType', must be one of '%s'",
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
    * Gets id
    *  证书ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 证书ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  证书名称
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
    * @param string|null $name 证书名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  证书类型  - global：全局证书 - instance：实例证书
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
    * @param string|null $type 证书类型  - global：全局证书 - instance：实例证书
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例编码  - `type`为`global`时，缺省为common - `type`为`instance`时，为实例编码
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例编码  - `type`为`global`时，缺省为common - `type`为`instance`时，为实例编码
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets projectId
    *  租户项目编号
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 租户项目编号
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets commonName
    *  域名
    *
    * @return string|null
    */
    public function getCommonName()
    {
        return $this->container['commonName'];
    }

    /**
    * Sets commonName
    *
    * @param string|null $commonName 域名
    *
    * @return $this
    */
    public function setCommonName($commonName)
    {
        $this->container['commonName'] = $commonName;
        return $this;
    }

    /**
    * Gets san
    *  san扩展域名
    *
    * @return string[]|null
    */
    public function getSan()
    {
        return $this->container['san'];
    }

    /**
    * Sets san
    *
    * @param string[]|null $san san扩展域名
    *
    * @return $this
    */
    public function setSan($san)
    {
        $this->container['san'] = $san;
        return $this;
    }

    /**
    * Gets notAfter
    *  有效期到
    *
    * @return \DateTime|null
    */
    public function getNotAfter()
    {
        return $this->container['notAfter'];
    }

    /**
    * Sets notAfter
    *
    * @param \DateTime|null $notAfter 有效期到
    *
    * @return $this
    */
    public function setNotAfter($notAfter)
    {
        $this->container['notAfter'] = $notAfter;
        return $this;
    }

    /**
    * Gets signatureAlgorithm
    *  签名算法
    *
    * @return string|null
    */
    public function getSignatureAlgorithm()
    {
        return $this->container['signatureAlgorithm'];
    }

    /**
    * Sets signatureAlgorithm
    *
    * @param string|null $signatureAlgorithm 签名算法
    *
    * @return $this
    */
    public function setSignatureAlgorithm($signatureAlgorithm)
    {
        $this->container['signatureAlgorithm'] = $signatureAlgorithm;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets isHasTrustedRootCa
    *  是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    *
    * @return bool|null
    */
    public function getIsHasTrustedRootCa()
    {
        return $this->container['isHasTrustedRootCa'];
    }

    /**
    * Sets isHasTrustedRootCa
    *
    * @param bool|null $isHasTrustedRootCa 是否存在信任的根证书CA。当绑定证书存在trusted_root_ca时为true。
    *
    * @return $this
    */
    public function setIsHasTrustedRootCa($isHasTrustedRootCa)
    {
        $this->container['isHasTrustedRootCa'] = $isHasTrustedRootCa;
        return $this;
    }

    /**
    * Gets algorithmType
    *  证书算法类型： - RSA - ECC - SM2
    *
    * @return string|null
    */
    public function getAlgorithmType()
    {
        return $this->container['algorithmType'];
    }

    /**
    * Sets algorithmType
    *
    * @param string|null $algorithmType 证书算法类型： - RSA - ECC - SM2
    *
    * @return $this
    */
    public function setAlgorithmType($algorithmType)
    {
        $this->container['algorithmType'] = $algorithmType;
        return $this;
    }

    /**
    * Gets version
    *  版本
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets organization
    *  公司、组织
    *
    * @return string[]|null
    */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
    * Sets organization
    *
    * @param string[]|null $organization 公司、组织
    *
    * @return $this
    */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;
        return $this;
    }

    /**
    * Gets organizationalUnit
    *  部门
    *
    * @return string[]|null
    */
    public function getOrganizationalUnit()
    {
        return $this->container['organizationalUnit'];
    }

    /**
    * Sets organizationalUnit
    *
    * @param string[]|null $organizationalUnit 部门
    *
    * @return $this
    */
    public function setOrganizationalUnit($organizationalUnit)
    {
        $this->container['organizationalUnit'] = $organizationalUnit;
        return $this;
    }

    /**
    * Gets locality
    *  城市
    *
    * @return string[]|null
    */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
    * Sets locality
    *
    * @param string[]|null $locality 城市
    *
    * @return $this
    */
    public function setLocality($locality)
    {
        $this->container['locality'] = $locality;
        return $this;
    }

    /**
    * Gets state
    *  省份
    *
    * @return string[]|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string[]|null $state 省份
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets country
    *  国家
    *
    * @return string[]|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string[]|null $country 国家
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets notBefore
    *  有效期从
    *
    * @return \DateTime|null
    */
    public function getNotBefore()
    {
        return $this->container['notBefore'];
    }

    /**
    * Sets notBefore
    *
    * @param \DateTime|null $notBefore 有效期从
    *
    * @return $this
    */
    public function setNotBefore($notBefore)
    {
        $this->container['notBefore'] = $notBefore;
        return $this;
    }

    /**
    * Gets serialNumber
    *  序列号
    *
    * @return string|null
    */
    public function getSerialNumber()
    {
        return $this->container['serialNumber'];
    }

    /**
    * Sets serialNumber
    *
    * @param string|null $serialNumber 序列号
    *
    * @return $this
    */
    public function setSerialNumber($serialNumber)
    {
        $this->container['serialNumber'] = $serialNumber;
        return $this;
    }

    /**
    * Gets issuer
    *  颁发者
    *
    * @return string[]|null
    */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
    * Sets issuer
    *
    * @param string[]|null $issuer 颁发者
    *
    * @return $this
    */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;
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

