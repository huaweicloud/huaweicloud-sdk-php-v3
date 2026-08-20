<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainName  **参数解释：** 域名 **约束限制：** 只支持单个域名，如：www.test1.com **取值范围：** 不涉及 **默认取值：** 不涉及
    * startTime  **参数解释：** 查询开始时间 **约束限制：** 不涉及 **取值范围：** 时间格式为整点毫秒时间戳 **默认取值：** 当天0点
    * endTime  **参数解释：** 查询结束时间 **约束限制：** 不涉及 **取值范围：** - 不包含结束时间 - 与开始时间的最大跨度为30天 - 时间格式为整点毫秒时间戳 **默认取值：** 开始时间加1天
    * pageSize  **参数解释：** 查询时单页数量 **约束限制：** 不涉及 **取值范围：** 1-10000 **默认取值：** 10
    * pageNumber  **参数解释：** 当前查询第几页 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 1
    * enterpriseProjectId  **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainName' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'pageSize' => 'int',
            'pageNumber' => 'int',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainName  **参数解释：** 域名 **约束限制：** 只支持单个域名，如：www.test1.com **取值范围：** 不涉及 **默认取值：** 不涉及
    * startTime  **参数解释：** 查询开始时间 **约束限制：** 不涉及 **取值范围：** 时间格式为整点毫秒时间戳 **默认取值：** 当天0点
    * endTime  **参数解释：** 查询结束时间 **约束限制：** 不涉及 **取值范围：** - 不包含结束时间 - 与开始时间的最大跨度为30天 - 时间格式为整点毫秒时间戳 **默认取值：** 开始时间加1天
    * pageSize  **参数解释：** 查询时单页数量 **约束限制：** 不涉及 **取值范围：** 1-10000 **默认取值：** 10
    * pageNumber  **参数解释：** 当前查询第几页 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 1
    * enterpriseProjectId  **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainName' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'pageSize' => null,
        'pageNumber' => null,
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
    * domainName  **参数解释：** 域名 **约束限制：** 只支持单个域名，如：www.test1.com **取值范围：** 不涉及 **默认取值：** 不涉及
    * startTime  **参数解释：** 查询开始时间 **约束限制：** 不涉及 **取值范围：** 时间格式为整点毫秒时间戳 **默认取值：** 当天0点
    * endTime  **参数解释：** 查询结束时间 **约束限制：** 不涉及 **取值范围：** - 不包含结束时间 - 与开始时间的最大跨度为30天 - 时间格式为整点毫秒时间戳 **默认取值：** 开始时间加1天
    * pageSize  **参数解释：** 查询时单页数量 **约束限制：** 不涉及 **取值范围：** 1-10000 **默认取值：** 10
    * pageNumber  **参数解释：** 当前查询第几页 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 1
    * enterpriseProjectId  **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainName' => 'domain_name',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'pageSize' => 'page_size',
            'pageNumber' => 'page_number',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainName  **参数解释：** 域名 **约束限制：** 只支持单个域名，如：www.test1.com **取值范围：** 不涉及 **默认取值：** 不涉及
    * startTime  **参数解释：** 查询开始时间 **约束限制：** 不涉及 **取值范围：** 时间格式为整点毫秒时间戳 **默认取值：** 当天0点
    * endTime  **参数解释：** 查询结束时间 **约束限制：** 不涉及 **取值范围：** - 不包含结束时间 - 与开始时间的最大跨度为30天 - 时间格式为整点毫秒时间戳 **默认取值：** 开始时间加1天
    * pageSize  **参数解释：** 查询时单页数量 **约束限制：** 不涉及 **取值范围：** 1-10000 **默认取值：** 10
    * pageNumber  **参数解释：** 当前查询第几页 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 1
    * enterpriseProjectId  **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'domainName' => 'setDomainName',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'pageSize' => 'setPageSize',
            'pageNumber' => 'setPageNumber',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainName  **参数解释：** 域名 **约束限制：** 只支持单个域名，如：www.test1.com **取值范围：** 不涉及 **默认取值：** 不涉及
    * startTime  **参数解释：** 查询开始时间 **约束限制：** 不涉及 **取值范围：** 时间格式为整点毫秒时间戳 **默认取值：** 当天0点
    * endTime  **参数解释：** 查询结束时间 **约束限制：** 不涉及 **取值范围：** - 不包含结束时间 - 与开始时间的最大跨度为30天 - 时间格式为整点毫秒时间戳 **默认取值：** 开始时间加1天
    * pageSize  **参数解释：** 查询时单页数量 **约束限制：** 不涉及 **取值范围：** 1-10000 **默认取值：** 10
    * pageNumber  **参数解释：** 当前查询第几页 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 1
    * enterpriseProjectId  **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'domainName' => 'getDomainName',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'pageSize' => 'getPageSize',
            'pageNumber' => 'getPageNumber',
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
        $this->container['domainName'] = isset($data['domainName']) ? $data['domainName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
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
        if ($this->container['domainName'] === null) {
            $invalidProperties[] = "'domainName' can't be null";
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
    * Gets domainName
    *  **参数解释：** 域名 **约束限制：** 只支持单个域名，如：www.test1.com **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getDomainName()
    {
        return $this->container['domainName'];
    }

    /**
    * Sets domainName
    *
    * @param string $domainName **参数解释：** 域名 **约束限制：** 只支持单个域名，如：www.test1.com **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDomainName($domainName)
    {
        $this->container['domainName'] = $domainName;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释：** 查询开始时间 **约束限制：** 不涉及 **取值范围：** 时间格式为整点毫秒时间戳 **默认取值：** 当天0点
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释：** 查询开始时间 **约束限制：** 不涉及 **取值范围：** 时间格式为整点毫秒时间戳 **默认取值：** 当天0点
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释：** 查询结束时间 **约束限制：** 不涉及 **取值范围：** - 不包含结束时间 - 与开始时间的最大跨度为30天 - 时间格式为整点毫秒时间戳 **默认取值：** 开始时间加1天
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释：** 查询结束时间 **约束限制：** 不涉及 **取值范围：** - 不包含结束时间 - 与开始时间的最大跨度为30天 - 时间格式为整点毫秒时间戳 **默认取值：** 开始时间加1天
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets pageSize
    *  **参数解释：** 查询时单页数量 **约束限制：** 不涉及 **取值范围：** 1-10000 **默认取值：** 10
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
    * @param int|null $pageSize **参数解释：** 查询时单页数量 **约束限制：** 不涉及 **取值范围：** 1-10000 **默认取值：** 10
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
    *  **参数解释：** 当前查询第几页 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 1
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
    * @param int|null $pageNumber **参数解释：** 当前查询第几页 **约束限制：** 不涉及 **取值范围：** 1-65535 **默认取值：** 1
    *
    * @return $this
    */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
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
    * @param string|null $enterpriseProjectId **参数解释：** 企业项目id > 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id  **约束限制：** - 当用户开启企业项目功能时，该参数生效，表示查询资源所属项目 - 当使用子账号调用接口时，该参数必传 **取值范围：** all表示所有项目 **默认取值：** 不涉及
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

