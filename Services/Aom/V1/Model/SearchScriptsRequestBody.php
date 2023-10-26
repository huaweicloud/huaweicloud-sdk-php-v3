<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchScriptsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchScriptsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  查询接收的参数，版本管理时，name为脚本名称（版本管理查询时name不能为空），脚本管理页面查询时，name为接收模糊查询的参数，name是null，表示查询所有默认脚本。
    * isDefault  查询规则，如果是类型为default，则为模糊查询和脚本管理主页展示，no_default为版本管理。
    * createBy  创建人，默认按照创建人搜索脚本。
    * scriptId  版本管理时需要查询的脚本id。
    * pageNum  page_num为正整数。
    * pageSize  每页显示的条数，默认值是10。
    * projectId  项目id。
    * orderByColumn  需要排序的字段(默认为更新时间),支持字段有name,create_time和update_time。
    * sortOrder  排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    * enterpriseProjectId  企业项目id，根据企业项目id搜索。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'isDefault' => 'string',
            'createBy' => 'string',
            'scriptId' => 'string',
            'pageNum' => 'int',
            'pageSize' => 'int',
            'projectId' => 'string',
            'orderByColumn' => 'string',
            'sortOrder' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  查询接收的参数，版本管理时，name为脚本名称（版本管理查询时name不能为空），脚本管理页面查询时，name为接收模糊查询的参数，name是null，表示查询所有默认脚本。
    * isDefault  查询规则，如果是类型为default，则为模糊查询和脚本管理主页展示，no_default为版本管理。
    * createBy  创建人，默认按照创建人搜索脚本。
    * scriptId  版本管理时需要查询的脚本id。
    * pageNum  page_num为正整数。
    * pageSize  每页显示的条数，默认值是10。
    * projectId  项目id。
    * orderByColumn  需要排序的字段(默认为更新时间),支持字段有name,create_time和update_time。
    * sortOrder  排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    * enterpriseProjectId  企业项目id，根据企业项目id搜索。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'isDefault' => null,
        'createBy' => null,
        'scriptId' => null,
        'pageNum' => 'int32',
        'pageSize' => 'int32',
        'projectId' => null,
        'orderByColumn' => null,
        'sortOrder' => null,
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
    * name  查询接收的参数，版本管理时，name为脚本名称（版本管理查询时name不能为空），脚本管理页面查询时，name为接收模糊查询的参数，name是null，表示查询所有默认脚本。
    * isDefault  查询规则，如果是类型为default，则为模糊查询和脚本管理主页展示，no_default为版本管理。
    * createBy  创建人，默认按照创建人搜索脚本。
    * scriptId  版本管理时需要查询的脚本id。
    * pageNum  page_num为正整数。
    * pageSize  每页显示的条数，默认值是10。
    * projectId  项目id。
    * orderByColumn  需要排序的字段(默认为更新时间),支持字段有name,create_time和update_time。
    * sortOrder  排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    * enterpriseProjectId  企业项目id，根据企业项目id搜索。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'isDefault' => 'is_default',
            'createBy' => 'create_by',
            'scriptId' => 'script_id',
            'pageNum' => 'page_num',
            'pageSize' => 'page_size',
            'projectId' => 'project_id',
            'orderByColumn' => 'order_by_column',
            'sortOrder' => 'sort_order',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  查询接收的参数，版本管理时，name为脚本名称（版本管理查询时name不能为空），脚本管理页面查询时，name为接收模糊查询的参数，name是null，表示查询所有默认脚本。
    * isDefault  查询规则，如果是类型为default，则为模糊查询和脚本管理主页展示，no_default为版本管理。
    * createBy  创建人，默认按照创建人搜索脚本。
    * scriptId  版本管理时需要查询的脚本id。
    * pageNum  page_num为正整数。
    * pageSize  每页显示的条数，默认值是10。
    * projectId  项目id。
    * orderByColumn  需要排序的字段(默认为更新时间),支持字段有name,create_time和update_time。
    * sortOrder  排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    * enterpriseProjectId  企业项目id，根据企业项目id搜索。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'isDefault' => 'setIsDefault',
            'createBy' => 'setCreateBy',
            'scriptId' => 'setScriptId',
            'pageNum' => 'setPageNum',
            'pageSize' => 'setPageSize',
            'projectId' => 'setProjectId',
            'orderByColumn' => 'setOrderByColumn',
            'sortOrder' => 'setSortOrder',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  查询接收的参数，版本管理时，name为脚本名称（版本管理查询时name不能为空），脚本管理页面查询时，name为接收模糊查询的参数，name是null，表示查询所有默认脚本。
    * isDefault  查询规则，如果是类型为default，则为模糊查询和脚本管理主页展示，no_default为版本管理。
    * createBy  创建人，默认按照创建人搜索脚本。
    * scriptId  版本管理时需要查询的脚本id。
    * pageNum  page_num为正整数。
    * pageSize  每页显示的条数，默认值是10。
    * projectId  项目id。
    * orderByColumn  需要排序的字段(默认为更新时间),支持字段有name,create_time和update_time。
    * sortOrder  排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    * enterpriseProjectId  企业项目id，根据企业项目id搜索。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'isDefault' => 'getIsDefault',
            'createBy' => 'getCreateBy',
            'scriptId' => 'getScriptId',
            'pageNum' => 'getPageNum',
            'pageSize' => 'getPageSize',
            'projectId' => 'getProjectId',
            'orderByColumn' => 'getOrderByColumn',
            'sortOrder' => 'getSortOrder',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['scriptId'] = isset($data['scriptId']) ? $data['scriptId'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['orderByColumn'] = isset($data['orderByColumn']) ? $data['orderByColumn'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isDefault']) && (mb_strlen($this->container['isDefault']) > 16)) {
                $invalidProperties[] = "invalid value for 'isDefault', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['isDefault']) && (mb_strlen($this->container['isDefault']) < 0)) {
                $invalidProperties[] = "invalid value for 'isDefault', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createBy']) && (mb_strlen($this->container['createBy']) < 1)) {
                $invalidProperties[] = "invalid value for 'createBy', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['scriptId'] === null) {
            $invalidProperties[] = "'scriptId' can't be null";
        }
            if ((mb_strlen($this->container['scriptId']) > 64)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['scriptId']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageNum']) && ($this->container['pageNum'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageNum', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['pageNum']) && ($this->container['pageNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNum', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 1000)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['orderByColumn'] === null) {
            $invalidProperties[] = "'orderByColumn' can't be null";
        }
            if ((mb_strlen($this->container['orderByColumn']) > 16)) {
                $invalidProperties[] = "invalid value for 'orderByColumn', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['orderByColumn']) < 1)) {
                $invalidProperties[] = "invalid value for 'orderByColumn', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sortOrder'] === null) {
            $invalidProperties[] = "'sortOrder' can't be null";
        }
            if ((mb_strlen($this->container['sortOrder']) > 16)) {
                $invalidProperties[] = "invalid value for 'sortOrder', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['sortOrder']) < 1)) {
                $invalidProperties[] = "invalid value for 'sortOrder', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  查询接收的参数，版本管理时，name为脚本名称（版本管理查询时name不能为空），脚本管理页面查询时，name为接收模糊查询的参数，name是null，表示查询所有默认脚本。
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
    * @param string|null $name 查询接收的参数，版本管理时，name为脚本名称（版本管理查询时name不能为空），脚本管理页面查询时，name为接收模糊查询的参数，name是null，表示查询所有默认脚本。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets isDefault
    *  查询规则，如果是类型为default，则为模糊查询和脚本管理主页展示，no_default为版本管理。
    *
    * @return string|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param string|null $isDefault 查询规则，如果是类型为default，则为模糊查询和脚本管理主页展示，no_default为版本管理。
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人，默认按照创建人搜索脚本。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人，默认按照创建人搜索脚本。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets scriptId
    *  版本管理时需要查询的脚本id。
    *
    * @return string
    */
    public function getScriptId()
    {
        return $this->container['scriptId'];
    }

    /**
    * Sets scriptId
    *
    * @param string $scriptId 版本管理时需要查询的脚本id。
    *
    * @return $this
    */
    public function setScriptId($scriptId)
    {
        $this->container['scriptId'] = $scriptId;
        return $this;
    }

    /**
    * Gets pageNum
    *  page_num为正整数。
    *
    * @return int|null
    */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
    * Sets pageNum
    *
    * @param int|null $pageNum page_num为正整数。
    *
    * @return $this
    */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页显示的条数，默认值是10。
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
    * @param int|null $pageSize 每页显示的条数，默认值是10。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets orderByColumn
    *  需要排序的字段(默认为更新时间),支持字段有name,create_time和update_time。
    *
    * @return string
    */
    public function getOrderByColumn()
    {
        return $this->container['orderByColumn'];
    }

    /**
    * Sets orderByColumn
    *
    * @param string $orderByColumn 需要排序的字段(默认为更新时间),支持字段有name,create_time和update_time。
    *
    * @return $this
    */
    public function setOrderByColumn($orderByColumn)
    {
        $this->container['orderByColumn'] = $orderByColumn;
        return $this;
    }

    /**
    * Gets sortOrder
    *  排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    *
    * @return string
    */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
    * Sets sortOrder
    *
    * @param string $sortOrder 排序规则(默认降序) 传入升序或降序，升序：ASC，降序：DESC。
    *
    * @return $this
    */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id，根据企业项目id搜索。
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
    * @param string|null $enterpriseProjectId 企业项目id，根据企业项目id搜索。
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

