<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterEncryptInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterEncryptInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 加密ID，仅DWS内部使用。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * masterKeyId  **参数解释**： KMS密钥ID。 **取值范围**： 不涉及。
    * masterKeyName  **参数解释**： KMS密钥名称。 **取值范围**： 不涉及。
    * lastRotateKeyTime  **参数解释**： 最后做密钥轮转的时间。 **取值范围**： 不涉及。
    * cryptAlgorithm  **参数解释**： 加密方式。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'clusterId' => 'string',
            'masterKeyId' => 'string',
            'masterKeyName' => 'string',
            'lastRotateKeyTime' => 'string',
            'cryptAlgorithm' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 加密ID，仅DWS内部使用。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * masterKeyId  **参数解释**： KMS密钥ID。 **取值范围**： 不涉及。
    * masterKeyName  **参数解释**： KMS密钥名称。 **取值范围**： 不涉及。
    * lastRotateKeyTime  **参数解释**： 最后做密钥轮转的时间。 **取值范围**： 不涉及。
    * cryptAlgorithm  **参数解释**： 加密方式。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'clusterId' => null,
        'masterKeyId' => null,
        'masterKeyName' => null,
        'lastRotateKeyTime' => null,
        'cryptAlgorithm' => null
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
    * id  **参数解释**： 加密ID，仅DWS内部使用。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * masterKeyId  **参数解释**： KMS密钥ID。 **取值范围**： 不涉及。
    * masterKeyName  **参数解释**： KMS密钥名称。 **取值范围**： 不涉及。
    * lastRotateKeyTime  **参数解释**： 最后做密钥轮转的时间。 **取值范围**： 不涉及。
    * cryptAlgorithm  **参数解释**： 加密方式。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'clusterId' => 'cluster_id',
            'masterKeyId' => 'master_key_id',
            'masterKeyName' => 'master_key_name',
            'lastRotateKeyTime' => 'last_rotate_key_time',
            'cryptAlgorithm' => 'crypt_algorithm'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 加密ID，仅DWS内部使用。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * masterKeyId  **参数解释**： KMS密钥ID。 **取值范围**： 不涉及。
    * masterKeyName  **参数解释**： KMS密钥名称。 **取值范围**： 不涉及。
    * lastRotateKeyTime  **参数解释**： 最后做密钥轮转的时间。 **取值范围**： 不涉及。
    * cryptAlgorithm  **参数解释**： 加密方式。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'clusterId' => 'setClusterId',
            'masterKeyId' => 'setMasterKeyId',
            'masterKeyName' => 'setMasterKeyName',
            'lastRotateKeyTime' => 'setLastRotateKeyTime',
            'cryptAlgorithm' => 'setCryptAlgorithm'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 加密ID，仅DWS内部使用。 **取值范围**： 不涉及。
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 不涉及。
    * masterKeyId  **参数解释**： KMS密钥ID。 **取值范围**： 不涉及。
    * masterKeyName  **参数解释**： KMS密钥名称。 **取值范围**： 不涉及。
    * lastRotateKeyTime  **参数解释**： 最后做密钥轮转的时间。 **取值范围**： 不涉及。
    * cryptAlgorithm  **参数解释**： 加密方式。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'clusterId' => 'getClusterId',
            'masterKeyId' => 'getMasterKeyId',
            'masterKeyName' => 'getMasterKeyName',
            'lastRotateKeyTime' => 'getLastRotateKeyTime',
            'cryptAlgorithm' => 'getCryptAlgorithm'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['masterKeyId'] = isset($data['masterKeyId']) ? $data['masterKeyId'] : null;
        $this->container['masterKeyName'] = isset($data['masterKeyName']) ? $data['masterKeyName'] : null;
        $this->container['lastRotateKeyTime'] = isset($data['lastRotateKeyTime']) ? $data['lastRotateKeyTime'] : null;
        $this->container['cryptAlgorithm'] = isset($data['cryptAlgorithm']) ? $data['cryptAlgorithm'] : null;
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
    * Gets id
    *  **参数解释**： 加密ID，仅DWS内部使用。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 加密ID，仅DWS内部使用。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets masterKeyId
    *  **参数解释**： KMS密钥ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getMasterKeyId()
    {
        return $this->container['masterKeyId'];
    }

    /**
    * Sets masterKeyId
    *
    * @param string|null $masterKeyId **参数解释**： KMS密钥ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMasterKeyId($masterKeyId)
    {
        $this->container['masterKeyId'] = $masterKeyId;
        return $this;
    }

    /**
    * Gets masterKeyName
    *  **参数解释**： KMS密钥名称。 **取值范围**： 不涉及。
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
    * @param string|null $masterKeyName **参数解释**： KMS密钥名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMasterKeyName($masterKeyName)
    {
        $this->container['masterKeyName'] = $masterKeyName;
        return $this;
    }

    /**
    * Gets lastRotateKeyTime
    *  **参数解释**： 最后做密钥轮转的时间。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLastRotateKeyTime()
    {
        return $this->container['lastRotateKeyTime'];
    }

    /**
    * Sets lastRotateKeyTime
    *
    * @param string|null $lastRotateKeyTime **参数解释**： 最后做密钥轮转的时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLastRotateKeyTime($lastRotateKeyTime)
    {
        $this->container['lastRotateKeyTime'] = $lastRotateKeyTime;
        return $this;
    }

    /**
    * Gets cryptAlgorithm
    *  **参数解释**： 加密方式。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCryptAlgorithm()
    {
        return $this->container['cryptAlgorithm'];
    }

    /**
    * Sets cryptAlgorithm
    *
    * @param string|null $cryptAlgorithm **参数解释**： 加密方式。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCryptAlgorithm($cryptAlgorithm)
    {
        $this->container['cryptAlgorithm'] = $cryptAlgorithm;
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

