<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  内容类型
    * enterpriseProjectId  通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询企业项目ID
    * page  分页查询参数，第page页，默认值为1
    * pagesize  分页查询参数，每页pagesize条记录，默认值为10
    * instancename  模糊查询，独享引擎名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'enterpriseProjectId' => 'string',
            'page' => 'int',
            'pagesize' => 'int',
            'instancename' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  内容类型
    * enterpriseProjectId  通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询企业项目ID
    * page  分页查询参数，第page页，默认值为1
    * pagesize  分页查询参数，每页pagesize条记录，默认值为10
    * instancename  模糊查询，独享引擎名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'enterpriseProjectId' => null,
        'page' => 'int32',
        'pagesize' => 'int32',
        'instancename' => null
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
    * enterpriseProjectId  通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询企业项目ID
    * page  分页查询参数，第page页，默认值为1
    * pagesize  分页查询参数，每页pagesize条记录，默认值为10
    * instancename  模糊查询，独享引擎名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'page' => 'page',
            'pagesize' => 'pagesize',
            'instancename' => 'instancename'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  内容类型
    * enterpriseProjectId  通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询企业项目ID
    * page  分页查询参数，第page页，默认值为1
    * pagesize  分页查询参数，每页pagesize条记录，默认值为10
    * instancename  模糊查询，独享引擎名称
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'page' => 'setPage',
            'pagesize' => 'setPagesize',
            'instancename' => 'setInstancename'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  内容类型
    * enterpriseProjectId  通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询企业项目ID
    * page  分页查询参数，第page页，默认值为1
    * pagesize  分页查询参数，每页pagesize条记录，默认值为10
    * instancename  模糊查询，独享引擎名称
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'page' => 'getPage',
            'pagesize' => 'getPagesize',
            'instancename' => 'getInstancename'
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
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pagesize'] = isset($data['pagesize']) ? $data['pagesize'] : null;
        $this->container['instancename'] = isset($data['instancename']) ? $data['instancename'] : null;
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
    *  通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询企业项目ID
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
    * @param string|null $enterpriseProjectId 通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询通过企业项目管理服务的查询企业项目列表接口ListEnterpriseProject查询企业项目ID
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
    *  分页查询参数，第page页，默认值为1
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
    * @param int|null $page 分页查询参数，第page页，默认值为1
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
    *  分页查询参数，每页pagesize条记录，默认值为10
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
    * @param int|null $pagesize 分页查询参数，每页pagesize条记录，默认值为10
    *
    * @return $this
    */
    public function setPagesize($pagesize)
    {
        $this->container['pagesize'] = $pagesize;
        return $this;
    }

    /**
    * Gets instancename
    *  模糊查询，独享引擎名称
    *
    * @return string|null
    */
    public function getInstancename()
    {
        return $this->container['instancename'];
    }

    /**
    * Sets instancename
    *
    * @param string|null $instancename 模糊查询，独享引擎名称
    *
    * @return $this
    */
    public function setInstancename($instancename)
    {
        $this->container['instancename'] = $instancename;
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

