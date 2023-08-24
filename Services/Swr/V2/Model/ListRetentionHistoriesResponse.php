<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRetentionHistoriesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRetentionHistoriesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * retentionLog  镜像老化日志
    * total  总个数
    * contentRange  contentRange
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'retentionLog' => '\HuaweiCloud\SDK\Swr\V2\Model\RetentionLog[]',
            'total' => 'int',
            'contentRange' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * retentionLog  镜像老化日志
    * total  总个数
    * contentRange  contentRange
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'retentionLog' => null,
        'total' => 'int32',
        'contentRange' => null
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
    * retentionLog  镜像老化日志
    * total  总个数
    * contentRange  contentRange
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'retentionLog' => 'retention_log',
            'total' => 'total',
            'contentRange' => 'Content-Range'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * retentionLog  镜像老化日志
    * total  总个数
    * contentRange  contentRange
    *
    * @var string[]
    */
    protected static $setters = [
            'retentionLog' => 'setRetentionLog',
            'total' => 'setTotal',
            'contentRange' => 'setContentRange'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * retentionLog  镜像老化日志
    * total  总个数
    * contentRange  contentRange
    *
    * @var string[]
    */
    protected static $getters = [
            'retentionLog' => 'getRetentionLog',
            'total' => 'getTotal',
            'contentRange' => 'getContentRange'
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
        $this->container['retentionLog'] = isset($data['retentionLog']) ? $data['retentionLog'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['contentRange'] = isset($data['contentRange']) ? $data['contentRange'] : null;
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
    * Gets retentionLog
    *  镜像老化日志
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\RetentionLog[]|null
    */
    public function getRetentionLog()
    {
        return $this->container['retentionLog'];
    }

    /**
    * Sets retentionLog
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\RetentionLog[]|null $retentionLog 镜像老化日志
    *
    * @return $this
    */
    public function setRetentionLog($retentionLog)
    {
        $this->container['retentionLog'] = $retentionLog;
        return $this;
    }

    /**
    * Gets total
    *  总个数
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总个数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets contentRange
    *  contentRange
    *
    * @return string|null
    */
    public function getContentRange()
    {
        return $this->container['contentRange'];
    }

    /**
    * Sets contentRange
    *
    * @param string|null $contentRange contentRange
    *
    * @return $this
    */
    public function setContentRange($contentRange)
    {
        $this->container['contentRange'] = $contentRange;
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

