<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlarmRulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlarmRulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmId  告警规则ID
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * resourceId  告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    * enterpriseProjectId  企业项目ID
    * productName  产品层级跨纬规则查询时支持产品名称查询，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  产品层级跨纬规则查询时支持规则所属类型查询，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmId' => 'string',
            'name' => 'string',
            'namespace' => 'string',
            'resourceId' => 'string',
            'enterpriseProjectId' => 'string',
            'productName' => 'string',
            'resourceLevel' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmId  告警规则ID
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * resourceId  告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    * enterpriseProjectId  企业项目ID
    * productName  产品层级跨纬规则查询时支持产品名称查询，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  产品层级跨纬规则查询时支持规则所属类型查询，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmId' => null,
        'name' => null,
        'namespace' => null,
        'resourceId' => null,
        'enterpriseProjectId' => null,
        'productName' => null,
        'resourceLevel' => null,
        'offset' => null,
        'limit' => null
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
    * alarmId  告警规则ID
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * resourceId  告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    * enterpriseProjectId  企业项目ID
    * productName  产品层级跨纬规则查询时支持产品名称查询，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  产品层级跨纬规则查询时支持规则所属类型查询，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmId' => 'alarm_id',
            'name' => 'name',
            'namespace' => 'namespace',
            'resourceId' => 'resource_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'productName' => 'product_name',
            'resourceLevel' => 'resource_level',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmId  告警规则ID
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * resourceId  告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    * enterpriseProjectId  企业项目ID
    * productName  产品层级跨纬规则查询时支持产品名称查询，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  产品层级跨纬规则查询时支持规则所属类型查询，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmId' => 'setAlarmId',
            'name' => 'setName',
            'namespace' => 'setNamespace',
            'resourceId' => 'setResourceId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'productName' => 'setProductName',
            'resourceLevel' => 'setResourceLevel',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmId  告警规则ID
    * name  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    * namespace  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    * resourceId  告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    * enterpriseProjectId  企业项目ID
    * productName  产品层级跨纬规则查询时支持产品名称查询，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceLevel  产品层级跨纬规则查询时支持规则所属类型查询，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
    * offset  分页偏移量
    * limit  分页大小
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmId' => 'getAlarmId',
            'name' => 'getName',
            'namespace' => 'getNamespace',
            'resourceId' => 'getResourceId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'productName' => 'getProductName',
            'resourceLevel' => 'getResourceLevel',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
    const RESOURCE_LEVEL_PRODUCT = 'product';
    const RESOURCE_LEVEL_DIMENSION = 'dimension';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceLevelAllowableValues()
    {
        return [
            self::RESOURCE_LEVEL_PRODUCT,
            self::RESOURCE_LEVEL_DIMENSION,
        ];
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
        $this->container['alarmId'] = isset($data['alarmId']) ? $data['alarmId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['resourceLevel'] = isset($data['resourceLevel']) ? $data['resourceLevel'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['alarmId']) && !preg_match("/^al([0-9A-Za-z]){22}$/", $this->container['alarmId'])) {
                $invalidProperties[] = "invalid value for 'alarmId', must be conform to the pattern /^al([0-9A-Za-z]){22}$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 32)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^((([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*\\.([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*)|)$/.";
            }
            if (!is_null($this->container['resourceId']) && (mb_strlen($this->container['resourceId']) > 700)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 700.";
            }
            if (!is_null($this->container['resourceId']) && !preg_match("/^([a-z]|[A-Z]|[0-9]|_|-|:|,|\\.|)+$/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /^([a-z]|[A-Z]|[0-9]|_|-|:|,|\\.|)+$/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) > 128)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) < 0)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getResourceLevelAllowableValues();
                if (!is_null($this->container['resourceLevel']) && !in_array($this->container['resourceLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['offset']) && ($this->container['offset'] > 10000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets alarmId
    *  告警规则ID
    *
    * @return string|null
    */
    public function getAlarmId()
    {
        return $this->container['alarmId'];
    }

    /**
    * Sets alarmId
    *
    * @param string|null $alarmId 告警规则ID
    *
    * @return $this
    */
    public function setAlarmId($alarmId)
    {
        $this->container['alarmId'] = $alarmId;
        return $this;
    }

    /**
    * Gets name
    *  告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
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
    * @param string|null $name 告警名称, 只能包含0-9/a-z/A-Z/_/-或汉字，长度1-128
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets namespace
    *  查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace 查询服务的命名空间，各服务命名空间请参考“[服务命名空间](ces_03_0059.xml)”
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets resourceId
    *  告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 告警资源ID，多维度情况按字母升序排列并使用逗号分隔
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
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
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets productName
    *  产品层级跨纬规则查询时支持产品名称查询，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    *
    * @return string|null
    */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
    * Sets productName
    *
    * @param string|null $productName 产品层级跨纬规则查询时支持产品名称查询，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets resourceLevel
    *  产品层级跨纬规则查询时支持规则所属类型查询，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
    *
    * @return string|null
    */
    public function getResourceLevel()
    {
        return $this->container['resourceLevel'];
    }

    /**
    * Sets resourceLevel
    *
    * @param string|null $resourceLevel 产品层级跨纬规则查询时支持规则所属类型查询，resource_level取值为product即为产品层级跨纬规则，不填或者取值为dimension则为旧的规则类型
    *
    * @return $this
    */
    public function setResourceLevel($resourceLevel)
    {
        $this->container['resourceLevel'] = $resourceLevel;
        return $this;
    }

    /**
    * Gets offset
    *  分页偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 分页偏移量
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
    *  分页大小
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 分页大小
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

