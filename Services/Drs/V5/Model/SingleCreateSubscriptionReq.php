<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SingleCreateSubscriptionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SingleCreateSubscriptionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * description  任务描述
    * instanceType  实例类型，仅支持rds
    * enterpriseProjectId  企业项目id
    * tags  标签
    * sourceEndpointInfo  sourceEndpointInfo
    * isGrantNewAgency  是否创建委托，取值： - true：创建 - false：不创建 默认为false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'instanceType' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Drs\V5\Model\ResourceTag[]',
            'sourceEndpointInfo' => '\HuaweiCloud\SDK\Drs\V5\Model\SubscriptionSourceEndpointInfo',
            'isGrantNewAgency' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * description  任务描述
    * instanceType  实例类型，仅支持rds
    * enterpriseProjectId  企业项目id
    * tags  标签
    * sourceEndpointInfo  sourceEndpointInfo
    * isGrantNewAgency  是否创建委托，取值： - true：创建 - false：不创建 默认为false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'instanceType' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'sourceEndpointInfo' => null,
        'isGrantNewAgency' => null
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
    * name  任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * description  任务描述
    * instanceType  实例类型，仅支持rds
    * enterpriseProjectId  企业项目id
    * tags  标签
    * sourceEndpointInfo  sourceEndpointInfo
    * isGrantNewAgency  是否创建委托，取值： - true：创建 - false：不创建 默认为false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'instanceType' => 'instance_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'sourceEndpointInfo' => 'source_endpoint_info',
            'isGrantNewAgency' => 'is_grant_new_agency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * description  任务描述
    * instanceType  实例类型，仅支持rds
    * enterpriseProjectId  企业项目id
    * tags  标签
    * sourceEndpointInfo  sourceEndpointInfo
    * isGrantNewAgency  是否创建委托，取值： - true：创建 - false：不创建 默认为false
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'instanceType' => 'setInstanceType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'sourceEndpointInfo' => 'setSourceEndpointInfo',
            'isGrantNewAgency' => 'setIsGrantNewAgency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    * description  任务描述
    * instanceType  实例类型，仅支持rds
    * enterpriseProjectId  企业项目id
    * tags  标签
    * sourceEndpointInfo  sourceEndpointInfo
    * isGrantNewAgency  是否创建委托，取值： - true：创建 - false：不创建 默认为false
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'instanceType' => 'getInstanceType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'sourceEndpointInfo' => 'getSourceEndpointInfo',
            'isGrantNewAgency' => 'getIsGrantNewAgency'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['sourceEndpointInfo'] = isset($data['sourceEndpointInfo']) ? $data['sourceEndpointInfo'] : null;
        $this->container['isGrantNewAgency'] = isset($data['isGrantNewAgency']) ? $data['isGrantNewAgency'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['sourceEndpointInfo'] === null) {
            $invalidProperties[] = "'sourceEndpointInfo' can't be null";
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
    *  任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 任务名称 约束：任务名称在4位到50位之间，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。 - 最小长度：4 - 最大长度：50
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
    *  任务描述
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
    * @param string|null $description 任务描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets instanceType
    *  实例类型，仅支持rds
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 实例类型，仅支持rds
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ResourceTag[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets sourceEndpointInfo
    *  sourceEndpointInfo
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\SubscriptionSourceEndpointInfo
    */
    public function getSourceEndpointInfo()
    {
        return $this->container['sourceEndpointInfo'];
    }

    /**
    * Sets sourceEndpointInfo
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\SubscriptionSourceEndpointInfo $sourceEndpointInfo sourceEndpointInfo
    *
    * @return $this
    */
    public function setSourceEndpointInfo($sourceEndpointInfo)
    {
        $this->container['sourceEndpointInfo'] = $sourceEndpointInfo;
        return $this;
    }

    /**
    * Gets isGrantNewAgency
    *  是否创建委托，取值： - true：创建 - false：不创建 默认为false
    *
    * @return bool|null
    */
    public function getIsGrantNewAgency()
    {
        return $this->container['isGrantNewAgency'];
    }

    /**
    * Sets isGrantNewAgency
    *
    * @param bool|null $isGrantNewAgency 是否创建委托，取值： - true：创建 - false：不创建 默认为false
    *
    * @return $this
    */
    public function setIsGrantNewAgency($isGrantNewAgency)
    {
        $this->container['isGrantNewAgency'] = $isGrantNewAgency;
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

