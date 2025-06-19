<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSparkJobStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSparkJobStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * batchId  参数解释:  批处理作业的ID 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  匹配正则表达式'^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$'的字符串 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'batchId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * batchId  参数解释:  批处理作业的ID 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  匹配正则表达式'^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$'的字符串 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'batchId' => null
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
    * batchId  参数解释:  批处理作业的ID 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  匹配正则表达式'^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$'的字符串 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'batchId' => 'batch_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * batchId  参数解释:  批处理作业的ID 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  匹配正则表达式'^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$'的字符串 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $setters = [
            'batchId' => 'setBatchId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * batchId  参数解释:  批处理作业的ID 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  匹配正则表达式'^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$'的字符串 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $getters = [
            'batchId' => 'getBatchId'
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
        $this->container['batchId'] = isset($data['batchId']) ? $data['batchId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['batchId'] === null) {
            $invalidProperties[] = "'batchId' can't be null";
        }
            if (!preg_match("/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/", $this->container['batchId'])) {
                $invalidProperties[] = "invalid value for 'batchId', must be conform to the pattern /^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/.";
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
    * Gets batchId
    *  参数解释:  批处理作业的ID 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  匹配正则表达式'^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$'的字符串 取值范围: 无 默认取值: 无
    *
    * @return string
    */
    public function getBatchId()
    {
        return $this->container['batchId'];
    }

    /**
    * Sets batchId
    *
    * @param string $batchId 参数解释:  批处理作业的ID 示例: 0a324461-d9d9-45da-a52a-3b3c7a3d809e 约束限制:  匹配正则表达式'^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$'的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setBatchId($batchId)
    {
        $this->container['batchId'] = $batchId;
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

