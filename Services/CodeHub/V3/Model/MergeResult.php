<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * closed  已关闭合并请求数
    * mergeRequests  合并请求详情
    * merged  已合并合并请求数数
    * opened  开启中合并请求数
    * total  合并请求总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'closed' => 'double',
            'mergeRequests' => '\HuaweiCloud\SDK\CodeHub\V3\Model\MergeRequestsItem[]',
            'merged' => 'double',
            'opened' => 'double',
            'total' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * closed  已关闭合并请求数
    * mergeRequests  合并请求详情
    * merged  已合并合并请求数数
    * opened  开启中合并请求数
    * total  合并请求总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'closed' => 'double',
        'mergeRequests' => null,
        'merged' => 'double',
        'opened' => 'double',
        'total' => 'double'
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
    * closed  已关闭合并请求数
    * mergeRequests  合并请求详情
    * merged  已合并合并请求数数
    * opened  开启中合并请求数
    * total  合并请求总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'closed' => 'closed',
            'mergeRequests' => 'merge_requests',
            'merged' => 'merged',
            'opened' => 'opened',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * closed  已关闭合并请求数
    * mergeRequests  合并请求详情
    * merged  已合并合并请求数数
    * opened  开启中合并请求数
    * total  合并请求总数
    *
    * @var string[]
    */
    protected static $setters = [
            'closed' => 'setClosed',
            'mergeRequests' => 'setMergeRequests',
            'merged' => 'setMerged',
            'opened' => 'setOpened',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * closed  已关闭合并请求数
    * mergeRequests  合并请求详情
    * merged  已合并合并请求数数
    * opened  开启中合并请求数
    * total  合并请求总数
    *
    * @var string[]
    */
    protected static $getters = [
            'closed' => 'getClosed',
            'mergeRequests' => 'getMergeRequests',
            'merged' => 'getMerged',
            'opened' => 'getOpened',
            'total' => 'getTotal'
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
        $this->container['closed'] = isset($data['closed']) ? $data['closed'] : null;
        $this->container['mergeRequests'] = isset($data['mergeRequests']) ? $data['mergeRequests'] : null;
        $this->container['merged'] = isset($data['merged']) ? $data['merged'] : null;
        $this->container['opened'] = isset($data['opened']) ? $data['opened'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets closed
    *  已关闭合并请求数
    *
    * @return double|null
    */
    public function getClosed()
    {
        return $this->container['closed'];
    }

    /**
    * Sets closed
    *
    * @param double|null $closed 已关闭合并请求数
    *
    * @return $this
    */
    public function setClosed($closed)
    {
        $this->container['closed'] = $closed;
        return $this;
    }

    /**
    * Gets mergeRequests
    *  合并请求详情
    *
    * @return \HuaweiCloud\SDK\CodeHub\V3\Model\MergeRequestsItem[]|null
    */
    public function getMergeRequests()
    {
        return $this->container['mergeRequests'];
    }

    /**
    * Sets mergeRequests
    *
    * @param \HuaweiCloud\SDK\CodeHub\V3\Model\MergeRequestsItem[]|null $mergeRequests 合并请求详情
    *
    * @return $this
    */
    public function setMergeRequests($mergeRequests)
    {
        $this->container['mergeRequests'] = $mergeRequests;
        return $this;
    }

    /**
    * Gets merged
    *  已合并合并请求数数
    *
    * @return double|null
    */
    public function getMerged()
    {
        return $this->container['merged'];
    }

    /**
    * Sets merged
    *
    * @param double|null $merged 已合并合并请求数数
    *
    * @return $this
    */
    public function setMerged($merged)
    {
        $this->container['merged'] = $merged;
        return $this;
    }

    /**
    * Gets opened
    *  开启中合并请求数
    *
    * @return double|null
    */
    public function getOpened()
    {
        return $this->container['opened'];
    }

    /**
    * Sets opened
    *
    * @param double|null $opened 开启中合并请求数
    *
    * @return $this
    */
    public function setOpened($opened)
    {
        $this->container['opened'] = $opened;
        return $this;
    }

    /**
    * Gets total
    *  合并请求总数
    *
    * @return double|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param double|null $total 合并请求总数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

