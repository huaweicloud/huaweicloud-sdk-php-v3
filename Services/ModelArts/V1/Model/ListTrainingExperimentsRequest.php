<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTrainingExperimentsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTrainingExperimentsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  返回的数据条目数。
    * offset  数据条目偏移量。
    * sortBy  **参数解释**：排序依据字段，例如sort_by=update_time，则表示以条目的更新时间进行排序。 **约束限制**：不涉及。 **取值范围**： - update_time：更新时间。 - name：实验名称。 - create_time：创建时间。 **默认取值**：不涉及。
    * order  排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspaceId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'sortBy' => 'string',
            'order' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  返回的数据条目数。
    * offset  数据条目偏移量。
    * sortBy  **参数解释**：排序依据字段，例如sort_by=update_time，则表示以条目的更新时间进行排序。 **约束限制**：不涉及。 **取值范围**： - update_time：更新时间。 - name：实验名称。 - create_time：创建时间。 **默认取值**：不涉及。
    * order  排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspaceId' => null,
        'limit' => null,
        'offset' => null,
        'sortBy' => null,
        'order' => null
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
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  返回的数据条目数。
    * offset  数据条目偏移量。
    * sortBy  **参数解释**：排序依据字段，例如sort_by=update_time，则表示以条目的更新时间进行排序。 **约束限制**：不涉及。 **取值范围**： - update_time：更新时间。 - name：实验名称。 - create_time：创建时间。 **默认取值**：不涉及。
    * order  排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspaceId' => 'workspace_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'sortBy' => 'sort_by',
            'order' => 'order'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  返回的数据条目数。
    * offset  数据条目偏移量。
    * sortBy  **参数解释**：排序依据字段，例如sort_by=update_time，则表示以条目的更新时间进行排序。 **约束限制**：不涉及。 **取值范围**： - update_time：更新时间。 - name：实验名称。 - create_time：创建时间。 **默认取值**：不涉及。
    * order  排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspaceId' => 'setWorkspaceId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'sortBy' => 'setSortBy',
            'order' => 'setOrder'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspaceId  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    * limit  返回的数据条目数。
    * offset  数据条目偏移量。
    * sortBy  **参数解释**：排序依据字段，例如sort_by=update_time，则表示以条目的更新时间进行排序。 **约束限制**：不涉及。 **取值范围**： - update_time：更新时间。 - name：实验名称。 - create_time：创建时间。 **默认取值**：不涉及。
    * order  排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspaceId' => 'getWorkspaceId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'sortBy' => 'getSortBy',
            'order' => 'getOrder'
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
    const ORDER_DESC = 'desc';
    const ORDER_ASC = 'asc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderAllowableValues()
    {
        return [
            self::ORDER_DESC,
            self::ORDER_ASC,
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
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sortBy'] = isset($data['sortBy']) ? $data['sortBy'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOrderAllowableValues();
                if (!is_null($this->container['order']) && !in_array($this->container['order'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'order', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets workspaceId
    *  工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间ID。[获取方法请参见[查询工作空间列表](ListWorkspace.xml)。](tag:hc)未创建工作空间时默认值为“0”，存在创建并使用的工作空间，以实际取值为准。
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets limit
    *  返回的数据条目数。
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
    * @param int|null $limit 返回的数据条目数。
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
    *  数据条目偏移量。
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
    * @param int|null $offset 数据条目偏移量。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sortBy
    *  **参数解释**：排序依据字段，例如sort_by=update_time，则表示以条目的更新时间进行排序。 **约束限制**：不涉及。 **取值范围**： - update_time：更新时间。 - name：实验名称。 - create_time：创建时间。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getSortBy()
    {
        return $this->container['sortBy'];
    }

    /**
    * Sets sortBy
    *
    * @param string|null $sortBy **参数解释**：排序依据字段，例如sort_by=update_time，则表示以条目的更新时间进行排序。 **约束限制**：不涉及。 **取值范围**： - update_time：更新时间。 - name：实验名称。 - create_time：创建时间。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setSortBy($sortBy)
    {
        $this->container['sortBy'] = $sortBy;
        return $this;
    }

    /**
    * Gets order
    *  排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @return string|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param string|null $order 排序的方式。该字段必须与sort_by同时使用。 缺省值: desc 枚举值： - asc：表示升序排列， - desc：降序排列。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
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

