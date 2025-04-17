<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PutResourceGroupReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PutResourceGroupReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  资源分组名称，只能为字母、数字、汉字、-、_，最大长度为128
    * tags  标签动态匹配时的关联标签,type为TAG时该字段不为空
    * enterpriseProjectIdAndTags  资源匹配规则为组合匹配时传入的参数
    * extendRelationIds  智能添加时企业项目匹配传入参数
    * instances  实例名称匹配参数
    * productNames  修改资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。
    * combRelation  combRelation
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'tags' => '\HuaweiCloud\SDK\Ces\V2\Model\ResourceGroupTagRelation[]',
            'enterpriseProjectIdAndTags' => '\HuaweiCloud\SDK\Ces\V2\Model\EnterpriseProjectIdAndTags[]',
            'extendRelationIds' => 'string[]',
            'instances' => '\HuaweiCloud\SDK\Ces\V2\Model\Instance[]',
            'productNames' => 'string',
            'combRelation' => '\HuaweiCloud\SDK\Ces\V2\Model\CombRelation'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  资源分组名称，只能为字母、数字、汉字、-、_，最大长度为128
    * tags  标签动态匹配时的关联标签,type为TAG时该字段不为空
    * enterpriseProjectIdAndTags  资源匹配规则为组合匹配时传入的参数
    * extendRelationIds  智能添加时企业项目匹配传入参数
    * instances  实例名称匹配参数
    * productNames  修改资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。
    * combRelation  combRelation
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'tags' => null,
        'enterpriseProjectIdAndTags' => null,
        'extendRelationIds' => null,
        'instances' => null,
        'productNames' => null,
        'combRelation' => null
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
    * groupName  资源分组名称，只能为字母、数字、汉字、-、_，最大长度为128
    * tags  标签动态匹配时的关联标签,type为TAG时该字段不为空
    * enterpriseProjectIdAndTags  资源匹配规则为组合匹配时传入的参数
    * extendRelationIds  智能添加时企业项目匹配传入参数
    * instances  实例名称匹配参数
    * productNames  修改资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。
    * combRelation  combRelation
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'tags' => 'tags',
            'enterpriseProjectIdAndTags' => 'enterprise_project_id_and_tags',
            'extendRelationIds' => 'extend_relation_ids',
            'instances' => 'instances',
            'productNames' => 'product_names',
            'combRelation' => 'comb_relation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  资源分组名称，只能为字母、数字、汉字、-、_，最大长度为128
    * tags  标签动态匹配时的关联标签,type为TAG时该字段不为空
    * enterpriseProjectIdAndTags  资源匹配规则为组合匹配时传入的参数
    * extendRelationIds  智能添加时企业项目匹配传入参数
    * instances  实例名称匹配参数
    * productNames  修改资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。
    * combRelation  combRelation
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'tags' => 'setTags',
            'enterpriseProjectIdAndTags' => 'setEnterpriseProjectIdAndTags',
            'extendRelationIds' => 'setExtendRelationIds',
            'instances' => 'setInstances',
            'productNames' => 'setProductNames',
            'combRelation' => 'setCombRelation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  资源分组名称，只能为字母、数字、汉字、-、_，最大长度为128
    * tags  标签动态匹配时的关联标签,type为TAG时该字段不为空
    * enterpriseProjectIdAndTags  资源匹配规则为组合匹配时传入的参数
    * extendRelationIds  智能添加时企业项目匹配传入参数
    * instances  实例名称匹配参数
    * productNames  修改资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。
    * combRelation  combRelation
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'tags' => 'getTags',
            'enterpriseProjectIdAndTags' => 'getEnterpriseProjectIdAndTags',
            'extendRelationIds' => 'getExtendRelationIds',
            'instances' => 'getInstances',
            'productNames' => 'getProductNames',
            'combRelation' => 'getCombRelation'
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectIdAndTags'] = isset($data['enterpriseProjectIdAndTags']) ? $data['enterpriseProjectIdAndTags'] : null;
        $this->container['extendRelationIds'] = isset($data['extendRelationIds']) ? $data['extendRelationIds'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['productNames'] = isset($data['productNames']) ? $data['productNames'] : null;
        $this->container['combRelation'] = isset($data['combRelation']) ? $data['combRelation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
        }
            if ((mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['productNames']) && (mb_strlen($this->container['productNames']) > 10240)) {
                $invalidProperties[] = "invalid value for 'productNames', the character length must be smaller than or equal to 10240.";
            }
            if (!is_null($this->container['productNames']) && (mb_strlen($this->container['productNames']) < 0)) {
                $invalidProperties[] = "invalid value for 'productNames', the character length must be bigger than or equal to 0.";
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
    * Gets groupName
    *  资源分组名称，只能为字母、数字、汉字、-、_，最大长度为128
    *
    * @return string
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string $groupName 资源分组名称，只能为字母、数字、汉字、-、_，最大长度为128
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets tags
    *  标签动态匹配时的关联标签,type为TAG时该字段不为空
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ResourceGroupTagRelation[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ResourceGroupTagRelation[]|null $tags 标签动态匹配时的关联标签,type为TAG时该字段不为空
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enterpriseProjectIdAndTags
    *  资源匹配规则为组合匹配时传入的参数
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\EnterpriseProjectIdAndTags[]|null
    */
    public function getEnterpriseProjectIdAndTags()
    {
        return $this->container['enterpriseProjectIdAndTags'];
    }

    /**
    * Sets enterpriseProjectIdAndTags
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\EnterpriseProjectIdAndTags[]|null $enterpriseProjectIdAndTags 资源匹配规则为组合匹配时传入的参数
    *
    * @return $this
    */
    public function setEnterpriseProjectIdAndTags($enterpriseProjectIdAndTags)
    {
        $this->container['enterpriseProjectIdAndTags'] = $enterpriseProjectIdAndTags;
        return $this;
    }

    /**
    * Gets extendRelationIds
    *  智能添加时企业项目匹配传入参数
    *
    * @return string[]|null
    */
    public function getExtendRelationIds()
    {
        return $this->container['extendRelationIds'];
    }

    /**
    * Sets extendRelationIds
    *
    * @param string[]|null $extendRelationIds 智能添加时企业项目匹配传入参数
    *
    * @return $this
    */
    public function setExtendRelationIds($extendRelationIds)
    {
        $this->container['extendRelationIds'] = $extendRelationIds;
        return $this;
    }

    /**
    * Gets instances
    *  实例名称匹配参数
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\Instance[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\Instance[]|null $instances 实例名称匹配参数
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets productNames
    *  修改资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。
    *
    * @return string|null
    */
    public function getProductNames()
    {
        return $this->container['productNames'];
    }

    /**
    * Sets productNames
    *
    * @param string|null $productNames 修改资源层级为云产品时的云产品的取值，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"。多个云产品则用“;”隔开，如\"SERVICE.BMS,instance_id;SYS.ECS,instance_id\"。
    *
    * @return $this
    */
    public function setProductNames($productNames)
    {
        $this->container['productNames'] = $productNames;
        return $this;
    }

    /**
    * Gets combRelation
    *  combRelation
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\CombRelation|null
    */
    public function getCombRelation()
    {
        return $this->container['combRelation'];
    }

    /**
    * Sets combRelation
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\CombRelation|null $combRelation combRelation
    *
    * @return $this
    */
    public function setCombRelation($combRelation)
    {
        $this->container['combRelation'] = $combRelation;
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

