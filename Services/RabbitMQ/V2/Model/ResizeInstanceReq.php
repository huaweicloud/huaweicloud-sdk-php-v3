<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResizeInstanceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResizeInstanceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * newSpecCode  规格变更后的规格ID。
    * newStorageSpace  规格变更后的消息存储空间，单位：GB。注意：磁盘容量仅支持设置为100的整数倍。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'newSpecCode' => 'string',
            'newStorageSpace' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * newSpecCode  规格变更后的规格ID。
    * newStorageSpace  规格变更后的消息存储空间，单位：GB。注意：磁盘容量仅支持设置为100的整数倍。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'newSpecCode' => null,
        'newStorageSpace' => null
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
    * newSpecCode  规格变更后的规格ID。
    * newStorageSpace  规格变更后的消息存储空间，单位：GB。注意：磁盘容量仅支持设置为100的整数倍。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'newSpecCode' => 'new_spec_code',
            'newStorageSpace' => 'new_storage_space'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * newSpecCode  规格变更后的规格ID。
    * newStorageSpace  规格变更后的消息存储空间，单位：GB。注意：磁盘容量仅支持设置为100的整数倍。
    *
    * @var string[]
    */
    protected static $setters = [
            'newSpecCode' => 'setNewSpecCode',
            'newStorageSpace' => 'setNewStorageSpace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * newSpecCode  规格变更后的规格ID。
    * newStorageSpace  规格变更后的消息存储空间，单位：GB。注意：磁盘容量仅支持设置为100的整数倍。
    *
    * @var string[]
    */
    protected static $getters = [
            'newSpecCode' => 'getNewSpecCode',
            'newStorageSpace' => 'getNewStorageSpace'
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
    const NEW_SPEC_CODE_DMS_INSTANCE_RABBITMQ_CLUSTER_C3_4U8G_3 = 'dms.instance.rabbitmq.cluster.c3.4u8g.3';
    const NEW_SPEC_CODE_DMS_INSTANCE_RABBITMQ_CLUSTER_C3_4U8G_5 = 'dms.instance.rabbitmq.cluster.c3.4u8g.5';
    const NEW_SPEC_CODE_DMS_INSTANCE_RABBITMQ_CLUSTER_C3_4U8G_7 = 'dms.instance.rabbitmq.cluster.c3.4u8g.7';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNewSpecCodeAllowableValues()
    {
        return [
            self::NEW_SPEC_CODE_DMS_INSTANCE_RABBITMQ_CLUSTER_C3_4U8G_3,
            self::NEW_SPEC_CODE_DMS_INSTANCE_RABBITMQ_CLUSTER_C3_4U8G_5,
            self::NEW_SPEC_CODE_DMS_INSTANCE_RABBITMQ_CLUSTER_C3_4U8G_7,
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
        $this->container['newSpecCode'] = isset($data['newSpecCode']) ? $data['newSpecCode'] : null;
        $this->container['newStorageSpace'] = isset($data['newStorageSpace']) ? $data['newStorageSpace'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['newSpecCode'] === null) {
            $invalidProperties[] = "'newSpecCode' can't be null";
        }
            $allowedValues = $this->getNewSpecCodeAllowableValues();
                if (!is_null($this->container['newSpecCode']) && !in_array($this->container['newSpecCode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'newSpecCode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['newStorageSpace'] === null) {
            $invalidProperties[] = "'newStorageSpace' can't be null";
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
    * Gets newSpecCode
    *  规格变更后的规格ID。
    *
    * @return string
    */
    public function getNewSpecCode()
    {
        return $this->container['newSpecCode'];
    }

    /**
    * Sets newSpecCode
    *
    * @param string $newSpecCode 规格变更后的规格ID。
    *
    * @return $this
    */
    public function setNewSpecCode($newSpecCode)
    {
        $this->container['newSpecCode'] = $newSpecCode;
        return $this;
    }

    /**
    * Gets newStorageSpace
    *  规格变更后的消息存储空间，单位：GB。注意：磁盘容量仅支持设置为100的整数倍。
    *
    * @return int
    */
    public function getNewStorageSpace()
    {
        return $this->container['newStorageSpace'];
    }

    /**
    * Sets newStorageSpace
    *
    * @param int $newStorageSpace 规格变更后的消息存储空间，单位：GB。注意：磁盘容量仅支持设置为100的整数倍。
    *
    * @return $this
    */
    public function setNewStorageSpace($newStorageSpace)
    {
        $this->container['newStorageSpace'] = $newStorageSpace;
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

