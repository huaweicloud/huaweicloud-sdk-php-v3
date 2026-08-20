<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SnapshotIssueRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SnapshotIssueRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ids  快照的ID数组。可以通过查询工作项快照列表接口获取，响应消息体中的id字段的值就是工作项快照ID。
    * simpleResult  是否返回工作项简要信息。 当值为false时ids中仅支持5个快照ID；值为true时，ids最多支持50个快照ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ids' => 'string[]',
            'simpleResult' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ids  快照的ID数组。可以通过查询工作项快照列表接口获取，响应消息体中的id字段的值就是工作项快照ID。
    * simpleResult  是否返回工作项简要信息。 当值为false时ids中仅支持5个快照ID；值为true时，ids最多支持50个快照ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ids' => null,
        'simpleResult' => null
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
    * ids  快照的ID数组。可以通过查询工作项快照列表接口获取，响应消息体中的id字段的值就是工作项快照ID。
    * simpleResult  是否返回工作项简要信息。 当值为false时ids中仅支持5个快照ID；值为true时，ids最多支持50个快照ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ids' => 'ids',
            'simpleResult' => 'simple_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ids  快照的ID数组。可以通过查询工作项快照列表接口获取，响应消息体中的id字段的值就是工作项快照ID。
    * simpleResult  是否返回工作项简要信息。 当值为false时ids中仅支持5个快照ID；值为true时，ids最多支持50个快照ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'ids' => 'setIds',
            'simpleResult' => 'setSimpleResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ids  快照的ID数组。可以通过查询工作项快照列表接口获取，响应消息体中的id字段的值就是工作项快照ID。
    * simpleResult  是否返回工作项简要信息。 当值为false时ids中仅支持5个快照ID；值为true时，ids最多支持50个快照ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'ids' => 'getIds',
            'simpleResult' => 'getSimpleResult'
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
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['simpleResult'] = isset($data['simpleResult']) ? $data['simpleResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ids'] === null) {
            $invalidProperties[] = "'ids' can't be null";
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
    * Gets ids
    *  快照的ID数组。可以通过查询工作项快照列表接口获取，响应消息体中的id字段的值就是工作项快照ID。
    *
    * @return string[]
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string[] $ids 快照的ID数组。可以通过查询工作项快照列表接口获取，响应消息体中的id字段的值就是工作项快照ID。
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets simpleResult
    *  是否返回工作项简要信息。 当值为false时ids中仅支持5个快照ID；值为true时，ids最多支持50个快照ID。
    *
    * @return bool|null
    */
    public function getSimpleResult()
    {
        return $this->container['simpleResult'];
    }

    /**
    * Sets simpleResult
    *
    * @param bool|null $simpleResult 是否返回工作项简要信息。 当值为false时ids中仅支持5个快照ID；值为true时，ids最多支持50个快照ID。
    *
    * @return $this
    */
    public function setSimpleResult($simpleResult)
    {
        $this->container['simpleResult'] = $simpleResult;
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

