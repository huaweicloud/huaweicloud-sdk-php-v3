<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RotateSecretResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RotateSecretResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * versionId  凭据的版本号标识符。
    * secretName  凭据的名称。
    * rotationTaskId  凭据轮转任务ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'versionId' => 'string',
            'secretName' => 'string',
            'rotationTaskId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * versionId  凭据的版本号标识符。
    * secretName  凭据的名称。
    * rotationTaskId  凭据轮转任务ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'versionId' => null,
        'secretName' => null,
        'rotationTaskId' => null
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
    * versionId  凭据的版本号标识符。
    * secretName  凭据的名称。
    * rotationTaskId  凭据轮转任务ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'versionId' => 'version_id',
            'secretName' => 'secret_name',
            'rotationTaskId' => 'rotation_task_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * versionId  凭据的版本号标识符。
    * secretName  凭据的名称。
    * rotationTaskId  凭据轮转任务ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'versionId' => 'setVersionId',
            'secretName' => 'setSecretName',
            'rotationTaskId' => 'setRotationTaskId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * versionId  凭据的版本号标识符。
    * secretName  凭据的名称。
    * rotationTaskId  凭据轮转任务ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'versionId' => 'getVersionId',
            'secretName' => 'getSecretName',
            'rotationTaskId' => 'getRotationTaskId'
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
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['secretName'] = isset($data['secretName']) ? $data['secretName'] : null;
        $this->container['rotationTaskId'] = isset($data['rotationTaskId']) ? $data['rotationTaskId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['versionId']) && !preg_match("/^v[0-9]{0,63}/", $this->container['versionId'])) {
                $invalidProperties[] = "invalid value for 'versionId', must be conform to the pattern /^v[0-9]{0,63}/.";
            }
            if (!is_null($this->container['secretName']) && !preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['secretName'])) {
                $invalidProperties[] = "invalid value for 'secretName', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
            }
            if (!is_null($this->container['rotationTaskId']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['rotationTaskId'])) {
                $invalidProperties[] = "invalid value for 'rotationTaskId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
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
    * Gets versionId
    *  凭据的版本号标识符。
    *
    * @return string|null
    */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
    * Sets versionId
    *
    * @param string|null $versionId 凭据的版本号标识符。
    *
    * @return $this
    */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;
        return $this;
    }

    /**
    * Gets secretName
    *  凭据的名称。
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
    * @param string|null $secretName 凭据的名称。
    *
    * @return $this
    */
    public function setSecretName($secretName)
    {
        $this->container['secretName'] = $secretName;
        return $this;
    }

    /**
    * Gets rotationTaskId
    *  凭据轮转任务ID。
    *
    * @return string|null
    */
    public function getRotationTaskId()
    {
        return $this->container['rotationTaskId'];
    }

    /**
    * Sets rotationTaskId
    *
    * @param string|null $rotationTaskId 凭据轮转任务ID。
    *
    * @return $this
    */
    public function setRotationTaskId($rotationTaskId)
    {
        $this->container['rotationTaskId'] = $rotationTaskId;
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

