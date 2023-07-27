<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListL7rulesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListL7rulesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页查询中每页的转发规则个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的转发规则的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * l7policyId  转发策略id
    * id  转发规则ID。
    * adminStateUp  转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * type  转发规则的匹配类型。取值范围：HOST_NAME：匹配请求中的域名；PATH：匹配请求中的路径；同一个转发策略下转发规则的type不能重复。
    * compareType  转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配； type为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
    * invert  是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
    * key  匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
    * value  匹配内容的值。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    * provisioningStatus  转发规则的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'l7policyId' => 'string',
            'id' => 'string',
            'adminStateUp' => 'bool',
            'type' => 'string',
            'compareType' => 'string',
            'invert' => 'bool',
            'key' => 'string',
            'value' => 'string',
            'provisioningStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页查询中每页的转发规则个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的转发规则的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * l7policyId  转发策略id
    * id  转发规则ID。
    * adminStateUp  转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * type  转发规则的匹配类型。取值范围：HOST_NAME：匹配请求中的域名；PATH：匹配请求中的路径；同一个转发策略下转发规则的type不能重复。
    * compareType  转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配； type为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
    * invert  是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
    * key  匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
    * value  匹配内容的值。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    * provisioningStatus  转发规则的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'l7policyId' => null,
        'id' => null,
        'adminStateUp' => null,
        'type' => null,
        'compareType' => null,
        'invert' => null,
        'key' => null,
        'value' => null,
        'provisioningStatus' => null
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
    * limit  分页查询中每页的转发规则个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的转发规则的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * l7policyId  转发策略id
    * id  转发规则ID。
    * adminStateUp  转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * type  转发规则的匹配类型。取值范围：HOST_NAME：匹配请求中的域名；PATH：匹配请求中的路径；同一个转发策略下转发规则的type不能重复。
    * compareType  转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配； type为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
    * invert  是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
    * key  匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
    * value  匹配内容的值。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    * provisioningStatus  转发规则的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'l7policyId' => 'l7policy_id',
            'id' => 'id',
            'adminStateUp' => 'admin_state_up',
            'type' => 'type',
            'compareType' => 'compare_type',
            'invert' => 'invert',
            'key' => 'key',
            'value' => 'value',
            'provisioningStatus' => 'provisioning_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页查询中每页的转发规则个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的转发规则的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * l7policyId  转发策略id
    * id  转发规则ID。
    * adminStateUp  转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * type  转发规则的匹配类型。取值范围：HOST_NAME：匹配请求中的域名；PATH：匹配请求中的路径；同一个转发策略下转发规则的type不能重复。
    * compareType  转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配； type为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
    * invert  是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
    * key  匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
    * value  匹配内容的值。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    * provisioningStatus  转发规则的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'l7policyId' => 'setL7policyId',
            'id' => 'setId',
            'adminStateUp' => 'setAdminStateUp',
            'type' => 'setType',
            'compareType' => 'setCompareType',
            'invert' => 'setInvert',
            'key' => 'setKey',
            'value' => 'setValue',
            'provisioningStatus' => 'setProvisioningStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页查询中每页的转发规则个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的转发规则的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * l7policyId  转发策略id
    * id  转发规则ID。
    * adminStateUp  转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * type  转发规则的匹配类型。取值范围：HOST_NAME：匹配请求中的域名；PATH：匹配请求中的路径；同一个转发策略下转发规则的type不能重复。
    * compareType  转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配； type为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
    * invert  是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
    * key  匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
    * value  匹配内容的值。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    * provisioningStatus  转发规则的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'l7policyId' => 'getL7policyId',
            'id' => 'getId',
            'adminStateUp' => 'getAdminStateUp',
            'type' => 'getType',
            'compareType' => 'getCompareType',
            'invert' => 'getInvert',
            'key' => 'getKey',
            'value' => 'getValue',
            'provisioningStatus' => 'getProvisioningStatus'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['l7policyId'] = isset($data['l7policyId']) ? $data['l7policyId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['compareType'] = isset($data['compareType']) ? $data['compareType'] : null;
        $this->container['invert'] = isset($data['invert']) ? $data['invert'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
        if ($this->container['l7policyId'] === null) {
            $invalidProperties[] = "'l7policyId' can't be null";
        }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 255)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 0)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 128)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['provisioningStatus']) && (mb_strlen($this->container['provisioningStatus']) > 16)) {
                $invalidProperties[] = "invalid value for 'provisioningStatus', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['provisioningStatus']) && (mb_strlen($this->container['provisioningStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'provisioningStatus', the character length must be bigger than or equal to 0.";
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
    * Gets limit
    *  分页查询中每页的转发规则个数
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
    * @param int|null $limit 分页查询中每页的转发规则个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询的起始的资源id，表示上一页最后一条查询记录的转发规则的id。不指定时表示查询第一页。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页查询的起始的资源id，表示上一页最后一条查询记录的转发规则的id。不指定时表示查询第一页。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets pageReverse
    *  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets l7policyId
    *  转发策略id
    *
    * @return string
    */
    public function getL7policyId()
    {
        return $this->container['l7policyId'];
    }

    /**
    * Sets l7policyId
    *
    * @param string $l7policyId 转发策略id
    *
    * @return $this
    */
    public function setL7policyId($l7policyId)
    {
        $this->container['l7policyId'] = $l7policyId;
        return $this;
    }

    /**
    * Gets id
    *  转发规则ID。
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
    * @param string|null $id 转发规则ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 转发规则的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets type
    *  转发规则的匹配类型。取值范围：HOST_NAME：匹配请求中的域名；PATH：匹配请求中的路径；同一个转发策略下转发规则的type不能重复。
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
    * @param string|null $type 转发规则的匹配类型。取值范围：HOST_NAME：匹配请求中的域名；PATH：匹配请求中的路径；同一个转发策略下转发规则的type不能重复。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets compareType
    *  转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配； type为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
    *
    * @return string|null
    */
    public function getCompareType()
    {
        return $this->container['compareType'];
    }

    /**
    * Sets compareType
    *
    * @param string|null $compareType 转发匹配方式： type为HOST_NAME时，取值范围：EQUAL_TO：精确匹配； type为PATH时，取值范围：REGEX：正则匹配；STARTS_WITH：前缀匹配；EQUAL_TO：精确匹配。
    *
    * @return $this
    */
    public function setCompareType($compareType)
    {
        $this->container['compareType'] = $compareType;
        return $this;
    }

    /**
    * Gets invert
    *  是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
    *
    * @return bool|null
    */
    public function getInvert()
    {
        return $this->container['invert'];
    }

    /**
    * Sets invert
    *
    * @param bool|null $invert 是否反向匹配；取值范围：true/false。默认值：false；该字段为预留字段，暂未启用。
    *
    * @return $this
    */
    public function setInvert($invert)
    {
        $this->container['invert'] = $invert;
        return $this;
    }

    /**
    * Gets key
    *  匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 匹配内容的键值。默认为null。该字段为预留字段，暂未启用。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  匹配内容的值。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 匹配内容的值。 当type为HOST_NAME时，取值范围：String (100)，字符串只能包含英文字母、数字、“-”或“.”，且必须以字母或数字开头。 当type为PATH时，取值范围：String (128)。当转发规则的compare_type为STARTS_WITH、EQUAL_TO时，字符串只能包含英文字母、数字、_~';@^-%#&$.*+?,=!:| /()[]{}，且必须以\"/\"开头。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  转发规则的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    *
    * @return string|null
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string|null $provisioningStatus 转发规则的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
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

