<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainNameInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainNameInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uid  域名ID
    * domainId  租户ID
    * projectId  项目ID
    * instanceId  实例ID
    * type  域名类型(default/custom)
    * domainName  域名，只能由字母、数字、中划线、星号组成， 星号只能在开头，中划线不能在开头或末 尾，至少包含两个字符串，单个字符串不 超过63个字符，字符串间以点分割，且总 长度不超过100个字符。例如： example.com 或 *example.com。
    * certificateId  SCM服务的证书ID
    * createdAt  增加域名的时间
    * updatedAt  更新域名的时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uid' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'instanceId' => 'string',
            'type' => 'string',
            'domainName' => 'string',
            'certificateId' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uid  域名ID
    * domainId  租户ID
    * projectId  项目ID
    * instanceId  实例ID
    * type  域名类型(default/custom)
    * domainName  域名，只能由字母、数字、中划线、星号组成， 星号只能在开头，中划线不能在开头或末 尾，至少包含两个字符串，单个字符串不 超过63个字符，字符串间以点分割，且总 长度不超过100个字符。例如： example.com 或 *example.com。
    * certificateId  SCM服务的证书ID
    * createdAt  增加域名的时间
    * updatedAt  更新域名的时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uid' => null,
        'domainId' => null,
        'projectId' => null,
        'instanceId' => null,
        'type' => null,
        'domainName' => null,
        'certificateId' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * uid  域名ID
    * domainId  租户ID
    * projectId  项目ID
    * instanceId  实例ID
    * type  域名类型(default/custom)
    * domainName  域名，只能由字母、数字、中划线、星号组成， 星号只能在开头，中划线不能在开头或末 尾，至少包含两个字符串，单个字符串不 超过63个字符，字符串间以点分割，且总 长度不超过100个字符。例如： example.com 或 *example.com。
    * certificateId  SCM服务的证书ID
    * createdAt  增加域名的时间
    * updatedAt  更新域名的时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uid' => 'uid',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'instanceId' => 'instance_id',
            'type' => 'type',
            'domainName' => 'domain_name',
            'certificateId' => 'certificate_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uid  域名ID
    * domainId  租户ID
    * projectId  项目ID
    * instanceId  实例ID
    * type  域名类型(default/custom)
    * domainName  域名，只能由字母、数字、中划线、星号组成， 星号只能在开头，中划线不能在开头或末 尾，至少包含两个字符串，单个字符串不 超过63个字符，字符串间以点分割，且总 长度不超过100个字符。例如： example.com 或 *example.com。
    * certificateId  SCM服务的证书ID
    * createdAt  增加域名的时间
    * updatedAt  更新域名的时间
    *
    * @var string[]
    */
    protected static $setters = [
            'uid' => 'setUid',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'instanceId' => 'setInstanceId',
            'type' => 'setType',
            'domainName' => 'setDomainName',
            'certificateId' => 'setCertificateId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uid  域名ID
    * domainId  租户ID
    * projectId  项目ID
    * instanceId  实例ID
    * type  域名类型(default/custom)
    * domainName  域名，只能由字母、数字、中划线、星号组成， 星号只能在开头，中划线不能在开头或末 尾，至少包含两个字符串，单个字符串不 超过63个字符，字符串间以点分割，且总 长度不超过100个字符。例如： example.com 或 *example.com。
    * certificateId  SCM服务的证书ID
    * createdAt  增加域名的时间
    * updatedAt  更新域名的时间
    *
    * @var string[]
    */
    protected static $getters = [
            'uid' => 'getUid',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'instanceId' => 'getInstanceId',
            'type' => 'getType',
            'domainName' => 'getDomainName',
            'certificateId' => 'getCertificateId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['certificateId'] = isset($data['certificateId']) ? $data['certificateId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
    * Gets uid
    *  域名ID
    *
    * @return string|null
    */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
    * Sets uid
    *
    * @param string|null $uid 域名ID
    *
    * @return $this
    */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
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
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets type
    *  域名类型(default/custom)
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
    * @param string|null $type 域名类型(default/custom)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets domainName
    *  域名，只能由字母、数字、中划线、星号组成， 星号只能在开头，中划线不能在开头或末 尾，至少包含两个字符串，单个字符串不 超过63个字符，字符串间以点分割，且总 长度不超过100个字符。例如： example.com 或 *example.com。
    *
    * @return string|null
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string|null $domainName 域名，只能由字母、数字、中划线、星号组成， 星号只能在开头，中划线不能在开头或末 尾，至少包含两个字符串，单个字符串不 超过63个字符，字符串间以点分割，且总 长度不超过100个字符。例如： example.com 或 *example.com。
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets certificateId
    *  SCM服务的证书ID
    *
    * @return string|null
    */
    public function getCertificateId()
    {
        return $this->container['certificateId'];
    }

    /**
    * Sets certificateId
    *
    * @param string|null $certificateId SCM服务的证书ID
    *
    * @return $this
    */
    public function setCertificateId($certificateId)
    {
        $this->container['certificateId'] = $certificateId;
        return $this;
    }

    /**
    * Gets createdAt
    *  增加域名的时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 增加域名的时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新域名的时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新域名的时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

