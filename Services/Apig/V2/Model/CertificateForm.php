<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CertificateForm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CertificateForm';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  证书名称
    * certContent  证书内容
    * privateKey  证书私钥
    * type  证书可见范围
    * instanceId  所属实例ID，当type=instance时必填
    * trustedRootCa  信任的根证书CA
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'certContent' => 'string',
            'privateKey' => 'string',
            'type' => 'string',
            'instanceId' => 'string',
            'trustedRootCa' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  证书名称
    * certContent  证书内容
    * privateKey  证书私钥
    * type  证书可见范围
    * instanceId  所属实例ID，当type=instance时必填
    * trustedRootCa  信任的根证书CA
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'certContent' => null,
        'privateKey' => null,
        'type' => null,
        'instanceId' => null,
        'trustedRootCa' => null
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
    * certContent  证书内容
    * privateKey  证书私钥
    * type  证书可见范围
    * instanceId  所属实例ID，当type=instance时必填
    * trustedRootCa  信任的根证书CA
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'certContent' => 'cert_content',
            'privateKey' => 'private_key',
            'type' => 'type',
            'instanceId' => 'instance_id',
            'trustedRootCa' => 'trusted_root_ca'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  证书名称
    * certContent  证书内容
    * privateKey  证书私钥
    * type  证书可见范围
    * instanceId  所属实例ID，当type=instance时必填
    * trustedRootCa  信任的根证书CA
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'certContent' => 'setCertContent',
            'privateKey' => 'setPrivateKey',
            'type' => 'setType',
            'instanceId' => 'setInstanceId',
            'trustedRootCa' => 'setTrustedRootCa'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  证书名称
    * certContent  证书内容
    * privateKey  证书私钥
    * type  证书可见范围
    * instanceId  所属实例ID，当type=instance时必填
    * trustedRootCa  信任的根证书CA
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'certContent' => 'getCertContent',
            'privateKey' => 'getPrivateKey',
            'type' => 'getType',
            'instanceId' => 'getInstanceId',
            'trustedRootCa' => 'getTrustedRootCa'
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
    const TYPE_INSTANCE = 'instance';
    const TYPE__GLOBAL = 'global';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_INSTANCE,
            self::TYPE__GLOBAL,
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
        $this->container['certContent'] = isset($data['certContent']) ? $data['certContent'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['trustedRootCa'] = isset($data['trustedRootCa']) ? $data['trustedRootCa'] : null;
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
        if ($this->container['certContent'] === null) {
            $invalidProperties[] = "'certContent' can't be null";
        }
        if ($this->container['privateKey'] === null) {
            $invalidProperties[] = "'privateKey' can't be null";
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
    * Gets name
    *  证书名称
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
    * @param string $name 证书名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets certContent
    *  证书内容
    *
    * @return string
    */
    public function getCertContent()
    {
        return $this->container['certContent'];
    }

    /**
    * Sets certContent
    *
    * @param string $certContent 证书内容
    *
    * @return $this
    */
    public function setCertContent($certContent)
    {
        $this->container['certContent'] = $certContent;
        return $this;
    }

    /**
    * Gets privateKey
    *  证书私钥
    *
    * @return string
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string $privateKey 证书私钥
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets type
    *  证书可见范围
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
    * @param string|null $type 证书可见范围
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
    *  所属实例ID，当type=instance时必填
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
    * @param string|null $instanceId 所属实例ID，当type=instance时必填
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets trustedRootCa
    *  信任的根证书CA
    *
    * @return string|null
    */
    public function getTrustedRootCa()
    {
        return $this->container['trustedRootCa'];
    }

    /**
    * Sets trustedRootCa
    *
    * @param string|null $trustedRootCa 信任的根证书CA
    *
    * @return $this
    */
    public function setTrustedRootCa($trustedRootCa)
    {
        $this->container['trustedRootCa'] = $trustedRootCa;
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

