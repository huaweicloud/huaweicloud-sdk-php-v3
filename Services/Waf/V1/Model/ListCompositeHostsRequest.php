<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCompositeHostsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCompositeHostsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。默认值为0，表示默认企业项目。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。  缺省值：0
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。如果需要一次查全部域名，该参数值填-1。
    * hostname  域名名称
    * policyname  防护策略名称
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * wafType  域名所属WAF模式
    * isHttps  域名是否使用HTTPS
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'enterpriseProjectId' => 'string',
            'page' => 'int',
            'pagesize' => 'int',
            'hostname' => 'string',
            'policyname' => 'string',
            'protectStatus' => 'int',
            'wafType' => 'string',
            'isHttps' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。默认值为0，表示默认企业项目。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。  缺省值：0
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。如果需要一次查全部域名，该参数值填-1。
    * hostname  域名名称
    * policyname  防护策略名称
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * wafType  域名所属WAF模式
    * isHttps  域名是否使用HTTPS
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'enterpriseProjectId' => null,
        'page' => null,
        'pagesize' => null,
        'hostname' => null,
        'policyname' => null,
        'protectStatus' => null,
        'wafType' => null,
        'isHttps' => null
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
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。默认值为0，表示默认企业项目。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。  缺省值：0
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。如果需要一次查全部域名，该参数值填-1。
    * hostname  域名名称
    * policyname  防护策略名称
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * wafType  域名所属WAF模式
    * isHttps  域名是否使用HTTPS
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'page' => 'page',
            'pagesize' => 'pagesize',
            'hostname' => 'hostname',
            'policyname' => 'policyname',
            'protectStatus' => 'protect_status',
            'wafType' => 'waf_type',
            'isHttps' => 'is_https'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。默认值为0，表示默认企业项目。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。  缺省值：0
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。如果需要一次查全部域名，该参数值填-1。
    * hostname  域名名称
    * policyname  防护策略名称
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * wafType  域名所属WAF模式
    * isHttps  域名是否使用HTTPS
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'page' => 'setPage',
            'pagesize' => 'setPagesize',
            'hostname' => 'setHostname',
            'policyname' => 'setPolicyname',
            'protectStatus' => 'setProtectStatus',
            'wafType' => 'setWafType',
            'isHttps' => 'setIsHttps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。默认值为0，表示默认企业项目。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。  缺省值：0
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。如果需要一次查全部域名，该参数值填-1。
    * hostname  域名名称
    * policyname  防护策略名称
    * protectStatus  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    * wafType  域名所属WAF模式
    * isHttps  域名是否使用HTTPS
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'page' => 'getPage',
            'pagesize' => 'getPagesize',
            'hostname' => 'getHostname',
            'policyname' => 'getPolicyname',
            'protectStatus' => 'getProtectStatus',
            'wafType' => 'getWafType',
            'isHttps' => 'getIsHttps'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pagesize'] = isset($data['pagesize']) ? $data['pagesize'] : null;
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['policyname'] = isset($data['policyname']) ? $data['policyname'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['wafType'] = isset($data['wafType']) ? $data['wafType'] : null;
        $this->container['isHttps'] = isset($data['isHttps']) ? $data['isHttps'] : null;
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
    *  内容类型
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
    * @param string $contentType 内容类型
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。默认值为0，表示默认企业项目。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。  缺省值：0
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
    * @param string|null $enterpriseProjectId 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id。默认值为0，表示默认企业项目。若需要查询当前用户所有企业项目绑定的资源信息，请传参all_granted_eps。  缺省值：0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets page
    *  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page 分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets pagesize
    *  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。如果需要一次查全部域名，该参数值填-1。
    *
    * @return int|null
    */
    public function getPagesize()
    {
        return $this->container['pagesize'];
    }

    /**
    * Sets pagesize
    *
    * @param int|null $pagesize 分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。如果需要一次查全部域名，该参数值填-1。
    *
    * @return $this
    */
    public function setPagesize($pagesize)
    {
        $this->container['pagesize'] = $pagesize;
        return $this;
    }

    /**
    * Gets hostname
    *  域名名称
    *
    * @return string|null
    */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
    * Sets hostname
    *
    * @param string|null $hostname 域名名称
    *
    * @return $this
    */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;
        return $this;
    }

    /**
    * Gets policyname
    *  防护策略名称
    *
    * @return string|null
    */
    public function getPolicyname()
    {
        return $this->container['policyname'];
    }

    /**
    * Sets policyname
    *
    * @param string|null $policyname 防护策略名称
    *
    * @return $this
    */
    public function setPolicyname($policyname)
    {
        $this->container['policyname'] = $policyname;
        return $this;
    }

    /**
    * Gets protectStatus
    *  域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    *
    * @return int|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param int|null $protectStatus 域名防护状态：  - -1：bypass，该域名的请求直接到达其后端服务器，不再经过WAF  - 0：暂停防护，WAF只转发该域名的请求，不做攻击检测  - 1：开启防护，WAF根据您配置的策略进行攻击检测
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets wafType
    *  域名所属WAF模式
    *
    * @return string|null
    */
    public function getWafType()
    {
        return $this->container['wafType'];
    }

    /**
    * Sets wafType
    *
    * @param string|null $wafType 域名所属WAF模式
    *
    * @return $this
    */
    public function setWafType($wafType)
    {
        $this->container['wafType'] = $wafType;
        return $this;
    }

    /**
    * Gets isHttps
    *  域名是否使用HTTPS
    *
    * @return bool|null
    */
    public function getIsHttps()
    {
        return $this->container['isHttps'];
    }

    /**
    * Sets isHttps
    *
    * @param bool|null $isHttps 域名是否使用HTTPS
    *
    * @return $this
    */
    public function setIsHttps($isHttps)
    {
        $this->container['isHttps'] = $isHttps;
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

