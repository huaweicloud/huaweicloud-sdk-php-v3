<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCertificatesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCertificatesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
    * name  证书名称
    * host  是否获取证书关联的域名，默认为false   -true:获取已关联域名的证书   -false:获取未关联域名的证书
    * expStatus  证书过期状态，0-未过期，1-已过期，2-即将过期（证书将在一个月内过期）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'enterpriseProjectId' => 'string',
            'page' => 'int',
            'pagesize' => 'int',
            'name' => 'string',
            'host' => 'bool',
            'expStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
    * name  证书名称
    * host  是否获取证书关联的域名，默认为false   -true:获取已关联域名的证书   -false:获取未关联域名的证书
    * expStatus  证书过期状态，0-未过期，1-已过期，2-即将过期（证书将在一个月内过期）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'enterpriseProjectId' => null,
        'page' => null,
        'pagesize' => null,
        'name' => null,
        'host' => null,
        'expStatus' => null
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
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
    * name  证书名称
    * host  是否获取证书关联的域名，默认为false   -true:获取已关联域名的证书   -false:获取未关联域名的证书
    * expStatus  证书过期状态，0-未过期，1-已过期，2-即将过期（证书将在一个月内过期）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'page' => 'page',
            'pagesize' => 'pagesize',
            'name' => 'name',
            'host' => 'host',
            'expStatus' => 'exp_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
    * name  证书名称
    * host  是否获取证书关联的域名，默认为false   -true:获取已关联域名的证书   -false:获取未关联域名的证书
    * expStatus  证书过期状态，0-未过期，1-已过期，2-即将过期（证书将在一个月内过期）
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'page' => 'setPage',
            'pagesize' => 'setPagesize',
            'name' => 'setName',
            'host' => 'setHost',
            'expStatus' => 'setExpStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  内容类型
    * enterpriseProjectId  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id
    * page  分页查询时，返回第几页数据。默认值为1，表示返回第1页数据。
    * pagesize  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
    * name  证书名称
    * host  是否获取证书关联的域名，默认为false   -true:获取已关联域名的证书   -false:获取未关联域名的证书
    * expStatus  证书过期状态，0-未过期，1-已过期，2-即将过期（证书将在一个月内过期）
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'page' => 'getPage',
            'pagesize' => 'getPagesize',
            'name' => 'getName',
            'host' => 'getHost',
            'expStatus' => 'getExpStatus'
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : 'application/json;charset=utf8';
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : 1;
        $this->container['pagesize'] = isset($data['pagesize']) ? $data['pagesize'] : 10;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : false;
        $this->container['expStatus'] = isset($data['expStatus']) ? $data['expStatus'] : null;
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
    *  您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id
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
    * @param string|null $enterpriseProjectId 您可以通过调用企业项目管理服务（EPS）的查询企业项目列表接口（ListEnterpriseProject）查询企业项目id
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
    *  分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
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
    * @param int|null $pagesize 分页查询时，每页包含多少条结果。范围1-100，默认值为10，表示每页包含10条结果。
    *
    * @return $this
    */
    public function setPagesize($pagesize)
    {
        $this->container['pagesize'] = $pagesize;
        return $this;
    }

    /**
    * Gets name
    *  证书名称
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
    * @param string|null $name 证书名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets host
    *  是否获取证书关联的域名，默认为false   -true:获取已关联域名的证书   -false:获取未关联域名的证书
    *
    * @return bool|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param bool|null $host 是否获取证书关联的域名，默认为false   -true:获取已关联域名的证书   -false:获取未关联域名的证书
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets expStatus
    *  证书过期状态，0-未过期，1-已过期，2-即将过期（证书将在一个月内过期）
    *
    * @return int|null
    */
    public function getExpStatus()
    {
        return $this->container['expStatus'];
    }

    /**
    * Sets expStatus
    *
    * @param int|null $expStatus 证书过期状态，0-未过期，1-已过期，2-即将过期（证书将在一个月内过期）
    *
    * @return $this
    */
    public function setExpStatus($expStatus)
    {
        $this->container['expStatus'] = $expStatus;
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

