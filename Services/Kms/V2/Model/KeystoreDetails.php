<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeystoreDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeystoreDetails';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keystoreId  密钥库ID
    * domainId  用户域ID
    * keystoreAlias  密钥库别名
    * keystoreType  密钥库类型
    * hsmClusterId  DHSM集群id，要求集群当前未创建专属密钥库
    * clusterId  集群ID。当类型为DEFAULT时，cluster_id为”0”。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，默认密码卡集群，集群ID为“1”。自定义密码卡集群，为cdms_cluster_id
    * createTime  密钥库创建时间，UTC时间戳。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keystoreId' => 'string',
            'domainId' => 'string',
            'keystoreAlias' => 'string',
            'keystoreType' => 'string',
            'hsmClusterId' => 'string',
            'clusterId' => 'string',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keystoreId  密钥库ID
    * domainId  用户域ID
    * keystoreAlias  密钥库别名
    * keystoreType  密钥库类型
    * hsmClusterId  DHSM集群id，要求集群当前未创建专属密钥库
    * clusterId  集群ID。当类型为DEFAULT时，cluster_id为”0”。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，默认密码卡集群，集群ID为“1”。自定义密码卡集群，为cdms_cluster_id
    * createTime  密钥库创建时间，UTC时间戳。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keystoreId' => null,
        'domainId' => null,
        'keystoreAlias' => null,
        'keystoreType' => null,
        'hsmClusterId' => null,
        'clusterId' => null,
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
    * keystoreId  密钥库ID
    * domainId  用户域ID
    * keystoreAlias  密钥库别名
    * keystoreType  密钥库类型
    * hsmClusterId  DHSM集群id，要求集群当前未创建专属密钥库
    * clusterId  集群ID。当类型为DEFAULT时，cluster_id为”0”。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，默认密码卡集群，集群ID为“1”。自定义密码卡集群，为cdms_cluster_id
    * createTime  密钥库创建时间，UTC时间戳。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keystoreId' => 'keystore_id',
            'domainId' => 'domain_id',
            'keystoreAlias' => 'keystore_alias',
            'keystoreType' => 'keystore_type',
            'hsmClusterId' => 'hsm_cluster_id',
            'clusterId' => 'cluster_id',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keystoreId  密钥库ID
    * domainId  用户域ID
    * keystoreAlias  密钥库别名
    * keystoreType  密钥库类型
    * hsmClusterId  DHSM集群id，要求集群当前未创建专属密钥库
    * clusterId  集群ID。当类型为DEFAULT时，cluster_id为”0”。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，默认密码卡集群，集群ID为“1”。自定义密码卡集群，为cdms_cluster_id
    * createTime  密钥库创建时间，UTC时间戳。
    *
    * @var string[]
    */
    protected static $setters = [
            'keystoreId' => 'setKeystoreId',
            'domainId' => 'setDomainId',
            'keystoreAlias' => 'setKeystoreAlias',
            'keystoreType' => 'setKeystoreType',
            'hsmClusterId' => 'setHsmClusterId',
            'clusterId' => 'setClusterId',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keystoreId  密钥库ID
    * domainId  用户域ID
    * keystoreAlias  密钥库别名
    * keystoreType  密钥库类型
    * hsmClusterId  DHSM集群id，要求集群当前未创建专属密钥库
    * clusterId  集群ID。当类型为DEFAULT时，cluster_id为”0”。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，默认密码卡集群，集群ID为“1”。自定义密码卡集群，为cdms_cluster_id
    * createTime  密钥库创建时间，UTC时间戳。
    *
    * @var string[]
    */
    protected static $getters = [
            'keystoreId' => 'getKeystoreId',
            'domainId' => 'getDomainId',
            'keystoreAlias' => 'getKeystoreAlias',
            'keystoreType' => 'getKeystoreType',
            'hsmClusterId' => 'getHsmClusterId',
            'clusterId' => 'getClusterId',
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
        $this->container['keystoreId'] = isset($data['keystoreId']) ? $data['keystoreId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['keystoreAlias'] = isset($data['keystoreAlias']) ? $data['keystoreAlias'] : null;
        $this->container['keystoreType'] = isset($data['keystoreType']) ? $data['keystoreType'] : null;
        $this->container['hsmClusterId'] = isset($data['hsmClusterId']) ? $data['hsmClusterId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
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
    * Gets keystoreId
    *  密钥库ID
    *
    * @return string|null
    */
    public function getKeystoreId()
    {
        return $this->container['keystoreId'];
    }

    /**
    * Sets keystoreId
    *
    * @param string|null $keystoreId 密钥库ID
    *
    * @return $this
    */
    public function setKeystoreId($keystoreId)
    {
        $this->container['keystoreId'] = $keystoreId;
        return $this;
    }

    /**
    * Gets domainId
    *  用户域ID
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
    * @param string|null $domainId 用户域ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets keystoreAlias
    *  密钥库别名
    *
    * @return string|null
    */
    public function getKeystoreAlias()
    {
        return $this->container['keystoreAlias'];
    }

    /**
    * Sets keystoreAlias
    *
    * @param string|null $keystoreAlias 密钥库别名
    *
    * @return $this
    */
    public function setKeystoreAlias($keystoreAlias)
    {
        $this->container['keystoreAlias'] = $keystoreAlias;
        return $this;
    }

    /**
    * Gets keystoreType
    *  密钥库类型
    *
    * @return string|null
    */
    public function getKeystoreType()
    {
        return $this->container['keystoreType'];
    }

    /**
    * Sets keystoreType
    *
    * @param string|null $keystoreType 密钥库类型
    *
    * @return $this
    */
    public function setKeystoreType($keystoreType)
    {
        $this->container['keystoreType'] = $keystoreType;
        return $this;
    }

    /**
    * Gets hsmClusterId
    *  DHSM集群id，要求集群当前未创建专属密钥库
    *
    * @return string|null
    */
    public function getHsmClusterId()
    {
        return $this->container['hsmClusterId'];
    }

    /**
    * Sets hsmClusterId
    *
    * @param string|null $hsmClusterId DHSM集群id，要求集群当前未创建专属密钥库
    *
    * @return $this
    */
    public function setHsmClusterId($hsmClusterId)
    {
        $this->container['hsmClusterId'] = $hsmClusterId;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID。当类型为DEFAULT时，cluster_id为”0”。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，默认密码卡集群，集群ID为“1”。自定义密码卡集群，为cdms_cluster_id
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
    * @param string|null $clusterId 集群ID。当类型为DEFAULT时，cluster_id为”0”。当类型为DHSM时，cluster_id为hsm_cluster_id。当类型为CDMS时，默认密码卡集群，集群ID为“1”。自定义密码卡集群，为cdms_cluster_id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets createTime
    *  密钥库创建时间，UTC时间戳。
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
    * @param string|null $createTime 密钥库创建时间，UTC时间戳。
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

