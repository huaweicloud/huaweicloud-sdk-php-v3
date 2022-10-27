<?php

namespace HuaweiCloud\SDK\Eps\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResqEpResouce implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResqEpResouce';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projects  项目ID列表。resource_types中包含region级别服务时为必选项。
    * resourceTypes  资源类型列表， 此参数为可输入的值（区分大小写）。例如：ecs,scaling_group, images, disk, vpcs,security-groups, shared_bandwidth, eip, cdn等。
    * offset  索引位置， 从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
    * limit  查询记录数，不传默认为1000，limit最多为1000, 最小值为1。
    * matches  搜索字段，key为要匹配的字段，固定为resource_name，value为匹配的值，不传则表示无匹配条件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projects' => 'string[]',
            'resourceTypes' => 'string[]',
            'offset' => 'int',
            'limit' => 'int',
            'matches' => '\HuaweiCloud\SDK\Eps\V1\Model\Match[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projects  项目ID列表。resource_types中包含region级别服务时为必选项。
    * resourceTypes  资源类型列表， 此参数为可输入的值（区分大小写）。例如：ecs,scaling_group, images, disk, vpcs,security-groups, shared_bandwidth, eip, cdn等。
    * offset  索引位置， 从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
    * limit  查询记录数，不传默认为1000，limit最多为1000, 最小值为1。
    * matches  搜索字段，key为要匹配的字段，固定为resource_name，value为匹配的值，不传则表示无匹配条件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projects' => null,
        'resourceTypes' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'matches' => null
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
    * projects  项目ID列表。resource_types中包含region级别服务时为必选项。
    * resourceTypes  资源类型列表， 此参数为可输入的值（区分大小写）。例如：ecs,scaling_group, images, disk, vpcs,security-groups, shared_bandwidth, eip, cdn等。
    * offset  索引位置， 从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
    * limit  查询记录数，不传默认为1000，limit最多为1000, 最小值为1。
    * matches  搜索字段，key为要匹配的字段，固定为resource_name，value为匹配的值，不传则表示无匹配条件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projects' => 'projects',
            'resourceTypes' => 'resource_types',
            'offset' => 'offset',
            'limit' => 'limit',
            'matches' => 'matches'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projects  项目ID列表。resource_types中包含region级别服务时为必选项。
    * resourceTypes  资源类型列表， 此参数为可输入的值（区分大小写）。例如：ecs,scaling_group, images, disk, vpcs,security-groups, shared_bandwidth, eip, cdn等。
    * offset  索引位置， 从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
    * limit  查询记录数，不传默认为1000，limit最多为1000, 最小值为1。
    * matches  搜索字段，key为要匹配的字段，固定为resource_name，value为匹配的值，不传则表示无匹配条件。
    *
    * @var string[]
    */
    protected static $setters = [
            'projects' => 'setProjects',
            'resourceTypes' => 'setResourceTypes',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'matches' => 'setMatches'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projects  项目ID列表。resource_types中包含region级别服务时为必选项。
    * resourceTypes  资源类型列表， 此参数为可输入的值（区分大小写）。例如：ecs,scaling_group, images, disk, vpcs,security-groups, shared_bandwidth, eip, cdn等。
    * offset  索引位置， 从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
    * limit  查询记录数，不传默认为1000，limit最多为1000, 最小值为1。
    * matches  搜索字段，key为要匹配的字段，固定为resource_name，value为匹配的值，不传则表示无匹配条件。
    *
    * @var string[]
    */
    protected static $getters = [
            'projects' => 'getProjects',
            'resourceTypes' => 'getResourceTypes',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'matches' => 'getMatches'
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
        $this->container['projects'] = isset($data['projects']) ? $data['projects'] : null;
        $this->container['resourceTypes'] = isset($data['resourceTypes']) ? $data['resourceTypes'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['matches'] = isset($data['matches']) ? $data['matches'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceTypes'] === null) {
            $invalidProperties[] = "'resourceTypes' can't be null";
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
    * Gets projects
    *  项目ID列表。resource_types中包含region级别服务时为必选项。
    *
    * @return string[]|null
    */
    public function getProjects()
    {
        return $this->container['projects'];
    }

    /**
    * Sets projects
    *
    * @param string[]|null $projects 项目ID列表。resource_types中包含region级别服务时为必选项。
    *
    * @return $this
    */
    public function setProjects($projects)
    {
        $this->container['projects'] = $projects;
        return $this;
    }

    /**
    * Gets resourceTypes
    *  资源类型列表， 此参数为可输入的值（区分大小写）。例如：ecs,scaling_group, images, disk, vpcs,security-groups, shared_bandwidth, eip, cdn等。
    *
    * @return string[]
    */
    public function getResourceTypes()
    {
        return $this->container['resourceTypes'];
    }

    /**
    * Sets resourceTypes
    *
    * @param string[] $resourceTypes 资源类型列表， 此参数为可输入的值（区分大小写）。例如：ecs,scaling_group, images, disk, vpcs,security-groups, shared_bandwidth, eip, cdn等。
    *
    * @return $this
    */
    public function setResourceTypes($resourceTypes)
    {
        $this->container['resourceTypes'] = $resourceTypes;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置， 从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
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
    * @param int|null $offset 索引位置， 从offset指定的下一条数据开始查询，必须为数字，不能为负数，默认为0。
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
    *  查询记录数，不传默认为1000，limit最多为1000, 最小值为1。
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
    * @param int|null $limit 查询记录数，不传默认为1000，limit最多为1000, 最小值为1。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets matches
    *  搜索字段，key为要匹配的字段，固定为resource_name，value为匹配的值，不传则表示无匹配条件。
    *
    * @return \HuaweiCloud\SDK\Eps\V1\Model\Match[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\Eps\V1\Model\Match[]|null $matches 搜索字段，key为要匹配的字段，固定为resource_name，value为匹配的值，不传则表示无匹配条件。
    *
    * @return $this
    */
    public function setMatches($matches)
    {
        $this->container['matches'] = $matches;
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

