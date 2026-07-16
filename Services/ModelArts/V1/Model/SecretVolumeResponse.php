<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecretVolumeResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecretVolumeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * secretName  **参数解释：** 密钥名称。 **取值范围：** 不涉及。
    * secretKey  **参数解释：** 密钥key。 **取值范围：** 长度不大于63。
    * secretValue  **参数解释：** 密钥值。 **取值范围：** 长度不大于32768。
    * mountPath  **参数解释：** 挂载路径。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'secretName' => 'string',
            'secretKey' => 'string',
            'secretValue' => 'string',
            'mountPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * secretName  **参数解释：** 密钥名称。 **取值范围：** 不涉及。
    * secretKey  **参数解释：** 密钥key。 **取值范围：** 长度不大于63。
    * secretValue  **参数解释：** 密钥值。 **取值范围：** 长度不大于32768。
    * mountPath  **参数解释：** 挂载路径。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'secretName' => null,
        'secretKey' => null,
        'secretValue' => null,
        'mountPath' => null
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
    * secretName  **参数解释：** 密钥名称。 **取值范围：** 不涉及。
    * secretKey  **参数解释：** 密钥key。 **取值范围：** 长度不大于63。
    * secretValue  **参数解释：** 密钥值。 **取值范围：** 长度不大于32768。
    * mountPath  **参数解释：** 挂载路径。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'secretName' => 'secret_name',
            'secretKey' => 'secret_key',
            'secretValue' => 'secret_value',
            'mountPath' => 'mount_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * secretName  **参数解释：** 密钥名称。 **取值范围：** 不涉及。
    * secretKey  **参数解释：** 密钥key。 **取值范围：** 长度不大于63。
    * secretValue  **参数解释：** 密钥值。 **取值范围：** 长度不大于32768。
    * mountPath  **参数解释：** 挂载路径。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'secretName' => 'setSecretName',
            'secretKey' => 'setSecretKey',
            'secretValue' => 'setSecretValue',
            'mountPath' => 'setMountPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * secretName  **参数解释：** 密钥名称。 **取值范围：** 不涉及。
    * secretKey  **参数解释：** 密钥key。 **取值范围：** 长度不大于63。
    * secretValue  **参数解释：** 密钥值。 **取值范围：** 长度不大于32768。
    * mountPath  **参数解释：** 挂载路径。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'secretName' => 'getSecretName',
            'secretKey' => 'getSecretKey',
            'secretValue' => 'getSecretValue',
            'mountPath' => 'getMountPath'
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
        $this->container['secretKey'] = isset($data['secretKey']) ? $data['secretKey'] : null;
        $this->container['secretValue'] = isset($data['secretValue']) ? $data['secretValue'] : null;
        $this->container['mountPath'] = isset($data['mountPath']) ? $data['mountPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['mountPath'] === null) {
            $invalidProperties[] = "'mountPath' can't be null";
        }
            if (!preg_match("/^[\/][\\w+\/-]{0,255}$/", $this->container['mountPath'])) {
                $invalidProperties[] = "invalid value for 'mountPath', must be conform to the pattern /^[\/][\\w+\/-]{0,255}$/.";
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
    *  **参数解释：** 密钥名称。 **取值范围：** 不涉及。
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
    * @param string|null $secretName **参数解释：** 密钥名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setSecretName($secretName)
    {
        $this->container['secretName'] = $secretName;
        return $this;
    }

    /**
    * Gets secretKey
    *  **参数解释：** 密钥key。 **取值范围：** 长度不大于63。
    *
    * @return string|null
    */
    public function getSecretKey()
    {
        return $this->container['secretKey'];
    }

    /**
    * Sets secretKey
    *
    * @param string|null $secretKey **参数解释：** 密钥key。 **取值范围：** 长度不大于63。
    *
    * @return $this
    */
    public function setSecretKey($secretKey)
    {
        $this->container['secretKey'] = $secretKey;
        return $this;
    }

    /**
    * Gets secretValue
    *  **参数解释：** 密钥值。 **取值范围：** 长度不大于32768。
    *
    * @return string|null
    */
    public function getSecretValue()
    {
        return $this->container['secretValue'];
    }

    /**
    * Sets secretValue
    *
    * @param string|null $secretValue **参数解释：** 密钥值。 **取值范围：** 长度不大于32768。
    *
    * @return $this
    */
    public function setSecretValue($secretValue)
    {
        $this->container['secretValue'] = $secretValue;
        return $this;
    }

    /**
    * Gets mountPath
    *  **参数解释：** 挂载路径。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getMountPath()
    {
        return $this->container['mountPath'];
    }

    /**
    * Sets mountPath
    *
    * @param string $mountPath **参数解释：** 挂载路径。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMountPath($mountPath)
    {
        $this->container['mountPath'] = $mountPath;
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

