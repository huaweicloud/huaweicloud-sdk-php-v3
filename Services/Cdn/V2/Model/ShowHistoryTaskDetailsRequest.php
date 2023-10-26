<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowHistoryTaskDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowHistoryTaskDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * historyTasksId  刷新任务ID。
    * pageSize  刷新预热的urls所显示单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
    * pageNumber  刷新预热的urls当前查询为第几页，取值范围为1-65535。默认值1。
    * status  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    * url  url的地址。
    * createTime  刷新预热任务的创建时间。不传参默认为查询7天内的任务。最长可查询15天内数据。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'historyTasksId' => 'string',
            'pageSize' => 'int',
            'pageNumber' => 'int',
            'status' => 'string',
            'url' => 'string',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * historyTasksId  刷新任务ID。
    * pageSize  刷新预热的urls所显示单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
    * pageNumber  刷新预热的urls当前查询为第几页，取值范围为1-65535。默认值1。
    * status  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    * url  url的地址。
    * createTime  刷新预热任务的创建时间。不传参默认为查询7天内的任务。最长可查询15天内数据。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'historyTasksId' => null,
        'pageSize' => null,
        'pageNumber' => null,
        'status' => null,
        'url' => null,
        'createTime' => 'int64'
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
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * historyTasksId  刷新任务ID。
    * pageSize  刷新预热的urls所显示单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
    * pageNumber  刷新预热的urls当前查询为第几页，取值范围为1-65535。默认值1。
    * status  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    * url  url的地址。
    * createTime  刷新预热任务的创建时间。不传参默认为查询7天内的任务。最长可查询15天内数据。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'historyTasksId' => 'history_tasks_id',
            'pageSize' => 'page_size',
            'pageNumber' => 'page_number',
            'status' => 'status',
            'url' => 'url',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * historyTasksId  刷新任务ID。
    * pageSize  刷新预热的urls所显示单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
    * pageNumber  刷新预热的urls当前查询为第几页，取值范围为1-65535。默认值1。
    * status  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    * url  url的地址。
    * createTime  刷新预热任务的创建时间。不传参默认为查询7天内的任务。最长可查询15天内数据。
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'historyTasksId' => 'setHistoryTasksId',
            'pageSize' => 'setPageSize',
            'pageNumber' => 'setPageNumber',
            'status' => 'setStatus',
            'url' => 'setUrl',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    * historyTasksId  刷新任务ID。
    * pageSize  刷新预热的urls所显示单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
    * pageNumber  刷新预热的urls当前查询为第几页，取值范围为1-65535。默认值1。
    * status  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    * url  url的地址。
    * createTime  刷新预热任务的创建时间。不传参默认为查询7天内的任务。最长可查询15天内数据。
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'historyTasksId' => 'getHistoryTasksId',
            'pageSize' => 'getPageSize',
            'pageNumber' => 'getPageNumber',
            'status' => 'getStatus',
            'url' => 'getUrl',
            'createTime' => 'getCreateTime'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['historyTasksId'] = isset($data['historyTasksId']) ? $data['historyTasksId'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['historyTasksId'] === null) {
            $invalidProperties[] = "'historyTasksId' can't be null";
        }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] > 10000)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['pageSize']) && ($this->container['pageSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['pageNumber']) && ($this->container['pageNumber'] > 65535)) {
                $invalidProperties[] = "invalid value for 'pageNumber', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['pageNumber']) && ($this->container['pageNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'pageNumber', must be bigger than or equal to 1.";
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
    * Gets enterpriseProjectId
    *  当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
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
    * @param string|null $enterpriseProjectId 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目，\"all\"表示所有项目。注意：当使用子帐号调用接口时，该参数必传。  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets historyTasksId
    *  刷新任务ID。
    *
    * @return string
    */
    public function getHistoryTasksId()
    {
        return $this->container['historyTasksId'];
    }

    /**
    * Sets historyTasksId
    *
    * @param string $historyTasksId 刷新任务ID。
    *
    * @return $this
    */
    public function setHistoryTasksId($historyTasksId)
    {
        $this->container['historyTasksId'] = $historyTasksId;
        return $this;
    }

    /**
    * Gets pageSize
    *  刷新预热的urls所显示单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
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
    * @param int|null $pageSize 刷新预热的urls所显示单页最大数量，取值范围为1-10000。page_size和page_number必须同时传值。默认值30。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets pageNumber
    *  刷新预热的urls当前查询为第几页，取值范围为1-65535。默认值1。
    *
    * @return int|null
    */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /**
    * Sets pageNumber
    *
    * @param int|null $pageNumber 刷新预热的urls当前查询为第几页，取值范围为1-65535。默认值1。
    *
    * @return $this
    */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;
        return $this;
    }

    /**
    * Gets status
    *  url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
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
    * @param string|null $status url的状态 processing 处理中，succeed 完成，failed 失败，waiting 等待，refreshing 刷新中，preheating 预热中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets url
    *  url的地址。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url url的地址。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets createTime
    *  刷新预热任务的创建时间。不传参默认为查询7天内的任务。最长可查询15天内数据。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 刷新预热任务的创建时间。不传参默认为查询7天内的任务。最长可查询15天内数据。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

