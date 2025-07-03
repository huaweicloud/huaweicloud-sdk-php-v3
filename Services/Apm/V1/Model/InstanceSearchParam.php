<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceSearchParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceSearchParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * envId  环境id。
    * page  当前页码。
    * pageSize  每页数据容量。
    * keyword  关键字。
    * status  实例状态。
    * returnCount  是否返回计数结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'envId' => 'int',
            'page' => 'int',
            'pageSize' => 'int',
            'keyword' => 'string',
            'status' => 'int',
            'returnCount' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * envId  环境id。
    * page  当前页码。
    * pageSize  每页数据容量。
    * keyword  关键字。
    * status  实例状态。
    * returnCount  是否返回计数结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'envId' => 'int64',
        'page' => 'int32',
        'pageSize' => 'int32',
        'keyword' => null,
        'status' => 'int32',
        'returnCount' => null
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
    * envId  环境id。
    * page  当前页码。
    * pageSize  每页数据容量。
    * keyword  关键字。
    * status  实例状态。
    * returnCount  是否返回计数结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'envId' => 'env_id',
            'page' => 'page',
            'pageSize' => 'page_size',
            'keyword' => 'keyword',
            'status' => 'status',
            'returnCount' => 'return_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * envId  环境id。
    * page  当前页码。
    * pageSize  每页数据容量。
    * keyword  关键字。
    * status  实例状态。
    * returnCount  是否返回计数结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'envId' => 'setEnvId',
            'page' => 'setPage',
            'pageSize' => 'setPageSize',
            'keyword' => 'setKeyword',
            'status' => 'setStatus',
            'returnCount' => 'setReturnCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * envId  环境id。
    * page  当前页码。
    * pageSize  每页数据容量。
    * keyword  关键字。
    * status  实例状态。
    * returnCount  是否返回计数结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'envId' => 'getEnvId',
            'page' => 'getPage',
            'pageSize' => 'getPageSize',
            'keyword' => 'getKeyword',
            'status' => 'getStatus',
            'returnCount' => 'getReturnCount'
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
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['returnCount'] = isset($data['returnCount']) ? $data['returnCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['envId'] === null) {
            $invalidProperties[] = "'envId' can't be null";
        }
        if ($this->container['page'] === null) {
            $invalidProperties[] = "'page' can't be null";
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
    * Gets envId
    *  环境id。
    *
    * @return int
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int $envId 环境id。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets page
    *  当前页码。
    *
    * @return int
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int $page 当前页码。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页数据容量。
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
    * @param int|null $pageSize 每页数据容量。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets keyword
    *  关键字。
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 关键字。
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets status
    *  实例状态。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 实例状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets returnCount
    *  是否返回计数结果。
    *
    * @return bool|null
    */
    public function getReturnCount()
    {
        return $this->container['returnCount'];
    }

    /**
    * Sets returnCount
    *
    * @param bool|null $returnCount 是否返回计数结果。
    *
    * @return $this
    */
    public function setReturnCount($returnCount)
    {
        $this->container['returnCount'] = $returnCount;
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

