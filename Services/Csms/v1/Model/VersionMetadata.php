<?php

namespace HuaweiCloud\SDK\Csms\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionMetadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  凭据的版本号标识符，凭据对象下唯一。
    * createTime  凭据版本创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * kmsKeyId  加密版本凭据值的KMS主密钥ID。
    * secretName  凭据名称。
    * versionStages  凭据版本被标记的状态列表。每个版本标签对于凭据对象下版本是唯一存在的，如果你创建版本时，指定的是同一凭据对象下的一个已经标记在其他版本上的状态，该标签将自动从其他版本上删除，并附加到此版本上。  如果未指定version_stage的值，则凭据管理服务会自动移动临时标签SYSCURRENT到此新版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'createTime' => 'int',
            'kmsKeyId' => 'string',
            'secretName' => 'string',
            'versionStages' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  凭据的版本号标识符，凭据对象下唯一。
    * createTime  凭据版本创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * kmsKeyId  加密版本凭据值的KMS主密钥ID。
    * secretName  凭据名称。
    * versionStages  凭据版本被标记的状态列表。每个版本标签对于凭据对象下版本是唯一存在的，如果你创建版本时，指定的是同一凭据对象下的一个已经标记在其他版本上的状态，该标签将自动从其他版本上删除，并附加到此版本上。  如果未指定version_stage的值，则凭据管理服务会自动移动临时标签SYSCURRENT到此新版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'createTime' => 'int64',
        'kmsKeyId' => null,
        'secretName' => null,
        'versionStages' => null
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
    * id  凭据的版本号标识符，凭据对象下唯一。
    * createTime  凭据版本创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * kmsKeyId  加密版本凭据值的KMS主密钥ID。
    * secretName  凭据名称。
    * versionStages  凭据版本被标记的状态列表。每个版本标签对于凭据对象下版本是唯一存在的，如果你创建版本时，指定的是同一凭据对象下的一个已经标记在其他版本上的状态，该标签将自动从其他版本上删除，并附加到此版本上。  如果未指定version_stage的值，则凭据管理服务会自动移动临时标签SYSCURRENT到此新版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'createTime' => 'create_time',
            'kmsKeyId' => 'kms_key_id',
            'secretName' => 'secret_name',
            'versionStages' => 'version_stages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  凭据的版本号标识符，凭据对象下唯一。
    * createTime  凭据版本创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * kmsKeyId  加密版本凭据值的KMS主密钥ID。
    * secretName  凭据名称。
    * versionStages  凭据版本被标记的状态列表。每个版本标签对于凭据对象下版本是唯一存在的，如果你创建版本时，指定的是同一凭据对象下的一个已经标记在其他版本上的状态，该标签将自动从其他版本上删除，并附加到此版本上。  如果未指定version_stage的值，则凭据管理服务会自动移动临时标签SYSCURRENT到此新版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'createTime' => 'setCreateTime',
            'kmsKeyId' => 'setKmsKeyId',
            'secretName' => 'setSecretName',
            'versionStages' => 'setVersionStages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  凭据的版本号标识符，凭据对象下唯一。
    * createTime  凭据版本创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * kmsKeyId  加密版本凭据值的KMS主密钥ID。
    * secretName  凭据名称。
    * versionStages  凭据版本被标记的状态列表。每个版本标签对于凭据对象下版本是唯一存在的，如果你创建版本时，指定的是同一凭据对象下的一个已经标记在其他版本上的状态，该标签将自动从其他版本上删除，并附加到此版本上。  如果未指定version_stage的值，则凭据管理服务会自动移动临时标签SYSCURRENT到此新版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'createTime' => 'getCreateTime',
            'kmsKeyId' => 'getKmsKeyId',
            'secretName' => 'getSecretName',
            'versionStages' => 'getVersionStages'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['kmsKeyId'] = isset($data['kmsKeyId']) ? $data['kmsKeyId'] : null;
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
        $this->container['versionStages'] = isset($data['versionStages']) ? $data['versionStages'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['kmsKeyId']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['kmsKeyId'])) {
                $invalidProperties[] = "invalid value for 'kmsKeyId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
            if (!is_null($this->container['secretName']) && !preg_match("/^[a-zA-Z0-9._-]{1,64}$/", $this->container['secretName'])) {
                $invalidProperties[] = "invalid value for 'secretName', must be conform to the pattern /^[a-zA-Z0-9._-]{1,64}$/.";
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
    *  凭据的版本号标识符，凭据对象下唯一。
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
    * @param string|null $id 凭据的版本号标识符，凭据对象下唯一。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets createTime
    *  凭据版本创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 凭据版本创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets kmsKeyId
    *  加密版本凭据值的KMS主密钥ID。
    *
    * @return string|null
    */
    public function getKmsKeyId()
    {
        return $this->container['kmsKeyId'];
    }

    /**
    * Sets kmsKeyId
    *
    * @param string|null $kmsKeyId 加密版本凭据值的KMS主密钥ID。
    *
    * @return $this
    */
    public function setKmsKeyId($kmsKeyId)
    {
        $this->container['kmsKeyId'] = $kmsKeyId;
        return $this;
    }

    /**
    * Gets secretName
    *  凭据名称。
    *
    * @return string|null
    */
    public function getSecretName()
    {
        return $this->container['secretName'];
    }

    /**
    * Sets secretName
    *
    * @param string|null $secretName 凭据名称。
    *
    * @return $this
    */
    public function setSecretName($secretName)
    {
        $this->container['secretName'] = $secretName;
        return $this;
    }

    /**
    * Gets versionStages
    *  凭据版本被标记的状态列表。每个版本标签对于凭据对象下版本是唯一存在的，如果你创建版本时，指定的是同一凭据对象下的一个已经标记在其他版本上的状态，该标签将自动从其他版本上删除，并附加到此版本上。  如果未指定version_stage的值，则凭据管理服务会自动移动临时标签SYSCURRENT到此新版本。
    *
    * @return string[]|null
    */
    public function getVersionStages()
    {
        return $this->container['versionStages'];
    }

    /**
    * Sets versionStages
    *
    * @param string[]|null $versionStages 凭据版本被标记的状态列表。每个版本标签对于凭据对象下版本是唯一存在的，如果你创建版本时，指定的是同一凭据对象下的一个已经标记在其他版本上的状态，该标签将自动从其他版本上删除，并附加到此版本上。  如果未指定version_stage的值，则凭据管理服务会自动移动临时标签SYSCURRENT到此新版本。
    *
    * @return $this
    */
    public function setVersionStages($versionStages)
    {
        $this->container['versionStages'] = $versionStages;
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

