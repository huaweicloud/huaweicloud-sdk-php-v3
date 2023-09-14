<?php

namespace HuaweiCloud\SDK\Kps\v3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Keypair implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Keypair';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  SSH密钥对的名称
    * type  SSH密钥对的类型，值为“ssh”或“x509”
    * scope  租户级或者用户级。domain或user。
    * publicKey  SSH密钥对对应的publicKey信息
    * fingerprint  SSH密钥对应指纹信息
    * isKeyProtection  是否托管密钥
    * frozenState  冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'scope' => 'string',
            'publicKey' => 'string',
            'fingerprint' => 'string',
            'isKeyProtection' => 'bool',
            'frozenState' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  SSH密钥对的名称
    * type  SSH密钥对的类型，值为“ssh”或“x509”
    * scope  租户级或者用户级。domain或user。
    * publicKey  SSH密钥对对应的publicKey信息
    * fingerprint  SSH密钥对应指纹信息
    * isKeyProtection  是否托管密钥
    * frozenState  冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'scope' => null,
        'publicKey' => null,
        'fingerprint' => null,
        'isKeyProtection' => null,
        'frozenState' => null
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
    * type  SSH密钥对的类型，值为“ssh”或“x509”
    * scope  租户级或者用户级。domain或user。
    * publicKey  SSH密钥对对应的publicKey信息
    * fingerprint  SSH密钥对应指纹信息
    * isKeyProtection  是否托管密钥
    * frozenState  冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'scope' => 'scope',
            'publicKey' => 'public_key',
            'fingerprint' => 'fingerprint',
            'isKeyProtection' => 'is_key_protection',
            'frozenState' => 'frozen_state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  SSH密钥对的名称
    * type  SSH密钥对的类型，值为“ssh”或“x509”
    * scope  租户级或者用户级。domain或user。
    * publicKey  SSH密钥对对应的publicKey信息
    * fingerprint  SSH密钥对应指纹信息
    * isKeyProtection  是否托管密钥
    * frozenState  冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'scope' => 'setScope',
            'publicKey' => 'setPublicKey',
            'fingerprint' => 'setFingerprint',
            'isKeyProtection' => 'setIsKeyProtection',
            'frozenState' => 'setFrozenState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  SSH密钥对的名称
    * type  SSH密钥对的类型，值为“ssh”或“x509”
    * scope  租户级或者用户级。domain或user。
    * publicKey  SSH密钥对对应的publicKey信息
    * fingerprint  SSH密钥对应指纹信息
    * isKeyProtection  是否托管密钥
    * frozenState  冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'scope' => 'getScope',
            'publicKey' => 'getPublicKey',
            'fingerprint' => 'getFingerprint',
            'isKeyProtection' => 'getIsKeyProtection',
            'frozenState' => 'getFrozenState'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['publicKey'] = isset($data['publicKey']) ? $data['publicKey'] : null;
        $this->container['fingerprint'] = isset($data['fingerprint']) ? $data['fingerprint'] : null;
        $this->container['isKeyProtection'] = isset($data['isKeyProtection']) ? $data['isKeyProtection'] : null;
        $this->container['frozenState'] = isset($data['frozenState']) ? $data['frozenState'] : null;
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
            if (!is_null($this->container['frozenState']) && (mb_strlen($this->container['frozenState']) > 255)) {
                $invalidProperties[] = "invalid value for 'frozenState', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['frozenState']) && (mb_strlen($this->container['frozenState']) < 0)) {
                $invalidProperties[] = "invalid value for 'frozenState', the character length must be bigger than or equal to 0.";
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
    * Gets type
    *  SSH密钥对的类型，值为“ssh”或“x509”
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
    * @param string|null $type SSH密钥对的类型，值为“ssh”或“x509”
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
    * Gets frozenState
    *  冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    *
    * @return string|null
    */
    public function getFrozenState()
    {
        return $this->container['frozenState'];
    }

    /**
    * Sets frozenState
    *
    * @param string|null $frozenState 冻结状态 - 0：正常状态 - 1：普通冻结 - 2：公安冻结 - 3：普通冻结及公安冻结 - 4：违规冻结 - 5：普通冻结及违规冻结 - 6：公安冻结及违规冻结 - 7：普通冻结、公安冻结及违规冻结 - 8：未实名认证冻结 - 9：普通冻结及未实名认证冻结 - 10：公安冻结及未实名认证冻结
    *
    * @return $this
    */
    public function setFrozenState($frozenState)
    {
        $this->container['frozenState'] = $frozenState;
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

