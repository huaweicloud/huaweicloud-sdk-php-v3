<?php

namespace HuaweiCloud\SDK\Csms\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSecretStageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSecretStageRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * secretName  凭据名称。
    * stageName  凭据版本状态的名称。满足 '^[a-zA-Z0-9._-]{1,64}$'
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'secretName' => 'string',
            'stageName' => 'string',
            'body' => '\HuaweiCloud\SDK\Csms\v1\Model\UpdateSecretStageRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * secretName  凭据名称。
    * stageName  凭据版本状态的名称。满足 '^[a-zA-Z0-9._-]{1,64}$'
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'secretName' => null,
        'stageName' => null,
        'body' => null
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
    * secretName  凭据名称。
    * stageName  凭据版本状态的名称。满足 '^[a-zA-Z0-9._-]{1,64}$'
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'secretName' => 'secret_name',
            'stageName' => 'stage_name',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * secretName  凭据名称。
    * stageName  凭据版本状态的名称。满足 '^[a-zA-Z0-9._-]{1,64}$'
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'secretName' => 'setSecretName',
            'stageName' => 'setStageName',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * secretName  凭据名称。
    * stageName  凭据版本状态的名称。满足 '^[a-zA-Z0-9._-]{1,64}$'
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'secretName' => 'getSecretName',
            'stageName' => 'getStageName',
            'body' => 'getBody'
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
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
        $this->container['stageName'] = isset($data['stageName']) ? $data['stageName'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['secretName'] === null) {
            $invalidProperties[] = "'secretName' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9._-]{1,64}$/", $this->container['secretName'])) {
                $invalidProperties[] = "invalid value for 'secretName', must be conform to the pattern /^[a-zA-Z0-9._-]{1,64}$/.";
            }
        if ($this->container['stageName'] === null) {
            $invalidProperties[] = "'stageName' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9._-]{1,64}$/", $this->container['stageName'])) {
                $invalidProperties[] = "invalid value for 'stageName', must be conform to the pattern /^[a-zA-Z0-9._-]{1,64}$/.";
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
    * Gets secretName
    *  凭据名称。
    *
    * @return string
    */
    public function getSecretName()
    {
        return $this->container['secretName'];
    }

    /**
    * Sets secretName
    *
    * @param string $secretName 凭据名称。
    *
    * @return $this
    */
    public function setSecretName($secretName)
    {
        $this->container['secretName'] = $secretName;
        return $this;
    }

    /**
    * Gets stageName
    *  凭据版本状态的名称。满足 '^[a-zA-Z0-9._-]{1,64}$'
    *
    * @return string
    */
    public function getStageName()
    {
        return $this->container['stageName'];
    }

    /**
    * Sets stageName
    *
    * @param string $stageName 凭据版本状态的名称。满足 '^[a-zA-Z0-9._-]{1,64}$'
    *
    * @return $this
    */
    public function setStageName($stageName)
    {
        $this->container['stageName'] = $stageName;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Csms\v1\Model\UpdateSecretStageRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Csms\v1\Model\UpdateSecretStageRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

