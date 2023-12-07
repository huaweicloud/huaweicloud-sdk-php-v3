<?php

namespace HuaweiCloud\SDK\Csms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSecretRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSecretRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  待创建凭据的名称。  约束：取值范围为1到64个字符，满足正则匹配“^[a-zA-Z0-9_-]{1,64}$”。
    * kmsKeyId  用于加密保护凭据值的KMS主密钥ID，如果您未指定此参数，凭据管理服务将默认使用名为csms/default的默认主密钥，用于加密您账号在本项目中创建的凭据值。如果用户账号下不存在该名称的主密钥，则凭据管理服务自动为您创建该名称的密钥。
    * description  凭据的描述信息。  约束：2048字节。
    * secretBinary  二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。 当secret_type为RDS时。凭据值格式为： \"{'users':[{'name':'','password':''}]}\" 其中name为RDS实例账号名称，password为RDS实例账号口令
    * secretString  文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。
    * secretType  凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
    * autoRotation  自动轮转  取值：true 开启 ,false 关闭 (默认)
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * rotationConfig  轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS时，配置为{\"rds_instance_id\":\"\",\"Secret_sub_type\":\"\"}  说明：当secret_type为RDS时，必须填写该值  rds_instance_id为RDS的实例ID,Secret_sub_type为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对RDS账号的引用。
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    * enterpriseProjectId  该参数针对企业用户使用。如果您是企业用户，且已创建企业项目，则请从下拉列表中为密钥选择需要绑定的企业项目，默认项目为“default”。 未开通企业管理的用户页面则没有“企业项目”参数项，无需进行配置。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'kmsKeyId' => 'string',
            'description' => 'string',
            'secretBinary' => 'string',
            'secretString' => 'string',
            'secretType' => 'string',
            'autoRotation' => 'bool',
            'rotationPeriod' => 'string',
            'rotationConfig' => 'string',
            'eventSubscriptions' => 'string[]',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  待创建凭据的名称。  约束：取值范围为1到64个字符，满足正则匹配“^[a-zA-Z0-9_-]{1,64}$”。
    * kmsKeyId  用于加密保护凭据值的KMS主密钥ID，如果您未指定此参数，凭据管理服务将默认使用名为csms/default的默认主密钥，用于加密您账号在本项目中创建的凭据值。如果用户账号下不存在该名称的主密钥，则凭据管理服务自动为您创建该名称的密钥。
    * description  凭据的描述信息。  约束：2048字节。
    * secretBinary  二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。 当secret_type为RDS时。凭据值格式为： \"{'users':[{'name':'','password':''}]}\" 其中name为RDS实例账号名称，password为RDS实例账号口令
    * secretString  文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。
    * secretType  凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
    * autoRotation  自动轮转  取值：true 开启 ,false 关闭 (默认)
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * rotationConfig  轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS时，配置为{\"rds_instance_id\":\"\",\"Secret_sub_type\":\"\"}  说明：当secret_type为RDS时，必须填写该值  rds_instance_id为RDS的实例ID,Secret_sub_type为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对RDS账号的引用。
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    * enterpriseProjectId  该参数针对企业用户使用。如果您是企业用户，且已创建企业项目，则请从下拉列表中为密钥选择需要绑定的企业项目，默认项目为“default”。 未开通企业管理的用户页面则没有“企业项目”参数项，无需进行配置。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'kmsKeyId' => null,
        'description' => null,
        'secretBinary' => null,
        'secretString' => null,
        'secretType' => null,
        'autoRotation' => null,
        'rotationPeriod' => null,
        'rotationConfig' => null,
        'eventSubscriptions' => null,
        'enterpriseProjectId' => null
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
    * name  待创建凭据的名称。  约束：取值范围为1到64个字符，满足正则匹配“^[a-zA-Z0-9_-]{1,64}$”。
    * kmsKeyId  用于加密保护凭据值的KMS主密钥ID，如果您未指定此参数，凭据管理服务将默认使用名为csms/default的默认主密钥，用于加密您账号在本项目中创建的凭据值。如果用户账号下不存在该名称的主密钥，则凭据管理服务自动为您创建该名称的密钥。
    * description  凭据的描述信息。  约束：2048字节。
    * secretBinary  二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。 当secret_type为RDS时。凭据值格式为： \"{'users':[{'name':'','password':''}]}\" 其中name为RDS实例账号名称，password为RDS实例账号口令
    * secretString  文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。
    * secretType  凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
    * autoRotation  自动轮转  取值：true 开启 ,false 关闭 (默认)
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * rotationConfig  轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS时，配置为{\"rds_instance_id\":\"\",\"Secret_sub_type\":\"\"}  说明：当secret_type为RDS时，必须填写该值  rds_instance_id为RDS的实例ID,Secret_sub_type为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对RDS账号的引用。
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    * enterpriseProjectId  该参数针对企业用户使用。如果您是企业用户，且已创建企业项目，则请从下拉列表中为密钥选择需要绑定的企业项目，默认项目为“default”。 未开通企业管理的用户页面则没有“企业项目”参数项，无需进行配置。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'kmsKeyId' => 'kms_key_id',
            'description' => 'description',
            'secretBinary' => 'secret_binary',
            'secretString' => 'secret_string',
            'secretType' => 'secret_type',
            'autoRotation' => 'auto_rotation',
            'rotationPeriod' => 'rotation_period',
            'rotationConfig' => 'rotation_config',
            'eventSubscriptions' => 'event_subscriptions',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  待创建凭据的名称。  约束：取值范围为1到64个字符，满足正则匹配“^[a-zA-Z0-9_-]{1,64}$”。
    * kmsKeyId  用于加密保护凭据值的KMS主密钥ID，如果您未指定此参数，凭据管理服务将默认使用名为csms/default的默认主密钥，用于加密您账号在本项目中创建的凭据值。如果用户账号下不存在该名称的主密钥，则凭据管理服务自动为您创建该名称的密钥。
    * description  凭据的描述信息。  约束：2048字节。
    * secretBinary  二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。 当secret_type为RDS时。凭据值格式为： \"{'users':[{'name':'','password':''}]}\" 其中name为RDS实例账号名称，password为RDS实例账号口令
    * secretString  文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。
    * secretType  凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
    * autoRotation  自动轮转  取值：true 开启 ,false 关闭 (默认)
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * rotationConfig  轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS时，配置为{\"rds_instance_id\":\"\",\"Secret_sub_type\":\"\"}  说明：当secret_type为RDS时，必须填写该值  rds_instance_id为RDS的实例ID,Secret_sub_type为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对RDS账号的引用。
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    * enterpriseProjectId  该参数针对企业用户使用。如果您是企业用户，且已创建企业项目，则请从下拉列表中为密钥选择需要绑定的企业项目，默认项目为“default”。 未开通企业管理的用户页面则没有“企业项目”参数项，无需进行配置。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'kmsKeyId' => 'setKmsKeyId',
            'description' => 'setDescription',
            'secretBinary' => 'setSecretBinary',
            'secretString' => 'setSecretString',
            'secretType' => 'setSecretType',
            'autoRotation' => 'setAutoRotation',
            'rotationPeriod' => 'setRotationPeriod',
            'rotationConfig' => 'setRotationConfig',
            'eventSubscriptions' => 'setEventSubscriptions',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  待创建凭据的名称。  约束：取值范围为1到64个字符，满足正则匹配“^[a-zA-Z0-9_-]{1,64}$”。
    * kmsKeyId  用于加密保护凭据值的KMS主密钥ID，如果您未指定此参数，凭据管理服务将默认使用名为csms/default的默认主密钥，用于加密您账号在本项目中创建的凭据值。如果用户账号下不存在该名称的主密钥，则凭据管理服务自动为您创建该名称的密钥。
    * description  凭据的描述信息。  约束：2048字节。
    * secretBinary  二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。 当secret_type为RDS时。凭据值格式为： \"{'users':[{'name':'','password':''}]}\" 其中name为RDS实例账号名称，password为RDS实例账号口令
    * secretString  文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。
    * secretType  凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
    * autoRotation  自动轮转  取值：true 开启 ,false 关闭 (默认)
    * rotationPeriod  轮转周期  约束：6小时-8,760小时 （365天）  类型：Integer[unit] ，Integer表示时间长度 。unit表示时间单位，d（天）、h（小时）、m（分钟）、s（秒）。例如 1d 表示一天，24h也表示一天  说明：当开启自动轮转时，必须填写该值
    * rotationConfig  轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS时，配置为{\"rds_instance_id\":\"\",\"Secret_sub_type\":\"\"}  说明：当secret_type为RDS时，必须填写该值  rds_instance_id为RDS的实例ID,Secret_sub_type为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对RDS账号的引用。
    * eventSubscriptions  凭据订阅的事件列表，当前最大可订阅一个事件。当事件包含的基础事件触发时，通知消息将发送到事件对应的通知主题。
    * enterpriseProjectId  该参数针对企业用户使用。如果您是企业用户，且已创建企业项目，则请从下拉列表中为密钥选择需要绑定的企业项目，默认项目为“default”。 未开通企业管理的用户页面则没有“企业项目”参数项，无需进行配置。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'kmsKeyId' => 'getKmsKeyId',
            'description' => 'getDescription',
            'secretBinary' => 'getSecretBinary',
            'secretString' => 'getSecretString',
            'secretType' => 'getSecretType',
            'autoRotation' => 'getAutoRotation',
            'rotationPeriod' => 'getRotationPeriod',
            'rotationConfig' => 'getRotationConfig',
            'eventSubscriptions' => 'getEventSubscriptions',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['kmsKeyId'] = isset($data['kmsKeyId']) ? $data['kmsKeyId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['secretBinary'] = isset($data['secretBinary']) ? $data['secretBinary'] : null;
        $this->container['secretString'] = isset($data['secretString']) ? $data['secretString'] : null;
        $this->container['secretType'] = isset($data['secretType']) ? $data['secretType'] : null;
        $this->container['autoRotation'] = isset($data['autoRotation']) ? $data['autoRotation'] : null;
        $this->container['rotationPeriod'] = isset($data['rotationPeriod']) ? $data['rotationPeriod'] : null;
        $this->container['rotationConfig'] = isset($data['rotationConfig']) ? $data['rotationConfig'] : null;
        $this->container['eventSubscriptions'] = isset($data['eventSubscriptions']) ? $data['eventSubscriptions'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
            if (!preg_match("/^[a-zA-Z0-9_-]{1,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9_-]{1,64}$/.";
            }
            if (!is_null($this->container['kmsKeyId']) && !preg_match("/^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/", $this->container['kmsKeyId'])) {
                $invalidProperties[] = "invalid value for 'kmsKeyId', must be conform to the pattern /^[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2048)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['secretBinary']) && (mb_strlen($this->container['secretBinary']) > 32768)) {
                $invalidProperties[] = "invalid value for 'secretBinary', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['secretBinary']) && (mb_strlen($this->container['secretBinary']) < 0)) {
                $invalidProperties[] = "invalid value for 'secretBinary', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['secretString']) && (mb_strlen($this->container['secretString']) > 32768)) {
                $invalidProperties[] = "invalid value for 'secretString', the character length must be smaller than or equal to 32768.";
            }
            if (!is_null($this->container['secretString']) && (mb_strlen($this->container['secretString']) < 0)) {
                $invalidProperties[] = "invalid value for 'secretString', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['secretType']) && (mb_strlen($this->container['secretType']) > 20)) {
                $invalidProperties[] = "invalid value for 'secretType', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['secretType']) && (mb_strlen($this->container['secretType']) < 6)) {
                $invalidProperties[] = "invalid value for 'secretType', the character length must be bigger than or equal to 6.";
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
    * Gets name
    *  待创建凭据的名称。  约束：取值范围为1到64个字符，满足正则匹配“^[a-zA-Z0-9_-]{1,64}$”。
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
    * @param string $name 待创建凭据的名称。  约束：取值范围为1到64个字符，满足正则匹配“^[a-zA-Z0-9_-]{1,64}$”。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets kmsKeyId
    *  用于加密保护凭据值的KMS主密钥ID，如果您未指定此参数，凭据管理服务将默认使用名为csms/default的默认主密钥，用于加密您账号在本项目中创建的凭据值。如果用户账号下不存在该名称的主密钥，则凭据管理服务自动为您创建该名称的密钥。
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
    * @param string|null $kmsKeyId 用于加密保护凭据值的KMS主密钥ID，如果您未指定此参数，凭据管理服务将默认使用名为csms/default的默认主密钥，用于加密您账号在本项目中创建的凭据值。如果用户账号下不存在该名称的主密钥，则凭据管理服务自动为您创建该名称的密钥。
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
    *  凭据的描述信息。  约束：2048字节。
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
    * @param string|null $description 凭据的描述信息。  约束：2048字节。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets secretBinary
    *  二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。 当secret_type为RDS时。凭据值格式为： \"{'users':[{'name':'','password':''}]}\" 其中name为RDS实例账号名称，password为RDS实例账号口令
    *
    * @return string|null
    */
    public function getSecretBinary()
    {
        return $this->container['secretBinary'];
    }

    /**
    * Sets secretBinary
    *
    * @param string|null $secretBinary 二进制类型凭据在base64编码后的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  类型：base64编码的二进制数据对象。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。 当secret_type为RDS时。凭据值格式为： \"{'users':[{'name':'','password':''}]}\" 其中name为RDS实例账号名称，password为RDS实例账号口令
    *
    * @return $this
    */
    public function setSecretBinary($secretBinary)
    {
        $this->container['secretBinary'] = $secretBinary;
        return $this;
    }

    /**
    * Gets secretString
    *  文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。
    *
    * @return string|null
    */
    public function getSecretString()
    {
        return $this->container['secretString'];
    }

    /**
    * Sets secretString
    *
    * @param string|null $secretString 文本类型凭据的明文，凭据管理服务将其加密后，存入凭据的初始版本中。  约束：secret_binary和secret_string必须且只能设置一个，最大32K。
    *
    * @return $this
    */
    public function setSecretString($secretString)
    {
        $this->container['secretString'] = $secretString;
        return $this;
    }

    /**
    * Gets secretType
    *  凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
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
    * @param string|null $secretType 凭据类型  取值 ： COMMON ：通用凭据(默认)。用于应用系统中的各种敏感信息储存。         RDS ：RDS凭据 。专门针对RDS的凭据，用于存储RDS的账号信息。
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
    *  自动轮转  取值：true 开启 ,false 关闭 (默认)
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
    * @param bool|null $autoRotation 自动轮转  取值：true 开启 ,false 关闭 (默认)
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
    *  轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS时，配置为{\"rds_instance_id\":\"\",\"Secret_sub_type\":\"\"}  说明：当secret_type为RDS时，必须填写该值  rds_instance_id为RDS的实例ID,Secret_sub_type为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对RDS账号的引用。
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
    * @param string|null $rotationConfig 轮转配置  约束：范围不超过1024个字符。  当secret_type为RDS时，配置为{\"rds_instance_id\":\"\",\"Secret_sub_type\":\"\"}  说明：当secret_type为RDS时，必须填写该值  rds_instance_id为RDS的实例ID,Secret_sub_type为轮转子类型，取值为：SingleUser，MultiUser。  SingleUser：指定轮转类型为单用户模式轮转，每次轮转将指定账号重置为新的口令。  MultiUser：指定轮转类型为双用户模式轮转，SYSCURRENT和SYSPREVIOUS分别引用其中一个账号。凭据轮转时，SYSPREVIOUS引用的账号口令会被重置为新的随机口令，随后凭据交换SYSCURRENT和SYSPREVIOUS对RDS账号的引用。
    *
    * @return $this
    */
    public function setRotationConfig($rotationConfig)
    {
        $this->container['rotationConfig'] = $rotationConfig;
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
    *  该参数针对企业用户使用。如果您是企业用户，且已创建企业项目，则请从下拉列表中为密钥选择需要绑定的企业项目，默认项目为“default”。 未开通企业管理的用户页面则没有“企业项目”参数项，无需进行配置。
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
    * @param string|null $enterpriseProjectId 该参数针对企业用户使用。如果您是企业用户，且已创建企业项目，则请从下拉列表中为密钥选择需要绑定的企业项目，默认项目为“default”。 未开通企业管理的用户页面则没有“企业项目”参数项，无需进行配置。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

