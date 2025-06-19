<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateQueueRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateQueueRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queueName  新建的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。\\n说明： \\n队列名称不区分大小写，系统会自动转换为小写。
    * queueType  队列的类型,。有如下两种类型： sql general 如果不指定，默认为sql。
    * description  队列的描述信息。
    * cuCount  队列的实际CU。
    * chargingMode  队列的收费模式。只能设置为“1”，表示按照CU时收费。
    * enterpriseProjectId  企业项目ID，“0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * platform  队列计算资源的cpu架构。
    * resourceMode  队列资源模式。支持以下两种类型：0：共享资源模式1：专属资源模式
    * labels  创建队列的标签信息，目前包括队列是否跨AZ的标签信息（Json字符串），且只支持值为“2”，即创建一个计算资源分布在2个可用区的双AZ队列
    * feature  队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    * tags  标签
    * elasticResourcePoolName  新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * properties  properties
    * engine  只有在queue_type是sql条件下才可配置，默认是spark。可以选择spark引擎或hetuEngin。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queueName' => 'string',
            'queueType' => 'string',
            'description' => 'string',
            'cuCount' => 'int',
            'chargingMode' => 'int',
            'enterpriseProjectId' => 'string',
            'platform' => 'string',
            'resourceMode' => 'int',
            'labels' => 'object[]',
            'feature' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dli\V1\Model\Tag[]',
            'elasticResourcePoolName' => 'string',
            'properties' => '\HuaweiCloud\SDK\Dli\V1\Model\CreateQueueRequestBodyProperties',
            'engine' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queueName  新建的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。\\n说明： \\n队列名称不区分大小写，系统会自动转换为小写。
    * queueType  队列的类型,。有如下两种类型： sql general 如果不指定，默认为sql。
    * description  队列的描述信息。
    * cuCount  队列的实际CU。
    * chargingMode  队列的收费模式。只能设置为“1”，表示按照CU时收费。
    * enterpriseProjectId  企业项目ID，“0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * platform  队列计算资源的cpu架构。
    * resourceMode  队列资源模式。支持以下两种类型：0：共享资源模式1：专属资源模式
    * labels  创建队列的标签信息，目前包括队列是否跨AZ的标签信息（Json字符串），且只支持值为“2”，即创建一个计算资源分布在2个可用区的双AZ队列
    * feature  队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    * tags  标签
    * elasticResourcePoolName  新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * properties  properties
    * engine  只有在queue_type是sql条件下才可配置，默认是spark。可以选择spark引擎或hetuEngin。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queueName' => null,
        'queueType' => null,
        'description' => null,
        'cuCount' => 'int32',
        'chargingMode' => 'int32',
        'enterpriseProjectId' => null,
        'platform' => null,
        'resourceMode' => 'int32',
        'labels' => null,
        'feature' => null,
        'tags' => null,
        'elasticResourcePoolName' => null,
        'properties' => null,
        'engine' => null
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
    * queueName  新建的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。\\n说明： \\n队列名称不区分大小写，系统会自动转换为小写。
    * queueType  队列的类型,。有如下两种类型： sql general 如果不指定，默认为sql。
    * description  队列的描述信息。
    * cuCount  队列的实际CU。
    * chargingMode  队列的收费模式。只能设置为“1”，表示按照CU时收费。
    * enterpriseProjectId  企业项目ID，“0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * platform  队列计算资源的cpu架构。
    * resourceMode  队列资源模式。支持以下两种类型：0：共享资源模式1：专属资源模式
    * labels  创建队列的标签信息，目前包括队列是否跨AZ的标签信息（Json字符串），且只支持值为“2”，即创建一个计算资源分布在2个可用区的双AZ队列
    * feature  队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    * tags  标签
    * elasticResourcePoolName  新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * properties  properties
    * engine  只有在queue_type是sql条件下才可配置，默认是spark。可以选择spark引擎或hetuEngin。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queueName' => 'queue_name',
            'queueType' => 'queue_type',
            'description' => 'description',
            'cuCount' => 'cu_count',
            'chargingMode' => 'charging_mode',
            'enterpriseProjectId' => 'enterprise_project_id',
            'platform' => 'platform',
            'resourceMode' => 'resource_mode',
            'labels' => 'labels',
            'feature' => 'feature',
            'tags' => 'tags',
            'elasticResourcePoolName' => 'elastic_resource_pool_name',
            'properties' => 'properties',
            'engine' => 'engine'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queueName  新建的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。\\n说明： \\n队列名称不区分大小写，系统会自动转换为小写。
    * queueType  队列的类型,。有如下两种类型： sql general 如果不指定，默认为sql。
    * description  队列的描述信息。
    * cuCount  队列的实际CU。
    * chargingMode  队列的收费模式。只能设置为“1”，表示按照CU时收费。
    * enterpriseProjectId  企业项目ID，“0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * platform  队列计算资源的cpu架构。
    * resourceMode  队列资源模式。支持以下两种类型：0：共享资源模式1：专属资源模式
    * labels  创建队列的标签信息，目前包括队列是否跨AZ的标签信息（Json字符串），且只支持值为“2”，即创建一个计算资源分布在2个可用区的双AZ队列
    * feature  队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    * tags  标签
    * elasticResourcePoolName  新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * properties  properties
    * engine  只有在queue_type是sql条件下才可配置，默认是spark。可以选择spark引擎或hetuEngin。
    *
    * @var string[]
    */
    protected static $setters = [
            'queueName' => 'setQueueName',
            'queueType' => 'setQueueType',
            'description' => 'setDescription',
            'cuCount' => 'setCuCount',
            'chargingMode' => 'setChargingMode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'platform' => 'setPlatform',
            'resourceMode' => 'setResourceMode',
            'labels' => 'setLabels',
            'feature' => 'setFeature',
            'tags' => 'setTags',
            'elasticResourcePoolName' => 'setElasticResourcePoolName',
            'properties' => 'setProperties',
            'engine' => 'setEngine'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queueName  新建的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。\\n说明： \\n队列名称不区分大小写，系统会自动转换为小写。
    * queueType  队列的类型,。有如下两种类型： sql general 如果不指定，默认为sql。
    * description  队列的描述信息。
    * cuCount  队列的实际CU。
    * chargingMode  队列的收费模式。只能设置为“1”，表示按照CU时收费。
    * enterpriseProjectId  企业项目ID，“0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    * platform  队列计算资源的cpu架构。
    * resourceMode  队列资源模式。支持以下两种类型：0：共享资源模式1：专属资源模式
    * labels  创建队列的标签信息，目前包括队列是否跨AZ的标签信息（Json字符串），且只支持值为“2”，即创建一个计算资源分布在2个可用区的双AZ队列
    * feature  队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    * tags  标签
    * elasticResourcePoolName  新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    * properties  properties
    * engine  只有在queue_type是sql条件下才可配置，默认是spark。可以选择spark引擎或hetuEngin。
    *
    * @var string[]
    */
    protected static $getters = [
            'queueName' => 'getQueueName',
            'queueType' => 'getQueueType',
            'description' => 'getDescription',
            'cuCount' => 'getCuCount',
            'chargingMode' => 'getChargingMode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'platform' => 'getPlatform',
            'resourceMode' => 'getResourceMode',
            'labels' => 'getLabels',
            'feature' => 'getFeature',
            'tags' => 'getTags',
            'elasticResourcePoolName' => 'getElasticResourcePoolName',
            'properties' => 'getProperties',
            'engine' => 'getEngine'
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
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['queueType'] = isset($data['queueType']) ? $data['queueType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cuCount'] = isset($data['cuCount']) ? $data['cuCount'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['resourceMode'] = isset($data['resourceMode']) ? $data['resourceMode'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['elasticResourcePoolName'] = isset($data['elasticResourcePoolName']) ? $data['elasticResourcePoolName'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['queueName'] === null) {
            $invalidProperties[] = "'queueName' can't be null";
        }
        if ($this->container['cuCount'] === null) {
            $invalidProperties[] = "'cuCount' can't be null";
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
    * Gets queueName
    *  新建的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。\\n说明： \\n队列名称不区分大小写，系统会自动转换为小写。
    *
    * @return string
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string $queueName 新建的队列名称，名称只能包含数字、英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。\\n说明： \\n队列名称不区分大小写，系统会自动转换为小写。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets queueType
    *  队列的类型,。有如下两种类型： sql general 如果不指定，默认为sql。
    *
    * @return string|null
    */
    public function getQueueType()
    {
        return $this->container['queueType'];
    }

    /**
    * Sets queueType
    *
    * @param string|null $queueType 队列的类型,。有如下两种类型： sql general 如果不指定，默认为sql。
    *
    * @return $this
    */
    public function setQueueType($queueType)
    {
        $this->container['queueType'] = $queueType;
        return $this;
    }

    /**
    * Gets description
    *  队列的描述信息。
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
    * @param string|null $description 队列的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets cuCount
    *  队列的实际CU。
    *
    * @return int
    */
    public function getCuCount()
    {
        return $this->container['cuCount'];
    }

    /**
    * Sets cuCount
    *
    * @param int $cuCount 队列的实际CU。
    *
    * @return $this
    */
    public function setCuCount($cuCount)
    {
        $this->container['cuCount'] = $cuCount;
        return $this;
    }

    /**
    * Gets chargingMode
    *  队列的收费模式。只能设置为“1”，表示按照CU时收费。
    *
    * @return int|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int|null $chargingMode 队列的收费模式。只能设置为“1”，表示按照CU时收费。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，“0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
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
    * @param string|null $enterpriseProjectId 企业项目ID，“0”表示default，即默认的企业项目。 说明： 开通了企业管理服务的用户可设置该参数绑定指定的项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets platform
    *  队列计算资源的cpu架构。
    *
    * @return string|null
    */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
    * Sets platform
    *
    * @param string|null $platform 队列计算资源的cpu架构。
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
        return $this;
    }

    /**
    * Gets resourceMode
    *  队列资源模式。支持以下两种类型：0：共享资源模式1：专属资源模式
    *
    * @return int|null
    */
    public function getResourceMode()
    {
        return $this->container['resourceMode'];
    }

    /**
    * Sets resourceMode
    *
    * @param int|null $resourceMode 队列资源模式。支持以下两种类型：0：共享资源模式1：专属资源模式
    *
    * @return $this
    */
    public function setResourceMode($resourceMode)
    {
        $this->container['resourceMode'] = $resourceMode;
        return $this;
    }

    /**
    * Gets labels
    *  创建队列的标签信息，目前包括队列是否跨AZ的标签信息（Json字符串），且只支持值为“2”，即创建一个计算资源分布在2个可用区的双AZ队列
    *
    * @return object[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param object[]|null $labels 创建队列的标签信息，目前包括队列是否跨AZ的标签信息（Json字符串），且只支持值为“2”，即创建一个计算资源分布在2个可用区的双AZ队列
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets feature
    *  队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    *
    * @return string|null
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param string|null $feature 队列特性。支持以下两种类型：basic：基础型ai：AI增强型（仅SQL的x86_64专属队列支持选择）默认值为“basic”。
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets elasticResourcePoolName
    *  新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    *
    * @return string|null
    */
    public function getElasticResourcePoolName()
    {
        return $this->container['elasticResourcePoolName'];
    }

    /**
    * Sets elasticResourcePoolName
    *
    * @param string|null $elasticResourcePoolName 新建的弹性资源池名称，名称只能包含数字、小写英文字母和下划线，但不能是纯数字，且不能以下划线开头。长度限制：1~128个字符。
    *
    * @return $this
    */
    public function setElasticResourcePoolName($elasticResourcePoolName)
    {
        $this->container['elasticResourcePoolName'] = $elasticResourcePoolName;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\CreateQueueRequestBodyProperties|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\CreateQueueRequestBodyProperties|null $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets engine
    *  只有在queue_type是sql条件下才可配置，默认是spark。可以选择spark引擎或hetuEngin。
    *
    * @return string|null
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string|null $engine 只有在queue_type是sql条件下才可配置，默认是spark。可以选择spark引擎或hetuEngin。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
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

