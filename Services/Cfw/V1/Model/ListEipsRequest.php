<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEipsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEipsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * keyWord  查询防护EIP列表关键字，可选用弹性公网ID和弹性公网IP
    * status  防护状态 null-全部 0-开启防护 1-关闭防护
    * sync  是否同步租户EIP数据 0-不同步 1-同步
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * deviceKey  设备关键字，是eip绑定的资产的名称或id
    * addressType  地址类型0 ipv4，1 ipv6
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * fwKeyWord  防火墙关键字，可使用防火墙id或名称查询，可通过[防火墙ID获取方式](cfw_02_0028.xml)
    * epsId  弹性公网ip的企业项目id，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，租户未开启企业项目时为0
    * tags  标签列表信息可通过查询EIP服务界面列表标签页签获得
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'objectId' => 'string',
            'keyWord' => 'string',
            'status' => 'string',
            'sync' => 'int',
            'limit' => 'int',
            'offset' => 'int',
            'enterpriseProjectId' => 'string',
            'deviceKey' => 'string',
            'addressType' => 'int',
            'fwInstanceId' => 'string',
            'fwKeyWord' => 'string',
            'epsId' => 'string',
            'tags' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * keyWord  查询防护EIP列表关键字，可选用弹性公网ID和弹性公网IP
    * status  防护状态 null-全部 0-开启防护 1-关闭防护
    * sync  是否同步租户EIP数据 0-不同步 1-同步
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * deviceKey  设备关键字，是eip绑定的资产的名称或id
    * addressType  地址类型0 ipv4，1 ipv6
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * fwKeyWord  防火墙关键字，可使用防火墙id或名称查询，可通过[防火墙ID获取方式](cfw_02_0028.xml)
    * epsId  弹性公网ip的企业项目id，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，租户未开启企业项目时为0
    * tags  标签列表信息可通过查询EIP服务界面列表标签页签获得
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'objectId' => null,
        'keyWord' => null,
        'status' => null,
        'sync' => 'int32',
        'limit' => 'int32',
        'offset' => 'int32',
        'enterpriseProjectId' => null,
        'deviceKey' => null,
        'addressType' => 'int32',
        'fwInstanceId' => null,
        'fwKeyWord' => null,
        'epsId' => null,
        'tags' => null
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
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * keyWord  查询防护EIP列表关键字，可选用弹性公网ID和弹性公网IP
    * status  防护状态 null-全部 0-开启防护 1-关闭防护
    * sync  是否同步租户EIP数据 0-不同步 1-同步
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * deviceKey  设备关键字，是eip绑定的资产的名称或id
    * addressType  地址类型0 ipv4，1 ipv6
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * fwKeyWord  防火墙关键字，可使用防火墙id或名称查询，可通过[防火墙ID获取方式](cfw_02_0028.xml)
    * epsId  弹性公网ip的企业项目id，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，租户未开启企业项目时为0
    * tags  标签列表信息可通过查询EIP服务界面列表标签页签获得
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'objectId' => 'object_id',
            'keyWord' => 'key_word',
            'status' => 'status',
            'sync' => 'sync',
            'limit' => 'limit',
            'offset' => 'offset',
            'enterpriseProjectId' => 'enterprise_project_id',
            'deviceKey' => 'device_key',
            'addressType' => 'address_type',
            'fwInstanceId' => 'fw_instance_id',
            'fwKeyWord' => 'fw_key_word',
            'epsId' => 'eps_id',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * keyWord  查询防护EIP列表关键字，可选用弹性公网ID和弹性公网IP
    * status  防护状态 null-全部 0-开启防护 1-关闭防护
    * sync  是否同步租户EIP数据 0-不同步 1-同步
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * deviceKey  设备关键字，是eip绑定的资产的名称或id
    * addressType  地址类型0 ipv4，1 ipv6
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * fwKeyWord  防火墙关键字，可使用防火墙id或名称查询，可通过[防火墙ID获取方式](cfw_02_0028.xml)
    * epsId  弹性公网ip的企业项目id，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，租户未开启企业项目时为0
    * tags  标签列表信息可通过查询EIP服务界面列表标签页签获得
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'objectId' => 'setObjectId',
            'keyWord' => 'setKeyWord',
            'status' => 'setStatus',
            'sync' => 'setSync',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'deviceKey' => 'setDeviceKey',
            'addressType' => 'setAddressType',
            'fwInstanceId' => 'setFwInstanceId',
            'fwKeyWord' => 'setFwKeyWord',
            'epsId' => 'setEpsId',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID, 可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml)
    * objectId  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
    * keyWord  查询防护EIP列表关键字，可选用弹性公网ID和弹性公网IP
    * status  防护状态 null-全部 0-开启防护 1-关闭防护
    * sync  是否同步租户EIP数据 0-不同步 1-同步
    * limit  每页显示个数，范围为1-1024
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * enterpriseProjectId  企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，用户未开启企业项目时为0
    * deviceKey  设备关键字，是eip绑定的资产的名称或id
    * addressType  地址类型0 ipv4，1 ipv6
    * fwInstanceId  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    * fwKeyWord  防火墙关键字，可使用防火墙id或名称查询，可通过[防火墙ID获取方式](cfw_02_0028.xml)
    * epsId  弹性公网ip的企业项目id，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，租户未开启企业项目时为0
    * tags  标签列表信息可通过查询EIP服务界面列表标签页签获得
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'objectId' => 'getObjectId',
            'keyWord' => 'getKeyWord',
            'status' => 'getStatus',
            'sync' => 'getSync',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'deviceKey' => 'getDeviceKey',
            'addressType' => 'getAddressType',
            'fwInstanceId' => 'getFwInstanceId',
            'fwKeyWord' => 'getFwKeyWord',
            'epsId' => 'getEpsId',
            'tags' => 'getTags'
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
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
        $this->container['keyWord'] = isset($data['keyWord']) ? $data['keyWord'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sync'] = isset($data['sync']) ? $data['sync'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['deviceKey'] = isset($data['deviceKey']) ? $data['deviceKey'] : null;
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['fwKeyWord'] = isset($data['fwKeyWord']) ? $data['fwKeyWord'] : null;
        $this->container['epsId'] = isset($data['epsId']) ? $data['epsId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
            if (!preg_match("/^[0-9a-f]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[0-9a-f]{32}/.";
            }
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['objectId'])) {
                $invalidProperties[] = "invalid value for 'objectId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
            if (!is_null($this->container['keyWord']) && (mb_strlen($this->container['keyWord']) > 255)) {
                $invalidProperties[] = "invalid value for 'keyWord', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['keyWord']) && (mb_strlen($this->container['keyWord']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyWord', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
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
    * Gets objectId
    *  防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
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
    * @param string $objectId 防护对象id，是创建云防火墙后用于区分互联网边界防护和VPC边界防护的标志id，可通过调用[查询防火墙实例接口](ListFirewallDetail.xml)获得，通过返回值中的data.records.protect_objects.object_id（.表示各对象之间层级的区分）获得，注意type为0的为互联网边界防护对象id，type为1的为VPC边界防护对象id。此处仅取type为0的防护对象id，可通过data.records.protect_objects.type（.表示各对象之间层级的区分）获得。
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
    *  查询防护EIP列表关键字，可选用弹性公网ID和弹性公网IP
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
    * @param string|null $keyWord 查询防护EIP列表关键字，可选用弹性公网ID和弹性公网IP
    *
    * @return $this
    */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;
        return $this;
    }

    /**
    * Gets status
    *  防护状态 null-全部 0-开启防护 1-关闭防护
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
    * @param string|null $status 防护状态 null-全部 0-开启防护 1-关闭防护
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sync
    *  是否同步租户EIP数据 0-不同步 1-同步
    *
    * @return int|null
    */
    public function getSync()
    {
        return $this->container['sync'];
    }

    /**
    * Sets sync
    *
    * @param int|null $sync 是否同步租户EIP数据 0-不同步 1-同步
    *
    * @return $this
    */
    public function setSync($sync)
    {
        $this->container['sync'] = $sync;
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
    * Gets deviceKey
    *  设备关键字，是eip绑定的资产的名称或id
    *
    * @return string|null
    */
    public function getDeviceKey()
    {
        return $this->container['deviceKey'];
    }

    /**
    * Sets deviceKey
    *
    * @param string|null $deviceKey 设备关键字，是eip绑定的资产的名称或id
    *
    * @return $this
    */
    public function setDeviceKey($deviceKey)
    {
        $this->container['deviceKey'] = $deviceKey;
        return $this;
    }

    /**
    * Gets addressType
    *  地址类型0 ipv4，1 ipv6
    *
    * @return int|null
    */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
    * Sets addressType
    *
    * @param int|null $addressType 地址类型0 ipv4，1 ipv6
    *
    * @return $this
    */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;
        return $this;
    }

    /**
    * Gets fwInstanceId
    *  防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
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
    * @param string|null $fwInstanceId 防火墙id，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets fwKeyWord
    *  防火墙关键字，可使用防火墙id或名称查询，可通过[防火墙ID获取方式](cfw_02_0028.xml)
    *
    * @return string|null
    */
    public function getFwKeyWord()
    {
        return $this->container['fwKeyWord'];
    }

    /**
    * Sets fwKeyWord
    *
    * @param string|null $fwKeyWord 防火墙关键字，可使用防火墙id或名称查询，可通过[防火墙ID获取方式](cfw_02_0028.xml)
    *
    * @return $this
    */
    public function setFwKeyWord($fwKeyWord)
    {
        $this->container['fwKeyWord'] = $fwKeyWord;
        return $this;
    }

    /**
    * Gets epsId
    *  弹性公网ip的企业项目id，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，租户未开启企业项目时为0
    *
    * @return string|null
    */
    public function getEpsId()
    {
        return $this->container['epsId'];
    }

    /**
    * Sets epsId
    *
    * @param string|null $epsId 弹性公网ip的企业项目id，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取，租户未开启企业项目时为0
    *
    * @return $this
    */
    public function setEpsId($epsId)
    {
        $this->container['epsId'] = $epsId;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表信息可通过查询EIP服务界面列表标签页签获得
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 标签列表信息可通过查询EIP服务界面列表标签页签获得
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

