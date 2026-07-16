<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInferDeploymentsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInferDeploymentsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * status  **参数解释：** 当取值为all时查询包含指定天数内已删除的部署，与delete_after同时使用；当取值为空或非all时进查询未删除的部署。 **约束限制：** 不涉及。 **取值范围：** - all：查询包含已删除。 **默认取值：** 空。
    * sortDir  **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    * deleteAfter  **参数解释：** 表示查询包含指定天数内已删除的部署，与status同时使用，仅当status取值为all时生效。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 7
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceId' => 'string',
            'sortKey' => 'string',
            'status' => 'string',
            'sortDir' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'contentType' => 'string',
            'deleteAfter' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * status  **参数解释：** 当取值为all时查询包含指定天数内已删除的部署，与delete_after同时使用；当取值为空或非all时进查询未删除的部署。 **约束限制：** 不涉及。 **取值范围：** - all：查询包含已删除。 **默认取值：** 空。
    * sortDir  **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    * deleteAfter  **参数解释：** 表示查询包含指定天数内已删除的部署，与status同时使用，仅当status取值为all时生效。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 7
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceId' => null,
        'sortKey' => null,
        'status' => null,
        'sortDir' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'contentType' => null,
        'deleteAfter' => 'int32'
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
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * status  **参数解释：** 当取值为all时查询包含指定天数内已删除的部署，与delete_after同时使用；当取值为空或非all时进查询未删除的部署。 **约束限制：** 不涉及。 **取值范围：** - all：查询包含已删除。 **默认取值：** 空。
    * sortDir  **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    * deleteAfter  **参数解释：** 表示查询包含指定天数内已删除的部署，与status同时使用，仅当status取值为all时生效。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 7
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceId' => 'service_id',
            'sortKey' => 'sort_key',
            'status' => 'status',
            'sortDir' => 'sort_dir',
            'limit' => 'limit',
            'offset' => 'offset',
            'contentType' => 'Content-Type',
            'deleteAfter' => 'delete_after'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * status  **参数解释：** 当取值为all时查询包含指定天数内已删除的部署，与delete_after同时使用；当取值为空或非all时进查询未删除的部署。 **约束限制：** 不涉及。 **取值范围：** - all：查询包含已删除。 **默认取值：** 空。
    * sortDir  **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    * deleteAfter  **参数解释：** 表示查询包含指定天数内已删除的部署，与status同时使用，仅当status取值为all时生效。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 7
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceId' => 'setServiceId',
            'sortKey' => 'setSortKey',
            'status' => 'setStatus',
            'sortDir' => 'setSortDir',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'contentType' => 'setContentType',
            'deleteAfter' => 'setDeleteAfter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    * sortKey  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    * status  **参数解释：** 当取值为all时查询包含指定天数内已删除的部署，与delete_after同时使用；当取值为空或非all时进查询未删除的部署。 **约束限制：** 不涉及。 **取值范围：** - all：查询包含已删除。 **默认取值：** 空。
    * sortDir  **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    * limit  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    * offset  **参数解释：** 分页列表查询的偏移量。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    * contentType  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    * deleteAfter  **参数解释：** 表示查询包含指定天数内已删除的部署，与status同时使用，仅当status取值为all时生效。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 7
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceId' => 'getServiceId',
            'sortKey' => 'getSortKey',
            'status' => 'getStatus',
            'sortDir' => 'getSortDir',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'contentType' => 'getContentType',
            'deleteAfter' => 'getDeleteAfter'
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['deleteAfter'] = isset($data['deleteAfter']) ? $data['deleteAfter'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serviceId'] === null) {
            $invalidProperties[] = "'serviceId' can't be null";
        }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
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
    * Gets serviceId
    *  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string $serviceId **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** 不涉及。 **取值范围：** 服务ID。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释：** 排序字段，多个字段以\",\"分隔，支持create_at, update_at，默认值update_at。 **约束限制：** 不涉及。 **取值范围：** - create_at：按创建时间排序。 - update_at：按更新时间排序。 **默认取值：** update_at。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 当取值为all时查询包含指定天数内已删除的部署，与delete_after同时使用；当取值为空或非all时进查询未删除的部署。 **约束限制：** 不涉及。 **取值范围：** - all：查询包含已删除。 **默认取值：** 空。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释：** 当取值为all时查询包含指定天数内已删除的部署，与delete_after同时使用；当取值为空或非all时进查询未删除的部署。 **约束限制：** 不涉及。 **取值范围：** - all：查询包含已删除。 **默认取值：** 空。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sortDir
    *  **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir **参数解释：** 排序方式 **约束限制：** 不涉及。 **取值范围：** - ASC: 递增排序。 - DESC: 递减排序。 **默认取值：** DESC。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
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
    * @param int|null $limit **参数解释：** 指定返回的最大条目数。 **约束限制：** 不涉及。 **取值范围：** [1,500] **默认取值：** 10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 分页列表查询的偏移量。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
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
    * @param int|null $offset **参数解释：** 分页列表查询的偏移量。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets contentType
    *  **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 消息体的类型（格式）。 **约束限制：** 不涉及。 **取值范围：** - application/json。 - application/json;charset=utf-8。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets deleteAfter
    *  **参数解释：** 表示查询包含指定天数内已删除的部署，与status同时使用，仅当status取值为all时生效。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 7
    *
    * @return int|null
    */
    public function getDeleteAfter()
    {
        return $this->container['deleteAfter'];
    }

    /**
    * Sets deleteAfter
    *
    * @param int|null $deleteAfter **参数解释：** 表示查询包含指定天数内已删除的部署，与status同时使用，仅当status取值为all时生效。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 7
    *
    * @return $this
    */
    public function setDeleteAfter($deleteAfter)
    {
        $this->container['deleteAfter'] = $deleteAfter;
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

