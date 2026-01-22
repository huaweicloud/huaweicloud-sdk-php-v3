<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFirewallDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFirewallDetailRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 必须为数字 **取值范围**： 大于或等于0 **默认取值**： 0
    * limit  **参数解释**： 每页显示个数，范围为1-1024 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceType  **参数解释**： 服务类型 **约束限制**： 目前仅支持0互联网防护 **取值范围**： 0 **默认取值**： 0
    * enterpriseProjectId  **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0：用户未开启企业项目
    * fwInstanceId  **参数解释**： 防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获取 **约束限制**： 默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 防火墙名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'serviceType' => 'int',
            'enterpriseProjectId' => 'string',
            'fwInstanceId' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 必须为数字 **取值范围**： 大于或等于0 **默认取值**： 0
    * limit  **参数解释**： 每页显示个数，范围为1-1024 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceType  **参数解释**： 服务类型 **约束限制**： 目前仅支持0互联网防护 **取值范围**： 0 **默认取值**： 0
    * enterpriseProjectId  **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0：用户未开启企业项目
    * fwInstanceId  **参数解释**： 防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获取 **约束限制**： 默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 防火墙名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'serviceType' => 'int32',
        'enterpriseProjectId' => null,
        'fwInstanceId' => null,
        'name' => null
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
    * projectId  **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 必须为数字 **取值范围**： 大于或等于0 **默认取值**： 0
    * limit  **参数解释**： 每页显示个数，范围为1-1024 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceType  **参数解释**： 服务类型 **约束限制**： 目前仅支持0互联网防护 **取值范围**： 0 **默认取值**： 0
    * enterpriseProjectId  **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0：用户未开启企业项目
    * fwInstanceId  **参数解释**： 防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获取 **约束限制**： 默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 防火墙名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'serviceType' => 'service_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'fwInstanceId' => 'fw_instance_id',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 必须为数字 **取值范围**： 大于或等于0 **默认取值**： 0
    * limit  **参数解释**： 每页显示个数，范围为1-1024 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceType  **参数解释**： 服务类型 **约束限制**： 目前仅支持0互联网防护 **取值范围**： 0 **默认取值**： 0
    * enterpriseProjectId  **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0：用户未开启企业项目
    * fwInstanceId  **参数解释**： 防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获取 **约束限制**： 默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 防火墙名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'serviceType' => 'setServiceType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'fwInstanceId' => 'setFwInstanceId',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * offset  **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 必须为数字 **取值范围**： 大于或等于0 **默认取值**： 0
    * limit  **参数解释**： 每页显示个数，范围为1-1024 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * serviceType  **参数解释**： 服务类型 **约束限制**： 目前仅支持0互联网防护 **取值范围**： 0 **默认取值**： 0
    * enterpriseProjectId  **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0：用户未开启企业项目
    * fwInstanceId  **参数解释**： 防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获取 **约束限制**： 默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息 **取值范围**： 不涉及 **默认取值**： 不涉及
    * name  **参数解释**： 防火墙名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'serviceType' => 'getServiceType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'fwInstanceId' => 'getFwInstanceId',
            'name' => 'getName'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['serviceType'] === null) {
            $invalidProperties[] = "'serviceType' can't be null";
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
    * Gets projectId
    *  **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 必须为数字 **取值范围**： 大于或等于0 **默认取值**： 0
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset **参数解释**： 偏移量：指定返回记录的开始位置 **约束限制**： 必须为数字 **取值范围**： 大于或等于0 **默认取值**： 0
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
    *  **参数解释**： 每页显示个数，范围为1-1024 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释**： 每页显示个数，范围为1-1024 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets serviceType
    *  **参数解释**： 服务类型 **约束限制**： 目前仅支持0互联网防护 **取值范围**： 0 **默认取值**： 0
    *
    * @return int
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param int $serviceType **参数解释**： 服务类型 **约束限制**： 目前仅支持0互联网防护 **取值范围**： 0 **默认取值**： 0
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0：用户未开启企业项目
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
    * @param string|null $enterpriseProjectId **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0：用户未开启企业项目
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets fwInstanceId
    *  **参数解释**： 防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获取 **约束限制**： 默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string|null $fwInstanceId **参数解释**： 防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获取 **约束限制**： 默认情况下，fw_instance_Id为空时，返回账号下第一个墙的信息；fw_instance_Id非空时，返回与fw_instance_Id对应墙的信息 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 防火墙名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
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
    * @param string|null $name **参数解释**： 防火墙名称 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

