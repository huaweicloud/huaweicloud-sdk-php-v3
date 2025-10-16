<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResourceDetailCertificateResponseBodyCertificateList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResourceDetailCertificateResponseBody_certificate_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  证书名称
    * id  证书ID
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  密码服务类型
    * certificateType  证书类型，0：根证书，1：业务证书
    * algorithmType  算法类型，0：国密，1：国际
    * algorithm  算法名称
    * startTime  开始时间，UNIX时间戳，单位毫秒
    * expiredTime  过期时间，UNIX时间戳，单位毫秒
    * issuer  签发者
    * user  用户
    * status  证书状态，0：正常，2：过期，3：即将过期
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'string',
            'tenantId' => 'string',
            'clusterId' => 'string',
            'serverType' => 'string',
            'certificateType' => 'string',
            'algorithmType' => 'string',
            'algorithm' => 'string',
            'startTime' => 'int',
            'expiredTime' => 'int',
            'issuer' => 'string',
            'user' => 'string',
            'status' => 'int',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  证书名称
    * id  证书ID
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  密码服务类型
    * certificateType  证书类型，0：根证书，1：业务证书
    * algorithmType  算法类型，0：国密，1：国际
    * algorithm  算法名称
    * startTime  开始时间，UNIX时间戳，单位毫秒
    * expiredTime  过期时间，UNIX时间戳，单位毫秒
    * issuer  签发者
    * user  用户
    * status  证书状态，0：正常，2：过期，3：即将过期
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => null,
        'tenantId' => null,
        'clusterId' => null,
        'serverType' => null,
        'certificateType' => null,
        'algorithmType' => null,
        'algorithm' => null,
        'startTime' => 'int64',
        'expiredTime' => 'int64',
        'issuer' => null,
        'user' => null,
        'status' => 'int32',
        'createTime' => null
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
    * name  证书名称
    * id  证书ID
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  密码服务类型
    * certificateType  证书类型，0：根证书，1：业务证书
    * algorithmType  算法类型，0：国密，1：国际
    * algorithm  算法名称
    * startTime  开始时间，UNIX时间戳，单位毫秒
    * expiredTime  过期时间，UNIX时间戳，单位毫秒
    * issuer  签发者
    * user  用户
    * status  证书状态，0：正常，2：过期，3：即将过期
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'clusterId' => 'cluster_id',
            'serverType' => 'server_type',
            'certificateType' => 'certificate_type',
            'algorithmType' => 'algorithm_type',
            'algorithm' => 'algorithm',
            'startTime' => 'start_time',
            'expiredTime' => 'expired_time',
            'issuer' => 'issuer',
            'user' => 'user',
            'status' => 'status',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  证书名称
    * id  证书ID
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  密码服务类型
    * certificateType  证书类型，0：根证书，1：业务证书
    * algorithmType  算法类型，0：国密，1：国际
    * algorithm  算法名称
    * startTime  开始时间，UNIX时间戳，单位毫秒
    * expiredTime  过期时间，UNIX时间戳，单位毫秒
    * issuer  签发者
    * user  用户
    * status  证书状态，0：正常，2：过期，3：即将过期
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'clusterId' => 'setClusterId',
            'serverType' => 'setServerType',
            'certificateType' => 'setCertificateType',
            'algorithmType' => 'setAlgorithmType',
            'algorithm' => 'setAlgorithm',
            'startTime' => 'setStartTime',
            'expiredTime' => 'setExpiredTime',
            'issuer' => 'setIssuer',
            'user' => 'setUser',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  证书名称
    * id  证书ID
    * tenantId  租户ID
    * clusterId  集群ID
    * serverType  密码服务类型
    * certificateType  证书类型，0：根证书，1：业务证书
    * algorithmType  算法类型，0：国密，1：国际
    * algorithm  算法名称
    * startTime  开始时间，UNIX时间戳，单位毫秒
    * expiredTime  过期时间，UNIX时间戳，单位毫秒
    * issuer  签发者
    * user  用户
    * status  证书状态，0：正常，2：过期，3：即将过期
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'clusterId' => 'getClusterId',
            'serverType' => 'getServerType',
            'certificateType' => 'getCertificateType',
            'algorithmType' => 'getAlgorithmType',
            'algorithm' => 'getAlgorithm',
            'startTime' => 'getStartTime',
            'expiredTime' => 'getExpiredTime',
            'issuer' => 'getIssuer',
            'user' => 'getUser',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['algorithmType'] = isset($data['algorithmType']) ? $data['algorithmType'] : null;
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['expiredTime'] = isset($data['expiredTime']) ? $data['expiredTime'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets tenantId
    *  租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 集群ID
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets serverType
    *  密码服务类型
    *
    * @return string|null
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string|null $serverType 密码服务类型
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
        return $this;
    }

    /**
    * Gets certificateType
    *  证书类型，0：根证书，1：业务证书
    *
    * @return string|null
    */
    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    /**
    * Sets certificateType
    *
    * @param string|null $certificateType 证书类型，0：根证书，1：业务证书
    *
    * @return $this
    */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;
        return $this;
    }

    /**
    * Gets algorithmType
    *  算法类型，0：国密，1：国际
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
    * @param string|null $algorithmType 算法类型，0：国密，1：国际
    *
    * @return $this
    */
    public function setAlgorithmType($algorithmType)
    {
        $this->container['algorithmType'] = $algorithmType;
        return $this;
    }

    /**
    * Gets algorithm
    *  算法名称
    *
    * @return string|null
    */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
    * Sets algorithm
    *
    * @param string|null $algorithm 算法名称
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间，UNIX时间戳，单位毫秒
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 开始时间，UNIX时间戳，单位毫秒
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets expiredTime
    *  过期时间，UNIX时间戳，单位毫秒
    *
    * @return int|null
    */
    public function getExpiredTime()
    {
        return $this->container['expiredTime'];
    }

    /**
    * Sets expiredTime
    *
    * @param int|null $expiredTime 过期时间，UNIX时间戳，单位毫秒
    *
    * @return $this
    */
    public function setExpiredTime($expiredTime)
    {
        $this->container['expiredTime'] = $expiredTime;
        return $this;
    }

    /**
    * Gets issuer
    *  签发者
    *
    * @return string|null
    */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
    * Sets issuer
    *
    * @param string|null $issuer 签发者
    *
    * @return $this
    */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;
        return $this;
    }

    /**
    * Gets user
    *  用户
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user 用户
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets status
    *  证书状态，0：正常，2：过期，3：即将过期
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 证书状态，0：正常，2：过期，3：即将过期
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

