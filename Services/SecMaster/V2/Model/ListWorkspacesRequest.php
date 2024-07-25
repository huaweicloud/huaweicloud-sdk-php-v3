<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWorkspacesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWorkspacesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  application/json;charset=UTF-8
    * offset  偏移量 指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，
    * limit  每页显示个数
    * regionId  区域id
    * name  名称查询
    * description  描述查询
    * viewBindId  视图绑定的空间id
    * viewBindName  视图绑定的空间名称
    * createTimeStart  创建时间开始，例如2024-04-26T16:08:09Z+0800
    * createTimeEnd  创建时间结束，例如2024-04-2T16:08:09Z+0800
    * isView  是否查询视图 true or false
    * ids  工作空间id数组，英文逗号分隔
    * normalProjectId  普通项目的项目id
    * enterpriseProjectId  企业项目的项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'offset' => 'float',
            'limit' => 'float',
            'regionId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'viewBindId' => 'string',
            'viewBindName' => 'string',
            'createTimeStart' => 'string',
            'createTimeEnd' => 'string',
            'isView' => 'bool',
            'ids' => 'string',
            'normalProjectId' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  application/json;charset=UTF-8
    * offset  偏移量 指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，
    * limit  每页显示个数
    * regionId  区域id
    * name  名称查询
    * description  描述查询
    * viewBindId  视图绑定的空间id
    * viewBindName  视图绑定的空间名称
    * createTimeStart  创建时间开始，例如2024-04-26T16:08:09Z+0800
    * createTimeEnd  创建时间结束，例如2024-04-2T16:08:09Z+0800
    * isView  是否查询视图 true or false
    * ids  工作空间id数组，英文逗号分隔
    * normalProjectId  普通项目的项目id
    * enterpriseProjectId  企业项目的项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'offset' => null,
        'limit' => null,
        'regionId' => null,
        'name' => null,
        'description' => null,
        'viewBindId' => null,
        'viewBindName' => null,
        'createTimeStart' => null,
        'createTimeEnd' => null,
        'isView' => null,
        'ids' => null,
        'normalProjectId' => null,
        'enterpriseProjectId' => null
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
    * contentType  application/json;charset=UTF-8
    * offset  偏移量 指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，
    * limit  每页显示个数
    * regionId  区域id
    * name  名称查询
    * description  描述查询
    * viewBindId  视图绑定的空间id
    * viewBindName  视图绑定的空间名称
    * createTimeStart  创建时间开始，例如2024-04-26T16:08:09Z+0800
    * createTimeEnd  创建时间结束，例如2024-04-2T16:08:09Z+0800
    * isView  是否查询视图 true or false
    * ids  工作空间id数组，英文逗号分隔
    * normalProjectId  普通项目的项目id
    * enterpriseProjectId  企业项目的项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'content-type',
            'offset' => 'offset',
            'limit' => 'limit',
            'regionId' => 'region_id',
            'name' => 'name',
            'description' => 'description',
            'viewBindId' => 'view_bind_id',
            'viewBindName' => 'view_bind_name',
            'createTimeStart' => 'create_time_start',
            'createTimeEnd' => 'create_time_end',
            'isView' => 'is_view',
            'ids' => 'ids',
            'normalProjectId' => 'normal_project_id',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  application/json;charset=UTF-8
    * offset  偏移量 指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，
    * limit  每页显示个数
    * regionId  区域id
    * name  名称查询
    * description  描述查询
    * viewBindId  视图绑定的空间id
    * viewBindName  视图绑定的空间名称
    * createTimeStart  创建时间开始，例如2024-04-26T16:08:09Z+0800
    * createTimeEnd  创建时间结束，例如2024-04-2T16:08:09Z+0800
    * isView  是否查询视图 true or false
    * ids  工作空间id数组，英文逗号分隔
    * normalProjectId  普通项目的项目id
    * enterpriseProjectId  企业项目的项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'regionId' => 'setRegionId',
            'name' => 'setName',
            'description' => 'setDescription',
            'viewBindId' => 'setViewBindId',
            'viewBindName' => 'setViewBindName',
            'createTimeStart' => 'setCreateTimeStart',
            'createTimeEnd' => 'setCreateTimeEnd',
            'isView' => 'setIsView',
            'ids' => 'setIds',
            'normalProjectId' => 'setNormalProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  application/json;charset=UTF-8
    * offset  偏移量 指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，
    * limit  每页显示个数
    * regionId  区域id
    * name  名称查询
    * description  描述查询
    * viewBindId  视图绑定的空间id
    * viewBindName  视图绑定的空间名称
    * createTimeStart  创建时间开始，例如2024-04-26T16:08:09Z+0800
    * createTimeEnd  创建时间结束，例如2024-04-2T16:08:09Z+0800
    * isView  是否查询视图 true or false
    * ids  工作空间id数组，英文逗号分隔
    * normalProjectId  普通项目的项目id
    * enterpriseProjectId  企业项目的项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'regionId' => 'getRegionId',
            'name' => 'getName',
            'description' => 'getDescription',
            'viewBindId' => 'getViewBindId',
            'viewBindName' => 'getViewBindName',
            'createTimeStart' => 'getCreateTimeStart',
            'createTimeEnd' => 'getCreateTimeEnd',
            'isView' => 'getIsView',
            'ids' => 'getIds',
            'normalProjectId' => 'getNormalProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['viewBindId'] = isset($data['viewBindId']) ? $data['viewBindId'] : null;
        $this->container['viewBindName'] = isset($data['viewBindName']) ? $data['viewBindName'] : null;
        $this->container['createTimeStart'] = isset($data['createTimeStart']) ? $data['createTimeStart'] : null;
        $this->container['createTimeEnd'] = isset($data['createTimeEnd']) ? $data['createTimeEnd'] : null;
        $this->container['isView'] = isset($data['isView']) ? $data['isView'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['normalProjectId'] = isset($data['normalProjectId']) ? $data['normalProjectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
            if ((mb_strlen($this->container['contentType']) > 64)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['contentType']) < 0)) {
                $invalidProperties[] = "invalid value for 'contentType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 999.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['viewBindId']) && (mb_strlen($this->container['viewBindId']) > 36)) {
                $invalidProperties[] = "invalid value for 'viewBindId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['viewBindId']) && (mb_strlen($this->container['viewBindId']) < 0)) {
                $invalidProperties[] = "invalid value for 'viewBindId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['viewBindName']) && (mb_strlen($this->container['viewBindName']) > 64)) {
                $invalidProperties[] = "invalid value for 'viewBindName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['viewBindName']) && (mb_strlen($this->container['viewBindName']) < 0)) {
                $invalidProperties[] = "invalid value for 'viewBindName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTimeStart']) && (mb_strlen($this->container['createTimeStart']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTimeStart', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTimeStart']) && (mb_strlen($this->container['createTimeStart']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTimeStart', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTimeEnd']) && (mb_strlen($this->container['createTimeEnd']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTimeEnd', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTimeEnd']) && (mb_strlen($this->container['createTimeEnd']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTimeEnd', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ids']) && (mb_strlen($this->container['ids']) > 999)) {
                $invalidProperties[] = "invalid value for 'ids', the character length must be smaller than or equal to 999.";
            }
            if (!is_null($this->container['ids']) && (mb_strlen($this->container['ids']) < 0)) {
                $invalidProperties[] = "invalid value for 'ids', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['normalProjectId']) && (mb_strlen($this->container['normalProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'normalProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['normalProjectId']) && (mb_strlen($this->container['normalProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'normalProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets contentType
    *  application/json;charset=UTF-8
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
    * @param string $contentType application/json;charset=UTF-8
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量 指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，
    *
    * @return float
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param float $offset 偏移量 指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，
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
    *  每页显示个数
    *
    * @return float
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param float $limit 每页显示个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets regionId
    *  区域id
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets name
    *  名称查询
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称查询
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述查询
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述查询
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets viewBindId
    *  视图绑定的空间id
    *
    * @return string|null
    */
    public function getViewBindId()
    {
        return $this->container['viewBindId'];
    }

    /**
    * Sets viewBindId
    *
    * @param string|null $viewBindId 视图绑定的空间id
    *
    * @return $this
    */
    public function setViewBindId($viewBindId)
    {
        $this->container['viewBindId'] = $viewBindId;
        return $this;
    }

    /**
    * Gets viewBindName
    *  视图绑定的空间名称
    *
    * @return string|null
    */
    public function getViewBindName()
    {
        return $this->container['viewBindName'];
    }

    /**
    * Sets viewBindName
    *
    * @param string|null $viewBindName 视图绑定的空间名称
    *
    * @return $this
    */
    public function setViewBindName($viewBindName)
    {
        $this->container['viewBindName'] = $viewBindName;
        return $this;
    }

    /**
    * Gets createTimeStart
    *  创建时间开始，例如2024-04-26T16:08:09Z+0800
    *
    * @return string|null
    */
    public function getCreateTimeStart()
    {
        return $this->container['createTimeStart'];
    }

    /**
    * Sets createTimeStart
    *
    * @param string|null $createTimeStart 创建时间开始，例如2024-04-26T16:08:09Z+0800
    *
    * @return $this
    */
    public function setCreateTimeStart($createTimeStart)
    {
        $this->container['createTimeStart'] = $createTimeStart;
        return $this;
    }

    /**
    * Gets createTimeEnd
    *  创建时间结束，例如2024-04-2T16:08:09Z+0800
    *
    * @return string|null
    */
    public function getCreateTimeEnd()
    {
        return $this->container['createTimeEnd'];
    }

    /**
    * Sets createTimeEnd
    *
    * @param string|null $createTimeEnd 创建时间结束，例如2024-04-2T16:08:09Z+0800
    *
    * @return $this
    */
    public function setCreateTimeEnd($createTimeEnd)
    {
        $this->container['createTimeEnd'] = $createTimeEnd;
        return $this;
    }

    /**
    * Gets isView
    *  是否查询视图 true or false
    *
    * @return bool|null
    */
    public function getIsView()
    {
        return $this->container['isView'];
    }

    /**
    * Sets isView
    *
    * @param bool|null $isView 是否查询视图 true or false
    *
    * @return $this
    */
    public function setIsView($isView)
    {
        $this->container['isView'] = $isView;
        return $this;
    }

    /**
    * Gets ids
    *  工作空间id数组，英文逗号分隔
    *
    * @return string|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string|null $ids 工作空间id数组，英文逗号分隔
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets normalProjectId
    *  普通项目的项目id
    *
    * @return string|null
    */
    public function getNormalProjectId()
    {
        return $this->container['normalProjectId'];
    }

    /**
    * Sets normalProjectId
    *
    * @param string|null $normalProjectId 普通项目的项目id
    *
    * @return $this
    */
    public function setNormalProjectId($normalProjectId)
    {
        $this->container['normalProjectId'] = $normalProjectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目的项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目的项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

