<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResultValueExecuteTaskVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResultValueExecuteTaskVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  起始记录数 大于 实际总条数时， 值为0， 分页请求才有此值
    * value  value
    * reason  业务失败的提示内容
    * pageSize  每页展示条数
    * pageNo  页码
    * hasMore  是否有更多
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'value' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteTaskVo',
            'reason' => 'string',
            'pageSize' => 'int',
            'pageNo' => 'int',
            'hasMore' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  起始记录数 大于 实际总条数时， 值为0， 分页请求才有此值
    * value  value
    * reason  业务失败的提示内容
    * pageSize  每页展示条数
    * pageNo  页码
    * hasMore  是否有更多
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => 'int32',
        'value' => null,
        'reason' => null,
        'pageSize' => 'int32',
        'pageNo' => 'int32',
        'hasMore' => null
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
    * total  起始记录数 大于 实际总条数时， 值为0， 分页请求才有此值
    * value  value
    * reason  业务失败的提示内容
    * pageSize  每页展示条数
    * pageNo  页码
    * hasMore  是否有更多
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'value' => 'value',
            'reason' => 'reason',
            'pageSize' => 'page_size',
            'pageNo' => 'page_no',
            'hasMore' => 'has_more'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  起始记录数 大于 实际总条数时， 值为0， 分页请求才有此值
    * value  value
    * reason  业务失败的提示内容
    * pageSize  每页展示条数
    * pageNo  页码
    * hasMore  是否有更多
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'value' => 'setValue',
            'reason' => 'setReason',
            'pageSize' => 'setPageSize',
            'pageNo' => 'setPageNo',
            'hasMore' => 'setHasMore'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  起始记录数 大于 实际总条数时， 值为0， 分页请求才有此值
    * value  value
    * reason  业务失败的提示内容
    * pageSize  每页展示条数
    * pageNo  页码
    * hasMore  是否有更多
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'value' => 'getValue',
            'reason' => 'getReason',
            'pageSize' => 'getPageSize',
            'pageNo' => 'getPageNo',
            'hasMore' => 'getHasMore'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['hasMore'] = isset($data['hasMore']) ? $data['hasMore'] : null;
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
    * Gets total
    *  起始记录数 大于 实际总条数时， 值为0， 分页请求才有此值
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
    * @param int|null $total 起始记录数 大于 实际总条数时， 值为0， 分页请求才有此值
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets value
    *  value
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteTaskVo|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ExecuteTaskVo|null $value value
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets reason
    *  业务失败的提示内容
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 业务失败的提示内容
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页展示条数
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页展示条数
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets pageNo
    *  页码
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo 页码
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets hasMore
    *  是否有更多
    *
    * @return bool|null
    */
    public function getHasMore()
    {
        return $this->container['hasMore'];
    }

    /**
    * Sets hasMore
    *
    * @param bool|null $hasMore 是否有更多
    *
    * @return $this
    */
    public function setHasMore($hasMore)
    {
        $this->container['hasMore'] = $hasMore;
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

