<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDomainSetsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDomainSetsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * keyWord  关键字，可使用域名组名称或描述
    * domainSetType  域名组类型，0表示应用域名组，1表示网络域名组
    * configStatus  配置状态，-1表示未配置态，0表示配置失败，1表示配置成功，2表示配置中，3表示正常，4表示配置异常
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'fwInstanceId' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'objectId' => 'string',
            'keyWord' => 'string',
            'domainSetType' => 'int',
            'configStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * keyWord  关键字，可使用域名组名称或描述
    * domainSetType  域名组类型，0表示应用域名组，1表示网络域名组
    * configStatus  配置状态，-1表示未配置态，0表示配置失败，1表示配置成功，2表示配置中，3表示正常，4表示配置异常
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'enterpriseProjectId' => null,
        'fwInstanceId' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'objectId' => null,
        'keyWord' => null,
        'domainSetType' => 'int32',
        'configStatus' => 'int32'
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
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * keyWord  关键字，可使用域名组名称或描述
    * domainSetType  域名组类型，0表示应用域名组，1表示网络域名组
    * configStatus  配置状态，-1表示未配置态，0表示配置失败，1表示配置成功，2表示配置中，3表示正常，4表示配置异常
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'fwInstanceId' => 'fw_instance_id',
            'limit' => 'limit',
            'offset' => 'offset',
            'objectId' => 'object_id',
            'keyWord' => 'key_word',
            'domainSetType' => 'domain_set_type',
            'configStatus' => 'config_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * keyWord  关键字，可使用域名组名称或描述
    * domainSetType  域名组类型，0表示应用域名组，1表示网络域名组
    * configStatus  配置状态，-1表示未配置态，0表示配置失败，1表示配置成功，2表示配置中，3表示正常，4表示配置异常
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'fwInstanceId' => 'setFwInstanceId',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'objectId' => 'setObjectId',
            'keyWord' => 'setKeyWord',
            'domainSetType' => 'setDomainSetType',
            'configStatus' => 'setConfigStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    * keyWord  关键字，可使用域名组名称或描述
    * domainSetType  域名组类型，0表示应用域名组，1表示网络域名组
    * configStatus  配置状态，-1表示未配置态，0表示配置失败，1表示配置成功，2表示配置中，3表示正常，4表示配置异常
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'fwInstanceId' => 'getFwInstanceId',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'objectId' => 'getObjectId',
            'keyWord' => 'getKeyWord',
            'domainSetType' => 'getDomainSetType',
            'configStatus' => 'getConfigStatus'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['keyWord'] = isset($data['keyWord']) ? $data['keyWord'] : null;
        $this->container['domainSetType'] = isset($data['domainSetType']) ? $data['domainSetType'] : null;
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
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
        if ($this->container['fwInstanceId'] === null) {
            $invalidProperties[] = "'fwInstanceId' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
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
    *  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
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
    * @param string $projectId 项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
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
    * @param string|null $enterpriseProjectId 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
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
    *  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @return string
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string $fwInstanceId 防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示个数，范围为1-1024
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
    * @param int $limit 每页显示个数，范围为1-1024
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
    *  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
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
    * @param int $offset 偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets objectId
    *  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    *
    * @return string
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string $objectId 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id，type可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
        return $this;
    }

    /**
    * Gets keyWord
    *  关键字，可使用域名组名称或描述
    *
    * @return string|null
    */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
    * Sets keyWord
    *
    * @param string|null $keyWord 关键字，可使用域名组名称或描述
    *
    * @return $this
    */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;
        return $this;
    }

    /**
    * Gets domainSetType
    *  域名组类型，0表示应用域名组，1表示网络域名组
    *
    * @return int|null
    */
    public function getDomainSetType()
    {
        return $this->container['domainSetType'];
    }

    /**
    * Sets domainSetType
    *
    * @param int|null $domainSetType 域名组类型，0表示应用域名组，1表示网络域名组
    *
    * @return $this
    */
    public function setDomainSetType($domainSetType)
    {
        $this->container['domainSetType'] = $domainSetType;
        return $this;
    }

    /**
    * Gets configStatus
    *  配置状态，-1表示未配置态，0表示配置失败，1表示配置成功，2表示配置中，3表示正常，4表示配置异常
    *
    * @return int|null
    */
    public function getConfigStatus()
    {
        return $this->container['configStatus'];
    }

    /**
    * Sets configStatus
    *
    * @param int|null $configStatus 配置状态，-1表示未配置态，0表示配置失败，1表示配置成功，2表示配置中，3表示正常，4表示配置异常
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
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

