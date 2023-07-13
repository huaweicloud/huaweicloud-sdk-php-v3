<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectableResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectableResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  不支持备份的错误码
    * reason  不支持备份的原因
    * result  是否可备份
    * vault  vault
    * message  资源不可备份的原因信息，当资源可保护性检验失败时才有该字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'reason' => 'string',
            'result' => 'bool',
            'vault' => '\HuaweiCloud\SDK\Cbr\V1\Model\VaultGet',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  不支持备份的错误码
    * reason  不支持备份的原因
    * result  是否可备份
    * vault  vault
    * message  资源不可备份的原因信息，当资源可保护性检验失败时才有该字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'reason' => null,
        'result' => null,
        'vault' => null,
        'message' => null
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
    * code  不支持备份的错误码
    * reason  不支持备份的原因
    * result  是否可备份
    * vault  vault
    * message  资源不可备份的原因信息，当资源可保护性检验失败时才有该字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'reason' => 'reason',
            'result' => 'result',
            'vault' => 'vault',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  不支持备份的错误码
    * reason  不支持备份的原因
    * result  是否可备份
    * vault  vault
    * message  资源不可备份的原因信息，当资源可保护性检验失败时才有该字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'reason' => 'setReason',
            'result' => 'setResult',
            'vault' => 'setVault',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  不支持备份的错误码
    * reason  不支持备份的原因
    * result  是否可备份
    * vault  vault
    * message  资源不可备份的原因信息，当资源可保护性检验失败时才有该字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'reason' => 'getReason',
            'result' => 'getResult',
            'vault' => 'getVault',
            'message' => 'getMessage'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['vault'] = isset($data['vault']) ? $data['vault'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
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
    * Gets code
    *  不支持备份的错误码
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 不支持备份的错误码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets reason
    *  不支持备份的原因
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 不支持备份的原因
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets result
    *  是否可备份
    *
    * @return bool
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param bool $result 是否可备份
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets vault
    *  vault
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\VaultGet|null
    */
    public function getVault()
    {
        return $this->container['vault'];
    }

    /**
    * Sets vault
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\VaultGet|null $vault vault
    *
    * @return $this
    */
    public function setVault($vault)
    {
        $this->container['vault'] = $vault;
        return $this;
    }

    /**
    * Gets message
    *  资源不可备份的原因信息，当资源可保护性检验失败时才有该字段。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 资源不可备份的原因信息，当资源可保护性检验失败时才有该字段。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

