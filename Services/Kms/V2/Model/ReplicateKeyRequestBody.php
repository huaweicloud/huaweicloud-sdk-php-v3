<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReplicateKeyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReplicateKeyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyId  待复制的密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * replicaRegion  复制密钥的目的区域编码。如cn-north-4。
    * keyAlias  指定复制出的新密钥的别名。
    * keyDescription  指定复制出的新密钥的描述信息。
    * enterpriseProjectId  指定复制出的新密钥的企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    * replicaProjectId  指定复制出的新密钥的项目ID。
    * tags  标签列表，key和value键值对的集合。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyId' => 'string',
            'replicaRegion' => 'string',
            'keyAlias' => 'string',
            'keyDescription' => 'string',
            'enterpriseProjectId' => 'string',
            'replicaProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Kms\V2\Model\TagItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyId  待复制的密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * replicaRegion  复制密钥的目的区域编码。如cn-north-4。
    * keyAlias  指定复制出的新密钥的别名。
    * keyDescription  指定复制出的新密钥的描述信息。
    * enterpriseProjectId  指定复制出的新密钥的企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    * replicaProjectId  指定复制出的新密钥的项目ID。
    * tags  标签列表，key和value键值对的集合。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyId' => null,
        'replicaRegion' => null,
        'keyAlias' => null,
        'keyDescription' => null,
        'enterpriseProjectId' => null,
        'replicaProjectId' => null,
        'tags' => null
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
    * keyId  待复制的密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * replicaRegion  复制密钥的目的区域编码。如cn-north-4。
    * keyAlias  指定复制出的新密钥的别名。
    * keyDescription  指定复制出的新密钥的描述信息。
    * enterpriseProjectId  指定复制出的新密钥的企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    * replicaProjectId  指定复制出的新密钥的项目ID。
    * tags  标签列表，key和value键值对的集合。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyId' => 'key_id',
            'replicaRegion' => 'replica_region',
            'keyAlias' => 'key_alias',
            'keyDescription' => 'key_description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'replicaProjectId' => 'replica_project_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyId  待复制的密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * replicaRegion  复制密钥的目的区域编码。如cn-north-4。
    * keyAlias  指定复制出的新密钥的别名。
    * keyDescription  指定复制出的新密钥的描述信息。
    * enterpriseProjectId  指定复制出的新密钥的企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    * replicaProjectId  指定复制出的新密钥的项目ID。
    * tags  标签列表，key和value键值对的集合。
    *
    * @var string[]
    */
    protected static $setters = [
            'keyId' => 'setKeyId',
            'replicaRegion' => 'setReplicaRegion',
            'keyAlias' => 'setKeyAlias',
            'keyDescription' => 'setKeyDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'replicaProjectId' => 'setReplicaProjectId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyId  待复制的密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    * replicaRegion  复制密钥的目的区域编码。如cn-north-4。
    * keyAlias  指定复制出的新密钥的别名。
    * keyDescription  指定复制出的新密钥的描述信息。
    * enterpriseProjectId  指定复制出的新密钥的企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    * replicaProjectId  指定复制出的新密钥的项目ID。
    * tags  标签列表，key和value键值对的集合。
    *
    * @var string[]
    */
    protected static $getters = [
            'keyId' => 'getKeyId',
            'replicaRegion' => 'getReplicaRegion',
            'keyAlias' => 'getKeyAlias',
            'keyDescription' => 'getKeyDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'replicaProjectId' => 'getReplicaProjectId',
            'tags' => 'getTags'
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
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['replicaRegion'] = isset($data['replicaRegion']) ? $data['replicaRegion'] : null;
        $this->container['keyAlias'] = isset($data['keyAlias']) ? $data['keyAlias'] : null;
        $this->container['keyDescription'] = isset($data['keyDescription']) ? $data['keyDescription'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['replicaProjectId'] = isset($data['replicaProjectId']) ? $data['replicaProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keyId'] === null) {
            $invalidProperties[] = "'keyId' can't be null";
        }
            if ((mb_strlen($this->container['keyId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['keyId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['replicaRegion'] === null) {
            $invalidProperties[] = "'replicaRegion' can't be null";
        }
            if ((mb_strlen($this->container['replicaRegion']) > 255)) {
                $invalidProperties[] = "invalid value for 'replicaRegion', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['replicaRegion']) < 1)) {
                $invalidProperties[] = "invalid value for 'replicaRegion', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['keyAlias'] === null) {
            $invalidProperties[] = "'keyAlias' can't be null";
        }
            if ((mb_strlen($this->container['keyAlias']) > 255)) {
                $invalidProperties[] = "invalid value for 'keyAlias', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['keyAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'keyAlias', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['keyDescription']) && (mb_strlen($this->container['keyDescription']) > 255)) {
                $invalidProperties[] = "invalid value for 'keyDescription', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['keyDescription']) && (mb_strlen($this->container['keyDescription']) < 1)) {
                $invalidProperties[] = "invalid value for 'keyDescription', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['replicaProjectId'] === null) {
            $invalidProperties[] = "'replicaProjectId' can't be null";
        }
            if ((mb_strlen($this->container['replicaProjectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'replicaProjectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['replicaProjectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'replicaProjectId', the character length must be bigger than or equal to 32.";
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
    * Gets keyId
    *  待复制的密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    *
    * @return string
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string $keyId 待复制的密钥ID，36字节，满足正则匹配“^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$”。 例如：0d0466b0-e727-4d9c-b35d-f84bb474a37f。
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets replicaRegion
    *  复制密钥的目的区域编码。如cn-north-4。
    *
    * @return string
    */
    public function getReplicaRegion()
    {
        return $this->container['replicaRegion'];
    }

    /**
    * Sets replicaRegion
    *
    * @param string $replicaRegion 复制密钥的目的区域编码。如cn-north-4。
    *
    * @return $this
    */
    public function setReplicaRegion($replicaRegion)
    {
        $this->container['replicaRegion'] = $replicaRegion;
        return $this;
    }

    /**
    * Gets keyAlias
    *  指定复制出的新密钥的别名。
    *
    * @return string
    */
    public function getKeyAlias()
    {
        return $this->container['keyAlias'];
    }

    /**
    * Sets keyAlias
    *
    * @param string $keyAlias 指定复制出的新密钥的别名。
    *
    * @return $this
    */
    public function setKeyAlias($keyAlias)
    {
        $this->container['keyAlias'] = $keyAlias;
        return $this;
    }

    /**
    * Gets keyDescription
    *  指定复制出的新密钥的描述信息。
    *
    * @return string|null
    */
    public function getKeyDescription()
    {
        return $this->container['keyDescription'];
    }

    /**
    * Sets keyDescription
    *
    * @param string|null $keyDescription 指定复制出的新密钥的描述信息。
    *
    * @return $this
    */
    public function setKeyDescription($keyDescription)
    {
        $this->container['keyDescription'] = $keyDescription;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  指定复制出的新密钥的企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 指定复制出的新密钥的企业多项目ID。 - 用户未开通企业多项目时，不需要输入该字段。 - 用户开通企业多项目时，创建资源可以输入该字段。若用户户不输入该字段，默认创建属于默认企业多项目ID（ID为“0”）的资源。 注意：若用户没有默认企业多项目ID（ID为“0”）下的创建权限，则接口报错。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets replicaProjectId
    *  指定复制出的新密钥的项目ID。
    *
    * @return string
    */
    public function getReplicaProjectId()
    {
        return $this->container['replicaProjectId'];
    }

    /**
    * Sets replicaProjectId
    *
    * @param string $replicaProjectId 指定复制出的新密钥的项目ID。
    *
    * @return $this
    */
    public function setReplicaProjectId($replicaProjectId)
    {
        $this->container['replicaProjectId'] = $replicaProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表，key和value键值对的集合。
    *
    * @return \HuaweiCloud\SDK\Kms\V2\Model\TagItem[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Kms\V2\Model\TagItem[]|null $tags 标签列表，key和value键值对的集合。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

