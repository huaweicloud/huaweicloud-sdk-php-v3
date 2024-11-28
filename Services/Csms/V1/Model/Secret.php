<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Secret implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Secret';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  凭据的资源标识符。
    * name  凭据名称。
    * state  凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
    * kmsKeyId  用于加密凭据值的KMS主密钥的ID值。
    * description  凭据的描述信息。
    * createTime  凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeleteTime  凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    * secretType  凭据类型  - COMMON：通用凭据(默认)。用于应用系统中的各种敏感信息储存。 - RDS：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。（已不支持，使用RDS-FG替代） - RDS-FG：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。 - GaussDB-FG：GaussDB凭据。专门针对GaussDB的凭据，用于存储GaussDB的账号信息。
    * autoRotation  自动轮转  取值：true 开启, false 关闭(默认)
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * rotationConfig  轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS-FG、GaussDB-FG时，配置为{\"InstanceId\":\"\",\"SecretSubType\":\"\"}  说明：当secret_type为RDS-FG、GaussDB-FG时，必须填写该值  InstanceId为实例ID,SecretSubType为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对账号的引用。
    * rotationTime  轮转时间戳
    * nextRotationTime  下一次轮转时间戳
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    * enterpriseProjectId  企业项目ID
    * rotationFuncUrn  FunctionGraph函数的urn。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'state' => 'string',
            'kmsKeyId' => 'string',
            'description' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'scheduledDeleteTime' => 'int',
            'secretType' => 'string',
            'autoRotation' => 'bool',
            'rotationPeriod' => 'string',
            'rotationConfig' => 'string',
            'rotationTime' => 'int',
            'nextRotationTime' => 'int',
            'eventSubscriptions' => 'string[]',
            'enterpriseProjectId' => 'string',
            'rotationFuncUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  凭据的资源标识符。
    * name  凭据名称。
    * state  凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
    * kmsKeyId  用于加密凭据值的KMS主密钥的ID值。
    * description  凭据的描述信息。
    * createTime  凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeleteTime  凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    * secretType  凭据类型  - COMMON：通用凭据(默认)。用于应用系统中的各种敏感信息储存。 - RDS：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。（已不支持，使用RDS-FG替代） - RDS-FG：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。 - GaussDB-FG：GaussDB凭据。专门针对GaussDB的凭据，用于存储GaussDB的账号信息。
    * autoRotation  自动轮转  取值：true 开启, false 关闭(默认)
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * rotationConfig  轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS-FG、GaussDB-FG时，配置为{\"InstanceId\":\"\",\"SecretSubType\":\"\"}  说明：当secret_type为RDS-FG、GaussDB-FG时，必须填写该值  InstanceId为实例ID,SecretSubType为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对账号的引用。
    * rotationTime  轮转时间戳
    * nextRotationTime  下一次轮转时间戳
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    * enterpriseProjectId  企业项目ID
    * rotationFuncUrn  FunctionGraph函数的urn。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'state' => null,
        'kmsKeyId' => null,
        'description' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'scheduledDeleteTime' => 'int64',
        'secretType' => null,
        'autoRotation' => null,
        'rotationPeriod' => null,
        'rotationConfig' => null,
        'rotationTime' => 'int64',
        'nextRotationTime' => 'int64',
        'eventSubscriptions' => null,
        'enterpriseProjectId' => null,
        'rotationFuncUrn' => null
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
    * id  凭据的资源标识符。
    * name  凭据名称。
    * state  凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
    * kmsKeyId  用于加密凭据值的KMS主密钥的ID值。
    * description  凭据的描述信息。
    * createTime  凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeleteTime  凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    * secretType  凭据类型  - COMMON：通用凭据(默认)。用于应用系统中的各种敏感信息储存。 - RDS：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。（已不支持，使用RDS-FG替代） - RDS-FG：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。 - GaussDB-FG：GaussDB凭据。专门针对GaussDB的凭据，用于存储GaussDB的账号信息。
    * autoRotation  自动轮转  取值：true 开启, false 关闭(默认)
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * rotationConfig  轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS-FG、GaussDB-FG时，配置为{\"InstanceId\":\"\",\"SecretSubType\":\"\"}  说明：当secret_type为RDS-FG、GaussDB-FG时，必须填写该值  InstanceId为实例ID,SecretSubType为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对账号的引用。
    * rotationTime  轮转时间戳
    * nextRotationTime  下一次轮转时间戳
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    * enterpriseProjectId  企业项目ID
    * rotationFuncUrn  FunctionGraph函数的urn。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'state' => 'state',
            'kmsKeyId' => 'kms_key_id',
            'description' => 'description',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'scheduledDeleteTime' => 'scheduled_delete_time',
            'secretType' => 'secret_type',
            'autoRotation' => 'auto_rotation',
            'rotationPeriod' => 'rotation_period',
            'rotationConfig' => 'rotation_config',
            'rotationTime' => 'rotation_time',
            'nextRotationTime' => 'next_rotation_time',
            'eventSubscriptions' => 'event_subscriptions',
            'enterpriseProjectId' => 'enterprise_project_id',
            'rotationFuncUrn' => 'rotation_func_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  凭据的资源标识符。
    * name  凭据名称。
    * state  凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
    * kmsKeyId  用于加密凭据值的KMS主密钥的ID值。
    * description  凭据的描述信息。
    * createTime  凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeleteTime  凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    * secretType  凭据类型  - COMMON：通用凭据(默认)。用于应用系统中的各种敏感信息储存。 - RDS：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。（已不支持，使用RDS-FG替代） - RDS-FG：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。 - GaussDB-FG：GaussDB凭据。专门针对GaussDB的凭据，用于存储GaussDB的账号信息。
    * autoRotation  自动轮转  取值：true 开启, false 关闭(默认)
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * rotationConfig  轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS-FG、GaussDB-FG时，配置为{\"InstanceId\":\"\",\"SecretSubType\":\"\"}  说明：当secret_type为RDS-FG、GaussDB-FG时，必须填写该值  InstanceId为实例ID,SecretSubType为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对账号的引用。
    * rotationTime  轮转时间戳
    * nextRotationTime  下一次轮转时间戳
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    * enterpriseProjectId  企业项目ID
    * rotationFuncUrn  FunctionGraph函数的urn。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'state' => 'setState',
            'kmsKeyId' => 'setKmsKeyId',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'scheduledDeleteTime' => 'setScheduledDeleteTime',
            'secretType' => 'setSecretType',
            'autoRotation' => 'setAutoRotation',
            'rotationPeriod' => 'setRotationPeriod',
            'rotationConfig' => 'setRotationConfig',
            'rotationTime' => 'setRotationTime',
            'nextRotationTime' => 'setNextRotationTime',
            'eventSubscriptions' => 'setEventSubscriptions',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'rotationFuncUrn' => 'setRotationFuncUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  凭据的资源标识符。
    * name  凭据名称。
    * state  凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
    * kmsKeyId  用于加密凭据值的KMS主密钥的ID值。
    * description  凭据的描述信息。
    * createTime  凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * updateTime  凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    * scheduledDeleteTime  凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    * secretType  凭据类型  - COMMON：通用凭据(默认)。用于应用系统中的各种敏感信息储存。 - RDS：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。（已不支持，使用RDS-FG替代） - RDS-FG：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。 - GaussDB-FG：GaussDB凭据。专门针对GaussDB的凭据，用于存储GaussDB的账号信息。
    * autoRotation  自动轮转  取值：true 开启, false 关闭(默认)
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * rotationConfig  轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS-FG、GaussDB-FG时，配置为{\"InstanceId\":\"\",\"SecretSubType\":\"\"}  说明：当secret_type为RDS-FG、GaussDB-FG时，必须填写该值  InstanceId为实例ID,SecretSubType为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对账号的引用。
    * rotationTime  轮转时间戳
    * nextRotationTime  下一次轮转时间戳
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    * enterpriseProjectId  企业项目ID
    * rotationFuncUrn  FunctionGraph函数的urn。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'state' => 'getState',
            'kmsKeyId' => 'getKmsKeyId',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'scheduledDeleteTime' => 'getScheduledDeleteTime',
            'secretType' => 'getSecretType',
            'autoRotation' => 'getAutoRotation',
            'rotationPeriod' => 'getRotationPeriod',
            'rotationConfig' => 'getRotationConfig',
            'rotationTime' => 'getRotationTime',
            'nextRotationTime' => 'getNextRotationTime',
            'eventSubscriptions' => 'getEventSubscriptions',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'rotationFuncUrn' => 'getRotationFuncUrn'
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
    const SECRET_TYPE_COMMON = 'COMMON';
    const SECRET_TYPE_RDS_FG = 'RDS-FG';
    const SECRET_TYPE_GAUSS_DB_FG = 'GaussDB-FG';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSecretTypeAllowableValues()
    {
        return [
            self::SECRET_TYPE_COMMON,
            self::SECRET_TYPE_RDS_FG,
            self::SECRET_TYPE_GAUSS_DB_FG,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['kmsKeyId'] = isset($data['kmsKeyId']) ? $data['kmsKeyId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['scheduledDeleteTime'] = isset($data['scheduledDeleteTime']) ? $data['scheduledDeleteTime'] : null;
        $this->container['secretType'] = isset($data['secretType']) ? $data['secretType'] : null;
        $this->container['autoRotation'] = isset($data['autoRotation']) ? $data['autoRotation'] : null;
        $this->container['rotationPeriod'] = isset($data['rotationPeriod']) ? $data['rotationPeriod'] : null;
        $this->container['rotationConfig'] = isset($data['rotationConfig']) ? $data['rotationConfig'] : null;
        $this->container['rotationTime'] = isset($data['rotationTime']) ? $data['rotationTime'] : null;
        $this->container['nextRotationTime'] = isset($data['nextRotationTime']) ? $data['nextRotationTime'] : null;
        $this->container['eventSubscriptions'] = isset($data['eventSubscriptions']) ? $data['eventSubscriptions'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['rotationFuncUrn'] = isset($data['rotationFuncUrn']) ? $data['rotationFuncUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 8)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 4)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 4.";
            }
            if (!is_null($this->container['kmsKeyId']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['kmsKeyId'])) {
                $invalidProperties[] = "invalid value for 'kmsKeyId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scheduledDeleteTime']) && ($this->container['scheduledDeleteTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'scheduledDeleteTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['scheduledDeleteTime']) && ($this->container['scheduledDeleteTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scheduledDeleteTime', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getSecretTypeAllowableValues();
                if (!is_null($this->container['secretType']) && !in_array($this->container['secretType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'secretType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['rotationPeriod']) && (mb_strlen($this->container['rotationPeriod']) > 50)) {
                $invalidProperties[] = "invalid value for 'rotationPeriod', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['rotationPeriod']) && (mb_strlen($this->container['rotationPeriod']) < 0)) {
                $invalidProperties[] = "invalid value for 'rotationPeriod', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rotationConfig']) && (mb_strlen($this->container['rotationConfig']) > 1024)) {
                $invalidProperties[] = "invalid value for 'rotationConfig', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['rotationConfig']) && (mb_strlen($this->container['rotationConfig']) < 0)) {
                $invalidProperties[] = "invalid value for 'rotationConfig', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['rotationTime']) && ($this->container['rotationTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'rotationTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['rotationTime']) && ($this->container['rotationTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'rotationTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nextRotationTime']) && ($this->container['nextRotationTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'nextRotationTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['nextRotationTime']) && ($this->container['nextRotationTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'nextRotationTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  凭据的资源标识符。
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
    * @param string|null $id 凭据的资源标识符。
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
    *  凭据名称。
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
    * @param string|null $name 凭据名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets state
    *  凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 凭据状态，取值如下：  ENABLED：表示启用状态  DISABLED：表示禁用状态  PENDING_DELETE：表示待删除状态  FROZEN：表示冻结状态
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets kmsKeyId
    *  用于加密凭据值的KMS主密钥的ID值。
    *
    * @return string|null
    */
    public function getKmsKeyId()
    {
        return $this->container['kmsKeyId'];
    }

    /**
    * Sets kmsKeyId
    *
    * @param string|null $kmsKeyId 用于加密凭据值的KMS主密钥的ID值。
    *
    * @return $this
    */
    public function setKmsKeyId($kmsKeyId)
    {
        $this->container['kmsKeyId'] = $kmsKeyId;
        return $this;
    }

    /**
    * Gets description
    *  凭据的描述信息。
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
    * @param string|null $description 凭据的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
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
    * @param int|null $createTime 凭据创建时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 凭据上次更新时间，时间戳，即从1970年1月1日至该时间的总秒数。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets scheduledDeleteTime
    *  凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    *
    * @return int|null
    */
    public function getScheduledDeleteTime()
    {
        return $this->container['scheduledDeleteTime'];
    }

    /**
    * Sets scheduledDeleteTime
    *
    * @param int|null $scheduledDeleteTime 凭据计划删除时间，时间戳，即从1970年1月1日至该时间的总秒数。  凭据不在删除计划中时，本项值为null。
    *
    * @return $this
    */
    public function setScheduledDeleteTime($scheduledDeleteTime)
    {
        $this->container['scheduledDeleteTime'] = $scheduledDeleteTime;
        return $this;
    }

    /**
    * Gets secretType
    *  凭据类型  - COMMON：通用凭据(默认)。用于应用系统中的各种敏感信息储存。 - RDS：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。（已不支持，使用RDS-FG替代） - RDS-FG：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。 - GaussDB-FG：GaussDB凭据。专门针对GaussDB的凭据，用于存储GaussDB的账号信息。
    *
    * @return string|null
    */
    public function getSecretType()
    {
        return $this->container['secretType'];
    }

    /**
    * Sets secretType
    *
    * @param string|null $secretType 凭据类型  - COMMON：通用凭据(默认)。用于应用系统中的各种敏感信息储存。 - RDS：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。（已不支持，使用RDS-FG替代） - RDS-FG：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。 - GaussDB-FG：GaussDB凭据。专门针对GaussDB的凭据，用于存储GaussDB的账号信息。
    *
    * @return $this
    */
    public function setSecretType($secretType)
    {
        $this->container['secretType'] = $secretType;
        return $this;
    }

    /**
    * Gets autoRotation
    *  自动轮转  取值：true 开启, false 关闭(默认)
    *
    * @return bool|null
    */
    public function getAutoRotation()
    {
        return $this->container['autoRotation'];
    }

    /**
    * Sets autoRotation
    *
    * @param bool|null $autoRotation 自动轮转  取值：true 开启, false 关闭(默认)
    *
    * @return $this
    */
    public function setAutoRotation($autoRotation)
    {
        $this->container['autoRotation'] = $autoRotation;
        return $this;
    }

    /**
    * Gets rotationPeriod
    *  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    *
    * @return string|null
    */
    public function getRotationPeriod()
    {
        return $this->container['rotationPeriod'];
    }

    /**
    * Sets rotationPeriod
    *
    * @param string|null $rotationPeriod 轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    *
    * @return $this
    */
    public function setRotationPeriod($rotationPeriod)
    {
        $this->container['rotationPeriod'] = $rotationPeriod;
        return $this;
    }

    /**
    * Gets rotationConfig
    *  轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS-FG、GaussDB-FG时，配置为{\"InstanceId\":\"\",\"SecretSubType\":\"\"}  说明：当secret_type为RDS-FG、GaussDB-FG时，必须填写该值  InstanceId为实例ID,SecretSubType为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对账号的引用。
    *
    * @return string|null
    */
    public function getRotationConfig()
    {
        return $this->container['rotationConfig'];
    }

    /**
    * Sets rotationConfig
    *
    * @param string|null $rotationConfig 轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS-FG、GaussDB-FG时，配置为{\"InstanceId\":\"\",\"SecretSubType\":\"\"}  说明：当secret_type为RDS-FG、GaussDB-FG时，必须填写该值  InstanceId为实例ID,SecretSubType为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对账号的引用。
    *
    * @return $this
    */
    public function setRotationConfig($rotationConfig)
    {
        $this->container['rotationConfig'] = $rotationConfig;
        return $this;
    }

    /**
    * Gets rotationTime
    *  轮转时间戳
    *
    * @return int|null
    */
    public function getRotationTime()
    {
        return $this->container['rotationTime'];
    }

    /**
    * Sets rotationTime
    *
    * @param int|null $rotationTime 轮转时间戳
    *
    * @return $this
    */
    public function setRotationTime($rotationTime)
    {
        $this->container['rotationTime'] = $rotationTime;
        return $this;
    }

    /**
    * Gets nextRotationTime
    *  下一次轮转时间戳
    *
    * @return int|null
    */
    public function getNextRotationTime()
    {
        return $this->container['nextRotationTime'];
    }

    /**
    * Sets nextRotationTime
    *
    * @param int|null $nextRotationTime 下一次轮转时间戳
    *
    * @return $this
    */
    public function setNextRotationTime($nextRotationTime)
    {
        $this->container['nextRotationTime'] = $nextRotationTime;
        return $this;
    }

    /**
    * Gets eventSubscriptions
    *  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    *
    * @return string[]|null
    */
    public function getEventSubscriptions()
    {
        return $this->container['eventSubscriptions'];
    }

    /**
    * Sets eventSubscriptions
    *
    * @param string[]|null $eventSubscriptions 凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    *
    * @return $this
    */
    public function setEventSubscriptions($eventSubscriptions)
    {
        $this->container['eventSubscriptions'] = $eventSubscriptions;
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
    * Gets rotationFuncUrn
    *  FunctionGraph函数的urn。
    *
    * @return string|null
    */
    public function getRotationFuncUrn()
    {
        return $this->container['rotationFuncUrn'];
    }

    /**
    * Sets rotationFuncUrn
    *
    * @param string|null $rotationFuncUrn FunctionGraph函数的urn。
    *
    * @return $this
    */
    public function setRotationFuncUrn($rotationFuncUrn)
    {
        $this->container['rotationFuncUrn'] = $rotationFuncUrn;
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

