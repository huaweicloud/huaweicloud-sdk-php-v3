<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RotateKeyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RotateKeyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * masterKeyName  **参数解释**： KMS密钥名称 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * rotateKeyTime  **参数解释**： 轮转时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'masterKeyName' => 'string',
            'clusterId' => 'string',
            'rotateKeyTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * masterKeyName  **参数解释**： KMS密钥名称 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * rotateKeyTime  **参数解释**： 轮转时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'masterKeyName' => null,
        'clusterId' => null,
        'rotateKeyTime' => null
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
    * masterKeyName  **参数解释**： KMS密钥名称 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * rotateKeyTime  **参数解释**： 轮转时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'masterKeyName' => 'master_key_name',
            'clusterId' => 'cluster_id',
            'rotateKeyTime' => 'rotate_key_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * masterKeyName  **参数解释**： KMS密钥名称 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * rotateKeyTime  **参数解释**： 轮转时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'masterKeyName' => 'setMasterKeyName',
            'clusterId' => 'setClusterId',
            'rotateKeyTime' => 'setRotateKeyTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * masterKeyName  **参数解释**： KMS密钥名称 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * rotateKeyTime  **参数解释**： 轮转时间。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'masterKeyName' => 'getMasterKeyName',
            'clusterId' => 'getClusterId',
            'rotateKeyTime' => 'getRotateKeyTime'
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
        $this->container['masterKeyName'] = isset($data['masterKeyName']) ? $data['masterKeyName'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['rotateKeyTime'] = isset($data['rotateKeyTime']) ? $data['rotateKeyTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets masterKeyName
    *  **参数解释**： KMS密钥名称 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getMasterKeyName()
    {
        return $this->container['masterKeyName'];
    }

    /**
    * Sets masterKeyName
    *
    * @param string|null $masterKeyName **参数解释**： KMS密钥名称 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMasterKeyName($masterKeyName)
    {
        $this->container['masterKeyName'] = $masterKeyName;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释**： 集群ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets rotateKeyTime
    *  **参数解释**： 轮转时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getRotateKeyTime()
    {
        return $this->container['rotateKeyTime'];
    }

    /**
    * Sets rotateKeyTime
    *
    * @param string|null $rotateKeyTime **参数解释**： 轮转时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRotateKeyTime($rotateKeyTime)
    {
        $this->container['rotateKeyTime'] = $rotateKeyTime;
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

