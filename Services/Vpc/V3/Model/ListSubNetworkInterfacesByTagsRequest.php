<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubNetworkInterfacesByTagsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubNetworkInterfacesByTagsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  **参数解释**： 项目ID。[获取方式请参见[获取项目ID](vpc_api_0011.xml)。](tag:hc,hk,hws,hws_hk,hws_test,hws_eu,ocb,ctc,fcs_vm,g42,hk_g42,hws_ocb,hk_vdf) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询记录数。 **约束限制**： 不涉及。 **取值范围**： 1-1000 **默认取值**： 1000
    * offset  **参数解释**： 索引位置，从第一条数据偏移offset条数据后开始查询。 **约束限制**： 必须为数字，不能为负数。 **取值范围**： 不涉及。 **默认取值**： 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'limit' => 'string',
            'offset' => 'int',
            'body' => '\HuaweiCloud\SDK\Vpc\V3\Model\ListSubNetworkInterfacesByTagsRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释**： 项目ID。[获取方式请参见[获取项目ID](vpc_api_0011.xml)。](tag:hc,hk,hws,hws_hk,hws_test,hws_eu,ocb,ctc,fcs_vm,g42,hk_g42,hws_ocb,hk_vdf) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询记录数。 **约束限制**： 不涉及。 **取值范围**： 1-1000 **默认取值**： 1000
    * offset  **参数解释**： 索引位置，从第一条数据偏移offset条数据后开始查询。 **约束限制**： 必须为数字，不能为负数。 **取值范围**： 不涉及。 **默认取值**： 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'limit' => null,
        'offset' => 'int32',
        'body' => null
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
    * projectId  **参数解释**： 项目ID。[获取方式请参见[获取项目ID](vpc_api_0011.xml)。](tag:hc,hk,hws,hws_hk,hws_test,hws_eu,ocb,ctc,fcs_vm,g42,hk_g42,hws_ocb,hk_vdf) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询记录数。 **约束限制**： 不涉及。 **取值范围**： 1-1000 **默认取值**： 1000
    * offset  **参数解释**： 索引位置，从第一条数据偏移offset条数据后开始查询。 **约束限制**： 必须为数字，不能为负数。 **取值范围**： 不涉及。 **默认取值**： 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释**： 项目ID。[获取方式请参见[获取项目ID](vpc_api_0011.xml)。](tag:hc,hk,hws,hws_hk,hws_test,hws_eu,ocb,ctc,fcs_vm,g42,hk_g42,hws_ocb,hk_vdf) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询记录数。 **约束限制**： 不涉及。 **取值范围**： 1-1000 **默认取值**： 1000
    * offset  **参数解释**： 索引位置，从第一条数据偏移offset条数据后开始查询。 **约束限制**： 必须为数字，不能为负数。 **取值范围**： 不涉及。 **默认取值**： 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释**： 项目ID。[获取方式请参见[获取项目ID](vpc_api_0011.xml)。](tag:hc,hk,hws,hws_hk,hws_test,hws_eu,ocb,ctc,fcs_vm,g42,hk_g42,hws_ocb,hk_vdf) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * limit  **参数解释**： 查询记录数。 **约束限制**： 不涉及。 **取值范围**： 1-1000 **默认取值**： 1000
    * offset  **参数解释**： 索引位置，从第一条数据偏移offset条数据后开始查询。 **约束限制**： 必须为数字，不能为负数。 **取值范围**： 不涉及。 **默认取值**： 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'body' => 'getBody'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
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
    * Gets projectId
    *  **参数解释**： 项目ID。[获取方式请参见[获取项目ID](vpc_api_0011.xml)。](tag:hc,hk,hws,hws_hk,hws_test,hws_eu,ocb,ctc,fcs_vm,g42,hk_g42,hws_ocb,hk_vdf) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释**： 项目ID。[获取方式请参见[获取项目ID](vpc_api_0011.xml)。](tag:hc,hk,hws,hws_hk,hws_test,hws_eu,ocb,ctc,fcs_vm,g42,hk_g42,hws_ocb,hk_vdf) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 查询记录数。 **约束限制**： 不涉及。 **取值范围**： 1-1000 **默认取值**： 1000
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit **参数解释**： 查询记录数。 **约束限制**： 不涉及。 **取值范围**： 1-1000 **默认取值**： 1000
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
    *  **参数解释**： 索引位置，从第一条数据偏移offset条数据后开始查询。 **约束限制**： 必须为数字，不能为负数。 **取值范围**： 不涉及。 **默认取值**： 默认为0（偏移0条数据，表示从第一条数据开始查询）。
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
    * @param int|null $offset **参数解释**： 索引位置，从第一条数据偏移offset条数据后开始查询。 **约束限制**： 必须为数字，不能为负数。 **取值范围**： 不涉及。 **默认取值**： 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\ListSubNetworkInterfacesByTagsRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\ListSubNetworkInterfacesByTagsRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

