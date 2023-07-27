<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCertificateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCertificateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  SSL证书id
    * tenantId  SSL证书所在的项目ID
    * adminStateUp  SSL证书的管理状态；暂不支持
    * name  SSL证书的名称。
    * description  SSL证书的描述。
    * type  SSL证书的类型。分为服务器证书(server)和CA证书(client)。
    * domain  服务器证书所签域名。该字段仅type为server时有效。
    * privateKey  服务器证书的私钥。仅type为server时有效。type为server时必选。
    * certificate  当type为server时，表示服务器证书的公钥；当type为client时，表示用于认证客户端证书的CA证书。
    * expireTime  SSL证书的过期时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    * createTime  SSL证书的创建时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    * updateTime  SSL证书的更新时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'adminStateUp' => 'bool',
            'name' => 'string',
            'description' => 'string',
            'type' => 'string',
            'domain' => 'string',
            'privateKey' => 'string',
            'certificate' => 'string',
            'expireTime' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  SSL证书id
    * tenantId  SSL证书所在的项目ID
    * adminStateUp  SSL证书的管理状态；暂不支持
    * name  SSL证书的名称。
    * description  SSL证书的描述。
    * type  SSL证书的类型。分为服务器证书(server)和CA证书(client)。
    * domain  服务器证书所签域名。该字段仅type为server时有效。
    * privateKey  服务器证书的私钥。仅type为server时有效。type为server时必选。
    * certificate  当type为server时，表示服务器证书的公钥；当type为client时，表示用于认证客户端证书的CA证书。
    * expireTime  SSL证书的过期时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    * createTime  SSL证书的创建时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    * updateTime  SSL证书的更新时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'adminStateUp' => null,
        'name' => null,
        'description' => null,
        'type' => null,
        'domain' => null,
        'privateKey' => null,
        'certificate' => null,
        'expireTime' => null,
        'createTime' => null,
        'updateTime' => null
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
    * id  SSL证书id
    * tenantId  SSL证书所在的项目ID
    * adminStateUp  SSL证书的管理状态；暂不支持
    * name  SSL证书的名称。
    * description  SSL证书的描述。
    * type  SSL证书的类型。分为服务器证书(server)和CA证书(client)。
    * domain  服务器证书所签域名。该字段仅type为server时有效。
    * privateKey  服务器证书的私钥。仅type为server时有效。type为server时必选。
    * certificate  当type为server时，表示服务器证书的公钥；当type为client时，表示用于认证客户端证书的CA证书。
    * expireTime  SSL证书的过期时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    * createTime  SSL证书的创建时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    * updateTime  SSL证书的更新时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'adminStateUp' => 'admin_state_up',
            'name' => 'name',
            'description' => 'description',
            'type' => 'type',
            'domain' => 'domain',
            'privateKey' => 'private_key',
            'certificate' => 'certificate',
            'expireTime' => 'expire_time',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  SSL证书id
    * tenantId  SSL证书所在的项目ID
    * adminStateUp  SSL证书的管理状态；暂不支持
    * name  SSL证书的名称。
    * description  SSL证书的描述。
    * type  SSL证书的类型。分为服务器证书(server)和CA证书(client)。
    * domain  服务器证书所签域名。该字段仅type为server时有效。
    * privateKey  服务器证书的私钥。仅type为server时有效。type为server时必选。
    * certificate  当type为server时，表示服务器证书的公钥；当type为client时，表示用于认证客户端证书的CA证书。
    * expireTime  SSL证书的过期时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    * createTime  SSL证书的创建时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    * updateTime  SSL证书的更新时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'adminStateUp' => 'setAdminStateUp',
            'name' => 'setName',
            'description' => 'setDescription',
            'type' => 'setType',
            'domain' => 'setDomain',
            'privateKey' => 'setPrivateKey',
            'certificate' => 'setCertificate',
            'expireTime' => 'setExpireTime',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  SSL证书id
    * tenantId  SSL证书所在的项目ID
    * adminStateUp  SSL证书的管理状态；暂不支持
    * name  SSL证书的名称。
    * description  SSL证书的描述。
    * type  SSL证书的类型。分为服务器证书(server)和CA证书(client)。
    * domain  服务器证书所签域名。该字段仅type为server时有效。
    * privateKey  服务器证书的私钥。仅type为server时有效。type为server时必选。
    * certificate  当type为server时，表示服务器证书的公钥；当type为client时，表示用于认证客户端证书的CA证书。
    * expireTime  SSL证书的过期时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    * createTime  SSL证书的创建时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    * updateTime  SSL证书的更新时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'adminStateUp' => 'getAdminStateUp',
            'name' => 'getName',
            'description' => 'getDescription',
            'type' => 'getType',
            'domain' => 'getDomain',
            'privateKey' => 'getPrivateKey',
            'certificate' => 'getCertificate',
            'expireTime' => 'getExpireTime',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
    const TYPE_SERVER = 'server';
    const TYPE_CLIENT = 'client';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SERVER,
            self::TYPE_CLIENT,
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 0)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  SSL证书id
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
    * @param string|null $id SSL证书id
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
    *  SSL证书所在的项目ID
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
    * @param string|null $tenantId SSL证书所在的项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  SSL证书的管理状态；暂不支持
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp SSL证书的管理状态；暂不支持
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets name
    *  SSL证书的名称。
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
    * @param string|null $name SSL证书的名称。
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
    *  SSL证书的描述。
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
    * @param string|null $description SSL证书的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  SSL证书的类型。分为服务器证书(server)和CA证书(client)。
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
    * @param string|null $type SSL证书的类型。分为服务器证书(server)和CA证书(client)。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets domain
    *  服务器证书所签域名。该字段仅type为server时有效。
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 服务器证书所签域名。该字段仅type为server时有效。
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets privateKey
    *  服务器证书的私钥。仅type为server时有效。type为server时必选。
    *
    * @return string|null
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string|null $privateKey 服务器证书的私钥。仅type为server时有效。type为server时必选。
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets certificate
    *  当type为server时，表示服务器证书的公钥；当type为client时，表示用于认证客户端证书的CA证书。
    *
    * @return string|null
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param string|null $certificate 当type为server时，表示服务器证书的公钥；当type为client时，表示用于认证客户端证书的CA证书。
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets expireTime
    *  SSL证书的过期时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime SSL证书的过期时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets createTime
    *  SSL证书的创建时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
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
    * @param string|null $createTime SSL证书的创建时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
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
    *  SSL证书的更新时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime SSL证书的更新时间。 UTC时间，格式为：yyyy-MM-dd HH:mm:ss ，如2020-05-28 08:30:09
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

