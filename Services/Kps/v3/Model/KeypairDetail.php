<?php

namespace HuaweiCloud\SDK\Kps\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeypairDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeypairDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  SSH密钥对的名称
    * id  SSH密钥对的ID
    * type  SSH密钥对的类型。ssh或x509。
    * scope  租户级或者用户级。domain或user。
    * publicKey  SSH密钥对对应的publicKey信息
    * fingerprint  SSH密钥对应指纹信息
    * isKeyProtection  是否托管密钥
    * deleted  SSH密钥对删除的标记
    * description  SSH密钥对的描述信息
    * userId  SSH密钥对所属的用户信息
    * createTime  SSH密钥对创建的时间，时间戳，即从1970年1月1日至该时间的总秒数
    * deleteTime  SSH密钥对删除的时间，时间戳，即从1970年1月1日至该时间的总秒数
    * updateTime  SSH密钥对的更新时间，时间戳，即从1970年1月1日至该时间的总秒数
    * frozenState  冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    * keyId  密钥ID。
    * algorithm  生成算法。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'id' => 'int',
            'type' => 'string',
            'scope' => 'string',
            'publicKey' => 'string',
            'fingerprint' => 'string',
            'isKeyProtection' => 'bool',
            'deleted' => 'bool',
            'description' => 'string',
            'userId' => 'string',
            'createTime' => 'int',
            'deleteTime' => 'int',
            'updateTime' => 'int',
            'frozenState' => 'int',
            'keyId' => 'string',
            'algorithm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  SSH密钥对的名称
    * id  SSH密钥对的ID
    * type  SSH密钥对的类型。ssh或x509。
    * scope  租户级或者用户级。domain或user。
    * publicKey  SSH密钥对对应的publicKey信息
    * fingerprint  SSH密钥对应指纹信息
    * isKeyProtection  是否托管密钥
    * deleted  SSH密钥对删除的标记
    * description  SSH密钥对的描述信息
    * userId  SSH密钥对所属的用户信息
    * createTime  SSH密钥对创建的时间，时间戳，即从1970年1月1日至该时间的总秒数
    * deleteTime  SSH密钥对删除的时间，时间戳，即从1970年1月1日至该时间的总秒数
    * updateTime  SSH密钥对的更新时间，时间戳，即从1970年1月1日至该时间的总秒数
    * frozenState  冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    * keyId  密钥ID。
    * algorithm  生成算法。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'id' => 'int64',
        'type' => null,
        'scope' => null,
        'publicKey' => null,
        'fingerprint' => null,
        'isKeyProtection' => null,
        'deleted' => null,
        'description' => null,
        'userId' => null,
        'createTime' => 'int64',
        'deleteTime' => 'int64',
        'updateTime' => 'int64',
        'frozenState' => 'int32',
        'keyId' => null,
        'algorithm' => null
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
    * name  SSH密钥对的名称
    * id  SSH密钥对的ID
    * type  SSH密钥对的类型。ssh或x509。
    * scope  租户级或者用户级。domain或user。
    * publicKey  SSH密钥对对应的publicKey信息
    * fingerprint  SSH密钥对应指纹信息
    * isKeyProtection  是否托管密钥
    * deleted  SSH密钥对删除的标记
    * description  SSH密钥对的描述信息
    * userId  SSH密钥对所属的用户信息
    * createTime  SSH密钥对创建的时间，时间戳，即从1970年1月1日至该时间的总秒数
    * deleteTime  SSH密钥对删除的时间，时间戳，即从1970年1月1日至该时间的总秒数
    * updateTime  SSH密钥对的更新时间，时间戳，即从1970年1月1日至该时间的总秒数
    * frozenState  冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    * keyId  密钥ID。
    * algorithm  生成算法。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'id' => 'id',
            'type' => 'type',
            'scope' => 'scope',
            'publicKey' => 'public_key',
            'fingerprint' => 'fingerprint',
            'isKeyProtection' => 'is_key_protection',
            'deleted' => 'deleted',
            'description' => 'description',
            'userId' => 'user_id',
            'createTime' => 'create_time',
            'deleteTime' => 'delete_time',
            'updateTime' => 'update_time',
            'frozenState' => 'frozen_state',
            'keyId' => 'key_id',
            'algorithm' => 'algorithm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  SSH密钥对的名称
    * id  SSH密钥对的ID
    * type  SSH密钥对的类型。ssh或x509。
    * scope  租户级或者用户级。domain或user。
    * publicKey  SSH密钥对对应的publicKey信息
    * fingerprint  SSH密钥对应指纹信息
    * isKeyProtection  是否托管密钥
    * deleted  SSH密钥对删除的标记
    * description  SSH密钥对的描述信息
    * userId  SSH密钥对所属的用户信息
    * createTime  SSH密钥对创建的时间，时间戳，即从1970年1月1日至该时间的总秒数
    * deleteTime  SSH密钥对删除的时间，时间戳，即从1970年1月1日至该时间的总秒数
    * updateTime  SSH密钥对的更新时间，时间戳，即从1970年1月1日至该时间的总秒数
    * frozenState  冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    * keyId  密钥ID。
    * algorithm  生成算法。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'id' => 'setId',
            'type' => 'setType',
            'scope' => 'setScope',
            'publicKey' => 'setPublicKey',
            'fingerprint' => 'setFingerprint',
            'isKeyProtection' => 'setIsKeyProtection',
            'deleted' => 'setDeleted',
            'description' => 'setDescription',
            'userId' => 'setUserId',
            'createTime' => 'setCreateTime',
            'deleteTime' => 'setDeleteTime',
            'updateTime' => 'setUpdateTime',
            'frozenState' => 'setFrozenState',
            'keyId' => 'setKeyId',
            'algorithm' => 'setAlgorithm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  SSH密钥对的名称
    * id  SSH密钥对的ID
    * type  SSH密钥对的类型。ssh或x509。
    * scope  租户级或者用户级。domain或user。
    * publicKey  SSH密钥对对应的publicKey信息
    * fingerprint  SSH密钥对应指纹信息
    * isKeyProtection  是否托管密钥
    * deleted  SSH密钥对删除的标记
    * description  SSH密钥对的描述信息
    * userId  SSH密钥对所属的用户信息
    * createTime  SSH密钥对创建的时间，时间戳，即从1970年1月1日至该时间的总秒数
    * deleteTime  SSH密钥对删除的时间，时间戳，即从1970年1月1日至该时间的总秒数
    * updateTime  SSH密钥对的更新时间，时间戳，即从1970年1月1日至该时间的总秒数
    * frozenState  冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    * keyId  密钥ID。
    * algorithm  生成算法。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'id' => 'getId',
            'type' => 'getType',
            'scope' => 'getScope',
            'publicKey' => 'getPublicKey',
            'fingerprint' => 'getFingerprint',
            'isKeyProtection' => 'getIsKeyProtection',
            'deleted' => 'getDeleted',
            'description' => 'getDescription',
            'userId' => 'getUserId',
            'createTime' => 'getCreateTime',
            'deleteTime' => 'getDeleteTime',
            'updateTime' => 'getUpdateTime',
            'frozenState' => 'getFrozenState',
            'keyId' => 'getKeyId',
            'algorithm' => 'getAlgorithm'
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
    const TYPE_SSH = 'ssh';
    const TYPE_X509 = 'x509';
    const SCOPE_DOMAIN = 'domain';
    const SCOPE_USER = 'user';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SSH,
            self::TYPE_X509,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScopeAllowableValues()
    {
        return [
            self::SCOPE_DOMAIN,
            self::SCOPE_USER,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['publicKey'] = isset($data['publicKey']) ? $data['publicKey'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['isKeyProtection'] = isset($data['isKeyProtection']) ? $data['isKeyProtection'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['deleteTime'] = isset($data['deleteTime']) ? $data['deleteTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['frozenState'] = isset($data['frozenState']) ? $data['frozenState'] : null;
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['algorithm'] = isset($data['algorithm']) ? $data['algorithm'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && !preg_match("/^[A-Za-z0-9_-]{1,255}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z0-9_-]{1,255}$/.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] > 1000000000)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 1000000000.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getScopeAllowableValues();
                if (!is_null($this->container['scope']) && !in_array($this->container['scope'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scope', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['publicKey']) && (mb_strlen($this->container['publicKey']) > 1024)) {
                $invalidProperties[] = "invalid value for 'publicKey', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['publicKey']) && (mb_strlen($this->container['publicKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fingerprint']) && (mb_strlen($this->container['fingerprint']) > 255)) {
                $invalidProperties[] = "invalid value for 'fingerprint', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['fingerprint']) && (mb_strlen($this->container['fingerprint']) < 0)) {
                $invalidProperties[] = "invalid value for 'fingerprint', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['userId']) && !preg_match("/^[0-9a-zA-Z]{1,64}$/", $this->container['userId'])) {
                $invalidProperties[] = "invalid value for 'userId', must be conform to the pattern /^[0-9a-zA-Z]{1,64}$/.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 10000000000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 10000000000000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deleteTime']) && ($this->container['deleteTime'] > 10000000000000)) {
                $invalidProperties[] = "invalid value for 'deleteTime', must be smaller than or equal to 10000000000000.";
            }
            if (!is_null($this->container['deleteTime']) && ($this->container['deleteTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'deleteTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 10000000000000)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 10000000000000.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['frozenState']) && ($this->container['frozenState'] > 64)) {
                $invalidProperties[] = "invalid value for 'frozenState', must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['frozenState']) && ($this->container['frozenState'] < 0)) {
                $invalidProperties[] = "invalid value for 'frozenState', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) > 64)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['keyId']) && (mb_strlen($this->container['keyId']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['algorithm']) && (mb_strlen($this->container['algorithm']) > 32)) {
                $invalidProperties[] = "invalid value for 'algorithm', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['algorithm']) && (mb_strlen($this->container['algorithm']) < 0)) {
                $invalidProperties[] = "invalid value for 'algorithm', the character length must be bigger than or equal to 0.";
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
    *  SSH密钥对的名称
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
    * @param string|null $name SSH密钥对的名称
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
    *  SSH密钥对的ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id SSH密钥对的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets type
    *  SSH密钥对的类型。ssh或x509。
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
    * @param string|null $type SSH密钥对的类型。ssh或x509。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets scope
    *  租户级或者用户级。domain或user。
    *
    * @return string|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param string|null $scope 租户级或者用户级。domain或user。
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets publicKey
    *  SSH密钥对对应的publicKey信息
    *
    * @return string|null
    */
    public function getPublicKey()
    {
        return $this->container['publicKey'];
    }

    /**
    * Sets publicKey
    *
    * @param string|null $publicKey SSH密钥对对应的publicKey信息
    *
    * @return $this
    */
    public function setPublicKey($publicKey)
    {
        $this->container['publicKey'] = $publicKey;
        return $this;
    }

    /**
    * Gets fingerprint
    *  SSH密钥对应指纹信息
    *
    * @return string|null
    */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
    * Sets fingerprint
    *
    * @param string|null $fingerprint SSH密钥对应指纹信息
    *
    * @return $this
    */
    public function setFingerprint($fingerprint)
    {
        $this->container['fingerprint'] = $fingerprint;
        return $this;
    }

    /**
    * Gets isKeyProtection
    *  是否托管密钥
    *
    * @return bool|null
    */
    public function getIsKeyProtection()
    {
        return $this->container['isKeyProtection'];
    }

    /**
    * Sets isKeyProtection
    *
    * @param bool|null $isKeyProtection 是否托管密钥
    *
    * @return $this
    */
    public function setIsKeyProtection($isKeyProtection)
    {
        $this->container['isKeyProtection'] = $isKeyProtection;
        return $this;
    }

    /**
    * Gets deleted
    *  SSH密钥对删除的标记
    *
    * @return bool|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param bool|null $deleted SSH密钥对删除的标记
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets description
    *  SSH密钥对的描述信息
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
    * @param string|null $description SSH密钥对的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets userId
    *  SSH密钥对所属的用户信息
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId SSH密钥对所属的用户信息
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets createTime
    *  SSH密钥对创建的时间，时间戳，即从1970年1月1日至该时间的总秒数
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
    * @param int|null $createTime SSH密钥对创建的时间，时间戳，即从1970年1月1日至该时间的总秒数
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets deleteTime
    *  SSH密钥对删除的时间，时间戳，即从1970年1月1日至该时间的总秒数
    *
    * @return int|null
    */
    public function getDeleteTime()
    {
        return $this->container['deleteTime'];
    }

    /**
    * Sets deleteTime
    *
    * @param int|null $deleteTime SSH密钥对删除的时间，时间戳，即从1970年1月1日至该时间的总秒数
    *
    * @return $this
    */
    public function setDeleteTime($deleteTime)
    {
        $this->container['deleteTime'] = $deleteTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  SSH密钥对的更新时间，时间戳，即从1970年1月1日至该时间的总秒数
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime SSH密钥对的更新时间，时间戳，即从1970年1月1日至该时间的总秒数
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets frozenState
    *  冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    *
    * @return int|null
    */
    public function getFrozenState()
    {
        return $this->container['frozenState'];
    }

    /**
    * Sets frozenState
    *
    * @param int|null $frozenState 冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    *
    * @return $this
    */
    public function setFrozenState($frozenState)
    {
        $this->container['frozenState'] = $frozenState;
        return $this;
    }

    /**
    * Gets keyId
    *  密钥ID。
    *
    * @return string|null
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string|null $keyId 密钥ID。
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets algorithm
    *  生成算法。
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
    * @param string|null $algorithm 生成算法。
    *
    * @return $this
    */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;
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

