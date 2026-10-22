<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeleteCustomLlmResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeleteCustomLlmResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deleted  已删除的自定义大模型ID列表
    * failed  删除失败的自定义大模型列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deleted' => 'string[]',
            'failed' => '\HuaweiCloud\SDK\Waf\V1\Model\FailedLlm[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deleted  已删除的自定义大模型ID列表
    * failed  删除失败的自定义大模型列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deleted' => null,
        'failed' => null
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
    * deleted  已删除的自定义大模型ID列表
    * failed  删除失败的自定义大模型列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deleted' => 'deleted',
            'failed' => 'failed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deleted  已删除的自定义大模型ID列表
    * failed  删除失败的自定义大模型列表
    *
    * @var string[]
    */
    protected static $setters = [
            'deleted' => 'setDeleted',
            'failed' => 'setFailed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deleted  已删除的自定义大模型ID列表
    * failed  删除失败的自定义大模型列表
    *
    * @var string[]
    */
    protected static $getters = [
            'deleted' => 'getDeleted',
            'failed' => 'getFailed'
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
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
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
    * Gets deleted
    *  已删除的自定义大模型ID列表
    *
    * @return string[]|null
    */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
    * Sets deleted
    *
    * @param string[]|null $deleted 已删除的自定义大模型ID列表
    *
    * @return $this
    */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;
        return $this;
    }

    /**
    * Gets failed
    *  删除失败的自定义大模型列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\FailedLlm[]|null
    */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
    * Sets failed
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\FailedLlm[]|null $failed 删除失败的自定义大模型列表
    *
    * @return $this
    */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;
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

