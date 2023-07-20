<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EngineFlavorData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EngineFlavorData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * specCode  资源规格编码。例如：rds.mysql.m1.xlarge.rr。  更多规格说明请参考数据库实例规格。  “rds”代表RDS产品。 “mysql”代表数据库引擎。 “m1.xlarge”代表性能规格，为高内存类型。 “rr”表示只读实例（“.ha”表示主备实例）。 “rha.rr”表示高可用只读实例，规格编码示例：rds.mysql.n1.large.4.rha.rr。 具有公测权限的用户才可选择高可用，您可联系华为云客服人员申请。 高可用只读功能介绍请参见高可用只读简介。
    * isIpv6Supported  是否支持ipv6。
    * typeCode  资源类型
    * azStatus  规格所在az的状态，包含以下状态： normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。 abandon：未启用
    * groupType  性能规格，包含以下状态： normal：通用增强型。 normal2：通用增强Ⅱ型。 armFlavors：鲲鹏通用增强型。 dedicicateNormal（dedicatedNormalLocalssd）：x86独享型。 armLocalssd：鲲鹏通用型。 normalLocalssd：x86通用型。 general：通用型。 dedicated 对于MySQL引擎：独享型。 对于PostgreSQL和SQL Server引擎：独享型，仅云盘SSD支持。 rapid 对于MySQL引擎：独享型（已下线）。 对于PostgreSQL和SQL Server引擎：独享型，仅极速型SSD支持。 bigmem：超大内存型。 highPerformancePrivilegeEdition：超高IO 尊享版
    * maxConnection  最大连接数
    * tps  数据库每秒执行的事务数，每个事务中包含18条SQL语句。
    * qps  数据库每秒执行的SQL数，包含insert、select、update、delete等。
    * minVolumeSize  最小磁盘容量，单位G
    * maxVolumeSize  最大磁盘容量，单位G
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vcpus' => 'string',
            'ram' => 'string',
            'specCode' => 'string',
            'isIpv6Supported' => 'bool',
            'typeCode' => 'string',
            'azStatus' => 'map[string,string]',
            'groupType' => 'string',
            'maxConnection' => 'string',
            'tps' => 'string',
            'qps' => 'string',
            'minVolumeSize' => 'string',
            'maxVolumeSize' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * specCode  资源规格编码。例如：rds.mysql.m1.xlarge.rr。  更多规格说明请参考数据库实例规格。  “rds”代表RDS产品。 “mysql”代表数据库引擎。 “m1.xlarge”代表性能规格，为高内存类型。 “rr”表示只读实例（“.ha”表示主备实例）。 “rha.rr”表示高可用只读实例，规格编码示例：rds.mysql.n1.large.4.rha.rr。 具有公测权限的用户才可选择高可用，您可联系华为云客服人员申请。 高可用只读功能介绍请参见高可用只读简介。
    * isIpv6Supported  是否支持ipv6。
    * typeCode  资源类型
    * azStatus  规格所在az的状态，包含以下状态： normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。 abandon：未启用
    * groupType  性能规格，包含以下状态： normal：通用增强型。 normal2：通用增强Ⅱ型。 armFlavors：鲲鹏通用增强型。 dedicicateNormal（dedicatedNormalLocalssd）：x86独享型。 armLocalssd：鲲鹏通用型。 normalLocalssd：x86通用型。 general：通用型。 dedicated 对于MySQL引擎：独享型。 对于PostgreSQL和SQL Server引擎：独享型，仅云盘SSD支持。 rapid 对于MySQL引擎：独享型（已下线）。 对于PostgreSQL和SQL Server引擎：独享型，仅极速型SSD支持。 bigmem：超大内存型。 highPerformancePrivilegeEdition：超高IO 尊享版
    * maxConnection  最大连接数
    * tps  数据库每秒执行的事务数，每个事务中包含18条SQL语句。
    * qps  数据库每秒执行的SQL数，包含insert、select、update、delete等。
    * minVolumeSize  最小磁盘容量，单位G
    * maxVolumeSize  最大磁盘容量，单位G
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vcpus' => null,
        'ram' => null,
        'specCode' => null,
        'isIpv6Supported' => null,
        'typeCode' => null,
        'azStatus' => null,
        'groupType' => null,
        'maxConnection' => null,
        'tps' => null,
        'qps' => null,
        'minVolumeSize' => null,
        'maxVolumeSize' => null
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
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * specCode  资源规格编码。例如：rds.mysql.m1.xlarge.rr。  更多规格说明请参考数据库实例规格。  “rds”代表RDS产品。 “mysql”代表数据库引擎。 “m1.xlarge”代表性能规格，为高内存类型。 “rr”表示只读实例（“.ha”表示主备实例）。 “rha.rr”表示高可用只读实例，规格编码示例：rds.mysql.n1.large.4.rha.rr。 具有公测权限的用户才可选择高可用，您可联系华为云客服人员申请。 高可用只读功能介绍请参见高可用只读简介。
    * isIpv6Supported  是否支持ipv6。
    * typeCode  资源类型
    * azStatus  规格所在az的状态，包含以下状态： normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。 abandon：未启用
    * groupType  性能规格，包含以下状态： normal：通用增强型。 normal2：通用增强Ⅱ型。 armFlavors：鲲鹏通用增强型。 dedicicateNormal（dedicatedNormalLocalssd）：x86独享型。 armLocalssd：鲲鹏通用型。 normalLocalssd：x86通用型。 general：通用型。 dedicated 对于MySQL引擎：独享型。 对于PostgreSQL和SQL Server引擎：独享型，仅云盘SSD支持。 rapid 对于MySQL引擎：独享型（已下线）。 对于PostgreSQL和SQL Server引擎：独享型，仅极速型SSD支持。 bigmem：超大内存型。 highPerformancePrivilegeEdition：超高IO 尊享版
    * maxConnection  最大连接数
    * tps  数据库每秒执行的事务数，每个事务中包含18条SQL语句。
    * qps  数据库每秒执行的SQL数，包含insert、select、update、delete等。
    * minVolumeSize  最小磁盘容量，单位G
    * maxVolumeSize  最大磁盘容量，单位G
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'specCode' => 'spec_code',
            'isIpv6Supported' => 'is_ipv6_supported',
            'typeCode' => 'type_code',
            'azStatus' => 'az_status',
            'groupType' => 'group_type',
            'maxConnection' => 'max_connection',
            'tps' => 'tps',
            'qps' => 'qps',
            'minVolumeSize' => 'min_volume_size',
            'maxVolumeSize' => 'max_volume_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * specCode  资源规格编码。例如：rds.mysql.m1.xlarge.rr。  更多规格说明请参考数据库实例规格。  “rds”代表RDS产品。 “mysql”代表数据库引擎。 “m1.xlarge”代表性能规格，为高内存类型。 “rr”表示只读实例（“.ha”表示主备实例）。 “rha.rr”表示高可用只读实例，规格编码示例：rds.mysql.n1.large.4.rha.rr。 具有公测权限的用户才可选择高可用，您可联系华为云客服人员申请。 高可用只读功能介绍请参见高可用只读简介。
    * isIpv6Supported  是否支持ipv6。
    * typeCode  资源类型
    * azStatus  规格所在az的状态，包含以下状态： normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。 abandon：未启用
    * groupType  性能规格，包含以下状态： normal：通用增强型。 normal2：通用增强Ⅱ型。 armFlavors：鲲鹏通用增强型。 dedicicateNormal（dedicatedNormalLocalssd）：x86独享型。 armLocalssd：鲲鹏通用型。 normalLocalssd：x86通用型。 general：通用型。 dedicated 对于MySQL引擎：独享型。 对于PostgreSQL和SQL Server引擎：独享型，仅云盘SSD支持。 rapid 对于MySQL引擎：独享型（已下线）。 对于PostgreSQL和SQL Server引擎：独享型，仅极速型SSD支持。 bigmem：超大内存型。 highPerformancePrivilegeEdition：超高IO 尊享版
    * maxConnection  最大连接数
    * tps  数据库每秒执行的事务数，每个事务中包含18条SQL语句。
    * qps  数据库每秒执行的SQL数，包含insert、select、update、delete等。
    * minVolumeSize  最小磁盘容量，单位G
    * maxVolumeSize  最大磁盘容量，单位G
    *
    * @var string[]
    */
    protected static $setters = [
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'specCode' => 'setSpecCode',
            'isIpv6Supported' => 'setIsIpv6Supported',
            'typeCode' => 'setTypeCode',
            'azStatus' => 'setAzStatus',
            'groupType' => 'setGroupType',
            'maxConnection' => 'setMaxConnection',
            'tps' => 'setTps',
            'qps' => 'setQps',
            'minVolumeSize' => 'setMinVolumeSize',
            'maxVolumeSize' => 'setMaxVolumeSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vcpus  CPU大小。例如：1表示1U。
    * ram  内存大小，单位为GB。
    * specCode  资源规格编码。例如：rds.mysql.m1.xlarge.rr。  更多规格说明请参考数据库实例规格。  “rds”代表RDS产品。 “mysql”代表数据库引擎。 “m1.xlarge”代表性能规格，为高内存类型。 “rr”表示只读实例（“.ha”表示主备实例）。 “rha.rr”表示高可用只读实例，规格编码示例：rds.mysql.n1.large.4.rha.rr。 具有公测权限的用户才可选择高可用，您可联系华为云客服人员申请。 高可用只读功能介绍请参见高可用只读简介。
    * isIpv6Supported  是否支持ipv6。
    * typeCode  资源类型
    * azStatus  规格所在az的状态，包含以下状态： normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。 abandon：未启用
    * groupType  性能规格，包含以下状态： normal：通用增强型。 normal2：通用增强Ⅱ型。 armFlavors：鲲鹏通用增强型。 dedicicateNormal（dedicatedNormalLocalssd）：x86独享型。 armLocalssd：鲲鹏通用型。 normalLocalssd：x86通用型。 general：通用型。 dedicated 对于MySQL引擎：独享型。 对于PostgreSQL和SQL Server引擎：独享型，仅云盘SSD支持。 rapid 对于MySQL引擎：独享型（已下线）。 对于PostgreSQL和SQL Server引擎：独享型，仅极速型SSD支持。 bigmem：超大内存型。 highPerformancePrivilegeEdition：超高IO 尊享版
    * maxConnection  最大连接数
    * tps  数据库每秒执行的事务数，每个事务中包含18条SQL语句。
    * qps  数据库每秒执行的SQL数，包含insert、select、update、delete等。
    * minVolumeSize  最小磁盘容量，单位G
    * maxVolumeSize  最大磁盘容量，单位G
    *
    * @var string[]
    */
    protected static $getters = [
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'specCode' => 'getSpecCode',
            'isIpv6Supported' => 'getIsIpv6Supported',
            'typeCode' => 'getTypeCode',
            'azStatus' => 'getAzStatus',
            'groupType' => 'getGroupType',
            'maxConnection' => 'getMaxConnection',
            'tps' => 'getTps',
            'qps' => 'getQps',
            'minVolumeSize' => 'getMinVolumeSize',
            'maxVolumeSize' => 'getMaxVolumeSize'
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
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['isIpv6Supported'] = isset($data['isIpv6Supported']) ? $data['isIpv6Supported'] : null;
        $this->container['typeCode'] = isset($data['typeCode']) ? $data['typeCode'] : null;
        $this->container['azStatus'] = isset($data['azStatus']) ? $data['azStatus'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['maxConnection'] = isset($data['maxConnection']) ? $data['maxConnection'] : null;
        $this->container['tps'] = isset($data['tps']) ? $data['tps'] : null;
        $this->container['qps'] = isset($data['qps']) ? $data['qps'] : null;
        $this->container['minVolumeSize'] = isset($data['minVolumeSize']) ? $data['minVolumeSize'] : null;
        $this->container['maxVolumeSize'] = isset($data['maxVolumeSize']) ? $data['maxVolumeSize'] : null;
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
    * Gets vcpus
    *  CPU大小。例如：1表示1U。
    *
    * @return string|null
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string|null $vcpus CPU大小。例如：1表示1U。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets ram
    *  内存大小，单位为GB。
    *
    * @return string|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string|null $ram 内存大小，单位为GB。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets specCode
    *  资源规格编码。例如：rds.mysql.m1.xlarge.rr。  更多规格说明请参考数据库实例规格。  “rds”代表RDS产品。 “mysql”代表数据库引擎。 “m1.xlarge”代表性能规格，为高内存类型。 “rr”表示只读实例（“.ha”表示主备实例）。 “rha.rr”表示高可用只读实例，规格编码示例：rds.mysql.n1.large.4.rha.rr。 具有公测权限的用户才可选择高可用，您可联系华为云客服人员申请。 高可用只读功能介绍请参见高可用只读简介。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 资源规格编码。例如：rds.mysql.m1.xlarge.rr。  更多规格说明请参考数据库实例规格。  “rds”代表RDS产品。 “mysql”代表数据库引擎。 “m1.xlarge”代表性能规格，为高内存类型。 “rr”表示只读实例（“.ha”表示主备实例）。 “rha.rr”表示高可用只读实例，规格编码示例：rds.mysql.n1.large.4.rha.rr。 具有公测权限的用户才可选择高可用，您可联系华为云客服人员申请。 高可用只读功能介绍请参见高可用只读简介。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets isIpv6Supported
    *  是否支持ipv6。
    *
    * @return bool|null
    */
    public function getIsIpv6Supported()
    {
        return $this->container['isIpv6Supported'];
    }

    /**
    * Sets isIpv6Supported
    *
    * @param bool|null $isIpv6Supported 是否支持ipv6。
    *
    * @return $this
    */
    public function setIsIpv6Supported($isIpv6Supported)
    {
        $this->container['isIpv6Supported'] = $isIpv6Supported;
        return $this;
    }

    /**
    * Gets typeCode
    *  资源类型
    *
    * @return string|null
    */
    public function getTypeCode()
    {
        return $this->container['typeCode'];
    }

    /**
    * Sets typeCode
    *
    * @param string|null $typeCode 资源类型
    *
    * @return $this
    */
    public function setTypeCode($typeCode)
    {
        $this->container['typeCode'] = $typeCode;
        return $this;
    }

    /**
    * Gets azStatus
    *  规格所在az的状态，包含以下状态： normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。 abandon：未启用
    *
    * @return map[string,string]|null
    */
    public function getAzStatus()
    {
        return $this->container['azStatus'];
    }

    /**
    * Sets azStatus
    *
    * @param map[string,string]|null $azStatus 规格所在az的状态，包含以下状态： normal：在售。 unsupported：暂不支持该规格。 sellout：售罄。 abandon：未启用
    *
    * @return $this
    */
    public function setAzStatus($azStatus)
    {
        $this->container['azStatus'] = $azStatus;
        return $this;
    }

    /**
    * Gets groupType
    *  性能规格，包含以下状态： normal：通用增强型。 normal2：通用增强Ⅱ型。 armFlavors：鲲鹏通用增强型。 dedicicateNormal（dedicatedNormalLocalssd）：x86独享型。 armLocalssd：鲲鹏通用型。 normalLocalssd：x86通用型。 general：通用型。 dedicated 对于MySQL引擎：独享型。 对于PostgreSQL和SQL Server引擎：独享型，仅云盘SSD支持。 rapid 对于MySQL引擎：独享型（已下线）。 对于PostgreSQL和SQL Server引擎：独享型，仅极速型SSD支持。 bigmem：超大内存型。 highPerformancePrivilegeEdition：超高IO 尊享版
    *
    * @return string|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param string|null $groupType 性能规格，包含以下状态： normal：通用增强型。 normal2：通用增强Ⅱ型。 armFlavors：鲲鹏通用增强型。 dedicicateNormal（dedicatedNormalLocalssd）：x86独享型。 armLocalssd：鲲鹏通用型。 normalLocalssd：x86通用型。 general：通用型。 dedicated 对于MySQL引擎：独享型。 对于PostgreSQL和SQL Server引擎：独享型，仅云盘SSD支持。 rapid 对于MySQL引擎：独享型（已下线）。 对于PostgreSQL和SQL Server引擎：独享型，仅极速型SSD支持。 bigmem：超大内存型。 highPerformancePrivilegeEdition：超高IO 尊享版
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets maxConnection
    *  最大连接数
    *
    * @return string|null
    */
    public function getMaxConnection()
    {
        return $this->container['maxConnection'];
    }

    /**
    * Sets maxConnection
    *
    * @param string|null $maxConnection 最大连接数
    *
    * @return $this
    */
    public function setMaxConnection($maxConnection)
    {
        $this->container['maxConnection'] = $maxConnection;
        return $this;
    }

    /**
    * Gets tps
    *  数据库每秒执行的事务数，每个事务中包含18条SQL语句。
    *
    * @return string|null
    */
    public function getTps()
    {
        return $this->container['tps'];
    }

    /**
    * Sets tps
    *
    * @param string|null $tps 数据库每秒执行的事务数，每个事务中包含18条SQL语句。
    *
    * @return $this
    */
    public function setTps($tps)
    {
        $this->container['tps'] = $tps;
        return $this;
    }

    /**
    * Gets qps
    *  数据库每秒执行的SQL数，包含insert、select、update、delete等。
    *
    * @return string|null
    */
    public function getQps()
    {
        return $this->container['qps'];
    }

    /**
    * Sets qps
    *
    * @param string|null $qps 数据库每秒执行的SQL数，包含insert、select、update、delete等。
    *
    * @return $this
    */
    public function setQps($qps)
    {
        $this->container['qps'] = $qps;
        return $this;
    }

    /**
    * Gets minVolumeSize
    *  最小磁盘容量，单位G
    *
    * @return string|null
    */
    public function getMinVolumeSize()
    {
        return $this->container['minVolumeSize'];
    }

    /**
    * Sets minVolumeSize
    *
    * @param string|null $minVolumeSize 最小磁盘容量，单位G
    *
    * @return $this
    */
    public function setMinVolumeSize($minVolumeSize)
    {
        $this->container['minVolumeSize'] = $minVolumeSize;
        return $this;
    }

    /**
    * Gets maxVolumeSize
    *  最大磁盘容量，单位G
    *
    * @return string|null
    */
    public function getMaxVolumeSize()
    {
        return $this->container['maxVolumeSize'];
    }

    /**
    * Sets maxVolumeSize
    *
    * @param string|null $maxVolumeSize 最大磁盘容量，单位G
    *
    * @return $this
    */
    public function setMaxVolumeSize($maxVolumeSize)
    {
        $this->container['maxVolumeSize'] = $maxVolumeSize;
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

