<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFactorySupplementDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFactorySupplementDataRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  工作空间ID
    * sort  排序字段:desc：创建时间按照降序展示asc ：创建时间按照升序展示默认值：desc
    * page  分页列表的起始页，默认值为0。取值范围大于等于0。
    * size  分页返回结果，指定每页最大记录数。默认值：10
    * name  补数据名称
    * userName  用户名
    * status  实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
    * startDate  查询作业的开始日期 13位时间戳
    * endDate  查询作业的结束日期 13位时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'sort' => 'string',
            'page' => 'string',
            'size' => 'string',
            'name' => 'string',
            'userName' => 'string',
            'status' => 'string',
            'startDate' => 'string',
            'endDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  工作空间ID
    * sort  排序字段:desc：创建时间按照降序展示asc ：创建时间按照升序展示默认值：desc
    * page  分页列表的起始页，默认值为0。取值范围大于等于0。
    * size  分页返回结果，指定每页最大记录数。默认值：10
    * name  补数据名称
    * userName  用户名
    * status  实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
    * startDate  查询作业的开始日期 13位时间戳
    * endDate  查询作业的结束日期 13位时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'sort' => null,
        'page' => null,
        'size' => null,
        'name' => null,
        'userName' => null,
        'status' => null,
        'startDate' => null,
        'endDate' => null
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
    * workspace  工作空间ID
    * sort  排序字段:desc：创建时间按照降序展示asc ：创建时间按照升序展示默认值：desc
    * page  分页列表的起始页，默认值为0。取值范围大于等于0。
    * size  分页返回结果，指定每页最大记录数。默认值：10
    * name  补数据名称
    * userName  用户名
    * status  实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
    * startDate  查询作业的开始日期 13位时间戳
    * endDate  查询作业的结束日期 13位时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'sort' => 'sort',
            'page' => 'page',
            'size' => 'size',
            'name' => 'name',
            'userName' => 'user_name',
            'status' => 'status',
            'startDate' => 'start_date',
            'endDate' => 'end_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  工作空间ID
    * sort  排序字段:desc：创建时间按照降序展示asc ：创建时间按照升序展示默认值：desc
    * page  分页列表的起始页，默认值为0。取值范围大于等于0。
    * size  分页返回结果，指定每页最大记录数。默认值：10
    * name  补数据名称
    * userName  用户名
    * status  实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
    * startDate  查询作业的开始日期 13位时间戳
    * endDate  查询作业的结束日期 13位时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'sort' => 'setSort',
            'page' => 'setPage',
            'size' => 'setSize',
            'name' => 'setName',
            'userName' => 'setUserName',
            'status' => 'setStatus',
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  工作空间ID
    * sort  排序字段:desc：创建时间按照降序展示asc ：创建时间按照升序展示默认值：desc
    * page  分页列表的起始页，默认值为0。取值范围大于等于0。
    * size  分页返回结果，指定每页最大记录数。默认值：10
    * name  补数据名称
    * userName  用户名
    * status  实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
    * startDate  查询作业的开始日期 13位时间戳
    * endDate  查询作业的结束日期 13位时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'sort' => 'getSort',
            'page' => 'getPage',
            'size' => 'getSize',
            'name' => 'getName',
            'userName' => 'getUserName',
            'status' => 'getStatus',
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate'
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
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
    * Gets workspace
    *  工作空间ID
    *
    * @return string|null
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string|null $workspace 工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets sort
    *  排序字段:desc：创建时间按照降序展示asc ：创建时间按照升序展示默认值：desc
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
    * @param string|null $sort 排序字段:desc：创建时间按照降序展示asc ：创建时间按照升序展示默认值：desc
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets page
    *  分页列表的起始页，默认值为0。取值范围大于等于0。
    *
    * @return string|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param string|null $page 分页列表的起始页，默认值为0。取值范围大于等于0。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets size
    *  分页返回结果，指定每页最大记录数。默认值：10
    *
    * @return string|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string|null $size 分页返回结果，指定每页最大记录数。默认值：10
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets name
    *  补数据名称
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
    * @param string|null $name 补数据名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets userName
    *  用户名
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets status
    *  实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
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
    * @param string|null $status 实例状态：SUCCESS：成功RUNNING ：运行中CANCLE：取消
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startDate
    *  查询作业的开始日期 13位时间戳
    *
    * @return string|null
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string|null $startDate 查询作业的开始日期 13位时间戳
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  查询作业的结束日期 13位时间戳
    *
    * @return string|null
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param string|null $endDate 查询作业的结束日期 13位时间戳
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
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

