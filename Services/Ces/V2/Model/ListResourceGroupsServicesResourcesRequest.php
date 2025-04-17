<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResourceGroupsServicesResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResourceGroupsServicesResourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    * service  服务类别，如SYS.ECS
    * dimName  资源维度信息，多个维度按字母序使用逗号分割
    * limit  分页查询时每页的条目数，取值[1,100]，默认值为100
    * offset  分页查询时查询的起始位置，表示从第几条数据开始，默认为0
    * status  按状态信息进行过滤，取值只能为health（已设置告警规则且无告警触发的资源）、unhealthy（已设置告警规则且有告警触发的资源）、no_alarm_rule（未设置告警规则的资源）
    * dimValue  资源维度值，不支持模糊匹配，但是多维度资源可以只指定一个维度值
    * tag  资源的标签信息，格式：\"[key]\":\"[value]\"，样例参考：\"ssss\":\"1111\"
    * extendRelationId  企业项目ID
    * productName  资源分组的云产品，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceName  资源名称
    * eventStatus  按事件告警状态信息进行过滤，取值只能为health（已设置事件告警规则且无事件告警触发的资源）、unhealthy（已设置事件告警规则且有事件告警触发的资源）、no_alarm_rule（未设置事件告警规则的资源）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'service' => 'string',
            'dimName' => 'string',
            'limit' => 'string',
            'offset' => 'int',
            'status' => 'string',
            'dimValue' => 'string',
            'tag' => 'string',
            'extendRelationId' => 'string',
            'productName' => 'string',
            'resourceName' => 'string',
            'eventStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    * service  服务类别，如SYS.ECS
    * dimName  资源维度信息，多个维度按字母序使用逗号分割
    * limit  分页查询时每页的条目数，取值[1,100]，默认值为100
    * offset  分页查询时查询的起始位置，表示从第几条数据开始，默认为0
    * status  按状态信息进行过滤，取值只能为health（已设置告警规则且无告警触发的资源）、unhealthy（已设置告警规则且有告警触发的资源）、no_alarm_rule（未设置告警规则的资源）
    * dimValue  资源维度值，不支持模糊匹配，但是多维度资源可以只指定一个维度值
    * tag  资源的标签信息，格式：\"[key]\":\"[value]\"，样例参考：\"ssss\":\"1111\"
    * extendRelationId  企业项目ID
    * productName  资源分组的云产品，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceName  资源名称
    * eventStatus  按事件告警状态信息进行过滤，取值只能为health（已设置事件告警规则且无事件告警触发的资源）、unhealthy（已设置事件告警规则且有事件告警触发的资源）、no_alarm_rule（未设置事件告警规则的资源）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'service' => null,
        'dimName' => null,
        'limit' => null,
        'offset' => 'int32',
        'status' => null,
        'dimValue' => null,
        'tag' => null,
        'extendRelationId' => null,
        'productName' => null,
        'resourceName' => null,
        'eventStatus' => null
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
    * groupId  资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    * service  服务类别，如SYS.ECS
    * dimName  资源维度信息，多个维度按字母序使用逗号分割
    * limit  分页查询时每页的条目数，取值[1,100]，默认值为100
    * offset  分页查询时查询的起始位置，表示从第几条数据开始，默认为0
    * status  按状态信息进行过滤，取值只能为health（已设置告警规则且无告警触发的资源）、unhealthy（已设置告警规则且有告警触发的资源）、no_alarm_rule（未设置告警规则的资源）
    * dimValue  资源维度值，不支持模糊匹配，但是多维度资源可以只指定一个维度值
    * tag  资源的标签信息，格式：\"[key]\":\"[value]\"，样例参考：\"ssss\":\"1111\"
    * extendRelationId  企业项目ID
    * productName  资源分组的云产品，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceName  资源名称
    * eventStatus  按事件告警状态信息进行过滤，取值只能为health（已设置事件告警规则且无事件告警触发的资源）、unhealthy（已设置事件告警规则且有事件告警触发的资源）、no_alarm_rule（未设置事件告警规则的资源）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'service' => 'service',
            'dimName' => 'dim_name',
            'limit' => 'limit',
            'offset' => 'offset',
            'status' => 'status',
            'dimValue' => 'dim_value',
            'tag' => 'tag',
            'extendRelationId' => 'extend_relation_id',
            'productName' => 'product_name',
            'resourceName' => 'resource_name',
            'eventStatus' => 'event_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    * service  服务类别，如SYS.ECS
    * dimName  资源维度信息，多个维度按字母序使用逗号分割
    * limit  分页查询时每页的条目数，取值[1,100]，默认值为100
    * offset  分页查询时查询的起始位置，表示从第几条数据开始，默认为0
    * status  按状态信息进行过滤，取值只能为health（已设置告警规则且无告警触发的资源）、unhealthy（已设置告警规则且有告警触发的资源）、no_alarm_rule（未设置告警规则的资源）
    * dimValue  资源维度值，不支持模糊匹配，但是多维度资源可以只指定一个维度值
    * tag  资源的标签信息，格式：\"[key]\":\"[value]\"，样例参考：\"ssss\":\"1111\"
    * extendRelationId  企业项目ID
    * productName  资源分组的云产品，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceName  资源名称
    * eventStatus  按事件告警状态信息进行过滤，取值只能为health（已设置事件告警规则且无事件告警触发的资源）、unhealthy（已设置事件告警规则且有事件告警触发的资源）、no_alarm_rule（未设置事件告警规则的资源）
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'service' => 'setService',
            'dimName' => 'setDimName',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'status' => 'setStatus',
            'dimValue' => 'setDimValue',
            'tag' => 'setTag',
            'extendRelationId' => 'setExtendRelationId',
            'productName' => 'setProductName',
            'resourceName' => 'setResourceName',
            'eventStatus' => 'setEventStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    * service  服务类别，如SYS.ECS
    * dimName  资源维度信息，多个维度按字母序使用逗号分割
    * limit  分页查询时每页的条目数，取值[1,100]，默认值为100
    * offset  分页查询时查询的起始位置，表示从第几条数据开始，默认为0
    * status  按状态信息进行过滤，取值只能为health（已设置告警规则且无告警触发的资源）、unhealthy（已设置告警规则且有告警触发的资源）、no_alarm_rule（未设置告警规则的资源）
    * dimValue  资源维度值，不支持模糊匹配，但是多维度资源可以只指定一个维度值
    * tag  资源的标签信息，格式：\"[key]\":\"[value]\"，样例参考：\"ssss\":\"1111\"
    * extendRelationId  企业项目ID
    * productName  资源分组的云产品，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    * resourceName  资源名称
    * eventStatus  按事件告警状态信息进行过滤，取值只能为health（已设置事件告警规则且无事件告警触发的资源）、unhealthy（已设置事件告警规则且有事件告警触发的资源）、no_alarm_rule（未设置事件告警规则的资源）
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'service' => 'getService',
            'dimName' => 'getDimName',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'status' => 'getStatus',
            'dimValue' => 'getDimValue',
            'tag' => 'getTag',
            'extendRelationId' => 'getExtendRelationId',
            'productName' => 'getProductName',
            'resourceName' => 'getResourceName',
            'eventStatus' => 'getEventStatus'
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
    const STATUS_HEALTH = 'health';
    const STATUS_UNHEALTHY = 'unhealthy';
    const STATUS_NO_ALARM_RULE = 'no_alarm_rule';
    const EVENT_STATUS_HEALTH = 'health';
    const EVENT_STATUS_UNHEALTHY = 'unhealthy';
    const EVENT_STATUS_NO_ALARM_RULE = 'no_alarm_rule';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_HEALTH,
            self::STATUS_UNHEALTHY,
            self::STATUS_NO_ALARM_RULE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEventStatusAllowableValues()
    {
        return [
            self::EVENT_STATUS_HEALTH,
            self::EVENT_STATUS_UNHEALTHY,
            self::EVENT_STATUS_NO_ALARM_RULE,
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['dimName'] = isset($data['dimName']) ? $data['dimName'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['dimValue'] = isset($data['dimValue']) ? $data['dimValue'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['extendRelationId'] = isset($data['extendRelationId']) ? $data['extendRelationId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['eventStatus'] = isset($data['eventStatus']) ? $data['eventStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if ((mb_strlen($this->container['groupId']) > 24)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 24.";
            }
            if ((mb_strlen($this->container['groupId']) < 2)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['service'] === null) {
            $invalidProperties[] = "'service' can't be null";
        }
            if ((mb_strlen($this->container['service']) > 32)) {
                $invalidProperties[] = "invalid value for 'service', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['service']) < 3)) {
                $invalidProperties[] = "invalid value for 'service', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['dimName']) && (mb_strlen($this->container['dimName']) > 131)) {
                $invalidProperties[] = "invalid value for 'dimName', the character length must be smaller than or equal to 131.";
            }
            if (!is_null($this->container['dimName']) && (mb_strlen($this->container['dimName']) < 1)) {
                $invalidProperties[] = "invalid value for 'dimName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) > 100)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && (mb_strlen($this->container['limit']) < 1)) {
                $invalidProperties[] = "invalid value for 'limit', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 10000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['dimValue']) && (mb_strlen($this->container['dimValue']) > 1027)) {
                $invalidProperties[] = "invalid value for 'dimValue', the character length must be smaller than or equal to 1027.";
            }
            if (!is_null($this->container['dimValue']) && (mb_strlen($this->container['dimValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'dimValue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 500)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 0)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['extendRelationId']) && (mb_strlen($this->container['extendRelationId']) > 128)) {
                $invalidProperties[] = "invalid value for 'extendRelationId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['extendRelationId']) && (mb_strlen($this->container['extendRelationId']) < 0)) {
                $invalidProperties[] = "invalid value for 'extendRelationId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) > 128)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['productName']) && (mb_strlen($this->container['productName']) < 0)) {
                $invalidProperties[] = "invalid value for 'productName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceName']) && (mb_strlen($this->container['resourceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceName']) && !preg_match("/^$|^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-|\\\\.|)+$/", $this->container['resourceName'])) {
                $invalidProperties[] = "invalid value for 'resourceName', must be conform to the pattern /^$|^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-|\\\\.|)+$/.";
            }
            $allowedValues = $this->getEventStatusAllowableValues();
                if (!is_null($this->container['eventStatus']) && !in_array($this->container['eventStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'eventStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets groupId
    *  资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 资源分组ID，以rg开头，后跟22位由字母或数字组成的字符串
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets service
    *  服务类别，如SYS.ECS
    *
    * @return string
    */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
    * Sets service
    *
    * @param string $service 服务类别，如SYS.ECS
    *
    * @return $this
    */
    public function setService($service)
    {
        $this->container['service'] = $service;
        return $this;
    }

    /**
    * Gets dimName
    *  资源维度信息，多个维度按字母序使用逗号分割
    *
    * @return string|null
    */
    public function getDimName()
    {
        return $this->container['dimName'];
    }

    /**
    * Sets dimName
    *
    * @param string|null $dimName 资源维度信息，多个维度按字母序使用逗号分割
    *
    * @return $this
    */
    public function setDimName($dimName)
    {
        $this->container['dimName'] = $dimName;
        return $this;
    }

    /**
    * Gets limit
    *  分页查询时每页的条目数，取值[1,100]，默认值为100
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 分页查询时每页的条目数，取值[1,100]，默认值为100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  分页查询时查询的起始位置，表示从第几条数据开始，默认为0
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
    * @param int|null $offset 分页查询时查询的起始位置，表示从第几条数据开始，默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets status
    *  按状态信息进行过滤，取值只能为health（已设置告警规则且无告警触发的资源）、unhealthy（已设置告警规则且有告警触发的资源）、no_alarm_rule（未设置告警规则的资源）
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
    * @param string|null $status 按状态信息进行过滤，取值只能为health（已设置告警规则且无告警触发的资源）、unhealthy（已设置告警规则且有告警触发的资源）、no_alarm_rule（未设置告警规则的资源）
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets dimValue
    *  资源维度值，不支持模糊匹配，但是多维度资源可以只指定一个维度值
    *
    * @return string|null
    */
    public function getDimValue()
    {
        return $this->container['dimValue'];
    }

    /**
    * Sets dimValue
    *
    * @param string|null $dimValue 资源维度值，不支持模糊匹配，但是多维度资源可以只指定一个维度值
    *
    * @return $this
    */
    public function setDimValue($dimValue)
    {
        $this->container['dimValue'] = $dimValue;
        return $this;
    }

    /**
    * Gets tag
    *  资源的标签信息，格式：\"[key]\":\"[value]\"，样例参考：\"ssss\":\"1111\"
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 资源的标签信息，格式：\"[key]\":\"[value]\"，样例参考：\"ssss\":\"1111\"
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets extendRelationId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getExtendRelationId()
    {
        return $this->container['extendRelationId'];
    }

    /**
    * Sets extendRelationId
    *
    * @param string|null $extendRelationId 企业项目ID
    *
    * @return $this
    */
    public function setExtendRelationId($extendRelationId)
    {
        $this->container['extendRelationId'] = $extendRelationId;
        return $this;
    }

    /**
    * Gets productName
    *  资源分组的云产品，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
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
    * @param string|null $productName 资源分组的云产品，一般由\"服务命名空间,服务首层维度名称\"组成，如\"SYS.ECS,instance_id\"
    *
    * @return $this
    */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets eventStatus
    *  按事件告警状态信息进行过滤，取值只能为health（已设置事件告警规则且无事件告警触发的资源）、unhealthy（已设置事件告警规则且有事件告警触发的资源）、no_alarm_rule（未设置事件告警规则的资源）
    *
    * @return string|null
    */
    public function getEventStatus()
    {
        return $this->container['eventStatus'];
    }

    /**
    * Sets eventStatus
    *
    * @param string|null $eventStatus 按事件告警状态信息进行过滤，取值只能为health（已设置事件告警规则且无事件告警触发的资源）、unhealthy（已设置事件告警规则且有事件告警触发的资源）、no_alarm_rule（未设置事件告警规则的资源）
    *
    * @return $this
    */
    public function setEventStatus($eventStatus)
    {
        $this->container['eventStatus'] = $eventStatus;
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

