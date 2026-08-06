<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PremiumWafPoolResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PremiumWafPoolResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 实例组ID，用于唯一标识一个实例组。 **取值范围：** 不涉及
    * name  **参数解释：** 实例组名称。 **取值范围：** 不涉及
    * region  **参数解释：** 实例组所在的区域（Region）。 **取值范围：** 不涉及
    * type  **参数解释：** 实例组类型。 **取值范围：** - elb：基础elb类型 - elb-v2：elb-v2类型 - elb-shadow：saas化elb类型 - standard-container：反向代理独享引擎组（云内，承载租户专用） - standard-cloud：反向代理独享引擎组（云内） - standard：反向代理独享引擎组（云外） - detector-cloud：旁路检测独享引擎组（云内） - detector：旁路检测独享引擎组（云外）
    * vpcId  **参数解释：** 实例组关联的虚拟私有云ID。 **取值范围：** 不涉及
    * description  **参数解释：** 实例组的描述信息。 **取值范围：** 不涉及
    * hosts  **参数解释：** 实例组关联的防护域名列表。 **取值范围：** 不涉及
    * instances  **参数解释：** 实例组关联的引擎实例列表。 **取值范围：** 不涉及
    * enterpriseProjectId  **参数解释：** 实例组关联的企业项目ID。 **取值范围：** - 0：代表default企业项目 - 其他为企业项目ID，长度为36个字符
    * createTime  **参数解释：** 实例组创建时间。Unix时间戳格式，单位为毫秒（ms）。 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'region' => 'string',
            'type' => 'string',
            'vpcId' => 'string',
            'description' => 'string',
            'hosts' => '\HuaweiCloud\SDK\Waf\V1\Model\IdNameEntry[]',
            'instances' => '\HuaweiCloud\SDK\Waf\V1\Model\IdNameEntry[]',
            'enterpriseProjectId' => 'string',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 实例组ID，用于唯一标识一个实例组。 **取值范围：** 不涉及
    * name  **参数解释：** 实例组名称。 **取值范围：** 不涉及
    * region  **参数解释：** 实例组所在的区域（Region）。 **取值范围：** 不涉及
    * type  **参数解释：** 实例组类型。 **取值范围：** - elb：基础elb类型 - elb-v2：elb-v2类型 - elb-shadow：saas化elb类型 - standard-container：反向代理独享引擎组（云内，承载租户专用） - standard-cloud：反向代理独享引擎组（云内） - standard：反向代理独享引擎组（云外） - detector-cloud：旁路检测独享引擎组（云内） - detector：旁路检测独享引擎组（云外）
    * vpcId  **参数解释：** 实例组关联的虚拟私有云ID。 **取值范围：** 不涉及
    * description  **参数解释：** 实例组的描述信息。 **取值范围：** 不涉及
    * hosts  **参数解释：** 实例组关联的防护域名列表。 **取值范围：** 不涉及
    * instances  **参数解释：** 实例组关联的引擎实例列表。 **取值范围：** 不涉及
    * enterpriseProjectId  **参数解释：** 实例组关联的企业项目ID。 **取值范围：** - 0：代表default企业项目 - 其他为企业项目ID，长度为36个字符
    * createTime  **参数解释：** 实例组创建时间。Unix时间戳格式，单位为毫秒（ms）。 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'region' => null,
        'type' => null,
        'vpcId' => null,
        'description' => null,
        'hosts' => null,
        'instances' => null,
        'enterpriseProjectId' => null,
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
    * id  **参数解释：** 实例组ID，用于唯一标识一个实例组。 **取值范围：** 不涉及
    * name  **参数解释：** 实例组名称。 **取值范围：** 不涉及
    * region  **参数解释：** 实例组所在的区域（Region）。 **取值范围：** 不涉及
    * type  **参数解释：** 实例组类型。 **取值范围：** - elb：基础elb类型 - elb-v2：elb-v2类型 - elb-shadow：saas化elb类型 - standard-container：反向代理独享引擎组（云内，承载租户专用） - standard-cloud：反向代理独享引擎组（云内） - standard：反向代理独享引擎组（云外） - detector-cloud：旁路检测独享引擎组（云内） - detector：旁路检测独享引擎组（云外）
    * vpcId  **参数解释：** 实例组关联的虚拟私有云ID。 **取值范围：** 不涉及
    * description  **参数解释：** 实例组的描述信息。 **取值范围：** 不涉及
    * hosts  **参数解释：** 实例组关联的防护域名列表。 **取值范围：** 不涉及
    * instances  **参数解释：** 实例组关联的引擎实例列表。 **取值范围：** 不涉及
    * enterpriseProjectId  **参数解释：** 实例组关联的企业项目ID。 **取值范围：** - 0：代表default企业项目 - 其他为企业项目ID，长度为36个字符
    * createTime  **参数解释：** 实例组创建时间。Unix时间戳格式，单位为毫秒（ms）。 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'region' => 'region',
            'type' => 'type',
            'vpcId' => 'vpc_id',
            'description' => 'description',
            'hosts' => 'hosts',
            'instances' => 'instances',
            'enterpriseProjectId' => 'enterprise_project_id',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 实例组ID，用于唯一标识一个实例组。 **取值范围：** 不涉及
    * name  **参数解释：** 实例组名称。 **取值范围：** 不涉及
    * region  **参数解释：** 实例组所在的区域（Region）。 **取值范围：** 不涉及
    * type  **参数解释：** 实例组类型。 **取值范围：** - elb：基础elb类型 - elb-v2：elb-v2类型 - elb-shadow：saas化elb类型 - standard-container：反向代理独享引擎组（云内，承载租户专用） - standard-cloud：反向代理独享引擎组（云内） - standard：反向代理独享引擎组（云外） - detector-cloud：旁路检测独享引擎组（云内） - detector：旁路检测独享引擎组（云外）
    * vpcId  **参数解释：** 实例组关联的虚拟私有云ID。 **取值范围：** 不涉及
    * description  **参数解释：** 实例组的描述信息。 **取值范围：** 不涉及
    * hosts  **参数解释：** 实例组关联的防护域名列表。 **取值范围：** 不涉及
    * instances  **参数解释：** 实例组关联的引擎实例列表。 **取值范围：** 不涉及
    * enterpriseProjectId  **参数解释：** 实例组关联的企业项目ID。 **取值范围：** - 0：代表default企业项目 - 其他为企业项目ID，长度为36个字符
    * createTime  **参数解释：** 实例组创建时间。Unix时间戳格式，单位为毫秒（ms）。 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'region' => 'setRegion',
            'type' => 'setType',
            'vpcId' => 'setVpcId',
            'description' => 'setDescription',
            'hosts' => 'setHosts',
            'instances' => 'setInstances',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 实例组ID，用于唯一标识一个实例组。 **取值范围：** 不涉及
    * name  **参数解释：** 实例组名称。 **取值范围：** 不涉及
    * region  **参数解释：** 实例组所在的区域（Region）。 **取值范围：** 不涉及
    * type  **参数解释：** 实例组类型。 **取值范围：** - elb：基础elb类型 - elb-v2：elb-v2类型 - elb-shadow：saas化elb类型 - standard-container：反向代理独享引擎组（云内，承载租户专用） - standard-cloud：反向代理独享引擎组（云内） - standard：反向代理独享引擎组（云外） - detector-cloud：旁路检测独享引擎组（云内） - detector：旁路检测独享引擎组（云外）
    * vpcId  **参数解释：** 实例组关联的虚拟私有云ID。 **取值范围：** 不涉及
    * description  **参数解释：** 实例组的描述信息。 **取值范围：** 不涉及
    * hosts  **参数解释：** 实例组关联的防护域名列表。 **取值范围：** 不涉及
    * instances  **参数解释：** 实例组关联的引擎实例列表。 **取值范围：** 不涉及
    * enterpriseProjectId  **参数解释：** 实例组关联的企业项目ID。 **取值范围：** - 0：代表default企业项目 - 其他为企业项目ID，长度为36个字符
    * createTime  **参数解释：** 实例组创建时间。Unix时间戳格式，单位为毫秒（ms）。 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'region' => 'getRegion',
            'type' => 'getType',
            'vpcId' => 'getVpcId',
            'description' => 'getDescription',
            'hosts' => 'getHosts',
            'instances' => 'getInstances',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
    * Gets id
    *  **参数解释：** 实例组ID，用于唯一标识一个实例组。 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释：** 实例组ID，用于唯一标识一个实例组。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 实例组名称。 **取值范围：** 不涉及
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
    * @param string|null $name **参数解释：** 实例组名称。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释：** 实例组所在的区域（Region）。 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释：** 实例组所在的区域（Region）。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 实例组类型。 **取值范围：** - elb：基础elb类型 - elb-v2：elb-v2类型 - elb-shadow：saas化elb类型 - standard-container：反向代理独享引擎组（云内，承载租户专用） - standard-cloud：反向代理独享引擎组（云内） - standard：反向代理独享引擎组（云外） - detector-cloud：旁路检测独享引擎组（云内） - detector：旁路检测独享引擎组（云外）
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
    * @param string|null $type **参数解释：** 实例组类型。 **取值范围：** - elb：基础elb类型 - elb-v2：elb-v2类型 - elb-shadow：saas化elb类型 - standard-container：反向代理独享引擎组（云内，承载租户专用） - standard-cloud：反向代理独享引擎组（云内） - standard：反向代理独享引擎组（云外） - detector-cloud：旁路检测独享引擎组（云内） - detector：旁路检测独享引擎组（云外）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释：** 实例组关联的虚拟私有云ID。 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId **参数解释：** 实例组关联的虚拟私有云ID。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 实例组的描述信息。 **取值范围：** 不涉及
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
    * @param string|null $description **参数解释：** 实例组的描述信息。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets hosts
    *  **参数解释：** 实例组关联的防护域名列表。 **取值范围：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\IdNameEntry[]|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\IdNameEntry[]|null $hosts **参数解释：** 实例组关联的防护域名列表。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets instances
    *  **参数解释：** 实例组关联的引擎实例列表。 **取值范围：** 不涉及
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\IdNameEntry[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\IdNameEntry[]|null $instances **参数解释：** 实例组关联的引擎实例列表。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释：** 实例组关联的企业项目ID。 **取值范围：** - 0：代表default企业项目 - 其他为企业项目ID，长度为36个字符
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
    * @param string|null $enterpriseProjectId **参数解释：** 实例组关联的企业项目ID。 **取值范围：** - 0：代表default企业项目 - 其他为企业项目ID，长度为36个字符
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释：** 实例组创建时间。Unix时间戳格式，单位为毫秒（ms）。 **取值范围：** 不涉及
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
    * @param int|null $createTime **参数解释：** 实例组创建时间。Unix时间戳格式，单位为毫秒（ms）。 **取值范围：** 不涉及
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

