<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyInstanceBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyInstanceBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名称  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
    * description  实例的描述信息 长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * port  修改Redis实例的访问端口。端口范围为1~65535的任意数字。 修改后，Redis实例的所有连接将会中断，业务需要重新连接Redis的新端口。 只有Redis4.0和Redis5.0支持修改端口号，Redis3.0[和Memcached](tag:hc,hk,ocb,sbc,tm,ctc,cmc)实例不支持。
    * renameCommands  renameCommands
    * maintainBegin  '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。
    * maintainEnd  '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空。
    * securityGroupId  安全组ID  可从虚拟私有云服务的控制台界面或者API接口查询得到。  约束：只有Redis 3.0支持
    * instanceBackupPolicy  instanceBackupPolicy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'port' => 'int',
            'renameCommands' => '\HuaweiCloud\SDK\Dcs\V2\Model\RenameCommandResp',
            'maintainBegin' => 'string',
            'maintainEnd' => 'string',
            'securityGroupId' => 'string',
            'instanceBackupPolicy' => '\HuaweiCloud\SDK\Dcs\V2\Model\BackupPolicy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名称  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
    * description  实例的描述信息 长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * port  修改Redis实例的访问端口。端口范围为1~65535的任意数字。 修改后，Redis实例的所有连接将会中断，业务需要重新连接Redis的新端口。 只有Redis4.0和Redis5.0支持修改端口号，Redis3.0[和Memcached](tag:hc,hk,ocb,sbc,tm,ctc,cmc)实例不支持。
    * renameCommands  renameCommands
    * maintainBegin  '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。
    * maintainEnd  '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空。
    * securityGroupId  安全组ID  可从虚拟私有云服务的控制台界面或者API接口查询得到。  约束：只有Redis 3.0支持
    * instanceBackupPolicy  instanceBackupPolicy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => 'string',
        'description' => 'string',
        'port' => 'int32',
        'renameCommands' => null,
        'maintainBegin' => 'string',
        'maintainEnd' => 'string',
        'securityGroupId' => null,
        'instanceBackupPolicy' => null
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
    * name  实例名称  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
    * description  实例的描述信息 长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * port  修改Redis实例的访问端口。端口范围为1~65535的任意数字。 修改后，Redis实例的所有连接将会中断，业务需要重新连接Redis的新端口。 只有Redis4.0和Redis5.0支持修改端口号，Redis3.0[和Memcached](tag:hc,hk,ocb,sbc,tm,ctc,cmc)实例不支持。
    * renameCommands  renameCommands
    * maintainBegin  '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。
    * maintainEnd  '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空。
    * securityGroupId  安全组ID  可从虚拟私有云服务的控制台界面或者API接口查询得到。  约束：只有Redis 3.0支持
    * instanceBackupPolicy  instanceBackupPolicy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'port' => 'port',
            'renameCommands' => 'rename_commands',
            'maintainBegin' => 'maintain_begin',
            'maintainEnd' => 'maintain_end',
            'securityGroupId' => 'security_group_id',
            'instanceBackupPolicy' => 'instance_backup_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名称  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
    * description  实例的描述信息 长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * port  修改Redis实例的访问端口。端口范围为1~65535的任意数字。 修改后，Redis实例的所有连接将会中断，业务需要重新连接Redis的新端口。 只有Redis4.0和Redis5.0支持修改端口号，Redis3.0[和Memcached](tag:hc,hk,ocb,sbc,tm,ctc,cmc)实例不支持。
    * renameCommands  renameCommands
    * maintainBegin  '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。
    * maintainEnd  '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空。
    * securityGroupId  安全组ID  可从虚拟私有云服务的控制台界面或者API接口查询得到。  约束：只有Redis 3.0支持
    * instanceBackupPolicy  instanceBackupPolicy
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'port' => 'setPort',
            'renameCommands' => 'setRenameCommands',
            'maintainBegin' => 'setMaintainBegin',
            'maintainEnd' => 'setMaintainEnd',
            'securityGroupId' => 'setSecurityGroupId',
            'instanceBackupPolicy' => 'setInstanceBackupPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名称  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
    * description  实例的描述信息 长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    * port  修改Redis实例的访问端口。端口范围为1~65535的任意数字。 修改后，Redis实例的所有连接将会中断，业务需要重新连接Redis的新端口。 只有Redis4.0和Redis5.0支持修改端口号，Redis3.0[和Memcached](tag:hc,hk,ocb,sbc,tm,ctc,cmc)实例不支持。
    * renameCommands  renameCommands
    * maintainBegin  '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。
    * maintainEnd  '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空。
    * securityGroupId  安全组ID  可从虚拟私有云服务的控制台界面或者API接口查询得到。  约束：只有Redis 3.0支持
    * instanceBackupPolicy  instanceBackupPolicy
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'port' => 'getPort',
            'renameCommands' => 'getRenameCommands',
            'maintainBegin' => 'getMaintainBegin',
            'maintainEnd' => 'getMaintainEnd',
            'securityGroupId' => 'getSecurityGroupId',
            'instanceBackupPolicy' => 'getInstanceBackupPolicy'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['renameCommands'] = isset($data['renameCommands']) ? $data['renameCommands'] : null;
        $this->container['maintainBegin'] = isset($data['maintainBegin']) ? $data['maintainBegin'] : null;
        $this->container['maintainEnd'] = isset($data['maintainEnd']) ? $data['maintainEnd'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['instanceBackupPolicy'] = isset($data['instanceBackupPolicy']) ? $data['instanceBackupPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 1)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 1.";
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
    *  实例名称  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
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
    * @param string|null $name 实例名称  由英文字符开头，只能由英文字母、数字、中划线和下划线组成。  创建单个实例时，名称长度为4到64位的字符串。批量创建实例时，名称长度为4到56位的字符串，且实例名称格式为“自定义名称-n”，其中n从000开始，依次递增。例如，批量创建两个实例，自定义名称为dcs_demo，则两个实例的名称为dcs_demo-000和dcs_demo-001。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  实例的描述信息 长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
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
    * @param string|null $description 实例的描述信息 长度不超过1024的字符串。 > \\与\"在json报文中属于特殊字符，如果参数值中需要显示\\或者\"字符，请在字符前增加转义字符\\，比如\\\\或者\\\"。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets port
    *  修改Redis实例的访问端口。端口范围为1~65535的任意数字。 修改后，Redis实例的所有连接将会中断，业务需要重新连接Redis的新端口。 只有Redis4.0和Redis5.0支持修改端口号，Redis3.0[和Memcached](tag:hc,hk,ocb,sbc,tm,ctc,cmc)实例不支持。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 修改Redis实例的访问端口。端口范围为1~65535的任意数字。 修改后，Redis实例的所有连接将会中断，业务需要重新连接Redis的新端口。 只有Redis4.0和Redis5.0支持修改端口号，Redis3.0[和Memcached](tag:hc,hk,ocb,sbc,tm,ctc,cmc)实例不支持。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets renameCommands
    *  renameCommands
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\RenameCommandResp|null
    */
    public function getRenameCommands()
    {
        return $this->container['renameCommands'];
    }

    /**
    * Sets renameCommands
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\RenameCommandResp|null $renameCommands renameCommands
    *
    * @return $this
    */
    public function setRenameCommands($renameCommands)
    {
        $this->container['renameCommands'] = $renameCommands;
        return $this;
    }

    /**
    * Gets maintainBegin
    *  '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。
    *
    * @return string|null
    */
    public function getMaintainBegin()
    {
        return $this->container['maintainBegin'];
    }

    /**
    * Sets maintainBegin
    *
    * @param string|null $maintainBegin '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 开始时间必须为22:00:00、02:00:00、06:00:00、10:00:00、14:00:00和18:00:00。 - 该参数不能单独为空，若该值为空，则结束时间也为空。
    *
    * @return $this
    */
    public function setMaintainBegin($maintainBegin)
    {
        $this->container['maintainBegin'] = $maintainBegin;
        return $this;
    }

    /**
    * Gets maintainEnd
    *  '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空。
    *
    * @return string|null
    */
    public function getMaintainEnd()
    {
        return $this->container['maintainEnd'];
    }

    /**
    * Sets maintainEnd
    *
    * @param string|null $maintainEnd '维护时间窗开始时间，为UTC时间，格式为HH:mm:ss。' - 维护时间窗开始和结束时间必须为指定的时间段，可参考[查询维护时间窗时间段](https://support.huaweicloud.com/api-dcs/ListMaintenanceWindows.html)获取。 - 结束时间在开始时间基础上加四个小时，即当开始时间为22:00:00时，结束时间为02:00:00。 - 该参数不能单独为空，若该值为空，则开始时间也为空。
    *
    * @return $this
    */
    public function setMaintainEnd($maintainEnd)
    {
        $this->container['maintainEnd'] = $maintainEnd;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  安全组ID  可从虚拟私有云服务的控制台界面或者API接口查询得到。  约束：只有Redis 3.0支持
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 安全组ID  可从虚拟私有云服务的控制台界面或者API接口查询得到。  约束：只有Redis 3.0支持
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets instanceBackupPolicy
    *  instanceBackupPolicy
    *
    * @return \HuaweiCloud\SDK\Dcs\V2\Model\BackupPolicy|null
    */
    public function getInstanceBackupPolicy()
    {
        return $this->container['instanceBackupPolicy'];
    }

    /**
    * Sets instanceBackupPolicy
    *
    * @param \HuaweiCloud\SDK\Dcs\V2\Model\BackupPolicy|null $instanceBackupPolicy instanceBackupPolicy
    *
    * @return $this
    */
    public function setInstanceBackupPolicy($instanceBackupPolicy)
    {
        $this->container['instanceBackupPolicy'] = $instanceBackupPolicy;
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

