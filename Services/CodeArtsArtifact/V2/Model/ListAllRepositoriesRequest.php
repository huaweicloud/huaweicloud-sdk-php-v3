<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAllRepositoriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAllRepositoriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tenantId  租户id
    * groupId  组id
    * pageNo  页码
    * pageSize  每页大小
    * sort  排序类型
    * qname  查询内容
    * type  仓库类型
    * format  仓库格式
    * formatList  仓库格式列表
    * isRecycleBin  是否是回收站文件
    * isNeedPaging  是否需要分页
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tenantId' => 'string',
            'groupId' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int',
            'sort' => 'string',
            'qname' => 'string',
            'type' => 'string',
            'format' => 'string',
            'formatList' => 'string',
            'isRecycleBin' => 'bool',
            'isNeedPaging' => 'bool',
            'inProject' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tenantId  租户id
    * groupId  组id
    * pageNo  页码
    * pageSize  每页大小
    * sort  排序类型
    * qname  查询内容
    * type  仓库类型
    * format  仓库格式
    * formatList  仓库格式列表
    * isRecycleBin  是否是回收站文件
    * isNeedPaging  是否需要分页
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tenantId' => null,
        'groupId' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'sort' => null,
        'qname' => null,
        'type' => null,
        'format' => null,
        'formatList' => null,
        'isRecycleBin' => null,
        'isNeedPaging' => null,
        'inProject' => null
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
    * tenantId  租户id
    * groupId  组id
    * pageNo  页码
    * pageSize  每页大小
    * sort  排序类型
    * qname  查询内容
    * type  仓库类型
    * format  仓库格式
    * formatList  仓库格式列表
    * isRecycleBin  是否是回收站文件
    * isNeedPaging  是否需要分页
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tenantId' => 'tenant_id',
            'groupId' => 'group_id',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'sort' => 'sort',
            'qname' => 'qname',
            'type' => 'type',
            'format' => 'format',
            'formatList' => 'format_list',
            'isRecycleBin' => 'is_recycle_bin',
            'isNeedPaging' => 'is_need_paging',
            'inProject' => 'in_project'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tenantId  租户id
    * groupId  组id
    * pageNo  页码
    * pageSize  每页大小
    * sort  排序类型
    * qname  查询内容
    * type  仓库类型
    * format  仓库格式
    * formatList  仓库格式列表
    * isRecycleBin  是否是回收站文件
    * isNeedPaging  是否需要分页
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $setters = [
            'tenantId' => 'setTenantId',
            'groupId' => 'setGroupId',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'sort' => 'setSort',
            'qname' => 'setQname',
            'type' => 'setType',
            'format' => 'setFormat',
            'formatList' => 'setFormatList',
            'isRecycleBin' => 'setIsRecycleBin',
            'isNeedPaging' => 'setIsNeedPaging',
            'inProject' => 'setInProject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tenantId  租户id
    * groupId  组id
    * pageNo  页码
    * pageSize  每页大小
    * sort  排序类型
    * qname  查询内容
    * type  仓库类型
    * format  仓库格式
    * formatList  仓库格式列表
    * isRecycleBin  是否是回收站文件
    * isNeedPaging  是否需要分页
    * inProject  是否在项目中
    *
    * @var string[]
    */
    protected static $getters = [
            'tenantId' => 'getTenantId',
            'groupId' => 'getGroupId',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'sort' => 'getSort',
            'qname' => 'getQname',
            'type' => 'getType',
            'format' => 'getFormat',
            'formatList' => 'getFormatList',
            'isRecycleBin' => 'getIsRecycleBin',
            'isNeedPaging' => 'getIsNeedPaging',
            'inProject' => 'getInProject'
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
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['qname'] = isset($data['qname']) ? $data['qname'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['formatList'] = isset($data['formatList']) ? $data['formatList'] : null;
        $this->container['isRecycleBin'] = isset($data['isRecycleBin']) ? $data['isRecycleBin'] : null;
        $this->container['isNeedPaging'] = isset($data['isNeedPaging']) ? $data['isNeedPaging'] : null;
        $this->container['inProject'] = isset($data['inProject']) ? $data['inProject'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
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
    * Gets tenantId
    *  租户id
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 租户id
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets groupId
    *  组id
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 组id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
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
    * Gets pageSize
    *  每页大小
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
    * @param int|null $pageSize 每页大小
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets sort
    *  排序类型
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort 排序类型
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets qname
    *  查询内容
    *
    * @return string|null
    */
    public function getQname()
    {
        return $this->container['qname'];
    }

    /**
    * Sets qname
    *
    * @param string|null $qname 查询内容
    *
    * @return $this
    */
    public function setQname($qname)
    {
        $this->container['qname'] = $qname;
        return $this;
    }

    /**
    * Gets type
    *  仓库类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 仓库类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets format
    *  仓库格式
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 仓库格式
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets formatList
    *  仓库格式列表
    *
    * @return string|null
    */
    public function getFormatList()
    {
        return $this->container['formatList'];
    }

    /**
    * Sets formatList
    *
    * @param string|null $formatList 仓库格式列表
    *
    * @return $this
    */
    public function setFormatList($formatList)
    {
        $this->container['formatList'] = $formatList;
        return $this;
    }

    /**
    * Gets isRecycleBin
    *  是否是回收站文件
    *
    * @return bool|null
    */
    public function getIsRecycleBin()
    {
        return $this->container['isRecycleBin'];
    }

    /**
    * Sets isRecycleBin
    *
    * @param bool|null $isRecycleBin 是否是回收站文件
    *
    * @return $this
    */
    public function setIsRecycleBin($isRecycleBin)
    {
        $this->container['isRecycleBin'] = $isRecycleBin;
        return $this;
    }

    /**
    * Gets isNeedPaging
    *  是否需要分页
    *
    * @return bool|null
    */
    public function getIsNeedPaging()
    {
        return $this->container['isNeedPaging'];
    }

    /**
    * Sets isNeedPaging
    *
    * @param bool|null $isNeedPaging 是否需要分页
    *
    * @return $this
    */
    public function setIsNeedPaging($isNeedPaging)
    {
        $this->container['isNeedPaging'] = $isNeedPaging;
        return $this;
    }

    /**
    * Gets inProject
    *  是否在项目中
    *
    * @return bool|null
    */
    public function getInProject()
    {
        return $this->container['inProject'];
    }

    /**
    * Sets inProject
    *
    * @param bool|null $inProject 是否在项目中
    *
    * @return $this
    */
    public function setInProject($inProject)
    {
        $this->container['inProject'] = $inProject;
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

