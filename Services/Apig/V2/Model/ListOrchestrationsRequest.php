<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListOrchestrationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListOrchestrationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * orchestrationName  编排规则名称。
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。当前仅支持orchestration_name。
    * orchestrationId  编排规则编号。  支持指定多个编号作为查询条件，多个参数之间使用“,”隔开，支持的查询参数个数与api允许绑定的参数规则上限保持一致，具体请参考产品介绍的“配额说明”章节。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'orchestrationName' => 'string',
            'preciseSearch' => 'string',
            'orchestrationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * orchestrationName  编排规则名称。
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。当前仅支持orchestration_name。
    * orchestrationId  编排规则编号。  支持指定多个编号作为查询条件，多个参数之间使用“,”隔开，支持的查询参数个数与api允许绑定的参数规则上限保持一致，具体请参考产品介绍的“配额说明”章节。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'offset' => 'int64',
        'limit' => 'int32',
        'orchestrationName' => null,
        'preciseSearch' => null,
        'orchestrationId' => null
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
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * orchestrationName  编排规则名称。
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。当前仅支持orchestration_name。
    * orchestrationId  编排规则编号。  支持指定多个编号作为查询条件，多个参数之间使用“,”隔开，支持的查询参数个数与api允许绑定的参数规则上限保持一致，具体请参考产品介绍的“配额说明”章节。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'orchestrationName' => 'orchestration_name',
            'preciseSearch' => 'precise_search',
            'orchestrationId' => 'orchestration_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * orchestrationName  编排规则名称。
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。当前仅支持orchestration_name。
    * orchestrationId  编排规则编号。  支持指定多个编号作为查询条件，多个参数之间使用“,”隔开，支持的查询参数个数与api允许绑定的参数规则上限保持一致，具体请参考产品介绍的“配额说明”章节。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'orchestrationName' => 'setOrchestrationName',
            'preciseSearch' => 'setPreciseSearch',
            'orchestrationId' => 'setOrchestrationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，在API网关控制台的“实例信息”中获取。
    * offset  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    * limit  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    * orchestrationName  编排规则名称。
    * preciseSearch  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。当前仅支持orchestration_name。
    * orchestrationId  编排规则编号。  支持指定多个编号作为查询条件，多个参数之间使用“,”隔开，支持的查询参数个数与api允许绑定的参数规则上限保持一致，具体请参考产品介绍的“配额说明”章节。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'orchestrationName' => 'getOrchestrationName',
            'preciseSearch' => 'getPreciseSearch',
            'orchestrationId' => 'getOrchestrationId'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['orchestrationName'] = isset($data['orchestrationName']) ? $data['orchestrationName'] : null;
        $this->container['preciseSearch'] = isset($data['preciseSearch']) ? $data['preciseSearch'] : null;
        $this->container['orchestrationId'] = isset($data['orchestrationId']) ? $data['orchestrationId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets instanceId
    *  实例ID，在API网关控制台的“实例信息”中获取。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID，在API网关控制台的“实例信息”中获取。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，表示从此偏移量开始查询，偏移量小于0时，自动转换为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条目数量，条目数量小于等于0时，自动转换为20，条目数量大于500时，自动转换为500
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets orchestrationName
    *  编排规则名称。
    *
    * @return string|null
    */
    public function getOrchestrationName()
    {
        return $this->container['orchestrationName'];
    }

    /**
    * Sets orchestrationName
    *
    * @param string|null $orchestrationName 编排规则名称。
    *
    * @return $this
    */
    public function setOrchestrationName($orchestrationName)
    {
        $this->container['orchestrationName'] = $orchestrationName;
        return $this;
    }

    /**
    * Gets preciseSearch
    *  指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。当前仅支持orchestration_name。
    *
    * @return string|null
    */
    public function getPreciseSearch()
    {
        return $this->container['preciseSearch'];
    }

    /**
    * Sets preciseSearch
    *
    * @param string|null $preciseSearch 指定需要精确匹配查找的参数名称，多个参数需要支持精确匹配时参数之间使用“,”隔开。当前仅支持orchestration_name。
    *
    * @return $this
    */
    public function setPreciseSearch($preciseSearch)
    {
        $this->container['preciseSearch'] = $preciseSearch;
        return $this;
    }

    /**
    * Gets orchestrationId
    *  编排规则编号。  支持指定多个编号作为查询条件，多个参数之间使用“,”隔开，支持的查询参数个数与api允许绑定的参数规则上限保持一致，具体请参考产品介绍的“配额说明”章节。
    *
    * @return string|null
    */
    public function getOrchestrationId()
    {
        return $this->container['orchestrationId'];
    }

    /**
    * Sets orchestrationId
    *
    * @param string|null $orchestrationId 编排规则编号。  支持指定多个编号作为查询条件，多个参数之间使用“,”隔开，支持的查询参数个数与api允许绑定的参数规则上限保持一致，具体请参考产品介绍的“配额说明”章节。
    *
    * @return $this
    */
    public function setOrchestrationId($orchestrationId)
    {
        $this->container['orchestrationId'] = $orchestrationId;
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

